
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
    <title>Template</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="background.css">
</head>
<body>
<div style = "text-align: center;"><button id="pdfButton" onclick="makepdf()" style = "height: 50px;"><b>Click here to Generate PDF</b></button></div>
<div id = "main">
    <div id = "boxes">

        <div id = "upperbox">
                <div class = "name">
                    <p class="fname"><strong><?php echo $first_name ?></strong></p>
                    <p class ="lname"><strong><?php echo $last_name ?></strong></p>
                    <p id = "obj"><?php echo $obj ?></p>
                </div>

            
            
            <img src=<?php echo $image?> alt="" style="width:200px;height:200px;float:right;">
            
            
        </div>
        <div id = "leftbox">
            <h2>Contact</h2>
            <h5><?php echo $address ?></h5>
            <h5><?php echo $email ?></h5>
            <h5><?php echo $number ?></h5>
            <br><br><br>
            <h2>Education</h2>
            <table id="education">
            <?php while($data = mysqli_fetch_array($rs)){ ?>
                <tr>
                    <td><?php echo $data['einstitute'] ; ?> <br> <?php echo $data['elevel'] ; ?> <br> <?php echo $data['eresult'] ; ?> </td>
                    <td width="47%" ><?php echo $data['epassyear'] ; ?></td>
                </tr>
            <?php
            }?>

            </table>
            <h2>Awards</h2>
            <?php while($data = mysqli_fetch_array($rs_honor)){?>
            <h4><strong><?php echo $data['hposition'] ; ?></strong></h4> 
            <p><?php echo $data['hname'] ; ?> <?php echo $data['hplace'] ; ?><br>

            <?php
            }
            ?>  
        </div>
        <div id = "rightbox">
            <h1>Career</h1>
            <table id="career">
                <?php while($data = mysqli_fetch_array($rs_exp)){?>
                    <tr>
                        <td id="job-title"> <br> <?php echo $data['exstart'] ; ?> - <br> <?php echo $data['exend'] ; ?></td>
                        <td><h3><?php echo $data['excompany'] ; ?></h3><h4><?php echo $data['exdesignation'] ; ?></h4><?php echo $data['description'] ; ?></td>
                    </tr>
                    <?php
                }?>

                </table>
                <h1>Skills</h1>
                <ul id="skills">
                <?php
                while($data = mysqli_fetch_array($rs_skill)){?>
                    <li style="display:inline"><?php echo $data['sname'] ; ?></li>
                <?php
                }
                ?>
                </ul>
        </div>
    </div>
    <iframe id="iframe1" style="width : 100% ; border:0;height:0" src="template1.php" frameborder="0"></iframe>
    
    
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
        var element = document.getElementById('main');
        html2pdf(element, {
        margin:       0,
        filename:     'myfile.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { dpi: 300, letterRendering: true },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
        });
     }
	    
          
        

        
</script>
</html>