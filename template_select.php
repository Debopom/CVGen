<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="template_select.css">
    <link rel="stylesheet" href="background.css">
</head>
<body>
        <?php
        include("header.php");
        ?>
    <div id = "templates">

    
        <h1 style="margin-left: 40%;">Please select a template </h1>
        <a href="template4.php"><img id= "template_im" src="template_images\template-4.png" alt=""></a>
        <a href="template2.php"><img id= "template_im" src="template_images\image.png" alt=""></a>
        <a href="template3.php"><img id= "template_im" src="template_images\template_ss.JPG" alt=""></a>
        <a href="template1.php"><img id= "template_im" src="template_images\Pictorial-CV-template.jpg" alt=""></a>
        
    </div>
    <?php include 'footer_about.php'; ?>
</body>
</html>