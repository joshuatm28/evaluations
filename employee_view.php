<?php 
include_once('connection.php');

 $data = "select * from personal order by persid asc";  
 $result = mysqli_query($conn, $data);  
 ?>  
 <!DOCTYPE html>  
 <html>  
  <head>  
   <title>All Employee Records Using PHP and MySql</title>  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
   <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <style type="text/css">
  @media print{
    .print{
      display:none;
    }
    .btn-primary{
      display:none;
    }
    .form-control{
      display:none;
    }
  }
  </style>
  </head>
  <body>  
    <br /><br />
     <a href = "students.php" class = "btn btn-primary"><i class = "fa fa-fw fa-mail-reply"></i>Back</a>
     <div class="col-lg-12">
      <div class="col-lg-2 pull-right"> <form> 
         <select name="sortBy" class = " form-control"> 
          <option value="persid">ID</option> 
          <option value="campus">Campus</option> 
          <option value="school">School</option> 
         </select> 
         <button type="submit" class=" btn btn-primary" formaction="?" formmethod="post">Submit</button> 
        </form> 
        </div>
     </div>
    
    <h2 align="center">All Records</h2><hr /><br />
	
	<?php
	 $sortBy = (isset($_POST['sortBy']) ? $_POST['sortBy'] : NULL); 
 $sql = 'SELECT * FROM personal'; 
 if($sortBy != NULL) { 
  $sql .= ' ORDER BY ' . $sortBy; 
 } 
 $result = mysqli_query($conn, $sql) or die(mysqli_error()); 
 if(mysqli_num_rows($result) > 0) { 
  echo ' 
  <table class="table  table-bordered table-hover" border="1" align="center" id="dataTables" > 
   <tr>  
                   <th>ID</th>
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
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Present Address</th>
                    <th>Permanent Address</th>
                    <th>Landline</th>
                    <th>Mobile number #1</th>
                    <th>Email Address</th>
                    <th>Employment Status</th>
                    <th>Highest Educational Level</th>
                    <th>Year Graduated/ Last Attended</th>
                    <th>School/ University</th>
                    <th>Course/ Program</th>
                    <th>Awards/ Honors Received</th>
                    <th>Century Skill</th>
                    <th>Technical Skill</th>
                    <th>Status</th>
                    <th>Campus</th>
      </tr> '; 
  while($row = mysqli_fetch_array($result)) { 
   echo ' 
   <tr> 
    <td>' . $row['persid'] . '</td> 
    <td>' . $row['lastname'] . '</td> 
    <td>' . $row['firstname'] . '</td>   
         <td>'. $row["middle"].'</td>  
         <td>'. $row["suffix"].'</td>
         <td>'. $row["bdate"].'</td>
         <td>'. $row["placebdate"].'</td>
         <td>'. $row["age"].'</td>
         <td>'. $row["gender"].'</td>
         <td>'. $row["civil"].'</td>
         <td>'. $row["citizenship"].'</td>
         <td>'. $row["height"].'</td>
         <td>'. $row["weight"].'</td>
         <td>'. $row["presadd1"].",".$row["presadd2"].",".$row["presadd3"].",".$row["presadd4"].'</td>
         <td>'. $row["permadd1"].",".$row["permadd2"].",".$row["permadd3"].",".$row["permadd4"].'</td>
         <td>'. $row["landline"].'</td>
         <td>'. $row["primob"]." / ".$row["secmob"].'</td>
         <td>'. $row["email"].'</td>
         <td>'. $row["empstat"].'</td>
         <td>'. $row["highed"].'</td>
         <td>'. $row["yeargrad"].'</td>
         <td>'. $row["school"].'</td>
         <td>'. $row["course"].'</td>
         <td>'. $row["awards"].'</td>
         <td>'. $row["innovation"]." ".
         $row["teamwork"]." ".
         $row["workethics"]." ".
         $row["selfmotivation"]." ".
         $row["create_problem_solving"]." ".
         $row["critical_thinking"]." ".
         $row["decision_making"]." ".
         $row["stress_tolerance"]." ".$row["planning_organizing"]."".
         $row["social_perceptiveness"]." ".
         $row["english_functional_skills"]." ".
         $row["english_comprehension"]." ".
         $row["math_functional_skill"]." ".
         $row["problem_solving"].'</td>
         <td>'. $row["carpentry"]." ".
         $row["masonry"]." ".
         $row["welding"]." ".
         $row["auto_mechanic"]." ".
         $row["plumbing"]." ".
         $row["driving"]." ".
         $row["gardening"]." ".
         $row["tailoring"]." ".
         $row["photography"]." ".
         $row["hairdressing"]." ".
         $row["cooking"]." ".
         $row["baking"]." ".
         $row["others"].'
         </td>
         <td>'. $row["status"].'</td>
         <td>'. $row["campus"].'</td>

 
   </tr>'; 
  } 
  echo ' 
  </table>'; 
 } 
?> 

 

   
	 
   <!--  <table border="0" align="center">
      <tbody>
      <tr>
      <td>
        <form action="employee_total_print.php" method="get" enctype="multipart/form-data">
          <button type="submit" name="eprint">PRINT</button>   
        </form>
      </td>
      </tr>
      </tbody>
    </table> -->     
    <br />
	
    <!-- <table class="table  table-bordered table-hover" border="1" align="center" id="dataTables" >  
      <tr>  
                   <th>ID</th>
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
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Present Address</th>
                    <th>Permanent Address</th>
                    <th>Landline</th>
                    <th>Mobile number #1</th>
                    <th>Email Address</th>
                    <th>Employment Status</th>
                    <th>Highest Educational Level</th>
                    <th>Year Graduated/ Last Attended</th>
                    <th>School/ University</th>
                    <th>Course/ Program</th>
                    <th>Awards/ Honors Received</th>
                    <th>Century Skill</th>
                    <th>Technical Skill</th>
                    <th>Status</th>
                    <th>Campus</th>
      </tr>  
     <?php  
     
     while($row = mysqli_fetch_array($result))  
     {  
     ?>  
      <tr>  
         <td><?php echo $row["persid"]; ?></td>  
         <td><?php echo $row["lastname"]; ?></td>  
         <td><?php echo $row["firstname"]; ?></td>  
         <td><?php echo $row["middle"]; ?></td>  
         <td><?php echo $row["suffix"]; ?></td>
         <td><?php echo $row["bdate"]; ?></td>
         <td><?php echo $row["placebdate"]; ?></td>
         <td><?php echo $row["age"]; ?></td>
         <td><?php echo $row["gender"]; ?></td>
         <td><?php echo $row["civil"]; ?></td>
         <td><?php echo $row["citizenship"]; ?></td>
         <td><?php echo $row["height"]; ?></td>
         <td><?php echo $row["weight"]; ?></td>
         <td><?php echo $row["presadd1"].",".$row["presadd2"].",".$row["presadd3"].",".$row["presadd4"]; ?></td>
         <td><?php echo $row["permadd1"].",".$row["permadd2"].",".$row["permadd3"].",".$row["permadd4"]; ?></td>
         <td><?php echo $row["landline"]; ?></td>
         <td><?php echo $row["primob"]." / ".$row["secmob"]; ?></td>
         <td><?php echo $row["email"]; ?></td>
         <td><?php echo $row["empstat"]; ?></td>
         <td><?php echo $row["highed"]; ?></td>
         <td><?php echo $row["yeargrad"]; ?></td>
         <td><?php echo $row["school"]; ?></td>
         <td><?php echo $row["course"]; ?></td>
         <td><?php echo $row["awards"]; ?></td>
         <td><?php echo $row["innovation"]." ".
         $row["teamwork"]." ".
         $row["workethics"]." ".
         $row["selfmotivation"]." ".
         $row["create_problem_solving"]." ".
         $row["critical_thinking"]." ".
         $row["decision_making"]." ".
         $row["stress_tolerance"]." ".$row["planning_organizing"]."".
         $row["social_perceptiveness"]." ".
         $row["english_functional_skills"]." ".
         $row["english_comprehension"]." ".
         $row["math_functional_skill"]." ".
         $row["problem_solving"]; ?></td>
         <td><?php echo $row["carpentry"]." ".
         $row["masonry"]." ".
         $row["welding"]." ".
         $row["auto_mechanic"]." ".
         $row["plumbing"]." ".
         $row["driving"]." ".
         $row["gardening"]." ".
         $row["tailoring"]." ".
         $row["photography"]." ".
         $row["hairdressing"]." ".
         $row["cooking"]." ".
         $row["baking"]." ".
         $row["others"]; ?>
         </td>
         <td><?php echo $row["status"]; ?></td>
         <td><?php echo $row["campus"]; ?></td>

      </tr>  
     <?php  
     }  
     ?>  
     </table>  -->
  </body>  

 </html>