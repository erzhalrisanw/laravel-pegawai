@extends("layout.app")

@section("content")
	<div class="main-content">
		<section class="section">
			<div class="section-header">
				<h1>Manajemen Pegawai</h1>
				<div class="section-header-breadcrumb">
					<div class="breadcrumb-item active"><a href="#">Pegawai</a></div>
					<div class="breadcrumb-item"><a href="#">Tambah Pegawai</a></div>
				</div>
			</div>
			<div class="section-body">
				<h2 class="section-title">Tambah Pegawai</h2>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<form action="{{ route('pegawai.store') }}" method="POST">
                                 {{ csrf_field() }}
								<div class="card-header">
									<h4>Data Pegawai</h4>
								</div>
								<div class="card-body">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIP</label>
										<div class="col-sm-12 col-md-7">
											<input type="number" class="form-control" name="nip" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="name" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Role</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="role" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="contact" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
										<div class="col-sm-12 col-md-7">
											<button class="btn btn-primary" type="submit"><i class="fas fa-check"></i> Simpan</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection