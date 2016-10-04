# Projeto Final de LabWeb

**Requisitos:**
* PHP >= 5.6.4
* PDO PHP Extension
* Mbstring PHP Extension

* Composer: https://getcomposer.org/

* Node.js >= 6.5.0 https://nodejs.org/

**Como Instalar:**
* npm install
* npm install bower
* bower install
* npm install gulp
* gulp

* Configure sua base de dados no arquivo .env

* Execute o projeto com: php artisan serve

**Utilizaremos o Laravel 5.3**

https://laravel.com/docs/5.3

***Proposta:***

* Desenvolvimento de um programa web:
* a) Pode ser com a ajuda de um framework;
* b) Terá controle de acesso (usuário e senha);
* c) Menu de opções;
* d) Validações de dados de entrada no cliente e no servidor;
* d) Funcionalidades a serem implementadas:
- Manter Usuário (nome completo, login, senha, email);
- Manter Armamento (nº de série, modelo, fabricante);
- Manter Reserva (sigla, descrição);
- Manter Munição (calibre, descrição);
- Manter Acessórios (descrição)
- Manter Militar (posto/graduação, nome de guerra);
- Manter ReservaMaterial (cadastro de armamento, munição e acessórios com suas
respectivas quantidades na reserva de armamento)
- Manter Cautela (controle da retirada do armamento pelos militares, com: militar,
armamentos e munições)

**Regras:** 
* Um militar da reserva de armamento cadastra todos os armamentos, munições
e acessórios (lanterna, mascara de gás, coldre, bandoleira, etc) e em seguida
(em Manter Reserva Material) informa quanto ele tem de cada equipamento
na reserva.
* Um outro militar pode se dirigir a reserva de armamento para cautelar
armamento(s), munição e/ou acessórios. Nesse momento o militar da reserva
registra essa retirada (Manter Cautela) informando o militar e tudo que ele está
retirando, nesse momento é feito um registro com data, hora, militar
responsável e todo o material retirado.
* Quando o militar retorna a reserva de armamento para devolver o material, é
dado a baixa no equipamento. Esse material pode ser devolvido aos poucos.
