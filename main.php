import React from 'react';

function Header() {
  return (
    <header>
      <h1>My Simple App</h1>
    </header>
  );
}

export default Header;

import React from 'react';

function MainContent() {
  return (
    <main>
      <p>Main Content Goes Here</p>
    </main>
  );
}

export default MainContent;

import React from 'react';

function Footer() {
  return (
    <footer>
      <p>© 2023 My Simple App</p>
    </footer>
  );
}

export default Footer;

import React, { useState } from 'react';

function Contact() {
  const [message, setMessage] = useState('');

  const handleInputChange = (e) => {
    setMessage(e.target.value);
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    // Kirim pesan
  };

  return (
    <div>
      <h2>Contact Us</h2>
      <form onSubmit={handleSubmit}>
        <textarea
          placeholder="Enter your message"
          value={message}
          onChange={handleInputChange}
        ></textarea>
        <button type="submit">Send</button>
      </form>
    </div>
  );
}

export default Contact;

import React from 'react';

function HomePage() {
  return (
    <div>
      <h2>Home</h2>
      <p>Welcome to the Home Page!</p>
    </div>
  );
}

export default HomePage;

import React from 'react';

function AboutPage() {
  return (
    <div>
      <h2>About Us</h2>
      <p>About Page Content Goes Here</p>
    </div>
  );
}

import axios from 'axios';

// Membuat fungsi async untuk mengambil data dari API
async function fetchData() {
  try {
    const response = await axios.get('https://example.com/api/data');
    const data = response.data;
    return data;
  } catch (error) {
    console.error('Error fetching data:', error);
  }
}
