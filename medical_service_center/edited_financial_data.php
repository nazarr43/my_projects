<html>
<head>
    <meta charset="utf-8">
    <title>Успіх</title>
</head>

<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "medical_service_center";

        $id = $_POST['id'];
        $data_of_operation = $_POST['data_of_operation'];
        $transaction_amount = $_POST['transaction_amount'];
        $patient_payment = $_POST['patient_payment'];
        $method_of_payment = $_POST['method_of_payment'];


        $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
        MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати Базу Даних"); 

        $con->query("UPDATE financial_data SET id = $id, data_of_operation = '$data_of_operation', transaction_amount = $transaction_amount, patient_payment = '$patient_payment', method_of_payment = '$method_of_payment' WHERE id = $id;");
    ?>

    <h1>Дані успішно змінено</h1>
    <meta http-equiv='refresh' content='0; url=financial_data.php'>
</body>