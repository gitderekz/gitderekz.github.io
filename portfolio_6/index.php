<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
    <title>My Portfolio</title>
  </head>

  <?php 
    // // DEVELOPMENT
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "portfolio";

    //   PRODUCTION
    $servername = "localhost";
    $username = "523397"; 
    $password = "ramses12"; 
    $dbname = "523397";

    $mysqli = new mysqli($servername, $username, $password, $dbname); 
    //   $query = "SELECT * FROM sanduku_la_maoni";

    $profile = "SELECT * FROM profile WHERE id = 1";
    $contacts = "SELECT * FROM contacts";
    $education = "SELECT * FROM education";
    $experience = "SELECT * FROM experience";
    $expertise = "SELECT * FROM expertise";
    $portfolio = "SELECT * FROM portfolio";

    
    $profile_data = $mysqli->query($profile)->fetch_assoc();
    $contacts_data = $mysqli->query($contacts)->fetch_assoc();
    $email = $contacts_data['email'];
    $phone = $contacts_data['phone'];
    $instagram = $contacts_data['instagram'];
    $facebook = $contacts_data['facebook'];
    $x = $contacts_data['x'];
    $linkedin = $contacts_data['linkedin'];
    $github = $contacts_data['github'];
    $website = $contacts_data['website'];
    $education_data = $mysqli->query($education);
    $experience_data = $mysqli->query($experience);
    $expertise_data = $mysqli->query($expertise);
    $portfolio_data = $mysqli->query($portfolio);


//   echo '<table border cellspacing="2" cellpadding="2" class="table table-striped bg-light"> 
//       <thead>
//           <tr> 
//               <td> <font face="Arial">S/N</font> </td> 
//               <td> <font face="Arial">SUGGESTION</font> </td> 
//               <td> <font face="Arial">TIME</font> </td>  
//           </tr>
//       </thead>';

//   if ($result = $mysqli->query($query)) {
//       while ($row = $result->fetch_assoc()) {
//           $field1name = $row["id"];
//           $field2name = $row["comment"];
//           $field3name = $row["created_at"]; 

//           echo '<tbody>
//                   <tr> 
//                       <td>'.$field1name.'</td> 
//                       <td>'.$field2name.'</td> 
//                       <td>'.$field3name.'</td>  
//                   </tr>
//               </tbody>';
//       }
//       $result->free();
//   } 
  ?>

  <body>
    <nav id="desktop-nav">
      <div class="logo"><?php echo $profile_data['name']; ?></div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo"><?php echo $profile_data['name']; ?></div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about " onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img class="about-pic" src="./assets/profile-derek.png" alt="John Doe profile picture"  />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title"><?php echo $profile_data['name']; ?></h1>
        <p class="section__text__p2"><?php echo $profile_data['job']; ?></p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('https://github.com/gitderekz/Images/files/13927768/derek-cv.html.pdf')"
          >
            <!-- onclick="window.open('./assets/resume-example.pdf')"
            onclick="window.open('./assets/derek-cv.html.pdf')" -->
            Download Resume
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="/assets/linkedin.png"
            class="icon"
            onclick="location.href='https://linkedin.com/';"
            alt=""
          />
          <img
            src="/assets/github.png"
            class="icon"
            onclick="location.href='https://github.com/'"
            alt=""
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">&nbsp</p>
      <p class="section__text__p1">&nbsp</p>
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            class="about-pic"
            src="./assets/about-derek.png"
            alt="Profile Picture"
          />
        </div>
        <div class="about-details-container">
          <div class="text-container">
            <p>
                <?php echo $profile_data['description']; ?>
            </p>
          </div>
          <div class="about-containers">
            <div class="details-container">
              <img
                class="icon"
                src="./assets/experience.png"
                alt="Experience icon"
              />
              <h3>Experience</h3>
              <?php 
                    while ($row = $experience_data->fetch_assoc()) {
                        $heading = $row["heading"];
                        $period = $row["period"];
                        $description = $row["description"]; 

                        echo '<p>'.$period.'<br />'.$heading.'</p>';
                    }
              ?>
            </div>
            <div class="details-container">
              <img
                class="icon"
                src="./assets/education.png"
                alt="Experience icon"
              />
              <h3>Education</h3>
              <?php 
                    while ($row = $education_data->fetch_assoc()) {
                        $year = $row["year"];
                        $level = $row["level"];
                        // $description = $row["description"]; 

                        echo '<p>'.$year.' - '.$level.'</p>';
                    }
              ?>
            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        class="icon arrow"
        onclick="location.href='./#experience'"
        alt=""
      />
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Expertise</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Frontend & Backend Development</h2>
            <div class="article-container">
              
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>Python</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>Java</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>Dart</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>PHP</h3>
                  <p>Experienced</p>
                </div>
              </article>

              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>JavaScript</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>TypeScript</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>Material UI</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>PostgreSQL</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>Node JS</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>Express JS</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  class="icon"
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                />
                <div>
                  <h3>Git</h3>
                  <p>Intermediate</p>
                </div>
              </article>

            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">Skills & Development</h2>
            <div class="article-container">

              <?php 
                    while ($row = $expertise_data->fetch_assoc()) {
                        $heading = $row["heading"];
                        $description = $row["description"];
                        $attachment = $row["attachment"];

                        echo 
                        '<article>
                        <img
                          class="icon"
                          src="./assets/checkmark.png"
                          alt="Experience icon"
                        />
                        <div>
                          <h3>'.$heading.'</h3>
                          <p>'.$description.'</p>
                        </div>
                      </article>';
                    }
              ?>

            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        class="icon arrow"
        onclick="location.href='./#projects'"
        alt=""
      />
    </section>
    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">

          <?php 
                while ($row = $portfolio_data->fetch_assoc()) {
                    $heading = $row["heading"];
                    $description = $row["description"];
                    $attachment = $row["attachment"];
                    $link = $row["link"];

                    echo 
                    '<div class="details-container color-container">
                      <div class="article-container">
                        <img
                          class="project-img"
                          src='."$attachment".'
                          alt="project-1"
                        />
                      </div>
                      <h2 class="experience-sub-title project-title">'.$heading.'</h2>
                      <div class="btn-container">
                        <button
                          class="btn btn-color-2 project-btn"
                          onclick="location.href=\'https://github.com/\';"
                        >
                          GitHub
                        </button>
                        <button
                          class="btn btn-color-2 project-btn"
                          onclick="location.href=\''."$link".'\';"
                        >
                          Live Demo
                        </button>
                      </div>
                    </div>';
                }
          ?>


          <div class="details-container color-container">
            <div class="article-container">
              <!-- <img
                class="project-img"
                src="./assets/project-1.png"
                alt="project-1"
              /> -->
              <img
                class="project-img"
                src="./assets/Screenshot_20240113-153711.png"
                alt="project-1"
              />
            </div>
            <h2 class="experience-sub-title project-title">SOKO</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/gitderekz/market/tree/master';"
              >
                GitHub
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/gitderekz/market/tree/master';"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <!-- <img
                class="project-img"
                src="./assets/project-2.png"
                alt="project-1"
              /> -->
              <img
                class="project-img"
                src="./assets/Screenshot_20240113-153650.png"
                alt="project-1"
              />
            </div>
            <h2 class="experience-sub-title project-title">NAMBIE</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/gitderekz/market/tree/master';"
              >
                GitHub
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/gitderekz/market/tree/master';"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <!-- <img
                class="project-img"
                src="./assets/project-3.png"
                alt="project-1"
              /> -->
              <img
                class="project-img"
                src="./assets/Screenshot_20231209-224426.png"
                alt="project-1"
              />
            </div>
            <h2 class="experience-sub-title project-title">SMART IRRIGATION</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/gitderekz/market/tree/master';"
              >
                GitHub
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/gitderekz/market/tree/master';"
              >
                Live Demo
              </button>
            </div>
          </div>

        </div>
      </div>
      <img
        src="./assets/arrow.png"
        class="icon arrow"
        onclick="location.href='./#contact'"
        alt=""
      />
    </section>
    <section id="contact">
      <p class="section__text__p1">Get In Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">

        <div class="contact-info-container">
          <img
            src="./assets/email.png"
            class="icon contact-icon"
            alt="Email icon"
          />
          <p><?php echo '<a href="mailto:\''."$email".'\'">'.$email.'</a></p>'; ?>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/phone.png"
            class="icon contact-icon"
            alt="Email icon"
          />
          <p><a href="#contact"><?php echo $phone; ?></a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/instagram.png"
            class="icon contact-icon"
            alt="Email icon"
          />
          <p><a href="<?php echo $instagram; ?>">Instagram</a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/facebook.png"
            class="icon contact-icon"
            alt="Email icon"
          />
          <p><a href="<?php echo $facebook; ?>">Facebook</a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/linkedin.png"
            class="icon contact-icon"
            alt="Email icon"
          />
          <p><a href="<?php echo $linkedin; ?>">LinkedIn</a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/github.png"
            class="icon contact-icon"
            alt="Email icon"
          />
          <p><a href="<?php echo $github; ?>">Github</a></p>
        </div>
        
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; <?php echo date("Y").' '. $profile_data['name']; ?>. All Rights Reserved</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
