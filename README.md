# Projeto: Loja de Games - CRUD PHP

Bem-vindo ao repositório da Loja de Games, um projeto PHP que implementa um sistema CRUD (Create, Read, Update, Delete) para gerenciar produtos de uma loja de games. Este projeto inclui funcionalidades como login, registro, adição, edição e remoção de produtos do banco de dados MySQL.

## Funcionalidades

- **Autenticação de Usuários:**
  - Os usuários podem se registrar para criar uma conta.
  - O login é necessário para acessar as funcionalidades de administração.

- **Painel de Administração:**
  - Área exclusiva para administradores.
  - Controle total sobre os produtos da loja.

- **CRUD de Produtos:**
  - **Adicionar Produto:**
    - Formulário para inserir novos produtos com informações como nome, fabricante, tipo e quantidade.
  - **Editar Produto:**
    - Permite a modificação de produtos existentes.
  - **Remover Produto:**
    - Funcionalidade para excluir produtos do banco de dados.
  - **Visualizar Produtos:**
    - Exibe todos os produtos cadastrados em uma tabela.

## Requisitos

- **PHP:** Linguagem de programação server-side.
- **MySQL:** Banco de dados relacional.
- **Web Server:** Servidor web para hospedar o aplicativo.

## Configuração

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/loja-de-games.git
   ```

2. Crie um banco de dados MySQL e importe o esquema fornecido no arquivo `database.sql`.

3. Configure as informações de conexão com o banco de dados no arquivo `config.php`.

4. Inicie seu servidor web.

## Estrutura do Projeto

A estrutura do projeto é organizada da seguinte maneira:

- **css/:** Contém os arquivos de estilo para o front-end.
- **img/:** Armazena imagens utilizadas no projeto.
- **includes/:** Inclui arquivos PHP que são utilizados em várias partes do projeto.
- **style/:** Contém folhas de estilo CSS.
- **index.php:** Página inicial do site.
- **add_produto.php:** Página para adicionar novos produtos.
- **edit_produto.php:** Página para editar produtos existentes.
- **excluir_produto.php:** Página para remover produtos.
- **ver_produtos.php:** Página para visualizar todos os produtos.
- **auth/:** Contém arquivos relacionados à autenticação de usuários.

## Como Usar

1. Acesse a página inicial (`index.php`) para navegar pelo site.
2. Faça login para acessar o painel de administração.
3. No painel de administração, você pode adicionar, editar, excluir e visualizar produtos.

## Exemplo de Código

Aqui está um exemplo de código PHP para adicionar um produto:

```php
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conectar ao banco de dados
    include('includes/conexao.php');

    // Obter dados do formulário
    $nome = $conexao->real_escape_string($_POST['nome']);
    $fabricante = $conexao->real_escape_string($_POST['fabricante']);
    $tipo = $conexao->real_escape_string($_POST['tipo']);
    $quantidade = $conexao->real_escape_string($_POST['quantidade']);

    // Inserir produto no banco de dados
    $sql = "INSERT INTO produtos (nome, fabricante, tipo, quantidade) VALUES ('$nome', '$fabricante', '$tipo', '$quantidade')";

    if ($conexao->query($sql) === true) {
        echo "Produto adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar produto: " . $conexao->error;
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
}
?>
```

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests para melhorar este projeto.

## Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).
