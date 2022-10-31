// const Modal = {
//     open() {
//         document.querySelector(".modal-content").classList.add("modal-active");
//     },

//     close() {
//         document
//             .querySelector(".modal-content")
//             .classList.remove("modal-active");
//     },
// };

// const ModalEdit = {
//     open(name, label) {
//         const modal = document.querySelector(".modal-content-edit");

//         document
//             .querySelector(".modal-content-edit")
//             .classList.add("modal-active");

//         modalBodyInputName = modal.querySelector(".name-input").value = name;
//         modalBodyInputLabel = modal.querySelector(".label-input").value = label;
//     },

//     close() {
//         document
//             .querySelector(".modal-content-edit")
//             .classList.remove("modal-active");
//     },
// };

const Modal = {
    open() {
        document.querySelector('.modal').classList.add('modal-active');
    }
}