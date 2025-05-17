<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_student";
$con = new mysqli($servername, $username, $password, $database);
date_default_timezone_set('Asia/Phnom_Penh');

function moveImage($image) {
    $filename = date('y_m_d_h_i_s') . '_' . $_FILES[$image]['name'];
    $path = './image/' . $filename;
    move_uploaded_file($_FILES[$image]['tmp_name'], $path);
    return $filename;
}

function add_student() {
    global $con;
    if (isset($_POST['btn_save'])) {
        $student_img = moveImage('student_photo');
        $student_name = $_POST['student_name'];
        $student_gender = $_POST['student_gender'];
        $student_course = $_POST['student_course'];
        $student_year = $_POST['student_year'];
        $student_gpa = $_POST['student_gpa'];
        if (!empty($student_name) && !empty($student_gender) && !empty($student_course) && !empty($student_year) && !empty($student_gpa)) {
            $sql_insert = "INSERT INTO `tb_students`(`photo`, `full_name`, `gender`, `course`, `year_level`, `gpa`)
                          VALUES ('$student_img','$student_name','$student_gender','$student_course','$student_year','$student_gpa')";
            $result = $con->query($sql_insert);
            if ($result) {
                echo '
                <script>
                    $(document).ready(function() {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Student added successfully!",
                            showConfirmButton: false,
                            timer: 1500
                        })
                    });
                </script>
                ';
            }
        }
    }
}
add_student();

function show_students() {
    global $con;
    $sql_select = "SELECT * FROM `tb_students` ORDER BY `student_id` DESC";
    $result = $con->query($sql_select);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <tr>
            <td>' . $row['student_id'] . '</td>
            <td>
                <img style="width: 80px; height: 80px; object-fit: cover;" src="./image/' . $row['photo'] . '" alt="' . htmlspecialchars($row['full_name']) . '">
            </td>
            <td>' . htmlspecialchars($row['full_name']) . '</td>
            <td>' . $row['gender'] . '</td>
            <td>' . $row['course'] . '</td>
            <td>' . $row['year_level'] . '</td>
            <td>' . number_format($row['gpa'], 2) . '</td>
            <td>' . $row['date_enrolled'] . '</td>
            <td class="text-center">
                <div class="d-flex justify-content-center">
                    <a href="update.php?id=' . $row['student_id'] . '" class="btn btn-sm btn-warning me-2">
                        <span>Update</span>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteId(' . $row['student_id'] . ')">
                        <span>Delete</span>
                    </button>
                </div>
            </td>
        </tr>
        ';
    }
}

function update_student() {
    global $con;
    if (isset($_POST['btn_update'])) {
        $student_id = $_POST['id'];
        $student_img = $_FILES['student_photo']['name'];
        $student_name = $_POST['student_name'];
        $student_gender = $_POST['student_gender'];
        $student_course = $_POST['student_course'];
        $student_year = $_POST['student_year'];
        $student_gpa = $_POST['student_gpa'];
        
        if (empty($student_img)) {
            $student_img = $_POST['old_image'];
        } else {
            $student_img = moveImage('student_photo');
        }
        
        if (!empty($student_name) && !empty($student_gender) && !empty($student_course) && !empty($student_year) && !empty($student_gpa)) {
            $sql = "UPDATE `tb_students` 
                    SET `photo`='$student_img',
                        `full_name`='$student_name',
                        `gender`='$student_gender',
                        `course`='$student_course',
                        `year_level`='$student_year',
                        `gpa`='$student_gpa'
                    WHERE `student_id`='$student_id'";
            $rs = $con->query($sql);
            if ($rs) {
                echo '<script>
                    $(document).ready(function() {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Student updated successfully!",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    })
                </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        title: "Error!",
                        text: "Error updating student record",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                </script>';
            }
        }
    }
}
update_student();

function delete_student() {
    global $con;
    if (isset($_POST['btn_delete_confirm'])) {
        $delete_id = $_POST['delete_id'];
        $sql_delete = "DELETE FROM tb_students WHERE student_id = $delete_id";
        $rs_del = $con->query($sql_delete);
        if ($rs_del) {
            echo '<script>
                Swal.fire({
                    title: "Success!",
                    text: "Student record deleted successfully",
                    icon: "success",
                    confirmButtonText: "OK"
                });
            </script>';
        } else {
            echo '<script>
                Swal.fire({
                    title: "Error!",
                    text: "Failed to delete student record",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            </script>';
        }
    }
}
delete_student();