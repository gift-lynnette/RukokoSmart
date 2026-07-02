
import React from 'react';
import SocialIcons from './SocialIcons';

const Footer: React.FC = () => {
  const quickLinks = [
    { href: "#", label: "Home" },
    { href: "#menu", label: "Menu" },
    { href: "#about", label: "About" },
    { href: "#contact", label: "Contact" },
  ];

  return (
    <footer className="bg-gray-900 text-white py-12 px-6 md:px-12">
      <div className="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
        <div>
          <h3 className="text-xl font-bold mb-4">Berwick Manor</h3>
          <p className="text-gray-400">
            Experience dining and shisha in a luxurious and unforgettable setting.
          </p>
        </div>
        <div>
          <h3 className="text-xl font-bold mb-4">Quick Links</h3>
          <ul className="space-y-2">
            {quickLinks.map((link) => (
              <li key={link.label}>
                <a
                  href={link.href}
                  className="text-gray-400 hover:text-white transition-colors duration-300"
                >
                  {link.label}
                </a>
              </li>
            ))}
          </ul>
        </div>
        <div>
          <h3 className="text-xl font-bold mb-4">Follow Us</h3>
          <div className="flex justify-center md:justify-start space-x-4">
            <SocialIcons />
          </div>
        </div>
      </div>
      <div className="mt-8 pt-8 border-t border-gray-700 text-center text-gray-500">
        <p>© 2024 Berwick Manor. All Rights Reserved.</p>
      </div>
    </footer>
  );
};

export default Footer;
