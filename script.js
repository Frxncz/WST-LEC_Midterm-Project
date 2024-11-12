document.getElementById('myButton').addEventListener('click', function() {
    document.getElementById('myPara').textContent = "You clicked the button!";
  });
  

  document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents the form from submitting
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let errorMessage = '';
  
    if (email === '') {
      errorMessage += 'Email is required. ';
    }
    
    if (password.length < 8) {
      errorMessage += 'Password must be at least 8 characters long.';
    }
  
    if (errorMessage) {
      document.getElementById('error').textContent = errorMessage;
    } else {
      document.getElementById('error').textContent = '';
      alert('Form submitted successfully!');
      // Form can be submitted or processed here
    }
  });
  


  const fruits = ["apple", "banana", "mango", "grape"];

function displayFruits() {
  const fruitList = document.getElementById('fruitList');
  fruitList.innerHTML = ''; // Clear the list in case of repeated calls

  fruits.forEach(fruit => {
    const li = document.createElement('li');
    li.textContent = fruit;
    fruitList.appendChild(li);
  });
}

// Call the function to display the fruits on page load
displayFruits();
