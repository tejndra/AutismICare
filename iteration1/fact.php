<?php include 'connectDB.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Autism I Care </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script>
  <script type="text/javascript" src="js/event.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-md bg-success navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">AutismICare</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="fact.php"><i class="fa fa-bullhorn"></i>   Facts about Autism  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php"><i class="fa fa-calendar"></i>   Upcoming Autism Events  </a>
      </li>  
    </ul>
  </div>  
</nav>

<!-- Start contents -->
<div class="container-fluid mt-5">
  <br><h1>What is ASD?</h1>
    <blockquote class="blockquote">
      <p>Autism spectrum disorder (ASD) is <q>a set of neurodevelopmental disorders characterized by a lack of social interaction, verbal and nonverbal communication in the first 3 years of life.</q></p>
      <q>The distinctive social behaviors include an avoidance of eye contact, problems with emotional control or understanding the emotions of others, and a markedly restricted range of activities and interests</q> 
      <footer class="blockquote-footer">Park et. al.</footer>
    </blockquote>
    <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4766109/" class="read-more btn btn-primary" role="button">Read more</a><br><br>
    <?php
      $sql = "SELECT F_desc, F_author, F_url FROM Fact";
      $result = $conn->query($sql);
      if ($result->num_rows > 0)
      {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            echo "<blockquote class='blockquote'>" . $row["F_desc"]. "<footer class='blockquote-footer'>" . $row["F_author"]. "</footer>" . "</blockquote><a href='". $row["F_url"]. "' class='read-more btn btn-primary' role='button'>Read more</a><br><br>";
        }
      } 
      else 
      {
          echo "0 results";
      }
      $conn->close(); ?>
</div>
<!-- End contents -->

</body>
</html>