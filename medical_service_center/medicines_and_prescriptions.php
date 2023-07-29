<html>
<head>
    <meta charset="utf-8">
    <title>Ліки та препарати</title>
</head>

<body>
    <h1>Ліки та препарати</h1>
    <a href='index.php'>Головна</a><p>

    <a href='add_medicines_and_prescriptions.html'> Додати запис</a> <a href='search_medicines_and_prescriptions.php'> Пошук записів</a>
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
            <th>Назва препарату</th>
            <th>Опис препарату</th>
            <th>Лікар,який виписав рецепт</th>
            <th>Пацієнт,який отримав рецепт</th>
            <th>Редагування</th>
            <th>Видалення</th>
        </tr>";



        foreach($con->query("SELECT * FROM medicines_and_prescriptions") as $row) {
            echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name_of_the_drug'] . "</td>
            <td>" . $row['description_of_the_drug'] . "</td>
            <td>" . $row['doctor_who_wrote_prescription'] . "</td>
            <td>" . $row['patient_who_got_prescription'] . "</td>
            <td><a href='edit_medicines_and_prescriptions.php?id=" . $row['id'] . "'>Редагувати</td>
            <td><a href='delete_medicines_and_prescriptions.php?id=" . $row['id'] . "'>Видалити</td></tr>";
    }
    echo "</table>";
?>

</body>

