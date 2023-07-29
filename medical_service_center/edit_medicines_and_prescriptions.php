<html>
    <head>
        <meta charset="utf-8">
        <title>Редагування</title>
    </head>
    <body>
        <h1>Редагувати ліки та рецепти</h1>
            <?php
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "medical_service_center";
                $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
                MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати БД"); 

                $id = $_GET["id"];

                $result = $con->query("SELECT * FROM medicines_and_prescriptions WHERE id = $id;")->fetch_assoc();
            ?>

            <form method='post' action='medicines_and_prescriptions.php'><br>

            <b>ID</b></p>
            <input type='text'  name='id' value='<? echo $id; ?>'><p>
            
            <b>Назва препарату</b></p>
            <input type='text' name='name_of_the_drug' value='<? echo  $result['name_of_the_drug']; ?>'><p>

            <b>Опис препарату</b></p>
            <input type='text' name='description_of_the_drug' value='<? echo $result['description_of_the_drug']; ?>'><p>

            <b>Лікар,який виписав рецепт</b></p>
            <input type='text' name='doctor_who_wrote_prescription' value='<? echo $result['doctor_who_wrote_prescription']; ?>'><p>

            <b>Пацієнт,який отримав рецепт</b></p>
            <input type='text' name='patient_who_got_prescription' value='<? echo $result['patient_who_got_prescription']; ?>'><p>
                

            <input type='submit' value='OK'><p>
            <a href='medicines_and_prescriptions.php'>Назад</a>
                
    </body>
</html>