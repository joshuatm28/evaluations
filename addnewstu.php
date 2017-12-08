<?php
error_reporting(0);
include 'connection.php';
$kiw = $_POST['persid'];
$aa= $_POST['addlastname'];
$bb= $_POST['addfirstname'];
$cc= $_POST['addmiddle'];
$dd= $_POST['addsuffix'];
$ee= $_POST['bdate'];
$ff= $_POST['age'];
$gg= $_POST['citizenship'];
$hh= $_POST['pdate'];
$sa= $_POST['gender'];
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
$aaa1= $_POST['campus'];
$bbb= $_POST['course'];
$ccc= $_POST['awards'];
$innovation = $_POST['innovation'];
$teamwork = $_POST['teamwork'];
$multitasking = $_POST['multitasking'];
$workethics = $_POST['workethics'];
$selfmotivation = $_POST['selfmotivation'];
$create_problem_solving = $_POST['create_problem_solving'];
$critical_thinking =$_POST['critical_thinking'];
$decision_making =$_POST['decision_making'];
$stress_tolerance =$_POST['stress_tolerance'];
$planning_organizing = $_POST['planning_organizing'];
$social_perceptiveness = $_POST['social_perceptiveness'];
$english_functional_skills = $_POST['english_functional_skills'];
$english_comprehension = $_POST['english_comprehension'];
$math_functional_skill = $_POST['math_functional_skill'];
$problem_solving =$_POST['problem_solving'];
$fff= $_POST['carpentry'];
$ggg= $_POST['masonry'];
$hhh= $_POST['welding'];
$iii= $_POST['auto_mechanic'];
$jjj= $_POST['plumbing'];
$kkk= $_POST['driving'];
$lll= $_POST['gardening'];
$mmm= $_POST['tailoring'];
$nnn= $_POST['photography'];
$ooo= $_POST['hairdressing'];
$ppp= $_POST['cooking'];
$qqq= $_POST['baking'];
$rrr= $_POST['others'];


$sql = "INSERT INTO personal (lastname,firstname,middle,suffix,bdate,placebdate,age,gender,civil,citizenship,height,weight,presadd1,presadd2,presadd3,presadd4,permadd1,permadd2,permadd3,permadd4,landline,primob,secmob,email,empstat,highed,yeargrad,school,course,awards,innovation,teamwork,multitasking,workethics,selfmotivation,create_problem_solving,critical_thinking,decision_making,stress_tolerance,planning_organizing,social_perceptiveness,english_functional_skills,english_comprehension,math_functional_skill,problem_solving,carpentry,masonry,welding,auto_mechanic,plumbing,driving,gardening,tailoring,photography,hairdressing,cooking,baking,others,campus)

VALUES ('$aa','$bb','$cc','$dd','$ee','$hh','$ff','$sa','$ii','$gg','$rr','$ss','$jj','$kk','$ll','$mm','$nn','$oo','$pp','$qq','$vv','$ww','$xx','$tt','$uu','$yy','$zz','$aaa','$bbb','$ccc','$innovation','$teamwork','$multitasking','$workethics','$selfmotivation','$create_problem_solving','$critical_thinking','$decision_making','$stress_tolerance','$planning_organizing','$social_perceptiveness','$english_functional_skills','$english_comprehension','$math_functional_skill','$problem_solving','$fff','$ggg','$hhh','$iii','$jjj','$kkk','$lll','$mmm','$nnn','$ooo','$ppp','$qqq','$rrr','$aaa1')";

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
