<html>
    <head>
        <title>contact us</title>
    </head>
    <link rel="stylesheet" href="contact.css">
    <script src="contact.js"></script>
    <form action="con_result.php" method="post">
    <h1>Contact Us</h1>
    <h4><p>Please take a moment to get in touch, we will get back to you shortly.</p></h4>
  
    <div class="column">
      <h3><label >Your Name</label></h3>
      <input type="text" name="name" id="the-name">
  
      <h3><label>Email Address</label></h3>
      <input type="email" name="email" id="the-email">
  
      <h3><label >Phone Number</label></h3>
      <input type="tel" name="phone" id="the-phone">
  
      
      
    </div>
    <div class="column">
      <h3><label >Message</label></h3>
      <textarea name="message" id="the-message"></textarea>
     
      <input type="submit" value="Send Message">
    </div>
  </form>