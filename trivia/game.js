const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
const scoreText = document.querySelector('#score');
const progressBarFull = document.querySelector('#progressBarFull');


let currentQuestion={}
let acceptingAnswer = true
let score = 0
let questionCounter = 0
let availableQuestions = {}

let questions = [ 
{
    question: '¿Quien es el maximo goleador en la historia de lo penales?',
    choice1: 'Kempes',
    choice2: 'Klose',
    choice3: 'Pelé',
    choice4: 'Beckenbauer',
    answer: '2'
},
{
    question: '¿En que año se jugó el primer mundial?',
    choice1: '1950',
    choice2: '1940',
    choice3: '1930',
    choice4: '1920',
    answer: '3'
},
{
    question: '¿En que años salió campeón del mundo Argentina?',
    choice1: '1974 y 1986',
    choice2: '1978 y 1982',
    choice3: '1968 y 1996',
    choice4: '1978 y 1986',
    answer: '4'
},
{
    question: '¿Contra quien perdió Argentina la final del mundial de 1990? ',
    choice1: 'Francia',
    choice2: 'Alemania',
    choice3: 'Inglaterra',
    choice4: 'Holanda',
    answer: '1'
},
{
    question: '¿Como se llamó la pelota del mundial de Sudáfrica 2010?',
    choice1: ' Jabulani',
    choice2: 'Teamgeist',
    choice3: 'Telstar',
    choice4: 'Alrihla',
    answer: '1'
},
{
    question: '¿Cuál es la selección con más mundiales ganados?',
    choice1: 'Italia',
    choice2: 'Inglaterra',
    choice3: 'Brasil',
    choice4: 'Alemania',
    answer: '3'
},
{
    question: '¿A que rival le marcó un gol con la mano Maradona en el mundial de 1986?',
    choice1: 'Alemania',
    choice2: 'Holanda',
    choice3: 'España',
    choice4: 'Inglaterra',
    answer: '4'
},
{
    question: '¿Cuál es la única selección en disputar todos los mundiales jugados hasta ahora?',
    choice1: 'España',
    choice2: 'Brasil',
    choice3: 'Italia',
    choice4: 'Alemania',
    answer: '2'
}] 

const SCORE_POINTS = 100
const MAX_QUESTIONS = 9

startGame = () => {
questionCounter= 0 
score = 0
availableQuestions = [...questions]
getNewQuestion()

}

getNewQuestion = () => {
    if(availableQuestions.length === 0 || questionCounter > MAX_QUESTIONS){
        localStorage.setItem('mostRecentScore', score)

        return window.location.assign('/end.html')
    }


    questionCounter++
    progressText.innerText = `Question ${questionCounter} of ${MAX_QUESTIONS}`
    progressBarFull.style.width = `${(questionCounter/MAX_QUESTIONS) * 100}%`

    const questionsIndex = Math.floor(Math.random() * availableQuestions.length)
    currentQuestion = availableQuestions [ questionsIndex]

    question.innerText = currentQuestion.question;

    choices.forEach(choice => {
        const number = choice.dataset['number']
        choice.innerText = currentQuestion[ 'choice' + number]
    })


    availableQuestions.splice(questionsIndex, 1);

    acceptingAnswer = true

}

choices.forEach(choice=> {
    choice.addEventListener('click', e => {
        if(!acceptingAnswer) return

        acceptingAnswer = false
        const selectedChoice = e.target
        const selectedAnswer = selectedChoice.dataset['number' ]

        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect'
    
        if(classToApply == 'correct'){
            incrementScore(SCORE_POINTS);
        }

        selectedChoice.parentElement.classList.add(classToApply)
        
        setTimeout (() => {
            selectedChoice.parentElement.classList.remove(classToApply)
            getNewQuestion();
        }, 1000)
    })

})

incrementScore = num => {
    score += num 
    scoreText.innerText = score
}