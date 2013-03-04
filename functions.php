<?php
include('SimpleImage.php');

function navLink($url, $linktext) {
    $current = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    if ($url == $current) {
        return '<a class="current">'.$linktext.'</a>';
    }
    else {
        return '<a href="'.$url.'">'.$linktext.'</a>';
    }
}

function add_dad() {
    $timestamp = date('mdhms').'-';
    $name = mysql_real_escape_string($_POST['dad_name']);
    $age = mysql_real_escape_string($_POST['age']);
    $reason = mysql_real_escape_string($_POST['reason']);
    $img_path = $timestamp.mysql_real_escape_string($_FILES['filename']['name']);
    $sql = "INSERT INTO Dads (dad_name, age, reason, img_path) 
              VALUES ('$name', '$age', '$reason', '$img_path')";
	mysql_query($sql);
	    $image = new SimpleImage();
        $image->load($_FILES['filename']['tmp_name']);
        $width = $image->getWidth();
        $height = $image->getHeight();
        if ($width <= $height) {
            $image->resizeToWidth(200);
        }
        else {
            $image->resizeToHeight(200);
        }
        $image->save("images/dads/$img_path");
}


?>