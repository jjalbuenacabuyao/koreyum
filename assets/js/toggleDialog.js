let orderDialog = document.querySelector("#orderDialog");
let reservationDialog = document.querySelector("#reservationDialog")
let openReservationDialogButton = document.querySelectorAll("[data-trigger='reserve']");
let openOrderDialogButton = document.querySelectorAll("[data-trigger='order']");
let closeReservationDialogButton = document.querySelectorAll("[data-trigger='closeReservation']");
let closeOrderDialogButton = document.querySelectorAll("[data-trigger='closeOrder']");

openOrderDialogButton.forEach(button => {
  button.addEventListener("click", () => {
    orderDialog.showModal();
  })
})

openReservationDialogButton.forEach(button => {
  button.addEventListener("click", () => {
    reservationDialog.showModal();
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

const label = document.createElement("label");
label.setAttribute("for", "set1");
label.innerHTML = "KoreYum Set 1";

const input = document.createElement("input");
input.setAttribute("type", "radio")
input.setAttribute("id", "set1")
input.setAttribute("name", "set1")

orderDialog.appendChild(input)
orderDialog.appendChild(label)