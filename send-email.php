<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Victorian Group - Feedback Sent! </title>
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
      <div class="cards aboutCards sendEmailCards">
        <section>
          <form action="send-email.php" method="get" class="sendEmailForm">
            <H2>Feedback Sent!</H2>
            <svg aria-hidden="true" width="285" height="183" viewBox="0 0 285 183" fill="none"><path d="M154.522 174.188C180.887 174.188 202.26 152.816 202.26 126.451C202.26 100.087 180.887 78.7139 154.522 78.7139C128.158 78.7139 106.785 100.087 106.785 126.451C106.785 152.816 128.158 174.188 154.522 174.188Z" fill="#FFD84E"></path><path d="M142.271 107.088C145.405 107.088 147.946 104.547 147.946 101.413C147.946 98.2789 145.405 95.7383 142.271 95.7383C139.137 95.7383 136.597 98.2789 136.597 101.413C136.597 104.547 139.137 107.088 142.271 107.088Z" fill="#3E3582"></path><path d="M167.062 107.088C170.196 107.088 172.737 104.547 172.737 101.413C172.737 98.2789 170.196 95.7383 167.062 95.7383C163.928 95.7383 161.388 98.2789 161.388 101.413C161.388 104.547 163.928 107.088 167.062 107.088Z" fill="#3E3582"></path><path d="M133.356 122.741C136.71 133.487 145.66 139.016 154.694 139.016C163.729 139.016 172.676 133.487 176.033 122.741C176.684 120.654 175.772 118.338 173.995 117.572C172.219 116.807 137.169 116.807 135.392 117.572C133.617 118.338 132.704 120.654 133.356 122.741Z" fill="#3E3582"></path><path d="M169.426 133.34C166.632 130.152 161.116 127.981 154.769 127.981C148.37 127.981 142.817 130.186 140.045 133.417C144.166 137.129 149.415 139.016 154.693 139.016C160.008 139.016 165.292 137.103 169.426 133.34Z" fill="#F64C72"></path><path d="M72.0434 107.58C71.9989 107.896 71.7913 108.151 71.4978 108.255C71.202 108.357 70.8835 108.276 70.6501 108.073C65.7614 103.305 46.9908 85.1625 42.0513 80.3991C41.3762 79.7362 40.3115 79.7014 39.5961 80.3125C37.562 82.0397 33.6238 85.3988 32.1863 86.617C32.0652 86.7178 31.896 86.7565 31.7315 86.7299C31.5797 86.6763 31.4507 86.5676 31.4042 86.4042C30.529 83.8507 27.4198 74.8531 26.3537 71.7115C26.1192 71.0641 25.538 70.5916 24.8475 70.5002C20.8852 69.9876 7.5121 68.3089 1.80728 67.5754C1.44569 67.5374 1.15508 67.2674 1.08808 66.9214C1.03586 66.5499 1.20564 66.2039 1.5368 66.0196C13.9556 59.6034 71.7546 29.7195 81.5079 24.6659C81.77 24.5441 82.098 24.5625 82.3485 24.7412C82.6137 24.8943 82.7394 25.206 82.6927 25.5204C81.3251 36.0641 73.4447 96.8169 72.0434 107.58Z" fill="#61D286"></path><path d="M261.472 181.89C261.446 182.077 261.322 182.229 261.148 182.29C260.973 182.351 260.784 182.303 260.645 182.182C257.745 179.353 246.61 168.591 243.68 165.765C243.279 165.372 242.648 165.351 242.223 165.714C241.017 166.739 238.68 168.731 237.828 169.454C237.756 169.514 237.655 169.537 237.558 169.521C237.468 169.489 237.391 169.425 237.364 169.328C236.844 167.813 235 162.475 234.368 160.612C234.228 160.227 233.884 159.947 233.474 159.893C231.123 159.589 223.19 158.593 219.806 158.158C219.591 158.135 219.419 157.975 219.379 157.77C219.348 157.55 219.449 157.344 219.645 157.235C227.013 153.429 261.301 135.701 267.086 132.703C267.242 132.631 267.437 132.641 267.585 132.747C267.742 132.838 267.817 133.023 267.789 133.21C266.978 139.465 262.303 175.505 261.472 181.89Z" fill="#61D286"></path></svg>
    <?php      
      $name = $_GET['name'];
      $message = $_GET['message']; 
      $email = $_GET['email'];
      // echo($value);
      echo('<p>Thank you for your invaluable feedback ' .$name. '!<br> We will review it and reach out at ' .$email. '.</p>');
    ?>    
      </form>
    </section>
  </div>
</main>
         <footer class="flex-all-center">
    <p>Copyright &copy; The Victorian Group. All Rights Reserved.</p>
</footer>
  </body>
</html>