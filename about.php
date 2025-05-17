

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <link href="style/index.css" rel="stylesheet">
<!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
<!-- font -->

    <title>About Me - employee_salary CRUD</title>
</head>
<style>
    :root {
    --primary: #4361ee;
    --primary-dark: #3a56d4;
    --secondary: #3f37c9;
    --accent: #4895ef;
    --light: #f8f9fa;
    --dark: #212529;
    --gray: #6c757d;
    --success: #4cc9f0;
    --danger: #f72585;
    --warning: #f8961e;
    --info: #4895ef;
    --border-radius: 12px;
    --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

body {
      font-family: "Share Tech";
    color: var(--success);
    line-height: 1.7;
    overflow-x: hidden;
}

/* Main Content Area */
.page_active {
    flex: 1;
    overflow-y: auto;
    height: 100vh;
    padding: 2rem;
    background-color: var(--light);
}

/* About Container */
.about-container {
    max-width: 1000px;
    margin: 0 auto;
    animation: fadeIn 0.6s ease-out;
}

/* Profile Section */
.profile-section {
    position: relative;
    overflow: hidden;
    border-radius: var(--border-radius);
    background: linear-gradient(135deg, white, #f8f9ff);
    box-shadow: var(--box-shadow);
    margin-bottom: 3rem;
    transition: var(--transition);
}

.profile-section:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.profile-img-container {
    position: relative;
    width: 220px;
    height: 220px;
    margin: 0 auto;
    margin-top: -30px;
}

.profile-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: var(--transition);
}

.profile-img:hover {
    transform: scale(1.05);
}

.profile-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 1.5rem;
    position: relative;
    text-align: center;
}

.profile-title:after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(to right, var(--primary), var(--accent));
    border-radius: 2px;
}

.profile-subtitle {
    font-size: 1.25rem;
    color: var(--gray);
    text-align: center;
    margin-bottom: 2rem;
    font-weight: 400;
}

/* Personal Info */
.personal-info {
    padding: 2rem;
}

.info-item {
    display: flex;
    margin-bottom: 1rem;
    align-items: center;
}

.info-icon {
    width: 40px;
    height: 40px;
    background-color: rgba(67, 97, 238, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    color: var(--primary);
    font-size: 1rem;
}

.info-label {
    font-weight: 600;
    min-width: 100px;
    color: var(--dark);
}

.info-value {
    color: var(--gray);
}

/* Skills Section */
.skills-section {
    background: white;
    border-radius: var(--border-radius);
    padding: 2.5rem;
    box-shadow: var(--box-shadow);
    margin-bottom: 3rem;
}

.skill-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    margin: 0.5rem;
    border-radius: 50px;
    background-color: rgba(67, 97, 238, 0.1);
    color: var(--primary);
    font-weight: 500;
    transition: var(--transition);
}

.skill-badge:hover {
    background-color: var(--primary);
    color: white;
    transform: translateY(-2px);
}

.skill-badge i {
    margin-right: 8px;
}

/* Feature Boxes */
.feature-box {
    padding: 2rem;
    border-radius: var(--border-radius);
    background: white;
    height: 100%;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: var(--transition);
    border: 1px solid rgba(0, 0, 0, 0.03);
    text-align: center;
}

.feature-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    border-color: rgba(67, 97, 238, 0.2);
}

.feature-icon {
    font-size: 2.5rem;
    color: var(--primary);
    margin-bottom: 1.5rem;
    display: inline-flex;
    width: 80px;
    height: 80px;
    background-color: rgba(67, 97, 238, 0.1);
    border-radius: 50%;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
}

.feature-box:hover .feature-icon {
    background-color: var(--primary);
    color: white;
    transform: scale(1.1);
}

.feature-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: var(--dark);
}

.feature-text {
    color: var(--gray);
    font-size: 0.95rem;
}

/* Social Links */
.social-links {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
}

.social-link {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(67, 97, 238, 0.1);
    color: var(--primary);
    font-size: 1.25rem;
    transition: var(--transition);
}

.social-link:hover {
    background-color: var(--primary);
    color: white;
    transform: translateY(-5px) scale(1.1);
    text-decoration: none;
}

/* Technologies Badges */
.tech-badge {
    padding: 0.5rem 1rem;
    margin: 0.5rem;
    border-radius: var(--border-radius);
    font-weight: 500;
    transition: var(--transition);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.tech-badge:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Back Button */
.back-btn {
    padding: 0.75rem 2rem;
    border-radius: 50px;
    font-weight: 500;
    letter-spacing: 0.5px;
    transition: var(--transition);
    box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
    display: inline-flex;
    align-items: center;
}

.back-btn i {
    margin-right: 8px;
    transition: var(--transition);
}

.back-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
}

.back-btn:hover i {
    transform: translateX(-3px);
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(-10px);
    }

    100% {
        transform: translateY(0px);
    }
}

.floating {
    animation: float 6s ease-in-out infinite;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .menu {
        width: 250px;
    }
}

@media (max-width: 768px) {
    .form {
        flex-direction: column;
    }

    .menu {
        width: 100%;
        height: auto;
        position: relative;
        padding: 1rem;
    }

    .page_active {
        height: auto;
        padding: 1.5rem;
    }

    .profile-img-container {
        width: 180px;
        height: 180px;
    }

    .profile-title {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .about-container {
        padding: 0;
    }

    .profile-section,
    .skills-section {
        border-radius: 0;
    }

    .feature-box {
        padding: 1.5rem;
    }
}
</style>
<body>
    <div class="container-fluid p-8 ">
        <div class="form d-flex flex-column align-items-center w-100">
            <div class="menu d-flex justify-content-between gap-md-5 bg-success p-6 w-100 rounded-3">
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
            <div class="page_active">
                <div class="about-container">
                    <!-- About Me Section -->
                    <div class="profile-section">
                        <div class="profile-img-container floating mt-5">
                            <img src="image/ChatGPT Image Apr 9, 2025, 12_09_44 PM.png" 
                                 alt="Profile Picture" class="profile-img">
                        </div>
                        
                        <div class="personal-info">
                            <h1 class="profile-title">About Me</h1>                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">Name:</span>
                                            <span class="info-value">Phorn Lyhuy</span>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">Email:</span>
                                            <span class="info-value">phornlyhuy7@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">Phone number:</span>
                                            <span class="info-value">081692565</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">Education:</span>
                                            <span class="info-value">Information Technology of RUPP</span>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">Class:</span>
                                            <span class="info-value">E7 Year 3</span>
                                            
                                        </div>
                                        
                                    </div>
                                        
                                     <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fa-brands fa-facebook"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">FB:</span>
                                            <span class="info-value">SMOS OS LEK DAK</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Skills Section -->
                    <div class="skills-section">
                        <h2 class="text-center mb-4 text-black "><i class="fas fa-code me-2"></i><b>LANGUAGES AND FRAMEWORK USE</b></h2>
                        <div class="text-center">
                            <span class="skill-badge"><i class="fab fa-php"></i> PHP</span>
                            <span class="skill-badge"><i class="fas fa-database"></i> MySQL</span>
                            <span class="skill-badge"><i class="fab fa-js"></i> JavaScript</span>
                            <span class="skill-badge"><i class="fab fa-html5"></i> HTML5</span>
                            <span class="skill-badge"><i class="fab fa-css3-alt"></i> CSS3</span>
                            <span class="skill-badge"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                            <span class="skill-badge"><i class="fa-solid fa-globe"></i>Internet</span>
                            <span class="skill-badge"><i class="fab fa-react"></i> Tailwind </span>
                            <span class="skill-badge"><i class="fab fa-node-js"></i> Copilot </span>
                            <span class="skill-badge"><i class="fab fa-git-alt"></i> Git </span>
                        </div>
                    </div>
                    
                    <!-- About Website Section -->
                    <div class="skills-section">
                        <h1 class="text-center mb-4 text-black"><b>About This Application</b></h1>
                        <p class="lead text-center mb-5">A modern Product Management System with full CRUD functionality and responsive design.</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-4 mb-4">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="fas fa-plus-circle"></i>
                                    </div>
                                    <h4 class="feature-title">Create Products</h4>
                                    <p class="feature-text">Easily add new products with images, detailed descriptions, pricing, and categorization.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="fas fa-list"></i>
                                    </div>
                                    <h4 class="feature-title">View Products</h4>
                                    <p class="feature-text">Clean, organized interface to browse all products with sorting and filtering capabilities.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="fas fa-edit"></i>
                                    </div>
                                    <h4 class="feature-title">Update Products</h4>
                                    <p class="feature-text">Intuitive editing interface to modify product details with real-time previews.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="fas fa-trash-alt"></i>
                                    </div>
                                    <h4 class="feature-title">Delete Products</h4>
                                    <p class="feature-text">Safe deletion with confirmation dialogs and optional archiving for data protection.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <h4 class="feature-title">Responsive Design</h4>
                                    <p class="feature-text">Fully responsive interface that works perfectly on all devices from desktop to mobile.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4 class="feature-title">Secure</h4>
                                    <p class="feature-text">Built with security best practices including data validation and sanitization.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-5">
                            <h3 class="text-center mb-4"><i class="fas fa-cogs me-2"></i>MY SKILL </h3>
                            <div class="d-flex flex-wrap justify-content-center">
                                <span class="tech-badge bg-primary"><b> HTML</b> </span>
                                <span class="tech-badge bg-secondary">CSS </span>
                                <span class="tech-badge bg-danger">Bootstrap 5.3</span>
                                <span class="tech-badge bg-primary">Tailwind</span>
                                <span class="tech-badge bg-success">JAVASCRIPT</span>
                                <span class="tech-badge bg-danger">C,C++,C#</span>
                                <span class="tech-badge bg-warning">JAVA</span>
                                <span class="tech-badge bg-danger">Video Editor</span>
                                <span class="tech-badge bg-primary">Canva</span>
                                <span class="tech-badge bg-secondary">REACT</span>
                                <span class="tech-badge bg-danger">PHP</span>
                                <span class="tech-badge bg-primary">MYSQL</span>    
                                <span class="tech-badge bg-secondary">GITHUB</span>
                                <span class="tech-badge bg-danger">NextJS </span>
                                <span class="tech-badge bg-primary">YT/FB/TikTok</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-5">
                        <a href="index.php" class="btn btn-primary back-btn">
                            <i class="fa-solid fa-arrow-left me-2"></i>Back to Product Dashboard
                        </a>
                    </div>
                </div>
            </div>>
        </div>
    </div>
</body>
<script>
    function setDeleteId(id) {
        // Store the ID in a hidden input for the form submission
        $('#delete_id_input').val(id);
    }
</script>
<script>
        // Add simple animation when scrolling to elements
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }
            });
            
            // Animate elements when they come into view
            $(window).scroll(function() {
                $('.feature-box').each(function() {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    
                    if (scroll > position - windowHeight + 200) {
                        $(this).addClass('animated');
                    }
                });
            });
        });
    </script>
</html>