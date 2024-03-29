<?php

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['raw_text'])) {
    if (filesize('php://input') != 0) {
        $requestText = json_decode(file_get_contents('php://input'), true);
        preg_replace(
            '/(http:\/\/|https:\/\/)?(www)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w\.-\?\%\&]*)?/i',
            '<a href="\1\2\3.\4$5">\\2\\3.\\4</a>',
            $requestText
        );
        $text = ['formatted_text' => $requestText];
        echo json_encode($text);
    } else {
        http_response_code(500);
    }
}

