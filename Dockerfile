# Imagem oficial PHP com FPM
FROM php:8.2-fpm

# Instalar dependências do sistema + cliente PostgreSQL
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libzip-dev \
    zip \
    curl \
    sqlite3 \
    libsqlite3-dev \
    build-essential \
    libonig-dev \
    gnupg \
    && echo "deb http://apt.postgresql.org/pub/repos/apt bullseye-pgdg main" > /etc/apt/sources.list.d/pgdg.list \
    && curl -fsSL https://www.postgresql.org/media/keys/ACCC4CF8.asc | apt-key add - \
    && apt-get update \
    && apt-get install -y libpq-dev postgresql-client \
    && docker-php-ext-install pdo pdo_pgsql pdo_sqlite zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar projeto para o container
COPY . .

# Copiar script de deploy
COPY deploy.sh /usr/local/bin/deploy.sh
RUN chmod +x /usr/local/bin/deploy.sh

# Expõe porta padrão Laravel
EXPOSE 8000

# Comando padrão para iniciar Laravel
CMD ["/usr/local/bin/deploy.sh"]
