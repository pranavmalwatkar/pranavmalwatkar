import "./Aboutme.css";

const AboutMe = () => {
  return (
     <>
            <div className="section-header">
              <h2 className="section-title">About Me</h2>
              <div className="title-underline"></div>
            </div>
            <div className="about-content-grid">
              <div className="about-text-content">
                <div className="intro-card">
                  <div className="greeting">
                    <span className="wave">👋</span>
                    <h3>Hello! I'm <span className="name-highlight">Pranav Raju Malwatkar</span></h3>
                  </div>
                  <p className="bio-text">
                    Currently pursuing <span className="highlight">Master of Computer Applications</span> from 
                    P.E.S's Modern College of Engineering, Pune. I'm a passionate full-stack developer 
                    with a strong foundation in modern web technologies and a keen interest in creating 
                    innovative digital solutions.
                  </p>
                  <div className="journey-stats">
                    <div className="stat-item">
                      <div className="stat-number">5+</div>
                      <div className="stat-label">Years Learning</div>
                    </div>
                    <div className="stat-item">
                      <div className="stat-number">15+</div>
                      <div className="stat-label">Projects Built</div>
                    </div>
                    <div className="stat-item">
                      <div className="stat-number">2000+</div>
                      <div className="stat-label">Linkedin Follwers</div>
                    </div>
                  </div>
                  <div className="interests-section">
                    <h4>What Drives Me</h4>
                    <div className="interest-tags">
                      <span className="interest-tag">Problem Solving</span>
                      <span className="interest-tag">Clean Code</span> 
                      <span className="interest-tag">Responsive Designs</span>
                      <span className="interest-tag">Team Collaboration</span>
                    </div>
                  </div>
                </div>
              </div>
              <div className="about-image-section">
                <div className="profile-card">
                  <div className="profile-image-wrapper">
                    <img 
                      src="./assets/images/Pranav_profile_pic-removebg-preview.jpg" 
                      // src="./assets/images/image-05.jpg" 
                      alt="Pranav Raju Malwatkar" 
                      className="profile-image"
                    />
                    <div className="image-border"></div>
                  </div>
                  <div className="card-footer">
                    <h4>Pranav Raju Malwatkar</h4>
                    <p>Full Stack Developer Intern</p>
                    <div className="quick-connect">
                      <button className="connect-btn">Let's Connect</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </>
  )
}

export default AboutMe