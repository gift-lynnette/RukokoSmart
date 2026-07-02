
import React from 'react';

const Hero: React.FC = () => {
  return (
    <section className="hero h-screen flex items-center justify-center" id="home">
      <div className="text-center text-white bg-black bg-opacity-50 p-8 rounded-lg" data-aos="fade-up">
        <h1 className="text-5xl md:text-7xl font-bold mb-4">Berwick Manor</h1>
        <p className="text-xl md:text-2xl mb-8">Dining and Shisha Lounge</p>
        <a
          href="#"
          className="bg-primary hover:bg-opacity-90 text-white font-bold py-3 px-8 rounded-full text-lg transition-transform transform hover:scale-105 duration-300 inline-block"
        >
          Reserve a Table
        </a>
      </div>
    </section>
  );
};

export default Hero;
