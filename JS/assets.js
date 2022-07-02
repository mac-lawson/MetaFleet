function createNewAsset() {
    var assetIP = document.getElementById("assetIP").value;

    var assetName = document.getElementById("assetName").value;


    // document.cookie = ((assetIP) + '=' + (assetName));
    // document.cookie = ("headset=" + (assetName));
    //
    //
    //
    //Set Local Storage Items
    localStorage.setItem("Headset IP Address: ", (assetIP));
    localStorage.setItem("Headset Name: ", (assetName));
    //Set document
    display1('Oculus IP: ', localStorage.getItem("Headset IP Address: "));
    display2('Oculus Name: ', localStorage.getItem("Headset Name: "));
}

function display1(name, variable) {
    var assetIP = document.getElementById("assetIP").value;
    document.getElementById("ACTIVE_DEPLOYS").innerText = ((name) + (variable));
        
}    

function display2(name, variable) {
    var assetName = document.getElementById("assetName").value;
    document.getElementById("ACTIVE_DEPLOYS2").innerText = ((name) + (variable));
}

function loadAssets() {
    display1('Oculus IP: ', localStorage.getItem("Headset IP Address: "));
    display2('Oculus Name: ', localStorage.getItem("Headset Name: "));
}