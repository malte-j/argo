let form = document.querySelector(".contact-form");

form.onsubmit = event => {
  // append hidden timeStamp element to form
  let ts = document.createElement("input");
	ts.setAttribute("type", "hidden");
	ts.setAttribute("name", "timestamp");
	ts.value = Math.floor(event.timeStamp);
	event.target.appendChild(ts);
}
