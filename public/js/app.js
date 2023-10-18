let btn = document.getElementById('close');
btn.addEventListener('click', () => {
    let form = document.getElementById('addfrm');
    form.classList.remove('show-container');
});

let btnOpen = document.getElementById('Open');
btnOpen.addEventListener('click', () => {
    let form = document.getElementById('addfrm');
    form.classList.add('show-container');
});
