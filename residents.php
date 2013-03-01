<?php 
    $page_title = "Residents";
    include_once("header.php");
?>

<?php

?>

<p>Here are the dads currently residing in the Dads Inn.</p>
<ul class="resident-index">
<?php
    $result = mysql_query("SELECT dad_name, age, reason, img_path FROM Dads");
    $oddeven = "odd";
while ( $row = mysql_fetch_row($result) ) {
    echo "<li class='dad dad--$oddeven'>";
    echo '<div class="dad__image"><img src="images/dads/'.(htmlentities($row[3])).'"></div>';
    echo '<h3 class="dad__name">'.(htmlentities($row[0])).'</h3>';
    echo '<span class="dad__age"><span class="label">Age:</span> '.(htmlentities($row[1])).'</span>';
    echo '<p class="dad__notes"><span class="label">Check-In Notes:</span> '.(htmlentities($row[2])).'</p>';
    echo("</li>");
    if ( $oddeven == "odd" ) { $oddeven = "even"; }
    else { $oddeven = "odd"; }
}
?>
</ul>

<?php 
    include_once("footer.php");
?>