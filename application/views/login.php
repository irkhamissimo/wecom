<div class="container">
	<div class="row  ">
		<div class="col-md-6">
			<h2>Sistem Perusahaan Weecom</h2>
			<h3>Pengelolaan Karyawan & digital presensi</h3>

			<div class="akses-button">
				<?php
				echo anchor('user/login', 'LOGIN', ['class' => 'btn btn-outline-primary']);
				echo anchor('user/register', 'REGISTER', ['class' => 'btn btn-outline-primary']);
				?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card frame-form-weecom">
				<div class="card-header">Login</div>

				<div class="card-body">
					<?php
					echo form_open(base_url('user/login'), ['class' => 'form-weecom']);
					?>

					<div class="form-group row">
						<label for="email" class="col-3">Email</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'email',
								'id' => 'email',
								'class' => 'form-control',
								'value' => set_value('email'),
								'placeholder' => 'Email',
							];
							echo form_input($data);
							echo form_error('email');
							?>
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-3">Password</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'password',
								'id' => 'password',
								'class' => 'form-control',
								'placeholder' => 'Password'
							];
							echo form_password($data);
							echo form_error('password');
							?>
						</div>
					</div>
					<?php
					echo form_submit('submit', 'Masuk', ['class' => 'btn btn-primary btn-block']);
					echo form_close();
					?>

				</div>
			</div>


		</div>

	</div>
</div>
