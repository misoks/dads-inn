<?php 
    $page_title = "Metro Lansing's #1 repository for used, damaged, or unwanted dads!";
    include_once("header.php");
?>

<?php
    if (isset($_POST['dad_name']) && 
        isset($_POST['age']) &&
        isset($_POST['reason']) &&
        isset($_FILES['filename']['name']) ) 
        {
            add_dad();
        }
?>

<p>Welcome to the Dads Inn! We hope you'll entrust your dad to us.</p>

<form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td class="label">Dad Name:</td>
                <td class="input"><input type="text" name="dad_name"></td>
            </tr>
            <tr>
                <td class="label">Age:</td>
                <td class="input"><input type="text" name="age"></td>
            </tr>
            <tr>
                <td class="label">Reason:</td>
                <td class="input"><input type="text" name="reason"></td>
            </tr>
            <tr>
                <td class="label">Image:</td>
                <td class="input"><input type="file" name="filename" size="10" />
            </tr>
        </table>
        <input type="submit" value="Add Dad"/>
    </form>


<?php 
    include_once("footer.php");
?>