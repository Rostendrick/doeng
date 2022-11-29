let falseAnswer= document.querySelectorAll('.js_false_answer');
let rightAnswer = document.querySelector('.js_right_answer');

function changeColor(target, color) {
    target.style.backgroundColor = color;
}

falseAnswer.forEach(ans => {
    ans.addEventListener('click', () => {
        changeColor(ans, 'red')
    });
});

rightAnswer.addEventListener('click', () => { 
    changeColor(rightAnswer, 'green');
    falseAnswer.forEach(ans => {
        ans.removeEventListener('click', () => {
            changeColor(ans, 'red');
        })
    })
})
    // setTimeout(() => {window.location.replace('http://doeng/index.php?page=answer-handler&question=$number_of_question&word=$true_word&answer=true')}, 2000);