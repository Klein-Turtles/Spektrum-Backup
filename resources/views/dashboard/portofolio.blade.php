@extends('layouts.admin')

    @push('styles')
        <style>
        body {
            background-color: #f0f2f5;
            padding: 40px 20px;
        }
        .card {
            max-width: 720px;
            margin: 0 auto;
            border: none;
            border-radius: 16px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        }
        .card-header {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
            padding: 1.25rem 1.5rem;
        }
        .card-body {
            padding: 0;
        }
        table {
            margin-bottom: 0;
        }
        .table th {
            color: #6c757d;
            font-weight: 600;
        }
        .btn-edit {
            background-color: #e9ecef;
            color: #212529;
            border: 1px solid #ced4da;
        }
        .btn-edit:hover {
            background-color: #dee2e6;
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        .actions {
            white-space: nowrap;
        }
        </style>
    @endpush

@section('content')
    <button href='{{ route('input_porto') }}'class="btn btn-primary">Tambah data</button>


    
            <div class="card">
        <div class="card-header text-center">
            <h4 class="mb-0">Daftar Nama</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    
                    <tr>
                        <th>Nama</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portofolio as $porto)
                    <tr>
                        <td>{{ $porto->nama }}</td>
                        <td class="text-end actions">
                            <a href="{{ route('edit_porto',$porto->id) }}" class="btn btn-sm btn-edit me-1">Edit</a>
                            <button class="btn btn-sm btn-delete">Hapus</button>
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
