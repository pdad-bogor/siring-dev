<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

        <button class="btn btn-primary me-md-2 my-2" type="button"><i class="fa fa-pencil"></i> Pengajuan Baru</button>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Daftar Izin Pemuatan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nomor Surat</th>
                        <th>Tgl. Surat</th>
                        <th>Eksportir</th>
                        <th>NPWP</th>
                        <th>PPJK</th>
                        <th>Nama Kapal</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nomor Surat</th>
                        <th>Tgl. Surat</th>
                        <th>Eksportir</th>
                        <th>NPWP</th>
                        <th>PPJK</th>
                        <th>Nama Kapal</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>122/SHKE-EXIM/KTBR-1/IV/2023</td>
                        <td>2023-04-07</td>
                        <td>KUD GAJAH MADA</td>
                        <td>01.741.343.6-734.000</td>
                        <td>PT. SEGARA HUTAMA KARYA EXIM</td>
                        <td>MV. XIN CHUN XIAO</td>
                        <td>SELESAI</td>
                        <td><button type="button" class="btn btn-primary btn-sm">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>