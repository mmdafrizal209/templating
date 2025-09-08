<?php
include('templates/header.php')
?>

<!--begin::App Main-->
<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Data Barang</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Barang</li>
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
          <table style="border-collapse: collapse; width: 100%;">
            <tr style="background-color: #F3E2D4;">
              <th style="border: 1px solid black; padding: 8px;">No.</th>
              <th style="border: 1px solid black; padding: 8px;">Kode Barang</th>
              <th style="border: 1px solid black; padding: 8px;">Nama Barang</th>
              <th style="border: 1px solid black; padding: 8px;">Stok Barang</th>
              <th style="border: 1px solid black; padding: 8px;">Opsi</th>
            </tr>
            <tr>
              <td style="border: 1px solid black; padding: 8px;">1</td>
              <td style="border: 1px solid black; padding: 8px;">BRG001</td>
              <td style="border: 1px solid black; padding: 8px;">Kulkas</td>
              <td style="border: 1px solid black; padding: 8px;">20</td>
              <td style="border: 1px solid black; padding: 8px;"><button style="width: 100px; padding: 10px; background-color: red; border: none; border-radius: 5px;">Hapus</button></td>
            </tr>
            <tr>
              <td style="border: 1px solid black; padding: 8px;">2</td>
              <td style="border: 1px solid black; padding: 8px;">BRG001</td>
              <td style="border: 1px solid black; padding: 8px;">Kemeja</td>
              <td style="border: 1px solid black; padding: 8px;">90</td>
              <td style="border: 1px solid black; padding: 8px;"><button style="width: 100px; padding: 10px; background-color: red; border: none; border-radius: 5px;">Hapus</button></td>
            </tr>
          </table>
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