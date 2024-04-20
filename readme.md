## Sistema de Gestão de Certificado Eletrônico - ![Badge em Desenvolvimento](http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge)

# Índice 

* [Descrição do Projeto](#descrição-do-projeto)
* [Status do Projeto](#status-do-Projeto) 

## Descrição do Projeto 
<br>
Sistema de certificado eletrônico que tem como objetivo emitir o certificado do usuário após o fim do evento ou a liberação do mesmo. O sistema conta com gestão de usuários caso o usuário já tenha cadastro sendo mais facil emitir seu certificado
<h4 align="center"> 
    ❗  Para o desenvolvimento desse sistema estou utilizando o padrão de arquitetura MVC  ❗
</h4>
<br>

<h5> Model ( Classes ) </h5>

- `Connect`: Dentro da Connet vamos usar PDO:: PHP DATA Object que é uma classe responsável pela conexão com o servidor e MySQL como SGBDR )
- `Users`
- `UsersDAO`
- `PDO:: PHP DATA Object`
- `PDO:: MySQL ( SGBDR )` 

O arquivo `connect` não pode ser modificado pois a PSR-4 é uma recomendação da comunidade PHP para a organização e o carregamento de arquivos e classes PHP

--------

<h5> Class Users </h5>

Temos os seguintes campos na tabela

- `name`
- `mail`
- `password`
- `status` 
