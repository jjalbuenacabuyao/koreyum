const orderConfirmationButton = document.querySelector("[data-orderConfirmationButton]");
const orderConfirmationDialog = document.querySelector("[data-orderConfirmationDialog]");
const closeOrderConfirmationButton = document.querySelectorAll("[data-closeOrderConfirmation]")

// const setRadioButtons = document.querySelector('input[name="set"]:checked');

const selectedSet = document.querySelectorAll("[data-selectedSet]");
const selectedAddOns = document.querySelectorAll("[data-selectedAddOns]");
const selectedSides = document.querySelectorAll("[data-selectedSides]");
const selectedDrinks = document.querySelectorAll("[data-selectedDrinks]");

function displaySelectedDishes(modal, set) {
  modal.showModal();

  const setRadioButtons = document.querySelector(`input[name="${set}"]:checked`);

  const addOnsCheckboxes = document.getElementsByName('addons[]');
  const sidesCheckboxes = document.getElementsByName('sides[]');
  const drinksCheckboxes = document.getElementsByName('drinks[]');

  if (setRadioButtons) { selectedSet.forEach(item => item.innerHTML = setRadioButtons.value) }

  if (addOnsCheckboxes) { 
    for (let checkbox of addOnsCheckboxes) {
      if (checkbox.checked) {
        selectedAddOns.forEach(item => item.append(checkbox.value + ", "))
      }
    }
  } else {
    selectedAddOns.forEach(item => item.innerHTML = "");
  }

  if (sidesCheckboxes) {
    for (let checkbox of sidesCheckboxes) {
      if (checkbox.checked) {
        selectedSides.forEach(item => item.append(checkbox.value + ", "));
      }
    }
  } else {
    selectedSides.forEach(item => item.innerHTML = "");
  }

  if (drinksCheckboxes) {
    for (let checkbox of drinksCheckboxes) {
      if (checkbox.checked) {
        selectedDrinks.forEach(item => item.append(checkbox.value + ", "))
      }
    }
  } else {
    selectedDrinks.forEach(item => item.innerHTML = "");
  }

  if (set === "reservation") {
    const dateAndTimeInputElement = document.getElementById("dateAndTime");
    const selectedDate = document.querySelector("[data-selectedDate]");

    if (dateAndTimeInputElement) {
      selectedDate.innerHTML = dateAndTimeInputElement.value;
    }
  }
}

orderConfirmationButton.addEventListener("click", () => displaySelectedDishes(orderConfirmationDialog, "set"))

closeOrderConfirmationButton.forEach(button => {
  button.addEventListener("click", () => {
    selectedSet.innerHTML = "";
    selectedAddOns.innerHTML = "";
    selectedSides.innerHTML = "";
    selectedDrinks.innerHTML = "";
    orderConfirmationDialog.close();
  })
});

const reservationConfirmationButton = document.querySelector("[data-reservationConfirmationButton]");
const reservationConfirmationDialog = document.querySelector("[data-reservationConfirmationDialog]");
const closeReservationConfirmationButton = document.querySelectorAll("[data-closeReservationConfirmation]")

reservationConfirmationButton.addEventListener("click", () => displaySelectedDishes(reservationConfirmationDialog, "reservation"))

closeReservationConfirmationButton.forEach(button => {
  button.addEventListener("click", () => {
    selectedSet.innerHTML = "";
    selectedAddOns.innerHTML = "";
    selectedSides.innerHTML = "";
    selectedDrinks.innerHTML = "";
    reservationConfirmationDialog.close();
  })
});