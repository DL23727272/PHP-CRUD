<?php
include_once "db_conn.php";

if(isset($_GET['pID']) && !empty($_GET['pID'])) {
    $residential_id = $_GET['pID'];
    
    $sql_profile = "SELECT * FROM residential_db WHERE BRGY_ID = $residential_id";
    $result_profile = mysqli_query($con, $sql_profile);

    if (mysqli_num_rows($result_profile) > 0) {
        $row = mysqli_fetch_assoc($result_profile);
    } else {
        echo "No resident found with the given ID.";
        exit();
    }
} else {
    echo "Invalid request. Please provide a resident ID.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 15px;
            border-bottom: 1px solid #dee2e6;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="logo.jpg" alt="Logo" height="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
		<a class="nav-link" href="dashboard.php" style="font-size: 23px;">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php" style="font-size: 23px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" style="font-size: 23px;">About</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="login.html" style="font-size: 23px;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
    <div class="container">
        <h2>Resident Details</h2>
        <table>
            <tr>
                <td><strong>Residential ID:</strong></td>
                <td><?php echo $row['residential_id']; ?></td>
                <td><strong>Street Name:</strong></td>
                <td><?php echo $row['streetname']; ?></td>
                <td><strong>Mobile Number:</strong></td>
                <td><?php echo $row['mobilenumber']; ?></td>
            </tr>
            <tr>
                <td><strong>First Name:</strong></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><strong>Religion:</strong></td>
                <td><?php echo $row['religion']; ?></td>
                <td><strong>Telephone:</strong></td>
                <td><?php echo $row['telephone']; ?></td>
            </tr>
            <tr>
                <td><strong>Middle Name:</strong></td>
                <td><?php echo $row['middlename']; ?></td>
                <td><strong>Nationality:</strong></td>
                <td><?php echo $row['nationality']; ?></td>
                <td><strong>Email:</strong></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
                <td><strong>Last Name:</strong></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><strong>Birthday:</strong></td>
                <td><?php echo $row['birthday']; ?></td>
                <td><strong>Birthplace:</strong></td>
                <td><?php echo $row['birthplace']; ?></td>
            </tr>
            <tr>
                <td><strong>Blood Type:</strong></td>
                <td><?php echo $row['bloodtype']; ?></td>
                <td><strong>Sex:</strong></td>
                <td><?php echo $row['sex']; ?></td>
                <td><strong>Age:</strong></td>
                <td><?php echo $row['age']; ?></td>
            </tr>
            <tr>
                <td><strong>Username:</strong></td>
                <td><?php echo $row['username']; ?></td>
                <td><strong>Password:</strong></td>
                <td><?php echo $row['password']; ?></td>
                <td><strong>Status:</strong></td>
                <td><?php echo $row['status']; ?></td>
            </tr>
        </table>
    </div>
                <div>
					<a href="index.php" class="btn btn-secondary">Back</a>
                </div>
    </div>
</body>
</html> 