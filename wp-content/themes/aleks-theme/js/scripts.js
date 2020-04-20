const $ = jQuery;

// show/hide mobile nav
function toggleNav(menu) {
    if (window.innerWidth <= 992) {
        $(menu).toggleClass('active');
    }
}

// add header shadow on scroll
$(window).scroll(function () {
    const scrollPosition = $(window).scrollTop();
    if (scrollPosition > 0) {
        $('.site-header').addClass('active');
    } else {
        $('.site-header').removeClass('active');
    }
})


//Name validation
const name = $('#name')
const nameWrapper = name.parent();
const nameMessage = $(name.next());
const nameRegex = /[^A-Za-z]+/g;
let nameFlag = false;

function validateName() {
    let nameLength = name.val().toString().length;
    let specialChar = name.val().toString().match(nameRegex);

    if (nameLength >= 2 && specialChar === null) {
        nameWrapper.removeClass('input-check-error');
        nameWrapper.addClass('input-check-success');
        nameMessage.removeClass('active');
        nameFlag = true;
    } else {
        nameWrapper.removeClass('input-check-success');
        nameWrapper.addClass('input-check-error');
        nameMessage.addClass('active');
    }
}

//Email validation
const email = $('#email');
const emailWrapper = email.parent();
const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/g
let emailFlag = false;

function validateEmail(flag) {

    console.log(flag);
    let validMail = email.val().toString().match(emailRegex);

    if (!validMail) {
        emailWrapper.removeClass('input-check-success');
        emailWrapper.addClass('input-check-error');
        email.next().addClass('active');
        emailFlag = true;
    } else {
        emailWrapper.removeClass('input-check-error');
        emailWrapper.addClass('input-check-success');
        email.next().removeClass('active');
    }

    flag ? emailFlag = true : emailFlag;
}

function formValidation() {

    name.on('keyup', () => {
        validateName();
    });


    email.on('keyup', () => {
        validateEmail();
    });

    //Phone validation
    const phone = $('#phone')
    const phoneMessage = $(phone.next());
    const phoneWrapper = phone.parent();
    const phoneRegex = /^(\+?)[0-9]+$/g;

    phone.on('keyup', () => {

        let phoneLength = phone.val().toString().length;
        let validPhone = phone.val().toString().match(phoneRegex);

        console.log(phoneLength);
        console.log(validPhone);

        if (phoneLength >= 6 && validPhone) {
            phoneWrapper.removeClass('input-check-error');
            phoneWrapper.addClass('input-check-success');
            phoneMessage.removeClass('active');
        } else {
            phoneWrapper.removeClass('input-check-success');
            phoneWrapper.addClass('input-check-error');
            phoneMessage.addClass('active');
        }
    });

    //Age validation
    const age = $('#age')
    const ageMessage = $(age.next());
    const ageWrapper = age.parent();
    const ageRegex = /[0-9]+/g;

    age.on('keyup', () => {

        let validAge = age.val().toString().match(ageRegex);

        if (age.val() >= 18 && age.val() <= 100 && validAge) {
            ageWrapper.removeClass('input-check-error');
            ageWrapper.addClass('input-check-success');
            ageMessage.removeClass('active');
        } else {
            ageWrapper.removeClass('input-check-success');
            ageWrapper.addClass('input-check-error');
            ageMessage.addClass('active');
        }
    });
}

formValidation();

function isValidForm() {


    if (nameFlag && emailFlag) {
        return true
    } else if (nameFlag) {
        emailWrapper.addClass('input-check-error');
        email.next().addClass('active');
        return false;
    } else if (emailFlag) {
        nameWrapper.addClass('input-check-error');
        nameMessage.addClass('active');
        return false;
    } else {
        emailWrapper.addClass('input-check-error');
        email.next().addClass('active');
        nameWrapper.addClass('input-check-error');
        nameMessage.addClass('active');
        return false;
    }
}