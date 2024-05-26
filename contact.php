<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
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
  <link rel="stylesheet" href="contact.css" />
  <link rel="stylesheet" href="navBar.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
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
              <li class="hidenav">
                <a href="project.html">Project <span class="nav-hover-line"></span></a>
              </li>
              <li class="hidenav active">
                <a href="contact.html">Contact <span class="nav-hover-line"></span></a>
              </li>
            </ul>
          </div>

          <div class="contact-hide common-btn-filled d-none d-md-block">
            <a href="">
              <p>Contact Us</p>
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
            LET'S CONNECT TOGETHER
          </h1>

          <div class="mt-5 d-flex align-items-center justify-content-center">
            <div class="common-landing-opener">
              <div data-aos="fade-left" class="about-sub">
                <h6>Home</h6>
                <p></p>
                <h6>Contact Us</h6>
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
        <h1 data-aos="fade-up" class="mb-4 text-md-center">CONNECT NOW</h1>
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
    <div class="row py-4">
      <div class="col-md-4 d-none d-md-block">
        <div data-aos="fade-right" class="connect-img">
          <img src="images/contact-img.png" alt="" />
        </div>
      </div>

      <div class="col-md-4 connect">
        <div data-aos="fade-left" class="heading-title">
          <div class="mount heading-title-icon">
            <img src="images/icon-park-outline_building-two.png" alt="" />
          </div>
          <div class="mount-para heading-title-content">
            <div class="heading-title-sub">
              <p class="name-line heading-title-sub-content">Let's Connect</p>
              <span class="heading-title-line"></span>
            </div>
            <h3 class="heading-title-main-content">Contact Us</h3>
          </div>
        </div>

        <div class="contact-page w-100 mt-3">
          <div data-aos="fade-left" class="connect-form w-100">
            <div id="ContactSubmitMessage"></div>
            <form id="contactForm" method="post" class="w-100">
              <div class="contact-form-input-group">
                <label for="name">Name</label>
                <input id="name" type="text" name='name' />
              </div>
              <div class="contact-form-input-group">
                <label for="email">Email</label>
                <input id="email" type="text" name='email' />
              </div>
              <div class="contact-form-input-group">
                <label for="phone">Phone Number</label>
                <input id="phone" type="text" name='phone' />
              </div>
              <div class="contact-form-input-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" cols="30" rows="" placeholder="Write Your Message.."></textarea>
              </div>

              <div class="form-footer">
                <div class="common-btn-filled connect-btn">
                  <button type="submit" class="submit-btn">
                      <p>Submit</p>
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <path d="M15 25.5L22.5 18L15 10.5V25.5Z" fill="#FEBC2F" />
                      </svg>
                  </button>
                </div>

                <div data-aos="fade-right" class="social-link mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="138" height="30" viewBox="0 0 138 30" fill="none">
                    <circle cx="15" cy="15" r="15" fill="#ED5C05" />
                    <path
                      d="M23 10.4255C22.4484 10.6598 21.8481 10.8284 21.2298 10.8941C21.8717 10.5185 22.3525 9.92521 22.5818 9.22545C21.9794 9.57833 21.3195 9.82578 20.6313 9.95681C20.3437 9.65402 19.9958 9.4128 19.6094 9.24819C19.2229 9.08357 18.8062 8.99909 18.3852 9.00001C16.6816 9.00001 15.3116 10.3598 15.3116 12.0284C15.3116 12.2627 15.3405 12.497 15.3873 12.7225C12.8366 12.5911 10.5616 11.3911 9.04915 9.55385C8.77357 10.0174 8.62916 10.5451 8.63093 11.0823C8.63093 12.1331 9.17354 13.0598 10.001 13.6047C9.51335 13.5858 9.03715 13.4538 8.6111 13.2195V13.2568C8.6111 14.7284 9.66747 15.9479 11.0754 16.2284C10.811 16.296 10.5391 16.3306 10.266 16.3314C10.0659 16.3314 9.87658 16.3118 9.68549 16.2852C10.0749 17.4852 11.2087 18.3568 12.5589 18.3852C11.5026 19.2 10.1794 19.6793 8.7427 19.6793C8.48492 19.6793 8.24697 19.6704 8 19.642C9.36282 20.503 10.9798 21 12.7212 21C18.3744 21 21.4677 16.3882 21.4677 12.3852C21.4677 12.2539 21.4677 12.1225 21.4587 11.9911C22.0572 11.5598 22.5818 11.0254 23 10.4255Z"
                      fill="white" />
                    <circle cx="69" cy="15" r="15" fill="#ED5C05" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M66.408 7.045C67.2077 7.00818 67.4627 7 69.5 7C71.5373 7 71.7923 7.00886 72.5914 7.045C73.3905 7.08114 73.9359 7.20864 74.4132 7.39341C74.913 7.58227 75.3664 7.8775 75.7414 8.25932C76.1232 8.63364 76.4177 9.08636 76.6059 9.58682C76.7914 10.0641 76.9182 10.6095 76.955 11.4073C76.9918 12.2084 77 12.4634 77 14.5C77 16.5373 76.9911 16.7923 76.955 17.592C76.9189 18.3898 76.7914 18.9352 76.6059 19.4125C76.4177 19.913 76.1227 20.3665 75.7414 20.7414C75.3664 21.1232 74.913 21.4177 74.4132 21.6059C73.9359 21.7914 73.3905 21.9182 72.5927 21.955C71.7923 21.9918 71.5373 22 69.5 22C67.4627 22 67.2077 21.9911 66.408 21.955C65.6102 21.9189 65.0648 21.7914 64.5875 21.6059C64.087 21.4177 63.6335 21.1227 63.2586 20.7414C62.8771 20.3668 62.5818 19.9136 62.3934 19.4132C62.2086 18.9359 62.0818 18.3905 62.045 17.5927C62.0082 16.7916 62 16.5366 62 14.5C62 12.4627 62.0089 12.2077 62.045 11.4086C62.0811 10.6095 62.2086 10.0641 62.3934 9.58682C62.5821 9.08642 62.8776 8.63317 63.2593 8.25864C63.6337 7.87716 64.0867 7.58189 64.5868 7.39341C65.0641 7.20864 65.6095 7.08182 66.4073 7.045H66.408ZM72.5307 8.395C71.7398 8.35886 71.5025 8.35136 69.5 8.35136C67.4975 8.35136 67.2602 8.35886 66.4693 8.395C65.7377 8.42841 65.3409 8.55045 65.0764 8.65341C64.7266 8.78977 64.4764 8.95136 64.2139 9.21386C63.965 9.45594 63.7735 9.75065 63.6534 10.0764C63.5505 10.3409 63.4284 10.7377 63.395 11.4693C63.3589 12.2602 63.3514 12.4975 63.3514 14.5C63.3514 16.5025 63.3589 16.7398 63.395 17.5307C63.4284 18.2623 63.5505 18.6591 63.6534 18.9236C63.7734 19.2489 63.965 19.5441 64.2139 19.7861C64.4559 20.035 64.7511 20.2266 65.0764 20.3466C65.3409 20.4495 65.7377 20.5716 66.4693 20.605C67.2602 20.6411 67.4968 20.6486 69.5 20.6486C71.5032 20.6486 71.7398 20.6411 72.5307 20.605C73.2623 20.5716 73.6591 20.4495 73.9236 20.3466C74.2734 20.2102 74.5236 20.0486 74.7861 19.7861C75.035 19.5441 75.2266 19.2489 75.3466 18.9236C75.4495 18.6591 75.5716 18.2623 75.605 17.5307C75.6411 16.7398 75.6486 16.5025 75.6486 14.5C75.6486 12.4975 75.6411 12.2602 75.605 11.4693C75.5716 10.7377 75.4495 10.3409 75.3466 10.0764C75.2102 9.72659 75.0486 9.47636 74.7861 9.21386C74.544 8.96505 74.2493 8.77355 73.9236 8.65341C73.6591 8.55045 73.2623 8.42841 72.5307 8.395ZM68.542 16.812C69.077 17.0347 69.6728 17.0648 70.2275 16.8971C70.7821 16.7294 71.2614 16.3743 71.5834 15.8924C71.9053 15.4106 72.05 14.832 71.9928 14.2553C71.9355 13.6786 71.6798 13.1398 71.2693 12.7307C71.0077 12.4692 70.6913 12.269 70.343 12.1444C69.9946 12.0199 69.623 11.9741 69.2549 12.0104C68.8867 12.0467 68.5312 12.1642 68.214 12.3544C67.8967 12.5446 67.6255 12.8028 67.42 13.1104C67.2145 13.4179 67.0797 13.7672 67.0254 14.1332C66.971 14.4991 66.9985 14.8725 67.1058 15.2265C67.2131 15.5805 67.3976 15.9063 67.6459 16.1805C67.8943 16.4547 68.2003 16.6704 68.542 16.812ZM66.7741 11.7741C67.1321 11.4161 67.557 11.1322 68.0247 10.9384C68.4925 10.7447 68.9938 10.645 69.5 10.645C70.0062 10.645 70.5075 10.7447 70.9753 10.9384C71.443 11.1322 71.8679 11.4161 72.2259 11.7741C72.5839 12.1321 72.8678 12.557 73.0616 13.0247C73.2553 13.4925 73.355 13.9938 73.355 14.5C73.355 15.0062 73.2553 15.5075 73.0616 15.9753C72.8678 16.443 72.5839 16.8679 72.2259 17.2259C71.503 17.9489 70.5224 18.355 69.5 18.355C68.4776 18.355 67.497 17.9489 66.7741 17.2259C66.0511 16.503 65.645 15.5224 65.645 14.5C65.645 13.4776 66.0511 12.497 66.7741 11.7741ZM74.21 11.2191C74.2987 11.1354 74.3697 11.0348 74.4188 10.9232C74.468 10.8115 74.4942 10.6912 74.496 10.5693C74.4977 10.4473 74.475 10.3263 74.4292 10.2133C74.3833 10.1003 74.3153 9.99762 74.2291 9.91139C74.1428 9.82516 74.0402 9.75711 73.9272 9.71126C73.8142 9.66542 73.6931 9.64271 73.5712 9.64449C73.4492 9.64627 73.3289 9.67249 73.2173 9.72161C73.1057 9.77073 73.005 9.84175 72.9214 9.93045C72.7586 10.103 72.6695 10.3321 72.673 10.5693C72.6764 10.8064 72.7722 11.0329 72.9399 11.2006C73.1076 11.3683 73.334 11.464 73.5712 11.4675C73.8083 11.4709 74.0375 11.3818 74.21 11.2191Z"
                      fill="white" />
                    <circle cx="123" cy="15" r="15" fill="#ED5C05" />
                    <path
                      d="M128.698 10.8295C127.726 10.4391 126.699 10.1605 125.645 10.0006C125.636 9.99916 125.626 10.0004 125.617 10.004C125.608 10.0077 125.601 10.0137 125.596 10.0211C125.464 10.2261 125.318 10.4942 125.216 10.7041C124.079 10.5532 122.923 10.5532 121.786 10.7041C121.672 10.4702 121.543 10.2422 121.4 10.0211C121.395 10.0137 121.388 10.0079 121.379 10.0042C121.371 10.0006 121.361 9.99928 121.351 10.0006C120.297 10.1596 119.27 10.4384 118.298 10.8295C118.29 10.8323 118.283 10.8375 118.278 10.8443C116.334 13.3853 115.8 15.864 116.062 18.3115C116.063 18.323 116.071 18.3344 116.082 18.3418C117.214 19.0754 118.48 19.6354 119.827 19.9981C119.837 20.0007 119.847 20.0006 119.856 19.9978C119.866 19.995 119.874 19.9897 119.879 19.9825C120.168 19.6381 120.425 19.2749 120.646 18.8928C120.651 18.885 120.653 18.876 120.651 18.8673C120.649 18.8586 120.644 18.8505 120.637 18.8444C120.632 18.8404 120.626 18.8374 120.62 18.8354C120.216 18.6997 119.825 18.5365 119.45 18.3476C119.44 18.3424 119.432 18.3339 119.428 18.3238C119.425 18.3137 119.426 18.3028 119.431 18.2934C119.435 18.2873 119.439 18.282 119.445 18.2779C119.524 18.2262 119.603 18.1721 119.678 18.118C119.685 18.1133 119.693 18.1103 119.701 18.1093C119.709 18.1083 119.718 18.1093 119.726 18.1122C122.181 19.0929 124.839 19.0929 127.264 18.1122C127.272 18.1092 127.281 18.1081 127.29 18.1091C127.299 18.1101 127.307 18.1132 127.314 18.118C127.389 18.1721 127.468 18.2262 127.546 18.2779C127.553 18.2819 127.558 18.2873 127.561 18.2936C127.565 18.2998 127.566 18.3067 127.566 18.3136C127.565 18.3205 127.563 18.3272 127.559 18.3331C127.555 18.3391 127.549 18.344 127.543 18.3476C127.168 18.5383 126.777 18.7012 126.372 18.8346C126.365 18.8367 126.359 18.8399 126.354 18.8442C126.35 18.8484 126.346 18.8536 126.343 18.8592C126.341 18.8647 126.34 18.8705 126.341 18.8763C126.341 18.882 126.343 18.8877 126.346 18.8928C126.571 19.2741 126.829 19.6381 127.112 19.9825C127.118 19.9897 127.126 19.995 127.136 19.9978C127.145 20.0006 127.155 20.0007 127.165 19.9981C128.514 19.6365 129.782 19.0764 130.916 18.3418C130.921 18.3384 130.926 18.3339 130.929 18.3286C130.933 18.3234 130.935 18.3175 130.935 18.3115C131.248 15.4819 130.411 13.0237 128.717 10.8451C128.716 10.8415 128.713 10.8383 128.71 10.8356C128.706 10.8329 128.703 10.8308 128.698 10.8295ZM121.013 16.8208C120.273 16.8208 119.665 16.2272 119.665 15.4991C119.665 14.7702 120.262 14.1765 121.013 14.1765C121.769 14.1765 122.372 14.7751 122.361 15.4991C122.361 16.2272 121.764 16.8208 121.013 16.8208ZM125.997 16.8208C125.258 16.8208 124.649 16.2272 124.649 15.4991C124.649 14.7702 125.246 14.1765 125.997 14.1765C126.753 14.1765 127.357 14.7751 127.345 15.4991C127.345 16.2272 126.753 16.8208 125.997 16.8208Z"
                      fill="white" />
                  </svg>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-right mt-5 mt-md-0 pt-3 pt-md-0 align-items-md-center position-relative">
          <div data-aos="fade-left" class="connect-info">
            <img src="images/ag-bg-remove.png" alt="" />
            <div class="ag-circle-bg"></div>
          </div>

          <div data-aos="fade-left" class="contact-detail w-100">
            <div class="detail-item">
              <img src="images/phone.png" alt="" />
              <p>+1012 3456 789</p>
            </div>

            <div class="detail-item">
              <img src="images/email.png" alt="" />
              <p>demo@gmail.com</p>
            </div>
            <div class="detail-item">
              <img src="images/location.png" alt="" />
              <p>
                132 Dartmouth Street Boston, Massachusetts 02156 United States
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div data-aos="fade-up" class="container-fluid map">
    <div class="embeded-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62220.443440465766!2d80.07175592350282!3d12.922003471375785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525f14844aad0f%3A0xe16d3a66c4ce38d4!2sTambaram%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1715623879635!5m2!1sen!2sin"
        width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <div class="container-fluid container-fluid-max">
    <div class="row mt-5 footer-img">
      <img src="images/footer-img.png" alt="" />
      <div class="container-fluid">
        <div class="row h-100 py-4">
          <div data-aos="fade-right" class="col-md-6 footer-heading">
            <h1>Let’s Connect Now !</h1>
            <p>Take Initiative Now For Better Choice</p>
          </div>

          <div class="col-md-6 connect-now-right">
            <div data-aos="fade-left" class="common-btn-filled">
              <a href="">
                <p>Contact Us</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                  <path d="M15 25.5L22.5 18L15 10.5V25.5Z" fill="#FEBC2F" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid p-0 m-0 container-fluid-max footer-container">
    <div class="dot-image">
      <img src="images/dots.png" alt="" />
    </div>
    <div class="container-fluid">
      <div class="row footer-container-row">
        <div class="col-lg-6">
          <div data-aos="fade-right" class="creations">
            <img src="images/ag-creation.png" alt="" />
          </div>
        </div>

        <div class="col-lg-6 creation-common">
          <div class="creation-secound">
            <div data-aos="fade-left" class="creations-list">
              <p>COMPANY</p>
              <ul>
                <a href="">
                  <li>About Us</li>
                </a>
                <a href="">
                  <li>Projects</li>
                </a>
                <a href="">
                  <li>Contact Us</li>
                </a>
              </ul>
            </div>

            <div data-aos="fade-left" class="creations-list">
              <p>Services</p>
              <ul>
                <a href="">
                  <li>Renovation</li>
                </a>
                <a href="">
                  <li>Building</li>
                </a>
                <a href="">
                  <li>Construction</li>
                </a>
                <a href="">
                  <li>Making</li>
                </a>
              </ul>
            </div>

            <div data-aos="fade-left" class="creations-list">
              <p>Contact</p>
              <ul>
                <li>+91 89268 72938</li>
                <li>demo@gmail.com</li>
                <li>
                  132 Dartmouth Street Boston, Massachusetts 02156 United
                  States
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-rights rights">
    <div class="container-fluid">
      <p class="text-center">
        Copyright @ 2024 AG Creations by High On Code. All Rights Reserved
      </p>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      $("#contactForm").on('submit', function (e) {
        e.preventDefault();
        if ($(this).valid()) {
          $.ajax({
            url: 'process_form.php',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
              $("#ContactSubmitMessage").html('<div class="alert alert-success my-1">' + data + '</div>');
              $("#contactForm")[0].reset();
            },
            error: function () {
              $("#ContactSubmitMessage").html('<div class="alert alert-danger">An error occurred.</div>');
            }
          });
        }
      });

      $("#contactForm").validate({
        rules: {
          name: {
            required: true,
            minlength: 2
          },
          email: {
            required: true,
            email: true
          },
          phone: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 10,
          },
          message: {
            required: true,
            minlength: 10
          }
        },
        messages: {
          name: {
            required: "Please enter your name",
            minlength: "Your name must consist of at least 2 characters"
          },
          email: {
            required: "Please enter your email",
            email: "Please enter a valid email address"
          },
          phone: {
            required: "Please enter your phone number",
            digits: "Please enter a valid phone number"
          },
          message: {
            required: "Please write a message",
            minlength: "Your message must consist of at least 10 characters"
          }
        }
      });
    });

  </script>

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