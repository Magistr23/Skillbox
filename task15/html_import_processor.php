<form method="post" action="html_import_processor.php">
    <label>
        <input type="search" name="input_url" list="url_list" placeholder="Адрес">
        <input type="submit" value="отправить">
    </label>
</form>

<?php
header("Content-Type: application/json");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['input_url'])) {
        $ch = curl_init($_POST['input_url']);
        curl_setopt($ch, CURLOPT_URL, $_POST['input_url']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, false);
        $json = ['raw_text' => json_encode(curl_exec($ch))];
        if (curl_exec($ch) === false) {
            echo 'Ошибка' . curl_exec($ch);
            exit;
        }
        $html = curl_exec($ch);

    } elseif (isset($_POST['url']) && strlen($_POST['url'] === 0)) {
        http_response_code(500);
    }
    if (isset($json)) {
        $url = './HtmlProcessor.php';
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        $response = curl_exec($ch);
        curl_close($ch);

        echo $response;
    }
