<html>
    <head>
        <meta charset="utf-8">
        <title>Редагування</title>
    </head>
    <body>
        <h1>Редагувати дані про персонал</h1>
            <?php
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "medical_service_center";
                $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
                MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати БД"); 

                $id = $_GET["id"];

                $result = $con->query("SELECT * FROM personnel WHERE id = $id;")->fetch_assoc();
            ?>

            <form method='post' action='edited_personnel.php'><br>

            <b>ID</b></p>
            <input type='text'  name='id' value='<? echo $id; ?>'><p>
            
            <b>ПІБ</b></p>
            <input type='text' name='name' value='<? echo  $result['name']; ?>'><p>

            <b>Спеціалізація</b></p>
            <input type='text' name='specialization' value='<? echo $result['specialization']; ?>'><p>

            <b>Зарплата</b></p>
            <input type='text' name='salary' value='<? echo $result['salary']; ?>'><p>

            <b>Контактні дані</b></p>
            <input type='text' name='contacts' value='<? echo $result['contacts']; ?>'><p>
                

            <input type='submit' value='OK'><p>
            <a href='personnel.php'>Назад</a>
                
    </body>
</html>