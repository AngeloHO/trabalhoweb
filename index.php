<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .error-message {
            color: #f8d7da;
            display: none;
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Por favor informe seu login e senha</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="email" class="form-control form-control-lg" />
                                    <label class="form-label" for="email">Email</label>
                                    <small class="error-message" id="emailError">Por favor, insira um email
                                        válido.</small>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Senha</label>
                                    <small class="error-message" id="passwordError">Por favor, insira a senha.</small>
                                </div>

                                <button id="loginButton" class="btn btn-outline-light btn-lg px-5" type="button">Login
                                </button>

                                <div id="feedback" class="mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#loginButton').click(function () {
                let email = $('#email').val().trim();
                let password = $('#password').val().trim();
                let valid = true;

                // Validação de campos
                if (email === '' || !email.includes('@')) {
                    $('#emailError').show();
                    valid = false;
                } else {
                    $('#emailError').hide();
                }

                if (password === '') {
                    $('#passwordError').show();
                    valid = false;
                } else {
                    $('#passwordError').hide();
                }


                if (valid) {
                    $.ajax({
                        url: 'valida_login.php',
                        method: 'POST',
                        data: { email: email, password: password },
                        success: function (response) {
                            if (response.trim() === "success") {
                                window.location.href = 'homepage.php';
                            } else {
                                $('#feedback').html('<p class="text-danger">' + response + '</p>');
                            }
                        },
                        error: function () {
                            $('#feedback').html('<p class="text-danger">Ocorreu um erro ao tentar fazer o login.</p>');
                        }
                    });
                }
            });
        });
    </script>


</body>

</html>