document.addEventListener('DOMContentLoaded', function() {
    // Hero Slider
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.slider-controls .prev');
    const nextBtn = document.querySelector('.slider-controls .next');
    let currentSlide = 0;
    
    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[index].classList.add('active');
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
    
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
    
    // Auto slide
    setInterval(nextSlide, 5000);
    
    // Testimoni Slider
    const testimoniItems = document.querySelectorAll('.testimoni-item');
    const testimoniPrevBtn = document.querySelector('.testimoni-controls .prev');
    const testimoniNextBtn = document.querySelector('.testimoni-controls .next');
    let currentTestimoni = 0;
    
    function showTestimoni(index) {
        testimoniItems.forEach(item => item.classList.remove('active'));
        testimoniItems[index].classList.add('active');
    }
    
    function nextTestimoni() {
        currentTestimoni = (currentTestimoni + 1) % testimoniItems.length;
        showTestimoni(currentTestimoni);
    }
    
    function prevTestimoni() {
        currentTestimoni = (currentTestimoni - 1 + testimoniItems.length) % testimoniItems.length;
        showTestimoni(currentTestimoni);
    }
    
    testimoniNextBtn.addEventListener('click', nextTestimoni);
    testimoniPrevBtn.addEventListener('click', prevTestimoni);
    
    // Auto testimoni
    setInterval(nextTestimoni, 7000);
    
    // Sticky Header
    const header = document.querySelector('header');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 50) {
            header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
        } else {
            header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
        }
    });
    
    // Smooth Scrolling
    const links = document.querySelectorAll('a[href^="#"]');
    
    for (const link of links) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    }
    
    // Newsletter Form
    const newsletterForm = document.querySelector('.footer-newsletter form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = this.querySelector('input[type="email"]').value;
            
            // Simulate form submission
            const submitBtn = this.querySelector('button');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Terima kasih! Email Anda telah terdaftar.');
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });
    }
});
