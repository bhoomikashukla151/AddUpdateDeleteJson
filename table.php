<?php
include 'header.php';
include_once 'function.php';


if (isset($_POST['email'])) {
    checkLogin($_POST);
}

if ($_SESSION['login']) {
    // header("Location: index.php");
} else {
    header("Location: formlogin.php");
}


if (isset($_GET["delete"])) {
    deleteData($_GET["delete"]);

}
if (isset($_POST["name"])) {
    if (isset($_GET['update'])) {
        addData($_POST,'update');
    }else{
        addData($_POST,'add');
    }
    

}
?>

<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>MOBILE</th>
                <th>GENDER</th>
                <th>DELETE</th>
                <th>UPDATE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = file_get_contents('data.json', true);
            $stringToAaray = json_decode($data, true);

            foreach ($stringToAaray as $w) {
                echo '
                        <tr>
                        <td>' . $w["name"] . '</td>
                        <td>' . $w["address"] . '</td>
                        <td>' . $w["mobile"] . '</td>
                        <td>' . $w["gender"] . '</td>
                        <td><a href="table.php?delete=' . $w['name'] . '" class="btn btn-danger btn-sm">Delete</a></td>
                        <td><a href="update.php?aa=' . $w['name'] . '&bb=' . $w['address'] . '&cc=' . $w['mobile'] . '&dd=' . $w['gender'] . '"  class="btn btn-info btn-sm">Update</a></td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include 'footer.php';
?>