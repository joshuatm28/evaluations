<?php
include 'connection.php';
$aa= $_POST['addlastname'];
$bb= $_POST['addfirstname'];
$cc= $_POST['addmiddle'];
$dd= $_POST['addsuffix'];
$ee= $_POST['bdate'];
$ff= $_POST['age'];
$gg= $_POST['citizenship'];
$hh= $_POST['pdate'];
$fff= $_POST['gender'];
$ii= $_POST['status'];
$jj= $_POST['present'];
$kk= $_POST['present1'];
$ll= $_POST['present2'];
$mm= $_POST['present3'];
$nn= $_POST['perma'];
$oo= $_POST['perma1'];
$pp= $_POST['perma2'];
$qq= $_POST['perma3'];
$rr= $_POST['height'];
$ss= $_POST['weight'];
$tt= $_POST['email'];
$uu= $_POST['empstatus'];
$vv= $_POST['landline'];
$ww= $_POST['mobile'];
$xx= $_POST['mobile1'];
$yy= $_POST['hieduc'];
$zz= $_POST['ygla'];
$aaa= $_POST['school'];
$bbb= $_POST['course'];
$ccc= $_POST['awards'];
$eee= $_POST['techskill'];

$sql = "INSERT INTO personal (lastname,firstname,middle,suffix,bdate,placebdate,age,gender,civil,citizenship,height,weight,presadd1,presadd2,presadd3,presadd4,permadd1,permadd2,permadd3,permadd4,landline,primob,secmob,email,empstat,highed,yeargrad,school,course,awards,techskill)
VALUES ('$aa','$bb','$cc','$dd','$ee','$hh','$ff','$fff','$ii','$gg','$rr','$ss','$jj','$kk','$ll','$mm','$nn','$oo','$pp','$qq','$vv','$ww','$xx','$tt','$uu','$yy','$zz','$aaa','$bbb','$ccc','$eee')";

if (mysqli_query($conn, $sql)) {
	?>
		<script>
			window.alert('Research added successfully!');
			window.location.href="student_add.php"
		</script>
	<?php
}

mysqli_close($conn);
?>
