<div class="animate-area">
<div class="container form">



	<div class="col-xs-12 col-lg-10 col-lg-offset-1 contact">
	
	

	
		<form action="index.php" method="post" onsubmit="return validate()">
			<!-- <div class="row row-sm-offset"> -->
			


			<h1 class="col-xs-12 heading">Contact Form</h1><br>
			<br>
			<br>


			<div class="col-xs-12 col-md-6">



				<div class="form-group">
					<p>Name:</p>
					<input id="name" value="<?= !empty($name) ? $name : '' ?>" type="text" class="form-control" placeholder="Full name" name="name" ><span class="text-danger"><?= !empty($errors['name']) ? $errors['name'] : '' ?> </span>
					<div id="nameError"></div>
				</div>
			</div>

			<div class="col-xs-12 col-md-6">
				<div class="form-group">
					<p>Email:</p>
					<input id="email" value="<?= !empty($email) ? $email : '' ?>" type="text" class="form-control" placeholder="Email address" name="email" ><span class="text-danger"><?= !empty($errors['email']) ? $errors['email'] : '' ?> </span>
					<div id="emailError"></div>
				</div>
			</div>

			<div class="col-xs-12 ">
				<div class="form-group">
					<p>Address:</p>
					<input id="address" value="<?= !empty($address) ? $address : '' ?>" type="text" class="form-control" placeholder="Full Address" name="address" ><span class="text-danger"><?= !empty($errors['address']) ? $errors['address'] : '' ?> </span>
					<div id="addressError"></div>
				</div>
			</div>



			<div class="col-xs-6">
				<div class="form-group">
					<p>Enter your Date of Birth:</p>
					<input id="date" value="<?= !empty($date) ? $date : '' ?>" type="date" class="form-control"  name="date" max="<?=date('Y-m-d')?>" onchange = "calculateAge()" ><span class="text-danger"><?=!empty($errors['date']) ? $errors['date'] : '' ?> </span>
					<div id="dateError"></div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6">
				<div class="form-group">
					<p>Age:</p>
					<input id="age" value="<?= !empty($age) ? $age : '' ?>" type="number" class="form-control" placeholder="Your Age" name="age" ><span class="text-danger"><?= !empty($errors['age']) ? $errors['age'] : '' ?> </span>
					<div id="ageError"></div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6">
				<div class="form-group">
					<p>Favourite Movie:</p>
					<select id="movie" name="movie">
						<option value="----" disabled selected>----</option>
						<option value="moonlight">Moonlight</option>
						<option value="lion">Lion</option>
						<option value="fiftyshades">Fifty Shades Darker</option>
						<option value="lalaland">La La Land</option>
					</select>
					<br>
					<span class="text-danger"><?= !empty($errors['movie']) ? $errors['movie'] : '' ?> </span>
					<div id="movieError"></div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="form-group">
					<p>Gender:</p>
					<select id="gender" name="gender">
						<option value="----" disabled selected>----</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
					<br>
					<span class="text-danger"><?= !empty($errors['gender']) ? $errors['gender'] : '' ?> </span>
					<div id="genderError"></div>
				</div>
			</div>


			

			<div class="col-xs-12 col-md-12">
				<div class="form-group">
					<input type="submit" class="btn btn-primary btn-lg"  value="Submit">
				</div>
			</div>
		</div>
	</form>



</div>

</div>
</div>