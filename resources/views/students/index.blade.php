@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Daftar Mahasiswa
                    <a class="btn-sm btn-primary float-right" href="{{ route('students.create') }}" role="button">Tambah</a>
                </div>

                <div class="card-body">
                    {{ $students->links() }}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <th scope="row">{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->old }}</td>
                                <td>
                                    <a class="btn-sm btn-success" href="{{ route('students.edit', $student->id) }}" role="button">Edit</a>
                                    <a class="btn-sm btn-danger" href="{{ route('students.destroy', $student->id) }}" role="button"
                                            onclick="event.preventDefault();
                                            document.getElementById('destroy-student-{{$student->id}}').submit();">
                                        Hapus
                                    </a>

                                    <form id="destroy-student-{{$student->id}}" action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
