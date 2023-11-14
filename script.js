function openForm(formId) {
  document.getElementById(formId).style.display = "block";
}

function closeForm(formId) {
  document.getElementById(formId).style.display = "none";
}

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("login").addEventListener("click", function() {
    openForm("loginForm");
    closeForm("registerForm");
  });


  });

  window.addEventListener('DOMContentLoaded', (event) => {
    var sliderImages = document.querySelectorAll('.slider-image');
    var currentImageIndex = 0;

    function showNextImage() {
        sliderImages[currentImageIndex].classList.remove('active');
        currentImageIndex = (currentImageIndex + 1) % sliderImages.length;
        sliderImages[currentImageIndex].classList.add('active');
    }

    setInterval(showNextImage, 3000); 
});



/*<===================next.php================>*/


