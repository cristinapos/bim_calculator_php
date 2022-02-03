var element = document.querySelector('.button_two');
 element.addEventListener("click", function(e) {
    e.preventDefault();
    var description = document.querySelector('.description');
    description.innerHTML = '';
    var text = document.querySelector('.text');
    text.innerHTML = '';
}, false);