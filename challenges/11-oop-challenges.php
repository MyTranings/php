<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scrach - Challenges</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl mb-2">OOP Challenges</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <h2 class="font-semibold">Challenge 1: </h2>

    <p><a href="/challenges/11-oop-challenges.md" target="_blank">Tasks</a></p>

    <h3>Challenge 1</h3>


    <?php
    class Article
    {
      public $title;
      public $content;
      private $published = false;

      public function __construct($title, $content)
      {
        $this->title = $title;
        $this->content = $content;
      }

      public function publish()
      {
        $this->published = true;
      }

      function isPublished()
      {
        return $this->published;
      }
    }

    $art1 = new Article("My First Article", "This is the content of my first article.");
    $art2 = new Article("My Second Article", "This is the content of my second article.");

    $art1->publish();

    var_dump($art1->isPublished()); // true
    var_dump($art2->isPublished()); // false
    ?>

    <hr>

    <h3>Challenge 2</h3>
    <?php
    class StringUtility
    {
      static function shout($string)
      {
        return strtoupper($string) . '!';
      }

      static function whisper($string)
      {
        return strtolower($string) . '.';
      }

      static function repeat($string, $times = 2)
      {
        return str_repeat($string, $times);
      }
    }

    $str = new StringUtility();
    var_dump($str->shout('Hello World'));
    var_dump($str->whisper('Hello World'));
    var_dump($str->repeat('Hello World', 5));
    var_dump($str->repeat('Hello World'));
    ?>
  </div>
</body>

</html>