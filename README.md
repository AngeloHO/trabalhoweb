# Projeto de Gestão de Usuários

Este projeto é uma aplicação web desenvolvida para a disciplina de **Desenvolvimento Web II**. A aplicação permite a gestão de usuários com funcionalidades de login, logout e um CRUD completo para gerenciamento de dados de usuários.

## Funcionalidades

1. **Login e Logout**:
   - **Login**: Usuários podem se autenticar usando email e senha.
   - **Logout**: Usuários podem sair da aplicação, encerrando a sessão.

2. **Controle de Acesso**:
   - Acesso restrito a páginas para usuários autenticados. Caso um usuário não esteja logado, será redirecionado para a página de login.

3. **Gestão de Usuários**:
   - **Cadastro**: Adicione novos usuários ao sistema.
   - **Edição**: Modifique informações dos usuários existentes.
   - **Consulta**: Visualize informações dos usuários ativos e inativos em tabelas.
   - **Remoção**: Remova usuários do sistema.

4. **Validações e Interatividade**:
   - Utilização de **AJAX** para operações de CRUD, proporcionando uma experiência de usuário mais fluida e interativa.
   - **JQuery** e **Bootstrap** para estilização e interatividade.

## Tecnologias Utilizadas

- **PHP**: Backend para lógica de negócios e manipulação de dados.
- **HTML/CSS**: Estrutura e estilização das páginas.
- **JQuery**: Manipulação do DOM e requisições AJAX.
- **Bootstrap**: Framework CSS para design responsivo e componentes visuais.
- **DataTables**: Plugin para exibição e manipulação de tabelas.

## Arquitetura do Projeto

### Páginas Principais

- **`index.php`**: Página de login.
- **`homepage.php`**: Exibe a lista de usuários ativos utilizando DataTables.
- **`ger_users_inativos.php`**: Exibe a lista de usuários inativos utilizando DataTables.
- **`logout.php`**: Script para encerrar a sessão do usuário.

### Arquivos de Backend

- **`conexao.php`**: Configuração de conexão com o banco de dados.
- **`update_user.php`**: Script para atualizar informações de usuários.
- **`valida_login.php`**: Valida as credenciais de login do usuário.
- **`get_users.php`**: Recupera a lista de usuários ativos para o DataTables.
- **`get_users_inativos.php`**: Recupera a lista de usuários inativos para o DataTables.

## Como Executar o Projeto

1. **Clone o repositório**:

    ```bash
    git clone https://github.com/AngeloHO/trabalhoweb.git
    ```

2. **Configure o banco de dados**:
   - Importe o arquivo SQL necessário para criar a estrutura do banco de dados.

3. **Configure o ambiente local**:
   - Certifique-se de que seu ambiente de desenvolvimento suporte PHP e MySQL.
   - Ajuste as configurações de conexão no arquivo `conexao.php` com suas credenciais de banco de dados.

4. **Inicie o servidor local**:
   - Use um servidor local (como XAMPP ou WAMP) para executar o PHP.
   - Acesse a aplicação via navegador em `http://localhost/nome-do-projeto`.

## Estrutura de Diretórios

- **`/`**: Diretório raiz com arquivos principais e configuração.
  - **`index.php`**: Página de login.
  - **`homepage.php`**: Página de usuários ativos.
  - **`ger_users_inativos.php`**: Página de usuários inativos.
  - **`logout.php`**: Script para logout.
  - **`conexao.php`**: Configuração de conexão com o banco de dados.
  - **`update_user.php`**: Atualiza informações do usuário.
  - **`valida_login.php`**: Valida o login do usuário.
  - **`get_users.php`**: Obtém usuários ativos.
  - **`get_users_inativos.php`**: Obtém usuários inativos.

Este projeto foi desenvolvido como parte da atividade para a disciplina de **Desenvolvimento de Software para Dispositivos Web II**.

