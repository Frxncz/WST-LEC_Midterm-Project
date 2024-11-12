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
      <a href="#about">About Us</a>
      <a href="#contact">Contact</a>
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
  <button id="myButton">Click Me!</button>
  <script src="script.js"></script>


  <ul id="fruitList"></ul>


  <footer>
    <p>&copy; <span id="year"></span> Our Website. All rights reserved.</p>
  </footer>

  <script>
    // Set current year in footer
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>

</body>
</html>