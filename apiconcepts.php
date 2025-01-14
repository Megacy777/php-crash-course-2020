
<!-- Kulikuwa na database halafu utengeneze API -->

<?php
$serverName = "localhost"; // Replace with your SQL Server name or IP address
$connectionOptions = array(
    "Database" => "employee", // Replace with your database name
    "Uid" => "MAJOR\User", // Replace with your SQL Server username
    "PWD" => "" // Replace with your SQL Server password
);

// Establish the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Connection failed: " . sqlsrv_errors());
} else {
    echo "Connected to SQL Server.";
}

$sql = "SELECT * FROM employee"; // Replace with your table name
$query = sqlsrv_query($conn, $sql);

if ($query === false) {
    die("Query execution failed: " . print_r(sqlsrv_errors(), true));
}

while ($row = sqlsrv_fetch($query, SQLSRV_FETCH_ASSOC)) {
    echo "Employee ID: " . $row['emp_id'] . "<br>";
    echo "Employee Name: " . $row['first_name'] . "<br>";
    // Add more fields as needed
}

sqlsrv_close($conn);

?>


