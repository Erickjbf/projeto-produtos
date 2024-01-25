# Sistema de Gerenciamento de Produtos

### Ferramentas Utilizadas
XAMPP Control Panel v3.3.0 com os modulos Apache e MySQL ligados.
VSCode.
phpMyAdmin para construção do banco de dados.
Framework Bootstrap para estilização e responsividade.

### Descrição

Este sistema é um gerenciador de produtos, realizando um CRUD linkado a um banco de dados de produtos contendo nome, id, descrição e preço dos mesmos. O sistema foi desenvolvido em PHP e utiliza MySQL como banco de dados para gerenciar os produtos de uma loja ficticia chamada Nunes Sport.

### Descrição dos Arquivos principais do Projeto

#### Index.php

Descrição
É a página principal do sistema Nunes Sport. Ele atua como o ponto central do aplicativo, gerenciando a navegação entre diferentes seções e controlando a exibição dinâmica do conteúdo com base nas requisições do usuário.

Funcionalidades Principais
Barra de Navegação: Apresenta uma barra de navegação responsiva que permite a transição entre as seções principais do sistema.

Conteúdo Dinâmico: Utiliza a lógica de controle de fluxo em PHP para incluir dinamicamente diferentes arquivos de conteúdo com base nas requisições, como adição de produtos, listagem de produtos, etc.

Estrutura do Arquivo
Estilo: Define o estilo da página, incluindo a formatação da barra de navegação, o fundo da página e a estilização de elementos como rótulos e cabeçalhos.

Barra de Navegação: Configura uma barra de navegação com links para as seções principais do sistema.

Conteúdo Dinâmico: Utiliza a lógica de switch-case para determinar qual conteúdo deve ser incluído com base nas requisições do usuário.

Scripts: Inclui scripts JavaScript necessários para o funcionamento do Bootstrap.

Requisitos
Bootstrap: A página utiliza o framework Bootstrap para estilização e responsividade.

#### salvar-produto.php

Realiza o tratamento de diferentes ações relacionadas aos produtos em um sistema de cadastro. Ele recebe informações fornecidas pelo usuário, como nome, ID, descrição e preço, por meio de requisições HTTP e executa as seguintes operações com base na ação especificada:

Cadastrar:

Insere um novo produto no banco de dados com as informações fornecidas.
Exibe um alerta informando sobre o sucesso ou a falha da operação.
Redireciona o usuário de volta à página de cadastro.

Editar:

Atualiza as informações de um produto existente no banco de dados com base no ID fornecido.
Exibe um alerta informando sobre o sucesso ou a falha da operação.
Redireciona o usuário de volta à página de cadastro.

Excluir:

Remove um produto do banco de dados com base no ID fornecido.
Exibe um alerta informando sobre o sucesso ou a falha da operação.
Redireciona o usuário de volta à página de listagem de produtos.

#### listar-produtos.php

É responsável por exibir uma lista de produtos cadastrados em um sistema de gerenciamento. Ele realiza as seguintes operações:

Consulta ao Banco de Dados:

Executa uma consulta SQL para recuperar todos os produtos da tabela "produtos".
Exibição em Tabela:

Verifica se existem produtos no resultado da consulta.
Caso haja produtos, gera uma tabela HTML exibindo as informações de cada produto, incluindo ID, nome, descrição, preço e ações disponíveis.
Ações Disponíveis:

Para cada produto, são disponibilizadas ações de "Editar" e "Excluir" por meio de botões.
O botão "Editar" redireciona o usuário para a página de edição do produto com o ID correspondente.
O botão "Excluir" exibe um prompt de confirmação e, se confirmado, aciona a exclusão do produto do banco de dados.
Feedback Visual:

Caso não haja produtos cadastrados, exibe uma mensagem de alerta informando ao usuário que nenhum produto foi encontrado.

#### editar-produtos.php

Possui a finalidade de fornecer uma interface de edição para um produto específico em um sistema de gerenciamento. Ele realiza as seguintes operações:

Consulta ao Banco de Dados:

Executa uma consulta SQL para obter os detalhes do produto com base no ID fornecido através da requisição.
Formulário de Edição:

Exibe um formulário HTML preenchido com as informações do produto recuperadas do banco de dados.
Inclui campos para edição do nome, código, descrição e preço do produto.
Ação de Atualização:

Ao submeter o formulário, os dados atualizados são enviados para a página de salvamento (salvar-produto.php) com a ação de "editar".
Feedback Visual:

Apresenta botão de "Atualizar" para confirmar as alterações.
Os valores atuais do produto são exibidos nos campos do formulário para facilitar a edição.

#### adicionar-produto.php

Desempenha um papel crucial no sistema de gerenciamento, fornecendo uma interface de formulário para adição de novos produtos. Aqui estão as funcionalidades principais:

Formulário de Cadastro:

Apresenta um formulário HTML contendo campos para inserção de informações de um novo produto.
Os campos incluem nome, código, descrição e preço do produto.
Ação de Cadastro:

Quando o formulário é preenchido e submetido, os dados são enviados para a página de salvamento (salvar-produto.php) com a ação de "cadastrar".
Feedback Visual:

Inclui um botão "Cadastrar" para confirmar a adição do novo produto.
Os campos são etiquetados com rótulos ("Nome", "Código", "Descrição" e "Preço") para orientação clara ao usuário.

#### produtos.sql

Script SQL gerado pelo phpMyAdmin, contendo a estrutura e os dados iniciais para a tabela produtos no banco de dados cadastro. Aqui estão as principais características do script:

Estrutura da Tabela produtos:

A tabela produtos é criada com as seguintes colunas: nome, id, descricao, e preco.
Utiliza o mecanismo de armazenamento InnoDB e o conjunto de caracteres utf8mb4.
Dados Iniciais na Tabela:

O script inclui instruções INSERT para adicionar alguns dados iniciais à tabela produtos. Estes dados representam exemplos de produtos com informações como nome, código, descrição e preço.
Índice Primário:

Um índice primário é adicionado à coluna id para garantir unicidade e otimizar consultas.
Informações Adicionais:

O script contém algumas instruções de configuração para SQL_MODE e configuração de fuso horário.
Indica a versão do phpMyAdmin, a versão do servidor MariaDB e a versão do PHP.
Este script SQL pode ser utilizado para criar e popular a tabela produtos em um ambiente de banco de dados MySQL ou MariaDB. Ao executar este script, certifique-se de que o banco de dados cadastro já foi criado no sistema de gerenciamento de banco de dados correspondente.