<?php if ($page == 'wineTourPage') { ?>
<div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
    <div class="title-div">
        <div>
            <div class="icon-div"><i class="bi bi-cup-straw"></i></div>
        </div>
        <div class="text-div">
            <h3>Wine Tour</h3>
            <p>Manage your wine tour experiences, destinations, tour packages, and booking details for customers.</p>
        </div>
    </div>

    <div class="btn-div">
        <div class="search-div">
            <input type="text" onkeyup="_filtersWineTour(this.value);" placeholder="Search Wine Tour Here...">
            <i class="bi bi-search"></i>
        </div>
        <button class="btn" title="ADD NEW WINE TOUR"
            onclick="sessionStorage.removeItem('useEachPageSession'); _getForm({page: 'editPagesForm', pageCategory: 'WINE_TOUR', url: portalMiddleWareUrl});">
            <i class="bi-plus-square"></i> ADD NEW WINE TOUR
        </button>
    </div>
</div>

<div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
    <div class="tables-content-div">
        <div class="content-title">
            <div class="title">
                <i class="bi bi-cup-straw"></i>
                <p>Wine Tour</p>
            </div>
        </div>

        <div class="inner-table-content">
            <div class="fleet-wrapper" id="wineTourPageContent">
                <script>_fetchWineTourData();</script> 

                <div class="content-loading-div">
                    <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                </div>
            </div>
            <!-- Pagination -->
            <div id="wineTourContentPaginationControls" class="pagination-div"></div>
        </div>
    </div>
</div>
<?php } ?>