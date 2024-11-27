<?php

$server = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($server, $username, $password);

$query = "create database if not exists Eventorium";
if(!mysqli_query($connect, $query)){
    echo "Eventorium database creation failed.<br>";
}
else{
    echo "Eventorium database creation successful.<br>";
}

$query = "use Eventorium";
if(!mysqli_query($connect, $query)){
    echo "Eventorium database not in use. <br>";
}
else{
    echo "Eventorium database in use.<br>";
}

$query = "create table if not exists RegisteredUser(Username varchar(15), Password varchar(50), Role varchar(10))";
if(!mysqli_query($connect, $query)){
    echo "RegisteredUser table creation failed. <br>";
}
else{
    echo "RegisteredUser table creation success.<br>";
}

$query = "insert into RegisteredUser values('dhruv71', '23103039', 'admin')";
if(!mysqli_query($connect, $query)){
    echo "Value insertion in RegisteredUser table failed <br>";
}
else{
    echo "Value insertion in RegisteredUser table success.<br>";
}

$query = "insert into RegisteredUser values('abhinav69', '23103058', 'admin')";
if(!mysqli_query($connect, $query)){
    echo "Value insertion in RegisteredUser table failed <br>";
}
else{
    echo "Value insertion in RegisteredUser table success.<br>";
}

$query = "insert into RegisteredUser values('surya21', '23103083', 'student')";
if(!mysqli_query($connect, $query)){
    echo "Value insertion in RegisteredUser table failed <br>";
}
else{
    echo "Value insertion in RegisteredUser table success.<br>";
}

$query = "insert into RegisteredUser values('rishab07', '23103014', 'student')";
if(!mysqli_query($connect, $query)){
    echo "Value insertion in RegisteredUser table failed <br>";
}
else{
    echo "Value insertion in RegisteredUser table success.<br>";
}

$query = "create table if not exists events (event_id int primary key auto_increment, organizer_name varchar(40), event_name varchar(200), venue varchar(100), event_date date default curdate(), event_time time default curtime(), event_description varchar(1000), image varchar(255))";
if (mysqli_query($connect, $query)) {
    echo "events table creation success<br>";
}else {
    echo "events table creation failed<br>";
}

mysqli_close($connect);
echo "Connection closed.";
?>
