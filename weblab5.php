
<?php
$file = "counter.txt";
if (!file_exists($file)) file_put_contents($file, 0);
$count = (int)file_get_contents($file) + 1;
file_put_contents($file, $count);

// echo "<h1>Page Refresh Count</h1>";
// echo "No. of Users Visited: $count";
?>

<body style="background:#e3f2fd;text-align:center;font-family:Arial">
<h1 style="background:white;padding:15px;border-radius:10px;color:blue">Page Refresh Count</h1>
<h2 style="background:white;padding:15px;border-radius:10px;color:green">Users Visited: <?php echo $count; ?></h2>
</body>
