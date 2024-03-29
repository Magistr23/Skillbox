<?php
session_start();
 if (!  isset($_SESSION['sent'])) {
     $_SESSION['sent'] = 0;
 } else {
     $_SESSION['sent']++;
 }

$sent = $_SESSION['sent'];


?>

<html>
<body>
<form method="post" action="/send_photo.php" enctype="multipart/form-data">
    <label>Файл был загружен <?php echo $sent; ?> раз</label>
    <input type="file" name="photo">
    <input type="submit" value="отправить">
</form>
</body>
</html>

<?php

if (isset($_FILES['photo'])) {
    try {
        move_uploaded_file($_FILES['photo']['tmp_name'], './' . $_FILES['photo']['name']);
        $format = $_FILES['photo']['name'];
        $ext = pathinfo('./' . $_FILES['photo']['name'], PATHINFO_EXTENSION);
        if ($ext !== 'png' && $ext !== 'jpg') {
            throw new Exception('Не тот формат');
        } elseif ($_SESSION['sent'] > 1) {
            throw new Exception('Слишком моного раз отправили файл');
        } elseif (filesize('./' . $_FILES['photo']['name']) == 2) {
            throw new Exception('файл большого размера');
        }

        header('./' . $_FILES['photo']['name']);

        ?>

        <img style="height: 100px;" src="<?php echo './' . $_FILES['photo']['name']; ?>">

<?php
    } catch (Exception $exception) {
        echo $exception->getMessage() . PHP_EOL;
    }
}
