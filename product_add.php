<?php

require('dbconnect.php');
require('components/header.php');
if ($_POST['title']) {
    if ($_FILES && $_FILES["img_url"]["error"] == UPLOAD_ERR_OK) {
        $img_url = "img/file" . rand(100000, 999999) . $_FILES["img_url"]["name"];
        move_uploaded_file($_FILES["img_url"]["tmp_name"], $img_url);

    }
    $result = $conn->query("INSERT INTO products(title,type,price,colors,features,img_url)
                    VALUES ('" . $_POST['title'] . "','" . $_POST['type'] . "'," . $_POST['price'] . ",'" . $colors . "','" . $_POST['features'] . "','" . $img_url . "')");
}
require('components/product_form.php');
require('components/footer.php');