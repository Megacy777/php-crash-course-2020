<?php
// Database configuration
$host = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$database = "your_db_name";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the content type and allow cross-origin requests (CORS)
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

// Define API endpoints
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['employee_id'])) {
        $employeeId = $_GET['employee_id'];
        getEmployee($employeeId);
    } else {
        getAllEmployees();
    }
}

// Get an employee by ID
function getEmployee($id) {
    global $conn;

    $sql = "SELECT * FROM employees WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $employee = $result->fetch_assoc();
        echo json_encode($employee);
    } else {
        echo json_encode(array("message" => "Employee not found"));
    }

    $stmt->close();
}

// Get all employees
function getAllEmployees() {
    global $conn;

    $sql = "SELECT * FROM employees";
    $result = $conn->query($sql);

    $employees = array();
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }

    echo json_encode($employees);
}

$conn->close();

// To get all employees: http://your-server/api.php
// To get a specific employee by ID: http://your-server/api.php?employee_id=1

?>
