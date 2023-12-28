import createCheckboxes from "./createCheckboxes.js";

const addOns = ["Pork (Plain)", "Beef (Plain)", "Pork (Bulgogi)", "Beef (Bulgogi)", "Pork (Spicy)",   "Beef (Spicy)"];

const sides = ["Korean Braised Tofu", "Korean Kimchi", "Lettuce", "Cucumber", "Carrots", "Ssamjang (Sweet Sauce)", "Gochujang (Spicy Sause)", "Cheese Sauce", "Potato Marble", "Rice"]

const drinks = ["Coca-Cola", "Juice", "Sprite", "Royal", "Soju"];

const addOnsContainer = document.querySelector("[data-addonsContainer]");
const sidesContainer = document.querySelector("[data-sidesContainer]");
const drinksContainer = document.querySelector("[data-drinksContainer]");

createCheckboxes(addOnsContainer, "addons[]", addOns);
createCheckboxes(sidesContainer, "sides[]", sides);
createCheckboxes(drinksContainer, "drinks[]", drinks);

