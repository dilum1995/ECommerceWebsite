
/*to check answers*/
function checkAnswers() {
    var answers = new Array("c", "a", "c", "b", "b", "c", "b", "b", "d", "a"); //store correct answers in the array 
    var check = new Array();//creates a new array to store the retrieved answers


    var AllFormElements = window.document.getElementById("FormID").elements; //gets the form elements and store in the array
    var allChecked = true;
    for (i = 0; i < AllFormElements.length; i++) {
        if (AllFormElements[i].type == 'radio') { //check for radio buttons 
            var ThisRadio = AllFormElements[i].name; // assign current element to a variable
            var ThisChecked = false;
            var AllRadioOptions = document.getElementsByName(ThisRadio); //gets the radio options and stores in the array
            for (x = 0; x < AllRadioOptions.length; x++) {
                if (AllRadioOptions[x].checked) {//check the radio option is checked
                    ThisChecked = true; //set variable value to true if checked
                    break;
                }
            }
            if (!ThisChecked) { //check whether the question is answered
                allChecked = false; //set variable value to false if question is not answered
                break;
            }
        }
    }

    /*store user answers in the array*/
    if (allChecked) {
        check[0] = document.querySelector('input[name="Q1"]:checked').value;
        check[1] = document.querySelector('input[name="Q2"]:checked').value;
        check[2] = document.querySelector('input[name="Q3"]:checked').value;
        check[3] = document.querySelector('input[name="Q4"]:checked').value;
        check[4] = document.querySelector('input[name="Q5"]:checked').value;
        check[5] = document.querySelector('input[name="Q6"]:checked').value;
        check[6] = document.querySelector('input[name="Q7"]:checked').value;
        check[7] = document.querySelector('input[name="Q8"]:checked').value;
        check[8] = document.querySelector('input[name="Q9"]:checked').value;
        check[9] = document.querySelector('input[name="Q10"]:checked').value;

        var div = "";
        var i = 0;
        var marks = 0; //sets the marks to zero

        for (; i < 10; i++) {
            if (answers[i] == check[i]) {//check whether the answers are correct
                div += (i + 1) + ". Correct <br>";
                marks += 2;
            } else {
                div += (i + 1) + ". Incorrect. Answer is " + answers[i] + "<br>";
                marks -= 1;
            }
        }

        var score = marks;
        document.getElementById("score").innerHTML = "Score : " + score; //display marks
        document.getElementById("result").innerHTML = "Answers: <br><br>" + div; //display answers
    } else {
        document.getElementById("result").innerHTML = "Please Answer All the Questions.<br>";//incomplete answer
        alert('Please Answer All the Questions.');
    }

    changeBackground(score); //change background color 
}

/*Change bkground color*/
function changeBackground(score) {
    if (score == 20) {
        document.getElementById('table').style.background = "#54C571";
        alert('Excellent! Your score is ' + score);
    } else if (0 <= score) {
        document.getElementById('table').style.background = "#659EC7";
        alert('Good! Your score is ' + score);
    } else if (-10 <= score) {
        document.getElementById('table').style.background = "#E77471";
        alert('Booo! Your score is ' + score);
    }

}

/* clear answers*/
function clearAnswers() {
    location.reload();
}

/*count down*/
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            alert('Times up! Game over!');
            checkAnswers();
            timer = duration;
        } 
    }, 1000);
}

/*on load function*/
window.onload = function () {
    var fiveMinutes = 300,
            display = document.getElementById('time');
    startTimer(fiveMinutes, display);
};




