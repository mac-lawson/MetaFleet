function createNewAsset() {
    var assetIP = document.getElementById("assetIP").value;

    var assetName = document.getElementById("assetName").value;

    document.cookie((assetIP) + '=' + (assetName));
    document.cookie("headset=" + (assetName));

    document.getElementById("ACTIVE_DEPLOYS").innerText = (document.cookie);
}
