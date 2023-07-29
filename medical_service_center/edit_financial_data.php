<html>
    <head>
        <meta charset="utf-8">
        <title>Редагування</title>
    </head>
    <body>
        <h1>Редагувати фінансові дані</h1>
            <?php
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "medical_service_center";
                $con = MYSQLI_CONNECT($hostname,$username,$password) OR DIE("Не можу під'єднатися"); 
                MYSQLI_SELECT_DB($con, $database) or die("Не можу вибрати БД"); 

                $id = $_GET["id"];

                $result = $con->query("SELECT * FROM financial_data WHERE id = $id;")->fetch_assoc();
            ?>

            <form method='post' action='edited_financial_data.php'><br>

            <b>Id</b></p>
            <input type='text'  name='id' value='<? echo $id; ?>'><p>
            
            <b>Дата операції</b></p>
            <input type='text' name='data_of_operation' value='<? echo  $result['data_of_operation']; ?>'><p>

            <b>Сума операції</b></p>
            <input type='text' name='transaction_amount' value='<? echo $result['transaction_amount']; ?>'><p>

            <b>Пацієнт,який оплатив</b></p>
            <input type='text' name='patient_payment' value='<? echo $result['patient_payment']; ?>'><p>

            <b>Метод оплати</b></p>
            <input type='text' name='method_of_payment' value='<? echo $result['method_of_payment']; ?>'><p>

            
                

            <input type='submit' value='OK'><p>
            <a href='financial_data.php'>Назад</a>
                
    </body>
</html>