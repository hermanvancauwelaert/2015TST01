<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php

        define('INC_PATH',$_SERVER['DOCUMENT_ROOT'].'/2015/2015TST01/Includes/');
        var_dump(INC_PATH) ;
        var_dump($_SERVER);
        
       
        require(INC_PATH.'header.php');
        require(INC_PATH.'connection.php');
        $controller = new pageHeader();
        $db = connection::connect();
        echo 'ii qsmfqisf mqsodifj';
        ?>
    </body>
</html>
