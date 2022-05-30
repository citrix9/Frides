
<?php    
require_once 'vendor/autoload.php';    
session_start();    
$accesstoken=$_SESSION['access_token'];

//Unset token and user data from session    
unset($_SESSION['access_token']);    
unset($_SESSION['userData']);    

//Reset OAuth access token    
$client = new Google_Client();

//$client->revokeToken();    
$client->revokeToken($accesstoken);

//Destroy entire session    
session_destroy();    

//Redirect to homepage    
$redirect_uri = 'http://localhost/Frides/index.html';    
header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));    
?>