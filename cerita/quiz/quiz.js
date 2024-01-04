const questions = [
    {
        question: "Where did Emily and John first meet?",
        options: ["Animal Clinic", "Canal", "City"],
        correctAnswer: "Canal"
    },
    {
        question: "What impressed John about Emily initially?",
        options: ["Cooking Skills", "Compasion for injured animals", "Painting Skills"],
        correctAnswer: "Compasion for injured animals"
    },
    {
        question: "What is Emily's profession?",
        options: ["An archaeologist", "A veterinarian", "A military officer"],
        correctAnswer: "A veterinarian"
    },
    {
        question: "What is the biggest challenge in their relationship?",
        options: ["Belief differences", "Time constraints", "Language difficulty"],
        correctAnswer: "Time constraints"
    },
    {
        question: "The peak of their relationship occurred during which mission?",
        options: ["Animal rescue", "Community literacy outreach", "Venice tourism promotion"],
        correctAnswer: "Animal rescue"
    },
    {
        question: "Why did they marry?",
        options: ["Venice encounter", "Love and understanding", "Family request"],
        correctAnswer: "Love and understanding"
    },
    {
        question: "Where did Emily and John marry?",
        options: ["Rome", "Animal clinic", "Venice, where they met"],
        correctAnswer: "Venice, where they met"
    },
    {
        question: "What does their marriage symbolize in the story",
        options: ["Joy", "Struggle and love", "No specific meaning"],
        correctAnswer: "Struggle and love"
    },
];

let currentQuestionIndex = 0;
let score = 0;

function selectOption(button) {
    const selectedOption = button.innerText;

    if (selectedOption === questions[currentQuestionIndex].correctAnswer) {
        score++;
    }

    currentQuestionIndex++;

    if (currentQuestionIndex < questions.length) {
        displayQuestion();
    } else {
        displayResult();
    }
}

function displayQuestion() {
    const questionTextElement = document.getElementById('question-text');
    const optionsContainer = document.getElementById('options-container');

    const currentQuestion = questions[currentQuestionIndex];
    questionTextElement.textContent = `Question ${currentQuestionIndex + 1}: ${currentQuestion.question}`;

    optionsContainer.innerHTML = "";
    currentQuestion.options.forEach((option) => {
        const button = document.createElement('button');
        button.classList.add('option-btn');
        button.textContent = option;
        button.onclick = function () {
            selectOption(this);
        };
        optionsContainer.appendChild(button);
    });
}

function displayResult() {
    const questionContainer = document.getElementById('question-container');
    const resultContainer = document.getElementById('result-container');
    const scoreElement = document.getElementById('score');
    const resultTextElement = document.getElementById('result-text');

    questionContainer.style.display = 'none';
    resultContainer.style.display = 'block';

    scoreElement.textContent = score;
    resultTextElement.textContent = `Your score: ${score}/8`;

    // tambahkan ajax request simpan data ke data base, data user bersumber dari parameter yang di set session, untuk score variabel score
}

displayQuestion();
