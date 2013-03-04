<?php 
    $page_title = "Metro Lansing's #1 repository for used, damaged, or unwanted dads!";
    $page_class = "home page-width--narrow";
    include_once("header.php");
?>

<?php
    if (isset($_POST['dad_name']) && 
        isset($_POST['age']) &&
        isset($_POST['reason']) &&
        isset($_FILES['filename']['name']) ) 
        {
            add_dad();
            echo "<p>Dad added!</p>";
        }
    else {
?>

<h2>Welcome to the Dads Inn! We hope you'll entrust your dad to us.</h2>

<form method="post" enctype="multipart/form-data" action="index.php">
        <table>
            <tr>
                <td class="label">Dad Name</td>
                <td class="field-cell"><input type="text" name="dad_name" class="field field--name"></td>
            </tr>
            <tr>
                <td class="label">Age</td>
                <td class="field-cell"><input type="text" name="age" class="field field--age"></td>
            </tr>
            <tr>
                <td class="label">Reason</td>
                <td class="field-cell"><textarea name="reason" class="field field--reason"></textarea></td>
            </tr>
            <tr>
                <td class="label">Image</td>
                <td class="field-cell"><input type="file" name="filename" class="field field--image">
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Add Dad" class="button--add-dad"></td>
            </tr>
        </table>
        
    </form>


<?php 
}
    include_once("footer.php");
?>