<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/2.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p>   
                    <?php echo 'Меня зовут -', $surname, ' ', $name . '<br>'; 
                          echo 'Проживаю в городе:', ' ', $city . '<br>'; 
                          echo 'Мне', ' ', $age, ' ', 'лет';
                    ?>                                      
                    </p> 
           
                    <p class='paragraph'> Мы научились создавать переменные <br>
                         Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c, ' ', '(тут разные типы данных)'; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo 'Результат сложения переменных a и b - ', ' ', $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>
            <hr>
            <div class="article">
            <blockquote>
                <p class="text">
                <q>Не хотелось бы пугать вас рассказами о хакерах, которые заставляют ваш PHP-код работать против вас
                самих, особенно когда вы только приступили к изучению языка. Но факт остается фактом: самая слабая 
                сторона PHP заключается в его простоте, которая способна порождать подобную уязвимость. 
                При изучении языка PHP на профессиональном уровне большая часть времени уходит на то, чтобы научиться
                избегать проблем с безопасностью.</q> - Кевин Янк
                </p>
            </blockquote>    
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>