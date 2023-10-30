<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vintage Victorian Telescope - Join The Waitlist!</title>
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
    <div class="container"> <!-- The main container -->
      <div class="slider">
        <figure class="indexFigure">
          <!-- Slider Image 1 -->
          <img src="images/vt1.png" alt="image of an English Victorian Telescope" height="500px" width="400vw"
            class="img1">
          <figcaption class="cap1">English Victorian gold and silver telescope on an adjustable mahogany tripod base.
            <strong>$5400 <small>(CAD)</small></strong>
          </figcaption>

          <!-- Slider Image 2 -->
          <img src="images/vt2.jpg" alt="image of an English Victorian Telescope" height="500px" width="400vw"
            class="img2">
          <figcaption class="cap2">Gothic Victorian nickel-silver and brass telescope on mahogany double leg base.
            <strong>$12,400 <small>(CAD)</small></strong>
          </figcaption>

          <!-- Slider Image 3 -->
          <img src="images/vt3.webp" alt="image of an English Victorian Telescope" height="500px" width="400vw"
            class="img3">
          <figcaption class="cap3">Marine London. 1915 Victorian pure gold telescope on mahogany triple leg base.
            <strong>$21,199 <small>(CAD)</small></strong>
          </figcaption>
        </figure>
      </div>

      <!--           A div that stores the images and information about victorian, mahogagy, etc as a main container -->
      <div class="card">
        <div class="cards">
          <div class="card-item custom-card">
            <img src="images/v-definition.jpg" alt="An image of ancient Victorian furniture" width="44%"" class="
              borderworthy-img">
            <article>
              <h2 class="my-2">Victorian</h2>
              <p>A period in English furniture during the reign of Queen Victoria 1837-1901. Consists of a resurrection
                of many previous periods and revival imitations including: Gothic, Tudor, Elizabethan, Rococo, and
                Neoclassic style. This period had a focus on dark woods, heavy fabrics, embellishment, engagement with
                newly developed imitation materials that were facilitated by the Industrial Revolution, and a tendency
                towards eclecticism.Period in English furniture during the reign of Queen Victoria 1837-1901. Consists
                of a resurrection of many previous periods and revival imitations including: Gothic, Tudor, Elizabethan,
                Rococo, and Neoclassic style. This period had a focus on dark woods, heavy fabrics, embellishment,
                engagement with newly developed imitation materials that were facilitated by the Industrial Revolution,
                and a tendency towards eclecticism.</p>
            </article>
          </div>
        </div>

        <div class="cards special-control custom-card">
          <div class="card-item-2 ">
            <img src="images/m-definition.jpg" alt="An image of mahogany" width="44%">
            <article>
              <h2 class="my-3">Mahogany</h2>
              <p>Mahogany is a straight grained hard wood with silky texture, ranging in color from dark brown to red.
                Furniture made from mahogany became popular in Britain from Mid-18th Century on, spreading throughout
                Europe.</p>
            </article>
          </div>
        </div>

        <div class="cards custom-card subscribe-tree-div">
          <div class="card-item-3 ">
            <img src="images/tree.jpg" alt="An image of a plant" width="40%" class="borderworthy-img">
            <article class="subscribe-tree-article">
              <h2 class="my-4">Why Us?</h2>
              <section class="p1">
                <p>We plant a tree for every sign-up, and another fifty for every purchase.</p>
              </section>

              <section class="p2">
                <p>Join us for inspiration & the first look at new arrivals.</p>
              </section>

              <div>
                <input type="email" name="subscribe-box" id="subscribe-box" placeholder="noreply@subscribe.tvg.com">
                <button class="subscribe-btn" id="subscribe-btn">SUBMIT</button>
              </div>

              <div id="popup" class="popup">
                <p class="no-width">Thank you for subscribing!</p>
                <button id="close-btn" class="close-btn">Close</button>
              </div>

              <section class="p3">
                <p>We respect your privacy.</p>
              </section>
            </article>
          </div>
        </div>
  </main>

  <!-- A footer with a class to be a flexbox so that content can be centered -->
  <footer class="flex-all-center">
    <p>Copyright &copy; The Victorian Group. All Rights Reserved.</p>
  </footer>

</body>

</html>