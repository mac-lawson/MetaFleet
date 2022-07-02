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
    localStorage.setItem("Headset Name", (assetName));
    //Set document
    document.getElementById("ACTIVE_DEPLOYS").innerText = (localStorage.getItem("Headset IP Address"));
}

function loadAssets() {
    document.getElementById("ACTIVE_DEPLOYS").innerText = (document.cookie);
}    
