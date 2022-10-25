// const modal = document.querySelector(".btn-new");
// const modalActive = document.querySelector(".modal-content");
// const modalClose = document.querySelector(".modal-close");

// modal.addEventListener("click", () => {
//     modalActive.classList.add("modal-active");
// });

// modalClose.addEventListener("click", () => {
//     modalActive.classList.remove("modal-active");
// });


const Modal = {
    open() {
       document.querySelector('.modal-content').classList.add('modal-active'); 
    },

    close() {
        document.querySelector('.modal-content').classList.remove('modal-active');
    }
}

const ModalEdit = {
    open() {
       document.querySelector('.modal-content-edit').classList.add('modal-active'); 
    },

    close() {
        document.querySelector('.modal-content-edit').classList.remove('modal-active');
    }
}