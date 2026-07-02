
import React from 'react';

interface FeatureCardProps {
  icon: string;
  title: string;
  description: string;
  delay: number;
}

const FeatureCard: React.FC<FeatureCardProps> = ({ icon, title, description, delay }) => (
  <div className="text-center" data-aos="fade-up" data-aos-delay={delay}>
    <div className="flex items-center justify-center h-20 w-20 rounded-full bg-primary text-white mx-auto mb-4">
      <span className="material-icons text-4xl">{icon}</span>
    </div>
    <h3 className="text-2xl font-bold mb-3 text-primary">{title}</h3>
    <p className="text-text-light dark:text-text-dark">{description}</p>
  </div>
);

const WhyChooseUs: React.FC = () => {
  const features = [
    {
      icon: "restaurant_menu",
      title: "Exquisite Cuisine",
      description: "Our menu is a masterpiece of culinary art, featuring a fusion of traditional flavors and contemporary techniques, all prepared with the freshest local ingredients.",
    },
    {
      icon: "local_bar",
      title: "Premium Shisha",
      description: "Indulge in our wide selection of premium shisha flavors in a luxurious and comfortable lounge setting, perfect for relaxation and conversation.",
    },
    {
      icon: "celebration",
      title: "Unforgettable Ambiance",
      description: "From the elegant decor to the warm, inviting atmosphere, every detail at Berwick Manor is designed to provide an exceptional and memorable experience.",
    },
  ];

  return (
    <section className="py-20 px-6 md:px-12 bg-white dark:bg-gray-800">
      <div className="container mx-auto">
        <h2 className="text-4xl font-bold text-center mb-12 text-primary" data-aos="fade-up">
          Why Choose Us?
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-10">
          {features.map((feature, index) => (
            <FeatureCard key={feature.title} {...feature} delay={index * 100} />
          ))}
        </div>
      </div>
    </section>
  );
};

export default WhyChooseUs;
