<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MetaFleet</title>
        <link rel="icon" type="image/x-icon" href="/MetaFleet/MetaJets.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/serverlist.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">MetaFleet - Management Client</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/metafleet/interface?command=dir">Interface</a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>

          <h2>MetaFleet Management Client</h2>



          <div class="container">
            <div class="row">
              <div class="col">
                <b>IP Address</b>
              </div>
              <div class="col">
                <b>Status</b>
              </div>               
            </div>

            
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
              <div class="col">
                <button type="button" class="btn btn-danger btn-sm">Remove</button>
              </div>                
            </div>
            
            


          </div>
          <div class="container" class="float-right" >
            <br></br>
            <button type="button" class="btn btn-success">Add</button>



          </div>
          &nbsp
          &nbsp
          &nbsp
          &nbsp          

        <!-- php section -->






        <!-- script refs -->
        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <script src="/JS/assets.js"></script>

        <script>
            const button = document.getElementById("create-new-device");
            button.addEventListener("click", () => {
                event.preventDefault();
            })
        </script>

    </body>
</html>
