<?php
session_start();


if (!isset($_SESSION['login_success'])) {
    header("Location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | DICT</title>
    <link rel="stylesheet" href="Dashboard/dashboard.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <img
        src="./Images/257942999_658424271984697_573245149971478945_n 1.png"
        alt="DICT-Logo"
      />
      <h1 class="header-text">Inventory Management System</h1>
    </header>
    <main>
      <nav class="navbar">
        <ul class="navbar-nav">
          <li class="nav-item active" id="list1">
            <a href="dashboard.php" class="nav-link active">
              <i class="fa-solid fa-gauge-high"></i>
              <span class="nav-text" id="text1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" id="list2">
            <a href="computer.php" class="nav-link">
              <i class="fa-solid fa-computer"></i>
              <span class="nav-text" id="text2">Computers</span>
            </a>
          </li>
          <li class="nav-item" id="list3">
            <a href="laptop.php" class="nav-link">
              <i class="fa-solid fa-laptop"></i>
              <span class="nav-text" id="text3">Laptops</span>
            </a>
          </li>
          <li class="nav-item" id="list4">
            <a href="furniture.php" class="nav-link">
              <i class="fa-solid fa-chair"></i>
              <span class="nav-text" id="text4">Furnitures</span>
            </a>
          </li>
          <li class="nav-item" id="list5">
            <a href="../Other/other.php" class="nav-link">
              <i class="fa-solid fa-list"></i>
              <span class="nav-text" id="text5">Others</span>
            </a>
          </li>
          <li class="nav-item" id="list6">
            <a href="../Equipment/equipment.php" class="nav-link">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <span class="nav-text" id="text6">Equipments</span>
            </a>
          </li>
          <li class="nav-item" id="list7">
            <a href="../Transaction/transaction.php" class="nav-link">
              <i class="fa-solid fa-rectangle-list"></i>
              <span class="nav-text" id="text7">Transactions</span>
            </a>
          </li>
          <li class="nav-item" id="list8">
            <a href="logout.php" class="nav-link">
              <i class="fa-solid fa-power-off"></i>
              <span class="nav-text" id="text8">Logout</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="content">
        <div class="content-header">
          <h2 class="content-title">DASHBOARD</h2>
        </div>
        <div class="main-content">
          <div class="row first">
            <div class="box">
              <div>
                <span class="material-name">Computer</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <img
                  src="Images/computer-icon-1042-Windows.ico"
                  alt=""
                  srcset=""
                />
              </div>
            </div>
            <div class="box">
              <div>
                <span class="material-name">Laptop</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <img
                  src="Images/laptop-png-6771-Windows.ico"
                  alt=""
                  srcset=""
                />
              </div>
            </div>
            <div class="box">
              <div>
                <span class="material-name">Keyboard</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <i class="fa-solid fa-keyboard"></i>
              </div>
            </div>
            <div class="box">
              <div>
                <span class="material-name">Mouse</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <i class="fa-solid fa-computer-mouse"></i>
              </div>
            </div>
            <div class="box">
              <div>
                <span class="material-name">Wires</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <img
                  src="Images/wire-icon-15470-Windows.ico"
                  alt=""
                  srcset=""
                />
              </div>
            </div>
          </div>
          <div class="row second">
            <div class="box">
              <div>
                <span class="material-name">Papers</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <i class="fa-solid fa-newspaper"></i>
              </div>
            </div>
            <div class="box">
              <div>
                <span class="material-name">Printers</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <img
                  src="Images/printer-icon-995-Windows.ico"
                  alt=""
                  srcset=""
                />
              </div>
            </div>
            <div class="box">
              <div>
                <span class="material-name">Chairs</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <i class="fa-solid fa-chair"></i>
              </div>
            </div>
            <div class="box">
              <div>
                <span class="material-name">Tables</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <img
                  src="Images/table-icon-24163-Windows.ico"
                  alt=""
                  srcset=""
                />
              </div>
            </div>
            <div class="box">
              <div>
                <span class="material-name">Speakers</span>
                <span class="material-count">00</span>
              </div>
              <div>
                <img
                  src="Images/sound-png-35757-Windows.ico"
                  alt=""
                  srcset=""
                />
              </div>
            </div>
          </div>
          <div class="recent-activity">
            <h1>Recent Activity</h1>
            <table>
              <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Company</th>
                <th>Purpose</th>
                <th>Time</th>
              </tr>
              <tr>
                <td>Peter Parker</td>
                <td>07/25/23</td>
                <td>Student</td>
                <td>Borrowed</td>
                <td>02:26 PM</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </main>

    <script src="Dashboard/dashboard.js"></script>
  </body>
</html>
