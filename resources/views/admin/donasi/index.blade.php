@extends('admin.layouts.main')
@section('content')
    <div class="d-flex justify-content-between mt-1 p-3">
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="modal" data-bs-target="#addNew">
            <i class="mdi mdi-library-plus"></i>
            tambah Donasi baru</button>
    </div>
    <div class="table mt-2 p-3 table-responsive">
        <table class="table table-bordered table-striped" id="table-blog">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Dana Terkumpul</th>
                    <th>Sisa Waktu</th>
                    <th>foto</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->dana_terkumpul }}</td>
                        <td>{{ $item->sis_waktu }}</td>
                        <td><img src="{{ url('storage/' . $item->foto) }}"
                                style="width: 50px; height: 50px; object-fit: cover;" alt="gambar" class="rounded-circle">
                        </td>
                        <td>{{ $item->kategori }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                <a href="" class="btn btn-warning" style="color: white;" data-bs-toggle="modal"
                                    data-bs-target="#edit{{ $item->id }}">
                                    <i class="mdi mdi-table-edit"></i> Edit</a>


                                <form action="/admin/donasi/{{ $item->id }}" method="post" class="delete-form m-0">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button class="btn btn-danger delete-buttons" style="box-sizing: 0" type="submit">
                                        <i class="mdi mdi-delete"></i> Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <!-- edit Modal -->
                    <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog bg-white">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="mdi mdi-table-edit"></i>
                                        Edit
                                        Data Donasi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/admin/donasi/{{ $item->id }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="judul" class="mb-1">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                value="{{ $item->judul }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="dana_terkumpul" class="mb-1">Dana Terkumpul</label>
                                            <input type="number" class="form-control" id="dana_terkumpul"
                                                name="dana_terkumpul" value="{{ $item->dana_terkumpul }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="sis_waktu" class="mb-1">Sisa Waktu</label>
                                            <input type="number" class="form-control" id="sis_waktu" name="sis_waktu"
                                                value="{{ $item->sis_waktu }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto" class="mb-1">Foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                value="{{ $item->foto }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="kategori" class="mb-1">Kategori</label>
                                            <select class="form-select" aria-label="Default select example" id="kategori"
                                                name="kategori">
                                                <option {{ $item->kategori == 'kemanusiaan' ? 'selected' : '' }}>
                                                    Kemanusiaan</option>
                                                <option value="IBBQ" {{ $item->kategori == 'IBBQ' ? 'selected' : '' }}>
                                                    IBBQ</option>
                                                <option value="waqaf" {{ $item->kategori == 'waqaf' ? 'selected' : '' }}>
                                                    Waqaf</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                <script>
                    const deleteButtons = document.querySelectorAll('.delete-buttons');

                    deleteButtons.forEach(button => {
                        button.addEventListener('click', function(event) {
                            event.preventDefault();

                            const id = this.parentNode.querySelector('input[name="id"]').value;

                            Swal.fire({
                                title: 'Hapus Data?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Hapus',
                                cancelButtonText: 'Batal',
                                showCloseButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                customClass: {
                                    container: 'my-swal'
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    this.parentNode.action = '/admin/donasi/' + id;
                                    this.parentNode.submit();
                                }
                            });
                        });
                    });
                </script>
            </tbody>
        </table>
    </div>
@endsection
{{-- modal add new blog --}}
<div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: white">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="mdi mdi-library-plus"></i> Tambah
                    Donasi
                    Baru
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/saveDonasi" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="mb-1">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                            placeholder="input judul banner">
                    </div>
                    <div class="mb-3">
                        <label for="dana_terkumpul" class="mb-1">Dana Terkumpul</label>
                        <input type="number" class="form-control" id="dana_terkumpul" name="dana_terkumpul"
                            placeholder="input dana terkumpul ">
                    </div>
                    <div class="mb-3">
                        <label for="sis_waktu" class="mb-1">Sisa Waktu</label>
                        <input type="number" class="form-control" id="sis_waktu" placeholder="input sisa waktu "
                            name="sis_waktu">
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="mb-1">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" required
                            placeholder="input foto banner">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="mb-1">Kategori</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="kemanusiaan">Kemanusiaan</option>
                            <option value="IBBQ">IBBQ</option>
                            <option value="waqaf">Waqaf</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {
            $('#table-blog').DataTable();
        });
    </script>
@endpush
