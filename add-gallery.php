<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(!isset($_SESSION['auth'])){
    header("Location: /master-login.php");
}

    $g_picture=$_POST['g_picture'];
    $g_description=$_POST['g_description'];
    //echo $date;

    $q="INSERT INTO `gallery` (`g_id`, `g_picture`, `g_description`) VALUES (NULL, '$g_picture', '$g_description');";
    $st = $connection->query($q);
    header("Location: /master-page.php");
?>


</div>

<?include('footer.php')?>