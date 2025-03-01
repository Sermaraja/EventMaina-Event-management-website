document.getElementById('signInButton').addEventListener('click', function() {
    document.getElementById('signup').style.display = 'none';
    document.getElementById('signIn').style.display = 'block';
});

document.getElementById('signUpButton').addEventListener('click', function() {
    document.getElementById('signIn').style.display = 'none';
    document.getElementById('signup').style.display = 'block';
});

// Get the modal
const modal = document.getElementById("bookingModal");

// Get the button that opens the modal
const bookButtons = document.querySelectorAll(".book-now");

// Get the <span> element that closes the modal
const closeBtn = document.querySelector(".close");

// Open the modal when any "Book Now" button is clicked
bookButtons.forEach(button => {
  button.addEventListener("click", () => {
    modal.style.display = "block";
  });
});

// Close the modal when the close button is clicked
closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

// Close the modal when clicking outside of it
window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});