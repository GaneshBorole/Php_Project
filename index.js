function validateForm() {
  let valid = true;

  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();

  // Reset all error messages
  document.getElementById("nameError").innerText = "";
  document.getElementById("emailError").innerText = "";
  document.getElementById("phoneError").innerText = "";

  if (name === "") {
    document.getElementById("nameError").innerText = "Name is required";
    valid = false;
  }

  if (!email.match(/^\S+@\S+\.\S+$/)) {
    document.getElementById("emailError").innerText = "Enter a valid email";
    valid = false;
  }

  if (!phone.match(/^\d{10}$/)) {
    document.getElementById("phoneError").innerText = "Enter a 10-digit phone number";
    valid = false;
  }

  return valid;
}
