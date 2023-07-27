const addBtn = document.querySelector("#add-button");
const saveBtn = document.querySelector("#save-button");
const editModal = document.querySelector("#edit-modal");
const editBtn = document.querySelector("#edit-button");
const viewBtn = document.querySelector("#view-button");
const exitBtn = document.querySelector("#exit-button");

addBtn.addEventListener("click", () => {
  editModal.showModal();
});

editBtn.addEventListener("click", () => {
  editModal.showModal();
});

viewBtn.addEventListener("click", () => {
  editModal.showModal();
});

exitBtn.addEventListener("click", () => {
  editModal.close();
});
