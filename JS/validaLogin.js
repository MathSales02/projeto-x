$(document).ready(function () {
    function showError(elementId, errorId, errorMessage) {
        var element = document.getElementById(elementId);
        var errorElement = document.getElementById(errorId);
        element.className = "form-control is-invalid";
        errorElement.className = "invalid-feedback d-block bg-transparent text-dark col-12";
        errorElement.innerHTML = errorMessage;
        element.focus();
        setTimeout(function () {
            element.className = "form-control";
            errorElement.innerHTML = "";
        }, 5000);
    }

    $('#login').submit(function () {
        var form = $(this);
        var dados = new FormData(this);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                if (data === "ErroUser") {
                    showError("user", "userErro", "Por favor, digite seu nome de usuário ou email");
                } else if (data === "ErroPass") {
                    showError("pass", "passErro", "Por favor, digite sua senha");
                } else if (data === "falhaLogin") {
                    Swal.fire({
                        icon: 'error',
                        confirmButtonColor: '#1a962a',
                        text: 'Usuário ou senha inválidos',
                        showConfirmButton: true,
                        confirmButtonText: "Tentar Novamente"
                    });
                } else if (data === "SucessoUsuario") {
                    Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1900,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        }
                    }).fire({
                        icon: 'success',
                        title: 'Logado com sucesso'
                    });
                    setTimeout(function () {
                        text: "logado"
                    }, 1900);
                } else if (data === "SucessoADM") {
                    Swal({
                
                        timer: 400000
                        
                      });
                    
                }
            }
        });
        return false;
    });

    $('#cadastroUsuario').submit(function () {
        var form = $(this);
        var dados = new FormData(this);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                var errorMessages = {
                    "erroName": ["name", "nameErro", "Por favor, digite seu nome"],
                    "erroCpf": ["cpf", "cpfErro", "Por favor, digite seu CPF"],
                    "erroEmail": ["email", "emailErro", "Por favor, digite seu email"],
                    "erroNameUser": ["userName", "userNameErro", "Por favor, digite seu Nome de Usuário"],
                    "erroPass": ["passCadaster", "passErro", "Por favor, digite sua senha"],
                    "erroConfrimPass": ["confirPass", "confirErro", "Confirme a senha"],
                    "erroPassConfirm": ["confirPass", "confirErro", "As senhas não conferem"],
                    "sucesso": ["", "", "Cadastrado Com Sucesso!"]
                };

                if (data in errorMessages) {
                    var [elementId, errorId, errorMessage] = errorMessages[data];
                    if (elementId && errorId) {
                        showError(elementId, errorId, errorMessage);
                    } else if (data === "sucesso") {
                        Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer);
                                toast.addEventListener('mouseleave', Swal.resumeTimer);
                            }
                        }).fire({
                            icon: 'success',
                            title: errorMessage
                        });
                    }
                }
            }
        });
        return false;
    });
});
