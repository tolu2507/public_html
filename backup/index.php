<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="infin8hub">
    <meta name="description" content="">
    <title>infin8hub</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="index.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <meta name="referrer" content="origin">
        
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Alata:400">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page-title="Home" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <section class="u-align-center u-clearfix u-container-align-center u-image u-section-1" id="sec-939e" data-image-width="1980" data-image-height="1200">
      
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div><img src="images/default-logo.png" /></div>
        <h5 class="u-custom-font u-text u-text-body-alt-color u-text-1">Our Website is</h5>
        <h1 class="u-custom-font u-text u-text-body-alt-color u-text-2">Coming Soon</h1>
        <p class="u-text u-text-body-alt-color u-text-3">Our website is under construction, but we are ready to go! Want to know more about us, tell us about your project or just to say hello? Drop us a line and we will get back as soon as possible.</p>
        <div class="u-form u-form-1">
          <form action="/" method="post" class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form" style="padding: 10px" source="email" name="form">
            <div class="u-form-group u-form-name">
              <label for="name-92ad" class="u-form-control-hidden u-label">Name</label>
              <input type="text" placeholder="Enter your name" id="name-92ad" name="name" class="u-border-white u-input u-input-rectangle u-radius-3" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-92ad" class="u-form-control-hidden u-label">Email</label>
              <input type="email" placeholder="Enter email address" id="email-92ad" name="email" class="u-border-white u-input u-input-rectangle u-radius-3" required="">
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <input type="submit" value="Submit"  style="padding-left: 15px;padding-right: 15px;" class="u-border-1 u-border-palette-1-base u-btn u-btn-round u-btn-submit u-button-style u-palette-1-base u-radius-3 u-btn-1">
            </div>

            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $name = htmlspecialchars($_POST["name"]);
                  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

                  if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $to = "info@infin8hub.com";
                      $subject = "Subscriber at infin8hub.com";
                      $message = "Name: $name\nEmail: $email";
                      $headers = "From: $email\r\nReply-To: $email\r\n";
                      
                      if (mail($to, $subject, $message, $headers)) {
                          ?>
                            <div class="u-form-send-message u-form-send-success" style="display:block;"> Thank you! Your message has been sent. </div>
                          <?php
                      } else {
                          ?>
                            <div class="u-form-send-error u-form-send-message" style="display:block;"> Unable to send your message. Please fix errors then try again. </div>    
                          <?php
                      }
                  } else {
                    ?>
                          <div class="u-form-send-error u-form-send-message"> Invalid input. Please check your details and try again. </div> 
                    <?php
                  }
              } else {
                  header("Location: index.php");
                  exit();
              }
            ?>
            
          </form>
        </div>
      </div>
    </section>
    
</body></html>