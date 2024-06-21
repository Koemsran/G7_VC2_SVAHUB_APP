<template>
  <div class="about">
    <div class="contact-section w-full bg-white shadow-lg">
      <div class="contact-header relative text-center text-white">
        <img
          src="../../assets/image/images.png"
          alt="Football"
          class="header-image w-full h-[90vh] md:h-[70vh] lg:h-[100vh] object-cover"
        />
        <div
          class="header-text absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center w-[90%] md:w-[80%] lg:w-[60%]"
        >
          <h1>About Page for SVAHAB</h1>
          <h2>Welcome to SVAHAB</h2>
          <p>
            SVAHAB is your ultimate destination for discovering, booking, and managing football
            field reservations. Whether you’re an amateur enthusiast or a seasoned player, our
            platform is designed to make your football experience seamless and enjoyable.
          </p>
          <button
            class="bg-gradient-to-r from-[#AA9A97] to-[#8F504B] hover:bg-gradient-to-r text-white font-bold py-2 px-4 mt-4 rounded-md w-40 border border-white"
          >
            About Page
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
    <div class="text-center">
      <div class="flex items-center justify-center mb-4 text-3xl text-blue-500">
        <img
          width="100"
          height="100"
          class="border border-2 border-info avatar-img rounded-circle"
          src="../../assets/image/mission.png"
          alt=""
        />
      </div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">Our Mission</h3>
      <p class="text-gray-700">
        To provide a seamless and efficient platform for football enthusiasts to discover, book, and
        manage football field reservations, ensuring easy access to quality sports facilities. We
        aim to foster a vibrant community of active and engaged players by leveraging innovative
        technology and exceptional customer service. .
      </p>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center mb-4 text-3xl text-blue-500">
        <img
          width="100"
          height="100"
          class="border border-2 border-info avatar-img rounded-circle"
          src="../../assets/image/vision.png"
          alt=""
        />
      </div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">Our Vision</h3>
      <p class="text-gray-700">
        To be the leading platform in transforming the way football fields are booked and managed,
        empowering players with cutting-edge technology, and expanding access to quality sports
        facilities worldwide. We envision promoting a healthier, more active lifestyle by
        encouraging community engagement and supporting the development of amateur and professional
        football talent. Our goal is to make football accessible, enjoyable, and hassle-free for
        everyone, everywhere.
      </p>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center mb-4 text-3xl text-blue-500">
        <img
          width="100"
          height="100"
          class="border border-2 border-info avatar-img rounded-circle"
          src="../../assets/image/book.png"
          alt=""
        />
      </div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">Our Core Values</h3>
      <p class="text-gray-700">
        Accessibility: Ensuring that football fields are easily accessible to all users, regardless
        of location, skill level, or socio-economic status. 
        Community: Fostering a strong sense of community among football enthusiasts by providing a platform where players can connect,
        share experiences, and grow together. 
      </p>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center mb-4 text-3xl text-blue-500">
        <img
          width="100"
          height="100"
          class="border border-2 border-info avatar-img rounded-circle"
          src="../../assets/image/shop.jpg"
          alt=""
        />
      </div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">Community</h3>
      <p class="text-gray-700">
        Community: Fostering a strong sense of community among football enthusiasts by providing a
        platform where players can connect, share experiences, and grow together. .
      </p>
    </div>

    <section>
      <h2>Why Choose SVAHAB?</h2>
      <ul>
        <li>
          <strong>User-Friendly Platform:</strong> Our intuitive interface makes it easy to search
          for, book, and manage football field reservations.
        </li>
        <li>
          <strong>Wide Selection:</strong> Access a wide variety of football fields tailored to your
          preferences and needs.
        </li>
        <li>
          <strong>Secure Payments:</strong> Enjoy peace of mind with our secure and reliable payment
          system.
        </li>
        <li>
          <strong>Real-Time Availability:</strong> Check real-time availability and instantly book
          your preferred football fields.
        </li>
        <li>
          <strong>Community Engagement:</strong> Connect with fellow players, join teams, and
          participate in local events and leagues.
        </li>
      </ul>
    </section>

    <section>
      <h2>Join the SVAHAB Community</h2>
      <p>
        At SVAHAB, we are passionate about football and dedicated to making it accessible and
        enjoyable for everyone. Join our growing community of football enthusiasts and take your
        game to the next level.
      </p>
    </section>
  </div>
</template>

<script>
export default {
  name: 'About'
}
</script>

<style scoped>
.about {
  padding: 20px;
  font-family: Arial, sans-serif;
}

.intro {
  position: relative;
  text-align: center;
  color: #fff;
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 50px; /* Add more space below the intro section */
}

.background-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('src/assets/image/images.png'); /* Update with the actual path to your image */
  background-size: cover;
  background-position: center;
  z-index: -1;
  border-radius: 10px;
}

.intro h1,
.intro h2 {
  margin: 0 0 10px 0;
}

.intro p {
  margin: 0;
}

.cards {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
  margin-bottom: 20px;
}

.card {
  background: rgba(0, 0, 0, 0.7); /* Semi-transparent background for readability */
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  font-size: 0.9rem; /* Smaller font size */
  line-height: 1.4; /* Adjusted line height for readability */
}

.card h3 {
  margin-top: 0;
  font-size: 1.2rem; /* Smaller heading size */
}

.card p {
  margin: 10px 0;
}

@media (min-width: 768px) {
  .cards {
    grid-template-columns: 1fr 1fr;
  }
}
</style>
