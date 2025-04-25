// Initialize AOS animation library
AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true
});

// Loading animation
window.addEventListener('load', function() {
    const loader = document.querySelector('.loader');
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 500);
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Add animation to cards on hover
const cards = document.querySelectorAll('.card-hover-effect');
cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.classList.add('animate__animated', 'animate__pulse'); // Example using Animate.css
    });

    card.addEventListener('mouseleave', () => {
        card.classList.remove('animate__animated', 'animate__pulse');
    });
});
