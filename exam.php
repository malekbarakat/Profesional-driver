<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <style>
        .question {
            margin-bottom: 10px;
        }
        .answers {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <h1>Quiz</h1>
    <div id="question" class="question"></div>
    <div id="answers" class="answers"></div>
    <div id="result" style="display: none;"></div>
    <button id="submit" onclick="handleSubmit()">Submit</button>
    <button id="next" onclick="nextQuestion()" disabled>Next</button>
    <button id="back" onclick="previousQuestion()" disabled>Back</button>
    <button id="generate" onclick="generateOrder()" disabled>Generate New Order</button>

    <script>
        var questions = [
            {
                question: "What is the capital of France?",
                answers: ["Paris", "London", "Berlin"],
                correctAnswer: "Paris"
            },
            {
                question: "What is the square root of 16?",
                answers: ["4", "8", "12"],
                correctAnswer: "4"
            },
            {
                question: "What is the name of the current president of the United States?",
                answers: ["Joe Biden", "Donald Trump", "Barack Obama"],
                correctAnswer: "Joe Biden"
            }
        ];

        var currentQuestionNumber = 0;
        var userAnswers = [];
        displayQuestion();

        function displayQuestion() {
            var question = questions[currentQuestionNumber];
            document.getElementById("question").textContent = question.question;
            var answersDiv = document.getElementById("answers");
            answersDiv.innerHTML = "";
            for (var i = 0; i < question.answers.length; i++) {
                var answer = question.answers[i];
                var radioBtn = document.createElement("input");
                radioBtn.type = "radio";
                radioBtn.name = "answer";
                radioBtn.value = answer;
                answersDiv.appendChild(radioBtn);
                var label = document.createElement("label");
                label.textContent = answer;
                answersDiv.appendChild(label);
                answersDiv.appendChild(document.createElement("br"));
            }
        }

        function nextQuestion() {
            currentQuestionNumber++;
            displayQuestion();
            document.getElementById("submit").disabled = false;
            document.getElementById("next").disabled = true;
            document.getElementById("back").disabled = false;
            if (currentQuestionNumber === questions.length - 1) {
                document.getElementById("next").disabled = true;
            }
        }

        function previousQuestion() {
            currentQuestionNumber--;
            displayQuestion();
            document.getElementById("submit").disabled = false;
            document.getElementById("next").disabled = false;
            document.getElementById("back").disabled = true;
            if (currentQuestionNumber === 0) {
                document.getElementById("back").disabled = true;
            }
        }

        function handleSubmit() {
            var selectedAnswer = document.querySelector("input[name='answer']:checked");
            if (selectedAnswer) {
                userAnswers[currentQuestionNumber] = selectedAnswer.value;
            }
            document.getElementById("submit").disabled = true;
            document.getElementById("next").disabled = false;
            document.getElementById("back").disabled = false;
            if (currentQuestionNumber === questions.length - 1) {
                document.getElementById("next").disabled = true;
                document.getElementById("generate").disabled = false;
            }
        }

        function generateOrder() {
            shuffleArray(questions);
            currentQuestionNumber = 0;
            useranswers = [];
            displayQuestion();
            document.getElementById("submit").disabled = false;
            document.getElementById("next").disabled = true;
            document.getElementById("back").disabled = true;
            document.getElementById("generate").disabled = true;
            document.getElementById("result").style.display = "none";
        }

        function shuffleArray(array) {
            for (var i = array.length - 1; i > 0; i--) {
                var j = Math.floor(Math.random() * (i + 1));
                var temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
        }

        function calculateResult() {
            var correctCount = 0;
            for (var i = 0; i < questions.length; i++) {
                if (userAnswers[i] === questions[i].correctAnswer) {
                    correctCount++;
                }
            }
            var resultPercentage = (correctCount / questions.length) * 100;
            return resultPercentage.toFixed(2);
        }

        function showResult() {
            var resultDiv = document.getElementById("result");
            resultDiv.textContent = "Your score: " + calculateResult() + "%";
            resultDiv.style.display = "block";
        }
    </script>
</body>
</html>

