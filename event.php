<?php
session_start(); // Start the session at the beginning
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Event Management</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
<body>
  <!-- Navbar -->
  <nav>
    <div class="logo">EventMania</div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#organizers">Organizers</a></li>
      <li><a href="#book">Book</a></li>
      <?php if (isset($_SESSION['username'])): ?>
        <li class="welcome-msg"><a href="#"><i class="fas fa-user"></i> <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      <?php else: ?>
        <li><a href="lo.html"><i class="fas fa-sign-in-alt"></i> Login</a></li>
      <?php endif; ?>
    </ul>
  </nav>

   <!-- Home Section -->
   <section id="home">
    <h1>Welcome to EventMania</h1>
    <p>Your one-stop solution for managing events!</p>
   

    <div class="gallery">
          <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94" alt="Corporate Event">
          <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3" alt="Wedding Ceremony">
          <img src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce" alt="Birthday Party">
          <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754" alt="Conference">
        
          <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf" alt="Catering Service">
          <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622" alt="DJ Night">
          <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" alt="Diwali Celebration">
          <img src="https://images.unsplash.com/photo-1540574163026-643ea20ade25" alt="Cultural Dance">
          <img src="https://images.unsplash.com/photo-1567942712661-82b9b407abbf" alt="Wedding Stage">
      </div>

  </section>
  <div class="container">
    <ce>
        <h1>About Us</h1>
        
        <p>At Eventify, we specialize in creating unforgettable experiences. Our dedicated team of event planners is committed to bringing your vision to life, whether it's a corporate event, wedding, or private party. We handle every detail, ensuring a seamless and stress-free experience for you and your guests.</p>
        </center>
        <div class="features">
            <div class="feature">
                <i class="fas fa-calendar-alt"></i>
                <h2>Expert Planning</h2>
                <p>Our experienced planners work closely with you to understand your needs and preferences.</p>
            </div>
            <div class="feature">
                <i class="fas fa-lightbulb"></i>
                <h2>Creative Solutions</h2>
                <p>We offer innovative ideas and creative solutions to make your event stand out.</p>
            </div>
            <div class="feature">
                <i class="fas fa-concierge-bell"></i>
                <h2>Comprehensive Services</h2>
                <p>From venue selection to catering, we provide a full range of services to cover all aspects of your event.</p>
            </div>
        </div>
    </div>

  </section>

  
  <!-- Services Section -->
  <section id="services">
    <h2>Our Services</h2>
    <div class="services-container">
      <div class="service-card">
        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Event Planning">
        <h3>Event Planning</h3>
        <p>We plan and execute events tailored to your needs.</p>
      </div>
      <div class="service-card">
        <img src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Venue Booking">
        <h3>Venue Booking</h3>
        <p>Find the perfect venue for your event.</p>
      </div>
      <div class="service-card">
        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Catering">
        <h3>Catering</h3>
        <p>Delicious catering options for all occasions.</p>
      </div>
    </div>
  </section>
 <!-- Pricing Section -->
 <section id="pricing">
    <center>
        <h2>Our Packages</h2>
    </center>
    <div class="pricing-grid">
        <div class="pricing-card">
            <img src="img4.jpg" alt="Wedding Package">
            <h3>Wedding Package</h3>
            <p class="price">Rs.50,000</p>
            <button class="book-now">Book Now</button>
        </div>
        <div class="pricing-card">
            <img src="img2.jpg" alt="Birthday Package">
            <h3>Birthday Package</h3>
            <p class="price">Rs.1000</p>
            <button class="book-now">Book Now</button>
        </div>
        <div class="pricing-card">
        <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754" alt="Conference">
            <h3>Meeting Package</h3>
            <p class="price">Rs.1500</p>
            <button class="book-now">Book Now</button>
        </div>
        <div class="pricing-card">
        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Catering">
            <h3>Catering Package</h3>
            <p class="price">Rs.20,000</p>
            <button class="book-now">Book Now</button>
        </div>
    </div>
</section>
           
                <!-- Booking Modal -->
<div id="bookingModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Book Your Event</h2>
    <form id="bookingForm" action="book_event.php" method="POST">
      <label for="eventName">Event Name:</label>
      <input type="text" id="eventName" name="eventName" required>

      <label for="eventType">Type of Event:</label>
      <select id="eventType" name="eventType" required>
        <option value="Wedding">Wedding</option>
        <option value="Birthday">Birthday</option>
        <option value="Meeting">Meeting</option>
        <option value="Catering">Catering</option>
      </select>

      <label for="eventDate">Event Date:</label>
      <input type="date" id="eventDate" name="eventDate" required>

      <label for="eventHall">Event Hall:</label>
      <select id="eventHall" name="eventHall" required>
        <option value="Grand Ballroom">Grand Ballroom</option>
        <option value="Royal Garden">Royal Garden</option>
        <option value="Skyline Terrace">Skyline Terrace</option>
        <option value="Ocean View Hall">Ocean View Hall</option>
      </select>

      <label for="userName">Your Name:</label>
      <input type="text" id="userName" name="userName" required>

      <label for="userEmail">Your Email:</label>
      <input type="email" id="userEmail" name="userEmail" required>

      <label for="additionalMessage">Additional Message:</label>
      <textarea id="additionalMessage" name="additionalMessage" rows="4" placeholder="Any special requests or notes..."></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>
</div>

   <!-- Footer -->
   <footer>
  <div class="content">
    <div class="left box">
      <div class="upper">
        <div class="topic">About us</div>
        <p>We specialize in organizing and managing events of all sizes. From corporate events to weddings, we've got you covered.</p>
      </div>
      <div class="lower">
        <div class="topic">Contact us</div>
        <div class="phone">
          <a href="#"><i class="fas fa-phone-volume"></i>+91 9626628589</a>
        </div>
        <div class="email">
          <a href="#"><i class="fas fa-envelope"></i>eventmaina@gmail.com</a>
        </div>
      </div>
    </div>
    <div class="middle box">
      <div class="topic">Our Services</div>
      <div><a href="#">Marriage services</a></div>
      <div><a href="#">Brithday events</a></div>
      <div><a href="#">Office Meetings</a></div>
      <div><a href="#">School programs</a></div>
      <div><a href="#">Romantic surprise prizes</a></div>
      <div><a href="#">Cultural events</a></div>
    </div>
    <div class="right box">
      <div class="topic">Subscribe us</div>
      <form action="#">
        <input type="text" placeholder="Enter email address">
        <input type="submit" name="" value="Send">
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </form>
    </div>
  </div>
  <div class="bottom">
    <p>Copyright © 2025 <a href="#">EventMania</a> All rights reserved</p>
  </div>
</footer>

  <script src="script.js"></script>
</body>
</html>


 