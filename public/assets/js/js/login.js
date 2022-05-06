//Valida login, caso não seja validado insere alerta na página e modifica estilo de elementos
function validar() {
    let inputBorder = document.getElementsByClassName('InputBorder')
    let msgError = document.getElementById('msgError')
    let email = document.getElementById('email')
    let password = document.getElementById('password')


    if (email.value == 'func@animaclin.com' && password.value == '123456') {
        window.location.assign("./mainMenu.html")
    } else {
        for (let i = 0; i < inputBorder.length; i++) {
            inputBorder[i].setAttribute('style', 'height: 1px; background-color: red')
          }
        msgError.setAttribute('style', 'color: red; margin-bottom: 10px; font-size: 12px;')
        msgError.innerHTML = 'E-mail ou senha inválidos'
    }

    return false
}