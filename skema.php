<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<style>
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}
#header {
    height: 5%;
}
#profil {
    height: 95%;
    padding: 0;
}
.row {
    margin: 0;
}  
</style>
<div id="header" class=" container-fluid border-bottom border-dark bg-info">
    <div class="row">
        <div class="col-sm-3 col-md-6 col-lg-3 pt-1 text-white">
            <h2 class="fw-light">XYZ A/S</h1>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-9 pt-2 text-right">
            <div class="dropdown">
                <button type="button" class="btn btn-bg-primary btn-sm dropdown-toggle align-self-end" data-toggle="dropdown"></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tap Panes -->

<div class="tab-pane container active m-0" id="profil" >
    <div class="row h-100">
        <div class="col-sm-3 col-md-6 col-lg-1 " style="padding: 0; border: 1px solid #ccc;">
            <ul class="nav flex-column nav-justified">
                <li class="nav-item">
                  <a class="nav-link" href="#"><img src="" class="img-fluid">Hjem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="icon-user" src></i>
                        <span>Oversigt</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-11"></div>
    </div>
</div>


    
</body>
</html>