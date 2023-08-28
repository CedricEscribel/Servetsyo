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


