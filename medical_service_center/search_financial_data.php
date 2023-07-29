<html>
<head>
    <meta charset="utf-8">
    <?php
    $query = $_GET['query'];
    if ($query == '')
        print "    <title>Пошук</title>";
    else
        print "    <title>$query - Пошук</title>";
    ?>
</head>

<body>
    <?php
    print "<h1>Пошук фінансових даних</h1>";
    print "<a href='financial_data.php'>Фінансові дані</a><p>";

    print "<form action='search_financial_data.php?query=" . $query . "'>";

    if ($query == '')
        $query = '';

    print "<b>Пошук</b><br><input name='query' value='$query' size=30>";

    print "<input type='submit' value='Пошук'/>";
    print "</form>";

    $hostname = "localhost";
   $username = "root";
   $password = "";
   $database = "medical_service_center";
   $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
   MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати Базу Даних"); 
    print "<table>";
    print "<tr>";
    print "<th>Id</th>";
    print "<th>Дата операції</th>";
    print "<th>Сума операції</th>";
    print "<th>Пацієнт,який оплатив</th>";
    print "<th>Метод оплати</th>";

    print "<th>Редагувати</th>";
    print "<th>Видалити</th>";
    print "</tr>";

    if ($query != 'Введіть ID' && $query != '')
    {
        foreach($con->query("SELECT * FROM financial_data WHERE id = '$query';") as $row)
        {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['data_of_operation'] . "</td><td>" . $row['transaction_amount'] . "</td><td>" . $row['patient_payment'] . "</td><td>" . $row['method_of_payment'] . "</td>
            <td><a href='edit_financial_data.php?id=" . $row['id'] . "'>редагувати</td>
            <td><a href='delete_financial_data.php?id=" . $row['id'] . "'>видалити</td></tr>";
        }
    }
    print "</table>";
    die();
    ?>
</body>