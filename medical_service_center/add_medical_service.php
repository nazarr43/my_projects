<html>
<head>
    <meta charset="utf-8">
    <title>Додати медичну послугу</title>
</head>

<body>
    <?php
        print "<h1>Додати запис </h1>";
       


        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "medical_service_center";
        $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
        MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати Базу Даних"); 

        $id = $_POST['id'];
        $name = $_POST['name'];
        $description_service = $_POST['description_service'];
        $price = $_POST['price'];

        $con->query("INSERT INTO medical_service(`id`, `name`, `description_service`, `price`) VALUES ($id,'$name','$description_service',$price);");
    ?>

    <b>Запис додано</b>
    <meta http-equiv='refresh' content='0; url=medical_service.php'>
</body>