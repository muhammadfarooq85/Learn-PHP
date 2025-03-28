
<?php 
include("./teacher.php");
include("./student.php");

$teacher = new teacher\JoiningDetails();
$teacher?->joiningDate();

echo "<br/>";
echo "<br/>";
echo "<br/>";

$student = new student\JoiningDetails();
$student?->admissionDate();


?>