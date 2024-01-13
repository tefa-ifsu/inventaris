<?php

include "koneksi.php";

$data1 = mysqli_query($con, "SELECT * FROM barang_inventaris WHERE id_barang ");
$jmlbarang = mysqli_num_rows($data1);

$data2 = mysqli_query($con, "SELECT * FROM kategori_barang_inventaris WHERE id_kategori ");
$jmlkategori = mysqli_num_rows($data2);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
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
          <a href="dashboard.php" id="active"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="24"
              viewBox="0 0 24 24" fill="none">
              <rect width="24" height="24" fill="#FAFAFA" />
              <path
                d="M4 13H10C10.55 13 11 12.55 11 12V4C11 3.45 10.55 3 10 3H4C3.45 3 3 3.45 3 4V12C3 12.55 3.45 13 4 13ZM4 21H10C10.55 21 11 20.55 11 20V16C11 15.45 10.55 15 10 15H4C3.45 15 3 15.45 3 16V20C3 20.55 3.45 21 4 21ZM14 21H20C20.55 21 21 20.55 21 20V12C21 11.45 20.55 11 20 11H14C13.45 11 13 11.45 13 12V20C13 20.55 13.45 21 14 21ZM13 4V8C13 8.55 13.45 9 14 9H20C20.55 9 21 8.55 21 8V4C21 3.45 20.55 3 20 3H14C13.45 3 13 3.45 13 4Z"
                fill="#18181B" />
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
          <a href="kategori_inventaris.php"> <svg xmlns="http://www.w3.org/2000/svg" width="38" height="24"
              viewBox="0 0 24 24" fill="none">
              <path d="M12 2L6.5 11H17.5L12 2Z" fill="white" />
              <path
                d="M17.5 22C19.9853 22 22 19.9853 22 17.5C22 15.0147 19.9853 13 17.5 13C15.0147 13 13 15.0147 13 17.5C13 19.9853 15.0147 22 17.5 22Z"
                fill="white" />
              <path d="M3 13.5H11V21.5H3V13.5Z" fill="white" />
            </svg>Kategori</a>
        </li>
     

      </ul>
      <ul class="keluar">
        <a href="#" class="keluar-a"><svg width="38" height="18" viewBox="0 0 18 18" fill="none"
            xmlns="http://www.w3.org/2000/svg">
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
      <h3>Dashboard </h3>
    </div>
    <div class="profil">
      <img src="assets/image/user.png" alt="">
    </div>
  </nav>



  <main class="main">
    <div class="isi-konten">

      <div class="konten-card-dashboard">
        <div class="judul-card">

          <div class="judul">
            <h2>Today’s Sales</h2>
            <p>Sales Summery</p>
          </div>

          <div class="export">
            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M11.1007 5.11257L8.43899 2.83138C8.31472 2.72244 8.15784 2.66671 8.00013 2.66663C7.89223 2.66657 7.78393 2.69257 7.68544 2.74541C7.64154 2.76889 7.59984 2.79757 7.56128 2.83138L4.89959 5.11257C4.62003 5.35217 4.58763 5.77303 4.82723 6.0526C5.06683 6.33216 5.4877 6.36456 5.76726 6.12496L7.33342 4.78268V9.94578C7.33342 10.314 7.6319 10.6124 8.00009 10.6124C8.36828 10.6124 8.66676 10.314 8.66676 9.94578L8.66676 4.78261L10.233 6.12496C10.5126 6.36456 10.9334 6.33216 11.173 6.0526C11.4126 5.77303 11.3802 5.35217 11.1007 5.11257ZM4.00008 9.33329C4.00008 8.9651 4.29856 8.66663 4.66675 8.66663H5.66675C6.03494 8.66663 6.33341 8.36815 6.33341 7.99996C6.33341 7.63177 6.03494 7.33329 5.66675 7.33329H4.66675C3.56218 7.33329 2.66675 8.22872 2.66675 9.33329V11.3333C2.66675 12.4379 3.56218 13.3333 4.66675 13.3333H11.3334C12.438 13.3333 13.3334 12.4379 13.3334 11.3333V9.33329C13.3334 8.22872 12.438 7.33329 11.3334 7.33329H10.3334C9.96522 7.33329 9.66675 7.63177 9.66675 7.99996C9.66675 8.36815 9.96522 8.66663 10.3334 8.66663H11.3334C11.7016 8.66663 12.0001 8.9651 12.0001 9.33329V11.3333C12.0001 11.7015 11.7016 12 11.3334 12H4.66675C4.29856 12 4.00008 11.7015 4.00008 11.3333V9.33329Z"
                  fill="#0F3659" />
              </svg>
              Export
            </button>
          </div>
        </div>


        <div class="card-dashboard">

          <div class="card">
            <div class="isi-card">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <circle cx="20" cy="20" r="20" fill="#FA5A7D" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M13 11C11.8954 11 11 11.8954 11 13V27C11 28.1046 11.8954 29 13 29H27C28.1046 29 29 28.1046 29 27V13C29 11.8954 28.1046 11 27 11H13ZM16 21C16 20.4477 15.5523 20 15 20C14.4477 20 14 20.4477 14 21V25C14 25.5523 14.4477 26 15 26C15.5523 26 16 25.5523 16 25V21ZM20 17C20.5523 17 21 17.4477 21 18V25C21 25.5523 20.5523 26 20 26C19.4477 26 19 25.5523 19 25V18C19 17.4477 19.4477 17 20 17ZM26 15C26 14.4477 25.5523 14 25 14C24.4477 14 24 14.4477 24 15V25C24 25.5523 24.4477 26 25 26C25.5523 26 26 25.5523 26 25V15Z"
                  fill="white" />
              </svg>
              <h2>3</h2>
              <p>Jumlah Peminjam</p>
            </div>
          </div>

          <div class="card">
            <div class="isi-card">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <circle cx="20" cy="20" r="20" fill="#FF947A" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 14C12 11.7909 13.7909 10 16 10H22V14C22 16.2091 23.7909 18 26 18H28V26C28 28.2091 26.2091 30 24 30H16C13.7909 30 12 28.2091 12 26V14ZM16 19C15.4477 19 15 19.4477 15 20C15 20.5523 15.4477 21 16 21H18C18.5523 21 19 20.5523 19 20C19 19.4477 18.5523 19 18 19H16ZM16 23C15.4477 23 15 23.4477 15 24C15 24.5523 15.4477 25 16 25H20C20.5523 25 21 24.5523 21 24C21 23.4477 20.5523 23 20 23H16ZM24.6818 12.1988L24.5509 14.1629C24.5106 14.7666 25.0115 15.2674 25.6152 15.2272L27.5792 15.0962C28.4365 15.0391 28.8274 13.9989 28.2198 13.3913L26.3867 11.5582C25.7792 10.9507 24.7389 11.3415 24.6818 12.1988Z"
                  fill="white" />
              </svg>
              <h2><?php echo $jmlbarang; ?></h2>
              <p>Jumlah Barang</p>
            </div>
          </div>

          <div class="card">
            <div class="isi-card">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <circle cx="20" cy="20" r="20" fill="#3CD856" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M24.6261 13.2653L21.3263 13.7367C20.8222 13.8087 20.4103 14.049 20.1162 14.3811L12.4167 22.0806C11.6357 22.8616 11.6357 24.1279 12.4167 24.909L15.2452 27.7374C16.0263 28.5185 17.2925 28.5185 18.0736 27.7374L25.773 20.038C26.1051 19.7439 26.3454 19.332 26.4174 18.8279L26.8888 15.528C27.0775 14.2081 25.946 13.0767 24.6261 13.2653ZM22.3162 17.8379C22.7067 18.2284 23.3399 18.2285 23.7305 17.8379C24.121 17.4474 24.1209 16.8142 23.7305 16.4237C23.34 16.0332 22.7068 16.0332 22.3162 16.4237C21.9257 16.8142 21.9257 17.4474 22.3162 17.8379Z"
                  fill="white" />
              </svg>
              <h2><?php echo $jmlkategori; ?></h2>
              <p>Jumlah Kategori</p>
            </div>
          </div>

          <div class="card">
            <div class="isi-card">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <circle cx="20" cy="20" r="20" fill="#BF83FF" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M22 16C22 18.2091 20.2091 20 18 20C15.7909 20 14 18.2091 14 16C14 13.7909 15.7909 12 18 12C20.2091 12 22 13.7909 22 16ZM18 21C14.134 21 11 23.2386 11 26C11 27.1046 11.8954 28 13 28H23C24.1046 28 25 27.1046 25 26C25 23.2386 21.866 21 18 21ZM26 14C26.5523 14 27 14.4477 27 15V16H28C28.5523 16 29 16.4477 29 17C29 17.5523 28.5523 18 28 18H27V19C27 19.5523 26.5523 20 26 20C25.4477 20 25 19.5523 25 19V18H24C23.4477 18 23 17.5523 23 17C23 16.4477 23.4477 16 24 16H25V15C25 14.4477 25.4477 14 26 14Z"
                  fill="white" />
              </svg>
              <h2>4</h2>
              <p>Lorem Ipsom</p>
            </div>
          </div>

          <div class="card">
            <div class="isi-card">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <circle cx="20" cy="20" r="20" fill="#FA5A7D" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M13 11C11.8954 11 11 11.8954 11 13V27C11 28.1046 11.8954 29 13 29H27C28.1046 29 29 28.1046 29 27V13C29 11.8954 28.1046 11 27 11H13ZM16 21C16 20.4477 15.5523 20 15 20C14.4477 20 14 20.4477 14 21V25C14 25.5523 14.4477 26 15 26C15.5523 26 16 25.5523 16 25V21ZM20 17C20.5523 17 21 17.4477 21 18V25C21 25.5523 20.5523 26 20 26C19.4477 26 19 25.5523 19 25V18C19 17.4477 19.4477 17 20 17ZM26 15C26 14.4477 25.5523 14 25 14C24.4477 14 24 14.4477 24 15V25C24 25.5523 24.4477 26 25 26C25.5523 26 26 25.5523 26 25V15Z"
                  fill="white" />
              </svg>
              <h2>4</h2>
              <p>Lorem Ipsom</p>
            </div>
          </div>

        </div>
      </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="script/script.js"></script>
</body>

</html>