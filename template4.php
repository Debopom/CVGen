
<?php
session_start();
require 'dbconnect.php';
$user_id= $_SESSION['id'];
$query = "SELECT * FROM form AS f WHERE f.user_id=$user_id";
$result = $conn->query($query);


$row = $result->fetch_assoc();
$first_name = $row ['fname'];
$last_name = $row ['lname'];
$number = $row ['phnnum'];
$email = $row ['emailad'];
$address = $row ['address'];
$nationality = $row ['nationality'];
$blood = $row ['blood'];
$gender = $row ['gender'];
$obj = $row ['Obj'];
$image = $row ['file'];

$sql_ed = "SELECT * FROM education WHERE user_id = $user_id ";


$rs = $conn-> query($sql_ed);

$sql_skills = "SELECT * FROM skill WHERE user_id = $user_id ";


$rs_skill = $conn-> query($sql_skills);

$sql_exp= "SELECT * FROM experience WHERE user_id = $user_id ";


$rs_exp = $conn-> query($sql_exp);

$sql_honor= "SELECT * FROM honors WHERE user_id = $user_id ";


$rs_honor = $conn-> query($sql_honor);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cv.css">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="background.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--Get your own code at fontawesome.com-->
    <title>Template4</title>
</head>
<body>
<div><?php
            include("header.php");
            ?></div>
<div style = "text-align: center;"><button id="pdfButton" onclick="makepdf()" style = "height: 50px;"><b>Click here to Generate PDF</b></button></div><br><br>
<div id="maindiv">   
    <page size="A4">

        <div class="banner">

        <div  class="N">
                <h1  id="head" class="Name"> <?php echo $first_name ?> <?php echo $last_name ?></h1> 

                
        </div>

            <div class="image">  
            <img src=<?php echo $image?> alt="" style="width:200px;height:200px;float:right;border-radius: 50%;">
            
            </div>

        </div>
        
        <div class="flex-container">

            <div  class="left">
                

                <div class="contact">
                    <div  >
                <?php echo $number ?><br>
                 <?php echo $email ?> <br>
                <?php echo $address ?> <br>
                        
                    
                </div>

                </div>
                <div class="skills">
                    <h1 id="head"> SKILLS</h1>
                    <ul id="skills">
                        <?php
                        while($data = mysqli_fetch_array($rs_skill)){?>
                            <li style="display:inline"><?php echo $data['sname'] ; ?></li>
                        <?php
                        }
                        ?>
                    </ul>

                </div>
                <div class="education">
                    <h1 id="head"> EDUCATION</h1>
                    
                    
                            <?php
                        while($data = mysqli_fetch_array($rs)){?>
                        <h4><?php echo $data['elevel'] ; ?></h4>
                        <p><strong>Institution:</strong> <?php echo $data['einstitute'] ; ?><br>
                        <strong>Result:</strong> <?php echo $data['eresult'] ; ?><br>
                        <strong>passing Year:</strong> <?php echo $data['epassyear'] ; ?><br></p>
                        <?php
                        }
                        ?>
                </div>


            </div>

            <div class="right"> 
                <div class="profile">
                <h1 id="head"> PROFILE</h1>
                <p ><?php echo $obj ?></p>
            </div>
            <div  class="exp">
                <h1 id="head"> EXPERIENCE</h1>
                    <div id="exp_align">
                    <?php
                        while($data = mysqli_fetch_array($rs_exp)){?>
                        <h3><?php echo $data['exdesignation'] ; ?></h3>
                        <p>  <?php echo $data['excompany'] ; ?> </p>
                        <p class="time"> <?php echo $data['exstart']?>- <?php echo $data['exend'] ; ?></p>
                        <p style="line-height:4x;"> <?php echo $data['description'] ; ?></p><br>
                    <?php
                        }?>
                    </div>
                <div id="list">
                <?php
                while($data = mysqli_fetch_array($rs_skill)){?>
                    <li style="display:inline"><?php echo $data['sname'] ; ?></li>
                <?php
                }
                ?>
            </ul>
            </div>
                
                
                
            </div>
        </div>
    </page>
</div>
<div>
<?php
    include("footer_about.php");
    ?>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
    </script>
    <!--JSPDF CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/polyfills.umd.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js" integrity="sha512-UcDEnmFoMh0dYHu0wGsf5SKB7z7i5j3GuXHCnb3i4s44hfctoLihr896bxM0zL7jGkcHQXXrJsFIL62ehtd6yQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>

</body>

</html>
<script>
    function makepdf(){
        var element = document.getElementById('maindiv');
        html2pdf(element, {
        margin:       0,
        filename:     'myfile.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
        });
     }

        
</script>