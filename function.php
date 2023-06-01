<?php
function deleteData($delete)
{
    $data = file_get_contents("data.json", true);
    $array = json_decode($data, true);

    unset($array[$delete]);

    $string = json_encode($array, true);
    $myfile = fopen("data.json", "w");
    fwrite($myfile, $string);
    fclose($myfile);
}

function addData($add,$flag)
{
    $data = file_get_contents("data.json", true);
    $array = json_decode($data, true);
    $array[$add['name']] = $add;

    if ($flag=='update') {
        echo '<div class="alert alert-info">
                <strong>Success!</strong> Data successfully updated!.   
            </div>';
    } else {
        echo '<div class="alert alert-success">
                <strong>Success!</strong> Data successfully submitted!.   
            </div>';
    }

    $string = json_encode($array, true);
    $myfile = fopen("data.json", "w");
    fwrite($myfile, $string);
    fclose($myfile);

}

function checkLogin($login)
{
    if ($login['email'] == 'bhoomi@gmail.com' && $login['pwd'] == '1234') {
        $_SESSION['login'] = 'set';
        echo 'you are login now';
    } else {
        header("Location: formlogin2.php");
    }
}
function loginform()
{
    echo '<form class="form-horizontal col-sm-3" action="table.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Login</button>
            </div>
        </div>
    </form>';
}

function updateForm($update)
{
    $male="";
    $female="";

    if($update['dd']=="male"){
        $male="checked";
    }else{
        $female="checked";
    }
    echo '<div style="margin-left:20%" class="container col-sm-6">
        <form action="table.php?update=2" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text"  class="form-control" placeholder="Enter Name" name="name" value="' . $update['aa'] . '">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <select  type="text" name="address" class="form-control" placeholder="Enter address" >
                    <option >' . $update['bb'] . '</option>
                    <option >Shivnagar colony chhindwara</option>
                    <option >Chandni chouk delhi</option>
                    <option >Khamra road chand</option>
                    <option >Bedi colony chourai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="number" class="form-control" placeholder="Enter Mobile" name="mobile" value="' . $update['cc'] . '">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="female" name="gender" ' . $female . '>
                    <label class="form-check-label" for="flexRadioDefault1">
                        female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="male" name="gender" ' . $male . '>
                    <label class="form-check-label" for="flexRadioDefault2">
                        male
                    </label>
                </div>
                
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>';
}
?>