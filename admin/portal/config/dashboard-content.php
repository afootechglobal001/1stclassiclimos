<?php if ($page == 'dashboard') { ?>
<div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
    <div class="title-div">
        <div>
            <div class="icon-div"><i class="bi bi-speedometer2"></i></div>
        </div>
        <div class="text-div">
            <h2>Welcome, <span id="DashFullname">
                    Emmanuel
                </span>!</h2>
            <p>Welcome to your executive dashboard—oversee fleet dispatches, manage reservations, and track operational revenue metrics.</p>
        </div>
    </div>

    <div class="last-login-card">
        <div class="login-header">
            <div class="login-icon">
                <i class="bi bi-clock-history"></i>
            </div>

            <div class="login-title">
                <h3>Last Login</h3>
                <span class="active-status">
                    <i class="bi bi-circle-fill"></i>
                    Active
                </span>
            </div>
        </div>

       <div class="login-info">
            <div class="info-item">
                <i class="bi bi-calendar-event"></i>
                <span id="lastLoginDate">
                    <script>
                        $("#lastLoginDate").html(_formatShortDate(staffLoginData.lastLoginTime));
                    </script>
                </span>
            </div>

            <div class="info-item">
                <i class="bi bi-clock"></i>
                <span id="lastLoginTime">
                    <script>
                        $("#lastLoginTime").html(_formatTime(staffLoginData.lastLoginTime));
                    </script>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
    <div class="dashboard-wrapper">
        <div class="left-container">
            <div class="statistics-back-div">
                <div class="statistics-div upcoming-card" id="adminPage"
                    title="Manage Administrators"
                    onclick="_getActivePage({page:'adminPage', divid:'adminPage'});">

                    <div class="statistics-inner-div">
                        <div class="statistics-top-div">
                            <div class="statistics-text">
                                <p>Administrators</p>
                                <span>Total Registered Administrators</span>
                            </div>

                            <div class="statistics-icon pending">
                                <i class="bi bi-person-gear"></i>
                            </div>
                        </div>

                        <div class="statistics-count">
                            <h2 id="totalActiveStaffCount">2</h2>
                        </div>

                        <div class="statistics-action-div">
                            <div class="action-left">
                                <i class="bi bi-person-gear"></i>
                                <span>Manage Administrators</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div upcoming-card" id="fleetPage"
                    title="Manage Fleet Vehicles"
                    onclick="_getActivePage({page:'fleetPage', divid:'fleetPage'});">

                    <div class="statistics-inner-div">
                        <div class="statistics-top-div">
                            <div class="statistics-text">
                                <p>Fleet</p>
                                <span>Total Registered Fleet Vehicles</span>
                            </div>

                            <div class="statistics-icon upcoming">
                                <i class="bi bi-car-front"></i>
                            </div>
                        </div>

                        <div class="statistics-count">
                            <h2 id="totalActiveFleetCount">10</h2>
                        </div>

                        <div class="statistics-action-div">
                            <div class="action-left">
                                <i class="bi bi-car-front"></i>
                                <span>Manage Fleet Vehicles</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div upcoming-card" id="wineTourPage"
                    title="Manage Wine Tours"
                    onclick="_getActivePage({page:'wineTourPage', divid:'wineTourPage'});">

                    <div class="statistics-inner-div">
                        <div class="statistics-top-div">
                            <div class="statistics-text">
                                <p>Wine Tours</p>
                                <span>Total Available Wine Tour Packages</span>
                            </div>

                            <div class="statistics-icon upcoming">
                                <i class="bi bi-cup-straw"></i>
                            </div>
                        </div>

                        <div class="statistics-count">
                            <h2 id="totalActiveWineTourCount">8</h2>
                        </div>

                        <div class="statistics-action-div">
                            <div class="action-left">
                                <i class="bi bi-cup-straw"></i>
                                <span>Manage Wine Tours</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div upcoming-card" id="packageDealsPage"
                    title="Manage Package Deals"
                    onclick="_getActivePage({page:'packageDealsPage', divid:'packageDealsPage'});">

                    <div class="statistics-inner-div">
                        <div class="statistics-top-div">
                            <div class="statistics-text">
                                <p>Package Deals</p>
                                <span>Total Available Travel Packages</span>
                            </div>

                            <div class="statistics-icon upcoming">
                                <i class="bi bi-tags"></i>
                            </div>
                        </div>

                        <div class="statistics-count">
                            <h2 id="totalActivePackageDealCount">6</h2>
                        </div>

                        <div class="statistics-action-div">
                            <div class="action-left">
                                <i class="bi bi-tags"></i>
                                <span>Manage Package Deals</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div upcoming-card" id="servicePage"
                    title="Manage Airport Transport"
                    onclick="_getActivePage({page:'servicePage', divid:'servicePage'});">

                    <div class="statistics-inner-div">
                        <div class="statistics-top-div">
                            <div class="statistics-text">
                                <p>Airport Transport</p>
                                <span>Total Airport Transportation Services</span>
                            </div>

                            <div class="statistics-icon upcoming">
                                <i class="bi bi-airplane"></i>
                            </div>
                        </div>

                        <div class="statistics-count">
                            <h2 id="totalActiveAirportTransportCount">2</h2>
                        </div>

                        <div class="statistics-action-div">
                            <div class="action-left">
                                <i class="bi bi-airplane"></i>
                                <span>Manage Airport Transport</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div upcoming-card" id="charterServicePage"
                    title="Manage Charter Services"
                    onclick="_getActivePage({page:'charterServicePage', divid:'charterServicePage'});">

                    <div class="statistics-inner-div">
                        <div class="statistics-top-div">
                            <div class="statistics-text">
                                <p>Charter Services</p>
                                <span>Total Charter Transportation Services</span>
                            </div>

                            <div class="statistics-icon">
                                <i class="bi bi-bus-front"></i>
                            </div>
                        </div>

                        <div class="statistics-count">
                            <h2 id="totalActiveCharterServiceCount">8</h2>
                        </div>

                        <div class="statistics-action-div">
                            <div class="action-left">
                                <i class="bi bi-bus-front"></i>
                                <span>Manage Charter Services</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div upcoming-card" id="serviceLocationPage"
                    title="Manage Service Locations"
                    onclick="_getActivePage({page:'serviceLocationPage', divid:'serviceLocationPage'});">

                    <div class="statistics-inner-div">
                        <div class="statistics-top-div">
                            <div class="statistics-text">
                                <p>Service Locations</p>
                                <span>Total Registered Service Locations</span>
                            </div>

                            <div class="statistics-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                        </div>

                        <div class="statistics-count">
                            <h2 id="totalActiveServiceLocationCount">117</h2>
                        </div>

                        <div class="statistics-action-div">
                            <div class="action-left">
                                <i class="bi bi-geo-alt"></i>
                                <span>Manage Locations</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div upcoming-card" id="blogPage"
                    title="Manage Blog Articles"
                    onclick="_getActivePage({page:'blogPage', divid:'blogPage'});">

                    <div class="statistics-inner-div">
                        <div class="statistics-top-div">
                            <div class="statistics-text">
                                <p>Blog</p>
                                <span>Total Published Blog Articles</span>
                            </div>

                            <div class="statistics-icon">
                                <i class="bi bi-journal-richtext"></i>
                            </div>
                        </div>

                        <div class="statistics-count">
                            <h2 id="totalActiveBlogCount">20</h2>
                        </div>

                        <div class="statistics-action-div">
                            <div class="action-left">
                                <i class="bi bi-journal-richtext"></i>
                                <span>Manage Articles</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div upcoming-card" id="faqPage"
                    title="Manage Frequently Asked Questions"
                    onclick="_getActivePage({page:'faqPage', divid:'faqPage'});">

                    <div class="statistics-inner-div">
                        <div class="statistics-top-div">
                            <div class="statistics-text">
                                <p>FAQ</p>
                                <span>Total Frequently Asked Questions</span>
                            </div>

                            <div class="statistics-icon">
                                <i class="bi bi-patch-question"></i>
                            </div>
                        </div>

                        <div class="statistics-count">
                            <h2 id="totalActiveFaqCount">10</h2>
                        </div>

                        <div class="statistics-action-div">
                            <div class="action-left">
                                <i class="bi bi-patch-question"></i>
                                <span>Manage FAQs</span>
                            </div>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-container">
            <div class="recent-review-wrapper">
                <div class="main-content-div dash-main-content-div" data-aos="fade-in" data-aos-duration="1500">
                    <div class="tables-content-div">
                        <div class="content-title">
                            <div class="title">
                                <i class="bi bi-car-front"></i>
                                <p>Recent Pending Bookings</p>
                            </div>

                            <button class="btn btn-view" title="View All"
                                onclick="_getActivePage({page:'bookingsPage', divid:'bookingsPage'});">
                                VIEW ALL
                            </button>
                        </div>

                        <div class="inner-table-content review-table-content">
                            <div class="bookings-back-div">
                                <div class="bookings-div">
                                    <div class="booking-header">
                                        <div class="booking-id-wrap">
                                            <span class="booking-id">#BK-9042</span>
                                            <span class="booking-badge badge-pending">Pending Dispatch</span>
                                        </div>
                                        <span class="booking-time">10 mins ago</span>
                                    </div>

                                    <div class="booking-body">
                                        <div class="customer-info">
                                            <div class="avatar">JD</div>
                                            <div class="customer-details">
                                                <strong class="customer-name">John Doe</strong>
                                                <span class="service-type"><i class="bi bi-airplane"></i><span>Airport Transfer</span> | <i class="bi bi-car-front"></i><span>Cadillac Escalade</span></span>
                                            </div>
                                        </div>

                                        <div class="route-details">
                                            <div class="route-point">
                                                <span class="dot pickup"></span>
                                                <span class="location">SFO Airport Terminal 2</span>
                                            </div>
                                            <div class="route-line"></div>
                                            <div class="route-point">
                                                <span class="dot dropoff"></span>
                                                <span class="location">The Ritz-Carlton, San Francisco</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="booking-footer">
                                        <div class="booking-price">$240.00</div>
                                        <div class="booking-actions">
                                            <button class="btn btn-primary">View Details</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="bookings-div">
                                    <div class="booking-header">
                                        <div class="booking-id-wrap">
                                            <span class="booking-id">#BK-9041</span>
                                            <span class="booking-badge badge-confirmed">Confirmed</span>
                                        </div>
                                        <span class="booking-time">35 mins ago</span>
                                    </div>

                                    <div class="booking-body">
                                        <div class="customer-info">
                                            <div class="avatar">AS</div>
                                            <div class="customer-details">
                                                <span class="service-type">
                                                    <i class="bi bi-signpost-2"></i>
                                                    <span>Point to Point</span> |
                                                    <i class="bi bi-car-front"></i>
                                                    <span>Mercedes Sprinter</span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="route-details">
                                            <div class="route-point">
                                                <span class="dot pickup"></span>
                                                <span class="location">Downtown Napa Valley</span>
                                            </div>
                                            <div class="route-line"></div>
                                            <div class="route-point">
                                                <span class="dot dropoff"></span>
                                                <span class="location">Stag's Leap Winery</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="booking-footer">
                                        <div class="booking-price">$850.00</div>
                                        <div class="booking-actions">
                                            <button class="btn btn-primary">View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="chart-revenue-wrapper">
        <div class="chart-back-div">
            <div class="chart-div-notifications top-border-radius">
                <div class="text-wrapper">
                    <div class="text"><i class="bi-graph-up-arrow"></i> Showing Matrix for </div>

                    <div class="text text-right" onclick="select_search()">
                        <span id="srch-text">Last 30 Days</span>
                        <div class="icon-div"><i class="bi-caret-down"></i></div>

                        <div class="srch-select alert-srch-select">
                            <div id="srch-today" onclick="_fetchDashBoardRevenueFiltering('srch-today', 'Today');">Today
                            </div>
                            <div id="srch-week" onclick="_fetchDashBoardRevenueFiltering('srch-week', 'This Week');">
                                This
                                Week</div>
                            <div id="srch-7" onclick="_fetchDashBoardRevenueFiltering('srch-7', 'Last 7 Days');">Last 7
                                Days
                            </div>
                            <div id="srch-month" onclick="_fetchDashBoardRevenueFiltering('srch-month', 'This Month');">
                                This
                                Month</div>
                            <div id="srch-30" onclick="_fetchDashBoardRevenueFiltering('srch-30', 'Last 30 Days');">Last
                                30 Days
                            </div>
                            <div id="srch-90" onclick="_fetchDashBoardRevenueFiltering('srch-90', 'Last 90 Days');">Last
                                90 Days
                            </div>
                            <div id="srch-year" onclick="_fetchDashBoardRevenueFiltering('srch-year', 'This Year');">
                                This
                                Year</div>
                            <div id="srch-1year"
                                onclick="_fetchDashBoardRevenueFiltering('srch-1year', 'Last 1 Year');">Last 1
                                Year</div>
                            <div onclick="srch_custom('Custom Search')">Custom Search</div>
                        </div>
                    </div>

                    <div class="text">
                        <div class="custom-srch-div">
                            <div class="custom-srch-div-in">
                                <div class="text_field_container dash_field_container">
                                    <input class="text_field bar_cust_text_field" type="text" id="datepickers-from"
                                        placeholder="" />
                                    <div class="placeholder bar_cust_placeholder"><i class="bi-calendar3"></i> From
                                    </div>
                                    <div class="issueText" id="issue_from"></div>
                                </div>

                                <div class="text_field_container dash_field_container">
                                    <input class="text_field bar_cust_text_field" type="text" id="datepickers-to"
                                        placeholder="" />
                                    <div class="placeholder bar_cust_placeholder"><i class="bi-calendar3"></i> To </div>
                                    <div class="issueText" id="issue_to"></div>
                                </div>
                                <button type="button" class="btn" id="applyCustomSearchBtn"
                                    onclick="_fetchDashboardCustomRevenueFiltering();">Apply</button>
                            </div>
                        </div>
                    </div>

                    <script language="javascript">
                    $('#datepickers-from').datetimepicker({
                        lang: 'en',
                        timepicker: false,
                        format: 'Y-m-d',
                        formatDate: 'Y-M-d',
                    });

                    $('#datepickers-to').datetimepicker({
                        lang: 'en',
                        timepicker: false,
                        format: 'Y-m-d',
                        formatDate: 'Y-M-d',
                    });
                    </script>
                </div>

                <div class="revenue-date">
                    <i class="bi-info-circle"></i> Revenue report between <strong id="dateFrom">July 07 2026 </strong>
                    and <strong id="dateTo">August 05 2026</strong>
                </div>
            </div>

            <div class="trending-back-div">
                <div class="report-statistics-back-div">
                    <div class="report-statistics-div" title="Revenue from All Channels">
                        <div class="statistics-inner-div">
                            <div class="icon-div active">
                                <i class="bi bi-cash-coin"></i>
                            </div>

                            <div class="report-statistics-text">
                                <p>Total Revenue</p>
                                <span>Total revenue from all channels</span>
                                <h2 id="totalRevenue"><strong>$</strong>20,000.00</h2>
                            </div>
                        </div>
                    </div>

                    <div class="report-statistics-div" title="Advance Payments">
                        <div class="statistics-inner-div">
                            <div class="icon-div secondary">
                                <i class="bi bi-wallet2"></i>
                            </div>

                            <div class="report-statistics-text">
                                <p>Total Advance Payments</p>
                                <span>Total Advance payments received</span>
                                <h2 id="sumCreditCardPayments"><strong>$</strong>10,000.00</h2>
                            </div>
                        </div>
                    </div>

                    <div class="report-statistics-div" title="Completed Service Payments">
                        <div class="statistics-inner-div">
                            <div class="icon-div success">
                                <i class="bi bi-tools"></i>
                            </div>

                            <div class="report-statistics-text">
                                <p>Total Service Payments</p>
                                <span>Total Income from completed services</span>
                                <h2 id="sumBankTransferPayments"><strong>$</strong>10,000.00</h2>
                            </div>
                        </div>
                    </div>

                    <div class="report-statistics-div" title="Advance Payment Transactions">
                        <div class="statistics-inner-div">
                            <div class="icon-div warning">
                                <i class="bi bi-receipt"></i>
                            </div>

                            <div class="report-statistics-text">
                                <p>Advance Transactions</p>
                                <span>Total Advance payment transactions</span>
                                <h2 id="countCreditCardPayments">2</h2>
                            </div>
                        </div>
                    </div>

                    <div class="report-statistics-div" title="Service Payment Transactions">
                        <div class="statistics-inner-div">
                            <div class="icon-div info">
                                <i class="bi bi-clipboard-check"></i>
                            </div>

                            <div class="report-statistics-text">
                                <p>Service Transactions</p>
                                <span>Total completed payment transactions</span>
                                <h2 id="countBankTransferPayments">3</h2>
                            </div>
                        </div>
                    </div>

                    <div class="report-statistics-div" title="Stripe Revenue">
                        <div class="statistics-inner-div">
                            <div class="icon-div primary">
                                <i class="bi bi-stripe"></i>
                            </div>

                            <div class="report-statistics-text">
                                <p>Stripe Revenue</p>
                                <span>Total payments processed through Stripe</span>
                                <h2 id="sumStripePayments"><strong>$</strong>30,000.00</h2>
                            </div>
                        </div>
                    </div>

                    <div class="report-statistics-div" title="PayPal Revenue">
                        <div class="statistics-inner-div">
                            <div class="icon-div danger">
                                <i class="bi bi-paypal"></i>
                            </div>

                            <div class="report-statistics-text">
                                <p>PayPal Revenue</p>
                                <span>Total payments processed through PayPal</span>
                                <h2 id="sumPayPalPayments"><strong>$</strong>25,000.00</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="chartContainer" style="width:100%; height:400px; margin:auto;"></div>
                <script>
                $(document).ready(function() {
                    const rootStyles = getComputedStyle(document.documentElement);
                    const generalBorderColor = rootStyles.getPropertyValue('--general-border-color').trim();

                    var chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
                        axisX: {
                            valueFormatString: "DD MMM",
                            crosshair: {
                                enabled: true,
                                snapToDataPoint: true
                            }
                        },
                        axisY: {
                            includeZero: true,
                            prefix: "$",
                            valueFormatString: "#,##0",
                            gridColor: generalBorderColor,
                            crosshair: {
                                enabled: true
                            }
                        },
                        toolTip: { shared: true },
                        legend: {
                            cursor: "pointer",
                            verticalAlign: "bottom",
                            horizontalAlign: "left",
                            dockInsidePlotArea: true,
                            itemclick: toogleDataSeries
                        },
                        data: [{
                                type: "splineArea",
                                showInLegend: true,
                                name: "Stripe Revenue",
                                xValueFormatString: "DD MMM, YYYY",
                                yValueFormatString: "$#,##0",
                                color: "#635BFF", // Stripe Brand Color
                                dataPoints: [{
                                        x: new Date(2026, 5, 1),
                                        y: 45000
                                    },
                                    {
                                        x: new Date(2026, 5, 5),
                                        y: 62000
                                    },
                                    {
                                        x: new Date(2026, 5, 10),
                                        y: 38000
                                    },
                                    {
                                        x: new Date(2026, 5, 15),
                                        y: 90000
                                    },
                                    {
                                        x: new Date(2026, 5, 20),
                                        y: 70000
                                    },
                                    {
                                        x: new Date(2026, 5, 25),
                                        y: 120000
                                    },
                                    {
                                        x: new Date(2026, 5, 30),
                                        y: 95000
                                    }
                                ]
                            },
                            {
                                type: "splineArea",
                                showInLegend: true,
                                name: "PayPal Revenue",
                                xValueFormatString: "DD MMM, YYYY",
                                yValueFormatString: "$#,##0",
                                color: "#0070BA", // PayPal Brand Color
                                dataPoints: [{
                                        x: new Date(2026, 5, 1),
                                        y: 45000
                                    },
                                    {
                                        x: new Date(2026, 5, 5),
                                        y: 75000
                                    },
                                    {
                                        x: new Date(2026, 5, 10),
                                        y: 38000
                                    },
                                    {
                                        x: new Date(2026, 5, 15),
                                        y: 90000
                                    },
                                    {
                                        x: new Date(2026, 5, 20),
                                        y: 60000
                                    },
                                    {
                                        x: new Date(2026, 5, 25),
                                        y: 100000
                                    },
                                    {
                                        x: new Date(2026, 5, 30),
                                        y: 95000
                                    }
                                ]
                            }
                        ]
                    });

                    chart.render();
                    function toogleDataSeries(e) {
                        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                });
                </script>
            </div>
        </div>

        <div class="right-wrapper">
            <div class="matrix-div">
                <div class="inner-div">
                    <div class="title">
                        <h3>Payment Gateway Matrix</h3>
                    </div>
                    <div id="chartContainer1" style="width:100%; height:200px; margin:auto;"></div>

                    <script type="text/javascript">
                        var options = {
                            title: {
                                text: "" /*My Performance*/
                            },
                            data: [{
                                type: "doughnut",
                                innerRadius: 30,
                                showInLegend: false,
                                legendText: "{label}",
                                indexLabel: "{label} ($ {y})",
                                yValueFormatString: "$#,##0.00",
                                indexLabelFontSize: 9,
                                dataPoints: [{
                                        label: "STRIPE",
                                        y: 10000.00
                                    },
                                    {
                                        label: "PAYPAL",
                                        y: 5000.00
                                    }
                                ]
                            }]
                        };
                        $("#chartContainer1").CanvasJSChart(options);
                    </script>
                </div>
            </div>

            <div class="matrix-div">
                <div class="inner-div">
                    <div class="title">
                        <h3>Income Sources Overview</h3>
                    </div>
                    <div id="chartContainer2" style="width:100%; height:200px; margin:auto;"></div>

                    <script type="text/javascript">
                    var options = {
                        title: {
                            text: "" /*My Performance*/
                        },
                        data: [{
                            type: "pie",
                            startAngle: 45,
                            showInLegend: "False",
                            legendText: "{label}",
                            indexLabel: "{label} ({y})",
                            yValueFormatString: "#,##0.#" % "",
                            dataPoints: [{
                                    label: "Total Advanced Payment",
                                    y: 3
                                },
                                {
                                    label: "Total Services Payment",
                                    y: 11
                                },
                            ]
                        }]
                    };
                    $("#chartContainer2").CanvasJSChart(options);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        _fetchDashboardStatistics();
    </script>
<?php } ?>

<?php if ($page == 'logoutConfirmForm') { ?>
<div class="caption-success-div animated zoomIn">
    <div class="div-in">
        <div class="img"><img src="<?php echo $websiteUrl ?>/all-images/images/warning.gif" /></div>
        <h2>Are you sure to log-out?</h2>
        Please, confirm your log-out action.
        <div class="btn-div">
            <button class="btn" onclick="_logOut();">YES</button>
            <button class="btn no-btn" onclick="_alertClose(<?php echo $modalLayer ?>);">NO</button>
        </div>
    </div>
</div>
<?php } ?>