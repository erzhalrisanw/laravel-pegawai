@extends("layout.app")

@section("content")
	<div class="main-content">
		<section class="section">
			<div class="section-header">
				<h1>Manajemen Inventaris</h1>
				<div class="section-header-breadcrumb">
					<div class="breadcrumb-item active"><a href="#">Inventaris</a></div>
					<div class="breadcrumb-item"><a href="#">Daftar Inventaris</a></div>
				</div>
			</div>
			<div class="section-body">
				<h2 class="section-title">Daftar Inventaris</h2>
                <a href="{{ route('inventaris.create') }}">
                <button class="btn btn-primary">
                    Tambah Inventaris
                </button>
                </a>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th>NO</th>
											<th>NAMA BARANG</th>
											<th>JUMLAH BARANG</th>
											<th>KODE BARANG</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
										@forelse($data as $inventaris)
										<tr>
											<td>{{ $loop->iteration}}</td>
											<td>{{ $inventaris->nama_barang}}</td>
											<td>{{ $inventaris->jumlah_barang}}</td>
											<td>{{ $inventaris->kode_barang}}</td>
										</tr>
										@empty
										<tr>
											<td colspan="96" class="text-center">Data masih kosong.</td>
										</tr>
										@endforelse
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection