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
Git via cli
Docker  
docker-compose


## Como executar esse projeto?

Baixar o projeto:
```bash
git clone https://github.com/diegolinkk/projeto-estudos-laravel.git
```

Entrar na pasta do projeto baixado


## Copiar o .env
```bash
cp .env.example .env
docker-compose up -d --build
```


## Na primeira vez, efetue a criação de chaves 
```bash
docker exec -it appx php artisan key:generate
docker exec -it appx php artisan config:cache
docker exec -it appx php artisan config:clear
docker-compose up -d --force-recreate
```

### Tip: Alterou uma .env?! use esse cara:
```bash
docker-compose up -d --force-recreate
```

### Criar o banco sqlite
```bash
docker exec -it appx touch database/database.sqlite
docker exec -it appx php artisan migrate:refresh --seed
```
Após rodar os comandos acima, a URL:
#### Rota de health
http://localhost/health

#### Raiz
http://localhost/

## Para acessar o container da aplicação e executar comandos Linux || artisan:
```bash
docker exec -it appx bash
```


## Criar usuário
A primeira tela pede um login pois o sistema trabalha com autenticação. Basta clicar na opção de 'criar usuário' e criar um usuário para efetuar login e utilizar o sistema normalmente.

Feedbacks podem ser enviados para diegolinkk@gmail.com
