<?php
require 'auth_check.php';
require 'db_config.php';

// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submission_id'], $_POST['new_status'])) {
    $id = (int) $_POST['submission_id'];
    $status = $_POST['new_status'];
    $allowed = ['new', 'read', 'responded'];
    if (in_array($status, $allowed, true)) {
        $stmt = $conn->prepare("UPDATE contact_submissions SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);
        $stmt->execute();
        $stmt->close();
    }
    header("Location: admin_dashboard.php" . (isset($_GET['filter']) ? "?filter=" . urlencode($_GET['filter']) : ""));
    exit;
}

// Optional filter by status
$filter = $_GET['filter'] ?? '';
$allowed_filters = ['new', 'read', 'responded'];
$where = '';
if (in_array($filter, $allowed_filters, true)) {
    $where = "WHERE status = '" . $conn->real_escape_string($filter) . "'";
}

$result = $conn->query("SELECT * FROM contact_submissions $where ORDER BY submitted_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Submissions - Rukoko Admin</title>
<style>
  body { font-family: Arial, sans-serif; background: #f4f6f5; margin: 0; padding: 30px; }
  .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
  h1 { color: #1e3d2f; margin: 0; }
  .logout { color: #c0392b; text-decoration: none; font-weight: bold; }
  .filters a { margin-right: 12px; text-decoration: none; color: #1e3d2f; font-weight: bold; }
  .filters a.active { text-decoration: underline; }
  table { width: 100%; border-collapse: collapse; background: #fff; margin-top: 16px; box-shadow: 0 1px 4px rgba(0,0,0,0.08); }
  th, td { text-align: left; padding: 12px; border-bottom: 1px solid #eee; vertical-align: top; }
  th { background: #1e3d2f; color: #fff; }
  .status { padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: bold; color: #fff; }
  .status-new { background: #c0392b; }
  .status-read { background: #d68910; }
  .status-responded { background: #27ae60; }
  select { padding: 5px; border-radius: 4px; }
  .message-cell { max-width: 300px; }
</style>
</head>
<body>
  <div class="header">
    <h1>Contact Submissions</h1>
    <div>
      <span>Logged in as <?= htmlspecialchars($_SESSION['admin_username']) ?></span>
      &nbsp;|&nbsp;<a class="logout" href="logout.php">Log Out</a>
    </div>
  </div>

  <div class="filters">
    <a href="admin_dashboard.php" class="<?= $filter === '' ? 'active' : '' ?>">All</a>
    <a href="admin_dashboard.php?filter=new" class="<?= $filter === 'new' ? 'active' : '' ?>">New</a>
    <a href="admin_dashboard.php?filter=read" class="<?= $filter === 'read' ? 'active' : '' ?>">Read</a>
    <a href="admin_dashboard.php?filter=responded" class="<?= $filter === 'responded' ? 'active' : '' ?>">Responded</a>
  </div>

  <table>
    <tr>
      <th>Date</th>
      <th>Name</th>
      <th>Email</th>
      <th>Service</th>
      <th>Message</th>
      <th>Status</th>
    </tr>
    <?php if ($result && $result->num_rows > 0): ?>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= htmlspecialchars(date("d M Y, H:i", strtotime($row['submitted_at']))) ?></td>
          <td><?= htmlspecialchars($row['full_name']) ?></td>
          <td><?= htmlspecialchars($row['email']) ?></td>
          <td><?= htmlspecialchars($row['service_of_interest']) ?></td>
          <td class="message-cell"><?= nl2br(htmlspecialchars($row['message'])) ?></td>
          <td>
            <span class="status status-<?= htmlspecialchars($row['status']) ?>"><?= htmlspecialchars(ucfirst($row['status'])) ?></span>
            <form method="POST" style="margin-top:6px;">
              <input type="hidden" name="submission_id" value="<?= (int) $row['id'] ?>">
              <select name="new_status" onchange="this.form.submit()">
                <option value="new" <?= $row['status'] === 'new' ? 'selected' : '' ?>>New</option>
                <option value="read" <?= $row['status'] === 'read' ? 'selected' : '' ?>>Read</option>
                <option value="responded" <?= $row['status'] === 'responded' ? 'selected' : '' ?>>Responded</option>
              </select>
            </form>
          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="6" style="text-align:center; padding: 30px;">No submissions found.</td></tr>
    <?php endif; ?>
  </table>
</body>
</html>
