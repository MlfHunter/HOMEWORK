<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <p>Введите имя</p>
    <form action="form.php" method="POST">
       Имя: <input type="text" name="log">
        <input type="submit" name ="log_in"value="УУУ нажми меня">
    </form>
    <?php  
         if(isset($_POST['log_in'])){   
            if (!empty($_POST['log'])  ){
                    echo "Привет, ".$_POST['log'];
                } else {
                    echo "Введите имя иначе пошли отседова";
                } 
         }    
        
        
    ?>
</body>
</html>