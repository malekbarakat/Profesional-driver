document.addEventListener("DOMContentLoaded", () => {
  const quizData = [
    {
      question: "What is the capital of France?",
      answers: [
        { text: "London", correct: false },
        { text: "Paris", correct: true },
        { text: "New York", correct: false },
        { text: "Madrid", correct: false },
      ],
    },
    {
      question:
        "من الأمور التي تساعد على تقليل مصادر شرود الذهن والتي تساعد على التقليل من ارتكاب حوادث؟",
      answers: [
        { text: "استخدام الهاتف أثناء القيادة", correct: false },
        {
          text: "محاولة تشغيل الراديو أو الكاسيت أثناء القيادة",
          correct: false,
        },
        { text: "عدم استخدام الهاتف المتنقل أثناء القيادة", correct: true },
        { text: "جميع ما ذكر", correct: false },
      ],
    },
    {
      question: "Who is CEO of Tesla?",
      answers: [
        { text: "Jeff Bezos", correct: false },
        { text: "Elon Musk", correct: true },
        { text: "Bill Gates", correct: false },
        { text: "Tony Stark", correct: false },
      ],
    },
    {
      question: "The iPhone was created by which company?",
      answers: [
        { text: "Apple", correct: true },
        { text: "Intel", correct: false },
        { text: "Amazon", correct: false },
        { text: "Microsoft", correct: false },
      ],
    },
  ];

  const questionContainer = document.getElementById("question-container");
  const answerContainer = document.getElementById("answer-container");
  const resultContainer = document.getElementById("result-container");

  let currentQuestion = 0;
  let userAnswers = [];

  function showQuestion() {
    questionContainer.innerHTML = quizData[currentQuestion].question;
    answerContainer.innerHTML = "";
    quizData[currentQuestion].answers.forEach((answer) => {
      const button = document.createElement("button");
      button.textContent = answer.text;
      button.addEventListener("click", () => {
        if (answer.correct) {
          userAnswers.push(true);
        } else {
          userAnswers.push(false);
        }
        currentQuestion++;
        if (currentQuestion < quizData.length) {
          showQuestion();
        } else {
          showResult();
        }
      });
      answerContainer.appendChild(button);
    });
  }

  function showResult() {
    const numCorrect = userAnswers.filter((answer) => answer).length;
    resultContainer.innerHTML = `You answered ${numCorrect} out of ${quizData.length} questions correctly.`;
  }

  showQuestion();
});
