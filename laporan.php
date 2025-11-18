<?php
include('templates/header.php')
?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Laporan Penjualan Produk</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Dasbor</a></li>
            <li class="breadcrumb-item active">Logistik</li>
            <li class="breadcrumb-item active" aria-current="page">Penjualan</li>
          </ol>
        </div>
      </div>
      </div>
    </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <table style="border-collapse: collapse; width: 100%;">
            <tr style="background-color: #414042ff; color: white;">
              <th style="border: 1px solid black; padding: 8px;">No.</th>
              <th style="border: 1px solid black; padding: 8px;">Kode Produk</th>
              <th style="border: 1px solid black; padding: 8px;">Nama Produk</th>
              <th style="border: 1px solid black; padding: 8px;">Sisa Stok</th>
              <th style="border: 1px solid black; padding: 8px;">Harga Pokok</th>
              <th style="border: 1px solid black; padding: 8px;">Harga Ritel</th>
              <th style="border: 1px solid black; padding: 8px;">Qty Terjual</th>
            </tr>
            <tr>
              <td style="border: 1px solid black; padding: 8px;">1</td>
              <td style="border: 1px solid black; padding: 8px;">PRD771</td>
              <td style="border: 1px solid black; padding: 8px;">Setrika Uap</td>
              <td style="border: 1px solid black; padding: 8px;">45</td>
              <td style="border: 1px solid black; padding: 8px;">450.000</td>
              <td style="border: 1px solid black; padding: 8px;">525.500</td>
              <td style="border: 1px solid black; padding: 8px;">23</td>
            </tr>
            <tr>
              <td style="border: 1px solid black; padding: 8px;">2</td>
              <td style="border: 1px solid black; padding: 8px;">PRD992</td>
              <td style="border: 1px solid black; padding: 8px;">Jaket Bomber</td>
              <td style="border: 1px solid black; padding: 8px;">150</td>
              <td style="border: 1px solid black; padding: 8px;">180.000</td>
              <td style="border: 1px solid black; padding: 8px;">210.000</td>
              <td style="border: 1px solid black; padding: 8px;">5</td>
            </tr>
          </table>
          <br><br>
          <h3 class="mb-0">Log Pesanan Pelanggan</h3>
          <br>
          <table style="border-collapse: collapse; width: 100%;">
            <tr style="background-color: #4e87adff; color: white;">
              <th style="border: 1px solid black; padding: 8px;">Nama Pelanggan</th>
              <th style="border: 1px solid black; padding: 8px;">Kontak</th>
              <th style="border: 1px solid black; padding: 8px;">Nama Produk</th>
              <th style="border: 1px solid black; padding: 8px;">Kuantitas</th>
            </tr>
            <tr>
              <td style="border: 1px solid black; padding: 8px;">farris </td>
              <td style="border: 1px solid black; padding: 8px;">limbangansari@mail.co</td>
              <td style="border: 1px solid black; padding: 8px;">Setrika Uap</td>
              <td style="border: 1px solid black; padding: 8px;">23</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    </div>
  </main>
<?php
include('templates/footer.php')
?>