<?php 
    $page_title = "Metro Lansing's #1 repository for used, damaged, or unwanted dads!";
    $page_class = "home page-width--narrow";
    include_once("header.php");
?>

<?php
    $name = '';
    $age = '';
    $reason = '';
    
    if (!empty($_POST)) {
        $name = $_POST['dad_name'];
        $age = $_POST['age'];
        $reason = $_POST['reason'];
        
        if ( strlen($_POST['dad_name']) >= 1 && 
            strlen($_POST['age']) >= 1 &&
            strlen($_POST['reason']) >= 2 &&
            !empty($_FILES['filename']['name']))
            {
                add_dad();
                echo "<p>Dad added!</p>";
            }
        else { 
            if ( strlen($_POST['dad_name']) < 1 ){
                echo "<p>Enter your dad's gosh darn name!</p>";
            }
            if ( strlen($_POST['age']) < 1 ){
                echo "<p>Enter your dad's gosh darn age!</p>";
            }
            if ( strlen($_POST['reason']) < 1 ){
                echo "<p>Enter the gosh darn reason you're checking him in!</p>";
            }
            if ( empty($_FILES['filename']['name']) ){
                echo "<p>We need your dad's gosh darn photo!</p>";
            }
        }
    }
?>

<h2>Welcome to the Dads Inn! We hope you'll entrust your dad to us.</h2>

<form method="post" enctype="multipart/form-data" action="index.php">
        <table>
            <tr>
                <td class="label">Dad Name</td>
                <td class="field-cell"><input type="text" name="dad_name" class="field field--name" value="<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td class="label">Age</td>
                <td class="field-cell"><input type="text" name="age" class="field field--age" value="<?php echo $age ?>"></td>
            </tr>
            <tr>
                <td class="label">Reason</td>
                <td class="field-cell"><textarea name="reason" class="field field--reason"><?php echo $reason ?></textarea></td>
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

    include_once("footer.php");
?>