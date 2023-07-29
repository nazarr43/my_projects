<html>
<head>
    <meta charset="utf-8">
    <title>Видалити ліки та рецепти</title>
</head>

<body>
    <?php
        
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "medical_service_center";
        $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
        MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати Базу Даних");        
       
       
        $id = $_GET["id"];

        $con->query("DELETE FROM medicines_and_prescriptions WHERE id = $id;");

    ?>
    <b>Запис Видалено</b><p>
    <meta http-equiv='refresh' content='0; url=medicines_and_prescriptions.php'>
</body>
