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
    print "<h1>Пошук медичної послуги</h1>";
    print "<a href='patients.php'>Медична послуга</a><p>";

    print "<form action='search_medical_service.php?query=" . $query . "'>";

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
    print "<th>Id Медичної послуги</th>";
    print "<th>Назва медичної послуги</th>";
    print "<th>Опис медичної послуги</th>";
    print "<th>Ціна</th>";

    print "<th>Редагувати</th>";
    print "<th>Видалити</th>";
    print "</tr>";

    if ($query != 'Введіть ID' && $query != '')
    {
        foreach($con->query("SELECT * FROM medical_service WHERE id = '$query';") as $row)
        {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['description_service'] . "</td><td>" . $row['price'] . "</td>
            <td><a href='edit_medical_service.php?id=" . $row['id'] . "'>редагувати</td>
            <td><a href='delete_medical_service.php?id=" . $row['id'] . "'>видалити</td></tr>";
        }
    }
    print "</table>";
    die();
    ?>
</body>