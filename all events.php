<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style2.css" />
    <title>catalogue</title>
  </head>
  <body>

    <nav class="navbar">
        
        <div class="navbar-menu" id="navbarMenu">
            <a href="all events.php"><img src="images/login-logo.png" style="max-width: 150px;  "> </a>
          <button><a href="main.php">Home</a></button>
          <button><a href="all events.php">About</a></button>
          <button><a href="all events.php">Services</a></button>
          <button><a href="all events.php">Contact</a></button>
          <div class="search">
            <i class='bx bx-search'></i>
            <input type="text" class="hide" placeholder="Quick Search ...">
          </div>
        </div>
        <button class="navbar-toggle" onclick="toggleMenu()">☰</button>
      </nav>
  
      <aside>
        <div class="sidebar-top">
          <span class="shrink-btn">
            <i class='bx bx-chevron-left'></i>
          </span>
          <img src="./img/logo.png" class="logo" alt="">
          <h3 class="hide">EVENTORIUM</h3>
        </div>
        
       
    
        <div class="sidebar-links">
          <ul>
            <div class="active-tab"></div>
            <li class="tooltip-element" data-tooltip="0">
              <a href="main.php" class="active" data-active="0">
                <div class="icon">
                  <i class='bx bx-tachometer'></i>
                  <i class='bx bxs-tachometer'></i>
                </div>
                <span class="link hide">Dashboard</span>
              </a>
            </li>
            <li class="tooltip-element" data-tooltip="1">
                <a href="all events.php" data-active="1">
                  <div class="icon">
                    <i class='bx bx-folder'></i>
                    <i class='bx bxs-folder'></i>
                  </div>
                  <span class="link hide">All events</span>
                </a>
              </li>
              <li class="tooltip-element" data-tooltip="2">
                <a href="eventmanage.php" data-active="2">
                  <div class="icon">
                    <i class='bx bx-bar-chart-square'></i>
                    <i class='bx bxs-bar-chart-square'></i>
                  </div>
                  <span class="link hide">Manage events</span>
                </a>
              </li>
            <div class="tooltip">
              <span class="show">Dashboard</span>
              <span>Projects</span>
              <span>Messages</span>
              <span>Analytics</span>
            </div>
          </ul>
    
          
    
        <div class="sidebar-footer">
          <a href="all events.php" class="account tooltip-element" data-tooltip="0">
            <i class='bx bx-user'></i>
          </a>
          <div class="admin-user tooltip-element" data-tooltip="1">
            <div class="admin-profile hide">
              <img src="./img/face-1.png" alt="">
              <div class="admin-info">
                <h3>John Doe</h3>
                <h5>Admin</h5>
              </div>
            </div>
            <a href="login.php" class="log-out">
              <i class='bx bx-log-out'></i>
            </a>
          </div>
          <div class="tooltip">
            <span class="show">John Doe</span>
            <span>Logout</span>
          </div>
        </div>
      </aside>



      <div class="recentevents" id="recent">
        <h3>All Events</h3>
      </div>



    <div class="container mx-auto mt-4">
      <div class="row" id="grid" style="margin-left: 150px; margin-top: 50px;">

        <?php
        // Database connection
        $con = mysqli_connect('localhost', 'root', '', 'eventorium');
        if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch event data from the database
        $query = "SELECT * FROM events";
        $result = mysqli_query($con, $query);

        // Check if there are any events
        if (mysqli_num_rows($result) > 0) {
          // Loop through each event and display it
          while ($row = mysqli_fetch_assoc($result)) {
            $event_id = $row['event_id'];
            $organizer_name = $row['organizer_name'];
            $event_name = $row['event_name'];
            $venue = $row['venue'];
            $event_date = $row['event_date'];
            $event_time = $row['event_time'];
            $event_description = $row['event_description'];
            $image = $row['image'];  // Image file name (stored in the 'uploads' directory)
            
            // Create the image URL
            $image_url = 'uploads/' . $image;
            
            // Output HTML for each event
            echo "
            <div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='$image_url' style = 'max-height: 400px ' class='card-img-top' alt='Event Image'>
                    <div class='card-body'>
                        <h5 class='card-title'>$event_name</h5>
                        <h6 class='card-subtitle mb-2 text-muted'>$event_date</h6>
                        <p class='card-text'>$event_description</p>
                        <a href='#' class='btn btn-primary' onclick='showBigCard(\"$event_name\", \"$event_description\", \"DETAILS\", \"BUY NOW\")'>
                            <i class='fas fa-link'></i> Show Details
                        </a>
                    </div>
                </div>
            </div>
            ";
          }
        } else {
          echo "<p>No events found.</p>";
        }

        // Close the database connection
        mysqli_close($con);
        ?>

      </div>
    </div>



    <div class="container2" id="bigcard" style="display: none;">
        <div class="wrapper">
          <div class="banner-image"> </div>
          <h1 id="bigcard-title">Toyota Supra</h1>
          <p id="bigcard-text">Lorem ipsum dolor sit amet, <br /> consectetur adipiscing elit.</p>
        </div>
        <div class="button-wrapper">
          
          <button class="btn1 fills" id="bigcard-btn2" onclick="closeBigCard()">BACK</button>
          
        </div>
      </div>
      <script src="script2.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
  </html>