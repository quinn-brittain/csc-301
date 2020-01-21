<?php
$first_name = "Quinn";
$name = "Quinn Brittain";
$email = "brittainq1@nku.edu";
$major = "CIT & Computer Science";
$school_year = "Sophomore";
$bio = "I was born in California in 2000, moved to northern Kentucky in 2009. Started college in 2018. Hobbies include: codding, video gaming, emulation, and music. Interested in design, organization, and various types of technology.";
$fun_fact = "I accidentally deleted this whole page when building it.";
$picture = "img/quinn-brittain.png";
$reasons = "The main reason I joined this course is because of degree requirement, but also because of previous web development experience.";
$expectations = "To become more familiarized with PHP.";
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
        <img class="mr-3 media-image" src="<?= $picture ?>" alt="<?= $name ?>">
        <div class="media-body">
          <h3 class="mt-2">Hi, I'm <?= $first_name ?>!</h3>
          <h5 class="mt-0"><?= $bio ?></h5>
          <h4 class="mt-4">Fun Fact</h4>
          <h5 class="mt-0"><?= $fun_fact ?></h5>
          <h4 class="mt-4">Reasons for Joining</h4>
          <h5 class="mt-0"><?= $reasons ?></h5>
          <h4 class="mt-4">Expectations for Course</h4>
          <h5 class="mt-0"><?= $expectations ?></h5>
          <h6 class="mt-5">Contact me at:</h6>
          <a href="mailto:<?= $email?>"><?= $email?></a>
        </div>
      </div>
      <h1 class="display-4"><?= $name ?></h1>
      <p class="lead mb-0"><?= $major ?> - <?= $school_year ?></p>
    </div>
  </div>
</body>

</html>