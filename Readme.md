# Sistema de Contatos

Este projeto é um **Sistema de Contatos** simples, construído com **Laravel** para gerenciamento de contatos. O sistema permite ao usuário adicionar, editar, listar e excluir contatos, utilizando um banco de dados **MariaDB** e rodando em um ambiente de **Docker**.

## Funcionalidades do CRUD

O sistema implementa um CRUD completo para gerenciar contatos. As funcionalidades são:

1. **Tela de Lista de Contatos**
   - Exibe todos os contatos cadastrados no banco de dados.
   - Cada linha da tabela exibe informações como: **ID**, **Nome**, **Contato** e **Email**.
   - Ação disponível para **Ver**, **Editar** e **Excluir** cada contato.

2. **Tela de Criação de Contato**
   - Formulário onde o usuário pode adicionar um novo contato, com os campos: **Nome**, **Contato** e **Email**.
   - Ao preencher e submeter o formulário, o novo contato é salvo no banco de dados.

3. **Tela de Edição de Contato**
   - Permite editar as informações de um contato específico.
   - Preenche automaticamente os campos do formulário com os dados existentes, permitindo ao usuário atualizar os dados.
   
4. **Tela de Detalhes do Contato**
   - Exibe as informações completas de um contato, sem possibilidade de edição.

5. **Exclusão de Contatos**
   - A exclusão de um contato é feita com um "soft delete", ou seja, o contato é marcado como excluído sem ser removido permanentemente do banco de dados.

## Tecnologias Usadas

- **Backend**: Laravel 10
- **Frontend**: Bootstrap 5
- **Banco de Dados**: MariaDB
- **Docker**: Utilizado para orquestrar o ambiente com containers

## Como Instalar e Rodar o Projeto

### Pré-requisitos

1. Certifique-se de ter o **Docker** e **Docker Compose** instalados na sua máquina. Caso ainda não tenha, siga a documentação oficial para instalar:
   - [Instalar Docker](https://docs.docker.com/get-docker/)
   - [Instalar Docker Compose](https://docs.docker.com/compose/install/)

### Passos para Rodar o Projeto

1. **Clone o repositório**:

   ```bash
   git clone https://github.com/erascardsilva/Alfasoft-test
   cd Alfasoft-test
   docker-compose build
   docker-compose up -d
   ```

2. **Rodar migrações do banco de dados**:

```bash
docker-compose exec app php artisan migrate
```

3. ***Acessar o Sistema**:

A aplicação estará disponível em http://localhost:8000. Acesse este link no navegador para visualizar a tela inicial do sistema de contatos.


4. ***Estrutura de pastas***

```bash
/app
    /Http
        /Controllers
            ContactController.php     # Controlador que gerencia as ações de contatos
    /Models
        Contact.php                   # Modelo Eloquent para Contatos

/database
    /migrations
        2024_12_09_153830_create_contacts_table.php  # Migrações

/resources
    /views
        /contacts
            create.blade.php  # Formulário de criação de contato
            edit.blade.php    # Formulário de edição de contato
            index.blade.php   # Lista de contatos
            show.blade.php    # Detalhes de contato

/routes
    web.php                    # Pagina Inicial

```    

5. ***Telas***

