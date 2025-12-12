// document.addEventListener('DOMContentLoaded', function () {

//   // Mobile menu toggle
//   const mobileMenuBtn = document.getElementById('mobileMenuBtn');
//   const mobileMenu = document.getElementById('mobileMenu');

//   if (mobileMenuBtn && mobileMenu) {
//     mobileMenuBtn.addEventListener('click', () => {
//       mobileMenu.classList.toggle('hidden');
//     });
//   }

//   // Smooth fade-up reveal animation on scroll
//   const revealElems = document.querySelectorAll('.reveal');
//   const revealObserver = new IntersectionObserver((entries) => {
//     entries.forEach(entry => {
//       if (entry.isIntersecting) {
//         entry.target.classList.add('in-view');
//         revealObserver.unobserve(entry.target);
//       }
//     });
//   }, { threshold: 0.15 });

//   revealElems.forEach(el => revealObserver.observe(el));

//   // Close mobile menu when a link is clicked
//   const mobileMenuLinks = mobileMenu?.querySelectorAll('a');
//   if (mobileMenuLinks) {
//     mobileMenuLinks.forEach(link => {
//       link.addEventListener('click', () => {
//         mobileMenu.classList.add('hidden');
//       });
//     });
//   }

//   // Smooth scroll for anchor links
//   document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//       e.preventDefault();
//       const target = document.querySelector(this.getAttribute('href'));
//       if (target) {
//         target.scrollIntoView({
//           behavior: 'smooth',
//           block: 'start'
//         });
//       }
//     });
//   });

//   // Form validation and feedback
//   const forms = document.querySelectorAll('form');
//   forms.forEach(form => {
//     form.addEventListener('submit', function (e) {
//       // Add custom validation here if needed
//       console.log('Form submitted');
//       // Prevent default for demo purposes
//       // In production, remove this line to allow actual form submission
//       // e.preventDefault();
//     });
//   });

//   // Add active state to current nav link
//   function updateActiveNav() {
//     const currentPage = window.location.pathname.split('/').pop() || 'index.html';
//     const navLinks = document.querySelectorAll('nav a[href]');

//     navLinks.forEach(link => {
//       const href = link.getAttribute('href');
//       if (href === currentPage || (currentPage === '' && href === 'index.html')) {
//         link.classList.add('text-blue-600', 'font-semibold');
//       } else {
//         link.classList.remove('text-blue-600', 'font-semibold');
//       }
//     });
//   }

//   updateActiveNav();

//   // Parallax effect for hero sections (optional enhancement)
//   let ticking = false;
//   window.addEventListener('scroll', () => {
//     if (!ticking) {
//       window.requestAnimationFrame(() => {
//         // Add parallax or other scroll effects here if desired
//         ticking = false;
//       });
//       ticking = true;
//     }
//   });

// });
