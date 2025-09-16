# Imagem oficial PHP com FPM
FROM php:8.2-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    zip \
    curl \
    sqlite3 \
    && docker-php-ext-install pdo pdo_pgsql pdo_sqlite zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar projeto para o container
COPY . .

# Copiar script de deploy e dar permissão
COPY deploy.sh /usr/local/bin/deploy.sh
RUN chmod +x /usr/local/bin/deploy.sh

# Expõe a porta 8000
EXPOSE 8000

# Comando padrão para iniciar a aplicação
CMD ["/usr/local/bin/deploy.sh"]
