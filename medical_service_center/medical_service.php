<html>
<head>
    <meta charset="utf-8">
    <title>Медичні послуги</title>
</head>

<body>
    <h1>Медичні послуги</h1>
    <a href='index.php'>Головна</a><p>

    <a href='add_medical_service.html'> Додати запис</a> <a href='search_medical_service.php'> Пошук записів</a>
    <?php
    

   $hostname = "localhost";
   $username = "root";
   $password = "";
   $database = "medical_service_center";
   $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
   MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати БД"); 

       
         echo "<table>
         <tr>
            <th>Id Медичної послуги</th>
            <th>Назва медичної послуги</th>
            <th>Опис медичної послуги</th>
            <th>Ціна</th>
            <th>Редагування</th>
            <th>Видалення</th>
        </tr>";



        foreach($con->query("SELECT * FROM medical_service") as $row) {
            echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['description_service'] . "</td>
            <td>" . $row['price'] . "</td>
            <td><a href='edit_medical_service.php?id=" . $row['id'] . "'>Редагувати</td>
            <td><a href='delete_medical_service.php?id=" . $row['id'] . "'>Видалити</td></tr>";
    }
    echo "</table>";
?>

</body>

