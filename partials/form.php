
<div class="container form">

	<div class="col-xs-12 col-lg-10 col-lg-offset-1 contact">

		<form action="index.php" method="post">
			<!-- <div class="row row-sm-offset"> -->


			<div class="col-xs-12 col-md-6">

				<div class="form-group">
					<p>Name:</p>
					<input id="name" value="<?= !empty($name) ? $name : '' ?>" type="text" class="form-control" placeholder="Full name" name="name" ><span class="text-danger"><?= !empty($errors['name']) ? $errors['name'] : '' ?> </span>
				</div>
			</div>

			<div class="col-xs-12">
				<div class="form-group">
					<p>Email:</p>
					<input id="email" value="<?= !empty($email) ? $email : '' ?>" type="email" class="form-control" placeholder="Email address" name="email" ><span class="text-danger"><?= !empty($errors['email']) ? $errors['email'] : '' ?> </span>
				</div>
			</div>

			<div class="col-xs-12 ">
				<div class="form-group">
					<p>Address:</p>
					<input id="address" value="<?= !empty($address) ? $address : '' ?>" type="text" class="form-control" placeholder="Full Address" name="address" ><span class="text-danger"><?= !empty($errors['address']) ? $errors['address'] : '' ?> </span>
				</div>
			</div>



			<div class="col-xs-12 ">
				<div class="form-group">
					<p>Enter your Date of Birth:</p>
					<input id="dob" value="<?= !empty($dob) ? $dob : '' ?>" type="date" class="form-control"  name="dob" ><span class="text-danger"><?=!empty($errors['dob']) ? $errors['dob'] : '' ?> </span>
				</div>
			</div>

			<div class="col-xs-12 col-md-3">
				<div class="form-group">
					<p>Age:</p>
					<input id="age" value="<?= !empty($age) ? $age : '' ?>" type="text" class="form-control" placeholder="Your Age" name="age" ><span class="text-danger"><?= !empty($errors['age']) ? $errors['age'] : '' ?> </span>
				</div>
			</div>
			<div class="col-xs-12">
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
				</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="form-group">
					<p>Gender:</p>
					<select id="gender" name="gender">
						<option value="----" disabled selected>----</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
					<br>
					<span class="text-danger"><?= !empty($errors['gender']) ? $errors['gender'] : '' ?> </span>
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