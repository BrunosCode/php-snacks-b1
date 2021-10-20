<?php 
    $email = $_GET["email"];
    $valid = filter_var($email, FILTER_VALIDATE_EMAIL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h1>Email checker</h1>
    <form>
        <label for="email">Insert you email</label>
        <input type="text" name="email" id="email">
        <button type="submit">Submit</button>
    </form>
    <h2>
        <?php if($valid){ 
            echo "{$valid} is a valid email";
        } else {
            echo "this is not an email";
        }?>
    </h2>
</body>
</html>