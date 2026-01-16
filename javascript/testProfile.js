const btn = document.querySelector('.prof-btn');
const viewValues = document.querySelectorAll('.view-value');
const editFields = document.querySelectorAll('.edit-field');

let editing = false;

btn.addEventListener('click', () => {
    editing = !editing;

    viewValues.forEach(v => v.classList.toggle('d-none'));
    editFields.forEach(f => f.classList.toggle('d-none'));

    btn.textContent = editing ? 'Save Profile' : 'Edit Profile';
});

console.log("hello world");