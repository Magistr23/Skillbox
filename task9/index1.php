<?php
include 'task1.php';
interface LoggerInterface{

    public function logMessage($log);

    public function lastMessages($list);
}
interface EventListenerInterface{

    public function attachEvent();

    public function detouchEvent();
}

class LogError implements LoggerInterface
{
    public function logMessage($log)
    {
        $log = error_reporting(E_ALL);
        ini_set('Display_errors', 1);
        file_put_contents(__DIR__ . '\log.txt', $log . PHP_EOL , FILE_APPEND);
    }

    public function lastMessages($list, $array = [])
    {
        $array = [];
        $list = file_get_contents('\log.txt');
        $array[] = $list;
    }
}

class Event implements EventListenerInterface
{
    public function attachEvent()
    {
        event_buffer_set_callback(__METHOD__);
    }

    public function detouchEvent()
    {

    }
}

