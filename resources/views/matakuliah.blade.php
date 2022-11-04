{{-- EXTEND --}}
@extends('home')

@php
    $x = 0;
@endphp
{{-- SECTION --}}
@section('konten')
    <h3>Daftar Matakuliah</h3>
    <table class="table table-bordered">
        <thead class="table-info">
        <tr>
            <th scope="col">Kode Matakuliah</th>
            <th scope="col">Nama Matakuliah</th>
        </tr>
        </thead>
        <tbody>
        {{-- FOR ELSE --}}
        @forelse($matkul as $i)
            <tr>
                <td>{{ $i[0] }}</td>
                <td>{{ $i[1] }}</td>
            </tr>
        @empty
            <li>No User</li>
        @endforelse

        </tbody>
    </table>

    <h3>Jumlah Mahasiswa Dalam Matakuliah</h3>
    <table class="table table-bordered">
        <thead class="table-info">
        <tr>
            <th scope="col">Kode Matakuliah</th>
            <th scope="col">Jumlah Mahasiswa</th>
        </tr>
        </thead>
        <tbody>
        {{-- WHILE --}}
        @while($x < count($matkul))
            <tr>
                <td>{{ $matkul[$x][0] }}</td>
                <td>{{ $matkul[$x][2] }}</td>
            </tr>
            @php $x++; @endphp
        @endwhile
        </tbody>
    </table>
@endsection
