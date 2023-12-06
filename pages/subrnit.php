<?php
    $email = $_POST['emeil'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $wed = $_POST['wed'];
    $role = $_POST['role'];
    $sign1 = $_POST['sign1'];
    $sign2 = $_POST['sign2'];
    $sign3 = $_POST['sign3'];
    
$servername = 'localhost:8080';
$username = 'root';
$password = "";
$$dbname = "db_employee";

$conn = new mysqli($servername, $username, $passname, $dbname);
if ($conn->connect_error) {
    die("". $conn->connect_error);
}
$sql = "INSERT INTO employee (username, passwoed, city, wedserver, role)
        VALUES ($emeil,$password,$city,$wed,$role)";
$erult = $conn->query($sql);