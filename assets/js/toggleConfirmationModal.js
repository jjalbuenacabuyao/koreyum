const orderConfirmationButton = document.querySelector("[data-orderConfirmationButton]");
const orderConfirmationDialog = document.querySelector("[data-orderConfirmationDialog]");
const closeOrderConfirmationButton = document.querySelectorAll("[data-closeOrderConfirmation]")

const setRadioButtons = document.querySelector('input[name="set"]:checked');
const addOnsCheckboxes = document.getElementsByName('addons[]');
const sidesCheckboxes = document.getElementsByName('sides[]');
const drinksCheckboxes = document.getElementsByName('drinks[]');

const selectedSet = document.querySelector("[data-selectedSet]");
const selectedAddOns = document.querySelector("[data-selectedAddOns]");
const selectedSides = document.querySelector("[data-selectedSides]");
const selectedDrinks = document.querySelector("[data-selectedDrinks]");

orderConfirmationButton.addEventListener("click", () => {
  orderConfirmationDialog.showModal();

  const setRadioButtons = document.querySelector('input[name="set"]:checked');

  if (setRadioButtons) { selectedSet.innerHTML = setRadioButtons.value; }

  if (addOnsCheckboxes) { 
    for (let checkbox of addOnsCheckboxes) {
      if (checkbox.checked) { selectedAddOns.append(checkbox.value + ", "); }
    }
  } else {
    selectedAddOns.innerHTML = "";
  }

  if (sidesCheckboxes) {
    for (let checkbox of sidesCheckboxes) {
      if (checkbox.checked) { selectedSides.append(checkbox.value + ", "); }
    }
  } else {
    selectedSides.innerHTML = "";
  }

  if (drinksCheckboxes) {
    for (let checkbox of drinksCheckboxes) {
      if (checkbox.checked) { selectedDrinks.append(checkbox.value + ", "); }
    }
  } else {
    selectedDrinks.innerHTML = "";
  }
})

closeOrderConfirmationButton.forEach(button => {
  button.addEventListener("click", () => {
    selectedSet.innerHTML = "";
    selectedAddOns.innerHTML = "";
    selectedSides.innerHTML = "";
    selectedDrinks.innerHTML = "";
    orderConfirmationDialog.close();
  })
});