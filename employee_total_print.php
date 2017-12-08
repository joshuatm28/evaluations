<?php
include_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Print</title>
  <style type="text/css">
  @media print{
    .print{
      display:none;
    }
  }
  </style>

</head>
<body>
<div style="text-align: center;">

    <table cellpadding="3" cellspacing="2" border="1" align="center">
      <caption>All Employees Records</caption>
      <thead>
        <tr>
          <td style="text-align: left;">S.No</td>
          <td style="text-align: left;">Name</td>
          <td style="text-align: left;">Gender</td>
          <td style="text-align: left;">Email</td>
          <td style="text-align: left;">Mobile No</td>
          <td style="text-align: left;">Address</td>
          <td style="text-align: left;">Join Date</td>
          </tr> 
      </thead>
      <tbody>
<?php
$sql = "select * from employee";
$data = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($data))
{

$emp_id=$row['emp_id'];
$emp_name=$row['emp_name'];
$emp_gender=$row['emp_gender'];
$emp_email=$row['emp_email'];
$emp_mobile=$row['emp_mobile'];
$emp_address=$row['emp_address'];
$emp_join_date=$row['emp_join_date'];

echo("
  <tr>
  <td style='text-align: left;'>$emp_id</td>
  <td style='text-align: left;'>$emp_name</td>
  <td style='text-align: left;'>$emp_gender</td>
  <td style='text-align: left;'>$emp_email</td>
  <td style='text-align: left;'>$emp_mobile</td>
  <td style='text-align: left;'>$emp_address</td>
  <td style='text-align: left;'>$emp_join_date</td>
  </tr>
  ");
;

}

?>
    </tbody>
    </table>
    </body>
    <br/><br/>
    <a href="#" class="print" onclick="window.print();">Print</a>
    </div>
</html>