@extends("layout.app")

@section("content")
	<div class="main-content">
		<section class="section">
			<div class="section-header">
				<h1>Manajemen Inventaris</h1>
				<div class="section-header-breadcrumb">
					<div class="breadcrumb-item active"><a href="#">Inventaris</a></div>
					<div class="breadcrumb-item"><a href="#">Tambah Inventaris</a></div>
				</div>
			</div>
			<div class="section-body">
				<h2 class="section-title">Tambah Inventaris</h2>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<form action="{{ route('inventaris.store') }}" method="POST">
                                 {{ csrf_field() }}
								<div class="card-header">
									<h4>Data Inventaris</h4>
								</div>
								<div class="card-body">
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NAMA BARANG</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="nama_barang" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">JUMLAH BARANG</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="jumlah_barang" required>
										</div>
									</div>
									<div class="form-group row mb-4">
										<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">KODE BARANG</label>
										<div class="col-sm-12 col-md-7">
											<input type="text" class="form-control" name="kode_barang" required>
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