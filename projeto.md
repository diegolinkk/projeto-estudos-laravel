# Projeto gerenciador de estudos

A ideia aqui é criar um sistema onde podemos marcar os projetos ou estudos que estamos fazendo em determinado dia e isso automaticamente soma um ponto de estudo no projeto (até que ele seja concluído) e ao mesmo tempo que todos os conceitos vigentes naquele projeto também ganham um ponto a mais.

Usuário cria quantos projetos quiser e quantos conceitos quiser. Ao criar o projeto, o usuário adiciona quantos conceitos são abordados no mesmo.

## modelos e atributos

Projeto
    id
    nome
    descrição
    feito(booleano)
    usuario(fk)
    conceitos(fk many to many)

Conceitos
    id
    nome
    descrição
    usuário
    projetos(fk many to many)


Usuário
    id
    nome
    email
    senha

Estudos (log de estudos)
    id
    data/hora
    projeto(fk)

pendente organizar dados

### Andamento do projeto

pendente