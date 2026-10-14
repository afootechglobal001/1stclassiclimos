//// Get Date Format /////
function _fetchFormatDate(dateString) {
  if (!dateString) return "N/A"; // fallback if no date
  const dateObj = new Date(dateString);
  const options = { day: "2-digit", month: "short", year: "numeric" };
  // Example: 25 Jan 2025
  return dateObj.toLocaleDateString("en-GB", options).replace(" ", " ");
}

function _fetchFormatDate(dateString) {
  if (!dateString) return "N/A";
  const dateObj = new Date(dateString);
  const options = {
    day: "2-digit",
    month: "short",
    year: "numeric"
  };

  // Example: 25 Jan, 2025
  return dateObj
      .toLocaleDateString("en-GB", options)
      .replace(/(\w{3}) (\d{4})/, "$1, $2");
}

function _formatShortDate(dateTime) {
  if (!dateTime) return "";

  const d = new Date(dateTime.replace(" ", "T"));

  return d.toLocaleDateString("en-US", {
    month: "short",
    day: "numeric",
    year: "numeric",
  });
}

function _formatTime(dateTime) {
    if (!dateTime) return "";

    // Tell JS this is UTC
    const utcDate = new Date(dateTime.replace(" ", "T") + "Z");

    return utcDate.toLocaleTimeString("en-NG", {
        hour: "numeric",
        minute: "2-digit",
        second: "2-digit",
        hour12: true
    }).toUpperCase();
}

//// Get First Letter of a String /////
function capitalizeFirstLetterOfEachWord(inputText) {
  const words = inputText.toLowerCase().split(" ");
  for (let i = 0; i < words.length; i++) {
    words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
  }
  const result = words.join(" ");
  return result;
}

///// Get First Letters of Each Word /////
function getFirstLettersOfEachWord(str) {
  return str
    .split(" ") // split by spaces
    .filter((word) => word) // remove empty strings (in case of double spaces)
    .map((word) => word[0].toUpperCase()) // take first letter and uppercase it
    .join(""); // join into a single string
}

function thousandSeperator(val) {
  let dp = 2;
  const formatter = new Intl.NumberFormat("ng-NG", {
    style: "decimal",
    maximumFractionDigits: dp,
    minimumFractionDigits: dp,
  });
  //   return formatter.format(val);
  return isNaN(parseFloat(formatter.format(val))) ? "-" : formatter.format(val);
}

//// User Role Check /////
function _userRoleCheck(){
	$('.switch input').on('change', function () {
		const label = $(this).next().next(); // Grab the toggle-label span
		label.text($(this).prop('checked') ? 'Yes' : 'No');
	});
}



let map;
let directionsService;
let directionsRenderer;
let pickupAutocomplete;
let destinationAutocomplete;
let systemGeneratedDestination = "";
let userEnteredDestination = "";
let systemGeneratedDistance = "";
let systemGeneratedDuration = "";

function initMap() {
  // Initialize map only when the map element exists
  const mapElement = document.getElementById("map");

  if (mapElement) {
    map = new google.maps.Map(mapElement, {
      center: {
        lat: 31.9686,
        lng: -99.9018,
      },
      zoom: 7,
    });

    // Directions service
    directionsService = new google.maps.DirectionsService();

    // Directions renderer
    directionsRenderer = new google.maps.DirectionsRenderer({
      map: map,
    });
  }

  // Pickup autocomplete
  const pickupInput = document.getElementById("pickUp");

  if (pickupInput) {
    pickupAutocomplete = new google.maps.places.Autocomplete(
      pickupInput,
      {
        fields: ["formatted_address", "geometry", "name"],
      }
    );

    pickupAutocomplete.addListener("place_changed", function () {
      const place = pickupAutocomplete.getPlace();

      if (!place.geometry || !place.geometry.location) {
        console.log("No location found for selected pickup address.");
        return;
      }

      getMapDetails();
    });
  }

  // Destination autocomplete
  const destinationInput = document.getElementById("destination");

  if (destinationInput) {
    destinationAutocomplete = new google.maps.places.Autocomplete(
      destinationInput,
      {
        fields: ["formatted_address", "geometry", "name"],
      }
    );

    destinationAutocomplete.addListener("place_changed", function () {
      const place = destinationAutocomplete.getPlace();

      if (!place.geometry || !place.geometry.location) {
        console.log("No location found for selected destination address.");
        return;
      }

      getMapDetails();
    });
  }
}

function getMapDetails() {
  userEnterPickup = $("#pickUp").val()?.trim() || "";
  userEnteredDestination = $("#destination").val()?.trim() || "";

  if (!userEnterPickup || !userEnteredDestination) {
    return;
  }

  // Only calculate routes on pages where the map is initialized
  if (!directionsService) {
    return;
  }

  const request = {
    origin: userEnterPickup,
    destination: userEnteredDestination,
    travelMode: google.maps.TravelMode.DRIVING,
  };

  directionsService.route(request, function (result, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      // Display the route only if a map renderer exists
      if (directionsRenderer) {
        directionsRenderer.setDirections(result);
      }

      const route = result.routes[0].legs[0];

      systemGeneratedDestination = route.end_address;
      systemGeneratedDistance = route.distance.text;
      systemGeneratedDuration = route.duration.text;

      $("#output").html("");
    } else {
      console.error("Directions request failed:", status);

      $("#output").html(`
        <span style="color:red;">
          Unable to calculate route.
        </span>
      `);
    }
  });
}