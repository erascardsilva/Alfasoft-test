<!DOCTYPE html>

<!-- Erasmo Cardoso da Silva
    App Desafio Alfasolft -->


<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Sistema de Contatos</title>
    <!-- Link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }

        .footer-links a {
            color: #007bff;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <main>
        <div class="container mt-5 text-center">
            <h1 class="mb-4">Bem-vindo ao Sistema de Contatos</h1>
            <h4 class="mb-4">Erasmo Cardoso</h4>
            <p class="mb-4 text-secondary"> App Web Laravel com banco de dados MariaDB Crud completo para teste Alfasoft </p>

            <hr>
            <p class="mb-4 text-secondary">Gerencie seus contatos de forma rápida e eficiente!</p>
            <p class="mb-4 text-secondary"> Utilizado o Framework Laravel 8.2 e o banco de dados MariaDB 10.5</p>

            <a href="{{ route('contacts.index') }}" class="btn btn-primary btn-lg">Entrar no Sistema</a>
        </div>
    </main>

    <footer>
        <div class="container text-center">
            <hr>
            <h5 class="mb-3">Entre em Contato</h5>
            <div class="d-flex justify-content-center align-items-center gap-4">
                <a href="https://wa.me/5511949224355" target="_blank" class="text-decoration-none">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
                <a href="https://www.linkedin.com/in/erasmo-cardoso-da-silva-76105423a/" target="_blank" class="text-decoration-none">
                    <i class="bi bi-linkedin"></i> LinkedIn
                </a>
                <a href="https://github.com/erascardsilva" target="_blank" class="text-decoration-none">
                    <i class="bi bi-github"></i> GitHub
                </a>
                <a href="https://erasmocs.netlify.app/" target="_blank" class="text-decoration-none">
                    <i class="bi bi-box-arrow-up-right"></i> Portfólio
                </a>
            </div>
        </div>
    </footer>


    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
