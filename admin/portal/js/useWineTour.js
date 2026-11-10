/// Fetch Wine Tour Data ///
function _fetchWineTourData() {
    try {
        //// DUMMY RESPONSE FOR TESTING //////

        const response = {
            data: [
                {
                    pageId: 1,
                    pageCategory: "WINE_TOUR",
                    pageTitle: "Napa Valley Wine Country",
                    seoDescription: "Book a Limousine Transportation for a Private Napa Valley Wine Tasting Tour from San Francisco, Sacramento, Sonoma, Sant.",
                    seoFlyer: "napa-valley-limousine-wine-tours.jpeg",
                    updatedTime: "2026-08-10 10:30:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                },
                {
                    pageId: 2,
                    pageCategory: "WINE_TOUR",
                    pageTitle: "Sonoma Valley Wine Country",
                    seoDescription: "Rent a Limousine for a Private Sonoma Valley Wine Tasting Tour from San Francisco Bay Area, Sacramento, Santa Rosa, Napa.",
                    seoFlyer: "sonoma-valley-wine-country.jpg",
                    updatedTime: "2026-08-10 10:30:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                },
                {
                    pageId: 3,
                    pageCategory: "WINE_TOUR",
                    pageTitle: "Livermore Valley Wine Country",
                    seoDescription: "Rent a Limousine for a Private Livermore Valley Wine Tasting Tour from San Francisco Bay Area, San Jose, Oakland, Walnut.",
                    seoFlyer: "livermore-valley-wine-country.jpg",
                    updatedTime: "2026-08-08 12:15:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                },
                {
                    pageId: 4,
                    pageCategory: "WINE_TOUR",
                    pageTitle: "Russian River Valley Wine Country",
                    seoDescription: "Experience a private Russian River Valley wine tasting tour with luxury limousine transportation. Explore beautiful vine.",
                    seoFlyer: "russian-river-valley-wine-country.jpg",
                    updatedTime: "2026-08-05 09:45:00",
                    statusData: {
                        statusId: "1",
                        statusName: "ACTIVE"
                    },
                }
            ]
        };

        //// END DUMMY RESPONSE //////

        _initFetchWineTourData(response.data);

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
        _callCatchError(() => _fetchWineTourData());
    }
}

/// Render Wine Tour Data ///
function _renderWineTourData(data) {
    return data.map((item) => `
        <div class="fleet-div">
            <div class="status-div ${item.statusData?.statusName}">
                ${item.statusData?.statusName}
            </div>

            <div class="img-div">
                <img src="${wineTourPixPath}/${item.seoFlyer}?t=${new Date().getTime()}"
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
                
                <div class="bottom-div">
                    <div class="btn-div">
                        <button class="btn" title="EDIT WINE TOUR"
                            onclick="">
                            <i class="bi-pencil-square"></i> EDIT
                        </button>

                        <button class="btn del-btn" title="DELETE WINE TOUR"
                            onclick="">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `).join("");
}

//// Initialize Wine Tour Data Pagination ////
function _initFetchWineTourData(data) {
  const paginator = new Paginator(
    data,
    _renderWineTourData,
    "wineTourContentPaginationControls",
    "wineTourPageContent",
    8
  );
  __paginatorHandlers["wineTourContentPaginationControls"] = paginator;
  paginator.renderPage();
}
    
//// Filter Wine Tour Data ////
function _filtersWineTour(value) {
  $("#wineTourPageContent .fleet-div").each(function () {
    var text = $(this).text();
    text.toLowerCase().indexOf(value.toLowerCase()) > -1
      ? $(this).show()
      : $(this).hide();
  });
}