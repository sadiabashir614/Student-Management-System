const signupbtn = document.getElementById('signupbtn');
const signinbtn = document.getElementById('signinbtn');
const signup = document.getElementById('signupform');
const signin = document.getElementById('signinform');


signupbtn.addEventListener('click', function () {
    signin.style.display="none";
    signup.style.display="block";
})

signinbtn.addEventListener('click', function () {
    signin.style.display="block";
    signup.style.display="none";
})


