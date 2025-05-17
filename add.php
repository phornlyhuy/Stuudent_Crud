<!DOCTYPE html>
<html lang="en">

<head>
      <style>
        body {
    font-family: 'Share Tech', sans-serif;
}
    </style>

<!-- ...existing code... -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
<!-- ...existing code... -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style/index.css">

    <?php include('function.php') ?>
    <title>Student Management System</title>
</head>

<body>
    <div class="container-fluid p-4 ">
        <div class="form d-flex flex-column align-items-center w-100">
            <div class="menu d-flex justify-content-between gap-md-5 bg-black p-3 w-100">
                <div>
                    <a class="btn btn-warning text-black" href="index.php">
                        <i class="fa-regular fa-rectangle-list me-2 "></i>
                        <span>View Student List</span>
                    </a>
                </div>
                <div class="d-flex gap-5">
                    <a href="index.php" class="text-decoration-none ">Students</a>
                    <a href="about.php" class="text-decoration-none">About Me</a>
                </div>
            </div>

            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            Are you sure you want to delete this student?
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <form method="POST" action="">
                                <input type="hidden" name="delete_id" id="delete_id_input">
                                <button type="submit" name="btn_delete_confirm" class="btn btn-success">Yes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page_active p-3 w-100">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input">
                        
                        
                        <label for="student_name">Full Name</label>
                        <input type="text" name="student_name" id="student_name" class="form-control mt-2" required><br>

                        <label for="student_gender">Gender</label>
                        <select name="student_gender" id="student_gender" class="form-select mt-2" required>
                       
                         <option value="Male"></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select><br>

                        <label for="student_course">Course</label>
                        <select name="student_course" id="student_course" class="form-select mt-2" required>
                            <option value="">Select course</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Business Administration">Business Administration</option>
                            <option value="Medicine">Medicine</option>
                        </select><br>

                        <label for="student_year">Year Level</label>
                        <select name="student_year" id="student_year" class="form-select mt-2" required>
                            <option value="">Select year level</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                            <option value="5th Year">5th Year</option>
                        </select><br>
                        

                        <label for="student_gpa">GPA (Grade Point Average)</label>
                        <input type="number" name="student_gpa" id="student_gpa" class="form-control mt-2"
                            min="0" max="4" step="0.01" required><br>
            
 <label for="student_photo">Student Photo</label><br>
                        <img src="image/download (1).png" id="student_photo_preview" alt="Student photo preview"
                            style="width: 200px; height: 150px; object-fit: contain;" class="img-thumbnail">
                        <input type="file" name="student_photo" id="student_photo" class="form-control mt-2" required><br>



                        <div class="mt-5 float-end">
                            <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" name="btn_save" class="btn btn-primary ms-2">Save Student</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="javascript/index.js"></script>
</body>

</html>