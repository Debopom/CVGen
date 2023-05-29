<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="faq.css">
  <link rel="stylesheet" href="background.css">
  <title>FAQ</title>
  <div> <?php
        include("header.php");
        ?>
  </div>
</head>

<body>
  <div class="centerplease">
    FAQ
  </div>
  <br>

  <div class="content">
    <div>
      <input type="checkbox" id="question1" name="q" class="questions">
      <div class="plus">+</div>
      <label for="question1" class="question">
        Does it cost money to use CVGen.com?
      </label>
      <div class="answers">
        No. It is completely free to use CVGen.
      </div>
    </div>

    <div>
      <input type="checkbox" id="question2" name="q" class="questions">
      <div class="plus">+</div>
      <label for="question2" class="question">
        Is my Resume also available for download in pdf?
      </label>
      <div class="answers">
        Yes. After choosing the template you will get the option for downloading the pdf version of your CV
      </div>
    </div>

    <div>
      <input type="checkbox" id="question3" name="q" class="questions">
      <div class="plus">+</div>
      <label for="question3" class="question">
        Can I edit my Resume?
      </label>
      <div class="answers">
        Yes, you can. There is an option for editing your CV in the dashboard.
      </div>
    </div>
  </div>
</body>
<div> <?php
      include("footer.php");
      ?>
</div>

</html>