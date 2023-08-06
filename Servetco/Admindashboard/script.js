// Get the side navigation bar
var sidenav = document.getElementById("sidenav");

// Get the main content
var main = document.getElementById("main");

// Get all the links inside the side navigation bar
var links = sidenav.getElementsByTagName("a");

// Loop through the links and add a click event listener to each one
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener("click", function() {

    // Remove the "active" class from all links
    for (var j = 0; j < links.length; j++) {
      links[j].classList.remove("active");
    }

    // Add the "active" class to the clicked link
    this.classList.add("active");

    // Get the name of the content to show
    var contentName = this.getAttribute("data-content");

    // Get the content to show
    var content = document.getElementById(contentName);

    // Hide all content elements
    var allContent = main.getElementsByClassName("content");
    for (var k = 0; k < allContent.length; k++) {
      allContent[k].style.display = "none";
    }

    // Show the selected content
    content.style.display = "block";
  });
}
// User record design


//   Upload photo for adoption
const fileInput = document.querySelector('#image-file');
const chooseFileBtn = document.querySelector('#choose-file-btn');
const imagePreview = document.querySelector('#image-preview');

chooseFileBtn.addEventListener('click', (e) => {
  e.preventDefault();
  fileInput.click();
});

fileInput.addEventListener('change', () => {
  const file = fileInput.files[0];
  if (file) {
    const reader = new FileReader();
    reader.addEventListener('load', () => {
      imagePreview.src = reader.result;
    });
    reader.readAsDataURL(file);
  }
});


