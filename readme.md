## Criando o Primeiro Projeto Laravel 5.4

### Instalando os requisitos para rodar o Laravel na versão 5.4.
* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

### Efetuando a Instalação do Laravel
* O Laravel utiliza o [Composer](https://getcomposer.org/) para gerenciar suas dependências. Então, antes de usar o Laravel, certifique-se de ter Composer instalado em sua máquina.
#### Instalando o Laravel
* Com o Composer instalado digite o seguinte comando no terminal:
> composer global require "laravel/installer"


### Como rodar este projeto em sua máquina local ?
* Clona este projeto em sua máquina.
* Starta o servidor de Banco de dados em sua máquina como Wamp ou o Xamp
* Entre no phpmyadmin, e crie um banco de dados chamado carros.
* Navege pelo terminal até a pasta raiz deste projeto e digite o seguinte comando no terminal para subir as migrações no banco de dados.
  > php artisan migrate 
* Se você instalou o PHP localmente e você gostaria de usar o servidor de desenvolvimento incorporado do PHP para atender seu aplicativo, você pode usar o servecomando Artisan. Este comando iniciará um servidor de desenvolvimento em :http://localhost:8000 para a tela de "Bem Vindo" e a Raiz do que foi desenvolvido é http://localhost:8000/pessoas 

### Como criar um projeto novo ?
* Na documentação do [Laravel](https://laravel.com/docs/5.4) existe uma documentação muito completa sobre o Laravel, para criar um novo projeto digite o seguinte comando no terminal:
> composer create-project --prefer-dist laravel/laravel blog "5.4.*"




>Autor by: Eduardo Rocha



  ```