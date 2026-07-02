
import React from 'react';

const About: React.FC = () => {
  return (
    <section className="py-20 px-6 md:px-12 bg-background-light dark:bg-background-dark" id="about">
      <div className="container mx-auto">
        <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div className="order-2 md:order-1" data-aos="fade-right">
            <h2 className="text-4xl font-bold mb-6 text-primary">About Berwick Manor</h2>
            <p className="mb-4 text-text-light dark:text-text-dark">
              Nestled in the heart of the city, Berwick Manor is a sanctuary for those who appreciate the finer things in life. We blend traditional hospitality with modern culinary innovation to create an unforgettable dining experience.
            </p>
            <p className="mb-6 text-text-light dark:text-text-dark">
              Our passion is to serve exquisite dishes prepared with the freshest, locally-sourced ingredients. Paired with our premium shisha lounge, we offer a unique atmosphere for relaxation and socializing. At Berwick Manor, every visit is more than just a meal; it's a memory in the making.
            </p>
            <a
              href="#"
              className="bg-primary hover:bg-opacity-90 text-white font-bold py-3 px-8 rounded-full text-lg transition-transform transform hover:scale-105 duration-300 inline-block"
            >
              Learn More
            </a>
          </div>
          <div className="order-1 md:order-2" data-aos="fade-left">
            <img
              alt="Interior of Berwick Manor"
              className="rounded-lg shadow-lg w-full h-auto object-cover"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0iOhNUs0kHNrfgXIHB0sM_h6Q5O_XA95lG6BttmI1IO9RUq7mi2GlQJz1RdT-LKtFrLW58lUTHmK0yYAs02ozCaJwgsD7elBhNuNthDmhn6VHXwCsSiI_tV1IiPi97tnJw_j_EQobMhI9RtWOy4YCGgNMcqVuwmPP_V7TsiRt8G2_nIHNRd4UbiwgzGfEZJ-taseixbXNfCGoG2hsSWGfH54W4zNY89y061B9MRPhHKkjYZNFwtomHmQzHJhzqq4JIVvpSCp8dQ"
            />
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
