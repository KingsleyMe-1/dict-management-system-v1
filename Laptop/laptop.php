<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laptop | DICT</title>
    <link rel="stylesheet" href="laptop.css" />
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
            <a href="../Dashboard/dashboard.html" class="nav-link">
              <i class="fa-solid fa-gauge-high"></i>
              <span class="nav-text" id="text1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" id="list2">
            <a href="../Computer/computer.html" class="nav-link">
              <i class="fa-solid fa-computer"></i>
              <span class="nav-text" id="text2">Computers</span>
            </a>
          </li>
          <li class="nav-item active" id="list3">
            <a href="../Laptop/laptop.html" class="nav-link active">
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
          <li class="nav-item" id="list6">
            <a href="../Equipment/equipment.html" class="nav-link">
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

      <dialog class="add-modal" id="add-modal">
        <div class="add-modal-header">
          <span class="add-entry-number"
            >Entry No. <span class="add-entry-count">00</span></span
          >
          <h1>Laptop Inventory</h1>
          <img
            src="../Images/exit-icon-4604.png"
            alt="exit-logo"
            id="exit-add-modal"
          />
        </div>
        <div class="add-modal-content" id="add-modal-content">
          <div class="add-modal-left">
            <table class="add-modal-table">
              <tr class="add-modal-tr">
                <th>NAME</th>
                <th>AVAILABLE</th>
                <th>FUNCTIONAL</th>
                <th>SET NO.</th>
                <th>SERIAL NO.</th>
                <th>PROPERTY NO.</th>
              </tr>
              <tr>
                <td>AC CHORD</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="add-available"
                  />
                </td>
                <td>
                  <input type="checkbox" name="condition" id="add-functional" />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="add-number-input"
                    id="add-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="add-number-input"
                    id="add-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="add-number-input"
                    id="add-property-number"
                  />
                </td>
              </tr>
              <tr>
                <td>TOUCH PAD</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="add-available"
                  />
                </td>
                <td>
                  <input type="checkbox" name="condition" id="add-functional" />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="add-number-input"
                    id="add-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="add-number-input"
                    id="add-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="add-number-input"
                    id="add-property-number"
                  />
                </td>
              </tr>
              <tr>
                <td>KEYBOARD</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="add-available"
                  />
                </td>
                <td>
                  <input type="checkbox" name="condition" id="add-functional" />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="add-number-input"
                    id="add-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="add-number-input"
                    id="add-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="add-number-input"
                    id="add-property-number"
                  />
                </td>
              </tr>
              <tr>
                <td>MOUSE</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="add-available"
                  />
                </td>
                <td>
                  <input type="checkbox" name="condition" id="add-functional" />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="add-number-input"
                    id="add-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="add-number-input"
                    id="add-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="add-number-input"
                    id="add-property-number"
                  />
                </td>
              </tr>
            </table>
            <button class="add-save-button" id="add-save-button">
              ADD TO INVENTORY
            </button>
          </div>
        </div>
      </dialog>

      <dialog class="view-modal" id="view-modal">
        <div class="view-modal-header">
          <span class="view-entry-number"
            >Entry No. <span class="view-entry-count">00</span></span
          >
          <h1>Laptop Inventory</h1>
          <img
            src="../Images/exit-icon-4604.png"
            alt="exit-logo"
            id="exit-view-modal"
          />
        </div>
        <div class="view-modal-content" id="view-modal-content">
          <div class="view-left">
            <table class="view-modal-table">
              <tr>
                <th>NAME</th>
                <th>AVAILABLE</th>
                <th>FUNCTIONAL</th>
                <th>SET NO.</th>
                <th>SERIAL NO.</th>
                <th>PROPERTY NO.</th>
              </tr>
              <tr>
                <td>AC CHORD</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="view-available"
                  />
                </td>
                <td>
                  <input
                    type="checkbox"
                    name="condition"
                    id="view-functional"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="view-number-input"
                    id="view-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="view-number-input"
                    id="view-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="view-number-input"
                    id="view-property-number"
                  />
                </td>
              </tr>
              <tr>
                <td>TOUCHPAD</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="view-available"
                  />
                </td>
                <td>
                  <input
                    type="checkbox"
                    name="condition"
                    id="view-functional"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="view-number-input"
                    id="view-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="view-number-input"
                    id="view-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="view-number-input"
                    id="view-property-number"
                  />
                </td>
              </tr>
              <tr>
                <td>KEYBOARD</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="view-available"
                  />
                </td>
                <td>
                  <input
                    type="checkbox"
                    name="condition"
                    id="view-functional"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="view-number-input"
                    id="view-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="view-number-input"
                    id="view-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="view-number-input"
                    id="view-property-number"
                  />
                </td>
              </tr>
              <tr>
                <td>MOUSE</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="view-available"
                  />
                </td>
                <td>
                  <input
                    type="checkbox"
                    name="condition"
                    id="view-functional"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="view-number-input"
                    id="view-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="view-number-input"
                    id="view-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="view-number-input"
                    id="view-property-number"
                  />
                </td>
              </tr>
            </table>
          </div>
          <div class="view-right">
            <div class="drag-area" id="drag-area" style="margin-top: 35px">
              <span class="browse-span" id="browse-span">FILE HERE</span>
            </div>
          </div>
        </div>
      </dialog>

      <dialog class="edit-modal" id="edit-modal">
        <div class="edit-modal-header">
          <span class="entry-number"
            >Entry No. <span class="entry-count">00</span></span
          >
          <h1>Laptop Inventory</h1>
          <img
            src="../Images/exit-icon-4604.png"
            alt="exit-logo"
            id="exit-edit-modal"
          />
        </div>
        <div class="edit-modal-content" id="modal-content">
          <div class="edit-left">
            <table class="edit-modal-table">
              <tr>
                <th>NAME</th>
                <th>AVAILABLE</th>
                <th>FUNCTIONAL</th>
                <th>SET NO.</th>
                <th>SERIAL NO.</th>
                <th>PROPERTY NO.</th>
              </tr>
              <tr>
                <td>AC CHORD</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="edit-available"
                  />
                </td>
                <td>
                  <input
                    type="checkbox"
                    name="condition"
                    id="edit-functional"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="edit-number-input"
                    id="edit-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="edit-number-input"
                    id="edit-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="edit-number-input"
                    id="edit-property-number"
                  />
                </td>
              </tr>
              <tr>
                <td>TOUCHPAD</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="edit-available"
                  />
                </td>
                <td>
                  <input
                    type="checkbox"
                    name="condition"
                    id="edit-functional"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="edit-number-input"
                    id="edit-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="edit-number-input"
                    id="edit-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="edit-number-input"
                    id="edit-property-number"
                  />
                </td>
              </tr>
              <tr>
                <td>KEYBOARD</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="edit-available"
                  />
                </td>
                <td>
                  <input
                    type="checkbox"
                    name="condition"
                    id="edit-functional"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="edit-number-input"
                    id="edit-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="edit-number-input"
                    id="edit-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="edit-number-input"
                    id="edit-property-number"
                  />
                </td>
              </tr>
              <tr>
                <td>MOUSE</td>
                <td>
                  <input
                    type="checkbox"
                    name="availability"
                    id="edit-available"
                  />
                </td>
                <td>
                  <input
                    type="checkbox"
                    name="condition"
                    id="edit-functional"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="set-number"
                    class="edit-number-input"
                    id="edit-set-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="serial-number"
                    class="edit-number-input"
                    id="edit-serial-number"
                  />
                </td>
                <td>
                  <input
                    type="number"
                    name="property-number"
                    class="edit-number-input"
                    id="edit-property-number"
                  />
                </td>
              </tr>
            </table>
            <button class="edit-save-button" id="edit-save-button">SAVE</button>
          </div>
          <div class="edit-right">
            <h2 class="edit-right-header">Upload File Here</h2>
            <div class="drag-area" id="drag-area">
              <i class="fas fa-images"></i>
              <span class="header">DRAG & DROP</span>
              <span class="header" id="second-text"
                >or
                <span class="browse-span" id="browse-span">BROWSE</span></span
              >
            </div>
            <button class="remove-file-button" id="remove-file">REMOVE</button>
          </div>
        </div>
      </dialog>

      <div class="content">
        <div class="content-header">
          <h2 class="content-title">LAPTOPS</h2>
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
              <button id="add-button">Add</button>
              <button>Export To PDF</button>
            </div>
          </div>
          <div class="main-content-table">
            <table>
              <tr>
                <th>Code</th>
                <th>Set No.</th>
                <th>Serial No.</th>
                <th>Property No.</th>
                <th>Status</th>
                <th>Remarks</th>
                <th colspan="3">Actions</th>
              </tr>
              <tr>
                <td>LAPTOP</td>
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
                    id="delete-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                    id="view-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                    id="edit-button"
                  />
                </td>
              </tr>
              <tr>
                <td>LAPTOP</td>
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
                    id="delete-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                    id="view-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                    id="edit-button"
                  />
                </td>
              </tr>
              <tr>
                <td>LAPTOP</td>
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
                    id="delete-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                    id="view-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                    id="edit-button"
                  />
                </td>
              </tr>
              <tr>
                <td>LAPTOP</td>
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
                    id="delete-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                    id="view-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                    id="edit-button"
                  />
                </td>
              </tr>
              <tr>
                <td>LAPTOP</td>
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
                    id="delete-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                    id="view-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                    id="edit-button"
                  />
                </td>
              </tr>
              <tr>
                <td>LAPTOP</td>
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
                    id="delete-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                    id="view-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                    id="edit-button"
                  />
                </td>
              </tr>
              <tr>
                <td>LAPTOP</td>
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
                    id="delete-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/view.png"
                    alt=""
                    srcset=""
                    class="button-icon view"
                    id="view-button"
                  />
                </td>
                <td>
                  <img
                    src="../Images/edit.png"
                    alt=""
                    srcset=""
                    class="button-icon edit"
                    id="edit-button"
                  />
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </main>

    <script src="laptop.js"></script>
  </body>
</html>
