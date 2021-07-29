<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}
#header {
    height: 5%;
}
#content {
    height: 95%;
    padding: 0;
}
.row {
    margin: 0;
}
.nav-item li {
    border-bottom: 1px solid #ccc;
    background-color: #f9f9f9;
}
.nav-item li a {
    font-size: 13px;
    color: #585858;
    padding: 0 16px 0 7px;
    height: 38px;
    text-align: left;
}

</style>
<body>
<!-- Header -->

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

<div id="content" class="">
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
        <div class="col-sm-9 col-md-6 col-lg-11">
            <h2 class="pt-1 text-info">Profil</h2>
            <hr class="m-1">
            <div class="tab-content row h-50 ">
                <div class="col-lg-2 mr-4 p-2"><img class="img-fluid border border-primary p-2" src="person.png" alt=""></div>
                <div class="col-lg-6 ml-4 p-2">
                    <div class="tabbable">
                        <ul class="nav nav-tabs border border-primary border-bottom-0 ">
                            <li class="nav-item active"><a class="nav-link rounded-0" href="#profil" data-toggle="tab">Profil</a></li>
                            <li class="nav-item"><a class="nav-link rounded-0" href="#projekter" data-toggle="tab">Projekter</a></li>
                        </ul>
                    </div>

                <!-- Profil -->
                    
                <div class="tab-pane container active p-3 border border-primary" id="#profil">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="FirstName">Fornavn</label>
                                    <input type="text" class="form-control form-control-sm" id="FirstName" disabled>
                                </div>
                                <div class="form-group col-lg-3"></div>
                                <div class="form-group col-lg-1">
                                    <label for="ID">PersonID</label>
                                    <input type="text" class="form-control form-control-sm" id="ID" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="LastName">Efternavn</label>
                                    <input type="text" class="form-control form-control-sm" id="LastName" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-5">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control form-control-sm" id="email" disabled>
                                </div>
                                <span class="form-group col-lg-2"></span>
                                <div class="form-group col-lg-3">
                                    <label for="tlfnr">TlfNr</label>
                                    <input type="text" class="form-control form-control-sm" id="tlfnr" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="titel">Titel</label>
                                    <input type="text" id="titel" class="form-control form-control-sm" disabled>
                                </div>
                                <span class="form-group col-lg-3"></span>
                                <div class="form-group col-lg-4">
                                    <label for="afdeling">Afdeling</label>
                                    <input type="text" id="afdeling" class="form-control form-control-sm" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="p-1 border border-top-0 border-primary" style="background-color: lightgrey;">
                        <input type="button" class="btn btn-sm btn-primary btn-outline-* shadow-none ml-2" value="Ændrer oplysninger">
                    </div>
                </div>
                <!-- Projekter -->
                <div class="tab-pane container p-3 border border-primary" id="projekter">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-lg-4 bg-success"></div>
                            <span class="form-group col-lg-4 bg-dark"></span>
                            <div class="form-group col-lg-4 bg-warning"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>s
    </div>
</div>


    
<script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
