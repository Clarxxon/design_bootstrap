<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(!isset($_SESSION['auth'])){
    header("Location: /master-login.php");
}

$id=$_GET['id'];
echo($id);
$name=$_POST['s_name'];
$price=$_POST['s_price'];
$desc=$_POST['s_description'];

$q="UPDATE `services` SET `s_price` = '$price', `s_description` = '$desc', `s_name` = '$name' WHERE `services`.`s_id` = '$id';";
$st = $connection->query($q);
    header("Location: /master-service.php");
?>

<?include('footer.php')?>