<?php
$fileList = glob('pages/*');
$request = $_SERVER["REQUEST_URI"];
$route = str_replace("/basic-exercises", "", $request);
$route = strpos($route, "pages") === false ? "pages".$route : $route;
foreach($fileList as $index=>$file){

    if($file == $route)
        include($file);

}