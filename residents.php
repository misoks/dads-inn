<?php 
    $page_title = "Residents";
    $page_class = "residents page-width--wide";
    include_once("header.php");
?>

<?php

?>

<h1>Residents</h1>

<p>Here are the dads currently residing in the Dads Inn.</p>
<ul class="resident-index">
<?php
    $result = mysql_query("SELECT dad_name, age, reason, img_path FROM Dads ORDER BY dad_id DESC");
    $oddeven = "odd";
while ( $row = mysql_fetch_row($result) ) {
    $image = (htmlentities($row[3]));
    $name = (htmlentities($row[0]));
    $age = (htmlentities($row[1]));
    $reason = (htmlentities($row[2]));
    echo "<li class='dad dad--$oddeven'>";
    echo '<div class="dad__image"><img src="images/dads/'.$image.'"></div>';
    echo '<h3 class="dad__name">'.$name.'</h3>';
    if ($age != '0') {
        echo '<span class="dad__age"><span class="label">Age:</span> '.$age.'</span>';
    }
    echo '<p class="dad__notes"><span class="label">Check-In Notes:</span> '.$reason.'</p>';
    echo("</li>");
    if ( $oddeven == "odd" ) { $oddeven = "even"; }
    else { $oddeven = "odd"; }
}
?>
</ul>

<?php 
    include_once("footer.php");
?>