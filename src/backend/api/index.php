<?php 
    require "./classes/fetch.php";
    $fetch = new FetchService("https://jsonplaceholder.typicode.com/todos/1");
    $result = $fetch->fetch();
    $parsed = $fetch->parseJson($result);
    echo $parsed->title;
?>