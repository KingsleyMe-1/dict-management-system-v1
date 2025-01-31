<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Equipments | DICT</title>
    <link rel="stylesheet" href="equipment.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <img
        src="../Images/257942999_658424271984697_573245149971478945_n 1.png"
        alt="DICT-Logo"
      />
      <h1 class="header-text">Inventory Management System</h1>
    </header>
    <main>
      <nav class="navbar">
        <ul class="navbar-nav">
          <li class="nav-item" id="list1">
            <a href="dashboard.php" class="nav-link">
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
            <a href="../Furniture/furniture.html" class="nav-link">
              <i class="fa-solid fa-chair"></i>
              <span class="nav-text" id="text4">Furnitures</span>
            </a>
          </li>
          <li class="nav-item" id="list5">
            <a href="../Other/other.html" class="nav-link">
              <i class="fa-solid fa-list"></i>
              <span class="nav-text" id="text5">Others</span>
            </a>
          </li>
          <li class="nav-item active" id="list6">
            <a href="../Equipment/equipment.html" class="nav-link active">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <span class="nav-text" id="text6">Equipments</span>
            </a>
          </li>
          <li class="nav-item" id="list7">
            <a href="../Transaction/transaction.html" class="nav-link">
              <i class="fa-solid fa-rectangle-list"></i>
              <span class="nav-text" id="text7">Transactions</span>
            </a>
          </li>
          <li class="nav-item" id="list8">
            <a href="../index.html" class="nav-link">
              <i class="fa-solid fa-power-off"></i>
              <span class="nav-text" id="text8">Logout</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="modal" id="modal"></div>
      <div class="content">
        <div class="content-header">
          <h2 class="content-title">EQUIPMENTS</h2>
        </div>
        <div class="main-content">
          <div class="main-content-header">
            <div class="search-bar-wrapper">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input
                type="text"
                name="search-bar"
                id="search-bar"
                placeholder="Search here..."
              />
            </div>
            <div class="buttons">
              <button>Add</button>
              <button>Export To PDF</button>
            </div>
          </div>
          <div class="main-content-table">
            <table>
              <tr>
                <th>Code</th>
                <th>Control No.</th>
                <th>Serial No.</th>
                <th>Property No.</th>
                <th>Status</th>
                <th>Remarks</th>
                <th colspan="3">Actions</th>
              </tr>
              <tr>
                <td>MOUSE</td>
                <td>00</td>
                <td>00</td>
                <td>00</td>
                <td>Available</td>
                <td>Ready to Use</td>
                <td>
                  <img
                    src="../Images/delete.png"
                    alt=""
                    srcset=""
                    class="button-icon delete"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                  />
                </td>
              </tr>
              <tr>
                <td>KEYB</td>
                <td>01</td>
                <td>00</td>
                <td>00</td>
                <td>Available</td>
                <td>Ready to Use</td>
                <td>
                  <img
                    src="../Images/delete.png"
                    alt=""
                    srcset=""
                    class="button-icon delete"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                  />
                </td>
              </tr>
              <tr>
                <td>VSAT</td>
                <td>02</td>
                <td>00</td>
                <td>00</td>
                <td>Available</td>
                <td>Ready to Use</td>
                <td>
                  <img
                    src="../Images/delete.png"
                    alt=""
                    srcset=""
                    class="button-icon delete"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                  />
                </td>
              </tr>
              <tr>
                <td>ROUTS</td>
                <td>03</td>
                <td>00</td>
                <td>00</td>
                <td>Available</td>
                <td>Ready to Use</td>
                <td>
                  <img
                    src="../Images/delete.png"
                    alt=""
                    srcset=""
                    class="button-icon delete"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                  />
                </td>
              </tr>
              <tr>
                <td>PRINTER</td>
                <td>04</td>
                <td>00</td>
                <td>00</td>
                <td>Available</td>
                <td>Ready to Use</td>
                <td>
                  <img
                    src="../Images/delete.png"
                    alt=""
                    srcset=""
                    class="button-icon delete"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                  />
                </td>
              </tr>
              <tr>
                <td>ITEM</td>
                <td>00</td>
                <td>00</td>
                <td>00</td>
                <td>Available</td>
                <td>Ready to Use</td>
                <td>
                  <img
                    src="../Images/delete.png"
                    alt=""
                    srcset=""
                    class="button-icon delete"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                  />
                </td>
              </tr>
              <tr>
                <td>ITEM</td>
                <td>00</td>
                <td>00</td>
                <td>00</td>
                <td>Available</td>
                <td>Ready to Use</td>
                <td>
                  <img
                    src="../Images/delete.png"
                    alt=""
                    srcset=""
                    class="button-icon delete"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                  />
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </main>

    <script src="equipment.js"></script>
  </body>
</html>
