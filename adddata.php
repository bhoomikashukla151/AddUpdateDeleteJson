<?php
    include 'header.php';
    if($_SESSION['login']){
        // header("Location: index.php");
     }else{
         header("Location: formlogin.php");
     }
?>
<div style="margin-left:20%" class="container col-sm-3">
    <form action="table.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <select  type="text" name="address" class="form-control" placeholder="Enter address">
                <option >Shivnagar colony chhindwara</option>
                <option >Chandni chouk delhi</option>
                <option >Khamra road chand</option>
                <option >Bedi colony chourai</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="number" class="form-control" placeholder="Enter Mobile" name="mobile">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="female" name="gender">
                <label class="form-check-label" for="flexRadioDefault1">
                    female
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="male" name="gender" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    male
                </label>
            </div>
            
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>  
<?php
    include 'footer.php';
?>
     
