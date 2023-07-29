<html>
<head>
    <meta charset="utf-8">
    <title>Успіх</title>
</head>

<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "medical_service_center";

        $id = $_POST['id'];
        $name = $_POST['name'];
        $description_service = $_POST['description_service'];
        $price = $_POST['price'];


        $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
        MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати Базу Даних"); 

        $con->query("UPDATE medical_service SET id = $id, name = '$name', description_service = '$description_service', price = $price  WHERE id = $id;");
    ?>

    <h1>Дані успішно змінено</h1>
    <meta http-equiv='refresh' content='0; url=medical_service.php'>
</body>