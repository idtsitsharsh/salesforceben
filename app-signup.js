let eye = document.querySelector('.pwd-eye');
let pwd = document.querySelector(".password");
let redirect = document.querySelector(".redirect");
let submit = document.querySelector(".submit-button");

function handleMouseEnter() {
    eye.style.color = '#4e78f4';
}

function handleMouseLeave() {
    eye.style.color = '#b9b9b9';
}

function addHoverListeners() {
    eye.addEventListener('mouseenter', handleMouseEnter);
    eye.addEventListener('mouseleave', handleMouseLeave);
}

function removeHoverListeners() {
    eye.removeEventListener('mouseenter', handleMouseEnter);
    eye.removeEventListener('mouseleave', handleMouseLeave);
}

addHoverListeners();
eye.addEventListener('click', () => {
    if (eye.classList.contains('fa-eye')) {
        eye.classList.add('fa-eye-slash');
        eye.classList.remove('fa-eye');
        removeHoverListeners();
        eye.style.color = '#4e78f4';
        pwd.attributes[0].value='text';
         
    } else {
        eye.classList.add('fa-eye');
        eye.classList.remove('fa-eye-slash');
        addHoverListeners();
        eye.style.color = '#b9b9b9';
        pwd.attributes[0].value='password';
    }
});

redirect.addEventListener('mouseenter', () => {
    redirect.style.color = '#21b0f7';
});
redirect.addEventListener('mouseleave', () => {
    redirect.style.color = 'black';
});

submit.addEventListener('mouseleave', () => {
    submit.style.backgroundColor = '#4e78f4';
});
submit.addEventListener('mouseenter', () => {
    submit.style.backgroundColor = '#21b0f7';
});