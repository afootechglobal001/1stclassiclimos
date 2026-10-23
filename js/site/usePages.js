/// Fetch Page List ///
function _getPageList(options) {
    const {
        pageCategory = "",
        limit = '',
        pageId = '',
        pageContainer = '',
        categoryId = '',
        paginationContainer = '',
    } = options;

    try {
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
        const dummyBlogData = [
            {
                pageUrl: 'monterey-airport-limo-black-car-service',
                pageTitle: 'Monterey Airport Limo and Black Car Service',
                seoFlyer: 'monterey-airport-limo.jpeg',
                seoDescription: 'Book airport transportation from Monterey to San Francisco International Airport (SFO), Oakland International Airport (OAK), Sacramento, and other destinations with professional chauffeurs and luxury sedans, SUVs, and limousines...',
                updatedTime: '2026-10-20 10:30:00',
                viewCount: 245,
                categoryData: {
                    categoryId: "CAT004",
                    categoryName: 'SERVICE LOCATION'
                }
            },
            {
                pageUrl: '247-airport-pickup-drop-off-service',
                pageTitle: '24/7 Airport Pickup & Drop-off – Premium Chauffeured Service',
                seoFlyer: '247-pickup-drop-off.jpeg',
                seoDescription: 'Premium airport car service offering luxury chauffeured transportation to and from SFO, OAK, and SJC. Professional driver service with comfortable vehicles, experienced chauffeurs, timely pickups, and reliable transfers to major airports...',
                updatedTime: '2026-10-18 09:15:00',
                viewCount: 186,
                categoryData: {
                    categoryId: "CAT003",
                    categoryName: 'SERVICES'
                }
            },
            {
                pageUrl: 'corporate-chauffeur-services-business-travel',
                pageTitle: 'Corporate Charter Bus Rental & Group Transport | Bay Area | 1st Classic',
                seoFlyer: 'corporate-chauffeur-services.webp',
                seoDescription: 'Simplify Bay Area corporate logistics. 1st Classic offers premium charter bus rentals & executive shuttle services for corporate travel and group events in the Bay Area...',
                updatedTime: '2026-10-15 14:00:00',
                viewCount: 172,
                categoryData: {
                    categoryId: "CAT002",
                    categoryName: 'ANNOUNCEMENT'
                }
            },
        ];

        const dummyServiceLocations = [
            {
                regName: "Alameda Limousine Service",
                pageTitle: "Alameda to San Francisco Oakland, San Jose Airport Limousine Transportation Car Service",
                seoDescription: 'Book Alameda Limousine, Black Car, Sedan, and SUV service for Airport Transportation to San Francisco Airport (SFO), Oakland Airport (OAK), and San Jose Airport (SJC)',
                url: "alameda-to-san-francisco-oakland-airport-limousine-car-service"
            },
            {
                regName: "Alameda, California",
                pageTitle: "Alameda Limousine and Black Car Transportation Service.",
                seoDescription: 'Reserve Alameda Limousine Black Car Service to and from San Francisco Airport SFO, Oakland Airport OAK, and San Jose Airport Airport SJC.',
                url: "alameda-airport-transportation-limousine-car-service"
            },
            {
                regName: "Alamo Limousine Service",
                pageTitle: "Alamo to San Francisco Oakland, San Jose, and Sacramento Airport Limousine Car Service",
                seoDescription: 'Book Alamo Limousine, Car, Sedan, and SUV service for Airport Transportation To and From San Francisco (SFO), Oakland (OAK) San Jose, and Sacramento (SMF) Airports',
                url: "alamo-to-san-francisco-oakland-airport-limousine-car-service"
            },
            {
                regName: "Alamo, California",
                pageTitle: "Alamo Limousine and Black Car Transportation Service.",
                seoDescription: 'Reserve Airport Transportation Limousine Car Service from Alamo to San Francisco Airport SFO, Oakland Airport OAK, San Jose Airport SJC, and Sacramento Airport SMF.',
                url: "alamo-airport-transportation-limousine-car-service"
            },
            {
                regName: "Albany Limousine Service",
                pageTitle: "Albany to San Francisco, Oakland, San Jose Airport Limousine Transportation Car Service",
                seoDescription: 'Book Albany Limousine, Car, Sedan, and SUV service for Airport Transportation To San Francisco Airport (SFO), Oakland Airport (OAK), and San Jose Airport (SJC)',
                url: "albany-to-san-francisco-oakland-airport-limousine-car-service"
            },
            {
                regName: "Alum Rock Limousine Service",
                pageTitle: "Alum Rock to San Francisco, Oakland, San Jose Airport Limousine Transportation Car Service.",
                seoDescription: 'Book Alum Rock Limousine, Car, Sedan, and SUV service for Airport Transportation To San Francisco Airport (SFO), Oakland Airport (OAK), and San Jose Airport (SJC)',
                url: "alum-rock-to-san-francisco-oakland-airport-limousine-car-service"
            },
            {
                regName: "Alviso to Limousine Service",
                pageTitle: "Alviso to San Francisco, Oakland, San Jose Airport Limousine Transportation Car Service.",
                seoDescription: 'Book Alviso Limousine, Car, Sedan, and SUV service for Airport Transportation To San Francisco Airport (SFO), Oakland Airport (OAK), and San Jose Airport (SJC)',
                url: "alviso-airport-transportation-limousine-car-service"
            },
            {
                regName: "American Canyon Limousine Service",
                pageTitle: "American Canyon to San Francisco, Oakland, Sacramento Airport Limousine Transportation Car Service.",
                seoDescription: 'Book American Canyon Limousine, Car, Sedan, and SUV service for Airport Transportation To San Francisco Airport (SFO), Oakland Airport (OAK), Sacramento Airport (SMF)',
                url: "american-canyon-to-san-francisco-oakland-airport-limousine-car-service"
            },
            {
                regName: "Antioch, California",
                pageTitle: "Antioch Limousine and Black Car Transportation Service",
                seoDescription: 'Book Antioch Limousine, Car, Sedan, and SUV service for Airport Transportation To and From San Francisco (SFO), Oakland (OAK) San Jose, and Sacramento (SMF) Airports',
                url: "antioch-airport-transportation-limousine-car-service"
            },
            {
                regName: "Aptos Limousine Service",
                pageTitle: "Aptos to San Francisco, San Jose, Oakland, Monterey Regional Airport Limousine Car Service",
                seoDescription: 'Reserve Airport Transportation Limousine Car Service from Antioch to San Francisco Airport SFO, Oakland Airport OAK, San Jose Airport SJC, and Sacramento Airport SMF.',
                url: "aptos-to-san-francisco-oakland-airport-limousine-car-service"
            },
            {
                regName: "Arlington Texas Airport Transportation Limousine Car Service",
                pageTitle: "Arlington Texas Airport Transportation Limousine Car Service",
                seoDescription: 'Reserve Aptos Limousine, Car, Sedan, and SUV service for Airport Transportation To and From San Francisco (SFO), San Jose Airport (SJC), Monterey Regional Airport MRY',
                url: "arlington-texas-airport-transportation-limousine-car-service"
            },
            {
                regName: "Atherton Limousine Service",
                pageTitle: "Atherton to San Francisco, Oakland, and San Jose Airport Limousine Car Service",
                seoDescription: 'Book Airport Transportation Limousine Car Service from Aptos to San Francisco Airport SFO, Oakland Airport OAK, San Jose Airport SJC, and Monterey Airport MRY.',
                url: "atherton-airport-transportation-limousine-car-service"
            },
            {
                regName: "Belmont Limousine Service",
                pageTitle: "Belmont to San Francisco, Oakland, San Jose Airport Limousine Transportation Car Service.",
                seoDescription: 'Book Belmont Limousine, Car, Sedan, and SUV service for Airport Transportation To San Francisco Airport (SFO), Oakland Airport (OAK), and San Jose Airport (SJC)',
                url: "belmont-to-san-francisco-oakland-airport-limousine-car-service"
            }
        ];

        const dummyFleetData = [
            {
                fleetName: "Executive Sedan",
                category: "Luxury Sedan",
                image: "executive-sedan.jpg",
                passengers: 4,
                transmission: "Automatic",
                luggage: 2,
                price: "84.99",
                rateType: "Hourly Rate",
                url: "executive-class-sedan"
            },
            {
                fleetName: "Executive Class SUV",
                category: "Luxury SUV",
                image: "executive-suv.jpg",
                passengers: 6,
                transmission: "Automatic",
                luggage: 6,
                price: "94.99",
                rateType: "Hourly Rate",
                url: "executive-class-suv"
            },
            {
                fleetName: "Executive Class Sprinter Van",
                category: "Luxury Van",
                image: "executive-class-sprinter-van.jpg",
                passengers: 14,
                transmission: "Automatic",
                luggage: 14,
                price: "159.99",
                rateType: "Hourly Rate",
                url: "executive-class-sprinter-van"
            },
            {
                fleetName: "Executive Class Sprinter Limo",
                category: "Luxury Limo",
                image: "executive-class-sprinter-van.jpg",
                passengers: 12,
                transmission: "Automatic",
                luggage: 12,
                price: "179.99",
                rateType: "Hourly Rate",
                url: "executive-class-sprinter-limo"
            }
        ];
        
        let fleetData = dummyFleetData;
        if (limit !== undefined && limit !== null && limit !== '') {
            fleetData = fleetData.slice(0, Number(limit));
        }

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
        } else if (pageContainer === 'pageMainBlogPageContainer') {
            _pageMainBlogData(dummyBlogData, pageContainer);
            return;
        } else if (pageContainer === 'indexBlogPageContainer' || pageContainer === 'allRelatedBlogPageContainer') {
            _indexBlogData(dummyBlogData, pageContainer);
            return;
        } else if (pageContainer === 'siteServiceLocationContent') {
            _initSiteServiceLocationsData(dummyServiceLocations, paginationContainer, pageContainer);
            return;
        } else if (pageContainer === 'fleetPageContent' || pageContainer === 'indexFleetPageContent') {
            _mainPageFleetData(fleetData, pageContainer);
            return;
        }
    } catch (error) {
        console.error("Error:", error);
    }
}

//// Display Page List ////
function _pageListDisplay(data, pageContainer) {
    if (pageContainer=='pageMainBlogPageContainer') {
	    _pageMainBlogData(data, pageContainer); 
    }
    if (pageContainer=='indexBlogPageContainer' || pageContainer=='allRelatedBlogPageContainer') {
	    _indexBlogData(data, pageContainer);   
    }
	if (pageContainer=='footerServiceLocationContent') {
	    _footerServiceLocationData(data, pageContainer);   
	}
}

/// Initialize Fetch Main Blog List ///
function _pageMainBlogData(data, pageContainer) {
	const content = data.map((item) => {
	return `
	<a href="${websiteUrl}/blog/${item.pageUrl}" title="${item.pageTitle}">
		<div class="main-blog-div">
			<div class="top-text">${item.categoryData?.categoryName}</div>
			<div class="image-div">
				<img src="${blogPixPath}/${item.seoFlyer}"
				alt="${item.pageTitle}" />
			</div>
			<div class="text-content-div">
				<h2>${item.pageTitle}</h2>
				<div class="count">
					<i class="bi-calendar3"></i> ${_fetchFormatDate(item.updatedTime)}
					<span> | </span>
					<i class="bi-eye"></i> ${item.viewCount} VIEWS
				</div>
				<p>
					${item.seoDescription}
				</p>
				<div>
					<button class="btn" title="Read More">
						Read More <i class="bi-arrow-right"></i>
					</button>
				</div>
			</div>
		</div>
	</a>`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Index Blog List ///
function _indexBlogData(data, pageContainer) {
	const content = data.map((item) => {

        return `
			<div class="blog-div">
                <a href="${websiteUrl}/blog/${item.pageUrl}" title="${item.pageTitle}">
				<div class="blog-inner-div">
					<div class="title">${item.categoryData?.categoryName}</div>
					<div class="image-div">
						<img src="${blogPixPath}/${item.seoFlyer}"
						alt="${item.pageTitle}" />
					</div>

					<div class="text-div">
						<div class="count">
							<i class="bi-calendar3"></i> ${_fetchFormatDate(item.updatedTime)}
							<span>|</span>
							<i class="bi-eye-fill"></i> ${item.viewCount} VIEWS
						</div>

						<h3>${item.pageTitle}</h3>
						<p>
							${item?.seoDescription.substring(0, 120)}
							${item?.seoDescription.length > 120 ? '...' : ''}
						</p>
					</div>
				</div></a>
			</div>
		`;
	}).join("");
	
	// First inject the HTML
	$(`#${pageContainer}`).html(content);
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

/// Fetch Category List ///
function _fetchCategoryList(pageCategory, pageContainer) {
    try {
        //// call endpoint //////
        /*
        _callFetchEndPoints({
            url: `site/fetch-information-category`,
        })
        .then((response) => {
            let text = '';
            for (let i = 0; i < response.data.length; i++) {
                const categoryId = response.data[i].categoryId;
                const value = response.data[i].categoryName;
                text += `<li title="${value}" onclick="_fetchTabPagesData('${pageCategory}', '${pageContainer}', '${categoryId}', '');">${value}</li>`;
            }
            $('#catId').html(text);
        })
        .catch((error) => {
            console.error("Error:", error);
            if (error.status == 0) {
                _showEmptyState({
                    container: 'catId',
                    message: "Check your internet connection and try again",
                });
            } else {
                _showEmptyState({
                    container: 'catId',
                    message: error.message,
                });
            }
        });
        */

        // Dummy response for testing
        const response = {
            data: [
                {
                    categoryId: 'CAT001',
                    categoryName: 'GENERAL'
                },
                {
                    categoryId: 'CAT002',
                    categoryName: 'ANNOUNCEMENT'
                },
                {
                    categoryId: 'CAT003',
                    categoryName: 'SERVICES'
                },
                {
                    categoryId: 'CAT004',
                    categoryName: 'SERVICE LOCATION'
                },
                {
                    categoryId: 'CAT005',
                    categoryName: 'WINE TOUR'
                },
                {
                    categoryId: 'CAT006',
                    categoryName: 'NEWS AND UPDATE'
                },
            ]
        };

        let text = '';
        for (let i = 0; i < response.data.length; i++) {
            const categoryId = response.data[i].categoryId;
            const value = response.data[i].categoryName;
            text += `<li title="${value}" onclick="_fetchTabPagesData('${pageCategory}', '${pageContainer}', '${categoryId}');">${value}</li>`;
        }
        $('#catId').html(text);
    } catch (error) {
        console.error("Error:", error);
    }
}

//// Fetch Tab Pages Data ///
function _fetchTabPagesData(pageCategory, pageContainers, categoryId) {
    pageContainers.split(',').forEach(function(pageContainer){
        pageContainer = pageContainer.trim();

        $(`#${pageContainer}`).html(`
            <div class="content-loading-div">
                <img src="${websiteUrl}/all-images/images/spinner.gif" alt="Loading" />
            </div>
        `);

		if (pageCategory === "FAQ") {
			_getFaqList({
				pageContainer: pageContainer,
				categoryId: categoryId,
			});
        } else {
            _getPageList({
                pageCategory: pageCategory,
                pageContainer: pageContainer,
				categoryId: categoryId,
            });
        }
    });
}

//// Filter Pages Data ////
function _filtersPages(value, pageContainer, container) {
    value = value.trim().toLowerCase();
    const $container = $(`#${pageContainer}`);
    // Cache the original HTML once
    if (!$container.data('originalHtml')) {
        $container.data('originalHtml', $container.html());
    }
    // Restore the original content when search is cleared
    if (value === '') {
        $container.html($container.data('originalHtml'));
        return;
    }
    let visibleCount = 0;
    $container.find(`.${container}`).each(function () {
        const text = $(this).text().toLowerCase();
        if (text.includes(value)) {
            $(this).show();
            visibleCount++;
        } else {
            $(this).hide();
        }
    });
    if (visibleCount === 0) {
        _showEmptyState({
            container: pageContainer,
            message: "No Record found!!!",
        });
    }
}

//// Filter Pages Data ////
function _filtersPagesWithPagination(value, pageContainer) {
    const paginator = __paginatorHandlers[pageContainer];
    if (!paginator) return;
    paginator.filterData(value);
}

//// Filter Pages Data ////
function _filtersBlog(value) {
    value = value.trim().toLowerCase();
    const containers = [
        {
            container: 'pageMainBlogPageContainer',
            items: '.main-blog-div'
        },
        {
            container: 'allRelatedBlogPageContainer',
            items: '.blog-div'
        }
    ];

    containers.forEach(({ container, items }) => {
        const $container = $(`#${container}`);
        // Cache the original HTML only after the blog items have loaded
        if (
            !$container.data('originalHtml') &&
            $container.find(items).length > 0
        ) {
            $container.data('originalHtml', $container.html());
        }
        // Restore the original content when search is cleared
        if (value === '') {
            if ($container.data('originalHtml')) {
                $container.html($container.data('originalHtml'));
            }
            return;
        }
        let visibleCount = 0;
        // Filter items
        $container.find(items).each(function () {
            const text = $(this).text().toLowerCase();
            if (text.includes(value)) {
                $(this).show();
                visibleCount++;
            } else {
                $(this).hide();
            }
        });
        // Show empty state if no records found
        if (visibleCount === 0) {
            _showEmptyState({
                container: container,
                message: "No Record found!!!",
            });
        }
    });
}

/// Fetch Faq List ///
function _getFaqList(options = {}) {
    const {
        pageContainer = "",
        limit,
        categoryId,
        faqKey,
    } = options;

    try {
        /*
        ///// Real endpoint /////
        const params = new URLSearchParams();

        if (limit !== undefined && limit !== null && limit !== '') {
            params.append('limit', limit);
        }

        if (categoryId !== undefined && categoryId !== null && categoryId !== '') {
            params.append('categoryId', categoryId);
        }

        if (faqKey !== undefined && faqKey !== null && faqKey !== '') {
            params.append('faqKey', faqKey);
        }

        const queryString = params.toString();

        _callFetchEndPoints({
            url: `site/fetch-faq${queryString ? `?${queryString}` : ''}`,
        })
        .then((response) => {
            _faqListDisplay(response?.data, pageContainer);
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

        // Dummy response for testing
        const response = {
            data: [
                {
                    faqId: 'FAQ001',
                    categoryId: 'CAT003',
                    faqQuestion: 'How do I make a reservation?',
                    faqAnswer: 'Reservation can be made by calling (1-800) 658-5679 or by clicking on BOOK A RIDE for an online reservation.'
                },
                {
                    faqId: 'FAQ002',
                    categoryId: 'CAT003',
                    faqQuestion: 'How far in advance are you required to make a booking?',
                    faqAnswer: 'We require at least a minimum of 3 hours in advance for booking airport transportation both for arrival and pickup to the airport and transfers. And a minimum of 12 hours advance reservation for stretch limousines, charter buses, and mini-charter buses.'
                },
                {
                    faqId: 'FAQ003',
                    categoryId: 'CAT003',
                    faqQuestion: 'Can I/We open a corporate or personal account?',
                    faqAnswer: 'We offer both corporate and personal accounts. A credit card authorization form will be emailed, and ID validation and other documentation must be returned along with the signed and completed CC authorization form. Major corporate accounts may qualify for billing terms, subject to review and approval. Click Account Sign-up to open one'
                },
                {
                    faqId: 'FAQ004',
                    categoryId: 'CAT004',
                    faqQuestion: 'When do we send the driver info?',
                    faqAnswer: 'The driver information will be sent out together with the 6-hour and 3-hour notifications via email.'
                },
                {
                    faqId: 'FAQ005',
                    categoryId: 'CAT003',
                    faqQuestion: 'How can I obtain a receipt for my charges?',
                    faqAnswer: 'Our billing system will automatically email you a receipt once your credit card is authorized and charged. For corporate and personal accounts customers, you have access to all your invoices, and can be retrieved at any time.'
                },
                {
                    faqId: 'FAQ006',
                    categoryId: 'CAT003',
                    faqQuestion: 'How does the payment process work?',
                    faqAnswer: 'The accounting will only authorize the deposit and will charge the credit card after the service is completed.'
                }
            ]
        };
        let faqData = response.data;
        if (limit !== undefined && limit !== null && limit !== '') {
            faqData = faqData.slice(0, Number(limit));
        }
        _faqListDisplay(faqData, pageContainer);
    } catch (error) {
        console.error("Error:", error);
    }
}

//// Display Faq List ////
function _faqListDisplay(data, pageContainer) {
    if (pageContainer=='indexFaqPageContent') {
	    _indexFaqData(data, pageContainer);
	}
	if (pageContainer=='faqPageContent') {
	    _faqData(data, pageContainer);
	}
}

/// Initialize Fetch Index Faq List ///
function _indexFaqData(data, pageContainer) {
	const content = data.map((item, index) => {
    return `
      	<div class="faq-toggle" id="faq${index+1}">
			<div class="title-text" onclick="_collapse('faq${index+1}')">
				<div class="quest-text-div">
					<div class="icon-div"><i class="bi-question"></i></div>
					<h3>${item.faqQuestion}</h3>
				</div>
				<div class="expand-div" id="faq${index+1}num">
					<i class="bi bi-plus"></i>
				</div>
			</div>
			<div class="answer-div" id="faq${index+1}answer" style="display: none;">
				<p>${item.faqAnswer}</p>
			</div>
		</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Page Faq List ///
function _faqData(data, pageContainer) {
	const content = data.map((item, index) => {
    return `
      	<div class="faq-title" id="faq${index+1}">
			<div class="inner-title-div" onclick="_collapse('faq${index+1}')">
				<h2>${item.faqQuestion}</h2>

				<div class="expand-div" id="faq${index+1}num">
					&nbsp;<i class="bi-plus"></i>&nbsp;
				</div>
			</div>
			<div class="faq-answer-div" id="faq${index+1}answer" style="display: none;">
				<p>
					${item.faqAnswer}
				</p>
			</div>
		</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Render Site Fetch Service Location Data ////
function _renderServiceLocationData(data) {
	return data
		.map(
			(item) => `
			<a href="${websiteUrl}/${item?.url}" title="${item?.pageTitle}">
            <div class="affiliate-div service-locations">
                <div class="top-div">
                    <div class="inner-div">
                        <h2>${item?.regName}</h2>
                    </div>
                </div>

                <h3>${item?.pageTitle}</h3>
                <p>${item?.seoDescription}</p>                
            </div></a>`
		).join("");
}

/// Initialize Site Service Locations Data ////
function _initSiteServiceLocationsData(data, paginationContainer, pageContainer) {
	const paginator = new Paginator(
        data,
        _renderServiceLocationData,
        paginationContainer,
        pageContainer,
        10
    );

    __paginatorHandlers[pageContainer] = paginator;
    paginator.renderPage();
}

/// Initialize Fetch Index Blog List ///
function _mainPageFleetData(data, pageContainer) {
	const content = data.map((item) => {

        return `
			<div class="fleet-div">
                <div class="image-div">
                    <img src="${fleetPixPath}/${item?.image}" alt="${item?.fleetName}">
                    <span class="category">${item?.category}</span>
                    <h3>${item?.fleetName}</h3>
                </div>

                <div class="fleet-content">
                    <div class="fleet-features">
                        <div class="feature">
                            <i class="bi bi-people"></i>
                            <span>${item?.passengers} Passengers</span>
                        </div>
                        <div class="feature">
                            <i class="bi bi-sliders"></i>
                            <span>${item?.transmission}</span>
                        </div>
                        <div class="feature">
                            <i class="bi bi-luggage"></i>
                            <span>${item?.luggage} Suitcase</span>
                        </div>
                    </div>

                    <div class="price">$${item?.price}  <span> / ${item?.rateType}</span></div>
                    <a href="${websiteUrl}/${item?.url}" title="${item?.fleetName}">
                        <button class="btn" title="View Vehicle"><i class="bi bi-eye"></i> View Vehicle</button>
                    </a>
                </div>
            </div>
		`;
	}).join("");
	
	// First inject the HTML
	$(`#${pageContainer}`).html(content);
}