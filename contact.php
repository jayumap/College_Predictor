<?php
$connect = mysqli_connect("localhost", "root", "","login");
// get the post records
$CllgName = $_POST["CllgName"];
$Rank = $_POST["Rank"];
$Cutoff = $_POST['Cutoff'];
$Total_Faculty = $_POST["Total_Faculty"];
$Total_Fee = $_POST["Total_Fee"];
$Estd_Year = $_POST["Estd_Year"];
$Approval = $_POST["Approval"];
$Link=$_POST["Link"];
$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];
$Q6 = $_POST["Q6"];
$Q7 = $_POST["Q7"];
$Q8 = $_POST["Q8"];
$Q9 = $_POST["Q9"];
$Q10 = $_POST["Q10"];
$Q11 = $_POST["Q11"];
$Q12 = $_POST["Q12"];
$Q13 = $_POST["Q13"];
$Q14 = $_POST["Q14"];

if (isset($_POST['submit'])) {
  
    $filename = $_FILES["filename"]["name"];
    $tempname = $_FILES["filename"]["tmp_name"];   
	$target = "image/".basename($filename);

}

mysqli_query($connect,"INSERT INTO CollegeDataBase (id,CllgName,Rank,Cutoff,Total_Faculty,Total_Fee,Estd_Year,Approval,Link,filename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14)
		        VALUES ('0','$CllgName','$Rank','$Cutoff','$Total_Faculty',$Total_Fee,'$Estd_Year','$Approval','$Link','$filename','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11','$Q12','$Q13','$Q14')");
	
	if (move_uploaded_file($_FILES['filename']['tmp_name'], $target)) 	{
	  if(mysqli_affected_rows($connect) > 0){
		echo "College Added ";
	  echo "<a href=Registration.php> Go Back </a>";
	}
	  else {
		echo "Employee NOT Added<br />";
		echo mysqli_error ($connect);
    }
   }


?>