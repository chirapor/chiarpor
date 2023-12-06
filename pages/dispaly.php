<?php
include"connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
         <button class="btn btn-primary my-5"></button>
             <a href="user.php">Add User</a>
        </button> 
        <table class="table">
            <thead>
                <tr>
                    <td scope="col">ID></td>
                    <td scope="col">Name></td>
                    <td scope="col">Email></td>
                    <td scope="col">Mobile></td>
                    <td scope="col">Operation></td>
                </tr>
            </thead>
<?php
    $sql = "SELECT * FROM crud";

    $result = mysqli_query($con, $sql);

    if($result) {
        $whil = mysqli_fetch_assoc($result);{
            $id=  $row['id'];
            $name=  $row['name'];
            $email = $row['email'];
            $mobile = $rowT['mobile'];

            echo"
            <tbody>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>email</td>
                    <td>mobile</td>
                    ";
?>
                     <td>
                        <button class="btn btn-warning">
                             <a href="edit.php">Edit</a>
                        </button>
                        <button class="btn btn-danger">
                            <a href="delete.php" class="text-light">DElete</a>
                        </button>
                    </td>
                </tr>
            </tbody>
            
<?php
        }
    }
?>


        </table>
    </div>
</body>
</html>
