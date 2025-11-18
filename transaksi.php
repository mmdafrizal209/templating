<?php
include('templates/header.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Transaksi</title>
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
      background-color: #007bff; /* Blue */
      border: none;
      border-radius: 5px;
      margin-right: 15px;
      opacity: 1;
      transition: opacity 0.2s ease;
      color: white; /* Added color for text contrast */
    }

    .btnedit:hover {
      opacity: 0.8;
    }

    .btnhapus {
      width: 100px;
      padding: 10px;
      background-color: #dc3545; /* Red */
      border: none;
      border-radius: 5px;
      opacity: 1;
      transition: opacity 0.2s ease;
      color: white; /* Added color for text contrast */
    }

    .btnhapus:hover {
      opacity: 0.8;
    }

    .btntambah {
      text-align: center;
      background-color: #28a745; /* Green for Add button */
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      font-weight: bold;
      opacity: 1;
      transition: opacity 0.2s ease;
      color: white;
      border: none;
    }

    .btntambah:hover {
      opacity: 0.8;
    }

    .btnsimpan {
      text-align: center;
      background-color: #007bff; /* Blue for Save button */
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      font-weight: bold;
      opacity: 1;
      transition: opacity 0.2s ease;
      color: white;
      border: none;
    }

    .btnsimpan:hover {
      opacity: 0.8;
    }

    .rp {
      position: relative;
      top: 15px;
      left: 400px;
      font-weight: bold;
      font-size: 40px;
      color: #343a40; /* Dark color for better visibility */
    }
    
    /* Style for table headers for better look */
    .data-table th {
        background-color: #343a40;
        color: white;
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
            <h3 class="mb-0">Data Transaksi Penjualan</h3>
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
                      <input type="text" class="form-control" value="TRX002" disabled>
                    </div>
                    <br>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Tanggal Transaksi:</label>
                      <input type="date" class="form-control" value="2024-11-18">
                    </div>
                  </div>
                  <div class="col-md-6 offset-md-2">
                    <p class="rp">
                      <!-- New total reflects 3 x 7.500.000 -->
                      Rp. 22.500.000
                    </p>
                  </div>
                </div>
                <hr width="100%">
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Kode Barang:</label>
                      <input type="text" class="form-control" value="PRD789">
                    </div>
                    <br>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Nama Barang:</label>
                      <input type="text" class="form-control" style="width: 100%;" value="TV LED 50 Inci">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Harga Barang:</label>
                      <input type="number" class="form-control" value="7500000">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Jumlah Pembelian:</label>
                      <input type="number" class="form-control" value="3">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Total Item</label>
                      <input type="text" class="form-control" disabled value="22.500.000">
                    </div>
                  </div>
                  <div class="col-md-2 align-self-end">
                    <div class="form-group">
                      <button type="submit" class="btntambah">Tambahkan</button>
                    </div>
                  </div>
                </div>
                <br>
                <hr style="height:5px; background-color: #adb5bd; border:none; width:100%;">
                <br>
                <h4>Detail Pesanan</h4>
                <div class="col-12">
                  <table style="border-collapse: collapse; width: 100%;" class="data-table">
                    <tr>
                      <th style="border: 1px solid black; padding: 8px;">No. Nota</th>
                      <th style="border: 1px solid black; padding: 8px;">Kode Barang</th>
                      <th style="border: 1px solid black; padding: 8px;">Nama Barang</th>
                      <th style="border: 1px solid black; padding: 8px;">Harga Satuan</th>
                      <th style="border: 1px solid black; padding: 8px;">Kuantitas</th>
                      <th style="border: 1px solid black; padding: 8px;">Subtotal</th>
                      <th style="border: 1px solid black; padding: 8px;">Opsi</th>
                    </tr>
                    <tr>
                      <td style="border: 1px solid black; padding: 8px;">TRX002</td>
                      <td style="border: 1px solid black; padding: 8px;">PRD789</td>
                      <td style="border: 1px solid black; padding: 8px;">TV LED 50 Inci</td>
                      <td style="border: 1px solid black; padding: 8px;">7.500.000</td>
                      <td style="border: 1px solid black; padding: 8px;">3</td>
                      <td style="border: 1px solid black; padding: 8px;">22.500.000</td>
                      <td style="border: 1px solid black; padding: 8px; text-align:center;">
                        <button class="btnedit">Edit</button>
                        <button class="btnhapus">Hapus</button>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Keterangan Tambahan:</label>
                      <input type="text" class="form-control" style="width: 600%;" placeholder="Tambah Keterangan (Opsional)">
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <button type="submit" class="btnsimpan">Simpan Transaksi</button>
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