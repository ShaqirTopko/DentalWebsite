document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector("header");

  window.addEventListener("scroll", function () {
   
    if (window.scrollY > header.offsetHeight) {
     
      header.classList.add("scrolled");
    } else {
  
      header.classList.remove("scrolled");
    }
  });
});


document.addEventListener('DOMContentLoaded', function() {
  const counters = document.querySelectorAll('.number');
  const speed = 200; 

  counters.forEach(counter => {
      const animate = () => {
          const value = +counter.getAttribute('data-number');
          const data = +counter.innerText;

          const time = value / speed;
          if(data < value) {
              counter.innerText = Math.ceil(data + time);
              setTimeout(animate, 1);
          } else {
              counter.innerText = value;
          }
      };

      let observer = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  animate();
                  observer.unobserve(entry.target);
              }
          });
      }, { threshold: 0.5 });

      observer.observe(counter);
  });
});



var modal = document.getElementById("myModal");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var images = document.querySelectorAll(".image-box img");
var closeBtn = document.querySelector(".close");


images.forEach(img => {
img.addEventListener('click', function() {
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
});
});


closeBtn.addEventListener('click', function() {
modal.style.display = "none";
});



