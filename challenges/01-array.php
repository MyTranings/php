<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scrach - Array Challenges</title>
</head>

<body>
  <h2>Array Challenges</h2>

  <p><a href="/tasks/20-array-challenges.md" target="_blank">Tasks</a></p>

  <h3>Challenge 1: Sum of an array</h3>

  <p>Create an array of numbers and get the sum without using array_sum(). Then print out 'The sum of the {amount}
    numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be The sum of the 5 numbers is:
    15.</p>

  <?php
  $numbers = [1, 2, 3, 4, 5];
  $sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];

  echo "<p>The sum of the numbers is: $sum</p>";
  ?>

  <hr>

  <h3>Challenge 2: Colors array</h3>

  <p>
    $colors = ['red', 'blue', 'green', 'yellow'];
  <ul>
    <li>Reverse the $colors array</li>
    <li>Add 'purple' and 'orange' to the end of the array</li>
    <li>Add the color 'pink' as the second color in the array.</li>
    <li>Remove the last element of the array</li>
  </ul>
  You should end up with the following array:

  <code>
    ['yellow', 'pink', 'green', 'blue', 'red', 'purple'];
  </code>
  </p>

  <?php
  $colors = ['red', 'blue', 'green', 'yellow'];

  $colors = array_reverse($colors);

  array_push($colors, 'purple');

  $colors = array_merge($colors, ['orange']);

  array_splice($colors, 1, 0, 'pink');

  array_pop($colors);

  print_r($colors)
  ?>

  <hr>

  <h3>Challenge 3: Job Listing Array</h3>

  <ol>
    <li> Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title,
      company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array
      of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.</li>
    <li>2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the
      others.</li>
    <li>3. Print out the job_title of the second job listing in the array.</li>
    <li>4. Print out the first skill of the third job listing in the array.</li>
  </ol>

  <?php
  $job_listings = [
    [
      'id' => 1,
      'job_title' => 'PHP Developer',
      'company' => 'ABC Company',
      'contact_email' => 'john@email.com',
      'contact_phone' => '123-456-7890',
      'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
    ],
    [
      'id' => 2,
      'job_title' => 'Web Designer',
      'company' => 'XYZ Company',
      'contact_email' => 'steph@email.com',
      'contact_phone' => '123-456-7890',
      'skills' => ['Photoshop', 'Illustrator', 'HTML', 'CSS']
    ],
    [
      'id' => 3,
      'job_title' => 'Web Developer',
      'company' => '123 Company',
      'contact_email' => 'peter@email.com',
      'contact_phone' => '123-456-7890',
      'skills' => ['Python', 'PostgreSQL', 'JavaScript', 'HTML', 'CSS']
    ]
  ];

  array_push($job_listings, [
    'id' => 4,
    'job_title' => 'Full Stack Developer',
    'company' => '456 Company',
    'contact_email' => 'jane@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['Node.js', 'MongoDB', 'React', 'HTML', 'CSS']
  ]);

  echo "<p>The job title of the second listing is: " . $job_listings[1]['job_title'] . "</p>";

  echo "<p>The first skill of the third listing is: " . $job_listings[2]['skills'][0] . "</p>";

  ?>

</body>

</html>