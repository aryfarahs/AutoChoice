document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formCad');
    const passwordInput = document.getElementById('senha');
    const passwordError = document.getElementById('senhaErro');
    const containerCad = document.getElementById('containerCad');
    const voltarCad = document.getElementById('voltarCad');

    form.addEventListener('submit', (event) => {
        if (!passwordInput.validity.valid) {
            passwordError.style.display = 'block';
            containerCad.style.height = '620px'
            voltarCad.style.marginTop = '230px'
            passwordInput.focus();
            event.preventDefault();
        } else {
            passwordError.style.display = 'none'
            containerCad.style.height = '570px'
            voltarCad.style.marginTop = '180px'
        }
    })

    passwordInput.addEventListener('input', () => {
        if (passwordInput.validity.valid) {
            passwordError.style.display = 'none';
            containerCad.style.height = '570px';
            voltarCad.style.marginTop = '180px'
        } else {
            passwordError.style.display = 'block';
            containerCad.style.height = '620px';
            voltarCad.style.marginTop = '230px'
        }
    });
});