<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventorium"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get today's date
$currentDate = date("Y-m-d");

// Query for upcoming events (events after today)
$sqlUpcoming = "SELECT * FROM events WHERE event_date > '$currentDate' ORDER BY event_date ASC";
$resultUpcoming = $conn->query($sqlUpcoming);

// Query for current events (events happening today)
$sqlCurrent = "SELECT * FROM events WHERE event_date = '$currentDate'";
$resultCurrent = $conn->query($sqlCurrent);

// Close connection
$conn->close();
?>

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
    <link rel="stylesheet" href="stylemain.css" />
    <title>Calendar with Events</title>
  </head>
  <body id="body">

    
    <nav class="navbar">
        
      <div class="navbar-menu" id="navbarMenu">
        <a href="#"><img src="images/login-logo.png" style="max-width: 150px;  "> </a>
        <button><a href="#">Home</a></button>
        <button><a href="#">About</a></button>
        <button><a href="#">Services</a></button>
        <button><a href="#">Contact</a></button>
        <div class="search">
          <i class='bx bx-search'></i>
          <input type="text" class="hide" placeholder="Quick Search ...">
        </div>
      </div>
      <button class="navbar-toggle" onclick="toggleMenu()">☰</button>
    </nav>
  
  
    <div class="typewriter">
      <h1>Hi, Welcome to the Eventorium!</h1>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('carousal-1.jpg')">

        </div>
          <div class="carousel-item" style="background-image: url('carousal-2.png')">

        </div>
        <div class="carousel-item " style="background-image: url('carousal-3.png')">

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <div class="recentevents" id="recent">
      <h3>Upcoming Events</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4" id="card-grid1" style="margin-left: 150px; margin-right: 50px; margin-bottom: 50px; margin-top: 50px;">
        <?php if ($resultUpcoming->num_rows > 0) {
          while ($row = $resultUpcoming->fetch_assoc()) { ?>
            <div class="col">
              <div class="card h-100" id="card" onclick="showBigCard('<?php echo $row['event_name']; ?>', '<?php echo $row['event_description']; ?>', 'DETAILS', 'back')">
                <img src="uploads/<?php echo $row['image']; ?>" style = 'height:300px;' class="card-img-top" alt="Event Image"/>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['event_name']; ?></h5>
                  <p class="card-text"><?php echo substr($row['event_description'], 0, 100); ?>...</p>
                </div>
              </div>
            </div>
        <?php }
        } else {
          echo "<p>No upcoming events.</p>";
        } ?>
      </div>

    <div class="currentevents" id="current">
      <h3>current events</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4" id="card-grid2" style="margin-left: 150px; margin-right: 50px; margin-bottom: 50px; margin-top: 50px;">
        <?php if ($resultCurrent->num_rows > 0) {
          while ($row = $resultCurrent->fetch_assoc()) { ?>
            <div class="col">
              <div class="card h-100" id="card" onclick="showBigCard('<?php echo $row['event_name']; ?>', '<?php echo $row['event_description']; ?>', 'DETAILS', 'back')">
                <img src="uploads/<?php echo $row['image']; ?>" style = 'height:300px;' class="card-img-top" alt="Event Image"/>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['event_name']; ?></h5>
                  <p class="card-text"><?php echo substr($row['event_description'], 0, 100); ?>...</p>
                </div>
              </div>
            </div>
        <?php }
        } else {
          echo "<p>No current events.</p>";
        } ?>
      </div>
    

    <aside>
        <div class="sidebar-top">
          <span class="shrink-btn">
            <i class='bx bx-chevron-left'></i>
          </span>
          <img src="images/loading-png.png"  class="logo" alt="">
          <h3 class="hide">EVENTORIUM</h3>
        </div>
        
       
    
        <div class="sidebar-links">
          <ul>
            <div class="active-tab"></div>
            <li class="tooltip-element" data-tooltip="0">
              <a href="#" class="active" data-active="0">
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
              <span>All events</span>
              
              <span>Manage Events</span>
            </div>
          </ul>
    
          
    
        <div class="sidebar-footer">
          <a href="#" class="account tooltip-element" data-tooltip="0">
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

      <div class="container2" id="bigcard" style="display: none;">
        <div class="wrapper">
          <div class="banner-image"> </div>
          <h1 id="bigcard-title">Toyota Supra</h1>
          <p id="bigcard-text">Lorem ipsum dolor sit amet, <br /> consectetur adipiscing elit.</p>
        </div>
        <div class="button-wrapper">
          <button class="btn outline" id="bigcard-btn1">DETAILS</button>
          <button class="btn fill" id="bigcard-btn2" onclick="closeBigCard()">BACK</button>
          
        </div>
      </div>
      
    
    
    <div class="container" id="calender">
      <div class="left">
        <div class="calendar">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">december 2015</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
          </div>
          <div class="days"></div>
          <div class="goto-today">
            <div class="goto">
              <input type="text" placeholder="mm/yyyy" class="date-input" />
              <button class="goto-btn">Go</button>
            </div>
            <button class="today-btn">Today</button>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="today-date">
          <div class="event-day">wed</div>
          <div class="event-date">12th december 2022</div>
        </div>
        <div class="events"></div>
        <div class="add-event-wrapper">
          <div class="add-event-header">
            <div class="title">Add Event</div>
            <i class="fas fa-times close"></i>
          </div>
          <div class="add-event-body">
            <div class="add-event-input">
              <input type="text" placeholder="Event Name" class="event-name" />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Event Time From"
                class="event-time-from"
              />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Event Time To"
                class="event-time-to"
              />
            </div>
          </div>
          <div class="add-event-footer">
            <button class="add-event-btn">Add Event</button>
          </div>
        </div>
      </div>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
    </div>


   
      
  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>&copy;2024 Eventorium | All Rights Reserved</p>

  </footer>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




   

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
