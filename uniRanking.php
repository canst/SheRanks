<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SheRanks - University Ranking Questionnaire</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">SheRanks</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#statistics">Statistics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#mission">Mission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uniRanking.php">RankYourUni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h2 class="text-center">University Ranking Questionnaire</h2>
    <p class="text-center">Please provide information about the university and rank it based on the following aspects:</p>
    <form id="ranking-form" method="POST" action="saveRanking.php">
      <div class="form-group row">
        <label for="university-name" class="col-sm-2 col-form-label">University Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control text-uppercase" id="university-name" name="university-name" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="country" class="col-sm-2 col-form-label">Country</label>
        <div class="col-sm-10">
          <input type="text" class="form-control text-uppercase" id="country" name="country" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="city" class="col-sm-2 col-form-label">City</label>
        <div class="col-sm-10">
          <input type="text" class="form-control text-uppercase" id="city" name="city" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="address" name="address" required>
        </div>
      </div>

      <hr>

      <h4>Safety and Security</h4>
      <div class="container">
        <!-- Safety and Security ranking inputs -->
        <div class="form-group">
            <label for="safety">Safety and Security</label>
            <p>Rate the safety and security measures in place to protect female students:</p>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-outline-primary">
                <input type="radio" name="safety" value="1"> 1
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="safety" value="2"> 2
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="safety" value="3"> 3
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="safety" value="4"> 4
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="safety" value="5"> 5
              </label>
            </div>
        </div>
      </div>

      <hr>

      <h4>Gender-Based Violence Prevention</h4>
      <div class="container">
        <!-- Gender-Based Violence Prevention ranking inputs -->
        <div class="form-group">
            <label for="gender-violence">Gender-Based Violence Prevention</label>
            <p>Rate the efforts to prevent and address gender-based violence:</p>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-outline-primary">
                <input type="radio" name="gender-violence" value="1"> 1
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="gender-violence" value="2"> 2
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="gender-violence" value="3"> 3
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="gender-violence" value="4"> 4
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="gender-violence" value="5"> 5
              </label>
            </div>
        </div>
      </div>

      <hr>

      <h4>Inclusivity and Diversity</h4>
      <div class="container">
        <!-- Inclusivity and Diversity ranking inputs -->
        <div class="form-group">
            <label for="inclusivity">Inclusivity and Diversity</label>
            <p>Rate the university's efforts in promoting inclusivity and diversity:</p>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-outline-primary">
                <input type="radio" name="inclusivity" value="1"> 1
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="inclusivity" value="2"> 2
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="inclusivity" value="3"> 3
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="inclusivity" value="4"> 4
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="inclusivity" value="5"> 5
              </label>
            </div>
        </div>
      </div>

      <hr>

      <div class="container">
        <!-- Submit button -->
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit Ranking</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
