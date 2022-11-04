{{-- INCLUDE --}}
@include('home')
<h3>Daftar Mahasiswa</h3>
<table class="table table-bordered">
    <thead class="table-info">
    <tr>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Jurusan</th>
    </tr>
    </thead>
    <tbody>
    {{-- FOR EACH --}}
    @foreach($mahasiswa as $i)
        <tr>
            <td>{{ $i[0] }}</td>
            <td>{{ $i[1] }}</td>
            {{-- IF ELSEIF ENDIF --}}
            @if($i[2] == "IS")
                <td>Intelligence System</td>
            @elseif($i[2] == "GT")
                <td>Game Technology</td>
            @endif
        </tr>
    @endforeach

    </tbody>
</table>
<h3>IPK Mahasiswa</h3>
<table class="table table-bordered">
    <thead class="table-info">
    <tr>
        <th scope="col">NIM</th>
        <th scope="col">IPK</th>
        <th scope="col">Grade</th>
    </tr>
    </thead>
    <tbody>
    {{-- FOR --}}
    @for($i = 0; $i < count($mahasiswa); $i++)
        <tr>
            <td>{{ $mahasiswa[$i][0] }}</td>
            <td>{{ $mahasiswa[$i][3] }}</td>
            {{-- IF ELSEIF ENDIF --}}
            @if($mahasiswa[$i][3] < 3.7)
                <td>B+</td>
            @elseif($mahasiswa[$i][3] < 3.9)
                <td>A-</td>
            @elseif($mahasiswa[$i][3] >= 3.9)
                <td>A</td>
            @endif
        </tr>
    @endfor
    </tbody>
</table>
