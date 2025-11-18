<?php
include('templates/header.php')
?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Manajemen Inventaris Aset</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Utama</a></li>
            <li class="breadcrumb-item active">Data Utama</li>
            <li class="breadcrumb-item active" aria-current="page">Aset</li>
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
            <tr style="background-color: #C6D870;">
              <th style="border: 1px solid black; padding: 8px;">ID#</th>
              <th style="border: 1px solid black; padding: 8px;">Nomor Seri</th>
              <th style="border: 1px solid black; padding: 8px;">Deskripsi Aset</th>
              <th style="border: 1px solid black; padding: 8px;">Lokasi</th>
              <th style="border: 1px solid black; padding: 8px;">Tgl. Akuisisi</th>
              <th style="border: 1px solid black; padding: 8px;">Nilai Residu</th>
              <th style="border: 1px solid black; padding: 8px;">Tindakan</th>
            </tr>
            <tr>
              <td style="border: 1px solid black; padding: 8px;">001</td>
              <td style="border: 1px solid black; padding: 8px;">AST-044-JKT</td>
              <td style="border: 1px solid black; padding: 8px;">Laptop Kerja Core i7</td>
              <td style="border: 1px solid black; padding: 8px;">IT Dept</td>
              <td style="border: 1px solid black; padding: 8px;">2024-01-15</td>
              <td style="border: 1px solid black; padding: 8px;">1.500.000</td>
              <td style="border: 1px solid black; padding: 8px;"><button style="width: 100px; padding: 10px; background-color: green; color: white; border: none; border-radius: 5px;">Lihat</button></td>
            </tr>
            <tr>
              <td style="border: 1px solid black; padding: 8px;">002</td>
              <td style="border: 1px solid black; padding: 8px;">AST-110-SBY</td>
              <td style="border: 1px solid black; padding: 8px;">Meja Kantor Eksekutif</td>
              <td style="border: 1px solid black; padding: 8px;">HR Dept</td>
              <td style="border: 1px solid black; padding: 8px;">2023-05-20</td>
              <td style="border: 1px solid black; padding: 8px;">500.000</td>
              <td style="border: 1px solid black; padding: 8px;"><button style="width: 100px; padding: 10px; background-color: green; color: white; border: none; border-radius: 5px;">Lihat</button></td>
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