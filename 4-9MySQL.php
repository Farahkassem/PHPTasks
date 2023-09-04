<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>
    
    <form method="post" action="process.php">
        <label for="bookName">Book Name:</label>
        <input type="text" id="bookName" name="bookName" required><br><br>
        
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br><br>
        
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br><br>
        
        <input type="submit" value="Add Book">
    </form>
</body>
</html>




<?php
//CREATE TABLE books (
    //id INT AUTO_INCREMENT PRIMARY KEY,
   // bookName VARCHAR(255) NOT NULL,
   // price DECIMAL(10, 2) NOT NULL,
    //author VARCHAR(255) NOT NULL,
//);
?>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $bookName = $_POST["bookName"];
    $price = $_POST["price"];
    $author = $_POST["author"];
    
    // Establish a database connection (replace these values with your own)
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Insert data into the 'books' table
    $sql = "INSERT INTO books (bookName, price, author) VALUES ('$bookName', '$price', '$author')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Book added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>
