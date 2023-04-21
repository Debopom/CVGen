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
    <link rel="stylesheet" href="cvstyle.css">
    
    <title>Document</title>

</head>
<body>
<div style = "text-align: center;"><button id="pdfButton" onclick="makepdf()" style = "height: 50px;"><b>Click here to Generate PDF</b></button></div>
    <div id="maindiv">
        <div id="leftdiv">
            <div id="picdiv">
                <img id="myimage" src="images\template_image.jpg" alt="image of a person">
            </div>
            
            <div id="leftmid">
                <h3>Education</h3>
                <hr><?php
                while($data = mysqli_fetch_array($rs)){?>
                <h4><?php echo $data['elevel'] ; ?></h4>
                <p><strong>Result:</strong> <?php echo $data['eresult'] ; ?><br />
                <strong>passing Year:</strong> <?php echo $data['epassyear'] ; ?><br /></p>
                <?php
                }
                ?>
                <h3>Honors and Rewards</h3>
                <hr>
                <p><?php while($data = mysqli_fetch_array($rs_honor)){?>
                    <h2><strong><?php echo $data['hposition'] ; ?></strong></h2>
                    <p><?php echo $data['hname'] ; ?> <?php echo $data['hplace'] ; ?><br />

                    <?php
                    }
                    ?>  </p>
            </div>

            <div id="leftbot">
                <h3>Contact</h3>
                <hr>
                <table id="contacttable">
                    <tr>
                        <th>Phone</th>
                    </tr>
                    <tr>
                        <td><?php echo $number ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td><?php echo $email ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                    </tr>
                    <tr>
                        <td><?php echo $address ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div id="rightdiv">
            <div id="rightmaindiv">
                <div id="nameprofessionaltitlediv">
                    <h2 class="nameprodiv"><?php echo $first_name ?>  <?php echo $last_name ?></h2>
                    <!-- <h4 class="nameprodiv">PROFESSIONAL TITLE</h4> -->
            </div>

            <div id="aboutmediv">
                <h4>About me</h4>
                <hr>
                <p class="aboutmeworkexperience"> <?php echo $obj ?></p>
            </div>

            <div id="workexperiencediv">
                <h4>Work Experience</h4>
                <hr>
                <table id="workexperiencetable" >
                <?php
                while($data = mysqli_fetch_array($rs_exp)){?>
                    <tr>
                        <td class="workexptd"><?php echo $data['exstart'] ; ?>-<?php echo $data['exend'] ; ?></td> <td><h5><?php echo $data['exdesignation'] ; ?></h5></td>
                    </tr>
                    <tr>
                        <td></td> <td><h5><?php echo $data['excompany'] ; ?></h5></td>
                    </tr>
                    <tr>
                        <td></td> <td><p class="aboutmeworkexperience">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel labore omnis repellat placeat id, possimus minima sit dolores pariatur modi distinctio eum voluptatem dolore quam aliquid facere asperiores illum autem?</p> </td>
                    </tr>
                    <?php
                 }
                 ?>
                </table>
            </div>

            <div id="softwareskilldiv">
               <h4>Skills</h4>
               <hr>
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
            
        </div>
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
   
</html>