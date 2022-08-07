'use strict';
// Elements
const navItems = document.querySelector('nav-link')
const progressBar = document.querySelector('.progress-bar')
const fieldset1 = document.querySelector('.fieldset1')
const fieldset2 = document.querySelector('.fieldset2')
const fieldset3 = document.querySelector('.fieldset3')
const btnNext = document.querySelector('.btn-next-1')
const btnPrev = document.querySelector('.btn-prev')
const btnFinal = document.querySelector('.btn-finish')



btnNext.addEventListener('click', function (e) {
    fieldset1.classList.add('d-none');
    fieldset2.classList.remove('d-none');
    fieldset2.style.transition = "all 2ms"
    progressBar.textContent = "75%";
    progressBar.classList.remove('bg-danger');
    progressBar.classList.add('bg-primary');
    progressBar.style.width = "75%";
});

btnPrev.addEventListener('click', function (e) {
    fieldset1.classList.remove('d-none');
    fieldset2.classList.add('d-none');
    progressBar.textContent = "25%";
    progressBar.classList.add('bg-danger');
    progressBar.classList.remove('bg-primary');
    progressBar.style.width = "25%";
});

btnFinal.addEventListener('click', function (e) {
    fieldset2.classList.add('d-none');
    fieldset3.classList.remove('d-none');
    progressBar.textContent = "100%";
    progressBar.style.width = "100%";
    progressBar.classList.remove('bg-primary');
    progressBar.classList.add('bg-success');
})