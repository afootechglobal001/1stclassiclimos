<?php include 'alert.php' ?>
<header class="fadeInDown animated">
    <div class="header-div-in">
        <div class="header-nav-div">
            <div class="left-nav">
                <ul>
                    <li class="active-li" title="Dashboard" onclick="_getActivePage({page:'dashboard', divid:'topDashboard'});" id="topDashboard"><i class="bi-speedometer2"></i> Dashboard</li>
                    <li title="Pending Request" onclick="_getActivePage({page:'pendingRequestPage', divid:'topPendingRequestPage'});" id="topPendingRequestPage"><i class="bi bi-car-front"></i> Recent Bookings <div class="request-count">20</div></li>
                </ul>
            </div>

            <div class="right-nav">
                <div class="right-icon-div left-icon-div">
                    <button class="mode-switch" title="Switch Mode" id="darkModeBtn">
                        <i class="bi bi-moon"></i>
                    </button>

                    <div class="icon-div" onclick="_getActivePage({page:'settingsPage', divid:'settingsPage'});"
                        title="System Settings">
                        <i class="bi-gear"></i>
                    </div>

                    <div class="icon-div bell_notification"
                        onclick="" title="System Alert">
                        <i class="bi-bell"></i>
                        <div>20</div>
                    </div>
                </div>

                <div class="right-icon-div no-border" title="Click To View Profile" onclick="_toggleProfileDiv()">
                    <div class="profile-div">
                        <div class="info-div">
                            <div class="name"><strong id="loginHeaderName"><script>
                                        $("#loginHeaderName").html(capitalizeFirstLetterOfEachWord(staffLoginData?.firstName + " " + staffLoginData?.lastName));
                                    </script></strong></div>
                            <div class="role" id="loginRoleName"><script>
                                    $("#loginRoleName").html(staffLoginData?.roleData?.roleName);
                                </script></div>
                        </div>

                        <div class="img-div" id="profilePix">
                            <script>
                                $("#profilePix").html('<img src="<?php echo $websiteUrl ?>/all-images/images/avatar.jpg" alt="Profile Image">');
                            </script>
                        </div>
                    </div>
                </div>

                <div class="toggle">
                    <div class="toggle-in">
                        <div class="toggle-title">
                            <div class="dp" id="loginProfileName">
                                <script>
                                    $("#loginProfileName").html(getFirstLettersOfEachWord(staffLoginData?.firstName + " " + staffLoginData?.lastName));
                                </script>
                            </div>
                            <div class="text">
                                <h2 id="loginUserFullname">
                                    <script>
                                        $("#loginUserFullname").html(capitalizeFirstLetterOfEachWord(staffLoginData?.firstName + " " + staffLoginData?.lastName));
                                    </script>
                                </h2>
                                <p id="loginUserEmail">
                                    <script>
                                        $("#loginUserEmail").html(staffLoginData?.emailAddress);
                                    </script>
                                </p>
                                <p id="loginUserPhone"></p>
                                    <script>
                                        $("#loginUserPhone").html(staffLoginData?.phoneNumber);
                                    </script>
                                </p>
                            </div>
                        </div>

                        <ul>
                            <li title="Dashboard" onclick="_getActivePage({page:'dashboard', divid:'dashboard'});">
                                <i class="bi bi-speedometer2"></i> Dashboard
                            </li>
                            <li title="Administrators" onclick="_getActivePage({page:'adminPage', divid:'adminPage'});">
                                <i class="bi bi-people"></i> Administrators
                            </li>
                            <li title="Bookings"
                                onclick="_getActivePage({page:'bookingsPage', divid:'bookingsPage'});">
                                <i class="bi bi-calendar-check"></i> Bookings
                            </li>
                            <li title="Customers"
                                onclick="_getActivePage({page:'customerPage', divid:'customerPage'});">
                                <i class="bi bi-people"></i> Customers
                            </li>
                            <li title="Fleets"
                                onclick="_getActivePage({page:'fleetPage', divid:'fleetPage'});">
                                <i class="bi bi-car-front"></i> Fleets
                            </li>
                            <li title="Wine Tour" onclick="_getActivePage({page:'wineTourPage', divid:'wineTourPage'});">
                                <i class="bi bi-cup-straw"></i> Wine Tour
                            </li>
                            <li title="Package Deals"
                                onclick="_getActivePage({page:'packageDealsPage', divid:'packageDealsPage'});">
                                <i class="bi bi-box-seam"></i> Package Deals
                            </li>
                            <li title="Airport Transport"
                                onclick="_getActivePage({page:'airportTransportPage', divid:'airportTransportPage'});">
                                <i class="bi bi-airplane"></i> Airport Transport
                            </li>
                            <li title="Charter Services"
                                onclick="_getActivePage({page:'chartterServicesPage', divid:'chartterServicesPage'});">
                                <i class="bi bi-bus-front"></i> Charter Services
                            </li>
                            <li title="Service Locations"
                                onclick="_getActivePage({page:'serviceLocationsPage', divid:'serviceLocationsPage'});">
                                <i class="bi bi-geo-alt"></i> Service Locations
                            </li>
                            <li title="Resorts"
                                onclick="_getActivePage({page:'resortPage', divid:'resortPage'});">
                                <i class="bi bi-buildings"></i> Resorts
                            </li>
                            <li title="Airports"
                                onclick="_getActivePage({page:'airportsPage', divid:'airportsPage'});">
                                <i class="bi bi-airplane"></i> Airports
                            </li>
                            <li title="Affiliates"
                                onclick="_getActivePage({page:'affiliatesPage', divid:'affiliatesPage'});">
                                <i class="bi bi-diagram-3"></i> Affiliates
                            </li>
                            <li class="logOut" title="Log-Out" onclick="_confirmLogOut();">
                                <i class="bi bi-power"></i> Log-Out
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>