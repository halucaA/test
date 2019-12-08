
<?php
//echo 'Get data';
$url = "https://testhellohaluca2.herokuapp.com/";
$homepage = file_get_contents($url);
echo "Legatura realizata intre test1 si " . $homepage;