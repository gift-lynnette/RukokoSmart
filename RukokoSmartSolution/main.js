// ===== RUKOKO SMART SOLUTIONS - SHARED JS =====

// Hamburger menu
document.addEventListener('DOMContentLoaded', () => {
  const ham = document.querySelector('.hamburger');
  const nav = document.querySelector('.nav-links');
  if (ham && nav) {
    ham.addEventListener('click', () => {
      ham.classList.toggle('open');
      nav.classList.toggle('open');
    });
    // Close on link click
    nav.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        ham.classList.remove('open');
        nav.classList.remove('open');
      });
    });
  }

  // Active nav link
  const path = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-links a').forEach(a => {
    const href = a.getAttribute('href');
    if (href === path || (path === '' && href === 'index.php')) {
      a.classList.add('active');
    }
  });

  // Scroll to top button
  const scrollBtn = document.getElementById('scrollTop');
  if (scrollBtn) {
    window.addEventListener('scroll', () => {
      scrollBtn.classList.toggle('visible', window.scrollY > 300);
    });
    scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  // Smooth reveal effects
  const revealTargets = document.querySelectorAll('section, .card, .service-card, .svc-overview-card, .product-card, .acc-item, .access-card, .value-item, .mvv-card, .team-card, .footer-col');
  revealTargets.forEach((el) => el.classList.add('reveal'));

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealTargets.forEach((el) => observer.observe(el));
  } else {
    revealTargets.forEach((el) => el.classList.add('visible'));
  }
});
