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
    print "<h1>Пошук ліків та препаратів</h1>";
    print "<a href='financial_data.php'>ліки та препарати</a><p>";

    print "<form action='medicines_and_prescriptions.php?query=" . $query . "'>";

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
    print "<th>Назва препарату</th>";
    print "<th>Опис препарату</th>";
    print "<th>Лікар,який виписав рецепт</th>";
    print "<th>Пацієнт,який отримав рецепт</th>";

    print "<th>Редагувати</th>";
    print "<th>Видалити</th>";
    print "</tr>";

    if ($query != 'Введіть ID' && $query != '')
    {
        foreach($con->query("SELECT * FROM medicines_and_prescriptions WHERE id = '$query';") as $row)
        {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name_of_the_drug'] . "</td><td>" . $row['description_of_the_drug'] . "</td><td>" . $row['doctor_who_wrote_prescription'] . "</td><td>" . 
            $row['patient_who_got_prescription'] . "</td>
            <td><a href='edit_medicines_and_prescriptions.php?id=" . $row['id'] . "'>редагувати</td>
            <td><a href='delete_medicines_and_prescriptions.php?id=" . $row['id'] . "'>видалити</td></tr>";
        }
    }
    print "</table>";
    die();
    ?>
</body>