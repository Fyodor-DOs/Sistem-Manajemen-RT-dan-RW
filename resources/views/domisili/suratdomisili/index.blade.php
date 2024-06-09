<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Domisili</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            padding: 20px;
            margin-top: 20px;
        }

        .header {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 100px;
            position: absolute;
            height: auto;
            margin-right: 20px;
        }

        .header .header-text {
            text-align: center;
            flex-grow: 1;
        }

        .header .header-text h2,
        .header .header-text h3 {
            margin: 0;
        }

        .header .header-text p {
            margin: 5px 0;
        }

        .content {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table td {
            padding: 5px;
        }

        .footer {
            text-align: right;
            margin-top: 40px;
        }

        .footer img {
            width: 150px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('assets/image/malang.png') }}" alt="Logo">
            <div class="header-text">
                <h3>PEMERINTAH KABUPATEN MALANG</h3>
                <h3>KECAMATAN SETEMPAT</h3>
                <h3>DESA SETEMPAT</h3>
                <p>Alamat Desa Setempat</p>
            </div>
        </div>
        <hr>
        <div class="text-center mb-4" style="text-align: center !important;">
            <h3>SURAT KETERANGAN DOMISILI</h3>
            @php
                $date = new \DateTime($domisili->updated_at);
                $formattedDate = $date->format('d/m/Y');
                [$day, $month, $year] = explode('/', $formattedDate);
            @endphp
            <p>Nomor Reg: Domisili
                {{ $domisili->id_suratDomisili }}/{{ $day }}/{{ $month }}/{{ $year }}</p>
        </div>
        <div class="content">
            <p class="text-justify">
                Yang bertanda tangan di bawah ini Kepala Desa Setempat Kecamatan Setempat Kabupaten Malang. Menerangkan
                dengan sebenar-benarnya bahwa orang tersebut di bawah ini:
            </p>
            <table class="table">
                <tr>
                    <td>Nama:</td>
                    <td>{{ $domisili->pemohon->nama }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan:</td>
                    <td>{{ $domisili->pemohon->pekerjaan }}</td>
                </tr>
                <tr>
                    <td>Tempat / Tgl. Lahir:</td>
                    <td>{{ $domisili->pemohon->tempat_lahir }}, {{ $domisili->pemohon->tgl_lahir }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin:</td>
                    <td>{{ $domisili->pemohon->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>No. NIK:</td>
                    <td>{{ $domisili->pemohon->nik }}</td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td>{{ $domisili->rt->nama }}, {{ $domisili->rw->nama }}, Desa Jatimulyo</td>
                </tr>
            </table>
            <p class="text-justify">
                Adalah benar-benar warga kami yang berdomisili di RT {{ $domisili->rt_id }} RW {{ $domisili->rw_id }}
                Desa Jatimulyo Kecamatan setempat Kabupaten Malang. Surat Keterangan ini dibuat untuk
                {{ $domisili->keterangan }}.
            </p>
            <p class="text-justify">
                Demikian surat domisili ini dibuat dengan sebenar-benarnya dan untuk dipergunakan sebagaimana mestinya.
            </p>
        </div>
        <div class="footer">
            <p>Mengetahui</p>
            <p>Tgl {{ date('Y-m-d') }}</p>
            <div>
                <img src="{{ asset('assets/image/signature.png') }}" alt="Signature">
                <p>Kepala Desa setempat</p>
            </div>
        </div>
    </div>
</body>

</html>
