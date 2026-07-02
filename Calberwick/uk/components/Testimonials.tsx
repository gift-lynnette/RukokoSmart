
import React from 'react';

interface TestimonialCardProps {
  quote: string;
  avatar: string;
  name: string;
  title: string;
  delay: number;
}

const TestimonialCard: React.FC<TestimonialCardProps> = ({ quote, avatar, name, title, delay }) => (
  <div className="bg-white dark:bg-background-dark rounded-lg shadow-lg p-6 flex flex-col" data-aos="fade-up" data-aos-delay={delay}>
    <div className="flex-grow">
      <p className="text-text-light dark:text-text-dark mb-4">"{quote}"</p>
    </div>
    <div className="flex items-center mt-4">
      <img
        alt={`Avatar of ${name}`}
        className="w-12 h-12 rounded-full mr-4 object-cover"
        src={avatar}
      />
      <div>
        <p className="font-semibold text-primary">{name}</p>
        <p className="text-sm text-gray-500 dark:text-gray-400">{title}</p>
      </div>
    </div>
  </div>
);

const Testimonials: React.FC = () => {
  const testimonials = [
    {
      quote: "An absolute gem! The food was exquisite, the ambiance was perfect, and the shisha was the best I've had. A truly memorable evening.",
      avatar: "https://lh3.googleusercontent.com/aida-public/AB6AXuA1k3IdGebRQ2jOP2rmShXJKzqa4-H-ODFe8mijeXQ4fUQ4ut5l3EBe6rdJ4DSYbTh2TKoR04r-OCSWbTk196wAnL7CVdsCnmAvRTDVVmCCCGgUsMFZQjQHbBkpNFQH14aodx6Nw3CuAnokxz2gFexb9EkRnzJpLicFIq9_r-v2QWjkapU8sZpoYoaDwOPOuCbsLrvumd29_4uam7P_-t6RqxBBCpA4ciRKF4YrMGzzbSSM7FwH7Du1DhT4zogb5kk9oW7wZLYbPA",
      name: "John D.",
      title: "Food Critic",
    },
    {
      quote: "The service was impeccable from start to finish. The staff were so attentive and friendly. I felt like royalty. Highly recommend the lamb chops!",
      avatar: "https://lh3.googleusercontent.com/aida-public/AB6AXuA6ign0CEjc5zILSpHWBlz6ujjECHjvnwpuLNj4HOVB0zl2IeBq-jjQ133z0N4QMV6aax_D-JgpdnfFGR-amSgMLd2u_j7gyy3VcjnJfRK6SRqRqG_GogmvQ-KseVVWpsaW7E-qeQZtjVORaQDb5eCEoE2Wa_8_dggK4duC1UnZ-wzHRvQmOeUtnPONHcF6q5QeekimFZxMjZtWyLOxiWOxK-gm-e1Doa4210vZL1zKsT4aZ_xVpQkxsijL4P5FD-wOFfGCtdC88g",
      name: "Sarah L.",
      title: "Regular Guest",
    },
    {
      quote: "I came for the shisha and stayed for the atmosphere. It's the perfect place to unwind after a long week. The special mix is a must-try!",
      avatar: "https://lh3.googleusercontent.com/aida-public/AB6AXuDghlw3LgHbSQYtBAXjo1mrCwy6cAPFwQQqsC9yv3yUShceYQG2M-KVxnz1tWnsLzqzBkKv5mIMSb41tC0vXCoBiN34r47I4IQ207EneudlZLJ71Be10_THD0UfhKvHW5Mn2orCXfmvPwKRQY0Wf32DCFgXA6tH8Ft2fHXGlkL8xjS9v3JQvaRXHyTtljf2VHyDJemaL4H9ZKupelFr-_2BJTJz13AWyF-JkjeE3lwSb8haw6UMUOfE-zXrG0WHH4IMpSRlJsE8AQ",
      name: "Mike P.",
      title: "Shisha Enthusiast",
    },
  ];

  return (
    <section className="py-20 px-6 md:px-12 bg-white dark:bg-gray-800" id="testimonials">
      <div className="container mx-auto">
        <h2 className="text-4xl font-bold text-center mb-12 text-primary" data-aos="fade-up">
          What Our Guests Say
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {testimonials.map((t, index) => (
            <TestimonialCard key={t.name} {...t} delay={index * 100} />
          ))}
        </div>
      </div>
    </section>
  );
};

export default Testimonials;
