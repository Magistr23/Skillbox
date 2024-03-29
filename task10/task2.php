<?php
include 'task1.php';
abstract class Storage
{
    abstract function create(TelegraphText $text);
    abstract function read($slug);
    abstract function update($slug, $title, $text);
    abstract function delete($slug);
    abstract function list();

}
abstract class View
{
    public $Storage;

    public function __construct($Storage, $slug)
    {
        $this->Storage = $Storage;
        $this->slug = $slug;
    }

    abstract public function displayTextById($id);
    abstract public function displayTextByUrl($url);

}
abstract class User
{
    protected $id;
    protected $name;
    protected $role;

    abstract protected function getTextsToEdit();

}
class FileStorage extends Storage
{
    public function create(TelegraphText $text): string
    {
        $i = 1;
        $fileName = $text->slug . '_' .  date('r');
        while (file_exists($fileName)) {
            $fileName = $text->slug . '_' . $i . '_' . date('r');
            $i ++;
        }
        $text->slug = $fileName;
        file_put_contents($fileName, serialize($text));
        return $text->slug;
    }

    public function read($slug)
    {
        if (file_exists($slug)) {
            $data = file_get_contents($slug);
            $arr = unserialize($data);
            foreach ($arr as $value) {
                echo $value . PHP_EOL;
            }
        }
    }

    public function update($slug, $title, $text)
    {
        if (file_exists($slug)) {
            $data = file_get_contents($slug);
            $arr = unserialize($data);
            $arr['title'] = $title;
            $arr['text'] = $text;
            $arr['published'] = date('r');
            file_put_contents($slug, serialize($arr));
        }
    }

    public function delete($slug)
    {
        unlink($slug);
    }

    public function list(): array
    {
        $list = [];
        $array = scandir(getcwd());
        $array = array_slice($array, 2, null);
            foreach ($array as $file) {
                $list[] = $file;
            } return $list;
    }
}

$crud = new FileStorage();
$crud->update('test_text_file', '123','456');
