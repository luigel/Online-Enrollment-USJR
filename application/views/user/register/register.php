<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Register</h1>
			</div>
			<?php
        //$attributes = array('id' => 'register-form');
      //  echo form_open('',$attributes)
      ?>
      <form action="" method="post" id="register-form">
				<div class="form-group">
					<label for="idnumber">ID Number</label>
					<input type="text" class="form-control" id="idnumber" name="idnumber" placeholder="ID Number">
				</div>
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="middlename">Middle Name</label>
          <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name">
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
        </div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm password</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
				</div>
				<div class="form-group" style="margin-bottom: 70px">
					<input type="submit" id="register-button" class="btn btn-default" value="Register">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->
