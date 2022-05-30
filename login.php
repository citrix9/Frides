<?php

require_once('config.php');

if(isset($_GET["code"]))
{
    $token=$client->fetchAccessTokenWithAuthCode($_GET["code"]);
    $client->setAccessTOken($token['access_token']);
    $_SESSION['access_token']=$token['access_token'];
    $service=new Google_Service_Oauth2($client);
    $data=$service->userinfo->get();

    $query="SELECT * FROM users WHERE userid='$data->id'";
    $result=mysqli_query($db_conn,$query);
    $row=mysqli_fetch_array($result);
    if($row<1)
    {
        $query="INSERT INTO users (given_name,familyName,name,avatar,email,userid) VALUES ('$data->given_name','$data->familyName','$data->name','$data->picture','$data->email','$data->id')";
        mysqli_query($db_conn,$query);

    }


    if(!empty($data['given_name']))
    {
        $_SESSION['given_name']=$data['given_name'];
    }
    if(!empty($data['familyName']))
    {
        $_SESSION['familyName']=$data['familyName'];
    }
    if(!empty($data['email']))
    {
        $_SESSION['email']=$data['email'];
    }
    if(!empty($data['picture']))
    {
        $_SESSION['picture']=$data['picture'];
    }
    if(!empty($data['id']))
    {
        $_SESSION['id']=$data['id'];
    }
    if(!empty($data['name']))
    {
        $_SESSION['name']=$data['name'];
    }
}

$link="";

if(!isset($_SESSION['access_token'])){
    $link=$client->createAuthUrl();

}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frides Login</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
     .typewriter h1 {
  color: ##17363D;
  font-family: monospace;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid #5BBC9F; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; 
  animation: 
    typing 3.5s steps(30, end),
    blink-caret .5s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: #5BBC9F }
} 
    .btn{
        margin-top:180px;
        margin-left:80px;
    }
</style>
</head>
<body>
    <div class="typewriter">
        <h1>Hey Glad You're Joining Us In This Ride</h1>
    </div>
    <div class="container" style="margin-top:100px;">
<div class="row">
    <div class="col-md">
        <img src="assets/img/logo.jpg" alt="logo" style="display:table,margin:0 auto,max-width:150px;">
   </div>
   <div class="col-md">
       <?php
if(!empty($link))
{?>

      
       <a href="<?php echo $link; ?>" class="btn btn-primary waves-effect waves-light px-2"><i class="fab fa-google mr-2"></i>Login with Google</a>
       <pre>By signing in you are agreeing to our <a href="http://127.0.0.1/Frides/termsandagreements.html">terms</a> & <a href="http://127.0.0.1/Frides/privacypolicy.html">conditions</a>
    <?php }
    else{
       header('Location:home.php');
    }
    ?>    </div>
</div>
    </div>
    <div class="typewriter">
        <h1>Fasten Yout Seatbelt By Signing In</h1>
    </div>
</body>
</html>









