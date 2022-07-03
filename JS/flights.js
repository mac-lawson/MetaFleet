


function createFlight() {
    localStorage.setItem("Flight Route", document.getElementById("new-route").value);
    localStorage.setItem("Aircraft", document.getElementById("new-aircraft").value);
    displayFlightInfo();
}




/**
 * Author: Mac Lawson
 */
function displayFlightInfo() {
    var route = localStorage.getItem("Flight Route");
    var aircraft = localStorage.getItem("Aircraft");
    document.getElementById("route").innerText = (route);
    document.getElementById("aircraft").innerText = (aircraft);
}