const modal = document.querySelector(".btn-new");
const modalActive = document.querySelector(".modal-content");
const modalClose = document.querySelector(".modal-close");

modal.addEventListener("click", () => {
    modalActive.classList.add("modal-active");
});

modalClose.addEventListener("click", () => {
    modalActive.classList.remove("modal-active");
});
