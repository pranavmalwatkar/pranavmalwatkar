<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Add this line -->
</head>
<body>
    <!-- navbar --> 
    <nav class="navbar">
        <div class="logo"><a href="#home"><img src="logo/logo.png" alt="Logo"></a></div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#certification">Certification</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="https://drive.google.com/file/d/1wqjC8OoMltvBWxArrWwpcyidkqdREKhm/view?usp=sharing " class="resume-btn" download="Pranav Raju Malwatkar.pdf">Resume</a>
    </nav>
    <!-- Home-->
    <section id="home" class="hero-section">
        <table class="hero-table">
            <tr>
                <td class="hero-image">
                    <img src="images/pranav.jpg" alt="Profile Picture">
                </td>
                <td class="hero-content">
                    <h1>Building a future powered by technology! 🌈🚀</h1>
                    <p>Aspiring IT professional 👨‍💻✨</p>
                    <p>Passionate about coding and creativity! 💻</p>
                    <p>I'm a <span class="highlight">Full Stack Developer</span></p>
                    <div class="icon-l-shape">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5 Icon">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3 Icon">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript Icon">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js Icon">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Icon">
                    </div>
                </td>
            </tr>
        </table>
    </section>
    <!-- About Me -->
    <section id="about" class="about-section">
        <h2>About Me</h2>
        <hr>
        <p>Hello! I'm <strong>Pranav Raju Malwatkar</strong>, pursuing Post Graduation in 
        <strong>Master of Computer Applications</strong> from P.E.S's Modern College of Engineering, Shivajinagar, Pune,  
        and have graduated in <strong>Bachelor of Business Administration in Computer Applications (BBA(CA))</strong> from Indira College of Commerce and Science, Pune.
        With a strong foundation in programming and web development, and a keen interest in building dynamic and responsive 
        web applications, I am excited to begin my professional journey in the tech industry.</p>
        <table class="education-table">
            <thead>
                <tr>
                    <th>Education</th>
                    <th>College</th>
                    <th>Location</th>
                    <th>Marks</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MCA</td>
                    <td>Modern College of Arts, Science and Commerce, Progressive Education Society</td>
                    <td>Pune, India</td>
                    <td>SGPA: 7.41</td>
                    <td>2024-26</td>
                </tr>
                <tr>
                    <td>BBA(CA)</td>
                    <td>Indira college of commerce and science</td>
                    <td>Pune, India</td>
                    <td>CGPA: 8.58</td>
                    <td>2021-24</td>
                </tr>
                <tr>
                    <td>HSC</td>
                    <td>Yeshwant Mahavidyalaya</td>
                    <td>Nanded, India</td>
                    <td>88.83%</td>
                    <td>2020-21</td>
                </tr>
                <tr>
                    <td>SSC</td>
                    <td>Gujarati High School </td>
                    <td>Nanded, India</td>                    
                    <td>71.00%</td>
                    <td>2018-19</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills-section">
        <h2>Technical Proficiency</h2>
        <hr>
        <div class="skills-container">
            <div class="skills-categories">
                <button class="skill-btn" data-category="frontend">Frontend</button>
                <button class="skill-btn" data-category="backend">Backend</button>
                <button class="skill-btn" data-category="database">Database</button>
                <button class="skill-btn" data-category="tools">Tools</button>
            </div>
            <div class="skills-details">
                <div class="skills-category" id="frontend">
                    <h3>Frontend</h3>
                    <div class="skill">
                        <span>HTML5</span>
                        <div class="progress-bar"><div class="progress" style="width: 80%;"></div></div>
                    </div>
                    <div class="skill">
                        <span>CSS3</span>
                        <div class="progress-bar"><div class="progress" style="width: 75%;"></div></div>
                    </div>
                    <div class="skill">
                        <span>JavaScript</span>
                        <div class="progress-bar"><div class="progress" style="width: 60%;"></div></div>
                    </div>
                    <div class="skill">
                        <span>React.js</span>
                        <div class="progress-bar"><div class="progress" style="width: 50%;"></div></div>
                    </div>
                </div>
                <div class="skills-category" id="backend">
                    <h3>Backend</h3>
                    <div class="skill">
                        <span>Node.js</span>
                        <div class="progress-bar"><div class="progress" style="width: 70%;"></div></div>
                    </div>
                    <div class="skill">
                        <span>Express.js</span>
                        <div class="progress-bar"><div class="progress" style="width: 65%;"></div></div>
                    </div>
                </div>
                <div class="skills-category" id="database">
                    <h3>Database</h3>
                    <div class="skill">
                        <span>MySQL</span>
                        <div class="progress-bar"><div class="progress" style="width: 75%;"></div></div>
                    </div>
                    <div class="skill">
                        <span>MongoDB</span>
                        <div class="progress-bar"><div class="progress" style="width: 60%;"></div></div>
                    </div>
                </div>
                <div class="skills-category" id="tools">
                    <h3>Tools</h3>
                    <div class="skill">
                        <span>Git</span>
                        <div class="progress-bar"><div class="progress" style="width: 80%;"></div></div>
                    </div>
                    <div class="skill">
                        <span>VS Code</span>
                        <div class="progress-bar"><div class="progress" style="width: 85%;"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- My Projects Section -->
    <section id="projects" class="projects-section">
        <h2>My Projects</h2>
        <hr>
        <div class="projects-grid">
            <div class="project-card">
                <img src="logo/logo.png" alt="Travel Website">
                <h3>Travlog Website</h3>
                <p>React.js & CSS</p>
                <a href="#" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="College Website Clone">
                <h3>College Website Clone</h3>
                <p>HTML, CSS, React.js</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="Quiz App">
                <h3>Quiz App</h3>
                <p>React.js</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="Cocktail's Bar Webpage">
                <h3>Cocktail's Bar Webpage</h3>
                <p>React.js</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="User Management App">
                <h3>User Management App</h3>
                <p>Node.js, Express.js & MySQL</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="Parallax App">
                <h3>Parallax App</h3>
                <p>HTML, CSS & React.js</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
        </div>
    </section>

    <!-- My Certificate  Section -->
    <section id="certification" class="projects-section">
        <h2>Certification</h2>
        <hr>
        <div class="projects-grid">
            <div class="project-card">
                <img src="logo/logo.png" alt="Travel Website">
                <h3>Travlog Website</h3>
                <p>React.js & CSS</p>
                <a href="#" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="College Website Clone">
                <h3>College Website Clone</h3>
                <p>HTML, CSS, React.js</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="Quiz App">
                <h3>Quiz App</h3>
                <p>React.js</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="Cocktail's Bar Webpage">
                <h3>Cocktail's Bar Webpage</h3>
                <p>React.js</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="User Management App">
                <h3>User Management App</h3>
                <p>Node.js, Express.js & MySQL</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
            <div class="project-card">
                <img src="logo/logo.png" alt="Parallax App">
                <h3>Parallax App</h3>
                <p>HTML, CSS & React.js</p>
                <a href="logo/logo.png" class="demo-btn">Demo</a>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <h2>Contact</h2>
        <hr>
        <div class="contact-container">
            <div class="contact-row">
                <div class="contact-box">
                    <i class="fas fa-envelope contact-icon"></i>
                    <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWsczmVJvMwVZtSGqgNLtWSHdnMTxgFhkGCCmXJkWwsvMPWHsldcfTQxMrRnnshZsBclJLfJV">pranav_malwatkar_mca@moderncoe.edu.in</a>
                </div>
                <div class="contact-box">
                    <i class="fab fa-github contact-icon"></i>
                    <a href="https://github.com/pranavmalwatkar" target="_blank">pranavmalwatkar</a>
                </div>
            </div>
            <div class="contact-row">
                <div class="contact-box">
                    <i class="fab fa-linkedin contact-icon"></i>
                    <a href="https://www.linkedin.com/in/pranav-malwatkar-9834b1239/" target="_blank">pranav-malwatkar-9834b1239/</a>
                </div>
                <div class="contact-box">
                    <i class="fab fa-youtube contact-icon"></i>
                    <a href="https://www.youtube.com/@SkillUpWithPranav" target="_blank">YouTube Channel</a>
                <br></div>
            </div>
        </div>
    </section>
    <br> <!-- Add a line break before the footer -->
<footer class="footer-section">
    <p>&copy; 2023 Pranav Raju Malwatkar. All Rights Reserved.</p>
    <p class="footer-note">This website is created solely for college project purposes and to showcase my talent. It is not intended for professional or commercial use.</p>
</footer>
</body>
</html>
