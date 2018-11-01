<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(!isset($_SESSION['auth'])){
    header("Location: /master-login.php");
}

    $date=$_POST['rec_target_date'];
    echo $date;

    $id=$_GET["id"];
    $q="UPDATE `recording` SET `rec_target_date` = '$date' WHERE `recording`.`rec_id` = '$id';";
    $st = $connection->query($q);
    header("Location: /master-page.php");
?>


</div>

<?include('footer.php')?>