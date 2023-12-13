@extends('layouts.admin')

@section('content')
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="color: #000;">Data Alternatif</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content px-5">

            <table class="table table-hover">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Kode</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        <th scope="col">C1</th>
                        <th scope="col">C2</th>
                        <th scope="col">C3</th>
                        <th scope="col">C4</th>
                        <th scope="col">C5</th>
                        <th scope="col">C6</th>
                        <th scope="col">C7</th>
                        <th scope="col">C8</th>
                        <th scope="col">C9</th>
                        <th scope="col">C10</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                        <tr>
                            <td scope="row">{{ $user->name }}</td>
                            <td>
                                {{ $user->alamat }}
                            </td>
                            <td>
                                {{ $user->no_telp }}
                            </td>
                            <td>
                                Admin Purchasing
                            </td>
                            <td>
                                {{ $user->role }}
                            </td>
                            <td>
                                {{ $user->tanggal_daftar }}

                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="display: grid; align-items:center; justify-content:start; gap:2px;">

                                <form method="POST" action="{{ route('changeRole', $user->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Ubah Peran</button>
                                </form>

                                <form method="POST" action="{{ route('updateUser', $user->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                                <form method="POST" action="{{ route('deleteUser', $user->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </section>

        <!-- /.content -->
    </div>
@endsection
