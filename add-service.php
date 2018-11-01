<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(!isset($_SESSION['auth'])){
    header("Location: /master-login.php");
}

    $s_name=$_POST['s_name'];
    $s_price=$_POST['s_price'];
    $s_description=$_POST['s_description'];
    //echo $date;

    $q="INSERT INTO `services` (`s_price`, `s_name`, `s_description`) VALUES ('$s_price', '$s_name', '$s_description');";
    $st = $connection->query($q);
    header("Location: /master-service.php");
?>


</div>

<?include('footer.php')?>