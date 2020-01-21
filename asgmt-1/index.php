<?php
$name = "Quinn Brittain";
$email = "brittainq1@nku.edu";
$major = "CIT & Computer Science";
$school_year = "2";
$bio = "Born in California in 2000, moved to northern Kentucky in 2009. Hobbies include: codding, video gaming, emulation, and music. Interested in design, organization, and various types of technology.";
$fun_fact = "I accidentally deleted this whole page";
$picture = "img/quinn-brittain.png";
$reasons = "Degree requirement and previous web development experience";
$expectations = "To become more familiarized with PHP";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Assignment 1</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="media">
        <img class="mr-3" src="<?= $picture ?>" alt="<?= $name ?>">
        <div class="media-body">
          <h5 class="mt-0">Media heading</h5>
        </div>
      </div>
      <h1 class="display-4">It's 2:15am</h1>
      <p class="lead">6 hours straight... I'm dead inside</p>
    </div>
  </div>
</body>

</html>