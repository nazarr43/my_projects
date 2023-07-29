<html>
<head>
    <meta charset="utf-8">
    <title>Персонал</title>
</head>

<body>
    <h1>Персонал</h1>
    <a href='index.php'>Головна</a><p>

    <a href='add_personnel.html'> Додати запис</a> <a href='search_personnel.php'> Пошук записів</a>
    <?php
    

   $hostname = "localhost";
   $username = "root";
   $password = "";
   $database = "medical_service_center";
   $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
   MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати БД"); 

       
         echo "<table>
         <tr>
            <th>Id</th>
            <th>ПІБ</th>
            <th>Спеціалізація</th>
            <th>Зарплата</th>
            <th>Контактні дані</th>
            <th>Редагування</th>
            <th>Видалення</th>
        </tr>";



        foreach($con->query("SELECT * FROM personnel") as $row) {
            echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['specialization'] . "</td>
            <td>" . $row['salary'] . "</td>
            <td>" . $row['contacts'] . "</td>
            <td><a href='edit_personnel.php?id=" . $row['id'] . "'>Редагувати</td>
            <td><a href='delete_personnel.php?id=" . $row['id'] . "'>Видалити</td></tr>";
    }
    echo "</table>";
?>

</body>
