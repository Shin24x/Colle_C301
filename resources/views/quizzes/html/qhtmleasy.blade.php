<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Quiz</title>
    <link rel="stylesheet" href="{{ asset('assets/css/quiz.css') }}">
</head>
<body>

<div id="quiz-container">
    <h1>JavaScript Quiz</h1>
    <form id="quiz-form">
        <div id="question-container"></div>
        <div id="answer-buttons" class="btn-container"></div>
        
        <button type="button" id="show-result-button" class="btn hide" onclick="showResult()">Show Result</button>
        <button type="button" id="next-button" class="btn hide" onclick="nextQuestion()">Next</button>
        <button type="button" id="back-button" class="btn hide" onclick="previousQuestion()">Back</button>
    </form>
    <div id="result-container"></div>
</div>

<script src="{{ asset('assets/js/quiz.js') }}"></script>
</body>
</html>
