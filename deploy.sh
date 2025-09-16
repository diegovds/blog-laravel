#!/bin/bash
set -e

echo "=== Deploy Laravel no container ==="

# Instalar dependências PHP
composer install --no-dev --optimize-autoloader

# Gerar chave de aplicação (se não existir)
if [ -z "$APP_KEY" ]; then
    php artisan key:generate
fi

# Rodar migrations
php artisan migrate --force

# Criar link do storage (ignora se já existir)
php artisan storage:link || true

# Limpar e cachear configurações, rotas e views
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Iniciar servidor Laravel
php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
