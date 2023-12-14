document.addEventListener('DOMContentLoaded', function () {
    startQuiz();
});

const questions = [
    {
        question: "What is the capital of France?",
        answers: [
            { text: "Paris", correct: true },
            { text: "Berlin", correct: false },
            { text: "Madrid", correct: false },
            { text: "Rome", correct: false }
        ]
    },
    {
        question: "What is the largest planet in our solar system?",
        answers: [
            { text: "Earth", correct: false },
            { text: "Jupiter", correct: true },
            { text: "Mars", correct: false },
            { text: "Saturn", correct: false }
        ]
    },
    {
        question: "Which programming language is known as the 'language of the web'?",
        answers: [
            { text: "Java", correct: false },
            { text: "Python", correct: false },
            { text: "HTML", correct: true },
            { text: "C++", correct: false }
        ]
    }
];

let currentQuestionIndex = 0;
let score = 0;

const quizForm = document.getElementById('quiz-form');
const questionContainer = document.getElementById('question-container');
const answerButtonsContainer = document.getElementById('answer-buttons');
const showResultButton = document.getElementById('show-result-button');
const resultContainer = document.getElementById('result-container');
const nextButton = document.getElementById('next-button');
const backButton = document.getElementById('back-button');

function startQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    showResultButton.classList.add('hide');
    resultContainer.innerHTML = '';
    showQuestion(questions[currentQuestionIndex]);
}

function showQuestion(question) {
    questionContainer.innerText = question.question;
    clearAnswerButtons();

    question.answers.forEach((answer, index) => {
        const input = document.createElement('input');
        input.type = 'radio';
        input.name = 'answer';
        input.value = index; // Use the index as the value
        answerButtonsContainer.appendChild(input);

        const label = document.createElement('label');
        label.innerText = answer.text;
        answerButtonsContainer.appendChild(label);

        answerButtonsContainer.appendChild(document.createElement('br'));
    });
}

function checkAnswer() {
    const selectedAnswer = document.querySelector('input[name="answer"]:checked');

    if (selectedAnswer) {
        const selectedAnswerIndex = parseInt(selectedAnswer.value);
        const currentQuestion = questions[currentQuestionIndex];

        if (currentQuestion.answers[selectedAnswerIndex].correct) {
            score++;
        }
    }
}

function showResult() {
    checkAnswer(); // Check the last selected answer before showing the result
    quizForm.classList.add('hide');
    showResultButton.classList.add('hide');
    resultContainer.innerText = `You scored ${score} out of ${questions.length}!`;
}

function clearAnswerButtons() {
    while (answerButtonsContainer.firstChild) {
        answerButtonsContainer.removeChild(answerButtonsContainer.firstChild);
    }
}

function nextQuestion() {
    checkAnswer(); // Check the selected answer before moving to the next question
    currentQuestionIndex++;

    if (currentQuestionIndex < questions.length) {
        showQuestion(questions[currentQuestionIndex]);
    } else {
        showResultButton.classList.remove('hide');
        nextButton.classList.add('hide');
    }
}

function previousQuestion() {
    currentQuestionIndex--;

    if (currentQuestionIndex >= 0) {
        showQuestion(questions[currentQuestionIndex]);
    }

    // Show back button only if it's not the first question
    if (currentQuestionIndex > 0) {
        backButton.classList.remove('hide');
    } else {
        backButton.classList.add('hide');
    }
}