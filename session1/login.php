<?php
$hasRequest = false;
if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    $hasRequest = true;
    $validLogin = ($_REQUEST['username'] == 'Ramy' && $_REQUEST['password'] == '123');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>UserName:<input name="username" type="text" /></label><br />
        <label>Password:<input name="password" type="password" /></label><br />
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($hasRequest && !$validLogin) {
        echo '<p style="color:red;">Invalid username or password</p>';
    } else if ($hasRequest && $validLogin) {
        echo '<p style="color:green;">Your balance is 10000000</p>';
    }
    ?>

    <?php
    if ($hasRequest && !$validLogin) {
    ?>
        <p style="color:red;">Invalid username or password</p>
    <?php
    } else if ($hasRequest && $validLogin) {
    ?>
        <p style="color:green;">Your balance is 10000000</p>
    <?php
    }
    ?>
    <!-- <?php echo '<br /> Test' ?>
    <?= '<br /> Test' ?> -->
</body>

</html>