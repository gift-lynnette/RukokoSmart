<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com; script-src 'self' 'unsafe-inline'; object-src 'none'; base-uri 'self'; form-action 'self'; upgrade-insecure-requests" />
  <meta name="referrer" content="strict-origin-when-cross-origin" />
  <meta name="description" content="Learn about Rukoko Smart Solutions Limited, a Uganda-based security technology, CCTV, corporate branding, advertising, and printing solutions company." />
  <meta name="keywords" content="about Rukoko Smart Solutions, security company Uganda, branding company Kampala, CCTV experts Uganda" />
  <meta name="robots" content="index, follow" />
  <title>About Us | Rukoko Smart Solutions Limited</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <style>
    /* About-specific */
    .about-intro {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      align-items: center;
    }
    .about-visual {
      background: linear-gradient(135deg, var(--accent-green), var(--accent-teal));
      border-radius: 16px;
      padding: 60px 40px;
      text-align: center;
      color: #fff;
    }
    .about-visual .big-icon { font-size: 5rem; display: block; margin-bottom: 20px; }
    .about-visual h3 { font-family: 'Montserrat', sans-serif; font-size: 1.3rem; font-weight: 700; margin-bottom: 10px; }
    .about-visual p { opacity: 0.88; font-size: 0.95rem; }
    @media (max-width: 768px) { .about-intro { grid-template-columns: 1fr; } }

    .mvv-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
      margin-top: 48px;
    }
    .mvv-card {
      background: #fff;
      border-radius: 12px;
      padding: 36px 28px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.07);
      text-align: center;
      border-top: 5px solid;
    }
    .mvv-card:nth-child(1) { border-color: var(--accent-green); }
    .mvv-card:nth-child(2) { border-color: var(--accent-teal); }
    .mvv-card:nth-child(3) { border-color: var(--accent-light); }
    .mvv-card .mvv-icon { font-size: 2.8rem; margin-bottom: 16px; }
    .mvv-card h3 { font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 1.1rem; color: var(--accent-green); margin-bottom: 12px; }
    .mvv-card p { font-size: 0.92rem; color: var(--text-muted); }
    @media (max-width: 768px) { .mvv-grid { grid-template-columns: 1fr; } }

    .values-section { background: #f8fcf8; }
    .values-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      margin-top: 40px;
    }
    .value-item {
      background: #fff;
      border-radius: 10px;
      padding: 24px 20px;
      text-align: center;
      box-shadow: 0 2px 12px rgba(0,0,0,0.06);
      transition: transform 0.3s;
    }
    .value-item:hover { transform: translateY(-4px); }
    .value-item .v-icon { font-size: 2rem; margin-bottom: 10px; }
    .value-item h4 { font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 0.95rem; color: var(--accent-teal); }
    @media (max-width: 900px) { .values-grid { grid-template-columns: repeat(2,1fr); } }
    @media (max-width: 560px) { .values-grid { grid-template-columns: 1fr 1fr; } }

    .team-section { background: #fff; }
    .team-cards { display: grid; grid-template-columns: repeat(3,1fr); gap: 28px; margin-top: 40px; }
    .team-card {
      background: #f8fcf8;
      border-radius: 12px;
      padding: 36px 24px;
      text-align: center;
    }
    .team-avatar {
      width: 80px; height: 80px;
      border-radius: 50%;
      background: linear-gradient(135deg,var(--accent-green),var(--accent-teal));
      display: flex; align-items: center; justify-content: center;
      font-size: 2rem;
      margin: 0 auto 16px;
      color: #fff;
    }
    .team-card h4 { font-family: 'Montserrat', sans-serif; font-weight: 700; color: var(--accent-green); margin-bottom: 4px; }
    .team-card .role { font-size: 0.85rem; color: var(--accent-teal); font-weight: 600; margin-bottom: 8px; }
    .team-card p { font-size: 0.88rem; color: var(--text-muted); }
    @media (max-width: 768px) { .team-cards { grid-template-columns: 1fr; } }
  </style>
</head>
<body>

<!-- HEADER -->
<header>
  <nav>
    <a href="index.php" class="nav-logo">
      <img src="img/new.png" alt="Rukoko Logo" onerror="this.style.display='none'" />
      <span>Rukoko Smart Solutions</span>
    </a>
    <button class="hamburger" aria-label="Toggle menu"><span></span><span></span><span></span></button>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="security.php">Security Solutions</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>

<!-- PAGE HERO -->
<div class="page-hero about-hero">
  <h1>About Rukoko Smart Solutions</h1>
  <p>A dynamic technology, security, and branding company committed to innovation, quality, and client success.</p>
</div>

<!-- ABOUT INTRO -->
<section>
  <div class="container">
    <div class="about-intro">
      <div>
        <div class="section-label">Who We Are</div>
        <h2 class="section-title">Smart Security. Powerful Branding. Sustainable Growth.</h2>
        <p style="color:var(--text-muted);margin-bottom:18px;">Rukoko Smart Solutions Limited is a dynamic technology, security, and branding company dedicated to providing innovative solutions that help businesses, institutions, and individuals improve security, strengthen brand visibility, and achieve sustainable growth.</p>
        <p style="color:var(--text-muted);margin-bottom:18px;">Established with a commitment to excellence, we specialize in CCTV surveillance systems, security technology solutions, corporate branding, advertising, printing, and promotional services. Our goal is to deliver reliable, cost-effective, and customized solutions that meet the unique needs of our clients across various sectors.</p>
        <p style="color:var(--text-muted);margin-bottom:28px;">We believe that security and branding are essential pillars of business success. By combining technical expertise, creativity, modern technology, and exceptional customer service, we provide solutions that deliver measurable value and long-term results.</p>
        <a href="contact.php" class="btn btn-primary">Work With Us</a>
      </div>
      <div class="about-visual">
        <span class="big-icon">🛡️</span>
        <h3>Trusted Security & Branding Partner</h3>
        <p>Serving homes, businesses, institutions, and government agencies across Uganda with reliable, innovative solutions since establishment.</p>
        <div style="margin-top:24px;display:grid;grid-template-columns:1fr 1fr;gap:16px;text-align:center;">
          <div><div style="font-size:2rem;font-weight:800;color:#98fb98;">500+</div><div style="font-size:0.8rem;opacity:0.85;">Systems Installed</div></div>
          <div><div style="font-size:2rem;font-weight:800;color:#98fb98;">200+</div><div style="font-size:0.8rem;opacity:0.85;">Branding Projects</div></div>
          <div><div style="font-size:2rem;font-weight:800;color:#98fb98;">15+</div><div style="font-size:0.8rem;opacity:0.85;">Sectors Served</div></div>
          <div><div style="font-size:2rem;font-weight:800;color:#98fb98;">100%</div><div style="font-size:0.8rem;opacity:0.85;">Commitment</div></div>
        </div>
      </div>
    </div>

    <!-- Mission Vision Values Cards -->
    <div class="mvv-grid">
      <div class="mvv-card">
        <div class="mvv-icon">🎯</div>
        <h3>Our Mission</h3>
        <p>To provide innovative affordable and high-quality security equipment, branding and technology solutions that enhance business growth to improve livelihoods and create lasting value for our customers and communities.</p>
      </div>
      <div class="mvv-card">
        <div class="mvv-icon">🌍</div>
        <h3>Our Vision</h3>
        <p>To become East Africa's leading provider of innovative, reliable, sustainable solutions in security technology and branding businesses.</p>
      </div>
      <div class="mvv-card">
        <div class="mvv-icon">🤝</div>
        <h3>Our Commitment</h3>
        <p>Every project is approached with professionalism, integrity, and attention to detail. We deliver reliable, cost-effective, technology-driven solutions that offer continuous monitoring, operational efficiency, and long-term value.</p>
      </div>
    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section class="values-section">
  <div class="container">
    <div class="section-label" style="text-align:center;display:block;">Our Foundation</div>
    <h2 class="section-title" style="text-align:center;">Core Values</h2>
    <p class="section-sub" style="margin:0 auto 0;text-align:center;">The principles that guide every decision, project, and interaction we have with our clients.</p>
    <div class="values-grid">
      <div class="value-item"><div class="v-icon">💼</div><h4>Professionalism</h4></div>
      <div class="value-item"><div class="v-icon">🤝</div><h4>Integrity</h4></div>
      <div class="value-item"><div class="v-icon">💡</div><h4>Innovation</h4></div>
      <div class="value-item"><div class="v-icon">⭐</div><h4>Quality</h4></div>
      <div class="value-item"><div class="v-icon">🔒</div><h4>Reliability</h4></div>
      <div class="value-item"><div class="v-icon">😊</div><h4>Customer Satisfaction</h4></div>
      <div class="value-item"><div class="v-icon">👥</div><h4>Teamwork</h4></div>
      <div class="value-item"><div class="v-icon">📈</div><h4>Continuous Improvement</h4></div>
    </div>
  </div>
</section>

<!-- OUR TEAM -->
<section class="team-section">
  <div class="container">
    <div class="section-label" style="text-align:center;display:block;">The People Behind Rukoko</div>
    <h2 class="section-title" style="text-align:center;">Our Expert Team</h2>
    <p class="section-sub" style="margin:0 auto;text-align:center;">Skilled technicians, branding specialists, designers, and project managers committed to delivering outstanding results.</p>
    <div class="team-cards">
      <div class="team-card">
        <div class="team-avatar">🔧</div>
        <h4>CCTV Technicians</h4>
        <div class="role">Security Technology</div>
        <p>Certified professionals specializing in CCTV installation, repair, maintenance, and network configuration for surveillance systems.</p>
      </div>
      <div class="team-card">
        <div class="team-avatar">🎨</div>
        <h4>Branding Specialists</h4>
        <div class="role">Creative & Design</div>
        <p>Creative experts in vehicle branding, corporate apparel, signage, and large-format print production.</p>
      </div>
      <div class="team-card">
        <div class="team-avatar">📋</div>
        <h4>Project Managers</h4>
        <div class="role">Operations & Delivery</div>
        <p>Dedicated project coordinators ensuring timely delivery, quality workmanship, and seamless client communication throughout every project.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:linear-gradient(135deg,var(--accent-green),var(--accent-teal));color:#fff;text-align:center;padding:80px 20px;">
  <h2 style="font-family:'Montserrat',sans-serif;font-size:clamp(1.8rem,4vw,2.6rem);font-weight:800;margin-bottom:16px;">Ready to Partner with Rukoko?</h2>
  <p style="opacity:0.88;margin-bottom:32px;max-width:520px;margin-left:auto;margin-right:auto;">Let our experienced team assess your security and branding needs and deliver a customized solution that works for you.</p>
  <a href="contact.php" class="btn btn-outline" style="border-color:#98fb98;color:#98fb98;">📞 Get in Touch Today</a>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-col">
      <img src="img/new.png" alt="Rukoko Logo" class="footer-logo" onerror="this.style.display='none'" />
      <p>Rukoko Smart Solutions Limited is a dynamic technology, security, and branding company providing innovative solutions across Uganda and beyond.</p>
      <p class="footer-tagline">Smart Security, Powerful Branding, Sustainable Growth.</p>
      <div class="social-links">
        <a href="#" title="Facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" title="X" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#" title="LinkedIn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#" title="WhatsApp" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="security.php">Security Solutions</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Our Services</h4>
      <ul>
        <li><a href="security.php">CCTV Installation</a></li>
        <li><a href="security.php">CCTV Repair</a></li>
        <li><a href="security.php">Remote Monitoring</a></li>
        <li><a href="services.php">Vehicle Branding</a></li>
        <li><a href="services.php">Corporate Apparel</a></li>
        <li><a href="services.php">Billboard Advertising</a></li>
        <li><a href="services.php">Event Branding</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Contact Us</h4>
      <ul>
          <li><i class="fas fa-map-marker-alt me-2"></i> Namuga Tower, <br>Namungoona-Hoima Road , <br>level 2, <br>P.O.Box 202954,<br> Kampala Uganda. </li>
          <li><i class="fas fa-phone-alt me-2"></i> +256 762 455205/ +256 752 190769</li>
          <li><i class="fas fa-envelope me-2"></i> info@rukokosmartsolutions</li>
          <li><i class="fas fa-envelope me-2"></i> www.rukokosmartsolutions.com</li>
         <li><i class="fas fa-clock me-2"></i> Mon-Fri: 8am-6pm <br> Saturday: 10am - 5pm</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    © 2026| Rukoko Smart Solutions Limited. All Rights Reserved.
  </div>
</footer>

<button id="scrollTop" title="Back to top">↑</button>
<script src="main.js"></script>
</body>
</html>
