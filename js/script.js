document.addEventListener("DOMContentLoaded", function () {
    var header = document.querySelector("header");
  
    // Regjistrimi i një event listener për scroll
    window.addEventListener("scroll", function () {
      // Nëse scroll-i është më i madh se lartësia e header-it
      if (window.scrollY > header.offsetHeight) {
        // Shto klasën "scrolled"
        header.classList.add("scrolled");
      } else {
        // Hiq klasën "scrolled"
        header.classList.remove("scrolled");
      }
    });
  });
  

  document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.number');
    const speed = 200; // Kohëzgjatja e animacionit për çdo numër

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

