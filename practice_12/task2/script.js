
const allQuestions = {
    1: {
        "question": "1 + 1 = ?",
        "answer": "2",
        "variants": ["1", "2", "3", "4"]
    },
    2: {
        "question": "5! = ?",
        "answer": "120",
        "variants": ["5", "25", "120", "125"]
    },
    3: {
        "question": "Practice teacher name?",
        "answer": "Ardak",
        "variants": ["Ardak", "Alan", "Saltanat", "Dias"]
    },
    4: {
        "question": "What university are we studying at?",
        "answer": "KBTU",
        "variants": ["SDU", "IITU", "AITU", "KBTU"]
    },
    5: {
        "question": "Are you human?",
        "answer": "Yes",
        "variants": ["Yes", "No", "What?", "IDK"]
    }
}

let currentQuestion = 1;
let allScore = 0;

const updateQuestion = () => {
    document.getElementById("quiz-number").innerHTML = `Question ${currentQuestion} of ${Object.keys(allQuestions).length}`;
    document.getElementById("question").innerHTML = allQuestions[currentQuestion].question;

    document.getElementById("variants").innerHTML = "";
    for (let i = 0; i < allQuestions[currentQuestion].variants.length; i++) {
        document.getElementById("variants").innerHTML += `<button onclick="checkResult(this)">${allQuestions[currentQuestion].variants[i]}</button>`;
    }
}
updateQuestion();

const checkResult = (e) => {

    if (e.innerHTML === allQuestions[currentQuestion].answer) {
        allScore += 100 / Object.keys(allQuestions).length;
    }
    
    if (currentQuestion < Object.keys(allQuestions).length) {
        currentQuestion++;
        updateQuestion();
    } else {
        document.querySelector("body").innerHTML = `
            <p style="text-align: center;">Your score:</p>
            <h1 style="text-align: center;">${allScore}%</h1>
        `;
    }
}