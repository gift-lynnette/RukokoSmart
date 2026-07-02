
import React from 'react';

const GalleryImage: React.FC<{ src: string; alt: string; delay: number }> = ({ src, alt, delay }) => (
  <div className="w-full h-64 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300" data-aos="zoom-in" data-aos-delay={delay}>
    <img alt={alt} className="w-full h-full object-cover" src={src} />
  </div>
);

const Gallery: React.FC = () => {
  const images = [
    { src: "https://lh3.googleusercontent.com/aida-public/AB6AXuBAiFdgYQcBHMnEy60esisrXDxEUZC3DNfemKSOoBmpTWTOGGEo70XrUO4tm4gjaGk1wE8kpTniqPv9eo47Tprnxq5cAZDHLVvq6MGth5cvAUuwSi3uhgGeMM6MaVTuaNaQujZGyKupO6QPIzmL7XmTlThF2HwltMmFBW0UMBZwY9Ns3oip2yCxOo-24UjaZro13M8whbDz6pIgXr0OxxV1xOkenukfCFsCFmdpw2u_4Pp6r9KjdKsOUiWDgVgsw1iAO3YIVtStvQ", alt: "A colorful salad dish" },
    { src: "https://lh3.googleusercontent.com/aida-public/AB6AXuAjL7E_tJk84wuSSDb7ieqruznZVPd-DAD_kPSOXkjGbvPnSkLPnHOhCYzIIP2p1C_sFbl90S0qNSJeDDIhFz6Q0qb5n5BBfqHJ-PtiFzD-UtnjesljPcAhOs24u1Qc-Sm2ZpmOu5nh0fouNDVUk0H9fDZXSC9v1ABSDL1gQXP9Bl309HAaAa4fJ55lFS6M35jdEB9Y5Trk9RBSO2utxTK9UXmNRyZz1AkCZADgGoL1lA-gJyGALyDKvSNBtKzTLiKOkFuXeNR16w", alt: "Restaurant ambiance with warm lighting" },
    { src: "https://lh3.googleusercontent.com/aida-public/AB6AXuBbwyzGNbLp7eD40AEgO_U57dbDOVEzo5nQU0OthUdSWqPLOTnONzY6Rvxh8cNpGXRYtRivt8qUL3Q7yXklekyDICO5N42awvsEZ-cKmaOyhuBHIhsDaHPgfy-Q9S1rLnuUfNXYMtybWMpdTk7loTgk1VBI3rgfB4wXYPkFSK2ol6STXuvRjUFcyZ8CJp-X4-8KPMQUnYnYjJXfE0qV9rC3b8L8h8k8mONz3DtsNKqTyPqV5Ej4YY60JGZVH6kZ0W6UnZgmwh4Rfw", alt: "A gourmet burger with fries" },
    { src: "https://lh3.googleusercontent.com/aida-public/AB6AXuA-I46JmsJC2dJ8zMH2rhwGMee2peMZU_DjKcTWi-hae8nk2na66cYtE9g6Kv5livRIkI1sUwnScOJH4yQj9Lgu-KKTsJSzyR1W4tT8nWrDM2MJzFggRWmj0zt5C3_v8j0PG_dahd5uR1KrCUmq9s5B5PFlzAJHiHCiT5uvXxW0bEPofTOcPgnnJf8ndvsqny_PgJtSlT3P9D1KRlR23dpPgMenQ74nJ9S39_2pIzYLn6Rglb_BZzIwGOJLHmHb1cHWZkVtF53P3w", alt: "A person enjoying shisha" },
    { src: "https://lh3.googleusercontent.com/aida-public/AB6AXuCOAPxl0QxsjA2gOQ7m5OmHrxifrzYAwDOqkI6HZPWx8vDRL_K3UIcaKiRCLd-ABn2hAai7f5wqrOZpsbYDoNE1FR1Qbl39ozwthOhaGH-ExNcZrA0rohYADwlbqi4MsDKUNNrVYsyCplt_WwpJkU85kUsPKixFS_O6bLhpOSOxUxY24l4j4WMuJt5bNzTMfLnGLM6oKt63ZlJduKSKHCdalaHuXzHCjmIqZn-fszRD_hYWAwjEa4msg2rqnWEnU1kHImkVZnrvFA", alt: "Close up of a fancy cocktail" },
    { src: "https://lh3.googleusercontent.com/aida-public/AB6AXuAVk5jCANP8iJtHZWxf00y0zouBgcPgVvi6c4F4IT3VyRiKfGC-JY0Q2hiMzQWJ0o49FL6Z4zB-ltL83hQeGoOUaglNe2EZvvhQ0w2MZlnXHLghnUN7QdmAv5yADFLyO2ltD53gASxr3DxEsv-eLaXBrCEqbjmBVccFZysIhFtxFHq0ob5sJmcfgMAmV7U6SksKNW0L_6C2yqAiFBk35S7Kq9tXT1f-VXLE43j6bE56_8jJ_OBPY1aqQVX-7Cp_b9_j7KTuXahTlw", alt: "A delicious looking pasta dish" },
  ];

  return (
    <section className="py-20 px-6 md:px-12 bg-background-light dark:bg-background-dark" id="gallery">
      <div className="container mx-auto">
        <h2 className="text-4xl font-bold text-center mb-12 text-primary" data-aos="fade-up">
          Gallery
        </h2>
        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
          {images.map((image, index) => (
            <GalleryImage key={index} src={image.src} alt={image.alt} delay={ (index % 3) * 100 } />
          ))}
        </div>
      </div>
    </section>
  );
};

export default Gallery;
