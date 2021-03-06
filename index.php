<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=,, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="zadanie">
        <h1>Задание 1</h1>
        Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и
        результат присвойте переменной $c. Затем создайте переменную $d,
        присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите
        в переменную $result. Выведите на экран значение переменной $result. 

    </div>
    
    <div class="otvet">
        <?php // решение
            $a=17;  $b=10;
            $c= $a-$b;
            $d=7;
            $d+=$c;
            $result = $d;    
        ?>
        <h2>Ответ: <?=$result?></h2>
    </div>
     

    <div class="zadanie">
        <h1>Задание 2</h1>
        Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат
        присвойте переменной $result. Выведите на экран значение
        переменной $result. 
    </div>
    
    <div class="otvet">
        <?php // решение
            $c = 15; $d = 2;
            $result = $c + $d;
        ?>
        <h2>Ответ: <?=$result?></h2>
    </div>
    
    <div class="zadanie">
        <h1>Задание 3</h1>
        Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих
        переменных и операции сложения строк выведите на экран фразу 'Привет,
        Мир!'.  
    </div>
    
    <div class="otvet">
        <?php // решение
            $text1 =  'Привет, ';
            $text2 =  'Мир! '       
        ?>
        <h2>Ответ: <?=$text1, $text2 ?></h2>
    </div>
    
    <div class="zadanie">
        <h1>Задание 4</h1>
        Создайте переменную $name и присвойте ей ваше имя. Выведите на
        экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя. 
    </div>
    
    <div class="otvet">
        <?php // решение
            $name = 'Александр'      
        ?>
        <h2>Ответ: <?='Привет, ', $name ?></h2>
    </div>

    <div class="zadanie">
        <h1>Задание 5</h1>
        Создайте переменную $age и присвойте ей ваш возраст. Выведите на
        экран 'Мне %Возраст% лет!'.  
    </div>
    
    <div class="otvet">
        <?php // решение
           $age = 18;    
        ?>
        <h2>Ответ: <?='Мне, ', $age, ' лет!' ?></h2>
    </div>


    <div class="zadanie">
        <h1>Задание 6</h1>
        Если переменная $a равна 10, то выведите 'Верно', иначе выведите
        'Неверно'. 
    </div>
    
    <div class="otvet">
        <?php // решение
            $a=10;
            If($a<10){echo '<h2>Ответ:</h2> ' .$a. ' неверно';}
                    else if ($a>10){echo '<h2>Ответ: </h2>' .$a. ' неверно';}
                    else {echo '<h2>Ответ: </h2>' .$a. ' верно';}         
        ?>
        
    </div>
    <div class="zadanie">
        <h1>Задание 7</h1>
        В переменной $min лежит число от 0 до 59. Определите в
        какую четверть часа попадает это число (в первую, вторую, третью или
        четвертую). 

    </div>
    
    <div class="reshenie">
        <?php 
            $min = 30;
            if($min>=0 and $min<=14){
                echo '<h2>Ответ: Переменная лежит в первой половине</h2>';

            }
            
            if($min>=15 and $min<=30){
                echo '<h2>Ответ: Переменная лежит во второй половине</h2>';

            }

            if($min>=31 and $min<=45){
                echo '<h2>Ответ: Переменная лежит в третьей половине</h2>';

            }

            if($min>=46 and $min<=59){
                echo '<h2>Ответ: Переменная лежит в четвертой половине</h2>';

            }
        ?>
    </div>

    <div class="zadanie">
        <h1>Задание 8</h1>
        Переменная $num может принимать одно из значений: 1, 2, 3 или 4.
        Если она имеет значение '1', то в переменную $result запишем 'зима', если
        имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case. 

    </div>
    
    <div class="reshenie">
        <?php 
           $num = 4;
           switch($num){
               case 1:
                    echo '<h2>Ответ: Зима</h2>';
                    break;
                case 2:
                    echo '<h2>Ответ: Лето</h2>';
                    break;
                case 3:
                    echo '<h2>Ответ: Осень</h2>';
                    break;
                case 4:
                    echo '<h2>Ответ: Весна</h2>';
                    break;
           }
        ?>
    </div>

    <div class="zadanie">
        <h1>Задание 9</h1>
        Дана строка с цифрами, например, '12345'. Проверьте, что первым
        символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да',
        в противном случае выведите 'нет'.

    </div>
    
    <div class="reshenie">
        <?php 
           $str=(rand(1,5).rand(1,5).rand(1,5).rand(1,5).rand(1,5));
           $res=($strp[0]==1||$strp[0]==2||$strp[0]==3)? 'ДА' : 'НЕТ';
           echo "<h2>Ответ: $res</h2> ";
           

        ?>
    </div>
    <div class="otvet">



</div>

    <div class="zadanie">
        <h1>Задание 10</h1>
        В переменной $year хранится год. Определите, является ли
        он високосным (в таком году есть 29 февраля). Год будет високосным в двух
        случаях: либо он делится на 4, но при этом не делится на 100, либо делится
        на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они
        делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они
        делятся на 400

    </div>
    
    <div class="reshenie">
        <?php 
          $year=(rand(1,9).rand(0,9).rand(0,9).rand(0,9));
          
          if (($year%100!=0) and ($year%4==0) or ($year%400==0)){
              echo 'Год ',$year, ' високосный!';
          }else{
              echo 'Год ',$year, ' не високосный! ';
          }
        ?>
    </div>

    <div class="zadanie">
        <h1>Задание 11</h1>
        В переменной $month лежит какое-то число из интервала от 1 до 12.
        Определите в какую пору года попадает этот месяц (зима, лето, весна, осень). 

    </div>
    
    <div class="reshenie">
        <?php 
          $month=(rand(1,12));
          
          if($month==1 or $month==2 or $month==3){
              echo "Месяц $month. Сейчас зима";
          } else if($month==4 or $month==5 or $month==6){
                    echo "Месяц $month. Сейчас весна";
                 } else if($month==7 or $month==8 or $month==9){
                    echo "Месяц $month. Сейчас лето";
                        } else if($month==10 or $month==11 or $month==12){
                            echo "Месяц $month. Сейчас осень";
                                }
         
        ?>
    </div>

    <div class="zadanie">
        <h1>Задание 12</h1>
        Выведите столбец чисел от 1 до 100. 
    </div>
    
    <div class="reshenie">
        <?php 
            for ($i = 1; $i <= 100; $i++){
                echo "<br>$i";
            }
        ?>
    </div>

    <div class="zadanie">
        <h1>Задание 13</h1>
        Выведите столбец чисел от 1 до 100. 
    </div>
    
    <div class="reshenie">
        <?php 
            for ($i = 11; $i <= 33; $i++){
                 echo "<br>$i";
            }
        ?>
    </div>

    <div class="zadanie">
        <h1>Задание 14</h1>
        Выведите столбец четных чисел в промежутке от 0 до 100. 
    </div>
    
    <div class="reshenie">
        <?php 
            for ($i = 1; $i <= 100; $i++){
                if($i%2==0){
                    echo "<br>$i";
                }
            }
        ?>
    </div>

    <div class="zadanie">
        <h1>Задание 15</h1>
        С помощью цикла найдите сумму чисел от 1 до 100. 
    </div>
    
    <div class="reshenie">
        <?php 
            for ( $i = 1; $i <= 100; $i++) {
                $sum += $i;
            }
            echo "<h2>Ответ: $sum</h2>";
        

        ?>

    <div class="zadanie">
        <h1>Задание 1. Часть 2.</h1>
        Создайте переменные $a, $b и присвойте им положительные
        числа. Присвойте частное от деления $a/$b третьей переменной $d.
        Используя условный оператор if, осуществите схему вывода на экран
        значения переменной $d только в том случае, если оно является
        положительным числом. Проверьте работу скрипта, после чего
        измените одно из значений переменных на отрицательное число и
        снова запустите скрипт.     
    </div>
    
    <div class="reshenie">
        <?php 
        $a = (rand(-5,5)); $b = (rand(-5,5));
        if($a>0 and $b>0){
            $d = $a / $b;
            echo "<h2>Ответ: $d</h2>";
        } else{
            echo "<h2>Ответ: Одна из переменных является отрицательным числом</h2>";
        }

     ?>  
        <div class="zadanie">
            <h1>Задание 2. Часть 2.</h1>
            Создайте переменные $a, $b и присвойте им положительные
            числа. Присвойте частное от деления $a/$b третьей переменной $d.
            Используя условный оператор if, осуществите схему вывода на экран
            значения переменной $d только в том случае, если оно является
            положительным числом. Если число окажется отрицательным или
            равным нулю, должно выводиться соответствующее предупреждение, а
            не значение переменной. Проверьте работу скрипта, после чего
            измените одно из значений переменных $a или $b на отрицательное
            число и снова запустите скрипт.    
        </div>
        
        <div class="reshenie">
            <?php 
                $a = (rand(-5,5)); $b = (rand(-5,5));
                 $d = $a / $b;
                    if($d!=0 and $d>0){
                         echo "<h2>Ответ: $d</h2>";
                    }else{
                    echo "<h2>Ответ: Одна из переменных является отрицательным числом или равно нулю</h2>";
                }

            ?>  
        </div>
        <div class="zadanie">
            <h1>Задание 4. Часть 2.</h1>
                Создайте переменную и присвойте ей массив, состоящий из пяти
            элементов, например, чисел или строк. Создайте еще одну
            переменную, которой присвойте какое-нибудь значение. Теперь
            создайте конструкцию switch, которая будет определять, есть такой
            элемент в массиве или нет и выводить соответствующее сообщение.
            Для упрощения кода используйте операторы case, идущие друг за
            другом и содержащие метки в виде значений элементов массива, но не
            прерывающиеся операторами break. Не забудьте про условие по
            умолчанию, которое будет выводить сообщение, если элемента в
            массиве нет. Протестируйте конструкцию, присваивая второй
            переменной различные значения. 
    
        </div>
        
        <div class="reshenie">
            <?php 
                $mas = array (1, 4, 5);
                $i = (rand(1,5));
                
                switch($i){
                    case 1:
                    case 4:
                    case 5:
                        echo "<h2>Ответ: Значение $i есть</h2>" ;
                        break;
                    default:
                        echo "<h2>Ответ: Значение $i нет</h2>";
                }
            ?>  
        </div>

        <div class="zadanie">
            <h1>Задание 5. Часть 2.</h1>
                Используйте цикл for для вывода на экран целых положительных
            чисел не превышающих 50. Прервите цикл на 10 итерации при помощи
            внутреннего условного оператора if и оператора break.
    
        </div>
        <h2>Ответ:</h2>
        <div class="reshenie">
            <?php 
                $step = 1;
                for($i=-4; $i <=50; $i++, $step++){
                    if($i>0){
                        echo "<h2>$i</h2>";
                    }
                    if($step>=10){
                        break;
                    }      
                }
                
            ?>  
        </div>


        <div class="zadanie">
            <h1>Работа с массивами!</h1>
            <h1>Задание 1</h1>
            Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент
            массива на второй, а третий элемент на четвертый. Результаты сложите,
            присвойте переменной $result. Выведите на экран значение этой переменной. 
        </div>

        <div class="reshenie">
            <?php
                $arr = array(2,5,3,9);

                $result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);

                echo "<h3>Ответ: $result</h3> ";
            
            ?>
        </div>

        <div class="zadanie">

            <h1>Работа с массивами!</h1>

            <h1>Задание 2</h1>
            Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто
            заполните его присваиванием $arr[] = новое значение. Для выполнения задачи
            необходимо использовать цикл.  
        </div>

        <div class="reshenie">
            <?php
                $arr = array(1,2,3,4,5);
                echo "<h3>Исходный массив   </h3>";
                print_r($arr);
                for($i = 0; $i < count($arr[0]); $i++){
                    $arr[(rand(0,4))]=(rand(5,10));
                    echo "<h3>Ответ: </h3> ";
                }
                print_r($arr);
              
            
            ?>
        </div>

        <div class="zadanie">

            <h1>Работа с массивами!</h1>
            <h1>Задание 3</h1>
            Пусть теперь в переменной $lang хранится язык (она принимает одно из
            значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня.
            Выведите словом день недели, соответствующий переменным $lang и $day. То
            есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'. <hr>

        </div>

        <div class="reshenie">
            <?php

                
                $week = array(
                    "ru" => array(  
                        1 => 'Понедельник',
                        2 => 'Вторник',
                        3 => 'Среда',
                        4 => 'Четверг',
                        5 => 'Пятница',
                        6 => 'Суббот',
                        7 => 'Воскресенье'),
                   
                   "en" => array(  
                        1 => 'Monday',
                        2 => 'Tuesday',
                        3 => 'Wednesday',
                        4 => 'Thursday',
                        5 => 'Friday',
                        6 => 'Suterday' ,
                        7 => 'Week')
                );
                $lang = "ru";
                $day = 7; 
                echo "<h1>Ответ: </h1>".$week[$lang][$day];
                
            ?>
            
        </div>
        <div class="zadanie">
            <h1>Задание 4</h1>
            $ceu = array("Италия" => "Рим", "Люксембург" => "Люксембург", "Бельгия"
            => "Брюссель", "Дания" => "Копенгаген", "Финляндия" => "Хельсинки",
            "Франция "=>"Париж", "Словакия"=>"Братислава", "Словения"=>"Любляна",
            "Германия"=>"Берлин", "Греция"=>"Афины", "Ирландия" => "Дублин",
            "Нидерланды" => "Амстердам", "Португалия" => "Лиссабон", "Испания" =>
            "Мадрид", "Швеция" => "Стокгольм", "Великобритания" => "Лондон",
            "Кипр"=>"Никосия", "Литва"=>"Вильнюс", "Чехия"=>"Прага",
            "Эстония"=>"Таллин"," Польша "=>"Варшава");<br>
            Создайте сценарий PHP, который отображает столицу и название страны из
            указанного выше массива $ceu. Отсортируйте список по названиям столиц.
            Пример вывода: 
            Страна Нидерланды - столица Амстердам
            Страна Греция - столица Афины
            Страна Германии - столица Берлин <hr>
        </div>

        <div class="reshenie">
            <?php
                $ceu = array(
                    
                    "Италия" => "Рим", 
                    "Люксембург" => "Люксембург", 
                    "Бельгия" => "Брюссель",
                    "Дания" => "Копенгаген",
                    "Финляндия" => "Хельсинки",
                    "Франция " => "Париж",
                    "Словакия" => "Братислава", 
                    "Словения" => "Любляна",
                    "Германия" => "Берлин", 
                    "Греция" => "Афины", 
                    "Ирландия" => "Дублин",
                    "Нидерланды" => "Амстердам", 
                    "Португалия" => "Лиссабон",
                    "Испания" => "Мадрид", 
                    "Швеция" => "Стокгольм",
                    "Великобритания" => "Лондон",
                    "Кипр" => "Никосия",
                    "Литва" => "Вильнюс",
                    "Чехия" => "Прага",
                    "Эстония" => "Таллин",
                    "Польша " => "Варшава"
                ); 
                echo "<h1>Ответ: </h1>";
                foreach ($ceu as $key => $value) {
                    
                    echo " Страна $key - столица $value <br>" ;
                    
                }
                  

            ?>
            
        </div>

        <div class="zadanie">
            <h1>Задание 5</h1>
            $color = array(4 => 'белый', 6 => 'зеленый', 11 => 'красный');
            Напишите сценарий PHP, чтобы получить первый элемент указанного выше
            массива. Представим, что ключ вам заранее не известен. <hr>
        </div>
        
        <div class="reshenie">
            <?php
                $color = array(4 => 'белый', 6 => 'зеленый', 11 => 'красный');
                $col = current($color);
                echo $col;
            ?>
        </div>
        
        <div class="zadanie">
            <h1>Задание 6</h1>
            Напишите сценарий PHP для сортировки следующего ассоциативного
            массива:
            array "Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40"
            а сортировка по возрастанию по значению
            б по возрастанию сортировка по ключу
            в сортировка по убыванию по значению
            г сортировка по убыванию по ключу
            Для выполнения задачи ознакомьтесь с функциями asort, ksort, arsort, krsort <hr>
        </div>
        
        <div class="reshenie">
            <?php
                $arr =  array (
                "Sophia" => "31", 
                "Jacob" => "41", 
                "William" => "39", 
                "Ramesh" => "40"
                );
                
                //Сортировка массива по возрастанию по значению
                asort($arr);
                echo "Сортировка массива по возрастанию по значению <pre>";
                print_r($arr);
                //Сортировка массива по убыванию по значению
                arsort($arr);
                echo "Сортировка массива по убыванию по значению <pre>";
                print_r($arr);
                //Сортировка массива по возрастанию по ключу
                ksort($arr);
                echo "Сортировка массива по возрастанию по ключу <pre>";
                print_r($arr);
                //Сортировка массива по убыванию по ключу
                krsort($arr);
                echo "Сортировка массива по убыванию по ключу <pre>";
                print_r($arr);

            ?>
        </div>
         
        <div class="zadanie">
            <h1>Задание 7</h1>
            Напишите сценарий PHP, который отображает все числа от 200 до 250,
            делящиеся на 4.
            Примечание. Не используйте управляющие операторы PHP.
            Ожидаемый результат:
            200,204,208,212,216,220,224,228,232,236,240,244,248 <hr>
        </div>
        
        <div class="reshenie">
            <?php

                 $arr = range(200,250);

                for($i=0;  $i<50;  $i=$i+4){
                    echo $arr[$i];
                }    
          
               

                // for($i=200;  $i=250;  $i++){
                //     if($i/4){
                //         echo $i;
                //     }
                // }
                $arr =  range(200,250);
                echo '<pre>';
                $res= ($arr/4);
                print_r ($res);
                

                
               
              
            

            ?>
        </div>
</body>
</html>