<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifechangers</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="scripts.js"></script>
</head>
<body>
<header class="header">
    <!-- Top Banner -->
    <div class="banner">
      <img src="logo.png" alt="Couple" class="banner-image">
      <div class="banner-content">
        <h1>LifeChangers Movement Ministry International</h1>
        <p>Uplifting Jesus in our generation as we transform lives and society</p>
      </div>
      <!--<div class="search-currency">
        <input type="text" placeholder="Search product" class="search-bar">
        <select class="currency-selector">
          <option value="USD">$ USD</option>
          <option value="EUR">€ EUR</option>
          <option value="UGX" selected>UGX Sh</option>
          <option value="KES">KSh KES</option>
          <option value="GBP">£ GBP</option>
          <option value="NGN">₦ NGN</option>
          <option value="AUD">$ AUD</option>
        </select>
      </div>-->
    </div>

    <!-- Navigation Bar -->
    <nav class="nav-bar">
  <ul class="nav-menu">
    <li><a href="test.php">Home</a></li>
    <li>
      <a href="#">About Us</a>
      <ul class="dropdown">
        <li><a href="message.php">Apostle Ambrose Twongyeirwe</a></li>
        <li><a href="vision.php">Vison and Mission</a></li>
        <li><a href="abt.php">Our Message</a></li>
        <li><a href="#">Departments</a></li>
      </ul>
    </li>
    <li><a href="#">Campus Ministry</a>
    <ul class="dropdown">
        <li><a href="#">Kyambogo Universty Chapter</a></li>
        <li><a href="#">Makerere Universty Chapter</a></li>
        <li><a href="#">Mbarara Chapter</a></li>
        <li><a href="#">High Schools Chapter</a></li>
      </ul>
    </li>
    <li><a href="#">Programs</a></li>
    <li><a href="sermons.php">Sermons</a></li>
    <li><a href="#">Testimonies</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</nav>
  </header>
<main>
<div class="features">
        <div class="feature">
            <img src="dayout.png" alt="100% Authentic">
            <h3 style="color: #580F3C;text-align: center;">OUR MESAGE</h3>
            <p style="text-align: justify;">We Preach the message of God’s Kingdom Faith, Hope and Love; in which Jesus Christ is unveiled as Lord, eternal Son of God and Saviour of mankind. Our message aims to give a believer a full understanding regarding our righteousness, the Father-heart of God, the reality of the new creation, and our place in Christ – our present-day rights, privileges and ministry as we await the rapture of the Church, and the white throne judgement of mankind</p>
        </div>
        <div class="feature">
            <img src="leaders.png" alt="Best Price">
            <h3 style="color: #580F3C; text-align: center;">WHO WE ARE</h3>
            <p style="text-align: justify;">The LCM ministry team members, called the Lifechangers are a special breed raised up by God for an end time, divine purpose of reaching the world in our Generation at any Cost with the wisdom and lifesaving gospel. The Lifechangers beside student’s members consist of professionals -men and women personally inspired to fulfil the mandate of LCM. Our members meet regularly for equipping them to live purpose driven lives, fellowship and bonding for life-changing ministry to the youth in schools, university and higher learning institutions, campuses and beyond.</p>
        </div>
        <div class="feature">
            <img src="bds.png" alt="Convenient Shopping">
            <h3 style="color: #580F3C;text-align: center;">BACKGROUND</h3>
            <p style="text-align: justify;">God commissioned Ambrose Twongyeirwe into apostolic grace to carry His Love, Presence, Healing and Miracle Power through the Holy Spirit to the nations for such a time as this, and founded Lifechangers Movement Ministry (LCM) in 2010 as a campus youth movement to respond to the urgent spiritual and physical needs of thousands of people around the world through missions and gospel crusades, giving utmost ministry priority to the university campuses and the youth, and challenging people to pursue increasing spiritual maturity and development. LCM en visions Generational Champions Uplifting Jesus Transforming Lives and Society. </p>
        </div>
        <div class="feature">
            <img src="yumbe.png" alt="Best Service">
            <h3 style="color: #580F3C;text-align: center;">OUR BELIEFS</h3>
            <p style="text-align: justify;">The doctrinal basis of faith of our ministry are the fundamental truths of Christianity: under which we highly esteem the Holy Bible, and only the Bible, as the authoritative written Word of God, and that it alone is the final authority in determining all Christian doctrinal truths. (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26). We hold that the Church is the Body of Christ, the habitation of God through the Spirit. We believe in the spiritual unity of all believers in our Lord Jesus Christ without respect of persons and without discrimination on account of race, colour, nation, social position or otherwise. (Ephesians 1:22, 2:19-22; Hebrews 12:23; John 17:11, 20-23). </p>
        </div>
    </div>
    
      <section id="contact">
            <h2>Contact Us</h2>
            <form action="contact.php" method="POST" id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
    
        <p>&copy; 2025 Lifechangers Movement Ministry. All rights reserved.</p>
    </footer>
</body>

<style>
  body, h1, p, ul, li, a {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    color: #333;
    background: white;
}
.header {
  width: 100%;
}

/* Banner Section */
.banner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #580F3C;
  color: #fff;
  padding: 20px 30px;
  position: relative;
}

.banner-image {
  width: 30%;
  height: 150px;
  object-fit: cover;
}

.banner-content {
  flex: 1;
  text-align: center;
}

.banner-content h1 {
  font-size: 2rem;
  font-family: "Times New Roman", cursive;
}

.banner-content p {
  font-size: 1rem;
  margin-top: 5px;
}


.nav-menu {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
  }

  .nav-menu li {
    position: relative; /* Required for positioning dropdown */
    margin: 0 15px;
  }

  .nav-menu a {
    color: white;
    text-decoration: none;
    padding: 8px 12px;
    display: block;
  }

  .nav-menu a:hover {
    background-color: #555;
    border-radius: 4px;
  }

  /* Dropdown menu styles */
  .dropdown {
    display: none; /* Hide dropdown by default */
    position: absolute;
    top: 100%; /* Position below the parent menu item */
    left: 0;
    background-color: #CE589C;
    list-style: none;
    padding: 20px;
    min-width: 300px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 100;
  }

  .dropdown li {
    margin: 0;
  }

  .dropdown li a {
    padding: 8px 15px;
    color: white;
    text-decoration: none;
  }

  .dropdown li a:hover {
    background-color: #800080;
  }

  /* Show dropdown on hover */
  .nav-menu li:hover .dropdown {
    display: block;
  }

.search-currency {
  display: flex;
  align-items: center;
  gap: 10px;
}

.search-bar {
  padding: 5px;
  font-size: 1rem;
  border: none;
  border-radius: 5px;
  outline: none;
}



/* Navigation Bar */
.nav-bar {
  background-color: #CE589C;
  text-align: center;
  padding: 10px 0;
}

.nav-menu {
  list-style: none;
  display: flex;
  justify-content: center;
  gap: 15px;
}

.nav-menu li {
  display: inline;
}

.nav-menu a {
  text-decoration: none;
  color: #fff;
  font-size: 1rem;
  padding: 5px 15px;
  background-color: #580F3C;
  border: 2px solid white;
  border-radius: 10px;
  transition: all 0.3s;
}

.nav-menu a:hover {
  background-color: #800080;
  color: #fff;
}
@media (max-width: 768px) {
  .banner {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .search-currency {
    flex-direction: column;
    gap: 5px;
  }

  .nav-menu {
    flex-direction: column;
    gap: 10px;
  }
}

.hero {
    background: #f4f4f4;
    padding: 5px;
    text-align: center;
    height: 50px;
}
.features {
            display: flex;
            justify-content: space-around;
            padding: 40px 20px;
            background-color: white;
        }

        .feature {
            text-align: center;
            width: 20%;
        }

        .feature img {
            width: 120px;
            height: 70px;
            margin-bottom: 15px;
            
        }

        .feature h3 {
            font-size: 18px;
            color: teal;
            margin: 0;
        }

        .feature p {
            font-size: 16px;
            margin-top: 5px;
        }
section {
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
}

form {
    display: flex;
    flex-direction: column;
}

form label {
    margin-top: 10px;
}

form input, form textarea, form button {
    margin-top: 5px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.container {
  display: flex;
  justify-content: space-between;
  padding: 20px;
  max-width: 1200px;
  margin: auto;
}

.section {
  flex: 1 1 45%;
  background: white;
  padding: 20px;
  border: 1px solid #ddd;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
}

.section h2 {
  font-size: 20px;
  color: #5a5a5a;
  margin-bottom: 15px;
}

.event-list, .sermon-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.event-list li, .sermon-list li {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0;
  border-bottom: 1px solid #ddd;
}

.event-list li:last-child, .sermon-list li:last-child {
  border-bottom: none;
}

.event-list li span, .sermon-list li div {
  font-size: 14px;
}


.btn {
  display: inline-block;
  margin-top: 15px;
  padding: 10px 20px;
  background-color: #d6b892;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 14px;
  cursor: pointer;
}

.btn:hover {
  background-color: #c1a072;
}

.articles-section {
  display: flex;
  justify-content: center;
  gap: 20px;
  padding: 40px;
  background-color: white;
}

.article-card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  max-width: 300px;
  text-align: center;
  transition: transform 0.3s ease;
}

.article-card:hover {
  transform: scale(1.05);
}

.article-card img {
  width: 100%;
  height: auto;
}

.article-card h3 {
  font-size: 1.2rem;
  margin: 15px 0;
  color: #333;
}

.article-card p {
  font-size: 0.9rem;
  color: #666;
  padding: 0 15px;
  margin-bottom: 20px;
}

.read-btn {
  background-color: #580F3C;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-weight: bold;
  cursor: pointer;
  margin-bottom: 20px;
  transition: background-color 0.3s ease;
}

.read-btn:hover {
  background-color: #ffa500;
}


.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 20px;
}
/* General container styles */
.container {
      display: flex;
      gap: 20px;
      padding: 20px;
      background-color: #f9f9f9;
    }

    /* Left and Right column styling */
    .left-column, .right-column {
      flex: 1;
      background: #fff;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 20px;
    }

    /* Section headings */
    .section-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    /* Table styles */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 8px 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      font-weight: bold;
    }

    /* Event buttons */
    .btn {
      display: inline-block;
      padding: 10px 15px;
      background-color: #4b1248;
      color: white;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
      font-size: 14px;
    }

    .btn:hover {
      background-color: #6b166a;
    }

    /* Sermon list styles */
    .sermon {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .sermon img {
      width: 50px;
      height: 50px;
      border-radius: 5px;
      object-fit: cover;
      margin-right: 10px;
    }

    .sermon-details {
      display: flex;
      flex-direction: column;
    }

    .sermon-title {
      font-weight: bold;
      color: #4b1248;
      text-decoration: none;
      margin-bottom: 4px;
    }

    .sermon-title:hover {
      text-decoration: underline;
    }

    .sermon-author {
      font-size: 14px;
      color: #666;
    }

.contact-details {
  flex: 1;
  max-width: 60%;
}

.contact-details h2 {
  background-color: #580F3C;
  color: #fff;
  padding: 10px;
  font-size: 1.5rem;
}

.contact {
  margin-bottom: 20px;
}

.contact h3 {
  font-size: 1.2rem;
  margin-bottom: 5px;
}

.contact p {
  margin: 5px 0;
  line-height: 1.5;
}

.contact a {
  color: #CE589C;
  text-decoration: none;
}

.contact a:hover {
  text-decoration: underline;
}

.latest-posts {
  flex: 1;
  max-width: 35%;
}

.latest-posts h2 {
  background-color: #580F3C;
  color: #fff;
  padding: 10px;
  font-size: 1.5rem;
}

.post {
  margin-bottom: 20px;
}

.post-category {
  font-size: 0.9rem;
  color: #fff;
  background-color: #580F3C;
  display: inline-block;
  padding: 2px 6px;
  margin-bottom: 5px;
  border-radius: 4px;
}

.post h3 {
  font-size: 1rem;
  margin: 5px 0;
  color: #CE589C;
}

.post time {
  font-size: 0.8rem;
  color: #999;
}

.post p {
  font-size: 0.9rem;
  color: #555;
  margin-top: 5px;
  line-height: 1.5;
}
@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  .contact-details, .latest-posts {
    max-width: 100%;
  }
}
@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  .contact-details, .latest-posts {
    max-width: 100%;
  }
}

footer {
    color: white;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
}
footer {
  background: #CE589C;
  padding: 20px 30px;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-start;
  color: white;
}

.privacy-section {
  flex: 1 1 40%;
  max-width: 40%;
  margin-right: 20px;
}

.privacy-section p {
  line-height: 1.6;
  font-size: 14px;
}

.privacy-section a {
  color: #CE589C;
  text-decoration: none;
}

.links-section {
  flex: 1 1 30%;
  max-width: 30%;
}

.links-section ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.links-section li {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
}

.links-section span {
  color: #00aaff;
}

.cta-section {
  flex: 1 1 30%;
  max-width: 30%;
}

.cta-section p {
  font-size: 14px;
  line-height: 1.6;
}

.cta-section a {
  color: #fff;
  background-color: #CE589C;
  padding: 5px 10px;
  text-decoration: none;
  border-radius: 3px;
  font-weight: bold;
}
</style>

<script>
let currentIndex = 0;
let isVideoPlaying = false;

function showSlide(index) {
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;

  // Loop around if index goes out of bounds
  if (index >= totalSlides) currentIndex = 0;
  else if (index < 0) currentIndex = totalSlides - 1;
  else currentIndex = index;

  // Move the slider to show the current slide
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;

  // Handle video playback
  const currentSlide = slides[currentIndex];
  const video = currentSlide.querySelector('video');
  if (video) {
    isVideoPlaying = true; // Set flag when video starts
    video.currentTime = 0; // Reset video to the beginning
    video.play(); // Play the video
    video.addEventListener('ended', () => {
      isVideoPlaying = false; // Reset flag when video ends
      nextSlide(); // Move to the next slide
    });
  } else {
    isVideoPlaying = false; // Reset flag if not a video
  }
}

function nextSlide() {
  if (!isVideoPlaying) { // Only move to the next slide if no video is playing
    showSlide(currentIndex + 1);
  }
}

function prevSlide() {
  if (!isVideoPlaying) { // Prevent moving backward if a video is playing
    showSlide(currentIndex - 1);
  }
}

// Optional: Automatically move to the next slide every 5 seconds if not a video
setInterval(() => {
  if (!isVideoPlaying) {
    nextSlide();
  }
}, 5000);
</script>