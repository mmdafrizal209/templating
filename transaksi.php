<?php
include('templates/header.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/select2.css">
  <link rel="stylesheet" href="css/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <style>
    .dropdown-container {
      position: relative;
      display: inline-block;
      width: 220px;
    }

    select {
      width: 100%;
      padding-right: 30px;
      font-size: 16px;
    }

    .btnedit {
      width: 100px;
      padding: 10px;
      background-color: blue;
      border: none;
      border-radius: 5px;
      margin-right: 15px;
      opacity: 1;
      transition: opacity 0.2s ease;
    }

    .btnedit:hover {
      opacity: 0.5;
    }

    .btnhapus {
      width: 100px;
      padding: 10px;
      background-color: red;
      border: none;
      border-radius: 5px;
      opacity: 1;
      transition: opacity 0.2s ease;
    }

    .btnhapus:hover {
      opacity: 0.5;
    }

    .btntambah {
      text-align: center;
      background-color: blue;
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      font-weight: bold;
      opacity: 1;
      transition: opacity 0.2s ease;

    }

    .btntambah:hover {
      opacity: 0.5;
    }

    .btnsimpan {
      text-align: center;
      background-color: red;
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      font-weight: bold;
      opacity: 1;
      transition: opacity 0.2s ease;
    }

    .btnsimpan:hover {
      opacity: 0.5;
    }

    .rp {
      position: relative;
      top: 15px;
      left: 400px;
      font-weight: bold;
      font-size: 40px;
    }
  </style>
</head>

<body>
  <!--begin::App Main-->
  <main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">Data Transaksi</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
            </ol>
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-12">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>No. Nota:</label>
                      <input type="text" class="form-control" value="001">
                    </div>
                    <br>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Tanggal Barang:</label>
                      <input type="date" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <p class="rp">
                      Rp. 0
                    </p>
                  </div>
                </div>
                <hr width="100%">
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Kode:</label>
                      <input type="text" class="form-control" value="BRG001">
                    </div>
                    <br>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Nama Barang:</label>
                      <input type="text" class="form-control" style="width: 100%;">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Harga Barang:</label>
                      <input type="number" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Jumlah Pembelian:</label>
                      <input type="number" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Total</label>
                      <input type="number" class="form-control" disabled placeholder="Auto">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btntambah">Tambahkan</button>
                  </div>
                </div>
                <br>
                <hr style="height:5px; background-color: black; border:none; width:100%;">
                <br>
                <h4>Daftar Barang</h4>
                <div class="col-12">
                  <table style="border-collapse: collapse; width: 100%;">
                    <tr>
                      <th style="border: 1px solid black; padding: 8px;">No. Nota</th>
                      <th style="border: 1px solid black; padding: 8px;">Kode Barang</th>
                      <th style="border: 1px solid black; padding: 8px;">Nama Barang</th>
                      <th style="border: 1px solid black; padding: 8px;">Harga Barang</th>
                      <th style="border: 1px solid black; padding: 8px;">Jumlah Pembelian</th>
                      <th style="border: 1px solid black; padding: 8px;">Total</th>
                      <th style="border: 1px solid black; padding: 8px;">Opsi</th>
                    </tr>
                    <tr>
                      <td style="border: 1px solid black; padding: 8px;">001</td>
                      <td style="border: 1px solid black; padding: 8px;">BRG001</td>
                      <td style="border: 1px solid black; padding: 8px;">Kulkas</td>
                      <td style="border: 1px solid black; padding: 8px;">3.299.999</td>
                      <td style="border: 1px solid black; padding: 8px;">10</td>
                      <td style="border: 1px solid black; padding: 8px;">32.999.990</td>
                      <td style="border: 1px solid black; padding: 8px; text-align:center;"><button class="btnedit">Edit</button>
                        <button class="btnhapus">Hapus</button>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Keterangan:</label>
                      <input type="text" class="form-control" style="width: 600%;" placeholder="Tambah Keterangan">
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <button type="submit" class="btnsimpan">Simpan</button>
                  </div>
                </div>
              </div>
              <!-- /.col -->
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content-->
  </main>
  <!--end::App Main-->
  <?php
  include('templates/footer.php')
  ?>
</body>

</html>