<?php
include 'lib/include.php';
if (!isset($_POST['username'])&& isset($_POST['password'])){
    $username = $pdo->quote($_POST['username']);
    $password = sha1($_POST['password']);
  $select =  $pdo->query( "SELECT * FROM users WHERE username= $username AND password = '$password'");
  if ($select->rowCount()>0){
     $_SESSION['AUTH'] = $select->fetchAll();
     setFlash('vous etes maintenant connecté');
     header('location' .WEBROOT .'admin/index.php');
     die();
  }
}

?>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styleapp.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/nivo-slider.css"/>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

</head>
<body>

<form action="" method="post">
    <div class="form-group">
        <label for="username" >Nom d'utilisateur</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>">
    </div> <div class="form-group">
        <label for="password" >Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-default">Se connecter </button>

</form>
</body>
</html>