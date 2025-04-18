@extends('layout')

@section('container')
    <div class="container mt-4">

        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pst-tab" data-bs-toggle="tab" data-bs-target="#pst" type="button" role="tab" aria-controls="pst" aria-selected="true"><b>Pimpinan Surat Tugas</b></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pspd-tab" data-bs-toggle="tab" data-bs-target="#pspd" type="button" role="tab" aria-controls="pspd" aria-selected="false"><b>Pimpinan Surat Perjalanan Dinas</b></button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="pst" role="tabpanel" aria-labelledby="pst-tab">

                <div class="mb-4 mt-4">
                    <a href={{ route('Surat.create') }}><button type="button" class="btn btn-success">Tambah Data</button></a>
                </div>

                <div class="mb-2">
                    <input type="text" class="form-control" placeholder="🔍 All fields">
                </div>
                <div class="table-wrapper">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="table-secondary">
                            <tr>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama Pimpinan ST</th>
                                <th scope="col">Pangkat Golongan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Bagian Kerja</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($namadatabase as $val) --}}
                            <tr>
                                {{-- <td>{{ $val->nip }}</td> --}}
                                {{-- <td>{{ $val->nama }}</td> --}}
                                {{-- <td>{{ $val->pangkat }}</td> --}}
                                {{-- <td>{{ $val->jabatan }}</td> --}}
                                {{-- <td>{{ $val->bagian }}</td> --}}
                                {{-- <td>{{ $val->tgl_lahir }}</td> --}}
                                {{-- <td>
                                    <button class="btn btn-outline-primary btn-sm">Unduh Surat Tugas</button>
                                    <button class="btn btn-outline-primary btn-sm">Unduh SPD</button>
                                </td> --}}
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pspd" role="tabpanel" aria-labelledby="pspd-tab">

                <div class="mb-4 mt-4">
                    <a href={{ route('Surat.create') }}><button type="button" class="btn btn-success">Tambah Data</button></a>
                </div>

                <div class="mb-2">
                    <input type="text" class="form-control" placeholder="🔍 All fields">
                </div>
                <div class="table-wrapper">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="table-secondary">
                            <tr>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama Pimpinan SPD</th>
                                <th scope="col">Pangkat Golongan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Bagian Kerja</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($namadatabase as $val) --}}
                            <tr>
                                {{-- <td>{{ $val->nip }}</td> --}}
                                {{-- <td>{{ $val->nama }}</td> --}}
                                {{-- <td>{{ $val->pangkat }}</td> --}}
                                {{-- <td>{{ $val->jabatan }}</td> --}}
                                {{-- <td>{{ $val->bagian }}</td> --}}
                                {{-- <td>{{ $val->tgl_lahir }}</td> --}}
                                {{-- <td>
                                    <button class="btn btn-outline-primary btn-sm">Unduh Surat Tugas</button>
                                    <button class="btn btn-outline-primary btn-sm">Unduh SPD</button>
                                </td> --}}
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
