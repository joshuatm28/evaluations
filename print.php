<!DOCTYPE html>
<?php
 if(isset($_REQUEST['persid']))
    {
   $persid=$_REQUEST['persid'];
    }
      else
     {
    $persid=$_POST['persid'];
    }
 ?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>NSTP SYSTEM</title>
      <!-- Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


  <style type="text/css">
    th{
       font-size:12px!important;
    }
    td{
       font-size:12px;
    }
    @media screen and (max-width: 300px) {
        table {
            width: 67%;
            font-size: 15px;
        }
    }
    .header{
            background-color: grey;
            -webkit-print-color-adjust:exact;
        }
        .bg{
            background-color: #dcdcdc;
            -webkit-print-color-adjust:exact;
        }
    tr td{
            border: 1px solid #000 !important;
            height: 30px !important;
            text-transform:capitalize;
        }
   
</style>
</head>


        <table style="width: 100%" style = "border-collapse: collapse;">
        
        <?php    
            include('connection.php');                              
            $query1=mysqli_query($conn,"select * from personal  WHERE persid = '$persid'")or die(mysqli_error($conn));
            $row=mysqli_fetch_array($query1);
        ?>
        <tr>
            <td colspan="14"><h1 style="text-align: center">PERSONAL DATA SHEET</h1></td>
        </tr>
        <tr class="header">
            <td colspan="14">I. PERSONAL INFORMATION</td>
        </tr>
        <tr>
            <td class="bg">2.</td>
            <td colspan="1" class="bg">LASTNAME</td>
            <td colspan="2"><?php echo $row['lastname'];?></td>
            <td colspan="1" class="bg">FIRSTNAME</td>
            <td colspan="1"><?php echo $row['firstname'];?></td>
            <td class="bg" colspan="1">MIDDLE NAME</td>
            <td colspan="1"><?php echo $row['middle'];?></td>
            <td colspan="1" class="bg">SUFFIX (JR. / SR.)</td>
            <td colspan ="3"> <?php echo $row['suffix'];?></td>
        </tr>
        <tr>
            <td class="bg"></td>
            <td class="bg" colspan="1">DATE OF BIRTH (mm/dd/yyyy)</td>
            <td colspan="2"><?php echo date("m/d/Y",strtotime($row['bdate']));?></td>
            <td colspan="1" class="bg">PLACE OF BIRTH</td>
            <td colspan="3"><?php echo $row['placebdate'];?></td>
            <td colspan="1" class="bg">AGE</td>
            <td colspan="3"><?php echo $row['age'];?></td>
            <!-- <td colspan="2"><input type="checkbox"> Filipino</td>
            <td colspan="3"><input type="checkbox"> Dual</td> -->
        </tr>
        <tr>
            <td class="bg">3</td>
            <td class="bg" colspan="1">SEX</td>
            <td colspan="2"><?php $male="";$female=""; if ($row['gender']=="Male") $male="checked";if ($row['gender']=="Female") $female="checked";?><input type="checkbox" <?php echo $male;?>> Male
            </td>
            <td colspan="1" class="extend">
                 <input type="checkbox" <?php echo $female;?>> Female
            </td>
            <td class="bg" colspan="1">CIVIL STATUS</td>
            <td colspan="1">
            <?php 
                $single="";
                $married="";
                $widowed="";
                $separated=""; 
                $others=""; 
                if ($row['civil']=="Single") $single="checked";
                if ($row['civil']=="Married") $married="checked";
                if ($row['civil']=="Widow/Widower") $widowed="checked";
                if ($row['civil']=="Separated") $separated="checked";?>
            <input type="checkbox" <?php echo $single;?>> Single</td>
            <td colspan="1"> <input type="checkbox" <?php echo $married;?>> Married</td>
            <td colspan="1">
            <input type="checkbox" <?php echo $widowed;?>> Widowed</td>
            <td colspan="5"><input type="checkbox" <?php echo $separated;?>> Separated</td>
            <tr>
                <td class="bg">5.</td>
                <td class="bg" colspan="1">CITIZENSHIP</td>
                <td colspan="2" class="heading"><?php echo $row['citizenship'];?></td>
                <td colspan="1" class="bg">Present Address</td>
                <td colspan="2" class="center"><?php echo $row['presadd1']." / ".$row['presadd2'];?></td>
                <td colspan="1" class="bg">PERMANENT ADDRESS</td>
                <td colspan="3" class="center"><?php echo $row['permadd1']." / ".$row['permadd2'];?></td>
            </tr>
        </tr>
        <tr>
            <td class="bg">6.</td>
            <td colspan="2" class="bg">PERMANENT ADDRESS</td>
            <td colspan="1" class="center"><?php echo $row['permadd1']." / ".$row['permadd2'];?></td>
            <td class="bg" colspan="2">HEIGHT (m)</td>
            <td colspan="2"><?php echo $row['height'];?></td>
            <td class="bg" colspan="2">WEIGHT (kg)</td>
            <td colspan="2"><?php echo $row['weight'];?></td>
        </tr>
        <tr>
            <td class="bg">7.</td>
            <td colspan="2" class="bg">LANDLINE</td>
            <td colspan="1" class="center"><?php echo $row['landline'];?></td>
            <td class="bg" colspan="2">Mobile Number #1</td>
            <td colspan="2"><?php echo $row['primob'];?></td>
            <td class="bg" colspan="2">Mobile Number #2</td>
            <td colspan="3"><?php echo $row['secmob'];?></td>
        </tr>
        <tr>
            <td class="bg">8.</td>
            <td class="bg" colspan="2">EMAIL ADDRESS</td>
            <td colspan="3"><?php echo $row['email'];?></td>
            <td colspan="2" class="bg">EMPLOYMENT STATUS</td>
            <td colspan="6"><?php echo $row['empstat'];?></td>
        </tr>
        <tr>
            <td class="bg">9.</td>
            <td class="bg" colspan="2">HIGH EDUCATIONAL LEVEL</td>
            <td colspan="3"><?php echo $row['highed'];?></td>
            <td colspan="2" class="bg">YEAR GRADUATED/ LAST ATTENDED</td>
            <td colspan="6" class="center"><?php echo $row['yeargrad'];?></td>
        </tr>
        <tr>
            <td class="bg">10.</td>
            <td class="bg" colspan="2">SCHOOL / UNIVERSITY</td>
            <td colspan="1"><?php echo $row['school'];?></td>
            <td class="bg" colspan="2">CAMPUS</td>
            <td colspan="2"><?php echo $row['campus'];?></td>
            <td colspan="2" class="bg">COURSE</td>
            <td colspan="6" class="center"><?php echo $row['course'];?></td>
        </tr>
        
        <tr>
            <td class="bg">11.</td>
            <td colspan="2" class="bg">AWARDS / HONOR RECIEVED</td>
            <td colspan="11" class="center"><?php echo $row['awards'];?></td>
        </tr>
        <tr>
            <td class="bg">12.</td>
            <td class="bg" colspan="2">CENTURY SKILLS</td>
            <td colspan="1">
            <?php 
                $innovation="";
                $teamwork="";
                $multitasking="";
                $workethics=""; 
                $selfmotivation=""; 
                $create_problem_solving=""; 
                $critical_thinking="";
                $decision_making=""; 
                if ($row['innovation']=="Innovation") $innovation="checked";
                if ($row['teamwork']=="Teamwork") $teamwork="checked";
                if ($row['multitasking']=="Multitasking") $multitasking="checked";
                if ($row['workethics']=="Workethics") $workethics="checked";
                if ($row['selfmotivation']=="Selfmotivation") $selfmotivation="checked";
                if ($row['create_problem_solving']=="Create Problem Solving") $create_problem_solving="checked";
                if ($row['critical_thinking']=="Critical Thinking") $critical_thinking="checked";
                if ($row['decision_making']=="Decision Making") $decision_making="checked";
                ?>
            <input type="checkbox" <?php echo $innovation;?>> Innovation</td>
            <td colspan="1"> <input type="checkbox" <?php echo $teamwork;?>> Teamwork</td>
            <td colspan="1"><input type="checkbox" <?php echo $multitasking;?>> Multitasking</td>
            <td colspan="1"><input type="checkbox" <?php echo $workethics;?>> Workethics</td>
            <td colspan="1"><input type="checkbox" <?php echo $selfmotivation;?>> Selfmotivation</td>
            <td colspan="1"><input type="checkbox" <?php echo $create_problem_solving;?>> Create Problem Solving</td>
            <td colspan="1"><input type="checkbox" <?php echo $critical_thinking;?>> Critical Thinking</td>
            <td colspan="3"><input type="checkbox" <?php echo $decision_making;?>> Decision Making</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
            <?php 
                $stress_tolerance="";
                $planning_organizing="";
                $social_perceptiveness="";
                $english_functional_skills=""; 
                $english_comprehension=""; 
                $math_functional_skill=""; 
                $problem_solving=""; 
                if ($row['stress_tolerance']=="Stress Tolerance") $stress_tolerance="checked";
                if ($row['planning_organizing']=="Planning Organizing") $planning_organizing="checked";
                if ($row['social_perceptiveness']=="Social Perceptiveness") $social_perceptiveness="checked";
                if ($row['english_functional_skills']=="English Functional Skills") $english_functional_skills="checked";
                if ($row['english_comprehension']=="English Comprehension") $english_comprehension="checked";
                if ($row['math_functional_skill']=="Math Functional Skill") $math_functional_skill="checked";
                if ($row['problem_solving']=="Problem Solving") $problem_solving="checked";
                ?>
            <input type="checkbox" <?php echo $stress_tolerance;?>> Stress Tolerance</td>
            <td colspan="1"> <input type="checkbox" <?php echo $planning_organizing;?>> Planning Organizing</td>
            <td colspan="1"><input type="checkbox" <?php echo $social_perceptiveness;?>> Social Perceptiveness</td>
            <td colspan="1"><input type="checkbox" <?php echo $english_functional_skills;?>> English Functional Skills</td>
            <td colspan="2"><input type="checkbox" <?php echo $english_comprehension;?>> English Comprehension</td>
            <td colspan="1"><input type="checkbox" <?php echo $math_functional_skill;?>> Math Functional Skill</td>
            <td colspan="4"><input type="checkbox" <?php echo $problem_solving;?>> Problem Solving</td>
        </tr>
        <tr>
            <td class = "bg"></td>
            <td class="bg" colspan="2">TECHNICAL SKILLS</td>
            <td colspan="1">
            <?php 
                $carpentry="";
                $masonry="";
                $welding="";
                $auto_mechanic=""; 
                $plumbing=""; 
                $driving=""; 
                $gardening="";
                $tailoring=""; 
                if ($row['carpentry']=="Carpentry") $carpentry="checked";
                if ($row['masonry']=="Masonry") $masonry="checked";
                if ($row['welding']=="Welding") $welding="checked";
                if ($row['auto_mechanic']=="Auto Mechanic") $auto_mechanic="checked";
                if ($row['plumbing']=="Plumbing") $plumbing="checked";
                if ($row['driving']=="Driving") $driving="checked";
                if ($row['gardening']=="Gardening") $gardening="checked";
                if ($row['tailoring']=="Tailoring") $tailoring="checked";
                ?>
            <input type="checkbox" <?php echo $carpentry;?>> Carpentry</td>
            <td colspan="1"> <input type="checkbox" <?php echo $masonry;?>> Masonry</td>
            <td colspan="1"><input type="checkbox" <?php echo $welding;?>> Welding</td>
            <td colspan="1"><input type="checkbox" <?php echo $auto_mechanic;?>> Auto Mechanic</td>
            <td colspan="1"><input type="checkbox" <?php echo $plumbing;?>> Plumbing</td>
            <td colspan="1"><input type="checkbox" <?php echo $driving;?>> Driving</td>
            <td colspan="1"><input type="checkbox" <?php echo $gardening;?>> Gardening</td>
            <td colspan="4"><input type="checkbox" <?php echo $tailoring;?>> Tailoring</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
            <?php 
                $photography="";
                $hairdressing="";
                $cooking="";
                $baking=""; 
                $others="";  
                if ($row['photography']=="Photography") $photography="checked";
                if ($row['hairdressing']=="Hairdressing") $hairdressing="checked";
                if ($row['cooking']=="Cooking") $cooking="checked";
                if ($row['baking']=="Baking") $baking="checked";
                if ($row['others']=="Others") $others="checked";
                ?>
            <input type="checkbox" <?php echo $photography;?>> Photography</td>
            <td colspan="2"> <input type="checkbox" <?php echo $hairdressing;?>> Hairdressing</td>
            <td colspan="2"><input type="checkbox" <?php echo $cooking;?>> Cooking</td>
            <td colspan="1"><input type="checkbox" <?php echo $baking;?>> Baking</td>
            <td class="bg" colspan="1">Others:</td>
            <td colspan="4"><?php echo $row['others'];?></td>
        </tr>

<!-- <body>
    <div class="card-body">
    <div class="table-responsive table table-bordered table-striped" style="font-size:12px" >
        <table  width="3" border="0" cellspacing="0"  cellpadding="0" class="table table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Suffix</th>
                    <th>Date of Birth</th>
                    <th>Place of Birth</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Civil Status</th>
                    <th>Citizenship</th>
                    <th>Present Address</th>
                    <th>Permanent Address</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Landline</th>
                    <th>Mobile number #1</th>
                    <th>Mobile number #2</th>
                    <th>Email Address</th>
                    <th>Employment Status</th>
                    <th>Highest Educational Level</th>
                    <th>Year Graduated/ Last Attended</th>
                    <th>School/ University</th>
                    <th>Course/ Program</th>
                    <th>Awards/ Honors Received</th>
                    <th>Century Skill</th>
                    <th>Technical Skill</th>
                </tr>
            </thead>
            <tbody>
                <?php                                   
                    $query1=mysqli_query($conn,"select * from personal ORDER BY persid DESC")or die(mysqli_error($conn));
                    while ($row=mysqli_fetch_array($query1)){
                        $persid = $row["persid"];  
                ?>  
                    <tr>
                        <td style="text-transform:capitalize;"><?php echo $row['lastname']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['firstname']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['middle']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['suffix']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['bdate']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['placebdate']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['age']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['gender']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['civil']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['citizenship']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['presadd1']; ?>, <?php echo $row['presadd2']; ?>, <?php echo $row['presadd3']; ?>, <?php echo $row['presadd4']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['permadd1']; ?>, <?php echo $row['permadd2']; ?>, <?php echo $row['permadd3']; ?>, <?php echo $row['permadd4']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['height']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['weight']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['landline']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['primob']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['secmob']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['email']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['empstat']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['highed']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['yeargrad']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['school']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['course']; ?></td>
                        <td style="text-transform:capitalize;"><?php echo $row['awards']; ?></td>
                        <td style="text-transform:capitalize;">
                            <?php echo $row['innovation'];?>
                            <?php echo $row['teamwork']; ?>
                            <?php echo $row['multitasking']; ?>
                            <?php echo $row['workethics']; ?>
                            <?php echo $row['selfmotivation']; ?>
                            <?php echo $row['create_problem_solving']; ?>
                            <?php echo $row['critical_thinking']; ?>
                            <?php echo $row['decision_making']; ?>
                            <?php echo $row['stress_tolerance']; ?>
                            <?php echo $row['planning_organizing']; ?>
                            <?php echo $row['social_perceptiveness']; ?>
                            <?php echo $row['english_functional_skills']; ?>
                            <?php echo $row['english_comprehension']; ?>
                            <?php echo $row['math_functional_skill']; ?>
                            <?php echo $row['problem_solving']; ?>
                        </td>
                        <td style="text-transform:capitalize;">
                            <?php echo $row['carpentry']; ?>
                            <?php echo $row['masonry']; ?>
                            <?php echo $row['welding']; ?>
                            <?php echo $row['auto_mechanic']; ?>
                            <?php echo $row['plumbing']; ?>
                            <?php echo $row['driving']; ?>
                            <?php echo $row['gardening']; ?>
                            <?php echo $row['tailoring']; ?>
                            <?php echo $row['photography']; ?>
                            <?php echo $row['hairdressing']; ?>
                            <?php echo $row['cooking']; ?>
                            <?php echo $row['baking']; ?>
                            <?php echo $row['others']; ?>
                        </td>
                        
                        

                    </tr>
                    <?php
                    }
                ?>
            </tbody>               
        </table>
    </div>
    </div>
</body> -->