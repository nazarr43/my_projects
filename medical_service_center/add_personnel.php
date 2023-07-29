<html>
<head>
    <meta charset="utf-8">
    <title>Додати персонал</title>
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
        $specialization = $_POST['specialization'];
        $salary = $_POST['salary'];
        $contacts = $_POST['contacts'];

        $con->query("INSERT INTO personnel(`id`, `name`, `specialization`, `salary`, `contacts`) VALUES ($id,'$name','$specialization','$salary','$contacts');");
    ?>

    <b>Запис додано</b>
    <meta http-equiv='refresh' content='0; url=personnel.php'>
</body>