# Import CSV Laravel

## Instruções para execução 

### Instale as ferramentas necessárias

* [Laravel](https://laravel.com/docs/5.2/) - Framework utilizado

* [Composer](https://getcomposer.org/) - Gerenciador de dependências

* [PHP](http://php.net/downloads.php) - Pode ser utilizando XAMPP ou WAMP

### Baixe o projeto no repositório do GitHub (Deve ter o git instalado)

<pre>git clone https://github.com/argalvao/ImportCSV.git</pre>

### Renomeie o arquivo env.example para .env

### Rode o seguinte comando como usuário root do banco de dados MySQL

<pre>
DROP DATABASE IF EXISTS import_csv;
CREATE DATABASE import_csv;
</pre>

### Dentro do diretório do projeto execute os comandos

<pre> composer install </pre>
<pre> php artisan key:generate</pre>

### Execute o servidor localmente

<pre> php artisan serve </pre>

### Execute o servidor em rede

<pre> php artisan serve --host=ENDEREÇO_IP --port=80</pre>