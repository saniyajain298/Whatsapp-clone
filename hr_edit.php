<?php
 include("dbcon.php");
 $id=$_GET['id'];
 $data="Select * from hr where id= $id";
 $result=mysqli_query($con,$data);
 $a=mysqli_fetch_array($result);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title></title>
</head>
<body>
	
	<div class="container">
		<div class="row">
			

			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1 class="btn btn-primary form-control text-center">HR EDIT DATA</h1>
				<form method="post" action="hr_insert.php">
					<div class="mb-3">
						<label>Username</label>
						<input type="text" value="<?php echo $a['id']?>" name="uname" class="form-control">
					</div>
					<div class="mb-3">
						<label>College</label>
						<br>
						<select name="college" class="form-control">
							<option>select college</option>
							<option

							<?php
								if ($a['college']=='ITM') {
									echo 'selected';
								}
							?>

							>ITM</option>
							<option
							<?php
								if ($a['college']=='MITS') {
									echo 'selected';
								}
							?>
							>MITS</option>
							<option
							<?php
								if ($a['college']=='RJIT') {
									echo 'selected';
								}
							?>
							>RJIT</option>
						</select>
					</div>
					<div class="mb-3">
						<label>Gender</label>
						<br>
						<input type="radio" name="gender" value="male">Male
						<br>
						<input type="radio" name="gender" value="female">Female
					</div>
					<div class="mb-3">
						<label>Education</label>
						<br>
						<input type="checkbox" name="edu[]" value="10">10th
						<br>
						<input type="checkbox" name="edu[]" value="11">11th
						<br>
						<input type="checkbox" name="edu[]" value="12">12th
						<br>
						<input type="checkbox" name="edu[]" value="be">BE
					</div>
					<div class="mb-3">
						<label>Address</label>
						<textarea name="address"  class="form-control"></textarea>
					</div>

					<button  class="btn btn-primary" type="submit">Submit</button>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div><!--row end-->
    </div><!--container end-->




</body>
</html>