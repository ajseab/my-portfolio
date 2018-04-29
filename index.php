<?php include("header.php"); ?>

  <section class="section-about-me">
    <div class="row">
      <div class="selfie-container flex-container">
        <img src="img/my-face.jpg" alt="Avery">
      </div>
      <div class="selfie-caption-container flex-container">
        <div class="selfie-caption">aspiring web developer</div>
        <div class="selfie-caption">student based in Clovis, CA</div>
        <div class="selfie-caption">music and coffee enthusiast</div>
      </div>
      <p class="about-me-copy">Hi! My name is Avery Seabolt. I am a senior attending Clovis High School (CHS) and the <a href="https://cart.org" target="_blank">Center for Advanced Research and Technology (CART)</a>. I have taken many advanced and practical science and math courses
        at these two schools including AP Chemistry, AP Statistics, Robotics and Electronics, and Physics. I am currently enrolled in my most exciting class&mdash;Web Application Development at CART.</p>
      <p class="about-me-copy">In my web application development class, I have learned practical skills in HTML, CSS, JavaScript, and responsive design. Although I had web technologies experience prior to taking this class, it has given me the opportunity to learn much more than
        I would have on my own and has put me in the position to collaborate on <a href="#projects" class="js--scroll-to-work">projects</a> with some of my like-minded peers.</p>
      <p class="about-me-copy">If you were to meet me in person, likely the first thing I’d ask you is what your favorite music genre is, or if you play any instruments. This is because I am very passionate about music and the way it allows us to connect with each other in ways
        other mediums aren’t capable of doing. My favorite genre right now is indie pop/rock and recently I’ve been listening to Honne and Petit Biscuit.</p>
      <p class="about-me-copy">If you need a website built or just want to chat about music, feel free to <a href="#contact" class="js--scroll-to-contact">contact me</a>.</p>
      <p class="about-me-copy"><a href="https://open.spotify.com/user/sea-bolt" target="_blank">Check out</a> my playlists and see what I’ve been listening to.</p>
      <p class="about-me-copy"><a href="https://www.linkedin.com/in/avery-seabolt/" target="_blank">Read</a> about my accomplishments and experience.</p>
      <p class="about-me-copy thank-you">Thanks for visiting my portfolio!</p>
    </div>
  </section>

  <section class="section-work">
    <div class="row">
      <ul class="work-tabs">
        <li data-tab="tab-projects" class="current">projects</li>
        <li data-tab="tab-writing">writing</li>
        <li data-tab="tab-other">other</li>
      </ul>
    </div>

    <div class="tab-container row">
      <div id="tab-projects" class="tab-content current">
        <div class="row flex-container">
          <div class="span-1-of-2"><img src="img/digital-ethics.PNG" alt="digital ethics website"></div>
          <div class="span-1-of-2 flex-container">
            <div class="copy-container">
              <h3>digital ethics.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ea reprehenderit aperiam, cum vel? Quam nemo, mollitia consectetur! Veniam impedit vel aliquid quia optio magni blanditiis, error voluptates est asperiores?</p>
            </div>
          </div>
        </div>
        <div class="row flex-container">
          <div class="span-1-of-2"><img src="img/climate-change.PNG" alt="climate change website"></div>
          <div class="span-1-of-2 flex-container">
            <div class="copy-container">
              <h3>climate change.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nisi nesciunt corporis aspernatur incidunt a neque autem. Est doloremque, similique at iure illo tempora veritatis quasi expedita ratione culpa nemo!</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-container row">
      <div id="tab-writing" class="tab-content">
        <div class="row flex-container">
          <div class="span-1-of-2"><img src="img/cyber-bullying.PNG" alt="cyber bullying paper"></div>
          <div class="span-1-of-2 flex-container">
            <div class="copy-container">
              <h3>cyber bullying.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ea reprehenderit aperiam, cum vel? Quam nemo, mollitia consectetur! Veniam impedit vel aliquid quia optio magni blanditiis, error voluptates est asperiores?</p>
            </div>
          </div>
        </div>
        <div class="row flex-container">
          <div class="span-1-of-2"><img src="img/michelson-morley.PNG" alt="michelson and morley paper"></div>
          <div class="span-1-of-2 flex-container">
            <div class="copy-container">
              <h3>michelson and morley.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nisi nesciunt corporis aspernatur incidunt a neque autem. Est doloremque, similique at iure illo tempora veritatis quasi expedita ratione culpa nemo!</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-container row">
      <div id="tab-other" class="tab-content">
        <div class="row flex-container">
          <div class="span-1-of-2"><img src="img/3d-printer-infographic.png" alt="3d printer infographic" class="infographic"></div>
          <div class="span-1-of-2 flex-container">
            <div class="copy-container">
              <h3>3d printer.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ea reprehenderit aperiam, cum vel? Quam nemo, mollitia consectetur! Veniam impedit vel aliquid quia optio magni blanditiis, error voluptates est asperiores?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-resume">
    <div class="row">
      <div class="row align-center">
        <a href="documents/avery-seabolt-resume.pdf" id="resume-download" download><i class="ion-ios-cloud-download-outline"></i>download resume</a>
      </div>
    </div>
  </section>

  <section class="section-contact">
    <div class="row">
      <h2>contact me.</h2>
      <div class="flex-container contact-container">
        <form action="contact-form.php" class="contact-form">
          <label for="name">*name:</label>
          <input type="text" name="name">
          <label for="email">*email:</label>
          <input type="email" name="email">
          <label for="message">*message:</label>
          <textarea name="message"></textarea>
          <input type="submit" name="submit" value="send">
        </form>
      </div>
    </div>
  </section>

<?php include("footer.php"); ?>
