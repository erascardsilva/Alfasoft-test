<!DOCTYPE html>

<!-- Erasmo Cardoso da Silva
    App Desafio Alfasolft
 -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
    <!-- Link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Editar Contato</h1>

        <!-- Form -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Informações do Contato</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- PUT -->


                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $contact->name) }}" required>
                            </div>


                            <div class="mb-3">
                                <label for="contact" class="form-label">Contato</label>
                                <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact', $contact->contact) }}" required>
                            </div>


                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
                            </div>


                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success">Atualizar Contato</button>
                                <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Voltar</a>
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
