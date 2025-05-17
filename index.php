

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
    <link href="https://fonts.googleapis.com/css?family=Share+Tech&display=swap" rel="stylesheet">
    <?php include('function.php') ?>
    <title>Student Management System</title>
</head>

<body>
    <div class="container-fluid p-4">
        <div class="form d-flex flex-column align-items-center w-100">
            <div class="menu d-flex justify-content-between gap-md-5 bg-black p-3 w-100">
                <div>
                   <a class="btn btn-success" href="add.php">
                        <i class="fa-regular fa-rectangle-list me-2"></i>
                        <span>Add New Student</span>
                   </a>
                </div>
                <div class="d-flex gap-5">
                    <a href="index.php" class="text-decoration-none">Students</a>
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
            
            <div class="page_active p-0 w-100">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle">
                        <thead class="table-success">
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Student Name</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Year Level</th>
                                <th>GPA</th>
                                <th>Date Enrolled</th>
                                <th class="text-center actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php show_students()?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function setDeleteId(id) {
        // Store the ID in a hidden input for the form submission
        $('#delete_id_input').val(id);
    }
</script>

</html>