<?php
include 'db.php';
$sql = "SELECT * FROM feedback ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>All Feedback</title>
  <style>
    body { font-family: Arial; padding: 40px; background: #f9f9f9; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 12px; text-align: left; }
    th { background-color: #007bff; color: white; }
    h2 { color: #333; }
  </style>
</head>
<body>
  <h2>Submitted Feedback</h2>

  <?php if ($result->num_rows > 0): ?>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Submitted At</th>
      </tr>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= htmlspecialchars($row['name']) ?></td>
          <td><?= htmlspecialchars($row['email']) ?></td>
          <td><?= htmlspecialchars($row['message']) ?></td>
          <td><?= $row['submitted_at'] ?></td>
        </tr>
      <?php endwhile; ?>
    </table>
  <?php else: ?>
    <p>No feedback found.</p>
  <?php endif; ?>
</body>
</html>
