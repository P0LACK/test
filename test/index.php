<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: auth/login.php");
    exit();
}

require_once 'db/db_connection.php';

$itemsPerPage = 10;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $itemsPerPage;

$conn = connectDB();
$sql = "SELECT * FROM requests LIMIT $itemsPerPage OFFSET $offset";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Item Type</th>
            <th>Measure Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Cost Price</th>
            <th>Sum Price</th>
            <th>Tax</th>
            <th>Tax Percent</th>
            <th>Discount</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['itemType']; ?></td>
                <td><?php echo $row['measureName']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['costPrice']; ?></td>
                <td><?php echo $row['sumPrice']; ?></td>
                <td><?php echo $row['tax']; ?></td>
                <td><?php echo $row['taxPercent']; ?></td>
                <td><?php echo $row['discount']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php if ($result->num_rows >= $itemsPerPage): ?>
            <a href="?page=<?php echo $page + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
