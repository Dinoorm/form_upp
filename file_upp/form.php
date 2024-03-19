<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Form</title>
</head>
<body>
<div class="container">
<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $birthdate = $_POST['birthdate'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    
    move_uploaded_file($image_tmp, "uploads/$image");
    
    echo "<h2>PHP FORM:</h2>";
}
?>

<form method="post" enctype="multipart/form-data">
    <label for="fname">First Name:</label><br>
    <input type="text" id="fname" name="fname" required><br><br>
    
    <label for="lname">Last Name:</label><br>
    <input type="text" id="lname" name="lname" required><br><br>
    
    <label for="birthdate">Birth Date:</label><br>
    <input type="text" id="birthdate" name="birthdate" required><br><br>

    <input type="file" id="image" name="image" accept="image/*" required><br><br>
    
    <input type="submit" name="submit" value="Show">
</form>

<?php 
{
    echo "<p>$fname</p>";
    echo "<p>$lname</p>";
    echo "<p>$birthdate</p>";
    echo "<p><img src='uploads/$image' width='150' height='150'></p>";
}
?>
</div>
</body>
</html>