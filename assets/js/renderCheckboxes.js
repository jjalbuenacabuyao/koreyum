import createCheckboxes from "./createCheckboxes.js";

const addOns = ["Pork (Plain)", "Pork (Bulgogi)", "Pork (Spicy)", "Beef (Plain)", "Beef (Bulgogi)", "Beef (Spicy)"];

const sides = ["Korean Braised Tofu", "Korean Kimchi", "Lettuce", "Cucumber", "Carrots", "Ssamjang (Sweet Sauce)", "Gochujang (Spicy Sause)", "Cheese Sauce", "Potato Marble", "Rice"]

const addOnsContainer = document.querySelector("[data-addonsContainer]");
const sidesContainer = document.querySelector("[data-sidesContainer]");

createCheckboxes(addOnsContainer, "addons", addOns);
createCheckboxes(sidesContainer, "sides", sides);

