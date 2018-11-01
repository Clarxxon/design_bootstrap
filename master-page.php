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
    <h4>Ближайшие записи</h4>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Услуга</th>
            <th scope="col">Имя</th>
            <th scope="col">Телефон</th>
            <th scope="col">Время</th>
            </tr>
        </thead>
        <tbody>
        <? 
            $sql = "SELECT * FROM `recording` r INNER JOIN services s ON r.fk_service = s.s_id WHERE r.`rec_target_date` is not NULL";
            foreach($connection->query($sql) as $key=>$row) {?>

                <tr>
                <th scope="row"><?echo $key+1?></th>
                <td><?echo $row['s_name']?></td>
                <td><?echo $row['rec_cl_name']?></td>
                <td><?echo $row['rec_cl_phone']?></td>
                <td><?echo $row['rec_target_date']?></td>
                </tr>
            <?} ?>
        </tbody>
    </table>

    <h4>Ожидают записи</h4>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Услуга</th>
            <th scope="col">Имя</th>
            <th scope="col">Телефон</th>
            </tr>
        </thead>
        <tbody>
        <? 
            $sql = "SELECT * FROM `recording` r INNER JOIN services s ON r.fk_service = s.s_id WHERE r.`rec_target_date` is NULL";
            foreach($connection->query($sql) as $key=>$row) {?>

                <tr>
                <th scope="row"><?echo $key+1?></th>
                <td><?echo $row['s_name']?></td>
                <td><?echo $row['rec_cl_name']?></td>
                <td><?echo $row['rec_cl_phone']?></td>
                <td><a href="record-confirm.php?id=<?echo $row['rec_id']?>">Подтвердить</a></td>
                </tr>
            <?} ?>
        </tbody>
    </table>
</div>

<?include('footer.php')?>