<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(!isset($_SESSION['auth'])){
    header("Location: /master-login.php");
}

$id=$_GET['id'];
$name=$_GET['name'];
$price=$_GET['price'];
$desc=$_GET['desc'];
?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal company-name">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="master-gallery.php">Галерея</a>
        <a class="p-2 text-dark" href="master-service.php">Услуги</a>
    </nav>
    <a class="btn btn-outline-primary" href="logout.php">Выйти</a>
</div>

<div class="container">
    <h4>Редактирование услуги</h4>

   <form action="<?echo "redact-service-form-done.php?id=".$id?>" method='POST'>
        <div class="form-group">
              <label for="exampleInputEmail1">Цена</label>
              <input type="text"  name="s_price" value="<?echo $price?>" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
        <div class="form-group">
              <label for="exampleInputEmail1">Название</label>
              <input type="text"  name="s_name" value="<?echo $name?>" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
        <div class="form-group">
              <label for="exampleInputEmail1">Описание</label>
              <input type="text"  name="s_description" value="<?echo $desc?>" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>

        <button type="submit" style="    margin: auto;
              display: flex;" class="btn btn-outline-primary" onclick="checkForm()">Сохранить</button>
   </form>
</div>

<?include('footer.php')?>