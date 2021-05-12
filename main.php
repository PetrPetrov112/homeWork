<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex_container">
        <div class="header">
                <?php include 'logo.inc.php' ?>
                <?php include 'menu.inc.php' ?>
        </div>
        <div class="about_me">
            <h1> <?php echo $p ?> </h1>
            <div class="data">
                    <div class="myImg">
                       <img src="img/boy.jpg" alt="boy" class="img_boy">                            
                    </div>
                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ',  $surname  .  '<br>';
                          echo 'город', ' ',  $city; ?>
                    </p>
                    <p> Мне
                    <?php echo $age; ?>
                    лет </p>
                    <hr class="hr">
                    <p>  Позвольте мне рассказать о себе </p>
                    <p> Я здесь чтобы рассказать о себе </p>
                </div>
            </div>
            <div class="knowledge">
                <?php include 'knowledge.inc.php'; ?>
                <?php
                echo $a, ' ',  $b, ' ', $c;
                ?> <br>
                <?php
                    $a = 10;
                    $b = 20;
                    $c= $a+$b;
                    echo $c;
                ?>   <br>
                <?php
                   echo $d;
                ?>
            </div>
            <div class="article">
               <p class="text">
               Доброго времени суток,меня зовут Пётр Петров
Я занимаюсь web-разработкой с нуля,под ключ.
Выполняю верстку и программирование сайтов,а так же доработку,добавляя полный функционал на сайт!Верстаю адаптивную верстку с помощью Bootstrap,
таким образом сайт получается красивым на любом устройстве,будь то комьютер,ноутбук или телефон!
               </p>
            </div>
        </div>
            <?php include 'footer.inc.php' ?>
    </div>
    
</body>
</html>