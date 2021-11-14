<?php
    include_once('./config.php');

    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone_number'];

        $sql = "INSERT INTO students(name, dob, phone_number) VALUES ('$name', '$dob', '$phone')";
        $result = $mysqli->query($sql);
        
        if ($result) {
            header('location: index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"/>

</head>
<body>
    <div class="container">
        <form method="POST" action="#">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" id="name" name="name" />
            </div>

            <div class="form-group">
                <label for="dob">Dob</label>
                <input class="form-control" id="dob" name="dob" type="date"/>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone number</label>
                <input class="form-control" id="phone_number" name="phone_number" />
            </div>

            <button type="submit" class="btn btn-primary" name="save">Save</button>
        </form>
    </div>
</body>
</html>