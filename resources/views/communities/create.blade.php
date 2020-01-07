@extends("layout.app")

@section("content")
	<div class="main-content">
		<section class="section">
			<div class="section-header">
				<h1>Manajemen Komunitas</h1>
				<div class="section-header-breadcrumb">
					<div class="breadcrumb-item active"><a href="#">Komunitas</a></div>
					<div class="breadcrumb-item"><a href="#">Tambah Komunitas</a></div>
				</div>
			</div>
			<div class="section-body">
				<h2 class="section-title">Tambah Komunitas</h2>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
                            <form action="{{ route('communities.store') }}" method="POST">
                                {{ csrf_field() }}
								<div class="card-header">
									<h4>Data Komunitas</h4>
								</div>
								<div class="card-body">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Komunitas</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="name" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
										<div class="col-sm-12 col-md-7">
											<textarea name="description" id="" cols="30" class="form-control" style="height: 200px !important;"></textarea>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Website</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="website" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contact Person</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="contact_person" required>
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