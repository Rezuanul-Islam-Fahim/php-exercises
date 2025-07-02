<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $name = $email = $website = $gender = $comment = "";
    $name_err = $email_err = $website_err = $gender_err = $comment_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["name"])) {
            $name = test_input($_POST["name"]);

            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $name_err = "Name is not valid";
            }
        } else {
            $name_err = "Name is requried";
        }

        if (!empty($_POST["email"])) {
            $email = test_input($_POST["email"]);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = "Please enter a valid email";
            }
        } else {
            $email_err = "Email is required";
        }

        if (!empty($_POST["website"])) {
            $website = test_input($_POST["website"]);

            if (!preg_match(
                "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
                $website
            )) {
                $website_err = "Url is invalid";
            }
        }

        if (!empty($_POST["comment"])) {
            $comment = test_input($_POST["comment"]);
        }

        if (!empty($_POST["gender"])) {
            $gender = test_input($_POST["gender"]);
        } else {
            $gender_err = "Gender is required";
        }
    }

    function test_input($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h2>PHP Form Validation Example</h2>
        <p class="error">* required fields</p>
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $name_err; ?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $email_err; ?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $website_err; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="30"><?php echo $comment; ?></textarea>
        <br><br>
        Gender: <input type="radio" name="gender" value="Male" <?php if (!empty($gender) && $gender == 'Male') echo "checked"; ?>>Male
        <input type="radio" name="gender" value="Female" <?php if (!empty($gender) && $gender == 'Female') echo "checked"; ?>>Female
        <span class="error">* <?php echo $gender_err; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Your Input:</h2>
    <?php
    if (!empty($name)) echo "<b>" . $name . "</b><br/>";
    if (!empty($email)) echo "<b>" . $email . "</b><br/>";
    if (!empty($website)) echo "<b>" . $website . "</b><br/>";
    if (!empty($comment)) echo "<b>" . $comment . "</b><br/>";
    if (!empty($gender)) echo "<b>" . $gender . "</b><br/>";
    ?>
</body>

</html>