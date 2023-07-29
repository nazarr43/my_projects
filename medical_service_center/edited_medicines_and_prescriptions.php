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
        $name_of_the_drug = $_POST['name_of_the_drug'];
        $description_of_the_drug = $_POST['description_of_the_drug'];
        $doctor_who_wrote_prescription = $_POST['doctor_who_wrote_prescription'];
        $patient_who_got_prescription = $_POST['patient_who_got_prescription'];


        $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
        MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати Базу Даних"); 

        $con->query("UPDATE medicines_and_prescriptions SET id = $id, name_of_the_drug = '$name_of_the_drug', description_of_the_drug = '$description_of_the_drug', doctor_who_wrote_prescription = '$doctor_who_wrote_prescription', patient_who_got_prescription = '$patient_who_got_prescription'  WHERE id = $id;");
    ?>

    <h1>Дані успішно змінено</h1>
    <meta http-equiv='refresh' content='0; url=medicines_and_prescriptions.php'>
</body>