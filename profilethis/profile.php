
<?php


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Back Button -->
    <div class="container mt-3">
        <a href="afterLogin.php" class="btn btn-primary" style=" margin-bottom: -30px; margin-left: -70px; margin-top: 30px;">&larr; Back to Dashboard</a>
    </div>

    <div class="container mt-5">
        <h2>User Profile</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>First Name:</strong> </li>
            <li class="list-group-item"><strong>Middle Name:</strong> </li>
            <li class="list-group-item"><strong>Last Name:</strong> </li>
            <li class="list-group-item"><strong>Age:</strong> </li>
            <li class="list-group-item"><strong>Email:</strong> </li>
            <li class="list-group-item"><strong>Home Address:</strong></li>
        </ul><br>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</button>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit profile form -->
                    <form id="editProfileForm" method="POST" action="">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo htmlspecialchars($firstname); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="middlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middlename" id="middlename" value="<?php echo htmlspecialchars($middlename); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo htmlspecialchars($lastname); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" id="age" value="<?php echo htmlspecialchars($age); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="homeaddress" class="form-label">Home Address</label>
                            <input type="text" class="form-control" name="homeaddress" id="homeaddress" value="<?php echo htmlspecialchars($homeaddress); ?>" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
