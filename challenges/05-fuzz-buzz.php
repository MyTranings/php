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
      <h1 class="text-3xl mb-2">Fuzz Buzz Challenges</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <h2 class="font-semibold">Challenge: Fuzz Buzz</h2>

    <p><a href="/challenges/06-fuzz-buzz.md" target="_blank">Tasks readme</a></p>

    <p>Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the
      number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print
      “FizzBuzz”. Remember, you can use the modulus operator to check if a number is divisible by another number.</p>

    <?php
    for ($i = 1; $i <= 100; $i += 1) {
      if ($i % 3 === 0 && $i % 5 === 0) {
        echo "<p>FizzBuzz</p>";
      } elseif ($i % 3 === 0) {
        echo "<p>Fizz</p>";
      } elseif ($i % 5 === 0) {
        echo "<p>Buzz</p>";
      } else {
        echo "<p>$i</p>";
      }
    }

    ?>
  </div>
</body>

</html>