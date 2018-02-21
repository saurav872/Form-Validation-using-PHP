<?php 
$nameErr = $emailErr = $genderErr = $websiteErr = $phonenumberErr = "";
$name = $email = $gender = $comment = $website = $phonenumber = "";
if (isset($_POST["submit"])){
 include_once("validation.php");   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
        <div id="form">
                <h2>form validation</h2>
                <p><span class="error">* required field.</span></p>
                <form method="post" action="">  
                  Name: <input type="text" name="name" value="<?php echo $name;?>">
                  <span class="error">* <?php echo $nameErr;?></span>
                  <br><br>
                  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                  <span class="error">* <?php echo $emailErr;?></span>
                  <br><br>
                  Phone Number: <input type="text" name="phonenumber" value="<?php echo $phonenumber;?>">
                  <span class="error">* <?php echo $phonenumberErr;?></span>
                  <br><br>
                  Website: <input type="text" name="website" value="<?php echo $website;?>">
                  <span class="error">* <?php echo $websiteErr;?></span>
                  <br><br>
                  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                  <br><br>
                  Gender:
                  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                  <span class="error">* <?php echo $genderErr;?></span>
                  <br><br>
                  <input type="submit" name="submit" value="submit">  
                </form>
                </div>
                
</body>
</html>