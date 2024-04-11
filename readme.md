## Sistema de Gestão de Certificado Eletrônico - EM DESENVOLVIMENTO

Para o desenvolvimento desse sistema utilizei o padrão de arquitetura MVC 

Model ( Classes )
- Connect -  dentro da connet vamos usar PDO:: PHP DATA Object que é uma classe responsavel pela conexão com o servidor e MySQL como SGBDR
- Users
- UsersDAO

- PDO:: PHP DATA Object
- MySQL ( SGBDR )


O arquivo connect não pode ser modificado pois com o php 8.0 a PSR-4 é uma recomendação da comunidade PHP para organização e carregamento de arquivo e classes PHP

--------

Class Users

Campos: ID (Int)
        name (Varchar)
        mail (Varchar)
        password (Varchar)
        status (char)