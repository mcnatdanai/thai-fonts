<?php

// Get all files and directories in the current folder
$items = scandir('.'); 

// Filter out '.' and '..' which represent the current and parent directories
$files = array_diff($items, array('.', '..'));

if (count($files) > 0) {
    echo "<h2>Files in current folder:</h2>";
    echo "<ul>";
    foreach ($files as $file) {
        if (is_file($file)) { // Check if it's actually a file (and not a sub-directory)
            echo "<li>" . htmlspecialchars($file) . "</li>";
        }
    }
    echo "</ul>";
} else {
    echo "<p>No files found in the current folder.</p>";
}

?>