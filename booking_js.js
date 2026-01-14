document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("ticket_form");
  if (!form) return;

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const name = document.getElementById("first_name").value.trim();
    const surname = document.getElementById("surname").value.trim();
    const adultQty = parseInt(document.getElementById("adult_quantity").value, 10) || 0;
    const childQty = parseInt(document.getElementById("child_quantity").value, 10) || 0;
    const visitDate = document.getElementById("visit_date").value;

    if (!name || !surname) {
      alert("Please enter your first name and surname.");
      return;
    }
    if (adultQty < 0 || childQty < 0) {
      alert("Quantities must be 0 or greater.");
      return;
    }
    if (!visitDate) {
      alert("Please select a visit date.");
      return;
    }

    const ticketId = "T" + Math.floor(Math.random() * 10000);

    alert(
      "Ticket " + ticketId + " has been booked successfully.\n" +
      "Name: " + name + " " + surname + "\n" +
      "Adult tickets: " + adultQty + "\n" +
      "Child tickets: " + childQty + "\n" +
      "Visit date: " + visitDate
    );

    form.reset();
  });

  // Optional: prevent booking past dates
  const visitDateInput = document.getElementById("visit_date");
  if (visitDateInput) {
    const today = new Date().toISOString().split("T")[0];
    visitDateInput.setAttribute("min", today);
  }
});
