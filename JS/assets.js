function createNewAsset() {
    var assetIP = document.getElementById("assetIP").value;

    var assetName = document.getElementById("assetName").value;

    location.reload();

    document.cookie = ((assetIP), '=', (assetName));
    document.cookie = ("headset=", (assetName));

    document.getElementById("ACTIVE_DEPLOYS").innerText = (document.cookie);
}
