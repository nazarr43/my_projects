<html>
<head>
    <meta charset="utf-8">
    <title>Додати ліки та рецепти</title>
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
        $name_of_the_drug = $_POST['name_of_the_drug'];
        $description_of_the_drug = $_POST['description_of_the_drug'];
        $doctor_who_wrote_prescription = $_POST['patient_who_got_prescription'];
        $patient_who_got_prescription = $_POST['patient_who_got_prescription'];

        $con->query("INSERT INTO medicines_and_prescriptions(`id`, `name`, `description_of_the_drug`, `doctor_who_wrote_prescription`, `patient_who_got_prescription`) VALUES ($id,'$name','$description_of_the_drug','$doctor_who_wrote_prescription','$patient_who_got_prescription');");
    ?>

    <b>Запис додано</b>
    <meta http-equiv='refresh' content='0; url=medicines_and_prescriptions.php'>
</body>