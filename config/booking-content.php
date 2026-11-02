<?php if ($page == 'rideDetailsPage') { ?>
    <div class="main-booking-wrapper" data-aos="fade-in" data-aos-duration="1000">
        <div class="booking-form">
            <?php _bookTabBtn('justify-flex-start') ?>

            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi-car-front-fill"></i>
                            </div>
                            <p>Ride Info</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="text-field-wrapper">
                            <div class="text_field_container" id="serviceType_container">
                                <script>
                                    selectField({
                                        id: 'serviceType',
                                        title: 'Service Type',
                                        icon: '<i class="bi bi-airplane"></i>',
                                        applyBorder: true,
                                    });
                                    _getSelectServiceType("serviceType");
                                </script>
                            </div>

                            <div class="text_field_container" id="pickUp_container">
                                <script>
                                    textField({
                                        id: 'pickUp',
                                        title: 'Pickup Location',
                                        oninputFunction: 'getMapDetails()',
                                        icon: '<i class="bi bi-geo-alt"></i>',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>

                            <div class="text_field_container" id="destination_container">
                                <script>
                                    textField({
                                        id: 'destination',
                                        title: 'Drop-off Location',
                                        oninputFunction: 'getMapDetails()',
                                        icon: '<i class="bi bi-geo"></i>',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>

                            <div class="flex-cont">
                                <div class="text_field_container" id="pickupDate_container">
                                    <script>
                                        textField({
                                            id: 'pickupDate',
                                            title: 'Pickup Date',
                                            type: 'date',
                                            applyBorder: true,
                                        });
                                    </script>
                                </div>

                                <div class="text_field_container" id="pickupTime_container">
                                    <script>
                                        textField({
                                            id: 'pickupTime',
                                            title: 'Pickup Time',
                                            type: 'time',
                                            applyBorder: true,
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="text_field_container" id="duration_container" style="display: none;">
                                <script>
                                    selectField({
                                        id: 'duration',
                                        title: 'Duration (In Hours)',
                                        icon: '<i class="bi bi-hourglass-split"></i>',
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-container">
            <div id="map"></div>

            <div class="map-info-container">
                <div class="map-info">
                    <div class="icon-div">
                        <i class="bi bi-geo-alt"></i>
                    </div>

                    <div class="content">
                        <span>Total Distance</span>
                        <h4 id="systemGeneratedDistance">0 km</h4>
                    </div>
                </div> 
                
                <div class="map-info">
                    <div class="icon-div">
                        <i class="bi bi-clock"></i>
                    </div>
                    
                    <div class="content">
                        <span>Total Time</span>
                        <h4 id="systemGeneratedDuration">0 h 0 m</h4>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="bottom-button-div">
        <div class="btn-div bookings-first-page-btn" id="chhoseVehicleBtn">
            <script>
                generalButtons({
                    container: "chhoseVehicleBtn",
                    buttons: [{
                        id: "chhoseVehicleBtn",
                        text: "Choose a Vehicle",
                        icon: "bi bi-arrow-right-circle",
                        onClick: "_getBookingNextPage({ page: 'vehicleDetailsPage' });",
                        iconPosition: "right"
                    }]
                });
            </script>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'vehicleDetailsPage') { ?>
    <div class="main-booking-wrapper" data-aos="fade-in" data-aos-duration="1000">
        <div class="booking-summary-div sticky-div">
            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi-car-front-fill"></i>
                            </div>
                            <p>Ride Summary</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="details-wrapper">
                            <div class="details-div route-container">
                                <div class="route-line">
                                    <div class="route-moving-dot"></div>
                                    <div class="bottom-dot"></div>
                                </div>
                                <div class="route-points">
                                    <div class="point-block">
                                        <span><i class="bi bi-geo-alt"></i> Pick Up Location</span>
                                        <h5>MTN PLAZA, Lagos, Nigeria</h5>
                                    </div>
                                    <div class="point-block">
                                        <span><i class="bi bi-geo-alt"></i> Drop-off Location</span>
                                        <h5>Kotco Energy Ltd, Ode-Remo, Nigeria</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="details-div">
                                <span><i class="bi bi-clock"></i> Pick Up Date Time</span>
                                <h5 id="">2026-12-12, <strong>17:00</strong></h5>
                            </div>

                            <div class="details-div">
                                <span><i class="bi bi-car-front"></i> Service Type</span>
                                <h5 id="">Distance</h5>
                            </div>

                            <div class="flex-cont">
                                <div class="details-div no-border">
                                    <span><i class="bi bi-geo-alt"></i> Total Distance</span>
                                    <h5 id="">81.7 km</h5>
                                </div>

                                <div class="details-div">
                                    <span><i class="bi bi-clock"></i> Total Time</span>
                                    <h5 id="">1 h 19 m</h5>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>   
            </div> 

            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <p>Payment Summary</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="details-wrapper">
                            <div class="details-div justify-space-between">
                                <span><i class="bi bi-car-front"></i> Selected Vehicle</span>
                                <h5 id="selectedVehiclePrice">$0.00</h5>
                            </div>

                            <div class="details-div justify-space-between">
                                <span><i class="bi bi-receipt"></i> Total Amount</span>
                                <h5 class="deposit-amount" id="totalVicleAmount">$0.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bookngs-fleet-container">
            <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
                <div class="fleet-filter-card">
                    <div class="filter-fields-row">
                        <div class="filter-field-wrapper" id="passengerFilter_container">
                            <script>
                                  filterSelectField({
                                    id: 'passengerFilter',
                                    title: 'Passengers',
                                    emptyValue: 'Any Capacity',
                                    icon: "bi bi-people",
                                    items: [
                                        { value: "1", label: "1 Passenger" },
                                        { value: "2", label: "2 Passengers" },
                                        { value: "3", label: "3 Passengers" },
                                        { value: "4", label: "4 Passengers" },
                                        { value: "5", label: "5 Passengers" }
                                    ]
                                });
                            </script>
                        </div>

                        <div class="filter-field-wrapper" id="suitcasesFilter_container">
                            <script>
                                filterSelectField({
                                    id: 'suitcasesFilter',
                                    title: 'Suitcase',
                                    emptyValue: 'Any Suitcases',
                                    icon: "bi bi-briefcase",
                                    items: [
                                        { value: "1", label: "1 Suitcase" },
                                        { value: "2", label: "2 Suitcases" },
                                        { value: "3", label: "3 Suitcases" },
                                        { value: "4", label: "4 Suitcases" }
                                    ]
                                });
                            </script>
                        </div>

                        <div class="filter-field-wrapper" id="vehicleFilter_container">
                            <script>
                                filterSelectField({
                                    id: 'vehicleFilter',
                                    title: 'Select vehicles',
                                    emptyValue: 'Any Vehicle',
                                    icon: 'bi bi-car-front',
                                    items: [
                                        { value: "1", label: "Executive Class SUV" },
                                        { value: "2", label: "Executive Class Sedan" },
                                        { value: "3", label: "Executive Class Sprinter Van" }
                                    ]
                                });
                            </script>
                        </div>
                    </div>

                    <div class="filter-footer-bar">
                        <div class="active-tags-container" id="activeFiltersContainer">
                            <span class="status-text" id="filterStatusText">Showing all vehicles</span>
                        </div>
                        <button class="reset-filter-btn" id="resetFleetFilters" title="Reset Filters" onclick="_clearFleetFilters()">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset Filters
                        </button>
                    </div>
                </div>
            </div>

            <div class="bookings-fleet-wrapper">
                <div class="bookings-fleet" onclick="_selectVehicle(this)">
                    <div class="image-div">
                        <img src="<?php echo $websiteUrl?>/uploaded_files/fleets/executive-suv.jpg" alt="Executive Class SUV">
                    </div>
                    
                    <div class="content">
                        <div class="fleet-content">
                            <h2>Executive Class SUV</h2>
                            <p>Luxury Equiped Fleet</p>

                            <div class="feature-wrapper">
                                <div class="feature">
                                    <i class="bi bi-people"></i>
                                    <p><span>6</span> Seats</p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-suitcase2"></i>
                                    <p><span>6</span> Suitcase</p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-usb-symbol"></i>
                                    <p><span>USB Charger</span></p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-car-front"></i>
                                    <p><span>Leather Interior</span></p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-sunglasses"></i>
                                    <p><span>Tinted Windows</span></p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-palette"></i>
                                    <p><span>Available In Black</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="price-div-wrapper">
                            <div class="price-div">
                                <h3>$94.99</h3>
                            </div>

                            <div class="select-btn-div">
                                <button class="btn" title="Select Vehicle" onclick="_selectVehicle(this)"><i class="bi bi-car-front-fill"></i> Select Vehicle</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bookings-fleet" onclick="_selectVehicle(this)">
                    <div class="image-div">
                        <img src="<?php echo $websiteUrl?>/uploaded_files/fleets/executive-sedan.jpg" alt="Executive Class Sedan">
                    </div>
                    
                    <div class="content">
                        <div class="fleet-content">
                            <h2>Executive Class Sedan</h2>
                            <p>Luxury Equiped Fleet</p>

                            <div class="feature-wrapper">
                                <div class="feature">
                                    <i class="bi bi-people"></i>
                                    <p><span>4</span> Seats</p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-suitcase2"></i>
                                    <p><span>2</span> Suitcase</p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-usb-symbol"></i>
                                    <p><span>USB Charger</span></p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-car-front"></i>
                                    <p><span>Leather Interior</span></p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-sunglasses"></i>
                                    <p><span>Tinted Windows</span></p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-palette"></i>
                                    <p><span>Available In Black</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="price-div-wrapper">
                            <div class="price-div">
                                <h3>$84.99</h3>
                            </div>

                            <div class="select-btn-div">
                                <button class="btn" title="Select Vehicle" onclick="_selectVehicle(this)"><i class="bi bi-car-front-fill"></i> Select Vehicle</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bookings-fleet" onclick="_selectVehicle(this)">
                    <div class="image-div">
                        <img src="<?php echo $websiteUrl?>/uploaded_files/fleets/executive-class-sprinter-van.jpg" alt="Executive Class Sprinter Van">
                    </div>
                    
                    <div class="content">
                        <div class="fleet-content">
                            <h2>Executive Class Sprinter Van</h2>
                            <p>Luxury Equiped Fleet</p>

                            <div class="feature-wrapper">
                                <div class="feature">
                                    <i class="bi bi-people"></i>
                                    <p><span>14</span> Seats</p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-suitcase2"></i>
                                    <p><span>14</span> Suitcase</p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-usb-symbol"></i>
                                    <p><span>USB Charger</span></p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-car-front"></i>
                                    <p><span>Leather Interior</span></p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-sunglasses"></i>
                                    <p><span>Tinted Windows</span></p>
                                </div>

                                <div class="feature">
                                    <i class="bi bi-palette"></i>
                                    <p><span>Available In Black</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="price-div-wrapper">
                            <div class="price-div">
                                <h3>$159.99</h3>
                            </div>

                            <div class="select-btn-div">
                                <button class="btn" title="Select Vehicle" onclick="_selectVehicle(this)"><i class="bi bi-car-front-fill"></i> Select Vehicle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500" id="extraOptionsDiv">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-sliders"></i>
                            </div>
                            <p>Extra Options</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="extra-option-wrapper">
                            <div class="extra-option" id="meetAndGreetExtraOption">
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/extra-options/extra-meet-and-greet.jpg" alt="Meet and Greet">
                                </div>

                                <div class="content-div">
                                    <div class="top-content">
                                        <div class="title"><h3>Meet and Greet </h3></div>
                                        <p>Driver will meet you inside the terminal with a personalized name sign.</p>
                                    </div>

                                    <div class="text-field-wrapper select-wrapper">
                                        <div class="text_field_container" id="meetAndGreetId_container">
                                            <script>
                                                selectField({
                                                    id: 'meetAndGreetId',
                                                    title: 'Meet & Greet',
                                                    icon: '<i class="bi bi-person-badge"></i>',
                                                });
                                                _getSelectMeetAndGreet('meetAndGreetId');
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="extra-option">
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/extra-options/extra-pet-travel-service.jpg" alt="Pet Travel Service">
                                </div>

                                <div class="content-div">
                                    <div class="top-content">
                                        <div class="title"><h3>Pet Travel Service </h3> <strong>($15.00)</strong></div>
                                        <p>Pet-friendly vehicle preparation for comfortable travel with your pet.</p>
                                    </div>

                                    <div class="text-field-wrapper">
                                        <div class="number-count-wrapper">
                                            
                                            <div class="counter-controls">
                                                <button type="button" class="btn-counter btn-decrement" onclick="changeCount(this, -1)" aria-label="Decrease">–</button>
                                                <input type="text" class="counter-input" value="0" data-min="0" data-max="99" data-step="1" inputmode="numeric">
                                                <button type="button" class="btn-counter btn-increment" onclick="changeCount(this, 1)" aria-label="Increase">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="extra-option">
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/extra-options/extra-child-car-seat.jpg" alt="Child Car Seat">
                                </div>

                                <div class="content-div">
                                    <div class="top-content">
                                        <div class="title"><h3>Child Car Seat </h3> <strong>($25.00)</strong></div>
                                        <p>Child car seat suitable for children aged 0–36 months.</p>
                                    </div>

                                    <div class="text-field-wrapper">
                                        <div class="number-count-wrapper">
                                            <div class="counter-controls">
                                                <button type="button" class="btn-counter btn-decrement" onclick="changeCount(this, -1)" aria-label="Decrease">–</button>
                                                <input type="text" class="counter-input" value="0" data-min="0" data-max="99" data-step="1" inputmode="numeric">
                                                <button type="button" class="btn-counter btn-increment" onclick="changeCount(this, 1)" aria-label="Increase">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="extra-option">
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/extra-options/extra-champagne.jpg" alt="Champagne">
                                </div>

                                <div class="content-div">
                                    <div class="top-content">
                                        <div class="title"><h3>Champagne </h3> <strong>($110.00)</strong></div>
                                        <p>0.75L bottle of French Brut Champagne.</p>
                                    </div>

                                    <div class="text-field-wrapper">
                                        <div class="number-count-wrapper">
                                            <div class="counter-controls">
                                                <button type="button" class="btn-counter btn-decrement" onclick="changeCount(this, -1)" aria-label="Decrease">–</button>
                                                <input type="text" class="counter-input" value="0" data-min="0" data-max="99" data-step="1" inputmode="numeric">
                                                <button type="button" class="btn-counter btn-increment" onclick="changeCount(this, 1)" aria-label="Increase">+</button>
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
    </div>

    <div class="bottom-button-div">
        <div class="btn-div justify-button" id="choseVehicleBtn">
            <script>
                generalButtons({
                    container: "choseVehicleBtn",
                    buttons: [{
                        id: "choseVehicleBtn",
                        text: "Ride Details",
                        icon: "bi bi-arrow-left-circle",
                        variant: "btn-secondary",
                        onClick: "_getBookingNextPage({ page: 'rideDetailsPage' });",
                    }, 
                    {
                        text: "Contact Details",
                        icon: "bi bi-arrow-right-circle",
                        onClick: "_getBookingNextPage({ page: 'customerDetailsPage' });",
                        iconPosition: "right"
                    }]

                });
            </script>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'customerDetailsPage') { ?>
    <div class="main-booking-wrapper" data-aos="fade-in" data-aos-duration="1000">
        <div class="booking-summary-div sticky-div">
            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi-car-front-fill"></i>
                            </div>
                            <p>Ride Summary</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="details-wrapper">
                            <div class="details-div route-container">
                                <div class="route-line">
                                    <div class="route-moving-dot"></div>
                                    <div class="bottom-dot"></div>
                                </div>
                                <div class="route-points">
                                    <div class="point-block">
                                        <span><i class="bi bi-geo-alt"></i> Pick Up Location</span>
                                        <h5>MTN PLAZA, Lagos, Nigeria</h5>
                                    </div>
                                    <div class="point-block">
                                        <span><i class="bi bi-geo-alt"></i> Drop-off Location</span>
                                        <h5>Kotco Energy Ltd, Ode-Remo, Nigeria</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="details-div">
                                <span><i class="bi bi-clock"></i> Pick Up Date Time</span>
                                <h5 id="">2026-12-12, <strong>17:00</strong></h5>
                            </div>

                            <div class="details-div">
                                <span><i class="bi bi-car-front"></i> Service Type</span>
                                <h5 id="">Distance</h5>
                            </div>

                            <div class="details-div">
                                <span><i class="bi bi-car-front"></i> Vehicle</span>
                                <h5 id="">Executive Class SUV</h5>
                            </div>

                            <div class="details-div">
                                <span>Extra Options</span>
                                <h5 id="">2 x Child Car Seat - $30.00</h5>
                            </div>

                            <div class="flex-cont">
                                <div class="details-div no-border">
                                    <span><i class="bi bi-geo-alt"></i> Total Distance</span>
                                    <h5 id="">81.7 km</h5>
                                </div>

                                <div class="details-div no-border">
                                    <span><i class="bi bi-clock"></i> Total Time</span>
                                    <h5 id="">1 h 19 m</h5>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>   
            </div> 

            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <p>Payment Summary</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="details-wrapper">
                            <div class="details-div justify-space-between">
                                <span><i class="bi bi-car-front"></i> Selected Vehicle</span>
                                <h5 id="selectedVehiclePrice">$0.00</h5>
                            </div>

                            <div class="details-div justify-space-between">
                                <span><i class="bi bi-receipt"></i> Total Amount</span>
                                <h5 class="deposit-amount" id="totalVicleAmount">$0.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bookngs-fleet-container">
            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <p>Contact Info</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="text-field-wrapper">
                            <div class="flex-cont">
                                <div class="text_field_container" id="firstName_container">
                                    <script>
                                        textField({
                                            id: 'firstName',
                                            title: 'First Name',
                                            icon: '<i class="bi bi-person"></i>',
                                            applyBorder: true,
                                        });
                                    </script>
                                </div>

                                <div class="text_field_container" id="lastName_container">
                                    <script>
                                        textField({
                                            id: 'lastName',
                                            title: 'Last Name',
                                            icon: '<i class="bi bi-person-badge"></i>',
                                            applyBorder: true,
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="flex-cont">
                                <div class="text_field_container" id="emailAddress_container">
                                    <script>
                                        textField({
                                            id: 'emailAddress',
                                            title: 'Email Address',
                                            icon: '<i class="bi bi-envelope"></i>',
                                            applyBorder: true,
                                        });
                                    </script>
                                </div>

                                <div class="text_field_container" id="phoneNumber_container">
                                    <script>
                                        textField({
                                            id: 'phoneNumber',
                                            title: 'Mobile Number',
                                            icon: '<i class="bi bi-telephone"></i>',
                                            applyBorder: true,
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="text_area_container" id="comment_container">
                                <script>
                                    textField({
                                        id: 'comment',
                                        title: 'Comment',
                                        type: 'textarea',
                                        icon: '<i class="bi bi-chat-text"></i>',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-airplane"></i>
                            </div>
                            <p>Flight Details</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="flex-cont">
                            <div class="text_field_container" id="airlineTypeId_container">
                                <script>
                                    selectField({
                                        id: 'airlineTypeId',
                                        title: 'Airline',
                                        applyBorder: true,
                                    });
                                    _getSelectAirline('airlineTypeId');
                                </script>
                            </div>

                            <div class="text_field_container" id="flightTicketId_container">
                                <script>
                                    textField({
                                        id: 'flightTicketId',
                                        title: 'Flight #',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <p>Choose Payment Method</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="payment-method-wrapper">
                            <div class="payment-method" id="creditCardMethod" onclick="_selectPaymentMethod(this);" title="Pay securely with Credit Card">
                                <div class="icon">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                                <h3>Credit Card</h3>
                            </div>

                            <div class="payment-method" id="paypalMethod" onclick="_selectPaymentMethod(this);" title="Pay securely with PayPal">
                                <div class="icon">
                                    <i class="bi bi-paypal"></i>
                                </div>
                                <h3>PayPal</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-button-div">
        <div class="btn-div justify-button" id="chhoseVehicleBtn">
            <script>
                generalButtons({
                    container: "chhoseVehicleBtn",
                    buttons: [{
                        id: "chhoseVehicleBtn",
                        text: "Vehicle Details",
                        icon: "bi bi-arrow-left-circle",
                        variant: "btn-secondary",
                        onClick: "_getBookingNextPage({ page: 'vehicleDetailsPage' });",
                    }, 
                    {
                        text: "Booking Summary",
                        icon: "bi bi-arrow-right-circle",
                        onClick: "_getBookingNextPage({ page: 'bookingSummaryPage' });",
                        iconPosition: "right"
                    }]

                });
            </script>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'bookingSummaryPage') { ?>
    <div class="main-booking-wrapper main-summary-booking-wrapper" data-aos="fade-in" data-aos-duration="1000">
        <div class="booking-summary-div summary-div">
            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <p>Contact & Billing Info</p>
                        </div>
                        
                        <button class="btn" title="Edit Contact Info" onclick="_getBookingNextPage({ page: 'customerDetailsPage' });">Edit</button>
                    </div>

                    <div class="inner-content">
                        <div class="details-wrapper">
                            <div class="flex-cont">
                                <div class="details-div no-gap">
                                    <span>First Name</span>
                                    <h5 id="">Paul</h5>
                                </div>

                                <div class="details-div no-gap">
                                    <span>Last Name</span>
                                    <h5 id="">Emmanuel</h5>
                                </div>
                            </div>

                            <div class="details-div no-gap">
                                <span>Email Address</span>
                                <h5 id="">seunemmanuel107@gmail.com</h5>
                            </div>

                            <div class="details-div no-border no-gap">
                                <span>Mobile Number</span>
                                <h5 id="">+170509033886</h5>
                            </div>
                        </div>
                    </div>  
                </div>   
            </div> 

            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-credit-card"></i>
                            </div>
                            <p>Payment Method</p>
                        </div>
                        
                        <button class="btn" title="Edit Payment Method" onclick="_getBookingNextPage({ page: 'customerDetailsPage' });">Edit</button>
                    </div>

                    <div class="inner-content">
                        <div class="details-wrapper">
                            <div class="flex-cont">
                                <div class="details-div no-border no-gap">
                                    <span>Your Choice</span>
                                    <h5 id="">Credit Card</h5>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>   
            </div> 
        </div>

        <div class="booking-summary-div summary-div">
            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <p>Map Info</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="map-container summary-map-container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi-car-front-fill"></i>
                            </div>
                            <p>Ride Summary</p>
                        </div>

                        <button class="btn" title="Edit Ride Info" onclick="_getBookingNextPage({ page: 'rideDetailsPage' });">Edit</button>
                    </div>

                    <div class="inner-content">
                        <div class="details-wrapper">
                            <div class="details-div route-container">
                                <div class="route-line">
                                    <div class="route-moving-dot"></div>
                                    <div class="bottom-dot"></div>
                                </div>
                                <div class="route-points">
                                    <div class="point-block">
                                        <span><i class="bi bi-geo-alt"></i> Pick Up Location</span>
                                        <h5>MTN PLAZA, Lagos, Nigeria</h5>
                                    </div>
                                    <div class="point-block">
                                        <span><i class="bi bi-geo-alt"></i> Drop-off Location</span>
                                        <h5>Kotco Energy Ltd, Ode-Remo, Nigeria</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="details-div">
                                <span><i class="bi bi-clock"></i> Pick Up Date Time</span>
                                <h5 id="">2026-12-12, <strong>17:00</strong></h5>
                            </div>

                            <div class="details-div">
                                <span><i class="bi bi-car-front"></i> Service Type</span>
                                <h5 id="">Distance</h5>
                            </div>

                            <div class="flex-cont">
                                <div class="details-div no-border">
                                    <span><i class="bi bi-geo-alt"></i> Total Distance</span>
                                    <h5 id="">81.7 km</h5>
                                </div>

                                <div class="details-div no-border">
                                    <span><i class="bi bi-clock"></i> Total Time</span>
                                    <h5 id="">1 h 19 m</h5>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>   
            </div> 
        </div>

        <div class="booking-summary-div summary-div">
            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-car-front-fill"></i>
                            </div>
                            <p>Vehicle Info</p>
                        </div>

                        <button class="btn" title="Edit Vehicle Info" onclick="_getBookingNextPage({ page: 'vehicleDetailsPage' });">Edit</button>
                    </div>

                    <div class="inner-content">
                        <div class="summary-fleet-div">
                            <div class="image">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/fleets/executive-suv.jpg" alt="Executive Class SUV">
                            </div>

                            <div class="details-wrapper">
                                <div class="details-div no-gap">
                                    <span>Vehicle</span>
                                    <h5 id="">Executive Class SUV</h5>
                                </div>

                                <div class="details-div no-border no-gap">
                                    <span>Extra Options</span>
                                    <h5 id="">2 x Child Car Seat - $30.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-tag"></i>
                            </div>
                            <p>Apply Discount Code</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="text-field-wrapper">
                            <div class="text_field_container" id="discount_container">
                                <script>
                                    textField({
                                        id: 'discount',
                                        title: 'Discount Code',
                                        icon: '<i class="bi bi-tag"></i>',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div">
                <div class="tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <div class="icon">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <p>Payment Summary</p>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="details-wrapper">
                            <div class="details-div justify-space-between">
                                <span><i class="bi bi-car-front"></i> Selected Vehicle</span>
                                <h5 id="selectedVehiclePrice">$0.00</h5>
                            </div>

                            <div class="details-div justify-space-between">
                                <span><i class="bi bi-receipt"></i> Total</span>
                                <h5 class="deposit-amount" id="totalVicleAmount">$0.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="check-box-container" id="notificationConsent_container">
        <label class="check-box-label">
            <input type="checkbox" id="notificationConsent" name="notificationConsent" value="1">
            <span>
                By checking this box, you acknowledge that 1ST CLASSIC TRANSPORTATION INC. can send you text messages on their behalf. Msg & Data Rates apply. Msg Frequency may vary. Text HELP for more info. Reply STOP to opt out.
            </span>
        </label>
    </div>

    <div class="bottom-button-div">
        <div class="btn-div justify-button" id="chhoseVehicleBtn">
            <script>
                generalButtons({
                    container: "chhoseVehicleBtn",
                    buttons: [{
                        id: "chhoseVehicleBtn",
                        text: "Customer Details",
                        icon: "bi bi-arrow-left-circle",
                        variant: "btn-secondary",
                        onClick: "_getBookingNextPage({ page: 'customerDetailsPage' });",
                    }, 
                    {
                        text: "Booking Now!",
                        icon: "bi bi-car-fill-front",
                        onClick: "",
                        iconPosition: "right"
                    }]

                });
            </script>
        </div>
    </div>
<?php } ?>