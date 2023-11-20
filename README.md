# App Super Gestão

## Baixar o Projeto
```bash
git clone git@github.com:gustavoalvesdev/app-super-gestao.git
```

## Criar arquivo .env.example para .env

## Instalar as Dependências
```bash
composer install
```

## Gerar a chave da aplicação
```bash
php artisan key:generate
```

## Rodar as Migrations (após BD estar configurado no .env)
```bash
php artisan:migrate
```

## Subir a aplicação localmente
```bash
php artisan serve
```

## Criando chave estrangeira na Migration (produto_detalhes). Relacionamento 1:1
### database/migrations/2023_11_20_022016_create_produto_detalhes_table
```php
// coluna que vai receber a chave estrangeira
$table->unsignedBigInteger('produto_id');

// constraint
$table->foreign('produto_id')->references('id')->on('produtos');
$table->unique('produto_id');
```