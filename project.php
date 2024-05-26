<?php
include './admin_php/config.php';
include './admin_php/functions.php';

session_start();

$result = mysqli_query($conn, "SELECT * FROM images");
$allImages = mysqli_fetch_all($result, MYSQLI_ASSOC);

$projectQuery = mysqli_query($conn, "SELECT DISTINCT project_name FROM images");
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
  <link rel="stylesheet" href="animation.css">
  <link rel="stylesheet" href="navBar.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <div class="nav-container sticky-top">
    <div class="container-fluid top-nav-bar">
      <div class="row navigation">
        <div class="col-12 d-flex flex-row align-items-center justify-content-between">
          <div class="logo-container div-center">
            <a href="index.php">
              <img class="nav-logo" src="images/logo.png" alt="" />
            </a>
          </div>

          <div class="nav-control d-none d-md-block">
          <ul class="main-nav text-decoration-none p-0 m-0 div-center">
              <li class="hidenav">
                <a href="index.php">Home <span class="nav-hover-line"></span></a>
              </li>
              <li class="hidenav">
                <a href="about.html">About <span class="nav-hover-line"></span></a>
              </li>
              <li class="hidenav">
                <a href="service.html">Service <span class="nav-hover-line"></span></a>
              </li>
              <li class="hidenav active">
                <a href="project.php">Project <span class="nav-hover-line"></span></a>
              </li>
              <li class="hidenav">
                <a href="contact.php">Contact <span class="nav-hover-line"></span></a>
              </li>
            </ul>
          </div>

          <div class="contact-hide common-btn-filled d-none d-md-block">
            <a href="">
            <div class="words">
                  <p >
                    <span>Connect US</span>
                    <span>Today</span>
                    
                  </p>
                </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                <path d="M15 25.5L22.5 18L15 10.5V25.5Z" fill="#FEBC2F" />
              </svg>
            </a>
          </div>

          <div class="mobile-nav d-md-none">
            <input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
            <label for="main-navigation-toggle">
              <span></span>
            </label>

            <nav id="main-navigation" class="nav-main">
              <ul class="menu">
                <li class="menu__item">
                  <a class="menu__link" href="/index.php">Home</a>
                </li>
                <li class="menu__item">
                  <a class="menu__link" href="/about.html">About</a>
                </li>
                <li class="menu__item">
                  <a class="menu__link" href="/service.html">Services</a>
                </li>
                <li class="menu__item">
                  <a class="menu__link" href="/project.php">Projects</a>
                </li>
                <li class="menu__item">
                  <a class="menu__link" href="/contact.php">Contact</a>
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
          <span id="project-typing"></span>
          </h1>

          <div class="mt-5 d-flex align-items-center justify-content-center">
            <div class="common-landing-opener">
              <div data-aos="fade-right" class="about-sub">
                <h6>Home</h6>
                <p></p>
                <h6>Projects</h6>
                <p></p>
              </div>
              <div data-aos="fade-up" class="about-home">
                <img src="images/home.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid container-fluid-max about-landing first-bg-color">
    <div class="container-fluid">
      <div class="row">
        <h1 data-aos="fade-up" class="mb-4 text-md-center">OUR PROJECTS</h1>
        <div class="col-md-6">
          <div data-aos="fade-right" class="contact-landing-img d-none d-md-block">
            <img src="images/ag-contact.png" alt="" />
          </div>
        </div>
        <div class="col-md-6">
          <div data-aos="fade-left" class="contact-landing-para">
            <p class="white">
              AG Creations is a dynamic and innovative construction company,
              established in the year 2022, to redefine the landscape of the
              construction industry. With a forward-thinking approach, we
              specialize in delivering high-quality construction projects that
              meet the evolving needs of our clien
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5 pt-3">
    <div class="sucess-pro">
      <div data-aos="fade-right" class="heading-title mb-4">
        <div class="mount heading-title-icon">
          <img src="images/icon-park-outline_building-two.png" alt="" />
        </div>
        <div class="mount-para heading-title-content">
          <div class="heading-title-sub">
            <p class="name-line heading-title-sub-content">Our Work</p>
            <span class="heading-title-line"></span>
          </div>
          <h3 class="heading-title-main-content">Portfolio</h3>
        </div>
      </div>

      <div class="sucess-meet">
        <div class="row">
          <?php
          while ($projectResult = mysqli_fetch_assoc($projectQuery)) {
            $projectName = $projectResult['project_name'];
            $imageQuery = mysqli_query($conn, "SELECT * FROM images WHERE project_name = '$projectName' ORDER BY id LIMIT 1");
            $imageResult = mysqli_fetch_assoc($imageQuery);
            ?>
            <div class="col-md-6">
              <div class="card shadow-sm rounded-3" data-aos="fade-right">
                <a class="testimonial-container"
                  href="project_page.php?project=<?php echo urlencode($projectName); ?>&image=<?php echo urlencode($imageResult['url']); ?>">
                  <?php if ($imageResult) {
                    $imageUrl = $imageResult['url'];
                    $imageAddress = $imageResult['address']; ?>
                    <img src="<?php echo $imageUrl; ?>">
                    <div class="testimonial-content">
                      <h5 class="testimonial-content-heading"><?php echo $projectName; ?></h5>
                      <p><?php echo $imageAddress ?></p>
                    </div>
                  <?php } ?>
                </a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5 mt-3">
    <div class="gallery">
      <div class="gallery-title">
        <div data-aos="fade-right" class="heading-title">
          <div class="mount heading-title-icon">
            <img src="images/icon-park-outline_building-two.png" alt="" />
          </div>
          <div class="mount-para heading-title-content">
            <div class="heading-title-sub">
              <p class="name-line heading-title-sub-content">Our Work</p>
              <span class="heading-title-line"></span>
            </div>
            <h3 class="heading-title-main-content">Portfolio</h3>
          </div>
        </div>
      </div>

      <div class="gallery container-fluid">
        <section id="commercial-gallery" class="main-gallery my-5">
          <div id="gallery" class="container-lg">
            <?php foreach ($allImages as $image): ?>
              <img data-aos="fade-up" onclick="openModal(this.src)" loading="lazy" src="<?php echo $image['url']; ?>" class="img-responsive" alt="Image">
            <?php endforeach; ?>
          </div>
        </section>
      </div>

      <!-- The Modal -->
      <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage" />
      </div>
    </div>
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



<script>
   var strings = ["PROJECTS THAT TELLS ABOUT US"];
  
  var textElement = document.getElementById("project-typing");
  var currentStringIndex = 0;
  var currentString = strings[currentStringIndex];
  var typingDelay = 50; // Delay between each character typing
 
  var typingSpeed = 100; // Speed of typing animation
  var eraseSpeed = 100; // Speed of erasing animation
  var loop = true;
  
  function type(currentLength) {
    if (currentLength < currentString.length) {
      textElement.textContent += currentString.charAt(currentLength);
      setTimeout(() => type(currentLength + 1), typingSpeed);
    } else {
      setTimeout(() => erase(currentString.length), eraseDelay);
    }
  }
  
  function erase(currentLength) {
    if (currentLength > 0) {
      textElement.textContent = currentString.slice(0, currentLength - 1);
      setTimeout(() => erase(currentLength - 1), eraseSpeed);
    } else {
      currentStringIndex++;
      if (currentStringIndex >= strings.length) {
        if (loop) {
          currentStringIndex = 0;
        } else {
          return;
        }
      }
      currentString = strings[currentStringIndex];
      setTimeout(() => type(0), typingDelay);
    }
  }
  
  document.addEventListener("DOMContentLoaded", function() {
    setTimeout(() => type(0), typingDelay);
  });
  

</script>

</body>

</html>