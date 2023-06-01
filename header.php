<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>DataTable</title>
</head>

<body>
    <?php
    include 'function.php';
    session_start();

    if (!isset($_GET['header'])){
        echo '<nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">DataTable</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="adddata.php">Add New</a></li>
                    <li><a href="table.php">View List</a></li>
                    <li><a href="formlogin.php?logout=aa">Logout</a></li>
                </ul>
            </div>
        </nav>';
    } else {
        echo '<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">DataTable</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="formlogin.php?header=q">Login</a></li>
            </ul>
        </div>
    </nav>';
    }

    ?>