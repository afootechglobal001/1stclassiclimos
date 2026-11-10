/// Fetch Fleet Data ///
function _fetchFleetData() {
    try {
        //// DUMMY RESPONSE FOR TESTING //////

        const response = {
            data: [
                {
                    pageId: 1,
                    pageCategory: "FLEET",
                    pageTitle: "Electric Class Sedan",
                    seoDescription: "Ideal for executive airport transfers, business travel, and private city transport.",
                    seoFlyer: "executive-sedan.jpg",
                    updatedTime: "2026-08-10 10:30:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                    passengerCapacity: 3,
                    luggageCapacity: 3,
                    hourlyRate: "84.99"
                },
                {
                    pageId: 2,
                    pageCategory: "FLEET",
                    pageTitle: "Executive Class SUV",
                    seoDescription: "A spacious luxury SUV designed for VIP transportation, family airport transfers.",
                    seoFlyer: "executive-suv.jpg",
                    updatedTime: "2026-08-08 12:15:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                    passengerCapacity: 6,
                    luggageCapacity: 5,
                    hourlyRate: "94.99"
                },
                {
                    pageId: 3,
                    pageCategory: "FLEET",
                    pageTitle: "Executive Class Sprinter Van",
                    seoDescription: "Enjoy a comfortable and stylish ride for business meetings, private events, and city transportation.",
                    seoFlyer: "executive-class-sprinter-van.jpg",
                    updatedTime: "2026-08-05 09:45:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                    passengerCapacity: 3,
                    luggageCapacity: 3,
                    hourlyRate: "159.99"
                }
            ]
        };

        //// END DUMMY RESPONSE //////

        _initFetchFleetData(response.data);

        /*
        //// CALL ENDPOINT //////
        _callFetchEndPoints({
            url: `admin/pages/fetch-page?pageCategory=SERVICE`,
            accessKey: true,
        })
        .then((response) => {
            _initFetchServiceData(response.data);
        })
        .catch((error) => {
            _staffValidationCheck(error.response);
            console.error("Error:", error);
            if (error.status == 0) {
                _showEmptyState({
                    container: "servicePageContent",
                    message: "Check your internet connection and try again",
                    paginationContainer: "serviceContentPaginationControls",
                });
                _callAjaxError(() => _fetchServiceData(), error.message);
            } else {
                _showEmptyState({
                    container: "servicePageContent",
                    message: error.message,
                    button: `
                        <button class="btn" title="ADD NEW SERVICE" onclick="sessionStorage.removeItem('useEachPageSession'); _getForm({page: 'editPagesForm', pageCategory: 'SERVICE', url: portalMiddleWareUrl});">
                            <i class="bi-plus-square"></i> ADD NEW SERVICE
                        </button>
                    `,
                    paginationContainer: "serviceContentPaginationControls",
                });
            }
        });
        */

    } catch (error) {
        console.error("Error:", error);
        _callCatchError(() => _fetchFleetData());
    }
}

/// Render Fleet Data ///
function _renderFleetData(data) {
    return data.map((item) => `
        <div class="fleet-div">
            <div class="status-div ${item.statusData?.statusName}">
                ${item.statusData?.statusName}
            </div>

            <div class="img-div">
                <img src="${fleetPixPath}/${item.seoFlyer}?t=${new Date().getTime()}"
                    alt="${item.pageTitle}" />
            </div>

            <div class="content-div">
                <div class="top-contents">
                    <div class="date">
                        UPDATED ON:
                        <span>${_fetchFormatDate(item.updatedTime)}</span>
                    </div>

                    <h2 title="${item.pageTitle}">
                        ${item.pageTitle}
                    </h2>

                    <p>${item.seoDescription}</p>
                </div>

                <div class="spec-wrapper">
                    <div class="spec-div">
                        <div class="icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="text">
                            <span>${item.passengerCapacity} Passengers</span>
                        </div>
                    </div>

                    <div class="spec-div">
                        <div class="icon">
                            <i class="bi bi-luggage"></i>
                        </div>
                        <div class="text">
                            <span>${item.luggageCapacity} Suitcases</span>
                        </div>
                    </div>
                </div>

                <div class="bottom-div">
                    <div class="price-div">
                        <p>Hourly Rate</p>
                        <h4>$${thousandSeperator(item.hourlyRate)}<span>/hr</span></h4>
                    </div>

                    <div class="btn-div">
                        <button class="btn" title="EDIT FLEET"
                            onclick="_getForm({page: 'editPagesForm', pageCategory: 'FLEET', id: '${item.pageId}', url: portalMiddleWareUrl});">
                            <i class="bi-pencil-square"></i> EDIT
                        </button>

                        <button class="btn del-btn" title="DELETE FLEET"
                            onclick="_deleteFleet({id: '${item.pageId}', url: portalMiddleWareUrl});">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `).join("");
}

//// Initialize Fleet Data Pagination ////
function _initFetchFleetData(data) {
  const paginator = new Paginator(
    data,
    _renderFleetData,
    "fleetContentPaginationControls",
    "fleetPageContent",
    8
  );
  __paginatorHandlers["fleetContentPaginationControls"] = paginator;
  paginator.renderPage();
}

//// Filter Fleet Data ////
function _filtersFleet(value) {
  $("#fleetPageContent .fleet-div").each(function () {
    var text = $(this).text();
    text.toLowerCase().indexOf(value.toLowerCase()) > -1
      ? $(this).show()
      : $(this).hide();
  });
}