<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MetaFleet - Create Flights</title>
        <link rel="icon" type="image/x-icon" href="/MetaJets.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

            <!-- start of navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="/"> MetaFleet - Flight Operations <span class="badge bg-secondary">pre beta</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/interface?command=dir">Interface</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Create Flights</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/payment">Payments</a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>
          <!-- end of navbar -->



        <div class="container">
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Currently, a MetaJets provider can only create one flight at a time. This will change with v1.0
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Create
                </button>
                </div>
                <div class="col">
                <h3>Route</h3>
                </div>
                <div class="col">
                <h3>Aircraft</h3>
                </div>               
            </div>

            <div class="row">
                <div class="col">
                <b>Information: </b>
                </div>
                <div class="col">
                <code id='route'></code>
                </div>
                <div class="col">
                <code id='aircraft'></code>
                </div>               
            </div>

            <div class="row">
                <div class="col">
                <button type="button" class="btn btn-secondary" onclick="displayFlightInfo()">Load Flights</button>
                </div>
                <!-- <div class="col">
                <code id='route'></code>
                </div>
                <div class="col">
                <code id='aircraft'></code>
                </div>                -->
            </div>
            
        </div>        




        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="container-sm" >
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Flight Route</span>
                            <input id="new-route" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="IAD - SFO">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Aircraft</span>
                            <input id="new-aircraft" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Boeing 737-700 BBJ">
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
                <button type="button" class="btn btn-success" onclick="createFlight()">Create Flight</button>
            </div>
            </div>
        </div>
        </div>























        
        <script src="/JS/flights.js" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </body>
</html>