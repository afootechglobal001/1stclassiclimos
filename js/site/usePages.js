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
                luggage: 2,
                price: "84.99",
                url: "executive-class-sedan"
            },
            {
                fleetName: "Executive Class SUV",
                category: "Luxury SUV",
                image: "executive-suv.jpg",
                passengers: 6,
                luggage: 6,
                price: "94.99",
                url: "executive-class-suv"
            },
            {
                fleetName: "Executive Class Sprinter Van",
                category: "Luxury Van",
                image: "executive-class-sprinter-van.jpg",
                passengers: 14,
                luggage: 14,
                price: "159.99",
                url: "executive-class-sprinter-van"
            },
            {
                fleetName: "Executive Class Sprinter Limo",
                category: "Luxury Limo",
                image: "executive-class-sprinter-van.jpg",
                passengers: 12,
                luggage: 12,
                price: "179.99",
                url: "executive-class-sprinter-limo"
            }
        ];

        const dummyServiceData = [
            {
                pageTitle: "Airport Transportation",
                pageUrl: 'airport-transportation',
                description: "Book an Airport Transportation, Car, Sedan, SUV, and Van service for airport transfers to and from San Francisco (SFO), Oakland (OAK), San Jose (SJC), and other major airports.",
                seoFlyer: 'service-2.jpg',
                updatedTime: '2026-10-15 14:00:00',
            },
            {
                pageTitle: "Corporate Transportation Black Car Services",
                description: "Book a Corporate and Private Jet Aviation FBO Black Car Transportation Service for corporate business travelers, executives, and private aviation passengers.",
                seoFlyer: 'service-1.jpg',
                pageUrl: "corporate-transportation",
                updatedTime: '2026-10-15 14:00:00',
            },
            {
                pageTitle: "Point to Point Transportation Limousine Car Service",
                description: "Enjoy convenient point-to-point transportation with our professional limousine and black car services. Perfect for business meetings, personal trips, special events, and everyday travel.",
                seoFlyer: 'service-3.jpg',
                pageUrl: "point-to-point-transportation",
                updatedTime: '2026-10-15 14:00:00',
            }
        ];
        
        let fleetData = dummyFleetData;
        if (limit !== undefined && limit !== null && limit !== '') {
            fleetData = fleetData.slice(0, Number(limit));
        }

        let serviceData = dummyServiceData;
        if (limit !== undefined && limit !== null && limit !== '') {
            serviceData = serviceData.slice(0, Number(limit));
        }

        const dummyPackageDealsData = [
            {
                pageId: "PAGE026202608220110",
                pageTitle: "Private Sonoma Valley Limousine Wine Tasting Tour",
                pageUrl: "sonoma-valley-limousine-wine-tour",
                seoDescription: "Enjoy a private limousine sightseeing tour of San Francisco. Explore popular attractions, iconic landmarks, and beautiful city views with professional chauffeur service from San Francisco, Oakland, San Jose, Sacramento, and Napa.",
                seoFlyer: "private-san-francisco.jpeg",
                price: "393.24",
                duration: "4 Hours",
                updatedTime: "2026-10-15 14:00:00",
            },
            {
                pageId: "PAGE026202608220111",
                pageTitle: "Private Sports Events Limousine and Transportation",
                pageUrl: "private-sports-events",
                seoDescription: "Enjoy comfortable and convenient limousine transportation to sporting events across San Francisco, Oakland, Santa Clara, Sacramento, and beyond. Travel with friends, family, or business associates in style.",
                seoFlyer: "private-sports-events.jpeg",
                price: "550.54",
                duration: "6 Hours",
                updatedTime: "2026-10-15 14:00:00",
            },
            {
                pageId: "PAGE026202608220112",
                pageTitle: "San Francisco City Limo Sightseeing and Tours",
                pageUrl: "san-francisco-city-sightseeing",
                seoDescription: "Discover the beauty of San Francisco with a private chauffeur-driven sightseeing experience. Visit famous attractions, enjoy scenic routes, and explore the city at your own pace.",
                seoFlyer: "francisco-city-limo.jpeg",
                price: "393.24",
                duration: "4 Hours",
                updatedTime: "2026-10-15 14:00:00",
            },
            {
                pageId: "PAGE026202608220113",
                pageTitle: "Private Russian River Valley Limousine Wine Tasting Tour",
                pageUrl: "russian-river-valley-wine-tour",
                seoDescription: "Experience a private Russian River Valley wine tasting tour with luxury limousine transportation. Explore beautiful vineyards, enjoy scenic wine country views, and visit selected wineries in comfort and style.",
                seoFlyer: "private-russian-river.jpeg",
                price: "550.54",
                duration: "6 Hours",
                updatedTime: "2026-10-15 14:00:00",
            }
        ];

        const dummyWineTourData = [
            {
                pageTitle: "Napa Valley Wine Country",
                pageUrl: "napa-valley-wine-country",
                seoDescription: "Book a Limousine Transportation for a Private Napa Valley Wine Tasting Tour from San Francisco, Sacramento, Sonoma, Santa Rosa, Oakland, Walnut Creek, and beyond.",
                seoFlyer: "napa-valley-limousine-wine-tours.jpeg",
            },
            {
                pageTitle: "Sonoma Valley Wine Country",
                pageUrl: "sonoma-valley-wine-country",
                seoDescription: "Rent a Limousine for a Private Sonoma Valley Wine Tasting Tour from San Francisco Bay Area, Sacramento, Santa Rosa, Napa, Oakland, Walnut Creek, and beyond.",
                seoFlyer: "sonoma-valley-wine-country.jpg",
            },
            {
                pageTitle: "Livermore Valley Wine Country",
                pageUrl: "livermore-valley-wine-country",
                seoDescription: "Rent a Limousine for a Private Livermore Valley Wine Tasting Tour from San Francisco Bay Area, San Jose, Oakland, Walnut Creek, and the surrounding cities.",
                seoFlyer: "livermore-valley-wine-country.jpg",
            },
            {
                pageTitle: "Russian River Valley Wine Country",
                pageUrl: "russian-river-valley-wine-country",
                seoDescription: "Experience a private Russian River Valley wine tasting tour with luxury limousine transportation. Explore beautiful vineyards, enjoy scenic wine country views, and visit selected wineries in comfort and style.",
                seoFlyer: "russian-river-valley-wine-country.jpg",
            }
        ];

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
        if (pageContainer === 'pageMainBlogPageContainer') {
            _pageMainBlogData(dummyBlogData, pageContainer);
            return;
        }
        if (pageContainer === 'indexBlogPageContainer' || pageContainer === 'allRelatedBlogPageContainer') {
            _indexBlogData(dummyBlogData, pageContainer);
        }
        if (pageContainer == 'relatedPageBlogContent') {
            _pageRelatedBlogData(dummyBlogData, pageContainer);   
            return; 
        }
        if (pageContainer == 'relatedBlogDetailPageContainer') {
            _pageRelatedBlogDetailData(dummyBlogData, pageContainer);   
            return; 
        }
        if (pageContainer === 'siteServiceLocationContent') {
            _initSiteServiceLocationsData(dummyServiceLocations, paginationContainer, pageContainer);
            return;
        }
        if (pageContainer === 'fleetPageContent' || pageContainer === 'indexFleetPageContent') {
            _mainPageFleetData(fleetData, pageContainer);
            return;
        }
        if (pageContainer === 'indexServicePageContent') {
            _indexPageServiceData(serviceData, pageContainer);
            return;
        }
        if (pageContainer === 'servicePageContent') {
            _mainPageServiceData(serviceData, pageContainer);
            return;
        }
        if (pageContainer === 'relatedChartterPageContainer') {
            _relatedChartterServiceData(serviceData, pageContainer);
            return;
        }
        if (pageContainer === 'relatedServicePageContent') {
            _relatedServiceData(serviceData, pageContainer);
            return;
        }
        if (pageContainer === 'relatedFleetDetailPageContainer') {
            _pageRelatedFleetDetailData(fleetData, pageContainer);
            return;
        }
        if (pageContainer === 'packagesDealsPageContainer') {
            _pagePackageDealsData(dummyPackageDealsData, pageContainer);
            return;
        }
        if (pageContainer === 'wineTourPageContent') {
            _pageWineToursData(dummyWineTourData, pageContainer);
            return;
        }
        if (pageContainer === 'relatedPackgaeDealsDetailPageContainer') {
            _relatedPackageDealsData(dummyPackageDealsData, pageContainer);
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
                <a href="${websiteUrl}/blog/${item?.pageUrl}" title="${item?.pageTitle}">
				<div class="blog-inner-div">
					<div class="title">${item.categoryData?.categoryName}</div>
					<div class="image-div">
						<img src="${blogPixPath}/${item?.seoFlyer}"
						alt="${item?.pageTitle}" />
					</div>

					<div class="text-div">
						<div class="count">
							<i class="bi-calendar3"></i> ${_fetchFormatDate(item?.updatedTime)}
							<span>|</span>
							<i class="bi-eye-fill"></i> ${item?.viewCount} VIEWS
						</div>

						<h3>${item?.pageTitle}</h3>
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

/// Initialize Fetch Related Blog List ///
function _pageRelatedBlogData(data, pageContainer) {
	const content = data.map((item) => {
	return `
		<a href="${websiteUrl}/blog/${item.pageUrl}" title="${item.pageTitle}">
			<div class="related-post">
				<div class="image-div">
					<img src="${blogPixPath}/${item.seoFlyer}"
					alt="${item.pageTitle}" />
				</div>
				<div class="cont-div">
					<h3>${item.pageTitle}</h3>
					<div class="comment">
						<i class="bi-clock"></i> 
						<span>${_fetchFormatDate(item.updatedTime)}</span>
					</div>
				</div>
			</div>
		</a>
	`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Related Blog Detail List ///
function _pageRelatedBlogDetailData(data, pageContainer) {
	const content = data.map((item) => {

        return `
        <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
			<div class="blog-div carousel-blog-div">
                <a href="${websiteUrl}/blog/${item?.pageUrl}" title="${item?.pageTitle}">
				<div class="blog-inner-div">
					<div class="title">${item.categoryData?.categoryName}</div>
					<div class="image-div">
						<img src="${blogPixPath}/${item?.seoFlyer}"
						alt="${item?.pageTitle}" />
					</div>

					<div class="text-div">
						<div class="count">
							<i class="bi-calendar3"></i> ${_fetchFormatDate(item?.updatedTime)}
							<span>|</span>
							<i class="bi-eye-fill"></i> ${item?.viewCount} VIEWS
						</div>

						<h3>${item?.pageTitle}</h3>
						<p>
							${item?.seoDescription.substring(0, 120)}
							${item?.seoDescription.length > 120 ? '...' : ''}
						</p>
					</div>
				</div></a>
			</div>
        </div>
		`;
	}).join("");
	
	// First inject the HTML
    $(`#${pageContainer}`).html(content);
    _call_carousel(1);
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
                            <span>Automatic</span>
                        </div>
                        <div class="feature">
                            <i class="bi bi-luggage"></i>
                            <span>${item?.luggage} Suitcase</span>
                        </div>
                    </div>

                    <div class="price">$${item?.price}  <span> / Hourly Rate</span></div>
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

/// Fetch Each Page Details ///
function _getEachPageDetails(options) {
    const {
        pageCategory = "",
        limit = '',
        pageId = '',
    } = options;

    try {
        //// Dummy Blog Response //////
        let response = null;

        if (pageCategory === "BLOG") {
            response = {
                data:
                    {
                    pageId: 'PAGE02620260822012240',
                    pageUrl: 'monterey-airport-limo-black-car-service',
                    pageTitle: 'Monterey Airport Limo and Black Car Service',
                    seoFlyer: 'monterey-airport-limo.jpeg',
                    seoDescription: 'Book airport transportation from Monterey to San Francisco International Airport (SFO), Oakland International Airport (OAK), Sacramento, and other destinations with professional chauffeurs and luxury sedans, SUVs, and limousines.',
                    pageContent: `
                        <h2>Monterey Airport Limo and Black Car Service</h2>

                        <p>Traveling to or from Monterey, California? Make your airport transportation comfortable, convenient, and stress-free with 1st Classic Chauffeur Services. We provide professional airport limo and black car services for individuals, families, business travelers, and groups looking for reliable transportation throughout California.</p>

                        <p>Whether you are heading to an important business meeting, catching an early morning flight, or returning home after a long journey, our professional chauffeurs are committed to providing a smooth and comfortable travel experience. Enjoy luxury vehicles, courteous service, and dependable airport transfers tailored to your schedule.</p>

                        <h2>Professional Airport Transportation from Monterey</h2>

                        <p>Getting to the airport on time is essential, especially when you have a scheduled flight to catch. Our Monterey airport transportation service offers a convenient alternative to driving yourself, dealing with airport parking, or relying on unpredictable transportation options.</p>

                        <p>We provide private airport transfers from Monterey to major airports and destinations across California. Our chauffeurs focus on punctual pickups, comfortable journeys, and professional customer service from the moment your trip begins.</p>

                        <h3>Airport Transfers to Major California Airports</h3>

                        <p>1st Classic Chauffeur Services provides airport transportation connecting Monterey with several major airports, including:</p>

                        <ul>
                            <li><strong>San Francisco International Airport (SFO):</strong> Enjoy convenient private transportation between Monterey and San Francisco International Airport for domestic and international flights.</li>

                            <li><strong>Oakland International Airport (OAK):</strong> Travel comfortably between Monterey and Oakland with a professional chauffeur handling your transportation.</li>

                            <li><strong>San Jose Mineta International Airport (SJC):</strong> Book a private black car or luxury SUV for convenient transfers to and from San Jose International Airport.</li>

                            <li><strong>Sacramento International Airport (SMF):</strong> Arrange comfortable long-distance airport transportation between Monterey and Sacramento.</li>
                        </ul>

                        <h2>Luxury Black Car and Limo Service in Monterey</h2>

                        <p>Your transportation experience should be just as enjoyable as your destination. Our luxury black car and limousine services are designed for passengers who value comfort, privacy, convenience, and professional chauffeur service.</p>

                        <p>Whether you are traveling alone or with a group, we offer different vehicle options to accommodate your transportation requirements. From executive sedans to spacious SUVs and luxury limousines, you can select a vehicle that suits your journey.</p>

                        <h3>Choose the Right Vehicle for Your Journey</h3>

                        <p>Our transportation options are suitable for different travel needs:</p>

                        <ul>
                            <li><strong>Luxury Sedans:</strong> Ideal for individuals, couples, and executive business travelers who prefer a comfortable and private ride.</li>

                            <li><strong>Luxury SUVs:</strong> A great option for families, small groups, and passengers requiring additional luggage space.</li>

                            <li><strong>Limousines:</strong> Perfect for special occasions, private transportation, and passengers looking for an elevated travel experience.</li>

                            <li><strong>Group Transportation:</strong> Spacious transportation solutions for corporate groups, events, and larger parties.</li>
                        </ul>

                        <h2>Why Choose 1st Classic Chauffeur Services?</h2>

                        <p>Choosing the right airport transportation provider can make a significant difference in your travel experience. At 1st Classic Chauffeur Services, we focus on delivering dependable transportation with attention to comfort, professionalism, and customer satisfaction.</p>

                        <h3>Professional and Experienced Chauffeurs</h3>

                        <p>Our chauffeurs understand the importance of punctuality, courtesy, and safe driving. From pickup to drop-off, you can expect professional service throughout your journey.</p>

                        <h3>Comfortable and Well-Maintained Vehicles</h3>

                        <p>Enjoy your ride in comfortable vehicles designed to provide a relaxing transportation experience. Our fleet offers options for different passenger capacities and travel requirements.</p>

                        <h3>Convenient Advance Reservations</h3>

                        <p>Planning your airport transportation ahead of time helps make your travel arrangements easier. You can schedule your pickup based on your flight details and preferred travel time.</p>

                        <h3>Private and Personalized Transportation</h3>

                        <p>Unlike shared transportation services, private chauffeur transportation provides a more personalized experience. Your journey is arranged around your reservation, pickup location, and destination.</p>

                        <h2>Airport Transportation for Business and Leisure Travelers</h2>

                        <p>Monterey attracts business professionals, tourists, families, and visitors throughout the year. Whatever brings you to the area, reliable transportation helps you move between airports, hotels, offices, and other destinations conveniently.</p>

                        <p>Business travelers can enjoy private transportation for corporate meetings, conferences, airport transfers, and executive travel. Leisure travelers can arrange comfortable rides for hotel transfers, family trips, sightseeing, and special occasions.</p>

                        <h2>How to Book Your Monterey Airport Limo Service</h2>

                        <p>Arranging your airport transportation with 1st Classic Chauffeur Services is straightforward. Follow these steps to plan your journey:</p>

                        <ol>
                            <li><strong>Enter Your Pickup Location:</strong> Provide your pickup address in Monterey or your preferred starting location.</li>

                            <li><strong>Choose Your Destination:</strong> Enter your airport, hotel, business address, or other destination.</li>

                            <li><strong>Select Your Travel Date and Time:</strong> Provide your preferred pickup date and time to help us arrange your transportation.</li>

                            <li><strong>Choose Your Vehicle:</strong> Select a suitable vehicle based on your passenger count, luggage, and travel preferences.</li>

                            <li><strong>Confirm Your Reservation:</strong> Review your booking details and complete your reservation.</li>
                        </ol>

                        <h2>Frequently Asked Questions</h2>

                        <h3>Do you provide airport transportation from Monterey to SFO?</h3>

                        <p>Yes. You can arrange private airport transportation between Monterey and San Francisco International Airport (SFO) through 1st Classic Chauffeur Services.</p>

                        <h3>Can I book a black car service from Monterey to Oakland Airport?</h3>

                        <p>Yes. Our airport transportation services include private transfers between Monterey and Oakland International Airport (OAK).</p>

                        <h3>What types of vehicles are available?</h3>

                        <p>Depending on your transportation requirements, you can choose from luxury sedans, SUVs, limousines, and group transportation options.</p>

                        <h3>Can I reserve airport transportation in advance?</h3>

                        <p>Yes. We recommend arranging your reservation in advance so your pickup details and transportation requirements can be properly coordinated.</p>

                        <h3>Do you offer transportation for corporate travelers?</h3>

                        <p>Yes. Our chauffeur services are suitable for business professionals requiring private airport transfers, executive transportation, and corporate travel arrangements.</p>

                        <h2>Book Your Monterey Airport Transportation Today</h2>

                        <p>Make your next airport journey more comfortable with 1st Classic Chauffeur Services. Whether you need a luxury black car, private airport transfer, limousine, or group transportation, we are ready to help you plan your trip.</p>

                        <p>Enjoy professional chauffeur service, comfortable vehicles, and convenient transportation from Monterey to major airports and destinations throughout California.</p>

                        <p>Contact 1st Classic Chauffeur Services today or make your reservation online to arrange your next ride.</p>
                    `,
                    updatedTime: '2026-10-20 10:30:00',
                    viewCount: 245,
                    createdByData: {
                        fullname: 'Admin',
                        emailAddress: 'admin@1stclassiclimos.com'
                    },
                    updatedByData: null,
                    categoryData: {
                        categoryId: 'CAT004',
                        categoryName: 'SERVICE LOCATION'
                    },
                    pagePicturesData: [
                        { sn: 1, pagePix: 'monterey-airport-limo.jpeg' },
                        { sn: 2, pagePix: 'corporate-chauffeur-services.webp' },
                    ]
                }
            };
        }

        if (pageCategory == 'FLEET') {
            response = {
                data: {
                    pageId: 'PAGE02620260822012240',
                    pageUrl: 'executive-class-sedan',
                    pageTitle: 'Executive Class Sedan',
                    seoFlyer: 'executive-sedan.jpg',
                    seoDescription: 'Travel in comfort and sophistication with our Executive Class Sedan chauffeur service. Ideal for business travel, airport transfers, corporate transportation, and private rides throughout the Bay Area and California.',
                    pageContent: `
                        <p>A great choice for hourly charter, business travel, airport transfers, and point-to-point transportation. The Executive Class Sedan is also perfect for wedding anniversary outings, special events, and other occasions where comfort, privacy, and style matter.</p>
                        <h2>Executive Class Sedan Overview</h2>
                        <p>Enjoy a comfortable and refined travel experience with our Executive Class Sedan. Designed for individuals and small groups, this vehicle combines a luxurious leather interior with convenient entertainment features, making it suitable for both business and personal transportation.</p>
                        <ul>
                            <li><strong>Maximum Passenger Capacity:</strong> Up to 3 Passengers.</li>
                            <li><strong>Available Color:</strong> Black.</li>
                            <li><strong>Windows:</strong> Limo Tinted Windows for added privacy.</li>
                            <li><strong>Interior:</strong> Luxurious Leather Interior.</li>
                            <li><strong>Music Connectivity:</strong> iPhone and Android Phone Music Adapter.</li>
                            <li><strong>Hourly Rate:</strong> $74.99 plus Tax and Chauffeur Gratuity.</li>
                            <li><strong>Minimum Booking:</strong> 3 Hours.</li>
                        </ul>
                        <h2>Book Your Executive Class Sedan</h2>
                        <p>Whether you need transportation for a business meeting, airport transfer, hourly charter, anniversary celebration, or special event, our Executive Class Sedan offers a comfortable and private way to travel.</p>
                        <p>Reserve your vehicle with 1st Classic Chauffeur Services and enjoy professional chauffeur transportation tailored to your schedule.</p>
                    `,  
                    passengers: 4,
                    luggage: 2,
                    price: "84.99",
                    pagePicturesData: [
                        { sn: 1, pagePix: 'executive-sedan.jpg' },
                        { sn: 2, pagePix: 'FLEET001-16326547cf1f7e.jpg' },
                        { sn: 3, pagePix: 'FLEET001-26326547cf21c3.jpg' },
                    ]
                },
            };
        }

        if (pageCategory === "SERVICE") {
            response = {
                data:
                    {
                    pageId: 'PAGE026202608220122',
                    pageUrl: 'airport-transportation',
                    pageTitle: 'Airport Transportation Limousine Black Car Service',
                    seoFlyer: 'service-2.jpg',
                    seoDescription: 'Book an Airport Transportation, Car, Sedan, SUV, and Van services for Airport Transfer To and From San Francisco (SFO), Oakland, San Jose (SJC), Sacramento (SMF).',
                    pageContent: `
                        <h2>Professional Airport Transportation, Limousine and Black Car Service</h2>

                        <p>Enjoy comfortable, reliable, and professional transportation with 1st Classic Chauffeur Services. We provide private airport transfers, luxury limousine services, and black car transportation for individuals, families, business executives, and groups. Whether you are traveling to the airport, attending a corporate event, or planning a special occasion, we offer convenient transportation tailored to your needs.</p>

                        <h2>Reliable Airport Transportation Services</h2>

                        <p>Make your airport journeys easier with professional chauffeur transportation. Whether you need an airport pickup or drop-off, our private transportation services provide a comfortable alternative to driving yourself or dealing with airport parking. We serve major airports, hotels, business locations, and other destinations, helping you travel conveniently and on schedule.</p>

                        <h2>Luxury Limousine and Black Car Services</h2>

                        <p>Travel in style with our luxury limousine and black car services. Our transportation options are designed for passengers who value comfort, privacy, and professional service. From executive sedans and spacious SUVs to luxury limousines, we have transportation solutions for different occasions and passenger requirements.</p>

                        <ul>
                            <li><strong>Airport Transfers:</strong> Private transportation to and from airports.</li>
                            <li><strong>Black Car Service:</strong> Comfortable and private transportation for personal and business travel.</li>
                            <li><strong>Limousine Service:</strong> Elegant transportation for special occasions and events.</li>
                            <li><strong>Corporate Transportation:</strong> Professional chauffeur services for executives, meetings, and business engagements.</li>
                            <li><strong>Group Transportation:</strong> Convenient transportation for families, groups, and corporate events.</li>
                        </ul>

                        <h2>Why Choose 1st Classic Chauffeur Services?</h2>

                        <p>We understand that dependable transportation is an important part of every journey. Our focus is to provide a comfortable and convenient experience through professional service and suitable luxury vehicles.</p>

                        <ul>
                            <li><strong>Professional Chauffeurs:</strong> Courteous and experienced transportation professionals.</li>
                            <li><strong>Luxury Vehicles:</strong> Comfortable sedans, SUVs, and limousines for different travel needs.</li>
                            <li><strong>Private Transportation:</strong> Personalized rides based on your pickup and destination.</li>
                            <li><strong>Convenient Reservations:</strong> Schedule your transportation ahead of your travel date.</li>
                        </ul>

                        <h2>Book Your Airport Transportation or Private Chauffeur Service</h2>

                        <p>Whether you need a reliable airport transfer, luxury black car, limousine, or corporate transportation, 1st Classic Chauffeur Services is ready to help. Choose your pickup location, destination, travel date, and preferred vehicle to arrange your next journey.</p>

                        <p>Make your reservation today and experience comfortable, convenient, and professional chauffeur transportation.</p>
                    `,
                    updatedTime: '2026-10-20 10:30:00',
                    pagePicturesData: [
                        { sn: 1, pagePix: 'service-2.jpg' },
                        { sn: 2, pagePix: 'service-3.jpg' },
                    ]
                }
            };
        }

        if (pageCategory === "PACKAGE_DEALS") {
            response = {
                data:
                    {
                    pageId: 'PAGE0262026082201113',
                    pageUrl: 'sonoma-valley-limousine-wine-tour',
                    pageTitle: 'Private Sonoma Valley Limousine Wine Tasting Tour',
                    seoFlyer: 'private-san-francisco.jpeg',
                    seoDescription: 'Book a private Napa Valley limousine wine tasting tour from San Francisco, Oakland, and the San Francisco Bay Area. Enjoy luxury transportation, professional chauffeurs, and unforgettable visits to Napa Valley vineyards and wineries.',
                    pageContent: `
                        <h2>Private Napa Valley Limousine Wine Tasting Tours</h2>

                        <p>Experience the ultimate private Napa Valley wine tasting tour with 1st Classic Chauffeur Services. Discover the beautiful vineyards, world-renowned wineries, and breathtaking landscapes of Napa Valley while enjoying the comfort, privacy, and convenience of luxury limousine transportation. Whether you are planning a romantic getaway, a weekend wine tour, a birthday celebration, or a special outing with friends and family, our private chauffeur services provide a safe, comfortable, and memorable way to explore California's famous wine country.</p>

                        <p>Located north of San Francisco, Napa Valley is one of the world's most celebrated wine-producing destinations. With hundreds of wineries, beautiful vineyard landscapes, and unique wine-tasting experiences, the region attracts wine enthusiasts and visitors from around the world. Our private Napa Valley wine tours allow you to enjoy everything this beautiful destination has to offer without worrying about driving, directions, or transportation arrangements.</p>

                        <h2>Explore the Beautiful Napa Valley Vineyards and Wineries</h2>

                        <p>Napa Valley is home to an incredible collection of vineyards and wineries, each offering its own history, atmosphere, wine varieties, and tasting experiences. From traditional family-owned wineries to prestigious wine estates, there is something special for every wine enthusiast. Whether you are an experienced wine collector or exploring wine tasting for the first time, a private tour gives you the flexibility to discover wineries that match your interests.</p>

                        <p>Enjoy the scenic beauty of Napa Valley as your professional chauffeur takes you through picturesque vineyard roads, charming wine-country communities, and some of the region's most recognized winery destinations. You can plan your preferred winery stops, enjoy wine tastings, take memorable photographs, and experience the unique character of California wine country at your own pace.</p>

                        <h2>Luxury Limousine Transportation for Your Napa Valley Wine Tour</h2>

                        <p>Make your wine-tasting experience even more special with luxury transportation from 1st Classic Chauffeur Services. We offer a selection of premium Executive Class vehicles designed to provide comfort, privacy, and convenience throughout your journey. Whether you are traveling as a couple, with family, or as part of a larger group, we have transportation options to accommodate your needs.</p>

                        <p>Choose from our selection of luxury vehicles, including:</p>

                        <ul>
                            <li><strong><a href="https://1stclassiclimos.com/executive-class-stretch-limousine" title="Executive Class Stretch Limousine">Stretch Limousine:</a></strong> Enjoy an elegant and luxurious wine-country experience with spacious seating and premium comfort.</li>
                            <li><strong><a href="https://1stclassiclimos.com/executive-class-sedan" title="Executive Class Sedan">Executive Class Sedan:</a></strong> An excellent choice for couples, individuals, and private executive wine tours.</li>
                            <li><strong><a href="https://1stclassiclimos.com/executive-class-suv" title="Executive Class SUV">Luxury SUV:</a></strong> Comfortable and spacious transportation for small families and groups.</li>
                            <li><strong><a href="https://1stclassiclimos.com/executive-class-sprinter-van" title="Executive Class Sprinter Van">Executive Sprinter Van:</a></strong> Ideal for larger groups looking for comfortable private transportation.</li>
                            <li><strong>Charter Bus:</strong> A convenient transportation option for corporate outings, celebrations, and larger wine-tasting groups.</li>
                        </ul>

                        <h2>Private Wine Tours from San Francisco and the Bay Area</h2>

                        <p>Planning a Napa Valley wine-tasting trip from San Francisco or the surrounding Bay Area? 1st Classic Chauffeur Services provides private luxury transportation for visitors traveling from San Francisco, Oakland, and nearby communities. Avoid the inconvenience of driving through unfamiliar roads and enjoy a relaxing journey to Napa Valley with a professional chauffeur.</p>

                        <p>Whether you need transportation from your hotel, residence, airport, or business location, we can help arrange a convenient pickup and drop-off for your wine tour. Our private chauffeur service allows you to focus on enjoying your day while we take care of your transportation.</p>

                        <h2>Why Choose 1st Classic for Your Napa Valley Wine Tour?</h2>

                        <p>At 1st Classic Chauffeur Services, we understand that a memorable wine tour requires more than simply visiting wineries. It is about enjoying the journey, exploring beautiful destinations, and traveling in comfort. Our goal is to provide reliable private transportation that makes your Napa Valley experience convenient and enjoyable.</p>

                        <ul>
                            <li><strong>Professional Chauffeurs:</strong> Travel with courteous and experienced chauffeurs familiar with Bay Area and Napa Valley transportation routes.</li>
                            <li><strong>Luxury Fleet:</strong> Choose from executive sedans, luxury SUVs, stretch limousines, Sprinter vans, and charter buses.</li>
                            <li><strong>Private Transportation:</strong> Enjoy a personalized transportation experience without sharing your ride with strangers.</li>
                            <li><strong>Flexible Wine Tour Experience:</strong> Plan your preferred winery destinations and schedule according to your travel arrangements.</li>
                            <li><strong>Comfort and Convenience:</strong> Relax and enjoy the beautiful scenery while your chauffeur handles the driving.</li>
                            <li><strong>Group Transportation:</strong> Suitable transportation options for couples, families, friends, corporate groups, and special celebrations.</li>
                        </ul>

                        <h2>Perfect for Special Occasions and Group Wine Tours</h2>

                        <p>A private Napa Valley limousine wine tour is an excellent way to celebrate life's special moments. Whether you are organizing a birthday celebration, anniversary, engagement, bachelor or bachelorette party, corporate outing, or weekend getaway, luxury chauffeur transportation adds comfort and convenience to your experience.</p>

                        <p>Travel with your guests, explore beautiful vineyards, enjoy scheduled wine tastings, and create unforgettable memories together. With different vehicle options available, we can help you select suitable transportation for your group size and travel requirements.</p>

                        <h2>Book Your Private Napa Valley Limousine Wine Tour Today</h2>

                        <p>Make your next Napa Valley wine-tasting adventure special with 1st Classic Chauffeur Services. From San Francisco and Oakland to the beautiful vineyards of Napa Valley, we provide private limousine and black car transportation designed around your travel needs.</p>

                        <p>Choose your preferred vehicle, arrange your pickup location, select your travel date, and let us help you plan a comfortable journey to California wine country. Whether you are looking for a luxury limousine, executive sedan, spacious SUV, Sprinter van, or charter bus, we are ready to assist with your transportation arrangements.</p>

                        <p><strong>Reserve your private Napa Valley wine tour today and experience wine country in comfort, style, and class with 1st Classic Chauffeur Services!</strong></p>
                    `,
                    price: "550.54",
                    hourlyRate: "6 Hours",
                    promoCode: "WINE1ST",
                    updatedTime: '2026-10-20 10:30:00',
                }
            };
        }

        if (pageCategory === "WINE_TOUR") {
            response = {
                data:
                    {
                    pageId: 'PAGE0262026082201116',
                    pageUrl: 'napa-valley-wine-country',
                    pageTitle: 'Private Sonoma Valley Limousine Wine Tasting Tour',
                    seoFlyer: 'napa-valley-limousine-wine-tours.jpeg',
                    seoDescription: 'Book a private Napa Valley limousine wine tasting tour from San Francisco and the San Francisco Bay Area. Explore over 400 wineries and vineyards while enjoying luxury transportation with professional 1st Classic chauffeurs.',
                    pageContent: `
                        <h2>The World's Great Wine-Growing Regions – Napa Valley</h2>

                        <p>Napa Valley is recognized as one of the world's great wine-growing regions, offering ideal conditions for growing some of the finest wine grapes, including Chardonnay and Pinot Noir. With more than 400 vineyards, grape growers, and winemakers, Napa Valley is celebrated for its exceptional wines, beautiful countryside, and near-perfect year-round weather conditions.</p>

                        <p>Beyond its outstanding wine production, Napa Valley is also known for its exclusive gourmet restaurants, charming cafes, and luxurious private spa-treatment centers. Its beautiful landscapes and relaxing atmosphere make it an ideal destination for visitors looking to enjoy wine tasting, fine dining, and a memorable getaway.</p>

                        <h2>Experience a Private Napa Valley Wine Tasting Tour</h2>

                        <p>Many visitors travel to Napa Valley to explore its famous wineries and experience the exceptional quality of its vintage wines. Whether you are a wine enthusiast or simply looking for an exciting day exploring California's wine country, Napa Valley offers an unforgettable experience.</p>

                        <p>If you are planning a visit to Napa Valley, 1st Classic Chauffeur Services is ready to take you on an exciting wine tour. We provide convenient private pickups from locations throughout the San Francisco Bay Area, including San Francisco and Oakland, taking you directly to the beautiful vineyards and wineries of Napa Valley.</p>

                        <p>Enjoy a relaxing journey as our knowledgeable and courteous chauffeurs take you across Napa Valley, allowing you to explore its beautiful wine-growing region and experience some of the finest wines available. Our professional transportation service makes your wine-tasting adventure comfortable, convenient, and enjoyable.</p>

                        <h2>Luxury Executive Class Vehicles for Your Napa Valley Wine Tour</h2>

                        <p>Travel in comfort and style with our selection of premium Executive Class vehicles. At 1st Classic Chauffeur Services, we offer different luxury transportation options to accommodate individuals, couples, families, and larger groups planning a private Napa Valley wine tour.</p>

                        <p>Choose from our available luxury vehicles, including:</p>

                        <ul>
                            <li><strong><a href="https://1stclassiclimos.com/executive-class-sedan" title="Executive Class Sedan">Executive Class Sedan:</a></strong> Enjoy comfortable and sophisticated transportation for individuals and couples.</li>

                            <li><strong><a href="https://1stclassiclimos.com/executive-class-suv" title="Executive Class SUV">Executive Class SUV:</a></strong> Spacious luxury transportation for families and small groups.</li>

                            <li><strong><a href="https://1stclassiclimos.com/executive-class-sprinter-van" title="Executive Class Sprinter Van">Executive Class Sprinter Van:</a></strong> An excellent option for groups seeking comfortable and convenient transportation.</li>

                            <li><strong><a href="https://1stclassiclimos.com/executive-class-stretch-limousine" title="Executive Class Stretch Limousine">Stretch Limousine:</a></strong> Experience an elegant and luxurious wine-tasting journey through Napa Valley.</li>

                            <li><strong>Executive Class Charter Bus:</strong> Convenient transportation for larger groups and organized wine tours.</li>

                            <li><strong>Limousine Bus:</strong> Enjoy spacious group transportation while exploring the beautiful Napa Valley wine region.</li>
                        </ul>

                        <h2>Private Chauffeur Service from San Francisco Bay Area to Napa Valley</h2>

                        <p>Whether you are departing from San Francisco, Oakland, or another location within the San Francisco Bay Area, 1st Classic Chauffeur Services provides private transportation to Napa Valley. Our chauffeurs are familiar with the region and will ensure you enjoy a comfortable journey to your preferred winery destinations.</p>

                        <p>Relax in one of our luxurious Executive Class vehicles while we take care of the driving. Enjoy the beautiful countryside, explore Napa Valley's vineyards, and experience the exceptional wines that make this destination famous worldwide.</p>

                        <h2>Book Your Napa Valley Limousine Wine Tour Today</h2>

                        <p>Make your next visit to Napa Valley a memorable experience with 1st Classic Chauffeur Services. Whether you are planning a private wine-tasting adventure, a day exploring beautiful vineyards, or a special outing with friends and family, we have the luxury vehicles and professional chauffeurs to make your journey enjoyable.</p>

                        <p>Reserve your preferred Executive Class vehicle today and let our knowledgeable and courteous chauffeurs take you on an unforgettable wine tour through Napa Valley.</p>

                        <p><strong>Experience Napa Valley wine country in comfort, luxury, and style with 1st Classic Chauffeur Services!</strong></p>
                    `,
                    updatedTime: '2026-10-20 10:30:00',
                }
            };
        }

        //// Call Endpoint //////
        // _callFetchEndPoints({
        //     url: `site/fetch-page?pageCategory=${pageCategory}&pageId=${pageId}&limit=${limit || ''}`,
        // })
        // .then((response) => {

            const data = response?.data;

            if (!data) {
                _actionAlert("Page details not found", false);
                return;
            }

            const pageTitle = data.pageTitle ?? '';
            const seoDescription = data.seoDescription ?? '';
            const pageContent = data.pageContent ?? '';
            const seoFlyer = data.seoFlyer ?? '';
            const updatedTime = data.updatedTime ?? '';
            const viewCount = data.viewCount ?? 0;
            const createdByName = data.createdByData?.fullname ?? data.updatedByData?.fullname ?? '';
            const createdByEmail = data.createdByData?.emailAddress ?? data.updatedByData?.emailAddress ?? '';
            const categoryName = data.categoryData?.categoryName ?? '';
            const passengers = data?.passengers ?? '';
            const luggage = data?.luggage ?? '';
            const price = data?.price ?? '';
            const hourlyRate = data?.hourlyRate ?? '';
            const promoCode = data?.promoCode ?? '';
        
            let pixPath = '';
            if (pageCategory == 'SERVICE') {
                pixPath = servicePixPath;
            } else if (pageCategory == 'FLEET') {
                pixPath = fleetPixPath;
            } else if (pageCategory == 'BLOG') {
                pixPath = blogPixPath;
            } else if (pageCategory == 'PACKAGE_DEALS') {
                pixPath = packageDealsPixPath;
            } else if (pageCategory == 'WINE_TOUR') {
                pixPath = wineTourPixPath;
            }

            $('#pageTitle').html(pageTitle);
			$('#seoDescription').html(seoDescription);
			$('#pageContent').html(pageContent);
			$('#createdByName').html(createdByName);
			$('#createdByEmail').html(createdByEmail);
			$('#updatedTime').html(_fetchFormatDate(updatedTime));
            $('#viewCount').html(viewCount);
            $('#categoryName').html(categoryName);
            $('#passengers').html(passengers);
            $('#luggage').html(luggage);
            $('#price').html('$' + price);  
            $('#hourlyRate').html(hourlyRate);  
            $('#promoCode').html(promoCode); 
            
			$('#seoFlyer').attr('src',`${pixPath}/${seoFlyer}?t=${new Date().getTime()}`);
			updateReadingTime();
			
			const picturesArray = data?.pagePicturesData ?? [];
			let pixHtml = '';

			for (let item of picturesArray) {
				pixHtml += `
					<div class="each-img-div" title="Click to Preview" id="img${item?.sn}"
						onclick="_viewPreviewImage('img${item.sn}', 'pagePreviewPix')">
						<img src="${pagesPixPath}/${item?.pagePix}"
						alt="${pageTitle}" />
					</div>
				`;
			}
			$('#fetchPagePictures').html(pixHtml);
			if (picturesArray.length>0) {
                $('.bottom-img-div').show();
                $('.gallery-nav-btn').show();
			} else {
                $(".bottom-img-div").hide();
                $('.gallery-nav-btn').hide();
			}

        // })
        // .catch((error) => {
        //     console.error("Error:", error);
        //     if (error.status == 0) {
        //         _actionAlert("Check your internet connection and try again", false);
        //     } else {
        //         _actionAlert(error.message, false);
        //     }
        // });

    } catch (error) {
        console.error("Error:", error);
    }
}

/// Initialize Fetch Service List ///
function _indexPageServiceData(data, pageContainer) {
    const content = data.map((item) => {

        return `
            <div class="service-div" data-aos="fade-up" data-aos-duration="1000">
                <a href="${websiteUrl}/${item?.pageUrl}" title="Learn More About ${item?.pageTitle}">
                    <div class="image-div">
                        <img src="${servicePixPath}/${item?.seoFlyer}" alt="${item?.pageTitle}">
                    </div>
                    <div class="icon-div">
                        <img src="${websiteUrl}/all-images/images/icon.png" alt="Icon" />
                    </div>
                    <div class="content-div">
                        <h3>${item?.pageTitle}</h3>
                        <p>${item?.description}</p>
                        
                            <button class="btn" title="Read More">
                                Read More
                                <i class="bi bi-arrow-right-circle"></i>
                            </button>
                        
                    </div>
                </a>
            </div>
        `;
    }).join("");
    // First inject the HTML
    $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Main Service List ///
function _mainPageServiceData(data, pageContainer) {
    const content = data.map((item) => {

        return `
            <div class="service-div main-service-div" data-aos="fade-up" data-aos-duration="1000">
                <a href="${websiteUrl}/${item?.pageUrl}" title="Learn More About ${item?.serviceName}">
                    <div class="image-div">
                        <img src="${servicePixPath}/${item?.seoFlyer}" alt="${item?.pageTitle}">
                    </div>
                    <div class="icon-div">
                        <img src="${websiteUrl}/all-images/images/icon.png" alt="Icon" />
                    </div>
                    <div class="content-div">
                        <h3>${item?.pageTitle}</h3>
                        <p>${item?.description}</p>
                        
                            <button class="btn" title="Read More">
                                Read More
                                <i class="bi bi-arrow-right-circle"></i>
                            </button>
                        
                    </div>
                </a>
            </div>
        `;
    }).join("");
    // First inject the HTML
    $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Main Service List ///
function _relatedChartterServiceData(data, pageContainer) {
    const content = data.map((item) => {
        return `
            <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                <div class="service-div main-service-div" data-aos="fade-up" data-aos-duration="1000">
                    <a href="${websiteUrl}/${item?.pageUrl}" title="Learn More About ${item?.serviceName}">
                        <div class="image-div">
                            <img src="${servicePixPath}/${item?.seoFlyer}" alt="${item?.pageTitle}">
                        </div>
                        <div class="icon-div">
                            <img src="${websiteUrl}/all-images/images/icon.png" alt="Icon" />
                        </div>
                        <div class="content-div">
                            <h3>${item?.pageTitle}</h3>
                            <p>${item?.description}</p>
                            
                            <button class="btn" title="Read More">
                                Read More
                                <i class="bi bi-arrow-right-circle"></i>
                            </button>
                        </div>
                    </a>
                </div>
            </div> 
        `;
    }).join("");
    // First inject the HTML
    $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Related Service List ///
function _relatedServiceData(data, pageContainer) {
	const content = data.map((item) => {
		return `
		<a href="${websiteUrl}/${item?.pageUrl ?? ''}" title="${item?.pageTitle}">
			<div class="related-post">
				<div class="image-div">
					<img src="${servicePixPath}/${item?.seoFlyer}"
					alt="${item?.pageTitle}" />
				</div>
				<div class="cont-div">
					<h3>${item?.pageTitle}</h3>
					<div class="comment">
						<i class="bi-clock"></i> 
						<span>${_fetchFormatDate(item.updatedTime)}</span>
					</div>
				</div>
			</div>
		</a>
	`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Related Fleet Detail List ///
function _pageRelatedFleetDetailData(data, pageContainer) {
	const content = data.map((item) => {

       return `
        <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
			<div class="fleet-div carousel-fleet-div">
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
                            <span>Automatic</span>
                        </div>
                        <div class="feature">
                            <i class="bi bi-luggage"></i>
                            <span>${item?.luggage} Suitcase</span>
                        </div>
                    </div>

                    <div class="price">$${item?.price}  <span> / Hourly Rate</span></div>
                    <a href="${websiteUrl}/${item?.url}" title="${item?.fleetName}">
                        <button class="btn" title="View Vehicle"><i class="bi bi-eye"></i> View Vehicle</button>
                    </a>
                </div>
            </div>
        </div>
		`;
	}).join("");
	
	// First inject the HTML
    $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Packages Deals List ///
function _pagePackageDealsData(data, pageContainer) {
    const content = data.map((item) => {

        return `
            <div class="tour-packages-div" data-aos="fade-in" data-aos-duration="800">
              <a href="${websiteUrl}/${item?.pageUrl}" title="${item?.pageTitle}">

                <div class="title">
                    From <span>$${item?.price}</span> |
                    <div class="text no-border">${item?.duration}</div>
                </div>

                <div class="img-div">
                    <img 
                        src="${packageDealsPixPath}/${item?.seoFlyer}" 
                        alt="${item?.pageTitle}"
                    />
                </div>

                <div class="text-div">
                    <div class="div-in">
                        <h2>${item?.pageTitle}</h2>
                        <p>
                            ${item?.seoDescription.substring(0, 120)}
							${item?.seoDescription.length > 120 ? '...' : ''}
                        </p>

                        <button class="btn" title="${item?.pageTitle}">
                            READ MORE <i class="bi-arrow-right"></i>
                        </button>
                    </div>
                </div></a>
            </div>
        `;
    }).join("");

    // First inject the HTML
    $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Main Service List ///
function _pageWineToursData(data, pageContainer) {
    const content = data.map((item) => {
        return `
            <div class="service-div main-service-div main-page-wine-tour" data-aos="fade-up" data-aos-duration="1000">
                <a href="${websiteUrl}/${item?.pageUrl}" title="Learn More About ${item?.pageTitle}">
                    <div class="image-div">
                        <img src="${wineTourPixPath}/${item?.seoFlyer}" alt="${item?.pageTitle}">
                    </div>
                    <div class="icon-div">
                        <img src="${websiteUrl}/all-images/images/icon.png" alt="Icon" />
                    </div>
                    <div class="content-div">
                        <h3>${item?.pageTitle}</h3>
                        <p>
                            ${item?.seoDescription.substring(0, 120)}
							${item?.seoDescription.length > 120 ? '...' : ''}
                        </p>
                        
                        <button class="btn" title="Read More">
                            Read More
                            <i class="bi bi-arrow-right-circle"></i>
                        </button>
                    </div>
                </a>
            </div>
        `;
    }).join("");
    // First inject the HTML
    $(`#${pageContainer}`).html(content);
}

/// Fetch Place Of Interest List ///
function _getPlaceOfInterestList(options = {}) {
    const {
        pageContainer ="placeOfInterestContent",
        pageId,
    } = options;

    try {
        /*
        ///// Real endpoint /////

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
        const placeOfInterestData = {
            data: [
                {
                    name: "Artesa Vineyards & Winery - Napa Valley",
                    address: "1345 Henry Rd, Napa, CA 94559",
                    telephone: "(707) 224-1668",
                    website: "https://www.artesawinery.com",
                    image: `artesa-winery.jpeg`,
                },
                {
                    name: "Beaulieu Vineyard - Napa Valley",
                    address: "1960 St Helena Hwy, Rutherford, CA 94573",
                    telephone: "(707) 257-5749",
                    website: "https://www.bvwines.com",
                    image: `beaulieu.jpeg`,
                },
                {
                    name: "Beringer Vineyards - Napa Valley",
                    address: "2000 Main St, St Helena, CA 94574",
                    telephone: "(707) 257-5771",
                    website: "https://www.beringer.com",
                    image: `beringer.jpeg`,
                }
            ]
        };

        _renderPlaceOfInterestData(placeOfInterestData?.data, pageContainer);
    } catch (error) {
        console.error("Error:", error);
    }
}

/// Initialize Fetch Place Of Interest List ///
function _renderPlaceOfInterestData(data, pageContainer) {
    const content = data.map((item) => {
        return `
            <div class="airport-div place-of-interest-div">
                <a href="${item?.website}" target="_blank" rel="noopener noreferrer">
                    <div class="image">
                        <img
                            src="${placeOfInterestPixPath}/${item?.image}" 
                            alt="${item?.name}"
                            loading="lazy"
                        />
                    </div>

                    <div class="content">
                        <h2>${item?.name}</h2>
                        <p><strong>Address:</strong> ${item?.address}</p>
                        <p><strong>Tel:</strong> ${item?.telephone}</p>
                        <p><strong>Website:</strong> ${item?.website}</p>
                    </div>
                </a>
            </div>
        `;
    }).join("");

    $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Packages Deals List ///
function _relatedPackageDealsData(data, pageContainer) {
    const content = data.map((item) => {

        return `
            <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                <div class="tour-packages-div related-tour-packages-div" data-aos="fade-in" data-aos-duration="800">
                <a href="${websiteUrl}/${item?.pageUrl}" title="${item?.pageTitle}">

                    <div class="title">
                        From <span>$${item?.price}</span> |
                        <div class="text no-border">${item?.duration}</div>
                    </div>

                    <div class="img-div">
                        <img 
                            src="${packageDealsPixPath}/${item?.seoFlyer}" 
                            alt="${item?.pageTitle}"
                        />
                    </div>

                    <div class="text-div">
                        <div class="div-in">
                            <h2>${item?.pageTitle}</h2>
                            <p>
                                ${item?.seoDescription.substring(0, 120)}
                                ${item?.seoDescription.length > 120 ? '...' : ''}
                            </p>

                            <button class="btn" title="${item?.pageTitle}">
                                READ MORE <i class="bi-arrow-right"></i>
                            </button>
                        </div>
                    </div></a>
                </div>
            </div>
        `;
    }).join("");

    // First inject the HTML
    $(`#${pageContainer}`).html(content);
}