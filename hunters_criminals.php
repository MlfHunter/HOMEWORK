<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="zadanie">
        <h1>Задание с Преступниками</h1>
        Существует массив содержащий информацию о жителях города. 
        У каждого жителя есть свой ID. 
        Есть массив преступников в котором хранятся ID жителей относящихся к преступникам. 
        Необходимо определить является ли житель преступником. 
        Результат должен принимать следующий вид: житель_фамилия_является. Жителей 10 из них 3 преступники.<hr>
    </div>

    <div class="reshenie">
        <?php 
            $residents = array(
            array("id" =>1, "firstname" =>"Иванов"),
            array("id" =>2, "firstname" =>"Петров"),
            array("id" =>3, "firstname" =>"Долгополов"),
            array("id" =>4, "firstname" =>"Койнов"),
            array("id" =>5, "firstname" =>"Евкуров"),
            array("id" =>6, "firstname" =>"Звягин"),
            array("id" =>7, "firstname" =>"Койнова"),
            array("id" =>8, "firstname" =>"Аверьянов"),
            array("id" =>9, "firstname" =>"Камзачаков"),
            array("id" =>10, "firstname" =>"Пивкин"),
            );

            $criminals = array (1,5,10);
           
            foreach ($residents as $value) {
                if (in_array($value['id'],  $criminals)){
                    echo 'Фамилия: '.$value ['firstname'].' - является преступником <br>' ; 
                }else{ 
                    echo 'Фамилия: '.$value ['firstname']. ' - не является преступником <br>';
                }
            }
        ?>
  
    </div>
</body>
</html>