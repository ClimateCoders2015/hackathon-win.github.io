function findClosestFoodBank(lat1, lat2) {
    let z = 0;
    let y = 0;
    for (let count = 0; count < 6; count++) {
        const lat2 = latfood[count];
        const lon2 = longfood[count];
        const r = 6371;
        const p = 0.017453292519943295;
        const a = 0.5 - Math.cos((lat2 - lat1) * p) / 2 + Math.cos(lat1 * p) * Math.cos(lat2 * p) * (1 - Math.cos((lon2 - lon1) * p)) / 2;
        const displacement = 2 * r * Math.asin(Math.sqrt(a));
        if (count < 1) {
            z = displacement;
            y = count;
        } else if (displacement < z) {
            z = displacement;
            y = count;
        }
    }
    if (z <= 20) {
        const fuel_cost = (z / 20) * 2.92 + 25;
        const fuel_costround = fuel_cost.toFixed(2);
        console.log("Cost of trip: ",fuel_costround);
        console.log("Displacement: ",displacement);
        console.log("URL: ",url[y]);
    } else if (z >= 20 && z <= 50) {
        const fuel_cost = ((z + z * 0.25) / 20) * 2.92 + 25;
        const fuel_costround = fuel_cost.toFixed(2);
        console.log("Cost of trip: ",fuel_costround);
        console.log("Displacement: ",displacement);
        console.log("URL: ",url[y]);
    } else {
        const fuel_cost = ((z + z * 0.5) / 20) * 2.92 + 25;
        const fuel_costround = fuel_cost.toFixed(2);
        console.log("Cost of trip: ",fuel_costround);
        console.log("Displacement: ",displacement);
        console.log("URL: ",url[y]);
    }
}
if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var userLocation = {
                latitude: position.coords.latitude,
                longitude: position.coords.longitude
            };
            findClosestFoodBank(position.coords.latitude, position.coords.longitude); // Function to find the closest food bank
        }, function(error) {
        console.error("Geolocation error: " + error.message);
        // Handle errors or prompt user to enter their location manually
     });
} else {
    console.log("Geolocation is not supported by this browser.");
    // Prompt user to enter their location manually
}
(function () {
    var old = console.log;
    var logger = document.getElementById('log');
    console.log = function () {
    for (var i = 0; i < arguments.length; i++) {
        if (typeof arguments[i] == 'object') {
            logger.innerHTML += (JSON && JSON.stringify ? JSON.stringify(arguments[i], undefined, 2) : arguments[i]) + '<br />';
        } else {
            logger.innerHTML += arguments[i] + '<br />';
        }
    }
    }
})();