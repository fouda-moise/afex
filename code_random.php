<?php

    $chars = '0123456789';

    $code = str_shuffle($chars);

    $code = substr($code,0,2);

    $date1 = date('d-m-Y');

  echo 'PJ'.$code.'-'.$date1; 
   

?>