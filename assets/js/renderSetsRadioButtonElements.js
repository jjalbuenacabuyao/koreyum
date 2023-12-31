const container = document.querySelector("[data-setContainerOrder]");

const sets = ["KoreYum Set 1 (2 to 3 persons)", "KoreYum Set 2 (4 to 5 persons)"]

sets.map(set => {
  const innerWrapper = document.createElement("div");

  const labelElement = document.createElement("label");
  labelElement.setAttribute("for", set);

  const radioElementAttributes = {
    "id": set,
    "type": "radio",
    "name": "set",
    "value": set,
  }

  const label = document.createElement("span");
  label.innerHTML = set;
  
  const radioInput = document.createElement("input");
  for (const attribute in radioElementAttributes) {
    radioInput.setAttribute(attribute, radioElementAttributes[attribute]);
  }

  labelElement.appendChild(radioInput);
  labelElement.appendChild(label);

  labelElement.classList += "d-flex align-items-center gap-2"

  innerWrapper.appendChild(labelElement);

  container.appendChild(innerWrapper);
});