<?php
class News
{
    private $id;
    private $title;
    private $text;
    private $data;
    public function __construct($id, $title, $text, $data)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->data = $data;
    }
    public function getNews($id)
    {
        $html = '<h2> News #' . $this->id . ' - "' . $this->title . '"</h2>' . '<p>' . $this->text . '</p>' . '<h5> date: ' . $this->data . '</h5>';
        return $html;
    }
    public function getNewsTitle()
    {
        $html = $this->title;
        return $html;
    }
}
// создаем новости
$New1 = new News(001, 'First news', 'Это первая новость', '20th June, 2018.');
$New2 = new News(002, 'Second news', 'Это вторая новость', '20th June, 2018.');
$New3 = new News(003, 'Third  news', 'Это третья новость', '20th June, 2018.');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<div>
    <!-- Выводим новость -->
    <?=$New1->getNews(001);?>
    <hr>
    <!-- Выводим список заголовков новостей -->
    <ul>Список всех новостей:
        <li><?=$New1->getNewsTitle();?></li>
        <li><?=$New2->getNewsTitle();?></li>
        <li><?=$New3->getNewsTitle();?></li>
    </ul>

    <a href="index.php">Вернуться к основному заданию</a>
</div>
</body>
</html>