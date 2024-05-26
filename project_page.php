<?php
include './admin_php/config.php';
include './admin_php/functions.php';

session_start();

if (isset($_GET['project']) && isset($_GET['image'])) {
    // Get the project name from the URL parameter and sanitize it
    $projectName = mysqli_real_escape_string($conn, $_GET['project']);
    $firstImageUrl = mysqli_real_escape_string($conn, $_GET['image']);
    // Fetch all images for the current project
    $imageQuery = mysqli_query($conn, "SELECT * FROM images WHERE project_name = '$projectName'");
    $imageResult = mysqli_fetch_assoc($imageQuery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="project.css" />
    <link rel="stylesheet" href="project-slides.css" />

    <link rel="stylesheet" href="navBar.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <div class="nav-container sticky-top">
        <div class="container-fluid top-nav-bar">
            <div class="row navigation">
                <div class="col-12 d-flex flex-row align-items-center justify-content-between">
                    <div class="logo-container div-center">
                        <a href="index.html">
                            <img class="nav-logo" src="images/logo.png" alt="" />
                        </a>
                    </div>

                    <div class="nav-control d-none d-md-block">
                        <ul class="main-nav text-decoration-none p-0 m-0 div-center">
                            <li class="hidenav">
                                <a href="index.html">Home <span class="nav-hover-line"></span></a>
                            </li>
                            <li class="hidenav">
                                <a href="about.html">About <span class="nav-hover-line"></span></a>
                            </li>
                            <li class="hidenav">
                                <a href="service.html">Service <span class="nav-hover-line"></span></a>
                            </li>
                            <li class="hidenav active">
                                <a href="project.html">Project <span class="nav-hover-line"></span></a>
                            </li>
                            <li class="hidenav">
                                <a href="contact.html">Contact <span class="nav-hover-line"></span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-hide common-btn-filled d-none d-md-block">
                        <a href="">
                            <p>Contact Us</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                                fill="none">
                                <path d="M15 25.5L22.5 18L15 10.5V25.5Z" fill="#FEBC2F" />
                            </svg>
                        </a>
                    </div>

                    <div class="mobile-nav d-md-none">
                        <input type="checkbox" id="main-navigation-toggle" class="btn btn--close"
                            title="Toggle main navigation" />
                        <label for="main-navigation-toggle">
                            <span></span>
                        </label>

                        <nav id="main-navigation" class="nav-main">
                            <ul class="menu">
                                <li class="menu__item">
                                    <a class="menu__link" href="/index.html">Home</a>
                                </li>
                                <li class="menu__item">
                                    <a class="menu__link" href="/about.html">About</a>
                                </li>
                                <li class="menu__item">
                                    <a class="menu__link" href="/service.html">Services</a>
                                </li>
                                <li class="menu__item">
                                    <a class="menu__link" href="/project.html">Projects</a>
                                </li>
                                <li class="menu__item">
                                    <a class="menu__link" href="/contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container-fluid-max about-landing">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 data-aos="fade-right" class="text-center my-4 fw-700 landing-header-text">
                        <?php echo $projectName; ?>
                    </h1>

                    <div class="mt-5 d-flex align-items-center justify-content-center">
                        <div class="common-landing-opener">
                            <div data-aos="fade-right" class="about-sub">
                                <h6>Projects</h6>
                                <p></p>
                                <h6><?php echo $projectName; ?></h6>
                                <p></p>
                            </div>
                            <div data-aos="fade-up" class="about-home">
                                <img src="<?php echo $firstImageUrl; ?>" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery container-fluid mt-5 mt-md-0 pt-5 pt-md-0">
        <div data-aos="fade-right" class="heading-title mb-4">
            <div class="mount heading-title-icon">
                <img src="images/icon-park-outline_building-two.png" alt="" />
            </div>
            <div class="mount-para heading-title-content">
                <div class="heading-title-sub">
                    <p class="name-line heading-title-sub-content">Our Project</p>
                    <span class="heading-title-line"></span>
                </div>
                <h3 class="heading-title-main-content"><?php echo $projectName; ?></h3>
            </div>
        </div>
        <section id="commercial-gallery" class="main-gallery my-5">
            <div id="gallery" class="container-lg">
                <img data-aos="fade-up" onclick="openModal(this.src)" loading="lazy" src="<?php echo $firstImageUrl; ?>"
                    class="img-responsive" alt="Image">
                <?php while ($imageResult = mysqli_fetch_assoc($imageQuery)): ?>
                    <img data-aos="fade-up" onclick="openModal(this.src)" loading="lazy"
                        src="<?php echo $imageResult['url']; ?>" class="img-responsive" alt="Image">
                <?php endwhile; ?>
            </div>
        </section>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage" />
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="index.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            once: true  // Ensures animation runs only once
        });
        // Trigger AOS refresh after window load to ensure animations play on load
        window.addEventListener('load', function () {
            AOS.refresh();
        });
    </script>

</body>

</html>