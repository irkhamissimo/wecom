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
				<div class="card-header">Daftar Interview</div>

				<div class="card-body">
					<?php echo form_open(base_url('user/prosesRegister'), ['class' => 'form-weecom']); ?>
					
					<div class="form-group row">
						<label for="nama_depan" class="col-3">Nama Depan</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'nama_depan',
								'id' => 'nama_depan',
								'class' => 'form-control',
								'placeholder' => 'Nama Depan',
								'value' => set_value('nama_depan')
							];
							echo form_input($data);
							echo form_error('nama_depan');
							?>
						</div>
					</div>

					<div class="form-group row">
						<label for="nama_belakang" class="col-3">Nama Belakang</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'nama_belakang',
								'id' => 'nama_belakang',
								'class' => 'form-control',
								'placeholder' => 'Nama Belakang',
								'value' => set_value('nama_belakang')
							];
							echo form_input($data);
							echo form_error('nama_belakang');
							?>
						</div>
					</div>

					<div class="form-group row">
						<label for="email" class="col-3">Email</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'email',
								'id' => 'email',
								'class' => 'form-control',
								'placeholder' => 'Email',
								'value' => set_value('email')
							];
							echo form_input($data);
							echo form_error('email');
							?>
						</div>
					</div>
					<div class="form-group row">
						<label for="tanggal_lahir" class="col-3">Tanggal Lahir</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'tanggal_lahir',
								'id' => 'dob',
								'class' => 'form-control',
								'placeholder' => 'Tanggal Lahir',
								'value' => set_value('tanggal_lahir')
							];
							echo form_input($data);
							echo form_error('tanggal_lahir');
							?>
						</div>
					</div>
					<div class="form-group row">
						<label for="alamat" class="col-3">Alamat</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'alamat',
								'id' => 'alamat',
								'class' => 'form-control',
								'placeholder' => 'Alamat',
								'value' => set_value('alamat')
							];
							echo form_input($data);
							echo form_error('alamat');
							?>
						</div>
					</div>

					<div class="form-group row">
						<label for="telepon" class="col-3">Telepon</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'telepon',
								'id' => 'telepon',
								'class' => 'form-control',
								'placeholder' => 'Masukkan nomor telepon Anda',
								'value' => set_value('telepon')
							];
							echo form_input($data);
							echo form_error('telepon');
							?>
						</div>
					</div>
					<div class="form-group row">
						<label for="hp" class="col-3">Nomor Handphone</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'hp',
								'id' => 'hp',
								'class' => 'form-control',
								'placeholder' => 'Masukkan nomor HP Anda',
								'value' => set_value('hp')
							];
							echo form_input($data);
							echo form_error('hp');
							?>
						</div>
					</div>
					<div class="form-group row">
						<label for="jenis_kelamin" class="col-3">Jenis Kelamin</label>
						<div class="col-9">
							<div class="row">
								<div class="col-4">
									<label class="radio-inline">
										<?php
										$data = [
											'name' => 'jenis_kelamin',
											'id' => 'jenis_kelamin_wanita',
											'value' => 'wanita',
											'checked' => set_radio('jenis_kelamin', 'wanita')
										];
										echo form_radio($data);
										?> Wanita
									</label>
								</div>
								<div class="col-4">
									<label class="radio-inline">
										<?php
										$data = [
											'name' => 'jenis_kelamin',
											'id' => 'jenis_kelamin_pria',
											'value' => 'pria',
											'checked' => set_radio('jenis_kelamin', 'pria')
										];
										echo form_radio($data);
										?> Pria
									</label>
								</div>
							</div>
							<?php echo form_error('jenis_kelamin'); ?>
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
					<div class="form-group row">
						<label for="konfirmasi_password" class="col-3">Konfirmasi Password</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'konfirmasi_password',
								'id' => 'konfirmasi_password',
								'class' => 'form-control',
								'placeholder' => 'Konfirmasi Password'
							];
							echo form_password($data);
							echo form_error('konfirmasi_password');
							?>
						</div>
					</div>

					<?php
					echo form_submit('submit', 'Register', ['class' => 'btn btn-primary btn-block']);
					echo form_close();
					?>

				</div>
			</div>


		</div>

	</div>
</div>
