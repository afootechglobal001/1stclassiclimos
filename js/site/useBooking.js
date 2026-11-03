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

function _selectVehicle(element) {
    const $card = $(element).closest(".bookings-fleet");

    // Reset all vehicles
    $(".bookings-fleet").removeClass("selected-fleet");
    $(".bookings-fleet .select-btn-div .btn")
        .html('<i class="bi bi-car-front-fill"></i> Select Vehicle')
        .removeClass("is-selected");

    // Select clicked vehicle
    $card.addClass("selected-fleet");
    $card.find(".select-btn-div .btn")
        .html('<i class="bi bi-check-circle-fill"></i> Selected')
        .addClass("is-selected");

    // Get vehicle details
    const vehicleName = $card.find(".fleet-content h2").text().trim();
    const rawPrice = $card.find(".price-div h3").text().trim();

    const selectedVehicleData = {
        name: vehicleName,
        price: rawPrice,
        numericPrice: parseFloat(rawPrice.replace(/[^0-9.]/g, "")) || 0
    };

    _updateSelectedPrice(selectedVehicleData);
    _scrollToExtraOptions();
}

// Separate helper function to update summary UI & calculate deposit
function _updateSelectedPrice(vehicleData) {
    const totalAmount = vehicleData.numericPrice;

    /// Update Summary UI
    $("#selectedVehiclePrice").html('$' + `${totalAmount}`);
    $("#totalVehicleAmount").html('$' + `${totalAmount}`);
}

//// Select Payment Method ////
function _selectPaymentMethod(element) {
    $(".payment-method-wrapper .payment-method").removeClass("selected-method");
    $(element).addClass("selected-method");
    let paymentMethod = $(element).attr("id");
    sessionStorage.setItem("selectedPaymentMethod", paymentMethod);
}

function _scrollToExtraOptions() {
    $("#extraOptionsDiv").get(0).scrollIntoView({
        behavior: "smooth",
        block: "start"
    });
}

// Handle increment and decrement buttons
function changeCount(btn, direction) {
    const $wrapper = $(btn).closest('.counter-controls');
    const $input = $wrapper.find('.counter-input');

    const MIN = parseInt($input.data('min'), 10);
    const MAX = parseInt($input.data('max'), 10);
    const STEP = parseInt($input.data('step'), 10);

    let currentValue = parseInt($input.val(), 10);
    if (isNaN(currentValue)) currentValue = MIN;
    let newValue = currentValue + (STEP * direction);
    newValue = Math.min(Math.max(newValue, MIN), MAX);
    $input.val(newValue);
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

function _toggleFlightDetails(element) {
    if ($(element).is(':checked')) {
        $('#flightDetailsWrapper').hide();
    } else {
        $('#flightDetailsWrapper').show();
    }
}

$(document).on('change', '#smsConsent', function () {
    $('#bookingNowBtn').prop('disabled', !this.checked);
});