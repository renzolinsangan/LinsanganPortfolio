<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Linsangan Portfolio</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body style="background-color: #222831; height: 1000vh">
  <!-- NAVIGATION BAR -->
  <?php include ("extension/navbar.php"); ?>

  <div class="container mt-5">
    <!-- HOME -->
    <div class="homepage" id="homepage">
      <div class="row ms-5" style="color: white">
        <div class="col mb-5">
          <p class="fs-3">Hi, my name is</p>
          <h1 class="fw-bold">John Renzo Linsangan,</h1>
          <h2 class="fw-bold">
            An <span style="color: #76abae">aspiring</span> Developer.
          </h2>
          <div class="col-10 mt-4">
            <p style="font-size: 17px">
              With extensive expertise in Web Development and Database
              Management, a fresh graduate whose eager to learn and grow.
              Let's make something happen!
            </p>
          </div>

          <!-- SOCIAL APPS -->
          <div class="row mt-4" style="gap: 120px">
            <div class="col-1 github">
              <a href="https://github.com/renzolinsangan" id="githubHover" target="_blank">
                <div class="github-icon">
                  <i class="bi bi-github fs-1"></i> Github
                </div>
              </a>
            </div>
            <div class="col-1 linkedin">
              <a href="https://www.linkedin.com/in/john-renzo-linsangan-5851332a8/" id="linkedinHover" target="_blank">
                <div class="linkedin-icon">
                  <i class="bi bi-linkedin fs-1"></i> Linkedin
                </div>
              </a>
            </div>
            <div class="col-1 facebook">
              <a href="https://www.facebook.com/LinsanganJohn/" id="facebookHover" target="_blank">
                <div class="facebook-icon">
                  <i class="bi bi-facebook fs-1"></i>Facebook
                </div>
              </a>
            </div>
          </div>

          <!-- DOWNLOAD CV AND RESUME -->
          <div class="row mt-4" style="gap: 50px">
            <!-- CV -->
            <div class="col-4">
              <a href="https://github.com/renzolinsangan/Resume-CV/blob/main/CV%20-%20Linsangan%2C%20John%20Renzo%20G..pdf"
                id="downloadCV" target="_blank">
                <div class="dcv d-flex align-items-center justify-content-center p-2" style="
                      background-color: #eeeeee;
                      color: #222831;
                      border-radius: 20px;
                      border: 2px solid #222831;
                    ">
                  <span>Download CV</span>
                </div>
              </a>
            </div>
            <!-- RESUME -->
            <div class="col-4">
              <a href="https://github.com/renzolinsangan/Resume-CV/blob/main/RESUME%20-%20Linsangan%2C%20John%20Renzo%20G..pdf"
                id="downloadRESUME" target="_blank">
                <div class="dresume d-flex align-items-center justify-content-center p-2" style="
                      background-color: #222831;
                      color: #eeeeee;
                      border-radius: 20px;
                      border: 2px solid #eeeeee;
                    ">
                  <span>Download Resume</span>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="images/mainPic.JPG" alt="picture" width="400" height="450" />
        </div>
      </div>
    </div>
    <!-- VERTICAL LINE -->
    <div class="row mt-5 mb-5">
      <div class="col-12 d-flex justify-content-center align-items-center">
        <div id="vertical-line"></div>
      </div>
    </div>
    <!-- PROJECTS -->
    <div class="projects mt-5" id="projects">
      <br>
      <h1 class="text-center mb-5" style="color: #EEEEEE;">My Projects</h1>
      <div class="row lms-project d-flex justify-content-center align-items-center mb-5">
        <div class="col-10">
          <div class="card" id="projectCard">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h3>Learning Management System</h3>
                  <p class="fs-5 mt-3">Made with:
                    <img src="images/html.png" alt="html" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/css.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/js.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/bootstrap.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/php.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/mysql.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                  </p>
                  <!-- DESCRIPTION -->
                  <p style="font-size: 17px;">
                    Learning Management System is a web-based program with 4 entities
                    such as Administrator, Teacher, Student, and Parent. It is used as platform
                    for the users to deliver, track, and manage learning materials, assessments,
                    school news and announcement, grade reports, and gamified rankings, leadearboards
                    and awards. It is dedicated for the students of the school which will help to boost
                    and motivate the students in studying more and better, for the teacher to have a platform
                    in providing the moduless and materials, and the parents to track the performance of their
                    child.
                  </p>
                  <a href="https://github.com/renzolinsangan/TalisayLMS" id="github" target="_blank">
                    <button class="btn">
                      <i class="bi bi-github"></i> Github
                    </button>
                  </a>
                </div>
                <div class="col-md-6 mt-5">
                  <img id="LMSimg" src="images/lms1.png" alt="LMS">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row alumni-tracking d-flex justify-content-center align-items-center mb-5">
        <div class="col-10">
          <div class="card" id="projectCard">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h3>Alumni Tracking</h3>
                  <p class="fs-5 mt-3">Made with:
                    <img src="images/html.png" alt="html" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/css.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/js.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/bootstrap.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/php.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                    <img src="images/mysql.png" alt="css" height="30" width="30" style="margin-right: 5px;">
                  </p>
                  <!-- DESCRIPTION -->
                  <p style="font-size: 17px;">
                    Alumni Tracking is a web-based program that allows the administrator to track the records,
                    their personal details and status, create survey, validate request, set appointments, and
                    upload documents. In alumni tracking, the user can edit their details, update their status
                    by answering the surveys created by the administrator, request documents, and set appointments
                    with certain guidelines and procedure indicated at the system. It helps the user to have a platform
                    and remove the inconveniency by having different ways to request, appoints, and retrieve.
                  </p>
                  <a href="https://github.com/renzolinsangan/alumniTrackingMalvar" id="github" target="_blank">
                    <button class="btn">
                      <i class="bi bi-github"></i> Github
                    </button>
                  </a>
                </div>
                <div class="col-md-6 mt-4">
                  <img id="ALUMNIimg" src="images/alumni.png" alt="ALUMNI">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SKILLS -->
    <div class="skills" id="skills">
      <br>
      <h1 class="text-center mb-5" style="color: #EEEEEE;">My Skills</h1>
    </div>
  </div>

  <!-- SCRIPT EXTENSION -->
  <?php include ("script/bootstrap.php"); ?>
</body>

</html>