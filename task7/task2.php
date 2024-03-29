<?php
class TelegraphText
    {
    public $text;
    public $title;
    public $author;
    public $published;
    public $slug;
    public function __construct()
    {
        $this->author = 'Владыка смерти';
        $this->slug = 'test_text_file';
        $this->published = date('r');
    }
    public function storeText()
    {
        $data = [
            'title' => $this->title,
            'text' => $this->text,
            'author' => $this->author,
            'published' => $this->published
        ];
        file_put_contents($this->slug, serialize($data));
    }
    public function loadText()
    {
        if (filesize($this->slug) > 0 ){
            $data = unserialize(file_get_contents($this->slug));
            $this->title = $data['title'];
            $this->text = $data['text'];
            $this->author = $data['author'];
            $this->published = $data['published'];
        }
        return $this->text;
    }
    public function editText($newTitle, $newText)
    {
        $this->title = $newTitle;
        $this->text = $newText;
    }
}
$telegraph = new TelegraphText();
$telegraph->editText('Заголовок', 'Текст');
$telegraph->storeText();
$telegraph->loadText();
print_r($telegraph);