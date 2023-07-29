<html>
<head>
    <meta charset="utf-8">
    <title>Фінансові дані</title>
</head>

<body>
    <h1>Фінансові дані</h1>
    <a href='index.php'>Головна</a><p>

    <a href='add_financial_data.html'> Додати запис</a> <a href='search_financial_data.php'> Пошук записів</a>
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
            <th>Дата операції</th>
            <th>Сума операції</th>
            <th>Пацієнт,який оплатив</th>
            <th>Метод оплати</th>
            <th>Редагування</th>
            <th>Видалення</th>
        </tr>";



        foreach($con->query("SELECT * FROM financial_data") as $row) {
            echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['data_of_operation'] . "</td>
            <td>" . $row['transaction_amount'] . "</td>
            <td>" . $row['patient_payment'] . "</td>
            <td>" . $row['method_of_payment'] . "</td>
            <td><a href='edit_financial_data.php?id=" . $row['id'] . "'>Редагувати</td>
            <td><a href='delete_financial_data.php?id=" . $row['id'] . "'>Видалити</td></tr>";
    }
    echo "</table>";
?>

</body>

