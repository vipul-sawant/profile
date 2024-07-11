<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Sports Profile </title>
 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha512-XLo6bQe08irJObCc86rFEKQdcFYbGGIHVXcfMsxpbvF8ompmd1SNJjqVY5hmjQ01Ts0UmmSQGfqpt3fGjm6pGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<h1 id="profile"> Sports Profile </h1>
	<div class="container-fluid">

		<h3 class="headings"> Personal Details : </h3>

		<div class="row">
			<div class="col-sm-12">
				<form name="profile"
				      method="post"
				      action=""
				      enctype="multipart/form-data"
				      onsubmit="return valid()">
				
				<label for = "name"> Name : </label>
	            <input type = "text"
	                   name = "name"
	                   id = "name"
	                   class="elements">       
			</div>
			<!-- closing of name row -->
		</div>

		<div class="row">
			<div class="col-sm-6">
				<label for ="dob"> Date Of Birth : </label>
			    <input class="elements" type="date" name="dob" id="dob" required="" class="elements">
			</div>

			<div class="col-sm-6">
				<label for = "age"> Age : </label>
			    <input type = "text"
			           name = "age"
			           id = "age" 
			           class="elements">
			</div>
			<!-- closing of dob and age row -->
		</div>

		<div class="row">
			<div class="col-sm-6">
				<label for = "contact"> Contact Number : </label>
			    <input type = "text"
			           name = "contact"
			           id = "contact"
			           class="elements">
			</div>

			<div class="col-sm-6">
				<label for = "marry"> Marital Status : </label>
			    <select id = "marry" name="marry" required="" class="elements">
				 <option hidden disabled selected value> -- select an option -- </option>
				 <option value = "marrried"> Married </option>
				 <option value = "unmarried"> Un - Married </option>
			    </select>
			</div>
			<!-- closing of contact and marry row -->
		</div>

		<div class="row">
			<div class="col-sm-12">
				<label for="address"> Address : </label>
		        <textarea id = "address"
		                  name='address'
		                  class="elements"></textarea>
			</div>
			<!-- closing of address row -->
		</div>

		<div class="row">
			<div class="col-sm-12">
				<label for = "class"> Last Qualification : </label>
	            <input type = "text"
	                   name = "class"
	                   id = "class"
	                   class="elements">
			</div>
			<!-- closing of class row -->
		</div>

				<h3 class="headings"> Work Details : </h3>
				<p class="option"> (Leave blank if none) </p>

		<div class="row">
			<div class="col-sm-6">

				<label for="cname"> Company name : </label>
			    <input type="text"
			           name="cname"
			           id="cname"
			           class="elements">
			</div>

			<div class="col-sm-6">
				<label for="desig"> Designation : </label>
			    <input type="text"
			           name="desig"
			           id="desig"
			           class="elements">
			</div>
			<!-- closing of cname and desig row -->
		</div>

		<div class="row">
			<div class="col-sm-12">
				<label for="busy"> Business : </label>
			    <input type="text"
			           name="busy"
			           id="busy"
			           class="elements">
			</div>
			<!-- closing of busy row -->
		</div>

		<h3 class="headings"> Sports you play : </h3>

		<div class="row">
		<div class="col-sm-12">
			<label for="sports"> Sports : </label>
			<input type="text"
			       name="sports"
			       id="sports"
			       class="elements">
		</div>
		<!-- closing of sports -->
	    </div>

			<h3 class="headings"> Documents To Upload : </h3>

	    <div class="row">
		<div class="col-sm-4">

			<label for="img1" class=""> Photo : </label>
			<input type="file"
			       name="img1"
			       id="img1" />
		</div>

		<div class="col-sm-4  ">
			<label for="img2" class=""> Photo Id : </label>
			<input type="file"
			       name="img2"
			       id="img2">
		</div>

		<div class="col-sm-4 ">
			<label for="img3" class=""> Address proof : </label>
			<input type="file"
			       name="img3"
			       id="img3">
		</div>
		<!-- closing of uploads -->
	    </div>

	    <h3 class="headings">  Achivements In Sports : </h3>
	    <p class="option"> (it is optional) </p>

	    <div class="row">
		<div class="col-sm-6">
			<input type="text" name="achivet" id="achivet" class="elements">
			<p class="img" id="achivet_p"></p>
		</div>

		<div class="col-sm-6">
			<input type="file" name="img4" id="img4">
			<p class="option" class="">  upload achivements photos here  if any  <br>  </p>
		</div>
		<!-- closing of achivements row -->
	    </div>

	    <div class="row">
		<div class="col-sm-12" id="submit-btn">
			<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-bg btn-success text-bold">
		</div>
		<!-- closing of submit row -->
	    </div>
	</form>
		<!-- closing of container div -->
	</div>

	<script type="text/javascript" src="valid.js"></script>

</body>
</html>

<?php
include_once 'conn.php';
if (isset($_POST['submit']))
{
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$age = $_POST['age'];
	$contact = $_POST['contact'];
	$marry = $_POST['marry'];
	$address = $_POST['address'];
	$cname = $_POST['cname'];
	$desig = $_POST['desig'];
	$busy = $_POST['busy'];
	$sports = $_POST['sports'];
	
	$img1 = $_FILES['img1']['name'];
	$img2 = $_FILES['img2']['name'];
	$img3 = $_FILES['img3']['name'];

	$achivet = $_POST['achivet'];
	$img4 = $_FILES['img4']['name'];
	
	$dir = 'upload/';
	$valid = array('jpeg','jpg','png');

	$file1 = $dir.basename($img1);
	$file2 = $dir.basename($img2);
	$file3 = $dir.basename($img3);

	$type1 = strtolower(pathinfo($file1, PATHINFO_EXTENSION));
	$type2 = strtolower(pathinfo($file2, PATHINFO_EXTENSION));
	$type3 = strtolower(pathinfo($file3, PATHINFO_EXTENSION));

	if ($_FILES['img1']['error'] == 0 && $_FILES['img2']['error'] == 0 && $_FILES['img3']['error'] == 0)
		{
			if (file_exists($dir.$img1) || file_exists($dir.$img2) || file_exists($dir.$img3))
	          {
		         echo "<center> <h1 style = 'color:red'> file name taken please rename your photo documents </h1> </center>";
	          }

	          else
	          {
		         if ($_FILES['img4']['error'] == 0)
		         {
			        $file4 = $dir.basename($img4);
	                  $type = strtolower(pathinfo($file4, PATHINFO_EXTENSION));

	                  if (file_exists($dir.$img4))
	                  {
	          	        echo '<center> <h1 style="color:red"> Please rename your Achivement photo document this name is already taken </h1> </center>';
	                  }

	                  else
	                  {
	          	       if (in_array($type, $valid))
	          	       {
	          		      if (move_uploaded_file($_FILES['img4']['tmp_name'], $dir.$img4))
	          		      {
	          			     $sql_i = "insert into profile (name, date_of_birth, age, contact_no, marital_status, address, company_name, designation, business_name, sports_played, photo, photo_id, address_proof, achivements, achivements_photos) values ('$name', '$dob', '$age', '$contact', '$marry', '$address', '$cname', '$desig', '$busy', '$sports','$img1', '$img2', '$img3', '$achivet', '$img4')";
	          			     $add1 = mysqli_query($conn, $sql_i);

	          			     if (!$add1)
	          			     {
	          				    echo "<center> <h1 style = 'color:red'> Error : ".mysqli_error($conn)." </h1> </center>";
	          			     }
	          		      }
	          	       }

	                      else
	                      {
	               	      echo "<center> <h1 style = 'color:red'> please upload photo files in .jpg or .jpeg or .png </h1> </center>";
	                      }
	                  }
	               }

		          else if (in_array($type1, $valid)&& in_array($type2, $valid) && in_array($type3, $valid))
		               {
		     	         if (move_uploaded_file($_FILES['img1']['tmp_name'], $dir.$img1) &&
	                            move_uploaded_file($_FILES['img2']['tmp_name'], $dir.$img2) &&
	                            move_uploaded_file($_FILES['img3']['tmp_name'], $dir.$img3))
		                    {
		          	         $sql = "insert into profile (name, date_of_birth, age, contact_no, marital_status, address, company_name, designation, business_name, sports_played, photo, photo_id, address_proof, achivements) values ('$name', '$dob', '$age', '$contact', '$marry', '$address', '$cname', '$desig', '$busy', '$sports','$img1', '$img2', '$img3','$achivet')";
	                             $add2 = mysqli_query($conn, $sql);

	                             if (!$add2)
	                             {
	                    	        echo "<center> <h1 style = 'color:red'> Error : ".mysqli_error($conn)." </h1> </center>";
	                             }
	                         }
	                    }

	                    else
	                    {
	          	         echo "<center> <h1 style = 'color:red'> please upload photo files in .jpg or .jpeg or .png </h1> </center>";
	                    }
	          }
	     }

	     else
	     {
	     	echo "<center> <h1 style = 'color:red'> please upload all documents </h1> </center>";
	     } 
}
?>