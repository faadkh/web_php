
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="nav1">
            <h1 class="">PHP PROJECT FOR PERECTICE</h1>
        </div>
        <div class="sidebar">
            <h2>Actions</h2>
            <ul>
                <li>Create</li>
                <li>Read</li>
                <li>Update</li>
                <li>Delete</li>
            </ul>
        </div>
        <div class="body_main">
        <?php 
include("config.php");
$mysqli = "SELECT * FROM ui";
$qury = mysqli_query($conn, $mysqli) or die("fail");
if(mysqli_num_rows($qury)){
?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S_No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($qury)){

                ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["phone"];?></td>
                    <td><?php echo $row["dob"];?></td>
                </tr>
                <?php }
                 ?>
            </tbody>
        </table>
        </div>
    </div>   

<?php }?>

</body>
</html>