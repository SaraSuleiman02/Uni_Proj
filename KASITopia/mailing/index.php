<?php require("script.php"); ?>
<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
        $response= "all fields are required";
    } else {
        $response = sendMail($_POST['email'], $_POST['subject'], $_POST['message']);
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <label>enter your email</label>
        <input type="email" name="email" value="">

        <label>enter a subject</label>
        <input type="text" name="subject" value="">

        <label>enter your msg</label>
        <textarea name="message"></textarea>

        <button type="submit" name="submit">submit</button>

        <?php
        if ($response == "success") {
        ?>
            <p class="success">EMail sent</p>
        <?php
        } else {
        ?>
            <p class="error"><?php echo @$response; ?></p>
        <?php
        }
        ?>

    </form>

</body>

</html>