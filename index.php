<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> HelloWorld</title>
    </head>
    <body>
        <?php
        $var=file_get_contents('https://www.vitamap.com/');
        echo $var;
        ?>
    </body>
</html>
