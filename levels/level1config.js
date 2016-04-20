function showWrongAnswer(){
    document.id('error').set('html', 'Wrong answer, Please try again');
}

function showScore() {
    var score = quizMaker.getScore();

    var el = new Element('h3');
    el.set('html', 'Thank you!');
    document.id('result').adopt(el);

    el = new Element('h4');
    el.set('html', 'Score: ' + score.numCorrectAnswers + ' of ' + score.numQuestions);
    document.id('result').adopt(el);

    if(score.incorrectAnswers.length > 0) {
        el = new Element('h4');
        el.set('html', 'Incorrect answers:');
        document.id('result').adopt(el);

        for(var i=0;i<score.incorrectAnswers.length;i++) {
            var incorrectAnswer = score.incorrectAnswers[i];
            el = new Element('div');
            el.set('html', '<b>' +  incorrectAnswer.questionNumber + ': ' + incorrectAnswer.label + '</b>');
            document.id('result').adopt(el);

            el = new Element('div');
            el.set('html', 'Correct answer : ' + incorrectAnswer.correctAnswer);
            document.id('result').adopt(el);
            el = new Element('div');
            el.set('html', 'Your answer : ' + incorrectAnswer.userAnswer);
            document.id('result').adopt(el);

        }
    }

}

var questions = [
    {
        label : 'A _____ is a device that forwards packets between networks by processing the routing information included in the packet?',
        options : ['bridge', 'firewall', 'all of the mentioned', 'router'],
        answer : ['router'],
        forceAnswer : true
    },
    {
        label : 'Network congestion occurs_____ ',
        options : ['when a system terminates', 'when connection between two nodes terminates', 'none of the mentioned'],
        answer : ['in case of traffic overloading'],
        forceAnswer : true
    },
    {
        label : 'Communication channel is shared by all the machines on the network in ',
        options : ['unicast network', 'multicast network', 'none of the mentioned'],
        answer : ['broadcast network'],
        forceAnswer : true
    }
    ,
    {
        label : 'What are the layers of the OSI Model? ',
        options : ['Application, Presentation, Transport, Session, Physical, Network.','Presentation, Network, Datalink, Transport, Session.','Physical, Network, Link-State, Transport, Session, Presentation, Application.'],
        answer : ['Application, Presentation, Session, Transport, Network, Datalink, Physical'],
        forceAnswer : true
    },
    {
        label : 'Which statement is true regarding the user exec and privileged exec mode?',
        options : ['They both require the enable password ','The ? only works in Privileged exec', 'They are identical'],
        answer : ['User exec is a subset of the privileged exec'],
        forceAnswer : true
    },
    {
        label: 'Bluetooth is an example of',
        options : ['local area network','virtual private network','none of the mentioned'],
        answer :['personal area network'],
        forceAnswer : true
    },
    {
        label: 'Two devices are in network if____ ',
        options : ['a process is running on both devices','PIDs of the processes running of different devices are same','none of the mentioned'],
        answer :['a process in one device is able to exchange information with a process in another device'],
        forceAnswer : true
    },
    {
        label: 'Which one of the following computer network is built on the top of another network?',
        options : ['prior network','chief network','prime network'],
        answer :['overlay network'],
        forceAnswer : true
    },
    {
        label: 'A list of protocols used by a system, one protocol per layer, is called',
        options : ['protocol architecture','protocol suit','none of the mentioned'],
        answer :['protocol stack'],
        forceAnswer : true

    },
    {
        label: 'In computer network nodes are',
        options : ['the computer that originates the data','the computer that routes the data','the computer that terminates the data'],
        answer :['all of the mentioned'],
        forceAnswer : true
    }
]

function showAnswerAlert() {
    document.id('error').set('html', '<div class="alert alert-danger" style="margin-top:10px;"><strong>Error!!!</strong> You have to answer before you continue to the next question.</div>');
}
function clearErrorBox() {
    document.id('error').set('html','');
}
var quizMaker = new DG.QuizMaker({
    questions : questions,
    el : 'questions',
    forceCorrectAnswer:false,
    listeners : {
        'finish' : showScore,
        'missinganswer' : showAnswerAlert,
        'sendanswer' : clearErrorBox,
        'wrongAnswer' : showWrongAnswer
    }
});
quizMaker.start();