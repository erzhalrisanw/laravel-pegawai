@extends("layout.app")

@section("content")
	<div class="main-content">
		<section class="section">
			<div class="section-header">
				<h1>Manajemen Komunitas</h1>
				<div class="section-header-breadcrumb">
					<div class="breadcrumb-item active"><a href="#">Komunitas</a></div>
					<div class="breadcrumb-item"><a href="#">Daftar Komunitas</a></div>
				</div>
			</div>
			<div class="section-body">
				<h2 class="section-title">Daftar Komunitas
                <a href="{{ route('communities.create') }}">
                    <button class="btn btn-primary">
                        Tambah Komunitas
                    </button>
                    <a>
                </h2>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th>NO.</th>
											<th>NAMA</th>
											<th>WEBSITE</th>
                                            <th>CONTACT PERSON</th>
                                            <th>AKSI</th>
										</tr>
									</thead>
									<tbody>
                                        @forelse($data as $community)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $community->name }}</td>
											<td>{{ $community->website}}</td>
                                            <td>{{ $community->contact_person }}</td>
                                            <td>
                                                <a href="{{ route('communities.edit', ['id' => $community->id, 'user' => 'qamalang']) }}">
                                                    <button class="btn btn-warning">
                                                        Edit
                                                    </button>
                                                <a>
                                                <a href="{{ route('communities.destroy', ['id' => $community->id]) }}"
                                                    onclick="return confirm('Anda yakin akan menghapus data ini ?')">
                                                    <button class="btn btn-danger">
                                                        Hapus
                                                    </button>
                                                <a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Data masih kosong.</td>
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