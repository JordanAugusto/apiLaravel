<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Pré-requisito

* PHP instalado
* Composer instalado
* Docker (opcional)

## Passos para Executar Localmente

- Clone o repositório `git clone https://github.com/JordanAugusto/apiLaravel`
- Acesse a pasta da aplicação com `cd apiLaravel`

### Instale as dependências usando o Composer

1. Instale as dependências `composer install`
2. Execute a aplicação `php artisan serve`
3. Caso acontece algum erro relacionado ao serve, sugiro gera outra chave com `php artisan key:generate`
   - Si de algum erro ao achar o .env certifique de renomea-lo para o padrao (.env)
   - Após execute novamente a aplicação `php artisan serve`
4. Acessa a aplicação http://localhost:8000/index 

### Docker (Opcional)

Se desejar Dockerizar a aplicação, certifique-se de ter o Docker e o Docker Compose instalados.

1. Crie e inicie o contêiner Docker `docker-compose up -d`
2. Acesse http://localhost:8080/
