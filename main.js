const express = require('express');
const app = express();
const connection = require('./database');

// Set up middleware to parse request bodies
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

// Define routes
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/views/index.php');
});

app.post('/submit', (req, res) => {
  // Handle form submission and database insertion
  // Retrieve form data from req.body and perform necessary database operations
  // Return appropriate response to the client

  // Example code for inserting data into a table
  const formData = req.body;
  connection.query('INSERT INTO survey_responses SET ?', formData, (error, results) => {
    if (error) {
      console.error('Error inserting data into the database:', error);
      res.status(500).json({ message: 'Internal server error' });
      return;
    }
    res.json({ message: 'Form submitted successfully' });
  });
});

// Start the server
const port = 3000; // Replace with the desired port number
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});

// Custom JavaScript code
// Add fade-in animation to sections when scrolling
const sections = document.querySelectorAll('section');
const fadeInOptions = {
  threshold: 0.3,
  rootMargin: '0px'
};

const fadeInObserver = new IntersectionObserver(function(entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      fadeInObserver.unobserve(entry.target);
    }
  });
}, fadeInOptions);

sections.forEach(section => {
  fadeInObserver.observe(section);
});
