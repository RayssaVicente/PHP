<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
       $registros = array ('Título notícia 1', 'Título notícia 2', 'Título nóticia 3');

       

       print_r($registros);
       echo '<br>';

        $idx = 0;

        while($idx < 3){
            

            echo $registros[$idx];
             echo '<hr>';
             $idx ++;
            
        }

        echo '<br> ';

        $registros2 = array(
            array('titulo' => 'Titulo noticia 1', 'conteudo' => 'Contudo noticia 1'),
            array('titulo' => 'Titulo noticia 2', 'conteudo' => 'Contudo noticia 2'),
            array('titulo' => 'Titulo noticia 3', 'conteudo' => 'Contudo noticia 3'),
            array('titulo' => 'Titulo noticia 4', 'conteudo' => 'Contudo noticia 4')
        ) ;
        
        echo '<pre>';
        print_r($registros2);
        echo '</pre>';
        echo'<br><br><br>';

        $id = 0;
        while($id < count($registros2)){

           echo '<h3>' . $registros2[$id]['titulo']. '</h3>';
           echo '<p>' . $registros2[$id]['conteudo']. '</p>';

           echo '<hr>';
            $id++;

        }

        // do{
        //     echo '<h3>' . $registros2[$id]['titulo']. '</h3>';
        //     echo '<p>' . $registros2[$id]['conteudo']. '</p>';
 
        //     echo '<hr>';
        //      $id++;
  
        // }while($idx < count($registros2));

        // for($ids = 0; $ids < count($registros2); $ids ++){
        //     echo '<h3>' . $registros2[$id]['titulo']. '</h3>';
        //    echo '<p>' . $registros2[$id]['conteudo']. '</p>';

        //    echo '<hr>';
        // }



     
     ?>
    
    
</body>
</html>