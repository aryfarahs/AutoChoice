document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formCad');
    const passwordInput = document.getElementById('senha');
    const passwordError = document.getElementById('senhaErro');
    const confirmPasswordInput = document.getElementById('senha2');
    const confirmPasswordError = document.getElementById('senha2Erro');
    const containerCad = document.getElementById('containerCad');
    const voltarCad = document.getElementById('voltarCad');

    form.addEventListener('submit', (event) => {
        let valid = true;

        // validação de senha
        if (!passwordInput.validity.valid) {
            passwordError.style.display = 'block';
            containerCad.style.height = '620px'
            voltarCad.style.marginTop = '230px'
            passwordInput.focus();
            valid = false;
        } else {
            passwordError.style.display = 'none'
            containerCad.style.height = '570px'
            voltarCad.style.marginTop = '180px'
        }

        // confirmação de senha
        if (passwordInput.value !== confirmPasswordInput.value) {
            confirmPasswordError.style.display = 'block'
            containerCad.style.height = '580px';
            voltarCad.style.marginTop = '190px';
            confirmPasswordInput.focus();
            valid = false;
        } else {
            confirmPasswordError.style.display = 'none';
            containerCad.style.height = '570px';
            voltarCad.style.marginTop = '180px';
        }

        // Impede o envio do formulário
        if (!valid) {
            event.preventDefault();
        }

    });

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

        // revalida a conf de senha
        if (passwordInput.value === confirmPasswordInput.value) {
            confirmPasswordError.style.display = 'none';
        }
    });

    confirmPasswordInput.addEventListener('input', () => {
        if (passwordInput.value === confirmPasswordInput.value) {
            confirmPasswordError.style.display = 'none';
            containerCad.style.height = '570px';
            voltarCad.style.marginTop = '180px';
        } else {
            confirmPasswordError.style.display = 'block';
            containerCad.style.height = '580px';
            voltarCad.style.marginTop = '190px';
        }
    });
});