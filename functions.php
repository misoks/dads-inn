<?php

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
    $name = mysql_real_escape_string($_POST['dad_name']);
    $age = mysql_real_escape_string($_POST['age']);
    $reason = mysql_real_escape_string($_POST['reason']);
    $img_path = mysql_real_escape_string($_FILES['filename']['name']);
    $sql = "INSERT INTO Dads (dad_name, age, reason, img_path) 
              VALUES ('$name', '$age', '$reason', '$img_path')";
	mysql_query($sql);
	move_uploaded_file($_FILES['filename']['tmp_name'], "images/dads/$img_path");
	//movePage('manual.php', "$n - $t successfully added!", 'success'); 
}

?>