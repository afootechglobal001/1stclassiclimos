/// Fetch Package Deals Data ///
function _fetchPackageDealsData() {
    try {
        //// DUMMY RESPONSE FOR TESTING //////

        const response = {
            data: [
                {
                    pageId: 1,
                    pageCategory: "PACKAGE_DEAL",
                    pageTitle: "Private Sonoma Valley Limousine Wine Tasting Tour",
                    seoDescription: "Enjoy a private limousine sightseeing tour of San Francisco. Explore popular attractions, iconic landmarks, and beautiful.",
                    seoFlyer: "private-san-francisco.jpeg",
                    updatedTime: "2026-08-10 10:30:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                    duration: "4",
                    hourlyRate: "393.24",
                    promoCode: "WINE1ST",
                },
                {
                    pageId: 2,
                    pageCategory: "PACKAGE_DEAL",
                    pageTitle: "Private Sports Events Limousine and Transportation",
                    seoDescription: "Enjoy comfortable and convenient limousine transportation to sporting events across San Francisco, Oakland, Santa Clara.",
                    seoFlyer: "private-sports-events.jpeg",
                    updatedTime: "2026-08-10 10:30:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                    duration: "6",
                    hourlyRate: "550.54",
                    promoCode: "SF1ST",
                },
                {
                    pageId: 3,
                    pageCategory: "PACKAGE_DEAL",
                    pageTitle: "San Francisco City Limo Sightseeing and Tours",
                    seoDescription: "Discover the beauty of San Francisco with a private chauffeur-driven sightseeing experience. Visit famous attractions.",
                    seoFlyer: "francisco-city-limo.jpeg",
                    updatedTime: "2026-08-08 12:15:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                    duration: "6",
                    hourlyRate: "550.54",
                    promoCode: "MC1ST",
                },
                {
                    pageId: 4,
                    pageCategory: "PACKAGE_DEAL",
                    pageTitle: "Private Russian River Valley Limousine Wine Tasting Tour",
                    seoDescription: "Experience a private Russian River Valley wine tasting tour with luxury limousine transportation. Explore beautiful vine.",
                    seoFlyer: "private-russian-river.jpeg",
                    updatedTime: "2026-08-05 09:45:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                    duration: "6",
                    hourlyRate: "550.54",
                    promoCode: "MC1ST",
                }
            ]
        };

        //// END DUMMY RESPONSE //////

        _initFetchPackageDealsData(response.data);

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
        _callCatchError(() => _fetchPackageDealsData());
    }
}

/// Render Package Deals Data ///
function _renderPackageDealsData(data) {
    return data.map((item) => `
        <div class="fleet-div">
            <div class="status-div ${item?.statusData?.statusName}">
                ${item?.statusData?.statusName}
            </div>

            <div class="img-div">
                <img src="${packageDealsPixPath}/${item?.seoFlyer}?t=${new Date().getTime()}"
                    alt="${item?.pageTitle}" />
            </div>

            <div class="content-div">
                <div class="top-contents">
                    <div class="date">
                        UPDATED ON:
                        <span>${_fetchFormatDate(item?.updatedTime)}</span>
                    </div>

                    <h2 title="${item?.pageTitle}">
                        ${item?.pageTitle}
                    </h2>

                    <p>${item?.seoDescription}</p>
                </div>

                <div class="spec-wrapper">
                    <div class="spec-div package-deal-spec-div">
                        <div class="icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div class="text">
                            <span class="title">From</span>
                            <span>${item?.duration} Hour</span>
                        </div>
                    </div>

                    <div class="spec-div package-deal-spec-div">
                        <div class="icon">
                            <i class="bi bi-ticket-perforated"></i>
                        </div>
                        <div class="text">
                            <span class="title">Promo Code</span>
                            <span>${item?.promoCode}</span>
                        </div>
                    </div>
                </div>

                <div class="bottom-div">
                    <div class="price-div">
                        <p>Hourly Rate</p>
                        <h4>$${item?.hourlyRate}<span>/hr</span></h4>
                    </div>

                    <div class="btn-div">
                        <button class="btn" title="EDIT PACKAGE DEAL"
                            onclick="">
                            <i class="bi-pencil-square"></i> EDIT
                        </button>

                        <button class="btn del-btn" title="DELETE PACKAGE DEAL"
                            onclick="">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `).join("");
}

//// Initialize Package Deals Data Pagination ////
function _initFetchPackageDealsData(data) {
  const paginator = new Paginator(
    data,
    _renderPackageDealsData,
    "packageDealsContentPaginationControls",
    "packageDealsPageContent",
    8
  );
  __paginatorHandlers["packageDealsContentPaginationControls"] = paginator;
  paginator.renderPage();
}
    
//// Filter Wine Tour Data ////
function _filtersPackageDeals(value) {
  $("#packageDealsPageContent .fleet-div").each(function () {
    var text = $(this).text();
    text.toLowerCase().indexOf(value.toLowerCase()) > -1
      ? $(this).show()
      : $(this).hide();
  });
}