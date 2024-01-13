

<?php

 include "koneksi.php";
 if(isset($_POST['kirim']))
 {
     $nama_kategori      = $_POST['nama_kategori'];
     $ket        = $_POST['ket'];
   

     
     mysqli_query($con, "INSERT INTO kategori_barang_inventaris VALUES('',
         '$nama_kategori','$ket'
     )") or die(mysqli_error($con));

     
     echo "<meta http-equiv='refresh' content='1;url=kategori_inventaris.php'>";
 }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Kategori Inventaris</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">


</head>

<body>
  <nav class="sidebar">
    <div class="logo">
      <img src="assets/image/Frame 1542.png" alt="">
      <img src="assets/image/Frame 1540.png" alt="">
    </div>

    <div class="menu-content">
      <ul class="menu-items">


        <li class="item">
          <a href="dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="24" viewBox="0 0 24 24"
              fill="none">
              <path
                d="M4 13H10C10.55 13 11 12.55 11 12V4C11 3.45 10.55 3 10 3H4C3.45 3 3 3.45 3 4V12C3 12.55 3.45 13 4 13ZM4 21H10C10.55 21 11 20.55 11 20V16C11 15.45 10.55 15 10 15H4C3.45 15 3 15.45 3 16V20C3 20.55 3.45 21 4 21ZM14 21H20C20.55 21 21 20.55 21 20V12C21 11.45 20.55 11 20 11H14C13.45 11 13 11.45 13 12V20C13 20.55 13.45 21 14 21ZM13 4V8C13 8.55 13.45 9 14 9H20C20.55 9 21 8.55 21 8V4C21 3.45 20.55 3 20 3H14C13.45 3 13 3.45 13 4Z"
                fill="#FAFAFA" />
            </svg> Dashboard</a>
        </li>
        <li class="item">
          <a href="data_inventaris.php"> <svg xmlns="http://www.w3.org/2000/svg" width="38" height="24"
              viewBox="0 0 24 24" fill="none">
              <path
                d="M14 21.25H10V22.75H14V21.25ZM2.75 14V9.99999H1.25V14H2.75ZM21.25 13.563V14H22.75V13.563H21.25ZM14.891 4.61099L18.85 8.17399L19.853 7.05799L15.895 3.49499L14.891 4.61099ZM22.75 13.563C22.75 11.874 22.765 10.804 22.34 9.84799L20.969 10.459C21.235 11.057 21.25 11.742 21.25 13.563H22.75ZM18.85 8.17399C20.203 9.39199 20.703 9.86199 20.969 10.459L22.34 9.84799C21.914 8.89099 21.109 8.18799 19.853 7.05799L18.85 8.17399ZM10.03 2.74999C11.612 2.74999 12.209 2.76199 12.74 2.96599L13.278 1.56599C12.426 1.23799 11.498 1.24999 10.03 1.24999V2.74999ZM15.895 3.49599C14.809 2.51899 14.13 1.89199 13.278 1.56599L12.741 2.96599C13.273 3.16999 13.721 3.55799 14.891 4.61099L15.895 3.49599ZM10 21.25C8.093 21.25 6.739 21.248 5.71 21.11C4.705 20.975 4.125 20.721 3.702 20.298L2.642 21.358C3.39 22.108 4.339 22.439 5.511 22.597C6.661 22.752 8.136 22.75 10 22.75V21.25ZM1.25 14C1.25 15.864 1.248 17.338 1.403 18.489C1.561 19.661 1.893 20.61 2.641 21.359L3.701 20.299C3.279 19.875 3.025 19.295 2.89 18.289C2.752 17.262 2.75 15.907 2.75 14H1.25ZM14 22.75C15.864 22.75 17.338 22.752 18.489 22.597C19.661 22.439 20.61 22.107 21.359 21.359L20.299 20.299C19.875 20.721 19.295 20.975 18.289 21.11C17.262 21.248 15.907 21.25 14 21.25V22.75ZM21.25 14C21.25 15.907 21.248 17.262 21.11 18.29C20.975 19.295 20.721 19.875 20.298 20.298L21.358 21.358C22.108 20.61 22.439 19.661 22.597 18.489C22.752 17.339 22.75 15.864 22.75 14H21.25ZM2.75 9.99999C2.75 8.09299 2.752 6.73899 2.89 5.70999C3.025 4.70499 3.279 4.12499 3.702 3.70199L2.642 2.64199C1.892 3.38999 1.561 4.33899 1.403 5.51099C1.248 6.661 1.25 8.13599 1.25 9.99999H2.75ZM10.03 1.24999C8.155 1.24999 6.674 1.24799 5.519 1.40299C4.342 1.56099 3.39 1.89299 2.641 2.64099L3.701 3.70099C4.125 3.27899 4.706 3.02499 5.718 2.88999C6.751 2.75199 8.113 2.74999 10.03 2.74999V1.24999Z"
                fill="#FAFAFA" />
              <path d="M13 2.5V5C13 7.357 13 8.536 13.732 9.268C14.464 10 15.643 10 18 10H22" stroke="#FAFAFA"
                stroke-width="1.5" />
            </svg>Data Barang</a>
        </li>
        <li class="item">
          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="24" viewBox="0 0 24 24" fill="none">
              <path
                d="M14 21.25H10V22.75H14V21.25ZM2.75 14V9.99999H1.25V14H2.75ZM21.25 13.563V14H22.75V13.563H21.25ZM14.891 4.61099L18.85 8.17399L19.853 7.05799L15.895 3.49499L14.891 4.61099ZM22.75 13.563C22.75 11.874 22.765 10.804 22.34 9.84799L20.969 10.459C21.235 11.057 21.25 11.742 21.25 13.563H22.75ZM18.85 8.17399C20.203 9.39199 20.703 9.86199 20.969 10.459L22.34 9.84799C21.914 8.89099 21.109 8.18799 19.853 7.05799L18.85 8.17399ZM10.03 2.74999C11.612 2.74999 12.209 2.76199 12.74 2.96599L13.278 1.56599C12.426 1.23799 11.498 1.24999 10.03 1.24999V2.74999ZM15.895 3.49599C14.809 2.51899 14.13 1.89199 13.278 1.56599L12.741 2.96599C13.273 3.16999 13.721 3.55799 14.891 4.61099L15.895 3.49599ZM10 21.25C8.093 21.25 6.739 21.248 5.71 21.11C4.705 20.975 4.125 20.721 3.702 20.298L2.642 21.358C3.39 22.108 4.339 22.439 5.511 22.597C6.661 22.752 8.136 22.75 10 22.75V21.25ZM1.25 14C1.25 15.864 1.248 17.338 1.403 18.489C1.561 19.661 1.893 20.61 2.641 21.359L3.701 20.299C3.279 19.875 3.025 19.295 2.89 18.289C2.752 17.262 2.75 15.907 2.75 14H1.25ZM14 22.75C15.864 22.75 17.338 22.752 18.489 22.597C19.661 22.439 20.61 22.107 21.359 21.359L20.299 20.299C19.875 20.721 19.295 20.975 18.289 21.11C17.262 21.248 15.907 21.25 14 21.25V22.75ZM21.25 14C21.25 15.907 21.248 17.262 21.11 18.29C20.975 19.295 20.721 19.875 20.298 20.298L21.358 21.358C22.108 20.61 22.439 19.661 22.597 18.489C22.752 17.339 22.75 15.864 22.75 14H21.25ZM2.75 9.99999C2.75 8.09299 2.752 6.73899 2.89 5.70999C3.025 4.70499 3.279 4.12499 3.702 3.70199L2.642 2.64199C1.892 3.38999 1.561 4.33899 1.403 5.51099C1.248 6.661 1.25 8.13599 1.25 9.99999H2.75ZM10.03 1.24999C8.155 1.24999 6.674 1.24799 5.519 1.40299C4.342 1.56099 3.39 1.89299 2.641 2.64099L3.701 3.70099C4.125 3.27899 4.706 3.02499 5.718 2.88999C6.751 2.75199 8.113 2.74999 10.03 2.74999V1.24999Z"
                fill="#FAFAFA" />
              <path d="M13 2.5V5C13 7.357 13 8.536 13.732 9.268C14.464 10 15.643 10 18 10H22" stroke="#FAFAFA"
                stroke-width="1.5" />
            </svg> Peminjam</a>
        </li>

        <li class="item">
          <a href="kategori_inventaris.php" id="active"> <svg xmlns="http://www.w3.org/2000/svg" width="38" height="24"
              viewBox="0 0 24 24" fill="#18181B">
              <path d="M12 2L6.5 11H17.5L12 2Z" fill="#18181B" />
              <path
                d="M17.5 22C19.9853 22 22 19.9853 22 17.5C22 15.0147 19.9853 13 17.5 13C15.0147 13 13 15.0147 13 17.5C13 19.9853 15.0147 22 17.5 22Z"
                fill="#18181B" />
              <path d="M3 13.5H11V21.5H3V13.5Z" fill="#18181B" />
            </svg>Kategori</a>
        </li>

      </ul>
      <ul class="keluar">
        <a href="#" class="keluar-a"><svg width="38" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2 18C1.45 18 0.979002 17.804 0.587002 17.412C0.195002 17.02 -0.000664969 16.5493 1.69779e-06 16V2C1.69779e-06 1.45 0.196002 0.979002 0.588002 0.587002C0.980002 0.195002 1.45067 -0.000664969 2 1.69779e-06H9V2H2V16H9V18H2ZM13 14L11.625 12.55L14.175 10H6V8H14.175L11.625 5.45L13 4L18 9L13 14Z"
              fill="#FAFAFA" />
          </svg>
          Logout</a>
      </ul>
    </div>
  </nav>

  <nav class="navbar">
    <div class="judul-halaman">
      <h3>Tambah Kategori </h3>
    </div>
    <div class="profil">
      <img src="assets/image/user.png" alt="">
    </div>
  </nav>

  <main class="main">
    <div class="isi-konten">
    <div class="tambah-data">
    <form action="" method="POST">


      <div class="col">
        <div class="teksbox">
          <p>Nama Kategori</p>
          <input type="text" name="nama_kategori" placeholder="Masukan Nama Kategori" required>
        </div>
      </div>


      <div class="col">
        <div class="deskripsi">
          <p>Keterangan  </p>
          <textarea name="ket" id="" required></textarea>
        </div>
      </div>
      
      <div class="col">
        <button class="btn btn-primary" name="kirim">Konfirmasi</button>
      </div>
      
    
   

    </form>
    </div>
</div>
  </main>


  <script src="https://code.jquery.com/jquery-3.7.0.js"> </script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"> </script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"> </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="script/script.js"></script>
  <script src="script/data-table.js"></script>
</body>

</html>

