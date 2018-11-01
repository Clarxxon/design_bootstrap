<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(isset($_SESSION['auth'])){
    header("Location: /master-page.php");
}

    $login=strtolower(trim(htmlspecialchars($_POST['login'])));
    $password=strtolower(trim(htmlspecialchars($_POST['password'])));
    $loginDone=FALSE;

    if($login && $password){

        $st = $connection->query("SELECT * FROM master WHERE login='$login'");
		foreach($st->fetchAll(PDO::FETCH_ASSOC) as $row) 
		{
			$login = $row['login'];
            $pk_user = $row['id_master'];
            $loginDone=TRUE;
			$_SESSION['auth'] = TRUE;
		}
		if($loginDone){
            header("Location: /master-page.php");
        }else{
            header("Location: /master-login.php");
        }
    }
?>

<?include('footer.php')?>