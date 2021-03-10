//variable definition
var modal = document.querySelector('.modal');
var loginAndRegisterElements= document.querySelectorAll('.header__nav__item');
var switchBtn=document.querySelector('.account-form__1 .account-form__switch-btn');
var accountLogForm;
var accountRegForm;
//app declaration
document.querySelector('.modal').style.display='none';
document.querySelector('.account-form__2').style.display='none';

//function
function showForm(){
    var x = document.querySelector('.modal');
    x.style.display = 'none';
    x.style.display = 'flex';
}

function signInSwitch(){
    var x = document.querySelector('.account-form__1');
    x.style.display='none';
    var x = document.querySelector('.account-form__2');
    x.style.display='initial';
}

function signUpSwitch(){
    var x = document.querySelector('.account-form__2');
    x.style.display='none';
    var x = document.querySelector('.account-form__1');
    x.style.display='initial';
}

function closeForm(){
    var x = document.querySelector('.modal');
    x.style.display='none';
}

function repositionRegFrom(regForm){
    regForm.style.position = 'absolute';
    regForm.style.top = '0';
    regForm.style.height = '300px';
    regForm.style.width = '100%';
}

function GoToHomePage(){
    window.location = '/';   
}