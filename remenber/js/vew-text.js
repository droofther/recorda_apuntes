const btn_open_text = document.getElementById('open-text');
const btn_close_text = document.getElementById('close-text');
const new_note = document.querySelector('.text');

btn_open_text.addEventListener('click', (e) => {
    new_note.classList.add('active');
    btn_open_text.classList.remove('active')
    btn_close_text.classList.add('active')

})
btn_close_text.addEventListener('click', (e) => {
    new_note.classList.remove('active');
    btn_close_text.classList.remove('active');
    btn_open_text.classList.add('active')

})