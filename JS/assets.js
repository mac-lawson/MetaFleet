function createNewAsset() {
    var assetIP = document.getElementById("assetIP").value;

    var assetName = document.getElementById("assetName").value;


    // document.cookie = ((assetIP) + '=' + (assetName));
    // document.cookie = ("headset=" + (assetName));
    //
    //
    //
    //Set Local Storage Items
    const storedIP = localStorage.setItem("Headset IP Address: ", (assetIP));
    const storedName = localStorage.setItem("Headset Name", (assetName));
    //Set document
    display1('Oculus IP: ', assetIP);
    display2('Oculus Name: ', assetName);
}

function display1(name, variable) {
    document.getElementById("ACTIVE_DEPLOYS").innerText = ((name) + (variable));
        
}    

function display2(name, variable) {
    document.getElementbyId("ACTIVE_DEPLOYS2").innerText = ((name) + (variable));
}
