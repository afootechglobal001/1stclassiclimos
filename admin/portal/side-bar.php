<div class="side-nav-div animated fadeInLeft">
    <div class="div-in">
        <div class="logo-div">
            <img src="<?php echo $websiteUrl ?>/all-images/images/footer-logo.png" alt="<?php echo $appName ?> logo" />
        </div>

        <div class="nav-wrapper">
    <div class="nav-back-div">
        <div class="title-wrapper">
            <div class="title-div">
                <h3>Main</h3>
            </div>

            <div class="nav-container">
                <div class="nav-div active-li" title="Dashboard" id="dashboard"
                    onclick="_getActivePage({page:'dashboard', divid:'dashboard'});">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </div>

                <div class="nav-div" title="Administrators" id="adminPage"
                    onclick="_getActivePage({page:'adminPage', divid:'adminPage'});">
                    <i class="bi bi-person-badge"></i>
                    <span>Administrators</span>
                </div>

                <div class="nav-div request-nav" title="Bookings" id="bookingsPage"
                    onclick="_getActivePage({page:'bookingsPage', divid:'bookingsPage'});">
                    <div class="left-cont">
                        <i class="bi bi-calendar-check"></i>
                        <span>Bookings</span>
                    </div>
                    
                    <div class="request-count">20</div>
                </div>

                <div class="nav-div" title="Customers" id="customerPage"
                    onclick="_getActivePage({page:'customerPage', divid:'customerPage'});">
                    <i class="bi bi-people"></i>
                    <span>Customers</span>
                </div>

                <div class="nav-div" title="Reports" id="reportPage"
                    onclick="_getActivePage({page:'reportPage', divid:'reportPage'});">
                    <i class="bi bi-graph-up-arrow"></i>
                    <span>Report</span>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            <div class="title-div">
                <h3>Publish</h3>
            </div>

            <div class="nav-container">
                <div class="nav-div" title="Fleets" id="fleetPage"
                    onclick="_getActivePage({page:'fleetPage', divid:'fleetPage'});">
                    <i class="bi bi-car-front"></i>
                    <span>Fleets</span>
                </div>

                <div class="nav-div" title="Wine Tour" id="wineTourPage"
                    onclick="_getActivePage({page:'wineTourPage', divid:'wineTourPage'});">
                    <i class="bi bi-cup-straw"></i>
                    <span>Wine Tour</span>
                </div>

                <div class="nav-div" title="Package Deals" id="packageDealsPage"
                    onclick="_getActivePage({page:'packageDealsPage', divid:'packageDealsPage'});">
                    <i class="bi bi-box-seam"></i>
                    <span>Package Deals</span>
                </div>

                <div class="nav-div" title="Airport Transport" id="airportTransportPage"
                    onclick="_getActivePage({page:'airportTransportPage', divid:'airportTransportPage'});">
                    <i class="bi bi-airplane"></i>
                    <span>Airport Transport</span>
                </div>

                <div class="nav-div" title="Charter Services" id="chartterServicesPage"
                    onclick="_getActivePage({page:'chartterServicesPage', divid:'chartterServicesPage'});">
                    <i class="bi bi-bus-front"></i>
                    <span>Charter Services</span>
                </div>

                <div class="nav-div" title="Service Locations" id="serviceLocationsPage"
                    onclick="_getActivePage({page:'serviceLocationsPage', divid:'serviceLocationsPage'});">
                    <i class="bi bi-geo-alt"></i>
                    <span>Service Locations</span>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            <div class="title-div">
                <h3>Interest</h3>
            </div>

            <div class="nav-container">
                <div class="nav-div" title="Resorts" id="resortPage"
                    onclick="_getActivePage({page:'resortPage', divid:'resortPage'});">
                    <i class="bi bi-buildings"></i>
                    <span>Resorts</span>
                </div>

                <div class="nav-div" title="Airports" id="airportsPage"
                    onclick="_getActivePage({page:'airportsPage', divid:'airportsPage'});">
                    <i class="bi bi-airplane"></i>
                    <span>Airports</span>
                </div>

                <div class="nav-div" title="Affiliates" id="affiliatesPage"
                    onclick="_getActivePage({page:'affiliatesPage', divid:'affiliatesPage'});">
                    <i class="bi bi-diagram-3"></i>
                    <span>Affiliates</span>
                </div>
            </div>
        </div>

        <div class="title-wrapper">
            <div class="title-div">
                <h3>System</h3>
            </div>

            <div class="nav-container">
                <div class="nav-div" title="Blog" id="blogPage"
                    onclick="_getActivePage({page:'blogPage', divid:'blogPage'});">
                    <i class="bi bi-journal-richtext"></i>
                    <span>Blog</span>
                </div>

                <div class="nav-div" title="Frequently Asked Questions" id="faqPage"
                    onclick="_getActivePage({page:'faqPage', divid:'faqPage'});">
                    <i class="bi bi-patch-question"></i>
                    <span>FAQ</span>
                </div>

                <div class="nav-div" title="NewsLetter" id="newsLetterPage"
                    onclick="_getActivePage({page:'newsLetterPage', divid:'newsLetterPage'});">
                    <i class="bi bi-envelope-paper"></i>
                    <span>NewsLetter</span>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-back-div">
        <div class="title-wrapper">
            <div class="title-div">
                <h3>System Configuration</h3>
            </div>

            <div class="nav-container">
                <div class="nav-div" title="System Settings" id="settingsPage"
                    onclick="_getActivePage({page:'settingsPage', divid:'settingsPage'});">
                    <i class="bi bi-sliders"></i>
                    <span>Settings</span>
                </div>

                <div class="nav-div" title="Log-Out" onclick="_confirmLogOut();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Log-Out</span>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>