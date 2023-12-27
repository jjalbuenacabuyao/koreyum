const orderDialog = document.querySelector("#orderDialog");
const reservationDialog = document.querySelector("#reservationDialog")
const openReservationDialogButton = document.querySelectorAll("[data-trigger='reserve']");
const openOrderDialogButton = document.querySelectorAll("[data-trigger='order']");
const closeReservationDialogButton = document.querySelectorAll("[data-trigger='closeReservation']");
const closeOrderDialogButton = document.querySelectorAll("[data-trigger='closeOrder']");

export {
  orderDialog,
  reservationDialog,
  openOrderDialogButton,
  openReservationDialogButton,
  closeOrderDialogButton,
  closeReservationDialogButton
}