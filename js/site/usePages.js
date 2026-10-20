/// Fetch Page List ///
function _getPageList(options) {
    const {
        pageCategory = "",
        limit = '',
        pageId = '',
        pageContainer = '',
        categoryId = '',
    } = options;

    try {
        // Remove this when the backend endpoint is ready.
        if (pageContainer === 'footerServiceLocationContent') {
            const dummyServiceLocations = [
                {
                    pageTitle: "Alameda Limousine Service"
                },
                {
                    pageTitle: "Alameda, California"
                },
                {
                    pageTitle: "Alamo Limousine Service"
                },
                {
                    pageTitle: "Alameda, California"
                },
                {
                    pageTitle: "Albany Limousine Service"
                },
                {
                    pageTitle: "Alum Rock Limousine Service"
                },
                {
                    pageTitle: "Alviso to Limousine Service"
                },
                {
                    pageTitle: "American Canyon Limousine Service"
                },
                {
                    pageTitle: "Antioch Limousine Service"
                },
                {
                    pageTitle: "Antioch, California"
                },
                {
                    pageTitle: "Aptos Limousine Service"
                },
                {
                    pageTitle: "Aptos, California"
                },
                {
                    pageTitle: "American Canyon Limousine Service"
                },
                {
                    pageTitle: "Atherton, California"
                },
                {
                    pageTitle: "Benicia, California"
                },
                {
                    pageTitle: "Berkeley Limousine Service"
                },
                {
                    pageTitle: "Berkeley, California"
                },
                {
                    pageTitle: "Bethel Island Limousine Service"
                },
                {
                    pageTitle: "Big Sur Airport Transportation Limousine Car Service"
                },
                {
                    pageTitle: "Blackhawk Limousine Service"
                },
            ];

            _pageListDisplay(dummyServiceLocations, pageContainer);
            return;
        }

        /*
        // BACKEND ENDPOINT
        _callFetchEndPoints({
            url: `site/fetch-page?pageCategory=${pageCategory}&pageId=${pageId}&limit=${limit || ''}&categoryId=${categoryId || ''}`,
        })
        .then((response) => {
            _pageListDisplay(response?.data, pageContainer);
        })
        .catch((error) => {
            console.error("Error:", error);

            if (error.status == 0) {
                _showEmptyState({
                    container: pageContainer,
                    message: "Check your internet connection and try again",
                });
            } else {
                _showEmptyState({
                    container: pageContainer,
                    message: error.message,
                });
            }
        });
        */
    } catch (error) {
        console.error("Error:", error);
    }
}

//// Display Page List ////
function _pageListDisplay(data, pageContainer) {
	if (pageContainer=='footerServiceLocationContent') {
	    _footerServiceLocationData(data, pageContainer);   
	}
}

//// Initialize Fetch Footer Service Location ////
function _footerServiceLocationData(data, pageContainer) {
    const content = data.map((item) => {
        return `
            <li>
                <a href="${websiteUrl}/#" title="${item.pageTitle}">
                    ${item.pageTitle}
                </a>
            </li>
        `;
    }).join("");

    $(`#${pageContainer}`).html(content);
    // Hide all locations after the first fifteen
    $(`#${pageContainer} li:gt(15)`).hide();
    $('#toggleServiceLocationBtn').text('View All Locations').data('expanded', false);
}