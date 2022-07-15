# Instruções para a instalação.

Clone a aplicação para o servidor, em seguida acesse a pasta

    $ git clone https://github.com/jord3v/lps-v2.git
    $ cd lps-v2

Crie um arquivo `.env` baseado no `.env.example` e configure as variáveis de ambiente. (Não necessita de banco de dados)

    $ cp .env.example .env

Faça o download das dependências do Laravel

    $ composer install

A versão do PHP que utilizei, não apareceu nenhum problema.

PHP 7.2.10 (cli) (built: Sep 13 2018 01:01:10) ( ZTS MSVC15 (Visual C++ 2017) x86 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies

Caso dê o erro de versão do PHP, lamentamos, deverá utilizar a versão mínima que está sendo sugerido para o Laravel 7 e suas dependencias ou ignorar rodando o seguite código abaixo. 
Pode ser que futuramente dê problema ao tentar rodar o composer dump-autoload

    $ composer install --ignore-platform-reqs

Gere a key da aplicação

    $ php artisan key:generate


## Subindo landing pages 

no arquivo `routes/web.php` já adicionamos as seguintes rotas.

ubiqua.uninassau.com.br
ubiqua.unama.br
ubiqua.uninorte.com.br
ubiqua.unesc.br
ubiqua.ung.com.br
ubiqua.unifacimed.edu.br
ubiqua.fasb.edu.br
ubiqua.unijuazeiro.edu.br
ubiqua.univeritas.com

Para utilizar, insira o template (não necessário subir com os assets, basta o `index.php` e o arquivo `404.html`) na pasta `public`, como por exemplo, deixamos 2 temas pré configurados. A pasta tem que ter a sigla da instituição, por exemplo: uninassau, unama, uninorte, unesc e por ai vai.

![exemplo de tema no sistema](https://i.ibb.co/wWJcqd8/instru-es.png)

## Sobre a configuração do servidor

Basta apontar os subdominios para a aplicação. 