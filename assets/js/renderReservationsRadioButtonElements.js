const container = document.querySelector("[data-reservationsContainer]");

const reservations = ["Unli-Pork Samgyup", "Unli-Beef Samgyup", "Unli-Pork and Beef Samgyup", "Unli Shabu-Shabu", "KoreYum Ultimate"]

reservations.map(reservation => {
  const innerWrapper = document.createElement("div");

  const labelElement = document.createElement("label");
  labelElement.setAttribute("for", reservation);

  const radioElementAttributes = {
    "id": reservation,
    "type": "radio",
    "name": "set",
    "value": reservation,
  }

  const label = document.createElement("span");
  label.innerHTML = reservation;
  
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