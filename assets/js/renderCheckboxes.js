import createCheckboxes from "./createCheckboxes.js";

const addOns = ["Pork (Plain)", "Beef (Plain)", "Pork (Bulgogi)", "Beef (Bulgogi)", "Pork (Spicy)",   "Beef (Spicy)"];

const sides = ["Korean Braised Tofu", "Korean Kimchi", "Lettuce", "Cucumber", "Carrots", "Ssamjang (Sweet Sauce)", "Gochujang (Spicy Sause)", "Cheese Sauce", "Potato Marble", "Rice"]

const drinks = ["Coca-Cola", "Juice", "Sprite", "Royal", "Soju"];

const addOnsContainersOrder = document.querySelectorAll("[data-addonsContainerOrder]");
const sidesContainersOrder = document.querySelectorAll("[data-sidesContainerOrder]");
const drinksContainersOrder = document.querySelectorAll("[data-drinksContainerOrder]");

const addOnsContainersReservation = document.querySelectorAll("[data-addonsContainerReservation]");
const sidesContainersReservation = document.querySelectorAll("[data-sidesContainerReservation]");
const drinksContainersReservation = document.querySelectorAll("[data-drinksContainerReservation]");

addOnsContainersOrder.forEach(addOnsContainer => {
  createCheckboxes("order", addOnsContainer, "addons[]", addOns);
});

addOnsContainersReservation.forEach(addOnsContainer => {
  createCheckboxes("reservation", addOnsContainer, "addons[]", addOns);
});

sidesContainersOrder.forEach(sidesContainer => {
  createCheckboxes("order", sidesContainer, "sides[]", sides);
});

sidesContainersReservation.forEach(sidesContainer => {
  createCheckboxes("reservation", sidesContainer, "sides[]", sides);
});

drinksContainersOrder.forEach(drinksContainer => {
  createCheckboxes("order", drinksContainer, "drinks[]", drinks);
});

drinksContainersReservation.forEach(drinksContainer => {
  createCheckboxes("reservation", drinksContainer, "drinks[]", drinks);
});

