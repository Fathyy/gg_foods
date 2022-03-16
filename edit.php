<?php
include 'db_connect.php';

if (isset($_POST['ali']))
{
    echo $employee_id = $_POST['biko'];
    $query = "SELECT * FROM users WHERE ID = $employee_id";
    // executing the query

    $query_run = mysqli_query($connection, $query);

    // loop through the data
    foreach($query_run as $row){
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gg_foods</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 mx-auto" >
            <form action="code.php" method="post">

            <input type="hidden" name="users_id" value="<?php echo $row['id'];?>">  

        <!-- Name input start -->
        <div class="form-group">
            <label class = "form-control" for ="name" class = "form-label">
                Enter your full name
            </label>
            <input class ="form-control" name= "alex" type="text" class ="form-control" placeholder="Your name" value="<?php echo $row['name']?>">
        </div>
        <!-- Name input ends -->

        <!-- Email input starts -->
        <div class="form-group">
            <label class = "form-control"for ="email">Your email</label>
            <input class ="form-control" name="Lily" type="email" placeholder="yourname@mail.com" value="<?php echo $row['email']?>">
        </div>
        <!-- email input ends -->

        
        <!-- phone input starts -->
        <div class="form-group">
            <label class = "form-control"for ="phone">Your phone</label>
            <input class ="form-control" name="John" type="tel" placeholder="+254-712-345-678" value="<?php echo $row['phone']?>">
        </div>
        <!-- phone input ends -->


        <!-- dob input starts -->
        <div class="form-group">
            <label class = "form-control"for ="dob">Your date of birth</label>
            <input class ="form-control" name="sara" type="date" value="<?php echo $row['dob']?>">
        </div>
        <!-- dob input ends -->


        <!-- address input starts -->
        <div class="form-group">
            <label class = "form-control"for="address">Your address</label>
            <input class ="form-control" name="james" type="text" placeholder="Nairobi, Kenya" value="<?php echo $row['address']?>">
        </div>
        <!-- address input ends -->

        <!-- County of birth selects starts -->
        <!-- <label for="cob" class ="form-label">county of birth</label>
        <select class = "form-select">
            <option value="1">Nairobi</option>
            <option value="2">Kisumu</option>
            <option value="3">Mombasa</option>
            <option value="4">Others</option>
        </select> -->
        <!-- County of birth selects ends -->

        <!-- Why consider you starts -->
        <!-- <textarea class="form-control" rows="5"></textarea> -->
        <!-- Why consider you ends -->


        <div class="row">
            <div class="col-6">
                <button type="reset" class = "btn btn-danger">Reset</button>

            </div>
            <div class="col-6">
                <button type="submit" name="nick" class = "btn btn-success">Update Employee Details</button>

            </div>
        </div>
    </form>

            </div>
        </div>
    
    </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

        <?php

    }

}
?>
