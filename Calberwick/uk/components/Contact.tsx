
import React from 'react';

const Contact: React.FC = () => {
  return (
    <section className="py-20 px-6 md:px-12 bg-background-light dark:bg-background-dark" id="contact">
      <div className="container mx-auto text-center">
        <h2 className="text-4xl font-bold mb-12 text-primary" data-aos="fade-up">Contact Us</h2>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-12">
          <div className="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8" data-aos="fade-right">
            <h3 className="text-2xl font-bold mb-4 text-primary">Location</h3>
            <p className="text-text-light dark:text-text-dark mb-4">
              123 Manor Lane, Berwick, BW 12345
            </p>
            <div className="h-64 rounded-lg overflow-hidden">
              <iframe
                title="Google Maps Location"
                allowFullScreen={true}
                height="100%"
                loading="lazy"
                referrerPolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.228941235198!2d145.1294244153163!3d-37.78363797975825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad644e5a5ea3e9d%3A0x2a0432857317775!2sMelbourne%20Australia!5e0!3m2!1sen!2sus!4v1683141158580!5m2!1sen!2sus"
                style={{ border: 0 }}
                width="100%"
              ></iframe>
            </div>
          </div>
          <div className="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 text-left" data-aos="fade-left">
            <h3 className="text-2xl font-bold mb-4 text-primary">Hours</h3>
            <ul className="text-text-light dark:text-text-dark space-y-2">
              <li><span className="font-semibold">Monday - Thursday:</span> 5:00 PM - 11:00 PM</li>
              <li><span className="font-semibold">Friday - Saturday:</span> 5:00 PM - 1:00 AM</li>
              <li><span className="font-semibold">Sunday:</span> 4:00 PM - 10:00 PM</li>
            </ul>
            <h3 className="text-2xl font-bold mt-8 mb-4 text-primary">Get in Touch</h3>
            <p className="text-text-light dark:text-text-dark mb-2 flex items-center">
              <span className="material-icons align-middle mr-2">phone</span>(123) 456-7890
            </p>
            <p className="text-text-light dark:text-text-dark flex items-center">
              <span className="material-icons align-middle mr-2">email</span>contact@berwickmanor.com
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;
