/// next page function ///
function _getBookingNextPage(props) {
    const { page = "" } = props;
    sessionStorage.setItem("currentBookingsPage", page);
    _getPage({ page: page, url: siteMiddlewareUrl });
    _updateProgress(page);

    window.scrollTo({
        top: "100px",
        behavior: "smooth"
    });
}


//// Update Progress ////
function _updateProgress(page) {
    const stages = $(".booking-stage");
    const currentStage = stages.index($(`[data-page="${page}"]`));

    stages.removeClass("active done");

    stages.each(function (index) {
        const $stage = $(this);
        const $count = $stage.find(".count-div h2");

        if (index < currentStage) {
            $stage.addClass("done");
            $count.html('<i class="bi bi-check-circle-fill" style="color:var(--secondary-color)"></i>');
        } else {
            $count.text(index + 1);
        }

        if (index === currentStage) {
            $stage.addClass("active");
        }
    });
}

function changeBookingType(bookingType) {
    // Allow only valid booking types
    const validTypes = ['airport-transfer', 'point-to-point', 'hourly', 'flat-rate'];
    if (!validTypes.includes(bookingType)) {
        return;
    }

    // Update active tab
    $('.tabs-btn-div .btn').removeClass('active');
    $('.tabs-btn-div .btn').each(function () {
        if ($(this).attr('onclick') === `changeBookingType('${bookingType}')`) {
            $(this).addClass('active');
        }
    });

    // Reset fields
    $('#duration_container, #serviceType_container').hide();
    $('#pickUp_container, #destination_container, #pickupDate_container, #pickupTime_container').show();

    // Booking Type
    if (bookingType === 'hourly') {
        $('#duration_container').show();
    } else if (bookingType === 'airport-transfer') {
        $('#serviceType_container').show();
    }
}

function _getSelectServiceType(fieldId) {
    try {
        /*
        _callFetchEndPoints({
            url: `admin/settings/information-category/fetch-information-category?statusId=1`,
            accessKey: true,
        })
        .then((response) => {
            for (let i = 0; i < response.data.length; i++) {
                const id = response.data[i].categoryId;
                const value = response.data[i].categoryName;

                $("#searchList_" + fieldId).append(
                    "<li onclick=\"_clickOption('searchList_" +
                    fieldId +
                    "', '" +
                    id +
                    "', '" +
                    value +
                    "');\">" +
                    value +
                    "</li>"
                );
            }
        })
        .catch((error) => {
            _staffValidationCheck(error.response);
            console.error("Error:", error);
        });
        */
        const response = {
            data: [
              {
                serviceTypeId: 'serviceType10001',
                categoryName: 'Airport Arrival'
              },
              {
                serviceTypeId: 'serviceType10002',
                categoryName: 'Airport Departure'
              },
            ]
        };

        for (let i = 0; i < response.data.length; i++) {
            const id = response.data[i].serviceTypeId;
            const value = response.data[i].categoryName;

            $("#searchList_" + fieldId).append(
                "<li onclick=\"_clickOption('searchList_" +
                fieldId +
                "', '" +
                id +
                "', '" +
                value +
                "');\">" +
                value +
                "</li>"
            );
        }
    } catch (error) {
      console.error("Error:", error);
      _actionAlert("An unexpected error occurred. Please try again.", false);
    }
}

function _getSelectMeetAndGreet(fieldId) {
    try {
        /*
        _callFetchEndPoints({
            url: `admin/settings/information-category/fetch-information-category?statusId=1`,
            accessKey: true,
        })
        .then((response) => {
            for (let i = 0; i < response.data.length; i++) {
                const id = response.data[i].serviceTypeId;
                const value = response.data[i].categoryName;

                $("#searchList_" + fieldId).append(
                    "<li onclick=\"_clickOption('searchList_" +
                    fieldId +
                    "', '" +
                    id +
                    "', '" +
                    value +
                    "');\">" +
                    value +
                    "</li>"
                );
            }
        })
        .catch((error) => {
            _staffValidationCheck(error.response);
            console.error("Error:", error);
        });
        */

        //// Dummy response until backend is ready //////

        const response = {
        data: [
            {
                meetAndGreetId: 'meetAndGreet10001',
                categoryName: 'Meet & Greet International',
                price: 50
            },
            {
                meetAndGreetId: 'meetAndGreet10002',
                categoryName: 'Meet & Greet Domestic',
                price: 75
            },
        ]
    };

    for (let i = 0; i < response.data.length; i++) {
        const id = response.data[i].meetAndGreetId;
        const value = response.data[i].categoryName;
        const price = response.data[i].price;
        const priceAmountText = `$${thousandSeperator(price)}`;

        $('#searchList_'+ fieldId).append('<li onclick="_clickOption(\'searchList_' + fieldId + '\', \'' + id + '\', \'' + value + ' (' + priceAmountText + ')' + '\');">' + value + ' (' + priceAmountText + ')' + '</li>');
    }

    } catch (error) {
        console.error("Error:", error);
        _actionAlert("An unexpected error occurred. Please try again.", false);
    }
}

function _getSelectAirline(fieldId) {
    try {
        /*
        _callFetchEndPoints({
            url: `admin/settings/information-category/fetch-information-category?statusId=1`,
            accessKey: true,
        })
        .then((response) => {
            for (let i = 0; i < response.data.length; i++) {
                const id = response.data[i].categoryId;
                const value = response.data[i].categoryName;

                $("#searchList_" + fieldId).append(
                    "<li onclick=\"_clickOption('searchList_" +
                    fieldId +
                    "', '" +
                    id +
                    "', '" +
                    value +
                    "');\">" +
                    value +
                    "</li>"
                );
            }
        })
        .catch((error) => {
            _staffValidationCheck(error.response);
            console.error("Error:", error);
        });
        */

        // Dummy airline response
        const response = {
            data: [
                // USA Domestic Airlines
                { airlineTypeId: 'AA', airlineName: 'American Airlines (AA)' },
                { airlineTypeId: 'DL', airlineName: 'Delta Air Lines (DL)' },
                { airlineTypeId: 'UA', airlineName: 'United Airlines (UA)' },
                { airlineTypeId: 'WN', airlineName: 'Southwest Airlines (WN)' },
                { airlineTypeId: 'AS', airlineName: 'Alaska Airlines (AS)' },
                { airlineTypeId: 'B6', airlineName: 'JetBlue Airways (B6)' },
                { airlineTypeId: 'F9', airlineName: 'Frontier Airlines (F9)' },
                { airlineTypeId: 'NK', airlineName: 'Spirit Airlines (NK)' },
                { airlineTypeId: 'G4', airlineName: 'Allegiant Air (G4)' },
                { airlineTypeId: 'SY', airlineName: 'Sun Country Airlines (SY)' },
                { airlineTypeId: 'HA', airlineName: 'Hawaiian Airlines (HA)' },
                { airlineTypeId: 'MX', airlineName: 'Breeze Airways (MX)' },
                { airlineTypeId: 'XP', airlineName: 'Avelo Airlines (XP)' },

                // International Airlines
                { airlineTypeId: 'AC', airlineName: 'Air Canada (AC)' },
                { airlineTypeId: 'AM', airlineName: 'Aeromexico (AM)' },
                { airlineTypeId: 'BA', airlineName: 'British Airways (BA)' },
                { airlineTypeId: 'VS', airlineName: 'Virgin Atlantic (VS)' },
                { airlineTypeId: 'AF', airlineName: 'Air France (AF)' },
                { airlineTypeId: 'KL', airlineName: 'KLM Royal Dutch Airlines (KL)' },
                { airlineTypeId: 'LH', airlineName: 'Lufthansa (LH)' },
                { airlineTypeId: 'LX', airlineName: 'Swiss International Air Lines (LX)' },
                { airlineTypeId: 'EK', airlineName: 'Emirates (EK)' },
                { airlineTypeId: 'QR', airlineName: 'Qatar Airways (QR)' },
                { airlineTypeId: 'EY', airlineName: 'Etihad Airways (EY)' },
                { airlineTypeId: 'TK', airlineName: 'Turkish Airlines (TK)' },
                { airlineTypeId: 'EI', airlineName: 'Aer Lingus (EI)' },
                { airlineTypeId: 'IB', airlineName: 'Iberia (IB)' },
                { airlineTypeId: 'SQ', airlineName: 'Singapore Airlines (SQ)' },
                { airlineTypeId: 'QF', airlineName: 'Qantas (QF)' },
                { airlineTypeId: 'JL', airlineName: 'Japan Airlines (JL)' },
                { airlineTypeId: 'NH', airlineName: 'All Nippon Airways (NH)' },
                { airlineTypeId: 'KE', airlineName: 'Korean Air (KE)' },
                { airlineTypeId: 'CX', airlineName: 'Cathay Pacific (CX)' },
                { airlineTypeId: 'AV', airlineName: 'Avianca (AV)' },
                { airlineTypeId: 'CM', airlineName: 'Copa Airlines (CM)' },
                { airlineTypeId: 'LA', airlineName: 'LATAM Airlines (LA)' },
                { airlineTypeId: 'WS', airlineName: 'WestJet (WS)' },
                { airlineTypeId: 'PD', airlineName: 'Porter Airlines (PD)' }
            ]
        };

        for (let i = 0; i < response.data.length; i++) {
            const id = response.data[i].airlineTypeId;
            const value = response.data[i].airlineName;

            $("#searchList_" + fieldId).append(
                "<li onclick=\"_clickOption('searchList_" +
                fieldId +
                "', '" +
                id +
                "', '" +
                value +
                "');\">" +
                value +
                "</li>"
            );
        }

    } catch (error) {
        console.error("Error:", error);
        _actionAlert("An unexpected error occurred. Please try again.", false);
    }
}


/// Fetch Faq List ///
function _getBookingFleetData() {
    try {
        /*
        _callFetchEndPoints({
            url: `admin/settings/information-category/fetch-information-category?statusId=1`,
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
                    fleetId: 'FLT001',
                    fleetName: 'Executive Class SUV',
                    fleetCategory: 'Luxury SUV',
                    fleetDescription: 'Luxury Equipped Fleet',
                    fleetImage: 'executive-suv.jpg',
                    passengerCapacity: 6,
                    luggageCapacity: 6,
                    features: [
                        'USB Charger',
                        'Leather Interior',
                        'Tinted Windows',
                        'Available In Black'
                    ],
                    price: 94.99,
                    statusData: {
                        "statusId": 1,
                        "statusName": "ACTIVE"
                    }
                },
                {
                    fleetId: 'FLT002',
                    fleetName: 'Executive Sedan',
                    fleetCategory: 'Executive Class',
                    fleetDescription: 'Premium Executive Transportation',
                    fleetImage: 'executive-sedan.jpg',
                    passengerCapacity: 3,
                    luggageCapacity: 3,
                    features: [
                        'USB Charger',
                        'Leather Interior',
                        'Climate Control',
                        'Available In Black'
                    ],
                    price: 84.99,
                    statusData: {
                        "statusId": 1,
                        "statusName": "ACTIVE"
                    }
                },
                {
                    fleetId: 'FLT004',
                    fleetName: 'Executive Sprinter Van',
                    fleetCategory: 'Luxury Van',
                    fleetDescription: 'Spacious Group Transportation',
                    fleetImage: 'executive-class-sprinter-van.jpg',
                    passengerCapacity: 14,
                    luggageCapacity: 10,
                    features: [
                        'USB Charging Ports',
                        'Leather Interior',
                        'Climate Control',
                        'Spacious Luggage Area'
                    ],
                    price: 159.99,
                    statusData: {
                        "statusId": 1,
                        "statusName": "ACTIVE"
                    }
                }
            ]
        };
        const bookingFleetData = response?.data || [];
        _renderBookingFleetData(bookingFleetData);
        sessionStorage.setItem("bookingFleetData", JSON.stringify(bookingFleetData));
    } catch (error) {
        console.error("Error:", error);
    }
}
    
/// Render Booking Fleet Data ///
function _renderBookingFleetData(data) {
    const content = data.map((item) => {
        const features = item.features.map((feature) => {
            return `
                <div class="feature">
                    <i class="bi bi-check-circle"></i>
                    <p><span>${feature}</span></p>
                </div>
            `;
        }).join("");

        return `
            <div class="bookings-fleet" onclick="_selectVehicle(this)" data-fleet-id="${item?.fleetId}">
                <div class="image-div">
                    <img src="${websiteUrl}/uploaded_files/fleets/${item?.fleetImage}" alt="${item?.fleetName}">
                </div>

                <div class="content">
                    <div class="fleet-content">
                        <h2>${item?.fleetName}</h2>
                        <p>${item?.fleetDescription}</p>

                        <div class="feature-wrapper">
                            <div class="feature">
                                <i class="bi bi-people"></i>
                                <p><span>${item?.passengerCapacity}</span> Seats</p>
                            </div>

                            <div class="feature">
                                <i class="bi bi-suitcase2"></i>
                                <p><span>${item?.luggageCapacity}</span> Suitcase</p>
                            </div>

                            ${features}
                        </div>
                    </div>

                    <div class="price-div-wrapper">
                        <div class="price-div">
                            <h3>$${thousandSeperator(item?.price)}</h3>
                        </div>

                        <div class="select-btn-div">
                            <button class="btn" type="button" title="Select Vehicle">
                                <i class="bi bi-car-front-fill"></i> Select Vehicle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }).join("");
    $("#boookingsFleetContent").html(content);
}

//// Select Vehicle ////
function _selectVehicle(element) {
    const $card = $(element).closest(".bookings-fleet");
    const fleetId = $card.attr("data-fleet-id");

    const fleetData = JSON.parse(sessionStorage.getItem("bookingFleetData") || "[]");

    const vehicleData = fleetData.find(item => item.fleetId == fleetId);

    if (!vehicleData) return;

    $(".bookings-fleet").removeClass("selected-fleet");

    $(".bookings-fleet .select-btn-div .btn").html('<i class="bi bi-car-front-fill"></i> Select Vehicle').removeClass("is-selected");

    $card.addClass("selected-fleet");

    $card.find(".select-btn-div .btn").html('<i class="bi bi-check-circle-fill"></i> Selected').addClass("is-selected");

    sessionStorage.setItem("selectedFleetId", fleetId);

    _updateBookingPaymentSummary();
    _scrollToExtraOptions();
}

function _updateBookingPaymentSummary() {
    let extraOptionsTotal = 0;
    let selectedExtraOptions = [];

    // Loop through extra options
    $(".extra-option[data-extra-option-id]").each(function () {
        const $option = $(this);
        const extraOptionId = $option.attr("data-extra-option-id");

        const optionData = bookingExtraOptionsData.find(
            item => item.extraOptionId == extraOptionId
        );

        if (!optionData || optionData.optionType !== 'quantity') {
            return;
        }

        const quantity = Number($option.find(".counter-input").val()) || 0;

        if (quantity > 0) {
            const price = Number(optionData.price) || 0;
            const total = quantity * price;

            extraOptionsTotal += total;

            selectedExtraOptions.push(`
                <div class="details-div justify-space-between">
                    <span>${optionData.extraOptionName} (${quantity} × $${thousandSeperator(price)})</span>
                    <h5>$${thousandSeperator(total)}</h5>
                </div>
            `);
        }
    });

    // Update Extra Options Summary
    if (selectedExtraOptions.length > 0) {
        $("#selectedExtraOptionsContent").html(selectedExtraOptions.join(""));
        $("#extraOptionsSummary").show();
    } else {
        $("#selectedExtraOptionsContent").empty();
        $("#extraOptionsSummary").hide();
    }

    // Get selected vehicle price
    const selectedFleetId = sessionStorage.getItem("selectedFleetId");
    const fleetData = JSON.parse(sessionStorage.getItem("bookingFleetData") || "[]");

    const vehicleData = fleetData.find(
        item => item.fleetId == selectedFleetId
    );

    const vehiclePrice = Number(vehicleData?.price) || 0;

    // Calculate overall payment
    const totalAmount = vehiclePrice + extraOptionsTotal;

    // Update Payment Summary
    $("#selectedVehiclePrice").html('$' + thousandSeperator(vehiclePrice));
    $("#totalVehicleAmount").html('$' + thousandSeperator(totalAmount));
}

//// Select Payment Method ////
function _selectPaymentMethod(element) {
    $(".payment-method-wrapper .payment-method").removeClass("selected-method");
    $(element).addClass("selected-method");
    let paymentMethod = $(element).attr("id");
    sessionStorage.setItem("selectedPaymentMethod", paymentMethod);
}

/// Scroll to Extra Options Section ////
function _scrollToExtraOptions() {
    $("#extraOptionsDiv").get(0).scrollIntoView({
        behavior: "smooth",
        block: "start"
    });
}

// Handle increment and decrement buttons
function changeCount(button, change) {
    const $option = $(button).closest(".extra-option");
    const $input = $option.find(".counter-input");

    const min = Number($input.attr("data-min")) || 0;
    const max = Number($input.attr("data-max")) || 99;
    const step = Number($input.attr("data-step")) || 1;

    let currentValue = Number($input.val()) || 0;
    let newValue = currentValue + (change * step);

    newValue = Math.max(min, Math.min(max, newValue));

    $input.val(newValue);

    _updateBookingPaymentSummary();
}

// Allow only positive whole numbers (including zero)
$(document).on('input', '.counter-input', function () {
    let value = $(this).val();
    value = value.replace(/[^0-9]/g, '');

    if (value !== '') {
        value = Math.min(parseInt(value, 10), 99);
    }
    $(this).val(value);
});

/// Toggle Flight Details Section ///
function _toggleFlightDetails(element) {
    if ($(element).is(':checked')) {
        $('#flightDetailsWrapper').hide();
    } else {
        $('#flightDetailsWrapper').show();
    }
}

//// Enable/Disable Booking Now Button Based on SMS Consent ////
$(document).on('change', '#smsConsent', function () {
    $('#bookingNowBtn').prop('disabled', !this.checked);
});


/// Fetch Booking Extra Options ///
function _getBookingExtraOptions() {
    try {
        // Dummy response for testing
        const response = {
            data: [
                {
                    extraOptionId: 'EXT001',
                    extraOptionName: 'Meet and Greet',
                    extraOptionDescription: 'Driver will meet you inside the terminal with a personalized name sign.',
                    extraOptionImage: 'extra-meet-and-greet.jpg',
                    optionType: 'select',
                    price: 25.00,
                },
                {
                    extraOptionId: 'EXT002',
                    extraOptionName: 'Pet Travel Service',
                    extraOptionDescription: 'Pet-friendly vehicle preparation for comfortable travel with your pet.',
                    extraOptionImage: 'extra-pet-travel-service.jpg',
                    optionType: 'quantity',
                    price: 15.00,
                    maxQuantity: 3,
                },
                {
                    extraOptionId: 'EXT003',
                    extraOptionName: 'Child Car Seat',
                    extraOptionDescription: 'Child car seat suitable for children aged 0–36 months.',
                    extraOptionImage: 'extra-child-car-seat.jpg',
                    optionType: 'quantity',
                    price: 25.00,
                    maxQuantity: 3
                },
                {
                    extraOptionId: 'EXT004',
                    extraOptionName: 'Champagne',
                    extraOptionDescription: '0.75L bottle of French Brut Champagne.',
                    extraOptionImage: 'extra-champagne.jpg',
                    optionType: 'quantity',
                    price: 110.00,
                    maxQuantity: 4
                }
            ]
        };

        bookingExtraOptionsData = response?.data || [];
        _renderBookingExtraOptions(bookingExtraOptionsData);

    } catch (error) {
        console.error("Error:", error);
    }
}

/// Render Booking Extra Options ///
function _renderBookingExtraOptions(data) {
    let meetAndGreetContent = '';
    let otherOptionsContent = '';

    data.forEach((item) => {
        if (item.optionType === 'select') {
            meetAndGreetContent = `
                <div class="extra-option" id="meetAndGreetExtraOption" data-extra-option-id="${item?.extraOptionId}">
                    <div class="image-div">
                        <img src="${websiteUrl}/uploaded_files/extra-options/${item?.extraOptionImage}" alt="${item?.extraOptionName}">
                    </div>

                    <div class="content-div">
                        <div class="top-content">
                            <div class="title"><h3>${item?.extraOptionName}</h3></div>
                            <p>${item?.extraOptionDescription}</p>
                        </div>

                        <div class="text-field-wrapper select-wrapper">
                            <div class="text_field_container" id="meetAndGreetId_container"></div>
                        </div>
                    </div>
                </div>
            `;
        } else if (item.optionType === 'quantity') {
            otherOptionsContent += `
                <div class="extra-option" data-extra-option-id="${item?.extraOptionId}">
                    <div class="image-div">
                        <img src="${websiteUrl}/uploaded_files/extra-options/${item?.extraOptionImage}" alt="${item?.extraOptionName}">
                    </div>

                    <div class="content-div">
                        <div class="top-content">
                            <div class="title">
                                <h3>${item?.extraOptionName}</h3>
                                <strong>($${thousandSeperator(item?.price)})</strong>
                            </div>
                            <p>${item?.extraOptionDescription}</p>
                        </div>

                        <div class="text-field-wrapper">
                            <div class="number-count-wrapper">
                                <div class="counter-controls">
                                    <button type="button" class="btn-counter btn-decrement" onclick="changeCount(this, -1)" aria-label="Decrease">–</button>
                                    <input type="text" class="counter-input" value="0" data-min="0" data-max="${item?.maxQuantity}" data-step="1" inputmode="numeric" data-extra-option-id="${item?.extraOptionId}">
                                    <button type="button" class="btn-counter btn-increment" onclick="changeCount(this, 1)" aria-label="Increase">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }
    });

    $("#meetAndGreetExtraOption").html(meetAndGreetContent);
    $("#otherExtraOptionsContent").html(otherOptionsContent);

    // Initialize Meet and Greet select field
    if (meetAndGreetContent) {
        selectField({
            id: 'meetAndGreetId',
            title: 'Meet & Greet',
            icon: '<i class="bi bi-person-badge"></i>',
        });
        _getSelectMeetAndGreet('meetAndGreetId');
    }
}