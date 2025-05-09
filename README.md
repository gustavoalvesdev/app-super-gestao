# App Super Gestão

Este projeto é uma aplicação web desenvolvida com Laravel 9 e PHP 8, como parte do curso ministrado por Jorge Santanna.
O objetivo é fornecer uma plataforma para gestão empresarial, incluindo funcionalidades como gerenciamento de produtos, estoques e preços.

## 🚀 Tecnologias Utilizadas

- [Laravel 9](https://laravel.com/)
- PHP 8
- Composer
- Vite (para assets front-end)
- MySQL ou outro banco de dados compatível

## 📦 Instalação

Siga os passos abaixo para configurar o projeto em seu ambiente local:

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/gustavoalvesdev/app-super-gestao.git
    cd app-super-gestao
    ```

2. **Instale as dependências do Composer**

    ```bash
    composer install
    ```

3. **Copie o arquivo de exemplo de ambiente:**

    ```bash
    cp .env.example .env
    ```

4. **Copie o arquivo de exemplo de ambiente:**

    Edite o arquivo `.env` e atualize as configuraões de acordo com o seu ambiente, especialmente as informações de conexão com o banco de dados

5. **Gere a chave da aplicação:**

    ```bash
    php artisan key:generate
    ```
6. **Execute as migrações do banco de dados:**

    ```bash
   php artisn migrate
   ```

7. **Inicie o servidor de desenvolvimento:**

    ```bash
   php artisan serve
   ```

   A aplicação estará disponível em `http://localhost:8000`.

## 🧪 Testes 

Para executar os testes automatizados, utilize o comando: 

```bash
php artisan test
```

## 📄 Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais informações.
