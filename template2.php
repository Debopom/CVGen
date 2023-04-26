
<?php
require 'dbconnect.php';
$query = "SELECT * FROM form AS f WHERE f.user_id=1";
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

$sql_ed = "SELECT * FROM education WHERE user_id = 1 ";


$rs = $conn-> query($sql_ed);

$sql_skills = "SELECT * FROM skill WHERE user_id = 1 ";


$rs_skill = $conn-> query($sql_skills);

$sql_exp= "SELECT * FROM experience WHERE user_id = 1 ";


$rs_exp = $conn-> query($sql_exp);

$sql_honor= "SELECT * FROM honors WHERE user_id = 1 ";


$rs_honor = $conn-> query($sql_honor);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="background.css">
    
  
</head>
<body>
<body>
<div style = "text-align: center;"><button id="pdfButton" onclick="makepdf()" style = "height: 50px;"><b>Click here to Generate PDF</b></button></div>
    <div id="page-wrap" style="width: 600px;">
    
        <img src="images\template_image.jpg"style="padding-top: 30px;" id="pic" />
    
        <div id="contact-info" class="vcard" style="padding-top: 30px;">
        
            <!-- Microformats! -->
        
            <h1 class="fn"><?php echo $first_name ?> <?php echo $last_name ?></h1>
        
            <p>
                Cell: <span class="tel"><?php echo $number ?> </span><br />
                Email: <a class="email" href=""><?php echo $email ?></a>
            </p>
        </div>
                
        <div id="objective">
            <p>
            <?php echo $obj ?>
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl style="width: 770px;">
            <dd class="clear"></dd>
            
            <dt>Education</dt>
            <dd style="width: 580px;"> <?php
            while($data = mysqli_fetch_array($rs)){?>
                <h2><?php echo $data['einstitute'] ; ?></h2>
                <p><strong>Major/Level:</strong> <?php echo $data['elevel'] ; ?><br />
                <strong>Result:</strong> <?php echo $data['eresult'] ; ?><br />
                <strong>passing Year:</strong> <?php echo $data['epassyear'] ; ?><br />
                </p>
        <?php
            }
        ?>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Skills</dt>
            <dd style="width: 580px;">
            <ul id="skills">
            <?php
            while($data = mysqli_fetch_array($rs_skill)){?>
                <li style="display:inline"><?php echo $data['sname'] ; ?></li>
            <?php
            }
            ?>
            </ul> 
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd style="width: 580px;">
            <?php
            while($data = mysqli_fetch_array($rs_exp)){?>
                <h2><?php echo $data['exdesignation'] ; ?><span> <?php echo $data['excompany'] ; ?>, <?php echo $data['exstart'] ; ?>-<?php echo $data['exend'] ; ?></span></h2>
                <ul>
                    <li>locale_get_primary_language</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deserunt ullam perspiciatis sequi doloremque eos soluta dicta tempora possimus maxime eius adipisci repellendus, velit laboriosam illum cum, sed labore. Excepturi?</li>
                    <li>Provided untimely deaths to all who opposed</li>
                </ul>
            <?php
            }
            ?>                
                
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Honors and Rewards</dt>
            <dd style="width: 580px;">
            <?php while($data = mysqli_fetch_array($rs_honor)){?>
            <h2><strong><?php echo $data['hposition'] ; ?></strong></h2>
            <p><?php echo $data['hname'] ; ?> <?php echo $data['hplace'] ; ?><br />

            <?php
            }
            ?>  
            
            <!-- <dd class="clear"></dd>
            
            <dt>References</dt>
            <dd style="width: 580px;">Available on request</dd>
            
            <dd class="clear"></dd> -->
        </dl>
        
        <div class="clear"></div>
    
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

<script>
    
    
    function makepdf(){
        var element = document.getElementById('page-wrap');
        html2pdf(element, {
        margin:       0,
        filename:     'myfile.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
        });
     }
          
        

        
</script>
   

</html>
</body>
</html>