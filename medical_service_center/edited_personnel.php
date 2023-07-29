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
        $specialization = $_POST['specialization'];
        $salary = $_POST['salary'];
        $contacts = $_POST['contacts'];


        $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
        MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати Базу Даних"); 

        $con->query("UPDATE personnel SET id = $id, name = '$name', specialization = '$specialization', salary = '$salary', contacts = '$contacts'  WHERE id = $id;");
    ?>

    <h1>Дані успішно змінено</h1>
    <meta http-equiv='refresh' content='0; url=personnel.php'>
</body>