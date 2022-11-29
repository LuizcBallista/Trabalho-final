<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
</head>
<body>
<section class="section">
    <div class="container mt-6">
        <div class="card">
            <form method="POST" action="login.php">
                <header class="card-header">
                    <p class="card-header-title is-centered">
                        Login
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input is-rounded" placeholder="Login" type="text" name="login" id="inputLogin" required/>
                            <span class="mdi mdi-account icon is-left"></span>
                        </p>
                        <p class="control has-icons-left has-icons-right">
                            <input class="input is-rounded" placeholder="Senha" type="password" name="senha" id="inputSenha" required/>
                            <span class="mdi mdi-lock icon is-left"></span>
                        </p>
                        <br>
                    </div>
                </div>
                <footer class="card-footer">
                    <button class="js-modal-trigger button is-rounded card-footer-item is-link" data-target="modalCadastro">
                        <span>Cadastrar-se</span>
                        <span class="icon mdi mdi-account-plus"></span>
                    </button>
                    <button class="button is-rounded is-primary	card-footer-item" type="submit">
                        <span>Entrar</span>
                        <span class="icon mdi mdi-send"></span>
                    </button>
                </footer>
            </form>
        </div>
    </div>
</section>

<div class="modal" id="modalCadastro">
    <div class="modal-background"></div>
    <div class="modal-card">
        <form method="POST" action="cadastrarUsuario.php">
            <header class="modal-card-head">
                <p class="modal-card-title">Cadastrar Usuário</p>
                <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <p class="control has-icons-left has-icons-right">
                    <input class="input is-rounded" placeholder="Usuário" type="text" name="login" id="inputLoginCadastro" required/>
                    <span class="mdi mdi-account icon is-left"></span>
                </p>
                <p class="control has-icons-left has-icons-right mt-3">
                    <input class="input is-rounded" placeholder="Senha" type="password" name="senha" id="inputSenhaCadastro" required/>
                    <span class="mdi mdi-lock icon is-left"></span>
                </p>
                <p class="control has-icons-left has-icons-right mt-3">
                    <input class="input is-rounded" placeholder="Nome" type="text" name="nome" id="inputNomeCadastro" required/>
                    <span class="mdi mdi-lock icon is-left"></span>
                </p>
                <p class="control has-icons-left has-icons-right mt-3">
                    <input class="input is-rounded" placeholder="Email" type="email" name="email" id="inputEmailCadastro" required/>
                    <span class="mdi mdi-lock icon is-left"></span>
                </p>
                <p class="control has-icons-left has-icons-right mt-3">
                    <input class="input is-rounded" placeholder="Data de Nascimento" type="date" name="dataNascimento" id="inputDataNascimentoCadastro" required/>
                    <span class="mdi mdi-lock icon is-left"></span>
                </p>
                <button class="button is-success is-pulled-right mt-5" type="submit">
                    <span>Cadastrar</span>
                    <span class="icon mdi mdi-send"></span>
                </button>
            </section>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="modal.js"></script>
</body>
</html>