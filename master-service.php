<?session_start();
ob_start();
include('header.php');
include('db_connection.php'); 

if(!isset($_SESSION['auth'])){
    header("Location: /master-login.php");
}
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
    <h4>Услуги</h4>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Цена</th>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            </tr>
        </thead>
        <tbody>
        <? 
            $sql = "SELECT * FROM `services`";
            foreach($connection->query($sql) as $key=>$row) {?>

                <tr>
                <th scope="row"><?echo $key+1?></th>
                <td><?echo $row['s_price']?></td>
                <td><?echo $row['s_name']?></td>
                <td><?echo $row['s_description']?></td>
                <td><a href="<?echo "redact-service-form.php?id=".$row['s_id']."&price=".$row['s_price']."&name=".$row['s_name']."&desc=".$row['s_description'] ?>">Изменить</a></td>
                </tr>
            <?} ?>
        </tbody>
    </table>

   <form action="add-service.php?" method='POST'>
        <div class="form-group">
              <label for="exampleInputEmail1">Цена</label>
              <input type="text"  name="s_price" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
        <div class="form-group">
              <label for="exampleInputEmail1">Название</label>
              <input type="text"  name="s_name" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
        <div class="form-group">
              <label for="exampleInputEmail1">Описание</label>
              <input type="text"  name="s_description" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>

        <button type="submit" style="    margin: auto;
              display: flex;" class="btn btn-outline-primary" onclick="checkForm()">Добавить</button>
   </form>
</div>

<?include('footer.php')?>