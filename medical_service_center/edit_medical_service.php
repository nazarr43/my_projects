<html>
    <head>
        <meta charset="utf-8">
        <title>Редагування</title>
    </head>
    <body>
        <h1>Редагувати дані про медичну послугу</h1>
            <?php
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "medical_service_center";
                $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
                MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати БД"); 

                $id = $_GET["id"];

                $result = $con->query("SELECT * FROM medical_service WHERE id = $id;")->fetch_assoc();
            ?>

            <form method='post' action='edited_medical_service.php'><br>

            <b>Id Медичної послуги</b></p>
            <input type='text'  name='id' value='<? echo $id; ?>'><p>
            
            <b>Назва медичної послуги</b></p>
            <input type='text' name='name' value='<? echo  $result['name']; ?>'><p>

            <b>Опис медичної послуги</b></p>
            <input type='text' name='description_service' value='<? echo $result['description_service']; ?>'><p>

            <b>Ціна</b></p>
            <input type='text' name='price' value='<? echo $result['price']; ?>'><p>

            
                

            <input type='submit' value='OK'><p>
            <a href='medical_service.php'>Назад</a>
                
    </body>
</html>