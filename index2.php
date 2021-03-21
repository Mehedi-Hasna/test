<?php
    $mail  = 'mehedi16-272@diu.edu.bd';
    $name = strstr($mail, '1', true);
//    $id = explode("$name", $mail);

    $id = substr($mail, -17, 6);
    $domain = substr($mail, -10);


    echo "Name is : $name <br/>";
    echo "Id is : $id <br/>";
    echo "domain is : $domain <br/>";

	//test

?>