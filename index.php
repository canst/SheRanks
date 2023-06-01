<?php include 'seo.php'; ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sheranks_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $seo_title; ?></title>
  <meta name="description" content="<?php echo $seo_description; ?>">
  <meta name="keywords" content="<?php echo $seo_keywords; ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    /* Custom CSS styles */
    .hero-image {
      background-image: url('path-to-hero-image.jpg');
      /* Add necessary CSS properties for positioning and sizing */
    }
    .feature-image {
      background-image: url('path-to-feature-image.jpg');
      /* Add necessary CSS properties for positioning and sizing */
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">SheRanks</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#statistics">Statistics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#mission">Mission</a>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uniRanking.php">RankYourUni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-image">
    <div class="container text-center text-white">
      <h1 class="display-4">Empowering Female Students</h1>
      <p class="lead">Join SheRanks to create safer and more inclusive university environments.</p>
      <a href="#" class="btn btn-primary btn-lg">Get Started</a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>About SheRanks</h2>
          <p>SheRanks is a platform dedicated to promoting gender equality and safety for female students in universities.
            Our mission is to create a safe and inclusive environment where all female students can thrive academically
            and personally. Through our tools and resources, we aim to empower female students to voice their concerns,
            share experiences, and drive positive change.</p>
        </div>
        <div class="col-lg-6">
          <img src="images/sheranksabout.jpg" alt="About SheRanks" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics Section -->
  <section id="statistics" class="bg-light py-5">
    <div class="container text-center">
      <h2>Global Statistics on Female Safety</h2>
      <p>Here are some eye-opening statistics that highlight the importance of addressing gender-based violence and promoting
        safety:</p>
      <div class="row">
        <div class="col-md-4">
          <h3>Stat 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-md-4">
          <h3>Stat 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-md-4">
          <h3>Stat 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section id="mission" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="images/sheranksmission.jpg" alt="Our Mission" class="img-fluid feature-image">
        </div>
        <div class="col-lg-6">
          <h2>Our Mission</h2>
          <p>At SheRanks, our mission is to:</p>
          <ul>
            <li>Promote gender equality and safety on university campuses</li>
            <li>Provide a platform for female students to share their experiences</li>
            <li>Advocate for policy changes to address gender-based violence</li>
            <li>Offer support and resources to survivors of sexual assault and harassment</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Objectives Section -->
  <section id="objectives" class="bg-light py-1 m-0">
    <div class="container">
      <h2 class="text-center p-5">Our Objectives</h2><br>
      <div class="row">
        <div class="col-md-6">
          <h3>Objective 1</h3>
          <p>SheRanks aims to create a safe and inclusive environment for female students on university campuses. The organization works towards promoting gender equality and addressing gender-based violence. By raising awareness, providing resources, and advocating for policy changes, SheRanks seeks to create a campus culture that prioritizes the safety and well-being of all female students.</p>
        </div>
        <div class="col-md-6">
          <h3>Objective 2</h3>
          <p>SheRanks aims to empower female students by providing them with a platform to voice their concerns, share their experiences, and drive positive change. Through tools, resources, and support services, SheRanks helps female students build confidence, develop leadership skills, and access the resources they need to succeed academically, personally, and professionally.</p>
        </div>
      </div>
    </div>
    <section id="universities-ranking" class="py-5">
    <div class="container">
        <h2 class="text-center">Universities Ranking</h2>

        <div class="row">
            <div class="col-md-12">
                <?php
                $sql = "SELECT * FROM universities";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Group universities by country and city
                    $groupedData = array();
                    while ($row = $result->fetch_assoc()) {
                        $country = $row["country"];
                        $city = $row["city"];

                        // Create a nested array for each country and city
                        if (!isset($groupedData[$country])) {
                            $groupedData[$country] = array();
                        }
                        if (!isset($groupedData[$country][$city])) {
                            $groupedData[$country][$city] = array();
                        }

                        // Add university data to the nested array
                        $university = array(
                            "name" => $row["university_name"],
                            "safety_ranking" => $row["safety_ranking"],
                            "gender_violence_ranking" => $row["gender_violence_ranking"],
                            "inclusivity_ranking" => $row["inclusivity_ranking"]
                        );
                        array_push($groupedData[$country][$city], $university);
                    }

                    // Display universities ranking by country and city
                    foreach ($groupedData as $country => $cities) {
                        echo "<h3>$country</h3>";
                        foreach ($cities as $city => $universities) {
                            echo "<h4>$city</h4>";
                            echo "<ul>";
                            foreach ($universities as $university) {
                                $name = $university["name"];
                                $safety_ranking = $university["safety_ranking"];
                                $gender_violence_ranking = $university["gender_violence_ranking"];
                                $inclusivity_ranking = $university["inclusivity_ranking"];
                                echo "<li>$name</li>";
                                echo "<ul>";
                                echo "<li>Safety Ranking: $safety_ranking</li>";
                                echo "<li>Gender Violence Ranking: $gender_violence_ranking</li>";
                                echo "<li>Inclusivity Ranking: $inclusivity_ranking</li>";
                                echo "</ul>";
                            }
                            echo "</ul>";
                        }
                        echo "<hr>";
                    }
                } else {
                    echo "No universities ranking data found.";
                }

                // Close the database connection
                $conn->close();
                ?>

            </div>
        </div>
    </div>
</section>

    <!-- Custom JavaScript -->
    <script>
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
    </script>

  <!-- Contact Section -->
  <section id="contact" class="py-5">
    <div class="container">
      <h2>Contact Us</h2>
      <p>If you have any questions or inquiries, feel free to reach out to us:</p>
      <div class="row">
        <div class="col-md-6">
          <h3>Email</h3>
          <p>info@sheranks.com</p>
        </div>
        <div class="col-md-6">
          <h3>Phone</h3>
          <p>Phone number</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2023 SheRanks. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Custom JavaScript -->
  <script src="main.js"></script>
</body>

</html>
