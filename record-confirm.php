<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(!isset($_SESSION['auth'])){
    header("Location: /master-login.php");
}
$id=$_GET["id"];
?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal company-name">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Галерея</a>
        <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Услуги</a>
    </nav>
    <a class="btn btn-outline-primary" href="logout.php">Выйти</a>
</div>

<div class="container">
    <h4>Назначьте клиенту время встречи и подтвердите запись</h4>
    <form action=<?echo "record-confirm-done.php?id=".$id ?> method='POST'>
        <div class="form-group">
              <label for="exampleInputEmail1">Время встречи</label>
              <input type="datetime-local"  name="rec_target_date" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>

        <button type="submit" style="    margin: auto;
              display: flex;" class="btn btn-outline-primary" onclick="checkForm()">Подтвердить</button>
    </form>
   
</div>

<?include('footer.php')?>