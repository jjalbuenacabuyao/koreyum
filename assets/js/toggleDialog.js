import {
  orderDialog,
  reservationDialog,
  openOrderDialogButton,
  openReservationDialogButton,
  closeOrderDialogButton,
  closeReservationDialogButton
} from "./index.js";

const body = document.querySelector("[data-menuBody]");

openOrderDialogButton.forEach(button => {
  button.addEventListener("click", () => {
    orderDialog.showModal();
    body.style.overflowY = "hidden";
  })
})

openReservationDialogButton.forEach(button => {
  button.addEventListener("click", () => {
    reservationDialog.showModal();
    body.style.overflowY = "hidden";
  })
})

closeReservationDialogButton.forEach(button => {
  button.addEventListener("click", () => {
    reservationDialog.close();
  })
})

closeOrderDialogButton.forEach(button => {
  button.addEventListener("click", () => {
    orderDialog.close();
  })
})

orderDialog.addEventListener("close", () => {
  body.style.overflowY = "auto";
})

reservationDialog.addEventListener("close", () => {
  body.style.overflowY = "auto";
})