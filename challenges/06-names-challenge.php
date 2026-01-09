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
      <h1 class="text-3xl mb-2">Names Challenge</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <p><a href="/tasks/06-names-challenge.md" target="_blank">Tasks</a></p>
    <?php
    $names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];

    print_r($names);

    foreach ($names as $index => $name) {
      if ($name[0] === 'A') {
        continue;
      }

      echo strrev(strtolower($name)) . "<br>";
    }

    ?>
    <p></p>
  </div>
</body>

</html>