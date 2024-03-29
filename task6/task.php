<?php
$title = 'Заголовок';
$text = 'Текст';
$textStorage[] = ['title' => $title, 'text' => $text];
function add($title, $text, &$textStorage)
{
    $textStorage[] = ['title' => $title, 'text' => $text];
}
function remove($index, &$textStorage): bool
{
    if (isset($textStorage[$index])){
        unset($textStorage[$index]);
        return true;
    } else {
        return false;
    }
}
function edit($index, $title, $text, &$textStorage): bool
{
    if (isset($textStorage[$index])){
        $textStorage[$index] = ['title' => $title, 'text' => $text];
        return true;
    } else {
        return false;
    }
}
add('Заголовок1', 'Текст1', $textStorage);
add('Заголовок2', 'Текст2', $textStorage);
remove(0, $textStorage);
remove(5, $textStorage);
if (isset($textStorage[readline(' ')])){
    edit(readline(' '), readline(' '), readline(' '), $textStorage);
    var_dump($textStorage);
    return true;
} else {
    return false;
}