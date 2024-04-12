<?php
// Simulate posting tweet (saving to database in real application)
if (isset($_POST['tweet'])) {
    $tweet = $_POST['tweet'];
    if (!empty($tweet)) {
        // Display new tweet
        echo '<div class="tweet">' . htmlspecialchars($tweet) . '</div>';
    }
}
?>
