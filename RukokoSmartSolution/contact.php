<?php

require_once __DIR__ . '/db_config.php';

$success = false;
$errors = [];
$name = $email = $service = $message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') $errors[] = "Full name is required.";
    if ($email === '') {
        $errors[] = "Email address is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    if ($service === '') $errors[] = "Please select a service of interest.";
    if ($message === '') $errors[] = "Message is required.";

    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO contact_submissions (full_name, email, service_of_interest, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $service, $message);

        if ($stmt->execute()) {
            $success = true;
            $name = $email = $service = $message = ''; // clear fields after success
        } else {
            $errors[] = "Something went wrong. Please try again later.";
        }
        $stmt->close();
    }
}

// Fetch services for the dropdown
$servicesResult = $conn->query("SELECT service_name FROM services ORDER BY display_order ASC");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src 'self' data: https://www.google.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com; script-src 'self' 'unsafe-inline'; object-src 'none'; base-uri 'self'; form-action 'self'; upgrade-insecure-requests" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
        <link rel="stylesheet" href="style.css" />
        <title>Contact Us | Rukoko Smart Solutions Limited</title>
        <style>.icon-round{width:58px;height:58px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;background:#e8f5e9;color:var(--accent-green);font-size:1.35rem;margin-bottom:14px}.split{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}.split img{border-radius:10px;box-shadow:var(--shadow)}.list-clean{list-style:none}.list-clean li{display:flex;gap:10px;margin:10px 0;color:var(--text-muted)}.list-clean i{color:var(--accent-green);margin-top:6px}.cta-band{background:linear-gradient(135deg,var(--accent-green),var(--accent-teal));color:#fff;text-align:center;padding:70px 20px}.cta-band h2{font-family:Montserrat,sans-serif;font-size:clamp(1.7rem,4vw,2.6rem);margin-bottom:14px}.badge,.method-chip,.sector-chip{display:inline-flex;align-items:center;gap:8px;background:#fff;border:2px solid var(--accent-light);color:var(--accent-green);border-radius:50px;padding:8px 16px;font-family:Montserrat,sans-serif;font-weight:700;font-size:.82rem;margin:5px}.tab-nav{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:30px}.tab-btn{padding:10px 18px;border:2px solid var(--accent-light);border-radius:50px;background:#fff;color:var(--accent-green);font-weight:700;cursor:pointer}.tab-btn.active,.tab-btn:hover{background:var(--accent-green);color:#fff}.service-section{display:none}.service-section.active{display:block}.product-list{columns:2;list-style:none;margin:14px 0}.product-list li{margin:7px 0;color:var(--text-muted)}.product-list i{color:var(--accent-green);margin-right:8px}.contact-panel{background:linear-gradient(160deg,var(--accent-green),var(--accent-teal));color:#fff;border-radius:10px;padding:34px}.contact-row{display:flex;gap:14px;margin:18px 0}.contact-row i{width:42px;height:42px;border-radius:50%;background:rgba(255,255,255,.18);display:flex;align-items:center;justify-content:center;flex-shrink:0}.form-wrap{box-shadow:var(--shadow);border-radius:10px;padding:34px;background:#fff}.form-group{margin-bottom:16px}.form-group label{display:block;font-weight:700;color:var(--accent-green);font-size:.82rem;margin-bottom:6px}.form-group input,.form-group select,.form-group textarea{width:100%;padding:12px 14px;border:2px solid #e0f2e0;border-radius:8px;font:inherit;background:#f8fcf8}.form-group textarea{min-height:130px}@media(max-width:800px){.split{grid-template-columns:1fr}.product-list{columns:1}.grid-4{grid-template-columns:repeat(2,1fr)}}@media(max-width:560px){.grid-4{grid-template-columns:1fr}}</style></head><body><header><nav><a href="index.php" class="nav-logo"><img src="img/new.png" alt="Rukoko Smart Solutions Logo" onerror="this.style.display='none'" /><span>Rukoko Smart Solutions</span></a><button class="hamburger" aria-label="Toggle menu"><span></span><span></span><span></span></button><ul class="nav-links"><li><a href="index.php">Home</a></li><li><a href="about.php">About Us</a></li><li><a href="services.php">Services</a></li><li><a href="security.php">Security Solutions</a></li><li><a href="contact.php">Contact</a></li></ul></nav></header><div class="page-hero contact-hero"><h1>Get in Touch</h1><p>Our team is ready to help you find the right security or branding solution.</p></div><section><div class="container split"><div class="contact-panel"><h2>Contact Information</h2><p>Speak with our team for a free consultation.</p><div class="contact-row"><i class="fa-solid fa-location-dot"></i><div><h4>Office Location</h4><p>Kampala, Uganda</p></div></div><div class="contact-row"><i class="fa-solid fa-phone"></i><div><h4>Phone / WhatsApp</h4><p>+256762455205 / +256752190769</p></div></div><div class="contact-row"><i class="fa-solid fa-envelope"></i><div><h4>Email</h4><p>info@rukokosmartsolutions</p></div></div><div class="contact-row"><i class="fa-solid fa-clock"></i><div><h4>Working Hours</h4><p>Monday - Saturday<br>8:00 AM - 6:00 PM</p></div></div></div><div class="form-wrap"><h2>Send Us a Message</h2>
        <?php if ($success): ?>
<div style="margin-bottom:18px;color:var(--accent-green);font-weight:700;"><i class="fa-solid fa-circle-check"></i> Thank you! Our team will contact you within 24 hours.</div>
<?php endif; ?>
<?php if (!empty($errors)): ?>
<div style="margin-bottom:18px;color:#c0392b;font-weight:700;">
<?php foreach ($errors as $err): ?>
<div><i class="fa-solid fa-circle-exclamation"></i> <?= htmlspecialchars($err) ?></div>
<?php endforeach; ?>
</div>
<?php endif; ?>
<form method="POST" action="">
<div class="form-group"><label>Full Name *</label><input id="name" name="name" type="text" placeholder="Your name" value="<?= htmlspecialchars($name) ?>"></div>
<div class="form-group"><label>Email Address *</label><input id="email" name="email" type="email" placeholder="you@example.com" value="<?= htmlspecialchars($email) ?>"></div>
<div class="form-group"><label>Service of Interest *</label><select id="service" name="service">
<option value="">Select a service</option>
<?php if ($servicesResult && $servicesResult->num_rows > 0): ?>
<?php while ($row = $servicesResult->fetch_assoc()): ?>
<option <?= ($service === $row['service_name']) ? 'selected' : '' ?>><?= htmlspecialchars($row['service_name']) ?></option>
<?php endwhile; ?>
<?php else: ?>
<option>CCTV Installation</option><option>CCTV Repair</option><option>Remote Monitoring</option><option>Corporate Branding</option><option>Vehicle Branding</option><option>Promotional Materials</option>
<?php endif; ?>
</select></div>
<div class="form-group"><label>Message *</label><textarea id="message" name="message" placeholder="Tell us about your project"><?= htmlspecialchars($message) ?></textarea></div>
<button class="btn btn-primary" type="submit"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
</form>
</div></div></section><section style="background:#f8fcf8;"><div class="container"><div class="grid-3"><div class="card"><div class="icon-round"><i class="fa-solid fa-phone"></i></div><h3>Call or WhatsApp</h3><p>Speak directly with our team for urgent inquiries.</p><a href="tel:+256762455205" class="btn btn-primary">Call Now</a></div><div class="card"><div class="icon-round"><i class="fa-solid fa-envelope"></i></div><h3>Email Us</h3><p>Send a project brief and we will respond with details.</p><a href="mailto:info@rukukosmarts.com" class="btn btn-primary">Send Email</a></div><div class="card"><div class="icon-round"><i class="fa-solid fa-location-dot"></i></div><h3>Visit Our Office</h3><p>Meet our security or branding specialists in person.</p><a href="https://www.google.com/maps/search/namuga+tower+namugoona/" class="btn btn-primary">Get Directions</a></div></div></div></section><footer><div class="footer-grid"><div class="footer-col"><img src="img/new.png" alt="Rukoko Logo" class="footer-logo" onerror="this.style.display='none'" /><p>Rukoko Smart Solutions Limited provides security technology, corporate branding, printing, and advertising solutions across Uganda.</p><p class="footer-tagline">Smart Security, Powerful Branding, Sustainable Growth.</p><div class="social-links"><a href="#" title="Facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a><a href="#" title="X" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a><a href="#" title="LinkedIn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a><a href="#" title="WhatsApp" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a></div></div><div class="footer-col"><h4>Quick Links</h4><ul><li><a href="index.php">Home</a></li><li><a href="about.php">About Us</a></li><li><a href="services.php">Services</a></li><li><a href="security.php">Security Solutions</a></li><li><a href="contact.php">Contact</a></li></ul></div><div class="footer-col"><h4>Our Services</h4><ul><li><a href="security.php">CCTV Installation</a></li><li><a href="security.php">CCTV Repair</a></li><li><a href="security.php">Remote Monitoring</a></li><li><a href="services.php">Vehicle Branding</a></li><li><a href="services.php">Corporate Apparel</a></li><li><a href="services.php">Event Branding</a></li></ul></div><div class="footer-col"><h4>Contact Us</h4><ul><li><i class="fa-solid fa-location-dot"></i> Namuga Tower, Namungoona-Hoima Road, Kampala Uganda.</li><li><i class="fa-solid fa-phone"></i> +256 762 455205 / +256 752 190769</li><li><i class="fa-solid fa-envelope"></i> info@rukokosmartsolutions</li><li><i class="fa-solid fa-clock"></i> Mon-Fri: 8am-6pm; Saturday: 10am-5pm</li></ul></div></div><div class="footer-bottom">&copy; 2026 | Rukoko Smart Solutions Limited. All Rights Reserved.</div></footer><button id="scrollTop" title="Back to top"><i class="fa-solid fa-arrow-up" aria-hidden="true"></i></button><script src="main.js"></script></body></html>