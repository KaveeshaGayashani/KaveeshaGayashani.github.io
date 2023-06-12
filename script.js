const form = document.getElementById("myForm");
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const nameValue = nameInput.value.trim();
  const emailValue = emailInput.value.trim();

  if (nameValue === "" || emailValue === "") {
    alert("Please fill out all fields");
    return;
  }

  if (!isValidEmail(emailValue)) {
    alert("Please enter a valid email");
    return;
  } 

  form.submit();
});

function isValidEmail(email) {
  const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

  return emailRegex.test(email);
}

let currentIndex = 0;
let sliderImages = document.querySelectorAll(".slider-img");
let totalImages = sliderImages.length;

function nextImage() {
  sliderImages[currentIndex].classList.remove("active");

  if (currentIndex === totalImages - 1) {
    currentIndex = 0;
  } else {
    currentIndex++;
  }

  sliderImages[currentIndex].classList.add("active");
}

function prevImage() {
  sliderImages[currentIndex].classList.remove("active");

  if (currentIndex === 0) {
    currentIndex = totalImages - 1;
  } else {
    currentIndex--;
  }

  sliderImages[currentIndex].classList.add("active");
}

sliderImages[currentIndex].classList.add("active");