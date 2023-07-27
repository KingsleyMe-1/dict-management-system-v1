const addModal = document.querySelector("#add-modal");
const viewModal = document.querySelector("#view-modal");
const editModal = document.querySelector("#edit-modal");

const addBtn = document.querySelector("#add-button");
const viewBtn = document.querySelectorAll("#view-button");
const editBtn = document.querySelectorAll("#edit-button");

const exitAddModalBtn = document.querySelector("#exit-add-modal");
const exitViewModalBtn = document.querySelector("#exit-view-modal");
const exitEditModalBtn = document.querySelector("#exit-edit-modal");

addBtn.addEventListener("click", () => {
  addModal.showModal();
});

viewBtn.forEach((view) => {
  view.addEventListener("click", () => {
    viewModal.showModal();
  });
});

editBtn.forEach((edit) => {
  edit.addEventListener("click", () => {
    editModal.showModal();
  });
});

exitAddModalBtn.addEventListener("click", () => {
  addModal.close();
});

exitViewModalBtn.addEventListener("click", () => {
  viewModal.close();
});

exitEditModalBtn.addEventListener("click", () => {
  editModal.close();
});

const dragArea = document.querySelector("#drag-area");
const dragText = document.querySelector(".header");
const browseFile = document.querySelector("#browse-span");
const removeFile = document.querySelector("#remove-file");
const secondText = document.querySelector("#second-text");

dragArea.addEventListener("dragover", (event) => {
  event.preventDefault();
  dragText.textContent = "RELEASE & DROP";
  dragArea.classList.add("active");
  secondText.classList.add("remove-text");
});

dragArea.addEventListener("dragleave", () => {
  dragText.textContent = "DRAG & DROP";
  dragArea.classList.remove("active");
  secondText.classList.remove("remove-text");
});

dragArea.addEventListener("drop", (event) => {
  event.preventDefault();
  dragArea.style.border = "2px dashed #1638e3";
  dragText.textContent = "DRAG & DROP";
  secondText.classList.remove("remove-text");
});
