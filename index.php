<!DOCTYPE html>
<html>
<head>
  <title>Student Feedback Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="form-container">
    <h1><i class="fa fa-comments"></i> Feedback Form</h1>
    <form action="add.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Write your feedback..." required></textarea>
      <button type="submit"><i class="fa fa-paper-plane"></i> Submit Feedback</button>
    </form>
  </div>
</body>
</html>
