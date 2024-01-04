<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<audio autoplay id="myautoload">
		<source src="Canon in D (Pachelbels Canon) - Cello .ogg" type="audio/ogg">
		<source src="Canon in D (Pachelbels Canon) - Cello .mp3" type="audio/mpeg">
</audio>

<div id="quiz-container">
    <div id="question-container">
        <h2 id="question-text">Question 1: What is the capital of France?</h2>
        <div id="options-container">
            <button class="option-btn" onclick="selectOption(this)">Paris</button>
            <button class="option-btn" onclick="selectOption(this)">Berlin</button>
            <button class="option-btn" onclick="selectOption(this)">London</button>
        </div>
    </div>
    <div id="result-container" style="display: none;">
        <p id="result-text">Your score: <span id="score">0</span>/8</p>
        <a href="../../index.php" style="text-decoration: none;" class="option-btn">Back to RSVP</a>
    </div>
</div>

<script src="quiz.js"></script>
</body>
</html>
