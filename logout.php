<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    header("Location: /master-login.php");
}

?>