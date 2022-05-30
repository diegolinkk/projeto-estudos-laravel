# Gerenciador de Estudos
Gerenciador de estudos feito em Laravel.

## Como ele funciona ?

Você cria "conceitos" que gostaria de aprender/aperfeiçoar. A partir daí, você cria projetos que abordam esses conceitos e registra o progresso de estudo desses projetos.

Para cada progresso em um projeto, todos os conceitos abordados no mesmo recebem uma pontuação +1.

Todo o calendário de estudo dos projetos são registrados.

## Requisitos para executar o projeto

### PHP 8
Ter o PHP 8+ instalado e configurado no ambiente. O PHP pode ser baixado [aqui](https://www.php.net/downloads.php)

### Composer
Composer é o gerenciador de pacotes do PHP e pode ser baixado [aqui](https://getcomposer.org/download/)
## Como executar esse projeto?

Baixar o projeto:

Entrar na pasta do projeto baixado

Instalar as dependências do composer:

```powershell
composer install
```

## Configurar o arquivo.env para testes:
Renomear o arquivo que está na raiz .env.example para .env.
Esse arquivo ja está pré configurado para ser executado em ambiente local.

## Criar um arquivo de banco de dados vazio:
Criar um arquivo vazio chamado 'database.sqlite' na pasta 'database'.

### Se estiver no Windows:
```powershell
New-Item -Name .\database\database.sqlite -ItemType File
```

### Se estiver no Linux:
```bash
touch ./database/database.sqlite
```

## Executar as migrações no banco de dados:
Após criar o arquivo acima, basta executar o comando:
```
php artisan migrate
```

## Gerar uma chave de API:
```
php artisan key:generate
```

## Executar o web server local:
```
php artisan serve
```

## Criar usuário
A primeira tela pede um login pois o sistema trabalha com autenticação. Basta clicar na opção de 'criar usuário' e criar um usuário para efetuar login e utilizar o sistema normalmente.