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
    <title>Event manage</title>
  </head>

  <style>
    :root {
    --primary-clr: #e71721;
  }
  body {
    position: relative;
    min-height: 100vh;
    display: block;
    overflow-x: hidden;
   
    background-color: #181414;
  }

  @import 'https://fonts.googleapis.com/css?family=Dosis|Roboto:300,400';


  :root {
    --main-color: #18191e;
    --main-color-dark: #010101;
    --main-color-light: #cd2828;
    --text-color: #cfcde7;
    --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
  }

  * {
    
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
 
  ::-webkit-scrollbar {
    width: 5px;
  }
  ::-webkit-scrollbar-track {
    background: #f5f5f5;
    border-radius: 50px;
  }

  ::-webkit-scrollbar-thumb {
    background: var(--primary-clr);
    border-radius: 50px;
  }

  :root {
    --main-color: #18191e;
    --main-color-dark: #010101;
    --main-color-light: #cd2828;
    --text-color: #cfcde7;
  }
  



.recentevents{
  margin-top: 100px;
  margin-left: 170px;
  color: white;
}
.currentevents{
  margin-left: 170px;
  color: white;
}
  

  .navbar {
    top: 0;
    display: flex;
    z-index: 1;
    justify-content: space-between;
    align-items: center;
    
    flex-direction: row;
    position:fixed;
    margin-left: 250px;

    height: 80px;
    width: 100vh;
    background-color:rgba(70, 46, 118, 0);
    color: #fff;
    padding: 10px 20px;
  }
  


  .navbar-logo {
    font-size: 24px;
    font-weight: bold;
  }
  
  .navbar-menu {
    display: flex;
    align-items: center;
  }
  .navbar-menu button{
    background-color: #00000068;
    
    margin: 0 30px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 5px;
    border: 1px solid rgb(255, 250, 250);
  }
  .navbar-menu a {
    
    color: #fff;
    text-decoration: none;
    
  }
  .navbar-menu a:hover{
    color: #ce2626;
    font-size: 1.2rem;
  }

  .navbar-menu button:hover{
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid red;
  }
  .navbar-search {
    display: flex;
    align-items: center;
  }
  
  .navbar-search input[type="text"] {
    padding: 5px;
    border-radius: 3px;
    border: none;
  }
  
  .search button {
    padding: 5px 10px;
    margin-left: 5px;
    background-color: #555;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  
  .navbar-toggle {
    display: none;
    font-size: 24px;
    color: #fff;
    background: none;
    border: none;
    cursor: pointer;
  }

  a {
    text-decoration: none;
  }
  
  ul {
    list-style: none;
  }
  
#card{
  backdrop-filter: blur(20px);
  background-color: rgba(128, 28, 156, 0.4);
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 #e1d8dc33, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  
}
#card h5,p{
  color: white;
}


.form-container {
    display: none;
    
    margin: 50px auto;
    margin-top: 200px;
    padding: 20px;
    background: white;
    border-radius: 10px;
    width: 50%;
    
    animation: fadeIn 0.8s ease;
    background: linear-gradient(#da5fa9a1,#bd201dbb);
	box-shadow:0 12px 15px 0 rgba(164, 41, 41, 0.24),0 17px 50px 0 rgba(226, 23, 23, 0.19);
}
  
  
  
  
  form label {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    display: block;
    margin-top: 10px;
    font-size: 14px;
    color: #ffffff;
  }
  
  form input, form textarea {
    width: 100%;
    margin-top: 5px;
    padding: 10px;
    border: 1px solid #ddd;
    color: whitesmoke;
    background: rgba(48, 26, 26, 0.5);
    border-radius: 5px;
    outline: none;
  }
  
  form input:focus, form textarea:focus {
    border-color: #ef2c2c;
  }
  
  .form-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
  }
  
  .button1 {
    background: linear-gradient(#e925534f,#a5176f);
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 50px;
    margin-bottom: 20px;
    border: 1px dashed whitesmoke;
    transition: background-color 0.3s;
  }
  
  .button1:hover {
    background-color: #007aff;
  }
  
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }


  aside {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    background-color: var(--main-color);
    width: 16rem;
    padding: 1.8rem 0.85rem;
    color: #fff;
    display: flex;
    flex-direction: column;
    align-self: start;
    transition: width 0.5s ease-in-out;
  }
  
  aside::before {
    content: "";
    position: absolute;
    width: 2rem;
    height: 100%;
    top: 0;
    left: 100%;
  }
  
  main {
    flex: 1;
    padding: 2rem;
    color: #1f2027;
    display: flex;
    flex-direction: column;
  }
  
  main h1 {
    margin-bottom: 1rem;
  }
  
  main .copyright {
    margin-top: auto;
    font-size: 0.9rem;
  }
  
  main .copyright span {
    color: var(--main-color);
    font-weight: 500;
    cursor: pointer;
  }
  
  .sidebar-top {
    padding-top: 80px;
    position: relative;
    display: flex;
    align-items: center;
  }
  
  .sidebar-top .logo {
    width: 2.1rem;
    margin: 0 0.8rem ;
    padding-left: 30px;
  }
  
  .sidebar-top h3 {
    padding-left: 0.5rem;
    font-weight: 600;
    font-size: 1.15rem;
    margin-bottom: 50px;
  }
  
  .shrink-btn {
    position: absolute;
    top: 50%;
    height: 27px;
    padding: 0 0.3rem 0.5rem;
    background-color: var(--main-color);
    border-radius: 6px;
  }
  
  
  
  .search {
    min-height: 2.7rem;
    background-color: var(--main-color-light);
    margin: 2rem 0.5rem 1.7rem;
    display: grid;
    grid-template-columns: 2.7rem 1fr;
    align-items: center;
    text-align: center;
    border-radius: 50px;
    cursor: pointer;
  }
  
  .search input {
    height: 100%;
    border: none;
    background: none;
    outline: none;
    color: #fff;
    caret-color: #fff;
    font-family: inherit;
  }
  
  .search input::placeholder {
    color: var(--text-color);
  }
  
  .sidebar-links ul {
    position: relative;
  }
  
  .sidebar-links li {
    position: relative;
    padding: 2.5px 0;
  }
  
  .sidebar-links a {
    color: var(--text-color);
    font-weight: 400;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    height: 53px;
  }
  
  .icon {
    font-size: 1.3rem;
    text-align: center;
    min-width: 3.7rem;
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
  }
  
  .icon i {
    grid-column: 1 / 2;
    grid-row: 1 / 2;
    transition: 0.3s;
  }
  
  .icon i:last-child {
    opacity: 0;
    color: #fff;
  }
  
  .sidebar-links a.active,
  .sidebar-links a:hover {
    color: #fff;
  }
  
  .sidebar-links a .link {
    transition: opacity 0.3s 0.2s, color 0.3s;
  }
  
  .sidebar-links a.active i:first-child {
    opacity: 0;
  }
  
  .sidebar-links a.active i:last-child {
    opacity: 1;
  }
  
  .active-tab {
    width: 100%;
    height: 53px;
    background-color: black;
    border-radius: 10px;
    position: absolute;
    top: 2.5px;
    left: 0;
    transition: top 0.3s;
  }
  
  .sidebar-links h4 {
    position: relative;
    font-size: 0.8rem;
    text-transform: uppercase;
    font-weight: 600;
    padding: 0 0.8rem;
    color: var(--text-color);
    letter-spacing: 0.5px;
    height: 45px;
    line-height: 45px;
    transition: opacity 0.3s 0.2s, height 0.5s 0s;
  }
  
  .sidebar-footer {
    position: relative;
    margin-top: auto;
    margin-bottom: 0;
  }
  
  .account {
    
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    color: var(--text-color);
    height: 53px;
    width: 3.7rem;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s 0s, color 0.3s 0s;
  }
  
  .account:hover {
    color: #fff;
  }
  
  .admin-user {
    display: flex;
    align-items: center;
  }
  
  .admin-profile {
    white-space: nowrap;
    max-width: 100%;
    transition: opacity 0.3s 0.2s, max-width 0.7s 0s ease-in-out;
    display: flex;
    align-items: center;
    flex: 1;
    overflow: hidden;
  }
  
  .admin-user img {
    width: 2.9rem;
    border-radius: 50%;
    margin: 0 0.4rem;
  }
  
  .admin-info {
    padding-left: 0.3rem;
  }
  
  .admin-info h3 {
    font-weight: 500;
    font-size: 1rem;
    line-height: 1;
  }
  
  .admin-info h5 {
    font-weight: 400;
    font-size: 0.75rem;
    color: var(--text-color);
    margin-top: 0.3rem;
    line-height: 1;
  }
  
  .log-out {
    display: flex;
    height: 40px;
    min-width: 2.4rem;
    background-color: var(--main-color-dark);
    color: var(--text-color);
    align-items: center;
    justify-content: center;
    font-size: 1.15rem;
    border-radius: 10px;
    margin: 0 0.65rem;
    transition: color 0.3s;
  }
  
  .log-out:hover {
    color: #fff;
  }
  
  .tooltip {
    background-color: var(--main-color);
    position: absolute;
    right: -1.2rem;
    top: 0;
    transform: translateX(100%) translateY(-50%);
    padding: 0 0.8rem;
    font-size: 0.85rem;
    display: none;
    grid-template-rows: 1fr;
    grid-template-columns: 1fr;
    height: 30px;
    align-items: center;
    border-radius: 7px;
    box-shadow: 0 3px 10px -3px rgba(70, 46, 118, 0.3);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s;
    text-align: center;
    white-space: nowrap;
  }
  
  .tooltip span {
    grid-column: 1 / 2;
    grid-row: 1 / 2;
    opacity: 0;
    transition: 0.3s;
  }
  
  .tooltip span.show {
    opacity: 1;
  }
  
  .tooltip-element:hover ~ .tooltip {
    opacity: 1;
    pointer-events: all;
  }
  
  /* When the menu shrinks */
  
  .hide {
    transition: opacity 0.3s 0.2s;
  }
  
  body.shrink aside {
    width: 5.4rem;
  }
  
  body.shrink .hide {
    opacity: 0;
    pointer-events: none;
    transition-delay: 0s;
  }
  
  body.shrink .shrink-btn i {
    transform: rotate(-180deg);
  }
  
  body.shrink .sidebar-links h4 {
    height: 10px;
  }
  
  body.shrink .account {
    opacity: 1;
    pointer-events: all;
    transition: opacity 0.3s 0.3s, color 0.3s 0s;
  }
  
  body.shrink .admin-profile {
    max-width: 0;
    transition: opacity 0.3s 0s, max-width 0.7s 0s ease-in-out;
  }
  
  body.shrink .tooltip {
    display: grid;
  }




 .content {
    margin-left: 120px;
    width: 100%;
    padding: 0 4%;
    padding-top: 250px;
   
    display: flex;
    justify-content: center;
    align-items: center;
 }

 
 .card {
    width: 100%;
    max-width: 300px;
    min-width: 200px;
    height: 250px;
    background-color: #292929;
    margin: 10px;
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.24);
    border: 2px solid rgba(7, 7, 7, 0.12);
    font-size: 16px;   
    transition: all 0.3s ease;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    cursor: pointer;
    transition: all 0.3s ease;
 }
 
 .icon1 {
    margin: 0 auto;
    width: 100%;
    height: 80px;
    max-width:80px;
    background: linear-gradient(90deg, #FF7E7E 0%, #FF4848 40%, rgba(0, 0, 0, 0.28) 60%);
    border-radius: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    transition: all 0.8s ease;
    background-position: 0px;
    background-size: 200px;
 }
 
 .material-icons.md-18 { font-size: 18px; }
 .material-icons.md-24 { font-size: 24px; }
 .material-icons.md-36 { font-size: 36px; }
 .material-icons.md-48 { font-size: 48px; }
 
 .card .title {
    width: 100%;
    margin: 0;
    text-align: center;
    margin-top: 30px;
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 4px;
 }
 
 .card .text {
    width: 80%;
    margin: 0 auto;
    font-size: 13px;
    text-align: center;
    margin-top: 20px;
    color: white;
    font-weight: 200;
    letter-spacing: 2px;
    opacity: 0;
    max-height:0;
    transition: all 0.3s ease;
 }
 
 .card:hover {
    height: 270px;
 }
 
 .card:hover .info {
    height: 90%;
 }
 
 .card:hover .text {
    transition: all 0.3s ease;
    opacity: 1;
    max-height:40px;
 }
 
 .card:hover .icon1 {
    background-position: -120px;
    transition: all 0.3s ease;
 }
 
 .card:hover .icon1 i {
    background: linear-gradient(90deg, #FF7E7E, #FF4848);
    -webkit-background-clip: text;
     -webkit-text-fill-color: transparent;
    opacity: 1;
    transition: all 0.3s ease;
 }

 .vibrant {
    display: none;
    background: linear-gradient(135deg, #ff7e91, #f0183c, #feae96);
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    animation: fadeIn 0.8s ease-in-out;
  }
  
  .vibrant h2 {
    color: #fff;
    text-align: center;
    margin-bottom: 20px;
    font-family: 'Poppins', sans-serif;
    animation: slideIn 1s ease-in-out;
  }
  
  .vibrant label {
    display: block;
    margin: 15px 0;
    position: relative;
    animation: bounceIn 0.5s ease-in-out;
  }
  
  .vibrant input,
  .vibrant textarea {
    width: 100%;
    padding: 10px;
    border: 2px solid #fff;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-size: 16px;
    transition: all 0.3s ease;
  }
  
  .vibrant input:focus,
  .vibrant textarea:focus {
    outline: none;
    background: rgba(255, 255, 255, 0.4);
  }
  
  .vibrant .form-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
  }
  
  .vibrant button {
    margin-top: 40px;
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  
  .vibrant button[type="submit"] {
    background-color: #df2c53;
    color: #fff;
    animation: glow 1s infinite alternate;
  }
  
  .vibrant button[type="button"] {
    background-color: #ff4500;
    color: #fff;
  }
  
  .vibrant button:hover {
    transform: scale(1.1);
  }
  
  /* Animations */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: scale(0.9);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }
  
  @keyframes slideIn {
    from {
      transform: translateY(-50px);
    }
    to {
      transform: translateY(0);
    }
  }
  
  @keyframes bounceIn {
    0%, 100% {
      transform: translateY(-10px);
    }
    50% {
      transform: translateY(0);
    }
  }
  
  @keyframes glow {
    from {
      box-shadow: 0 0 10px rgba(0, 255, 0, 0.7);
    }
    to {
      box-shadow: 0 0 20px rgba(0, 255, 0, 1);
    }
  }

#userevents{
    display: none;
}
#delete-back-button{
    background: var(--gradient)  ;
    margin-left: 50px;
    margin-bottom: 100px;
    margin-top: 50px;
}
.card1 {
    background: #222;
    border: 1px solid #dd2476;
    color: rgba(250, 250, 250, 0.8);
    
    margin-top: 100px;
  }
  
  .btn {
    border: 5px solid;
    border-image-slice: 1;
    background: var(--gradient)  ;
    -webkit-background-clip: text  ;
    -webkit-text-fill-color: transparent  ;
    border-image-source:  var(--gradient)  ; 
    text-decoration: none;
    transition: all .4s ease;
  }
  
  .btn:hover, .btn:focus {
        background: var(--gradient)  ;
    -webkit-background-clip: none  ;
    -webkit-text-fill-color: #fff  ;
    border: 5px solid #fff  ; 
    box-shadow: #222 1px 0 10px;
    text-decoration: underline;
  }
  

  </style>

  <body>
    <nav class="navbar">
      <div class="navbar-menu" id="navbarMenu">
        <a href="#"><img src="images/login-logo.png" style="max-width: 150px;"> </a>
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
  
    <div id="cards-container" class="content">
      <!-- Profile Card -->
      <div class="card" id="profile-card">
        <div class="icon1"><i class="material-icons md-36">face</i></div>
        <p class="title">create event</p>
        <p class="text">Click to add an event.</p>
      </div>
      <!-- Favourites Card -->
      <div class="card" onclick="showcards()">
        <div class="icon1"><i class="material-icons md-36">favorite_border</i></div>
        <p class="title">Delete event</p>
        <p class="text">delete all your unwanted events.</p>
      </div>
      <!-- Contacts Card -->
      <div class="card">
        <div class="icon1"><i class="material-icons md-36">alternate_email</i></div>
        <p class="title">Edit event</p>
        <p class="text">Add or change your event details.</p>
      </div>
    </div>

    <div class="form-container" id="form-container">
        <h2 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin-left: 250px;
        color: #ffffff;">Event Details</h2>
        <form method = 'post' enctype="multipart/form-data">
          <label for="organizer-name">Organizer Name</label>
          <input type="text" id="organizer-name" name = 'oname' placeholder="Enter organizer's name" required>
          <label for="event-name">
            <span class="label-text">Event Name</span>
            <input id="event-name" type="text" name = 'ename' placeholder="Event Name" required />
          </label>
          <label for="venue">
            <span class="label-text">venue</span>
            <input id="venue-name" type="text" name = 'venue' placeholder="venue" required />
          </label>
          <label for="event-date">Event Date</label>
          <input type="date" id="event-date" name = 'edate' required>
          
          <label for="event-time">Event Time</label>
          <input type="time" id="event-time" name = 'etime' required>
          
          <label for="description">Event Description</label>
          <textarea id="description" name = 'edesc' placeholder="Enter a brief description" rows="4" required></textarea>
          
          <label for="event-image">Event Image</label>
          <input type="file" id="event-image" name = 'eimage' accept="image/*">
    
          <div class="form-buttons">
            <button class= "button1" name = 'sbt-btn' type="submit">Submit</button>
            <button class= "button1" type="button" id="back-button">Back</button>
          </div>
        </form>
      </div>

    <?php
// Initialize status message variable
$statusMsg = '';

if (isset($_POST['sbt-btn'])) {
    // Database connection
    $con = mysqli_connect('localhost', 'root', '', 'eventorium');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $o_name = mysqli_real_escape_string($con, $_POST['oname']);
    $e_name = mysqli_real_escape_string($con, $_POST['ename']);
    $e_venue = mysqli_real_escape_string($con, $_POST['venue']);
    $e_date = mysqli_real_escape_string($con, $_POST['edate']);
    $e_time = mysqli_real_escape_string($con, $_POST['etime']);
    $e_desc = mysqli_real_escape_string($con, $_POST['edesc']);

    // Upload image
    $target_dir = 'uploads/';
    $statusMsg = ''; // Reset status message
    
    if (!empty($_FILES["eimage"]["name"])) {
        $fileName = basename($_FILES["eimage"]["name"]);
        $targetFilePath = $target_dir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array(strtolower($fileType), $allowTypes)) {
            if (move_uploaded_file($_FILES["eimage"]["tmp_name"], $targetFilePath)) {
                // Insert event data into database
                $insert = mysqli_query($con, "INSERT INTO events (organizer_name, event_name, venue, event_date, event_time, event_description, image) VALUES ('$o_name', '$e_name', '$e_venue', '$e_date', '$e_time', '$e_desc', '$fileName')");
                if ($insert) {
                    $statusMsg = '<div class="status-message success"><strong>Event Added Successfully!</strong></div>';
                } else {
                    $statusMsg = '<div class="status-message error"><strong>Failed to add event. Please try again.</strong></div>';
                }
            } else {
                $statusMsg = '<div class="status-message error"><strong>Image upload failed. Please try again.</strong></div>';
            }
        } else {
            $statusMsg = '<div class="status-message error"><strong>Invalid image file type. Only JPG, PNG, JPEG, GIF allowed.</strong></div>';
        }
    } else {
        $statusMsg = '<div class="status-message error"><strong>Please upload an image for the event.</strong></div>';
    }

    mysqli_close($con);
}
?>

<!-- Display status message (success/error) below the form -->
<div class="status-container">
    <?php echo $statusMsg; ?>
</div>
  
    
    <script src="script.js"></script>
  

    <div id="contacts-form-container" class="form-container vibrant">
        <h2>Edit event details</h2>
        <form id="contacts-form">
         
          <label for="event-name">
            <span class="label-text">Event Name</span>
            <input id="event-name" type="text" placeholder="Event Name" required />
          </label>
          <label for="venue">
            <span class="label-text">venue</span>
            <input id="venue-name" type="text" placeholder="venue" required />
          </label>
          <label for="contact-email">
            <span class="label-text">Event date</span>
            <input id="contact-email" type="date" placeholder="example@email.com" required />
          </label>
          <label for="contact-phone">
            <span class="label-text">Event time</span>
            <input id="contact-phone" type="time" placeholder="+123 456 7890" required />
          </label>
          <label for="description">
            <span class="label-text">Description</span>
            <textarea id="description" placeholder="Details about the contact..." required></textarea>
          </label>
          <label for="related-files">
            <span class="label-text">Upload Related Files</span>
            <input id="related-files" type="file" accept="image/*, .pdf, .docx" multiple />
          </label>
          <div class="form-buttons">
            <button type="submit">Save Changes</button>
            <button  type="button" id="contacts-back-button">Back</button>
          </div>
        </form>
      </div>

    <aside>
        <div class="sidebar-top">
          
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
                <a href="#" data-active="2">
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
            <a href="#" class="log-out">
              <i class='bx bx-log-out'></i>
            </a>
          </div>
          <div class="tooltip">
            <span class="show">John Doe</span>
            <span>Logout</span>
          </div>
        </div>
      </aside>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <div class="container mx-auto mt-4" id =  "userevents" >
        
        <div class="row" style="margin-left: 150px; margin-top: 50px; ">
            
          <div class="col-md-4" >
            
            <div class="card1" style="width: 18rem;">
        <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Event Name</h5>
              <h6 class="card-subtitle mb-2 text-muted">  Event date</h6>
          <p class="card-text">Some quick example text to build on the  Event Name and make up the bulk of the card's content.</p>
             <a href="#" class="btn mr-2" id="editbtn" onclick="showform()"><i class="fas fa-link"></i>  Edit</a>
             <a href="#" class="btn  mr-2" id="dbtn" onclick="deleteCard()"><i class="fas fa-link"></i>  Delete</a>
         
        </div>
        </div>
          </div>    
             <div class="col-md-4">
      <div class="card1" style="width: 18rem;">
        <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Event Name</h5>
              <h6 class="card-subtitle mb-2 text-muted"  >  Event date</h6>
          <p class="card-text">Some quick example text to build on the  Event Name and make up the bulk of the card's content.</p>
          <a href="#" class="btn  mr-2" id="editbtn" onclick="showform()"><i class="fas fa-link"></i>  Edit</a>
          <a href="#" class="btn  mr-2" id="dbtn" onclick="deleteCard()"><i class="fas fa-link"></i>  Delete</a>
          
        </div>
        </div>
          </div>    
                <div class="col-md-4">
      <div class="card1" style="width: 18rem;">
        <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Event Name</h5>
              <h6 class="card-subtitle mb-2 text-muted">  Event date</h6>
          <p class="card-text">Some quick example text to build on the  Event Name and make up the bulk of the card's content.</p>
          <a href="#" class="btn mr-2" id="editbtn" onclick="showform()"><i class="fas fa-link"></i>  Edit</a>
          <a href="#" class="btn  mr-2" id="dbtn" onclick="deleteCard()"><i class="fas fa-link"></i>  Delete</a>
          
        </div>
        </div>
        </div>
          
          <div class="col-md-4">
            <div class="card1" style="width: 18rem;">
        <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Event Name</h5>
              <h6 class="card-subtitle mb-2 text-muted">  Event date</h6>
          <p class="card-text">Some quick example text to build on the  Event Name and make up the bulk of the card's content.</p>
             <a href="#" class="btn mr-2" id="editbtn" onclick="showform()"><i class="fas fa-link"></i>  Edit</a>
             <a href="#" class="btn  mr-2" id="dbtn" onclick="deleteCard()"><i class="fas fa-link"></i>  Delete </a>
          
        </div>
        </div>
          </div>    
             <div class="col-md-4">
      <div class="card1" style="width: 18rem;">
        <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Event Name</h5>
              <h6 class="card-subtitle mb-2 text-muted">  Event date</h6>
          <p class="card-text">Some quick example text to build on the  Event Name and make up the bulk of the card's content.</p>
          <a href="#" class="btn mr-2" id="editbtn" onclick="showform()"><i class="fas fa-link"></i>  Edit</a>
          <a href="#" class="btn  mr-2" id="dbtn" onclick="deleteCard()"><i class="fas fa-link"></i>  Delete </a>
          
        </div>
        </div>
          </div>    
                <div class="col-md-4">
      <div class="card1" style="width: 18rem;">
        <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Event Name</h5>
              <h6 class="card-subtitle mb-2 text-muted">  Event date</h6>
          <p class="card-text">Some quick example text to build on the  Event Name and make up the bulk of the card's content.</p>
          <a href="#" class="btn mr-2" id="editbtn" onclick="showform()"><i class="fas fa-link"></i>  Edit</a>
          <a href="#" class="btn  mr-2" id="dbtn" onclick="deleteCard()"><i class="fas fa-link"></i>  Delete </a>
          
        </div>
        </div>
        </div>
          
        
        <button class = "button1" type="button" id="delete-back-button">Back</button>
      </div>
        </div>


      <script>
        document.addEventListener("DOMContentLoaded", () => {
  const profileCard = document.getElementById("profile-card");
  const cardsContainer = document.getElementById("cards-container");
  const formContainer = document.getElementById("form-container");
  const backButton = document.getElementById("back-button");

  profileCard.addEventListener("click", () => {
    cardsContainer.style.display = "none";
    formContainer.style.display = "block";
  });

  backButton.addEventListener("click", () => {
    formContainer.style.display = "none";
    cardsContainer.style.display = "flex";
  });
});
       const contactsCard = document.querySelector('.card:nth-child(3)'); // Contacts card
const contactsFormContainer = document.getElementById('contacts-form-container');
const Edit = document.getElementById('userevents');
const editbtn = document.getElementById("editbtn");
const cardsContainer = document.querySelector('.content');
const contactsBackButton = document.getElementById('contacts-back-button');

// Show form and hide cards when Contacts card is clicked
contactsCard.addEventListener('click', () => {
  cardsContainer.style.display = 'none';
  Edit.style.display = 'block';
  
});

function showform() {
  Edit.style.display = 'none';
  contactsFormContainer.style.display = 'block';
};

// Show cards and hide form when Back button is clicked
contactsBackButton.addEventListener('click', () => {
  contactsFormContainer.style.display = 'none';
  cardsContainer.style.display = 'flex';
  
});

const deleteCard = document.querySelector('.card:nth-child(2)'); // delete events card
const contactsFormContainer1 = document.getElementById('userevents');
const cardsContainer1 = document.querySelector('.content');
const contactsBackButton1 = document.getElementById('delete-back-button');

// Show form and hide cards when Contacts card is clicked
function showcards(){
    
  cardsContainer1.style.display = 'none';
  contactsFormContainer1.style.display = 'block';
};

// Show cards and hide form when Back button is clicked
contactsBackButton1.addEventListener('click', () => {
  contactsFormContainer1.style.display = 'none';
  cardsContainer1.style.display = 'flex';
  
});


      </script>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
