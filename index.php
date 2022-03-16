<?php
include 'db_connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Employee list</title>
  </head>
  <body>
    <table class="table table-striped table-hover table-bordered table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>DOB</th>
                <th>ADDRESS</th>
                <th>EDIT</th>
                <th>DELETE </th>
                

            </tr>
        </thead>

        <tfoot>
        <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>DOB</th>
                <th>ADDRESS</th>
                <th>EDIT</th>
                <th>DELETE </th>

            </tr>

        </tfoot>
        <tbody>
            <?php
            // Query to execute, You can also have any kind of query here
            $query = "SELECT * FROM users";

            //Executing the query
            $query_run = mysqli_query($connection, $query);

            //Looping through the data
            while($employee =mysqli_fetch_assoc($query_run) )
            {
                echo "<tr>";
                echo "<td>". $employee['id'] ."</td>";
                echo "<td>". $employee['name'] ."</td>";
                echo "<td>". $employee['email'] ."</td>";
                echo "<td>". $employee['phone'] ."</td>";
                echo "<td>". $employee['dob'] ."</td>";
                echo "<td>". $employee['address'] ."</td>";


                ?>


                <td>
                  <form action="edit.php" method="post">
                    <input type="hidden" 
                    value ="<?php echo $employee['id'];?>" 
                    name ="biko">

                    <button type="submit" name ="ali" class = "btn btn-sm btn-info px-5">Edit</button>
                  </form>
                </td>

                <td>
                  <form action="code.php" method="post">
                    <input type="hidden"name="users_id" value="<?php echo $employee['id'];?>">
                    <button type="submit" class="btn btn-danger btn-sm" name="nasra">Delete</button>
                  </form>
                </td>

                <?php

                echo "</tr>";
            }
            ?>

        </tbody>

    </table>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>