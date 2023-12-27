export default function createCheckboxes(container, name, items) {
  items.map(item => {
    const innerContainer = document.createElement("div");

    const labelElement = document.createElement("label");
    labelElement.setAttribute("for", item);

    const checkboxElementAttributes = {
      "id": item,
      "type": "checkbox",
      "name": name,
      "value": item,
    }

    const label = document.createElement("span");
    label.innerHTML = item;

    const checkboxInput = document.createElement("input");
    for (const attribute in checkboxElementAttributes) {
      checkboxInput.setAttribute(attribute, checkboxElementAttributes[attribute]);
    }

    labelElement.appendChild(checkboxInput);
    labelElement.appendChild(label);

    innerContainer.appendChild(labelElement);

    container.appendChild(innerContainer);
  })
}