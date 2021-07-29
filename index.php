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
.back {
  background: #e2e2e2;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
}

.div-center {
  width: 400px;
  height: 400px;
  background-color: #fff;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  max-width: 100%;
  max-height: 100%;
  overflow: auto;
  padding: 1em 2em;
  border-bottom: 2px solid #ccc;
  display: table;
}

div.content {
  display: table-cell;
  vertical-align: middle;
}
</style>
<body>
<?php
$loggedIn = FALSE;
$err = "";
$user = "Nicklas";
$pass = "123";
$Inputusername = $_POST['user'];
$Inputpassword = $_POST['pass'];
if(isset($_POST['submit'])) {
    if ($Inputusername != $user ||  $Inputpassword != $pass){
        $err = "<span style='color: red;'>*Something went wrong*</span>";
    }
    else {
        $loggedIn = TRUE;
    }
}
?>
<div class="back" id="login" <?php if($loggedIn == TRUE) echo "style='display: none;'"?>>


  <div class="div-center">


    <div class="content">

      <h3>Login</h3>
      <hr />
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <label for="inputUser">Username <?php echo $err?></label>
          <input type="text" class="form-control" name="user" id="inputUser" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="inputPass">Password</label>
          <input type="password" class="form-control" name="pass" id="inputPass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
        <hr />
        <p>Forgot your password? <a href="#">Reset password</a></p>

      </form>

    </div>


    </span>
</div>
<div id="home" <?php if($loggedIn == TRUE) header("Location: /profile.php");?>>

</div>

<script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
