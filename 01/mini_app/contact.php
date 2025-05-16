<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
   <div class="contact-container">
        <h2>Contact Us</h2>
        <form action="#" method="post">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Your email.." required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write your message here..." rows="6" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2023 My App. All rights reserved.</p>
</body>
</html>