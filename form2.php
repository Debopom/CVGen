<?php
session_start();
require 'dbconnect.php';
$user_id= $_SESSION['id'];

$query = "SELECT * FROM form AS f WHERE f.user_id=$user_id";
$result = $conn->query($query);

$row = $result->fetch_assoc();

$sql_skills = "SELECT * FROM skill WHERE user_id = $user_id ";
$rs_skill = $conn->query($sql_skills);

$sql_ed = "SELECT * FROM education WHERE user_id = $user_id ";
$rs = $conn->query($sql_ed);

$sql_exp = "SELECT * FROM experience WHERE user_id = $user_id ";
$rs_exp = $conn->query($sql_exp);

$sql_honor = "SELECT * FROM honors WHERE user_id = $user_id ";
$rs_honor = $conn->query($sql_honor);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="background.css">
    <title>Form2</title>
</head>

<body>
<?php
            include("header.php");
            ?>
    <div id="div1">
        <button class="open-button" onclick="openForm()">Add your skills</button>
        <div class="form-popup" id="myForm">
            <form action="form_data.php" class="form-container" method="post">

                <h2>Added skills</h2>
                <?php
                while ($data = mysqli_fetch_array($rs_skill)) { ?>
                    <br>
                    <li style="display:list-item"><?php echo $data['sname']; ?> <a href="delete.php" class="dlt">Delete</a></li>

                <?php
                }
                ?>

                <h1>Add your skills</h1>
                <input type="text" placeholder="Add your skills" name="sname">

                <a href="form2.php"><button type="submit" name="submit2" class="btn">Done</button> </a>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

        <button class="open-button" onclick="edform()">Add your Educational Qualifications</button>
        <div class="form-popup" id="edform">
            <form action="form_data.php" class="form-container" method="post">

                <h2>Added Educational Qualifications</h2>
                <?php
                while ($data = mysqli_fetch_array($rs)) { ?>
                    <p><a href="delete.php" class="dlt">Delete</a>
                        <strong>Institution:</strong> <?php echo $data['einstitute']; ?><br />
                        <strong>Major/Level:</strong> <?php echo $data['elevel']; ?><br />
                        <strong>Result:</strong> <?php echo $data['eresult']; ?><br />
                        <strong>Passing Year:</strong> <?php echo $data['epassyear']; ?><br />
                    </p>
                <?php
                }
                ?>

                <h1>Add your Educational Qualifications*</h1>
                <input type="text" placeholder="Institution" name="einstitute">
                <input type="text" placeholder="Educational Level" name="elevel">
                <input type="text" placeholder="Major" name="emajor">
                <input type="text" placeholder="Result" name="eresult">
                <input type="text" placeholder="Passing Year" name="epassyear">

                <a href="form2.php"><button type="submit" name="submit3" class="btn">Done</button></a>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>

        </div>

        <button class="open-button" onclick="expForm()">Add your Experiences</button>
        <div class="form-popup" id="expForm">
            <form action="form_data.php" class="form-container" method="post">

                <h2>Added Experiences</h2>
                <?php
                while ($data = mysqli_fetch_array($rs_exp)) { ?>
                    <p><a href="delete.php" class="dlt">Delete</a>
                        <strong>Designation:</strong> <?php echo $data['exdesignation']; ?><br />
                        <strong>Company name:</strong> <?php echo $data['excompany']; ?><br />
                        <strong>Starting Date:</strong> <?php echo $data['exstart']; ?><br />
                        <strong>Ending Date:</strong> <?php echo $data['exend']; ?><br />
                    </p>
                    <!-- <ul>
                        <li>locale_get_primary_language</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deserunt ullam perspiciatis sequi doloremque eos soluta dicta tempora possimus maxime eius adipisci repellendus, velit laboriosam illum cum, sed labore. Excepturi?</li>
                        <li>Provided untimely deaths to all who opposed</li>
                    </ul> -->
                <?php
                }
                ?>

                <h1>Add your Experiences*</h1>
                <input type="text" placeholder="Company name" name="excompany">
                <input type="text" placeholder="Designation" name="exdesignation">
                <label for="exstart">Starting Date</label>
                <input type="date" placeholder="Starting Date" name="exstart">
                <input type="text" placeholder="Ending Date" name="exend">

                <a href="form2.php"><button type="submit" name="submit4" class="btn">Done</button></a>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

        <button class="open-button" onclick="honorForm()">Add your Honors & Awards</button>
        <div class="form-popup" id="honorForm">
            <form action="form_data.php" class="form-container" method="post">

                <h1>Added Honors & Awards</h1>
                <?php while ($data = mysqli_fetch_array($rs_honor)) { ?>
                    <!-- <p><a href="delete.php?dlt='.$data['user_id'].'" class="dlt">Delete</a> -->
                    <p><a href="delete.php" class="dlt">Delete</a>
                        <li><strong>Honors & Awards name:</strong> <?php echo $data['hname']; ?><br />
                            <strong>Institution name:</strong> <?php echo $data['hplace']; ?><br />
                            <strong>Position:</strong> <?php echo $data['hposition']; ?><br />
                        </li>
                    </p>
                <?php
                }
                ?>

                <h1>Add your Honors & Awards</h1>
                <input type="text" placeholder="Honors & Awards name" name="hname">
                <input type="text" placeholder="Institution name" name="hplace">
                <input type="text" placeholder="Position" name="hposition">

                <a href="form2.php"><button type="submit" name="submit5" class="btn">Done</button></a>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

        <a href="template_select.php"><button id="submit" type="submit" name="Done" value="Done">Done</button></a>
        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "inline-block";
            }

            function edform() {
                document.getElementById("edform").style.display = "inline-block";
            }

            function expForm() {
                document.getElementById("expForm").style.display = "inline-block";
            }

            function honorForm() {
                document.getElementById("honorForm").style.display = "inline-block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
                document.getElementById("edform").style.display = "none";
                document.getElementById("expForm").style.display = "none";
                document.getElementById("honorForm").style.display = "none";
            }
        </script>

    </div>
    <div> <?php
                include("footer.php");
                ?>
        </div>
</body>

</html>