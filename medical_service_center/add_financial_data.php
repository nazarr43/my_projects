<html>
<head>
    <meta charset="utf-8">
    <title>Додати фінансові дані</title>
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
        $data_of_operation = $_POST['data_of_operation'];
        $transaction_amount = $_POST['transaction_amount'];
        $patient_payment = $_POST['patient_payment'];
        $method_of_payment = $_POST['method_of_payment'];
        $con->query("INSERT INTO financial_data VALUES ($id,'$data_of_operation', $transaction_amount, '$patient_payment', '$method_of_payment');");
    ?>

    <b>Запис додано</b>
    <meta http-equiv='refresh' content='0; url=financial_data.php'>
</body>