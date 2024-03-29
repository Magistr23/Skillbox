<?php

    include_once 'autoload.php';

?>
<form action="input_text.php" method="post">
    <div>
        <label for="Author">Автор</label>
        <input type="text" name="name" id="Author" placeholder="Введите имя">
    </div>
    <div>
        <label for="textarea">Текст</label>
        <textarea id="textarea"></textarea>
    </div>
    <div>
        <label for="email">Ваш email</label>
        <input type="email" name="email" id="email" placeholder="Введите электронную почту">
    </div>
</form>
