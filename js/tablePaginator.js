class Paginator {
    constructor(
        data,
        renderTableFn,
        paginationContainerId,
        tableBodyId,
        itemsPerPage = 10
    ) {
        this.originalData = [...data];
        this.data = [...data];
        this.renderTableFn = renderTableFn;

        this.paginationContainerId = paginationContainerId;
        this.tableBodyId = tableBodyId;

        this.paginationContainer = document.getElementById(paginationContainerId);
        this.tableBody = document.getElementById(tableBodyId);

        this.itemsPerPage = itemsPerPage;
        this.currentPage = 1;
    }

    renderPage() {
        const start = (this.currentPage - 1) * this.itemsPerPage;
        const end = start + this.itemsPerPage;
        const paginatedData = this.data.slice(start, end);

        if (this.data.length === 0) {
            _showEmptyState({
                container: this.tableBodyId,
                message: "No Record found!!!",
            });
        } else {
            this.tableBody.innerHTML = this.renderTableFn(paginatedData, start);
        }
        this.renderPaginationControls();
    }

    renderPaginationControls() {
        const totalPages = Math.ceil(this.data.length / this.itemsPerPage);

        let paginationHtml = `<ul class="pagination-ul">`;

        // Previous
        paginationHtml += `
            <li>
                <button onclick="${this.getHandlerName()}(${this.currentPage - 1})"
                    ${this.currentPage === 1 || totalPages === 0 ? "disabled" : ""}>Prev</button>
            </li>`;

        const maxVisible = 1;
        let startPage = Math.max(2, this.currentPage - maxVisible);
        let endPage = Math.min(totalPages - 1, this.currentPage + maxVisible);

        // Always show first page
        if (totalPages > 0) {
            paginationHtml += `
                <li>
                    <button class="${this.currentPage === 1 ? "active" : ""}"
                        onclick="${this.getHandlerName()}(1)">1</button>
                </li>`;
        }

        // Ellipsis before middle pages
        if (startPage > 2) {
            paginationHtml += `<li><span>...</span></li>`;
        }

        // Middle pages
        for (let i = startPage; i <= endPage; i++) {
            paginationHtml += `
                <li>
                    <button class="${i === this.currentPage ? "active" : ""}"
                        onclick="${this.getHandlerName()}(${i})">${i}</button>
                </li>`;
        }

        // Ellipsis after middle pages
        if (endPage < totalPages - 1) {
            paginationHtml += `<li><span>...</span></li>`;
        }

        // Always show last page
        if (totalPages > 1) {
            paginationHtml += `
                <li>
                    <button class="${this.currentPage === totalPages ? "active" : ""}"
                        onclick="${this.getHandlerName()}(${totalPages})">${totalPages}</button>
                </li>`;
        }

        // Next
        paginationHtml += `
            <li>
                <button onclick="${this.getHandlerName()}(${this.currentPage + 1})"
                    ${this.currentPage === totalPages || totalPages === 0 ? "disabled" : ""}>Next</button>
            </li>`;

        paginationHtml += `</ul>`;

        this.paginationContainer.innerHTML = paginationHtml;
    }

    // Search through all records, not just the current page
    filterData(value) {
        value = value.trim().toLowerCase();
        if (value === "") {
            this.data = [...this.originalData];
        } else {
            this.data = this.originalData.filter(item =>
                Object.values(item).some(val =>
                    String(val ?? "").toLowerCase().includes(value)
                )
            );
        }
        this.currentPage = 1;
        this.renderPage();
    }

    changePage(page) {
        const totalPages = Math.ceil(this.data.length / this.itemsPerPage);
        if (page < 1 || page > totalPages) return;

        this.currentPage = page;
        this.renderPage();

        const scrollPosition = this.tableBody.getBoundingClientRect().top + window.scrollY - 150;

        window.scrollTo({
            top: scrollPosition,
            behavior: "smooth"
        });

        if (typeof AOS !== "undefined") {
            AOS.refresh();
        }
    }
    getHandlerName() {
        return `__paginatorHandlers['${this.tableBodyId}'].changePage`;
    }
}
// Global object to store multiple paginator instances
window.__paginatorHandlers = {};
