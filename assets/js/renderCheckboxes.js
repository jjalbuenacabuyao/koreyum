import createCheckboxes from "./createCheckboxes.js";

const addOns = ["Pork (Plain)", "Beef (Plain)", "Pork (Bulgogi)", "Beef (Bulgogi)", "Pork (Spicy)",   "Beef (Spicy)"];

const sides = ["Korean Braised Tofu", "Korean Kimchi", "Lettuce", "Cucumber", "Carrots", "Ssamjang (Sweet Sauce)", "Gochujang (Spicy Sause)", "Cheese Sauce", "Potato Marble", "Rice"]

const drinks = ["Coca-Cola", "Juice", "Sprite", "Royal", "Soju"];

const addOnsContainers = document.querySelectorAll("[data-addonsContainer]");
const sidesContainers = document.querySelectorAll("[data-sidesContainer]");
const drinksContainers = document.querySelectorAll("[data-drinksContainer]");

addOnsContainers.forEach(addOnsContainer => {
  createCheckboxes(addOnsContainer, "addons[]", addOns);
});

sidesContainers.forEach(sidesContainer => {
  createCheckboxes(sidesContainer, "sides[]", sides);
});

drinksContainers.forEach(drinksContainer => {
  createCheckboxes(drinksContainer, "drinks[]", drinks);
});

