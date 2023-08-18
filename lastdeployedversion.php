<?php
$lastDeployed = filemtime('index.html'); // Get the last modified time of a file (e.g., index.html)
$version = date('YmdHis', $lastDeployed); // Format the timestamp as YYYYMMDDHHmmss

echo "Last Deployed: $version";
?>
