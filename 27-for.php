<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
       for($x = 1; $x <= 10; $x ++){
        echo "$x <br>";
       }

        echo '<hr>';

       for ($y = 11; true; $y++){
         if($y >= 20){
            break;
         }

         echo "$y <br>";
       }
        echo '<hr>';
       
       for ($z = 11; true; $z --){
        if($z < 0){
            break;
        }
        echo "$z <br>";
       }
     
     ?>
    
    
</body>
</html>