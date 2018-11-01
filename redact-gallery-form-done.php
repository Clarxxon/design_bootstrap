<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(!isset($_SESSION['auth'])){
    header("Location: /master-login.php");
}

$id=$_GET['id'];
echo($id);
$pic=$_POST['g_picture'];
$desc=$_POST['g_description'];

$q="UPDATE `gallery` SET `g_picture` = '$pic', `g_description` = '$desc' WHERE `gallery`.`g_id` = '$id';";
$st = $connection->query($q);
    header("Location: /master-page.php");
?>

<?include('footer.php')?>