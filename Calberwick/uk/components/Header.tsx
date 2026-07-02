
import React, { useState } from 'react';

const Header: React.FC = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const navLinks = [
    { href: "#", label: "Home" },
    { href: "#menu", label: "Menu" },
    { href: "#about", label: "About" },
    { href: "#contact", label: "Contact" },
  ];

  return (
    <header className="absolute w-full top-0 z-20 py-4 px-6 md:px-12 bg-black bg-opacity-20">
      <div className="container mx-auto flex justify-between items-center">
        <img
          alt="Berwick Manor Logo"
          className="h-16 w-16"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVafR4MbXhlaM9bJjSl4jUOU65aJpv1KstWrDVIEgXyNsVc2lrg2UerIIthYatN5SThlocAxt4IOkoHLPq78N9uQnOyFoQ6IsfvgzwYZ64NVh9K75Vvjgue3cnxhkdsYvILV08IdBtZ8XgOoHb3FxbY_J7gM_WMeMQzhemrllS8nKRiu0qIsM1bLhQ4sv6BGRhXbOzeKB3VmyeUn5ZquDEPr5QYs5TemAMezWJ7KRbbYlpG2w_-jdYrHbcu5oxIc0DHZMdkkx4hA"
        />
        <nav className="hidden md:flex items-center space-x-8">
          {navLinks.map((link) => (
            <a key={link.label} href={link.href} className="text-gray-200 hover:text-white transition-colors duration-300 font-medium">
              {link.label}
            </a>
          ))}
        </nav>
        <button className="md:hidden text-white z-30" onClick={() => setIsMenuOpen(!isMenuOpen)}>
          <span className="material-icons text-3xl">{isMenuOpen ? 'close' : 'menu'}</span>
        </button>
      </div>
      {isMenuOpen && (
        <div className="md:hidden fixed inset-0 bg-black bg-opacity-90 flex flex-col items-center justify-center space-y-8">
          {navLinks.map((link) => (
            <a
              key={link.label}
              href={link.href}
              className="text-white text-2xl hover:text-primary transition-colors duration-300"
              onClick={() => setIsMenuOpen(false)}
            >
              {link.label}
            </a>
          ))}
        </div>
      )}
    </header>
  );
};

export default Header;
