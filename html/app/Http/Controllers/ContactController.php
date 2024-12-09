<?php

/*
    Erasmo Cardoso da Silva
    App Desafio Alfasolft

*/

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Exibe a lista de contatos
    public function index()
    {
        $contacts = Contact::all(); // Obtém todos os contatos do banco de dados
        return view('contacts.index', compact('contacts')); // Retorna a view com a lista de contatos
    }

    // Exibe o formulário para criar um novo contato
    public function create()
    {
        return view('contacts.create'); // Retorna a view do formulário de criação
    }

    // Armazena um novo contato no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'name' => 'required|min:5', // Nome deve ter pelo menos 5 caracteres
            'contact' => 'required|digits:9', // Contato deve ter 9 dígitos
            'email' => 'required|email|unique:contacts,email', // Garante que o e-mail seja único
        ]);

        // Cria e salva o contato no banco
        Contact::create($request->all());

        return redirect()->route('contacts.index'); // Redireciona para a lista de contatos
    }

    // Exibe os detalhes de um contato
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact')); // Retorna a view com os detalhes do contato
    }

    // Exibe o formulário de edição de um contato
    public function edit($id)  // Aqui, usei o id explicitamente
    {
        $contact = Contact::findOrFail($id);  // Buscando o contato com o ID passado
        return view('contacts.edit', compact('contact')); // Retorna a view com o formulário de edição
    }

    // Atualiza os dados de um contato
    public function update(Request $request, $id)  // O id agora é explicitamente passado
    {
        $contact = Contact::findOrFail($id);  // Busca o contato
        // Validação dos dados do formulário
        $request->validate([
            'name' => 'required|min:5', // Nome deve ter pelo menos 5 caracteres
            'contact' => 'required|digits:9', // Contato deve ter 9 dígitos
            'email' => 'required|email|unique:contacts,email,' . $id, // Garante que o e-mail seja único, exceto o atual
        ]);

        // Atualiza os dados do contato
        $contact->update($request->all());

        return redirect()->route('contacts.index'); // Redireciona para a lista de contatos
    }

    // Exclui um contato (soft delete)
    public function destroy($id)  // Aqui, passamos o id explicitamente
    {
        $contact = Contact::findOrFail($id);  // Busca o contato
        $contact->delete(); // Realiza a exclusão suave (soft delete)

        return redirect()->route('contacts.index'); // Redireciona para a lista de contatos
    }
}
