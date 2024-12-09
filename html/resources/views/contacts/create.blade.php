<!DOCTYPE html>


<!-- Erasmo Cardoso da Silva
    App Desafio Alfasolft
 -->


<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Contato</title>
    <!--  Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Criar Novo Contato</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Informações do Contato</h5>
                    </div>

                    <div class="card-body">
                        <!-- Define the camp validation -->
                        @if($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Form -->
                        <form method="POST" action="{{ route('contacts.store') }}" class="mt-3">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ex: João da Silva" required>
                            </div>

                            <div class="mb-3">
                                <label for="contact" class="form-label">Contato</label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Ex: 123456789" required minlength="9" maxlength="9">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ex: joao@email.com" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Voltar</a>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
