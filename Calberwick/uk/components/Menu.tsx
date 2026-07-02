
import React from 'react';

interface MenuItem {
  name: string;
  price: string;
}

interface MenuCategoryProps {
  title: string;
  items: MenuItem[];
}

const MenuCategory: React.FC<MenuCategoryProps> = ({ title, items }) => (
  <div className="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6" data-aos="fade-up">
    <h3 className="text-2xl font-bold mb-4 text-primary">{title}</h3>
    <ul>
      {items.map((item, index) => (
        <li
          key={item.name}
          className={`flex justify-between py-2 ${index < items.length - 1 ? 'border-b border-gray-200 dark:border-gray-700' : ''}`}
        >
          <span>{item.name}</span>
          <span className="font-semibold text-primary">{item.price}</span>
        </li>
      ))}
    </ul>
  </div>
);

const Menu: React.FC = () => {
  const menuData = {
    appetizers: [
      { name: 'Hummus with Pita', price: '$8' },
      { name: 'Falafel Bites', price: '$10' },
      { name: 'Stuffed Grape Leaves', price: '$9' },
    ],
    mainCourses: [
      { name: 'Grilled Lamb Chops', price: '$28' },
      { name: 'Chicken Shawarma Platter', price: '$22' },
      { name: 'Berwick Manor Burger', price: '$18' },
    ],
    shisha: [
      { name: 'Double Apple', price: '$25' },
      { name: 'Mint Grape', price: '$25' },
      { name: 'Berwick Special Mix', price: '$30' },
    ],
    desserts: [
        { name: 'Baklava', price: '$9' },
        { name: 'Chocolate Lava Cake', price: '$12' },
        { name: 'Cheesecake', price: '$10' },
    ],
    drinks: [
        { name: 'Moroccan Mint Tea', price: '$6' },
        { name: 'Fresh Orange Juice', price: '$7' },
        { name: 'Signature Cocktails', price: '$15' },
    ],
  };

  return (
    <section className="py-20 px-6 md:px-12 bg-background-light dark:bg-background-dark" id="menu">
      <div className="container mx-auto">
        <h2 className="text-4xl font-bold text-center mb-12 text-primary" data-aos="fade-up">
          Our Menu
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <MenuCategory title="Appetizers" items={menuData.appetizers} />
          <MenuCategory title="Main Courses" items={menuData.mainCourses} />
          <MenuCategory title="Shisha Flavors" items={menuData.shisha} />
          <MenuCategory title="Desserts" items={menuData.desserts} />
          <MenuCategory title="Drinks" items={menuData.drinks} />
        </div>
      </div>
    </section>
  );
};

export default Menu;
