<h1 align="center">PHP_MYSQL_PGSQL</h1>

<p align="center">
  <a href="#dart-sobre">Sobre</a> &#xa0; | &#xa0; 
  <a href="#rocket-tecnologias">Tecnologias</a> &#xa0; | &#xa0;
  <a href="#white_check_mark-pré-requesitos">Pré requisitos</a> &#xa0; | &#xa0;
  <a href="#checkered_flag-começando">Começando</a> &#xa0; | &#xa0;
</p>


<br>

## :dart: Sobre ##

Criando CRUD com PHP, Podendo intercalar com MYSQL e PGSQL

## :rocket: Tecnologias ##

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP](https://www.php.net)
- [MYSQL](https://www.mysql.com/)
- [PGSQL](https://www.postgresql.org/)
- [XAMPP](https://www.apachefriends.org/pt_br/index.html)

## :white_check_mark: Pré requisitos ##

Tenha um servidor Apache instalado, Banco de dados MYSQL e PGSQL.

## :checkered_flag: Configurar postgreSQL com PHP no Windows ##

1. Abra o arquivo php.ini localizado em C: \ xampp \ php.
2. Descomente as seguintes linhas em php.ini

extension=php_pdo_pgsql.dll
extension=php_pgsql.dll

3. Adicione o fragmento de código abaixo ao arquivo httpd.conf localizado em C: \ xampp \ apache.

LoadFile "C:\xampp\php\libpq.dll"

4. Reinicie o Apache.


<a href="#top">Voltar para o topo</a>
