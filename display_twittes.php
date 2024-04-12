<?php
// Simulated tweets (retrieving from database in real application)
$tweets = [
    'This is my first tweet!',
    'Just posted my second tweet.',
    'Having fun with my Twitter clone.'
];

// Display tweets
foreach ($tweets as $tweet) {
    echo '<div class="tweet">' . htmlspecialchars($tweet) . '</div>';
}
?>
