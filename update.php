<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style/index.css">
    <title>Update Student</title>
    <?php include('function.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM `tb_students` WHERE `student_id`='$id'";
    $rs = $con->query($sql);
    $student = mysqli_fetch_assoc($rs);
    ?>
</head>
<body>
    <div class="container-fluid p-4">
        <div class="form d-flex flex-column align-items-center w-100">
            <div class="menu d-flex justify-content-between gap-md-5 bg-success p-3 w-100">
                <div>
                   <a class="btn btn-warning" href="index.php">
                        <i class="fa-regular fa-rectangle-list me-2"></i>
                        <span>View Student List</span>
                   </a>
                </div>
                <div class="d-flex gap-5">
                    <a href="index.php" class="text-decoration-none">Students</a>
                    <a href="about.php" class="text-decoration-none">About Me</a>
                </div>
            </div>
            <div class="page_active  w-100">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $student['student_id']; ?>">
                    <input type="hidden" name="old_image" value="<?php echo $student['photo']; ?>">
                    
                    <div class="input pt-3">
                        <label for="student_photo">Student Photo</label><br>
                        <img src="image/<?php echo $student['photo']; ?>" id="student_photo_preview" 
                             alt="Student Photo" style="width: 200px;height: 150px;object-fit: cover;" class="img-thumbnail">
                        <input type="file" name="student_photo" id="student_photo" class="form-control mt-2"><br>
                        
                        <label for="student_name">Full Name</label>
                        <input type="text" name="student_name" id="student_name" class="form-control mt-2" 
                               value="<?php echo htmlspecialchars($student['full_name']); ?>" required><br>
                        
                        <label for="student_gender">Gender</label>
                        <select name="student_gender" id="student_gender" class="form-select mt-2" required>
                            <option value="">Select gender</option>
                            <option value="Male" <?php echo ($student['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                            <option value="Female" <?php echo ($student['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                            <option value="Other" <?php echo ($student['gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                        </select><br>
                        
                        <label for="student_course">Course</label>
                        <select name="student_course" id="student_course" class="form-select mt-2" required>
                            <option value="">Select course</option>
                            <option value="Computer Science" <?php echo ($student['course'] == 'Computer Science') ? 'selected' : ''; ?>>Computer Science</option>
                            <option value="Information Technology" <?php echo ($student['course'] == 'Information Technology') ? 'selected' : ''; ?>>Information Technology</option>
                            <option value="Engineering" <?php echo ($student['course'] == 'Engineering') ? 'selected' : ''; ?>>Engineering</option>
                            <option value="Business Administration" <?php echo ($student['course'] == 'Business Administration') ? 'selected' : ''; ?>>Business Administration</option>
                            <option value="Medicine" <?php echo ($student['course'] == 'Medicine') ? 'selected' : ''; ?>>Medicine</option>
                        </select><br>
                        
                        <label for="student_year">Year Level</label>
                        <select name="student_year" id="student_year" class="form-select mt-2" required>
                            <option value="">Select year level</option>
                            <option value="1st Year" <?php echo ($student['year_level'] == '1st Year') ? 'selected' : ''; ?>>1st Year</option>
                            <option value="2nd Year" <?php echo ($student['year_level'] == '2nd Year') ? 'selected' : ''; ?>>2nd Year</option>
                            <option value="3rd Year" <?php echo ($student['year_level'] == '3rd Year') ? 'selected' : ''; ?>>3rd Year</option>
                            <option value="4th Year" <?php echo ($student['year_level'] == '4th Year') ? 'selected' : ''; ?>>4th Year</option>
                            <option value="5th Year" <?php echo ($student['year_level'] == '5th Year') ? 'selected' : ''; ?>>5th Year</option>
                        </select><br>
                        
                        <label for="student_gpa">GPA (Grade Point Average)</label>
                        <input type="number" name="student_gpa" id="student_gpa" class="form-control mt-2" 
                               min="0" max="4" step="0.01" value="<?php echo htmlspecialchars($student['gpa']); ?>" required><br>
                            
                        <div class="mt-5 float-end">
                            <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" name="btn_update" class="btn btn-warning ms-2">Update Student</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="javascript/index.js"></script>
</html>