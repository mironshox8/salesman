<?php
   include 'config.php';
   if (!isset($_SESSION['admin'])) {
       header("Location: index.php");
       exit();
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Aqlli tarozi </title>

  <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="../dist/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../dist/css/demo.css">
  <link rel="stylesheet" href="../dist/css/style.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="Qidiruv..." placeholder="Qidiruv..." aria-label="Qidiruv...">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">View All</a>
                </div>
              </div>
              
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Salom, Mironshox</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="logout.php" class="dropdown-item has-icon">
             <button class="logout"> <i class="ion ion-log-out"></i> Chiqish</button></a>
             
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="dashboard.php">Aqlli Tarozi</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="../dist/img/avatar/avatar-1.png">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">Mironshox</div>
              <div class="user-role">
                Administrator
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Sozlamalar</li>
            <li class="active">
              <a href="#"><i class="fa fa-home"></i><span>Bosh sahifa</span></a>
            </li>

            <li class="menu-header">Hisobotlar</li>
            
            <li>
              <a href="mahsulot.php"><i class="fa fa-shopping-cart"></i> Maxsulotlar<div class="badge badge-primary">    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

// MySQLga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total FROM mahsulotlar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "" . $row["total"];
} else {
    echo "";
}

?></div></a>
            </li>
            
            <li>
              <a href="#" class="has-dropdown"><i class="fa fa-list-ul"></i><span>Boshqaruv menyusi</span></a>
              <ul class="menu-dropdown">
              <li><a href="yangi.php"><i class="ion ion-ios-circle-outline"></i> Yangi mahsulot</a></li>
                
                <li><a href="sotuv.php"><i class="ion ion-ios-circle-outline"></i> Sotilgan mahsulot</a></li>
                
                <li><a href="qoldiq.php"><i class="ion ion-ios-circle-outline"></i> Omborxona</a></li>
              </ul>
            </li>
            <li class="menu-header">More</li>
            
            <li>
              <a href="kiritish.php"><i class="fa fa-plus-square"></i> Yangi mahsulot nomi</a>
            </li>
            <li>
              <a href="jamoa.php"><i class="fa fa-users"></i> Bizning jamoa</a>
            </li>          </ul>
          <div class="p-3 mt-4 mb-4">
            <a href="https://t.me/PTMA_QORAKUL_IMI_UZ" class="btn btn-info btn-shadow btn-round has-icon has-icon-nofloat btn-block">
              <i class="ion-paper-airplane"></i> <div>Telegram sahifamiz</div>
            </a>
          </div>
        </aside>
      </div>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Shaxsiy kabinet</div>
          </h1>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-success">
                  <i class="ion-social-usd"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jami aylanma summa</h4>
                  </div>
                  <div class="card-body">
                  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

// MySQLga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanish tekshiruvi
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

// Jami ombor massasini hisoblash
$sql_total = "SELECT SUM(ombor_massa) AS jami_ombor_massa FROM (
                SELECT SUM(om.massa) AS ombor_massa
                FROM omborxona om
                GROUP BY om.mahsulot
              ) AS subquery";

$result_total = $conn->query($sql_total);
$jami_ombor_massa = 0;

if ($result_total && $result_total->num_rows > 0) {
    $row_total = $result_total->fetch_assoc();
    $jami_ombor_massa = $row_total["jami_ombor_massa"];
}

// Asosiy ma'lumotlarni chiqarish
$sql = "SELECT o.mahsulot_nomi, o.ombor_massa, COALESCE(s.sotilgan_massa, 0) AS sotilgan_massa, 
               (o.ombor_massa - COALESCE(s.sotilgan_massa, 0)) AS qolgan_massa
        FROM (
            SELECT m.mahsulot_nomi, om.mahsulot, SUM(om.massa) AS ombor_massa
            FROM omborxona om
            JOIN mahsulotlar m ON om.mahsulot = m.unical_id
            GROUP BY om.mahsulot, m.mahsulot_nomi
        ) o
        LEFT JOIN (
            SELECT s.mahsulot, SUM(s.massa) AS sotilgan_massa
            FROM sale s
            GROUP BY s.mahsulot
        ) s ON o.mahsulot = s.mahsulot";

$result = $conn->query($sql);
?>
 <?php if ($result && $result->num_rows > 0): ?>
                <?php $n=1; while ($row = $result->fetch_assoc()): 
                    $s=round($row["sotilgan_massa"],2);
                    $d=round($row["qolgan_massa"],2);
                    $bosh = ucfirst(strtolower($row["mahsulot_nomi"]));
                    $image_path = "images/" . strtolower(str_replace(' ', '_', $row["mahsulot_nomi"])) . ".jpg";
                ?>
               
                <?php $n++; endwhile; ?>
            <?php endif; ?><?= number_format($jami_ombor_massa * 58000) ?> so'm
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-info">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Kunlik sotuv massasi</h4>
                  </div>
                  <div class="card-body">
                  <?php

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

$sql = "SELECT sum(massa) as jamimassa FROM sale";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $inom=round($row["jamimassa"],2);
    echo "" . $inom;
} else {
    echo "";
}

$conn->close();
?> kg
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-warning">
                 <i class="fa fa-balance-scale"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Omborxonadagi mahsulotlar massasi</h4>
                  </div>
                  <div class="card-body">
                  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

// MySQLga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanish tekshiruvi
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

// Jami ombor massasini hisoblash
$sql_total = "SELECT SUM(ombor_massa) AS jami_ombor_massa FROM (
                SELECT SUM(om.massa) AS ombor_massa
                FROM omborxona om
                GROUP BY om.mahsulot
              ) AS subquery";

$result_total = $conn->query($sql_total);
$jami_ombor_massa = 0;

if ($result_total && $result_total->num_rows > 0) {
    $row_total = $result_total->fetch_assoc();
    $jami_ombor_massa = $row_total["jami_ombor_massa"];
}

// Asosiy ma'lumotlarni chiqarish
$sql = "SELECT o.mahsulot_nomi, o.ombor_massa, COALESCE(s.sotilgan_massa, 0) AS sotilgan_massa, 
               (o.ombor_massa - COALESCE(s.sotilgan_massa, 0)) AS qolgan_massa
        FROM (
            SELECT m.mahsulot_nomi, om.mahsulot, SUM(om.massa) AS ombor_massa
            FROM omborxona om
            JOIN mahsulotlar m ON om.mahsulot = m.unical_id
            GROUP BY om.mahsulot, m.mahsulot_nomi
        ) o
        LEFT JOIN (
            SELECT s.mahsulot, SUM(s.massa) AS sotilgan_massa
            FROM sale s
            GROUP BY s.mahsulot
        ) s ON o.mahsulot = s.mahsulot";

$result = $conn->query($sql);
?>
 <?php if ($result && $result->num_rows > 0): ?>
                <?php $n=1; while ($row = $result->fetch_assoc()): 
                    $s=round($row["sotilgan_massa"],2);
                    $d=round($row["qolgan_massa"],2);
                    $bosh = ucfirst(strtolower($row["mahsulot_nomi"]));
                    $image_path = "images/" . strtolower(str_replace(' ', '_', $row["mahsulot_nomi"])) . ".jpg";
                ?>
               
                <?php $n++; endwhile; ?>
            <?php endif; ?><?= number_format($jami_ombor_massa, 2) ?> kg



                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-primary">
                  <i class="fa fa-percent"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Kunlik daromad</h4>
                  </div>
                  <div class="card-body">
                  <?php

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

$sql = "SELECT sum(massa) as jamimassa FROM sale";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $inom=round($row["jamimassa"],2) * 7000;
    echo "" . $inom;
} else {
    echo "";
}

$conn->close();
?>  so'm
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="row">
            <div class="c ol-lg-8 col-md-12 col-12 col-sm-12">
            <div class="card">
            <div class="card-header">
              
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_db";

// MySQLga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ulanish muvaffaqiyatsiz: " . $conn->connect_error);
}

// Yangi mahsulot qo'shish
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mahsulot'])) {
    $mahsulot = $_POST['mahsulot'];
    $massa = $_POST['massa'];
    $narx = $_POST['narx'];
    
    $sql = "INSERT INTO omborxona (mahsulot, massa, narx) VALUES ('$mahsulot', '$massa', '$narx')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success text-center'>Mahsulot muvaffaqiyatli qo'shildi!</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Xatolik: " . $conn->error . "</div>";
    }
}

// Ma'lumotlarni olish
$sql = "SELECT omborxona.id,omborxona.mahsulot,omborxona.massa, omborxona.narx,omborxona.sana,mahsulotlar.unical_id,mahsulotlar.mahsulot_nomi FROM `omborxona`,`mahsulotlar` WHERE omborxona.mahsulot = mahsulotlar.unical_id";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2 class="text-center mb-4"><b>YANGI MAHSULOT KIRITISH</b></h2>
    
    <form method="POST" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <select name="mahsulot" class="form-control" required>
                    <option value="">Mahsulotni tanlang</option>
                    <?php
                    $sqlMahsulotlar = "SELECT DISTINCT unical_id, mahsulot_nomi FROM mahsulotlar";
                    $resultMahsulotlar = $conn->query($sqlMahsulotlar);
                    while ($rowMahsulot = $resultMahsulotlar->fetch_assoc()) {
                        $bosh = ucfirst(strtolower($rowMahsulot["mahsulot_nomi"]));
                        echo "<option value='" . htmlspecialchars($rowMahsulot["unical_id"]) . "'>" . htmlspecialchars($bosh) . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-3">
                <input type="number" name="massa" class="form-control" placeholder="Massa (kg)" step="0.01" required>
            </div>
            <div class="col-md-3">
                <input type="number" name="narx" class="form-control" placeholder="Narx (so'm)" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success w-100">Qo'shish</button>
            </div>
        </div>
    </form>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th style="color:white;">№</th>
                <th style="color:white;">Rasmi</th>
                <th style="color:white;">Mahsulot</th>
                <th style="color:white;">Massa (kg)</th>
                <th style="color:white;">Narx (so'm)</th>
                <th style="color:white;">Sana</th>
                <th style="color:white;">Amallar</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $bosh = ucfirst(strtolower($row["mahsulot_nomi"]));
                    $image_path = "images/" . strtolower(str_replace(' ', '_', $row["mahsulot_nomi"])) . ".jpg";
                    echo "<tr>
                            <td>" . htmlspecialchars($row["id"])  . "</td>
                            <td><img src='" . htmlspecialchars($image_path) . "' alt='" . htmlspecialchars($bosh) . "' width='100' height='80'></td>
                            <td>" . htmlspecialchars($bosh)  . "</td>
                            <td>" . htmlspecialchars($row["massa"]) . "</td>
                            <td>" . htmlspecialchars($row["narx"]) . "</td>
                            <td>" . htmlspecialchars($row["sana"]) . "</td>
                            <td>
                                <form method='POST' action='delete.php' style='display:inline;'>
                                    <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                                    <button type='submit' class='btn btn-danger btn-sm' onclick='return confirm('Rostdan ham o‘chirmoqchimisiz?')'>O'chirish</button>
                                </form>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>Ma'lumot yo'q</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

<?php $conn->close(); ?>

                  </div>
                </div>
              </div>
            </div>
            
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2025 <div class="bullet"></div> Design By <a href="https://multinity.com/">Qorako'l IMI</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../dist/js/sa-functions.js"></script>
  
  <script src="../dist/modules/chart.min.js"></script>
  <script src="../dist/modules/summernote/summernote-lite.js"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Dushanba", "Seshanba", "Chorshanba", "Payshanba", "Juma", "Shanba", "Yakshanba"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>
  <script src="../dist/js/demo.js"></script>
</body>
</html>