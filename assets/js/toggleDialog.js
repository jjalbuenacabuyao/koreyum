import {
  orderDialog,
  reservationDialog,
  openOrderDialogButton,
  openReservationDialogButton,
  closeOrderDialogButton,
  closeReservationDialogButton
} from "./index.js";

const body = document.querySelector("[data-body]");

openOrderDialogButton.forEach(button => {
  button.addEventListener("click", (event) => {
    orderDialog.showModal();
    body.style.overflowY = "hidden";

    const targetSet = event.currentTarget.getAttribute("data-target");
    const radioInputElement = document.querySelector(`input[value="${targetSet}"]`);
    radioInputElement.setAttribute("checked", "true");
  })
})

openReservationDialogButton.forEach(button => {
  button.addEventListener("click", (event) => {
    reservationDialog.showModal();
    body.style.overflowY = "hidden";

    const targetReservation = event.currentTarget.getAttribute("data-target");
    const radioInputElement = document.querySelector(`input[value="${targetReservation}"]`);
    radioInputElement.setAttribute("checked", "true");
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