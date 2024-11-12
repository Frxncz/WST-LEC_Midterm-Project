<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Francis Midterm</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <header>
    <h1>Welcome to Our Website</h1>
    <nav>
      <a href="#home">Home</a>
      <a href="#about-us">About Us</a>
      <a href="#contact">Contact</a>
      <a href="#server-side">Server Side Topic</a>
    </nav>
  </header>

  <main class="container">
    <section class="left-column">
      <h2>Introduction</h2>
      <p>Welcome to our site! Please fill out the form to get started with our services.</p>
    </section>

    <section class="right-column">
      <h2>Our Services</h2>
      <ul>
        <li>Long Form Video Editing</li>
        <li>Short Form Video Editing</li>
        <li>Graphic Design</li>
      </ul>
    </section>
  </main>

  <!-- Form Section -->
  <form action="submit_form.php" method="post">
    <fieldset>
      <legend>Personal Information</legend>

      <label for="firstName">First Name</label>
      <input type="text" id="firstName" name="firstName" required>

      <label for="lastName">Last Name</label>
      <input type="text" id="lastName" name="lastName" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" minlength="8" required>

      <label for="dob">Date of Birth</label>
      <input type="date" id="dob" name="dob" required>

      <label for="country">Country</label>
      <select id="country" name="country" required>
        <option value="">Select your country</option>
        <option value="US">United States</option>
        <option value="CA">Canada</option>
        <option value="GB">United Kingdom</option>
        <option value="AU">Australia</option>
        <option value="PH">Philippines</option>
        <!-- Add more countries as needed -->
      </select>

    </fieldset>

    <button type="submit">Submit</button>
  </form>


  <p id="myPara">This is the original text.</p>
  <div class="button-container">
    <button id="myButton">Click Me!</button>
  </div>
  <script src="script.js"></script>


  <ul id="fruitList"></ul>

   <!-- Server-side Basics Section -->
   <section class="server-side" id="server-side">
    <h2>Server-side Basics</h2>
    <p>Server-side technologies are crucial in building dynamic websites and web applications. They handle data processing, database interactions, and user requests on the server, providing a foundation for web applications.</p>
    
    <h3>PHP</h3>
    <p>PHP is a popular server-side scripting language. It is widely used for creating dynamic web pages and handling server-side operations such as form submissions and user authentication. PHP runs on the server, generating HTML content that is sent to the client.</p>
    <p><strong>Example:</strong> A simple PHP script that processes a contact form submission:</p>
    <pre>
      &lt;?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $name = $_POST['name'];
          $email = $_POST['email'];
          echo "Thank you, $name! We'll contact you at $email.";
        }
      ?&gt;
    </pre>
    
    <h3>Node.js</h3>
    <p>Node.js is a runtime environment that allows you to run JavaScript on the server. It is designed for building scalable and high-performance applications, especially for handling many simultaneous connections.</p>
    <p><strong>Example:</strong> A simple Node.js server that responds to HTTP requests:</p>
    <pre>
      const http = require('http');
      const server = http.createServer((req, res) => {
        res.writeHead(200, {'Content-Type': 'text/plain'});
        res.end('Hello from Node.js');
      });
      server.listen(3000, () => {
        console.log('Server is running on port 3000');
      });
    </pre>
    
    <h3>SQL Databases</h3>
    <p>SQL databases are used to store and manage structured data. They use the Structured Query Language (SQL) to perform tasks such as data retrieval, insertion, and updates. Examples of SQL databases include MySQL, PostgreSQL, and SQLite.</p>
    <p><strong>Example:</strong> A simple SQL query to retrieve user data from a database:</p>
    <pre>
      SELECT * FROM users WHERE id = 1;
    </pre>
  </section>

  <!-- About Us Section -->
  <section class="about-us" id="about-us">
    <h2>About Us</h2>
    <p>We are a dedicated team providing high-quality video editing and graphic design services to help your brand stand out.</p>
  </section>

  <!-- Contact Section -->
  <section class="contact" id="contact">
    <h2>Contact Information</h2>
    <p>Email: francisjoncarlo@gmail.com</p>
    <p>Phone: +63 0963 274 6889</p>
    <p>Address: 123 Main St, Cityville, Mandaluyong city</p>
  </section>


  <footer>
    <p>&copy; <span id="year"></span> Our Website. All rights reserved.</p>
  </footer>

  <script>
    // Set current year in footer
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>

</body>
</html>
