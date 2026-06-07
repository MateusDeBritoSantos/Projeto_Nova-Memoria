FROM php:8.2-apache

# 1. Instala as extensões do MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# 2. Ativa o mod_rewrite
RUN a2enmod rewrite

# 3. Desativa outros MPMs e garante APENAS o mpm_prefork ativo (Modo correto do Apache)
RUN a2dismod mpm_event mpm_worker || true && \
    a2enmod mpm_prefork

# 4. Define o diretório padrão e copia os arquivos
WORKDIR /var/www/html
COPY . /var/www/html/

# 5. Ajusta as permissões dos arquivos
RUN chown -R www-data:www-data /var/www/html

# 6. Altera a porta de forma SEGURA (Altera apenas "Listen 80" e "<VirtualHost *:80>")
RUN sed -i 's/Listen 80/Listen 8080/g' /etc/apache2/ports.conf && \
    sed -i 's/<VirtualHost \*:80>/<VirtualHost \*:8080>/g' /etc/apache2/sites-available/000-default.conf

# 7. Informa a porta correta
EXPOSE 8080

# 8. Start Apache
CMD ["apache2-foreground"]