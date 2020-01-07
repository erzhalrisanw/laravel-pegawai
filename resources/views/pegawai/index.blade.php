@extends("layout.app")

@section("content")
	<div class="main-content">
		<section class="section">
			<div class="section-header">
				<h1>Manajemen Pegawai</h1>
				<div class="section-header-breadcrumb">
					<div class="breadcrumb-item active"><a href="#">Pegawai</a></div>
					<div class="breadcrumb-item"><a href="#">Daftar Pegawai</a></div>
				</div>
			</div>
			<div class="section-body">
				<h2 class="section-title">Daftar Pegawai</h2>
				<a href=" {{ route('pegawai.create') }}">
				<button class="btn btn-primary">
					Tambah Pegawai
				</button>
				</a>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th>NO.</th>
											<th>NIP</th>
											<th>NAMA</th>
											<th>ROLE</th>
											<th>CONTACT</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
										@forelse($data as $pegawai)
										<tr>
											<td>{{ $loop->iteration}}</td>
											<td>{{ $pegawai->NIP}}</td>
											<td>{{ $pegawai->name}}</td>
											<td>{{ $pegawai->role}}</td>
											<td>{{ $pegawai->contact}}</td>
											<td >
											<a href=" {{ route('pegawai.edit', ['id'=> $pegawai->id]) }}">
												<button class="btn btn-warning fas fa-edit" >
													
												</button>
											</a>
											<a href=" {{ route('pegawai.destroy', ['id'=> $pegawai->id]) }}"
												onclick="return confirm('Anda yakin akan menghapus data ini?')">
												<button class="btn btn-danger fas fa-trash" >
													
												</button>
											</a>
											</td>
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