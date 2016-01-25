<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST)) {

    if (isset($_POST['encoded'])) {
        // data-uri encoded image
        foreach ($_POST['encoded'] as $encoded) {
            file_put_contents(
                './'.$encoded['name'], 
                base64_decode($encoded['file'])
            );
        }
        var_dump($_POST);

    } else {
        $name = $_FILES['img']['name'];
        $content = file_get_contents(
           $_FILES['img']['tmp_name']);
        file_put_contents(
            './'.$name, $content);

        var_dump($_POST);
        var_dump($_FILES);
    }
}