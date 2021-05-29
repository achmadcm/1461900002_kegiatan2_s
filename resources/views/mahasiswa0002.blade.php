<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data mahasiswa</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
    <table>
        <thead>
            <tr>
                <th>siswa</th>
                <th>kelas</th>
                <th>absen</th>
                <th>semester</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($mahasiswa0002 as $mhs)
            <tr>
                <td>{{$mhs->siswa}}</td>
                <td>{{$mhs->kelas}}</td>
                <td>{{$mhs->absen}}</td>
                <td>{{$mhs->semester}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>