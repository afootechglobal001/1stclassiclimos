<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Bookings - Airport Limo, Black Car & Bus Services</title>
    <meta name="keywords" content="Book a Chauffeur, Online Limo Booking, 1st Classic Bookings, Airport Limo Booking, Black Car Reservation, Airport Transportation, Corporate Travel Booking, Luxury Transportation, Private Chauffeur Booking, Hourly Car Service, Flat Rate Transportation, Napa Valley Wine Tours, Sonoma Wine Tours, San Francisco Airport Transfer, Oakland Airport Transfer, San Jose Airport Transfer, Executive Car Service, Charter Bus Booking, Bay Area Transportation" />
    <meta name="description" content="Book your ride with <?php echo $appName ?> for airport transfers, luxury chauffeur services, black car transportation, corporate travel, wine tours, and comfortable travel throughout the Bay Area." />

    <meta property="og:title" content="<?php echo $appName ?> | Bookings - Airport Limo, Black Car & Bus Services" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Reserve your next journey with <?php echo $appName ?> for professional chauffeur services, airport transfers, corporate transportation, wine tours, and luxury travel." />

    <meta name="twitter:title" content="<?php echo $appName ?> | Bookings - Airport Limo, Black Car & Bus Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Book airport transportation, luxury black car services, corporate travel, and wine tours with <?php echo $appName ?> for a comfortable and reliable journey." />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="nav-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>/">
                        <li title="Home">
                            Home
                            <span><i class="bi-caret-right-fill"></i></span>
                        </li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/bookings">
                        <li title="Bookings">
                            Bookings
                        </li>
                    </a>
                </ul>
            </div>

            <div class="main-content-back-div">
                <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                    <h1 data-aos="fade-in" data-aos-duration="800">Book a Ride Now!</h1>

                    <p>
                        Reserve your ride with 1st Classic Chauffeur Services for airport transfers, luxury black car transportation, corporate travel, wine tours, and more. Enjoy a comfortable, reliable, and professional travel experience tailored to your needs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="page-booking-wrapper" data-aos="fade-in" data-aos-duration="1000">
                    <div class="booking-stages-wrapper">
                        <div class="booking-stage active" data-page="rideDetailsPage" onclick="_getBookingNextPage({ page: 'rideDetailsPage' });">
                            <div class="count-div">
                                <h2>1</h2>
                            </div>

                            <p>Enter Ride Info</p>
                        </div>

                        <div class="booking-stage" data-page="vehicleDetailsPage" onclick="_getBookingNextPage({ page: 'vehicleDetailsPage' });">
                            <div class="count-div">
                                <h2>2</h2>
                            </div>
                            
                            <p>Choose a Vehicle</p>
                        </div>
                        
                        <div class="booking-stage" data-page="customerDetailsPage" onclick="_getBookingNextPage({ page: 'customerDetailsPage' });">
                            <div class="count-div">
                                <h2>3</h2>
                            </div>

                            <p>Enter Contact Details</p>
                        </div>

                        <div class="booking-stage" data-page="bookingSummaryPage" onclick="_getBookingNextPage({ page: 'bookingSummaryPage' });">
                            <div class="count-div">
                                <h2>4</h2>
                            </div>

                            <p>Bookings Summary</p>
                        </div>
                    </div>

                    <div id="page-content">
                        <?php include $websitePath . '/config/booking-content.php'; ?>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    let savedPage = sessionStorage.getItem("currentBookingsPage") ?? "rideDetailsPage";
                    let bookingType = sessionStorage.getItem("bookingType") ?? "airport-transfer";

                    _getPage({
                        page: savedPage,
                        url: siteMiddlewareUrl
                    });
                    _updateProgress(savedPage);
                    changeBookingType(bookingType);
                    _clearBookingSelectionSession();
                });
            </script>
        </section>

        <?php include 'footer.php' ?>
    </section>
    <!-- Load Google Maps API with Places & call initMap -->
    <script>
        const timestamp = new Date().getTime();
        document.write(`
            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNYG0x6xtJOeYx6PTmRjjqBVI9FPgGNSw&libraries=places&callback=initMap&t=${timestamp}">
            <\/script>
        `);
    </script>
</body>

</html>