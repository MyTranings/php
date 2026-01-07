<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scrach - Array Loops Challenges</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl mb-2">Array Loops Challenges</h1>
    </div>
  </header>

  <div class="container mx-auto">
    <div class="p-4 mt-4">
      <p class="mb-4"><a href="tasks/25-array-loop-challenges.md" target="_blank">Tasks readme</a></p>

      <h2 class="font-semibold">Challenge 1: Multiplication Table</h2>

      <p>Create a multiplication table using a nested `for` loop. The table should look like this:
        ```
        1 x 1 = 1
        1 x 2 = 2
        1 x 3 = 3
        1 x 4 = 4
        1 x 5 = 5
        1 x 6 = 6
        1 x 7 = 7
        1 x 8 = 8
        1 x 9 = 9
        1 x 10 = 10
        2 x 1 = 2
        2 x 2 = 4
        2 x 3 = 6
        2 x 4 = 8
        ...
        10 x 10 = 100
        ```
      </p>

      <?php
      // for ($i = 1; $i <= 10; $i += 1) {
      //   for ($j = 1; $j <= 10; $j += 1) {
      //     echo "<p>$i x $j = " . ($i * $j) . "</p>";
      //   }
      // }
      ?>
    </div>
    <div class="p-4 mt-4">
      <h2 class="font-semibold">Challenge 2: Get The Sum Of An Array</h2>

      <p>In the last challenge video, I had you get the sum of an array by manually adding the numbers together. In this
        challenge, I want you to use a `foreach` loop. You can also do this with a `for` loop for extra credit.</p>

      <?php
      $numbers = [1, 2, 3, 4, 5];

      $sum = 0;

      foreach ($numbers as $number) {
        $sum += $number;
      }

      echo "<p>$sum</p>";

      # For loop version
      $sum1 = 0;

      for ($i = 0; $i < count($numbers); $i += 1) {
        $sum1 += $numbers[$i];
      }

      echo $sum1;
      ?>
    </div>
    <div class="p-4 mt-4">
      <h2 class="font-semibold">Challenge 3: Student Average Grade</h2>

      <ol>
        <li>Create a multidimensional array called $students that contains associative arrays for each student.</li>
        <li>Each student's associative array should have keys for 'name' and 'grades'.</li>
        <li>The 'grades' key should have an array of numeric grades for that student.</li>
        <li>Use a foreach loop to iterate over each student in the $students array.</li>
        <li>Calculate the average grade for each student and display their name and average grade.</li>
      </ol>

      <?php
      $students = [
        [
          'name' => 'John',
          'grades' => [85, 90, 92, 88]
        ],
        [
          'name' => 'Jane',
          'grades' => [95, 88, 91, 87]
        ],
        [
          'name' => 'Joe',
          'grades' => [75, 82, 79, 88]
        ]
      ];

      foreach ($students as $student) {
        $total = 0;
        foreach ($student['grades'] as $grade) {
          $total += $grade;
        }
        $avg = $total / count($student['grades']);
        echo "<p>" . $student['name'] . "'s average grade is: " . round($avg, 2) . "</p>";
      }
      ?>
    </div>
  </div>
</body>

</html>