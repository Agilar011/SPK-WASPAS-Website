@extends('layouts.admin')

@section('content')
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="color: #000;">Data Kategori</h1>
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
                        <th scope="col">Code</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Beban</th>
                            <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <!-- Memeriksa apakah pengguna memiliki peran 'admin' -->
                        <!-- Tampilkan konten khusus untuk pengguna dengan peran 'admin' -->
                        @if (!empty($activities))
                            <ul>
                                @foreach ($activities as $activity)
                                    <tr>
                                        <td>
                                            {{ $activity->nama }}
                                        </td>
                                        <td>{{ date('H:i', strtotime($activity->created_at)) }}</td>
                                        <td style="max-width: 120px">
                                            {{ $activity->rencana_aktifitas }}
                                        </td>
                                        <td>
                                            @if ($activity->updated_at != null)
                                                {{ date('H:i', strtotime($activity->updated_at)) }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('destroyActivity', $activity->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </ul>
                        @endif



                </tbody>
            </table>
        </section>

        <!-- /.content -->
    </div>
@endsection
