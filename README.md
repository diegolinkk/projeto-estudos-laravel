# Gerenciador de Estudos
Gerenciador de estudos feito em Laravel.

## Como ele funciona ?

Você cria "conceitos" que gostaria de aprender/aperfeiçoar. A partir daí, você cria projetos que abordam esses conceitos e registra o progresso de estudo desses projetos.

Para cada progresso em um projeto, todos os conceitos abordados no mesmo recebem uma pontuação +1.

Todo o calendário de estudo dos projetos são registrados.

## Exemplo de imagens
### Formulário de Login
![Formulário de Login](https://github.com/diegolinkk/projeto-estudos-laravel/blob/main/imagens/formulario-de-login.PNG?raw=true)
### Lista de conceitos
![Lista de conceitos](https://github.com/diegolinkk/projeto-estudos-laravel/blob/main/imagens/lista-de-conceitos.PNG?raw=true)
### Lista de projetos
![Lista de projetos](https://github.com/diegolinkk/projeto-estudos-laravel/blob/main/imagens/lista-de-projetos.PNG?raw=true)

### Histórico de estudos
![Histórico de estudos](https://github.com/diegolinkk/projeto-estudos-laravel/blob/main/imagens/hist%C3%B3rico-de-estudos.PNG?raw=true)

## Requisitos para executar o projeto

### PHP 8
Ter o PHP 8+ instalado e configurado no ambiente. O PHP pode ser baixado [aqui](https://www.php.net/downloads.php)

### Composer
Composer é o gerenciador de pacotes do PHP e pode ser baixado [aqui](https://getcomposer.org/download/)


## Como executar esse projeto?

Baixar o projeto:

Entrar na pasta do projeto baixado

Executar o script que está na raiz da pasta 'estudos':

```powershell
.\script_iniciar_projeto.ps1
```
Esse script vai instalar todas as dependências do composer,configurar o ambiente para 'teste' e criar o banco de dados

## Executar o web server local:
Agora com todo o ambiente pronto, podemos rodar um servidor web embutido do Laravel para utilizar a aplicação:

```
php artisan serve
```

## Criar usuário
A primeira tela pede um login pois o sistema trabalha com autenticação. Basta clicar na opção de 'criar usuário' e criar um usuário para efetuar login e utilizar o sistema normalmente.

Feedbacks podem ser enviados para diegolinkk@gmail.com