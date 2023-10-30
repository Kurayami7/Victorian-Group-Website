<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vintage Victorian Telescope - Reach Us!</title>
  <link rel="shortcut icon" href="images/favicon.jfif" type="image/x-icon" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="css/responsive.css">
  <script src="javascript/script.js" defer></script> <!-- Download script while parsing html -->
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="Victorian Telescope Logo">
                <!-- width="150px" -->
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="search">
                <input type="text" name="search-box" id="search-box">
                <button class="btn" id="btn">Search</button>
            </div>
        </nav>
    </header>
    <main> 
      <div class="cards aboutCards contactSectionControl">
<!--         Section 1 -->
    		<section class="aboutSection">
    			<h1 class="aboutHeading">Contact Us!</h1>
          <figure>
            <img src="images/contact.jpeg" alt="image of The Victorian Groups' Office" class="contactImg">
            <figcaption class="contactFC">
              <p><strong class="strongLeft">TVG Toronto</strong>
                <br>2868 King Street,
                <br>TVG Drive, ON M1L 2Z9
                </p>
    
              <p><strong class="strongLeft">HOURS</strong>
                <br>Monday - Friday, 6am-5pm
              </p> 
            </figcaption>
          </figure>
        </section>

<!--        Section 2 -->
        <section>
          <p class="contactP">If you have any questions or feedback for us, please do not hesitate to reach us. We are always happy to hear from you and help in any way we can.</p>
          <div class="contactFormDiv">
      			<form method="get" action="send-email.php" class="contactForm">
              <label for="name">Name*</label>
      				<input type="text" id="name" name="name" required>
      				
      				<label for="email">Email*</label>
      				<input type="email" id="email" name="email" required>
      
      				<label for="subject">Subject*</label>
      				<input type="text" id="subject" name="subject" required>
      
      				<label for="message">Message*</label>
      				<input type="textarea" id="message" name="message"  required>
      				<button type="submit" class="contactSubmitButton">Send</button>
      			</form>
         </div>
        </section>
      </div>
    </main>
</body>
  
<footer class="flex-all-center">
    <p>Copyright &copy; The Victorian Group. All Rights Reserved.</p>
</footer>
</html>

<!-- ***2 sections where the display is flexed is the latest idea*** -->