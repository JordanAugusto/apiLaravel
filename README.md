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
2. Se você tiver um servidor rodando localmente, verifique se ele está usando a porta 3306. Pode ser necessário parar o serviço local ou alterar a porta no seu arquivo de configuração.
   - Verifique se há algum contêiner MySQL em execução. Se houver, você pode pará-lo usando `docker stop <container_id>`
   - Caso queira listar todos os contêineres em execução `docker ps`
   - Caso queira altera a porta. Vá ao arquivo docker-compose.yml e altere, no caso será a 3306, tambem tente alterar a porta na secão services.
   - Tente reiniciar o Docker podera resolver problemas de conectividade `sudo service docker restart`.
4. Acesse http://localhost:8000/
