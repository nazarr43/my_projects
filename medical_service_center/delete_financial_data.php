<html>
<head>
    <meta charset="utf-8">
    <title>Видалити фінансові дані</title>
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

        $con->query("DELETE FROM financial_data WHERE id = $id;");

    ?>
    <b>Запис Видалено</b><p>
    <meta http-equiv='refresh' content='0; url=financial_data.php'>
</body>
