FROM php:8.2-apache

# 1. Instala as extensões do MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# 2. Ativa o mod_rewrite
RUN a2enmod rewrite

# 3. Força o Apache a carregar APENAS o mpm_prefork (Cura definitiva para o erro AH00534)
RUN rm -f /etc/apache2/mods-enabled/mpm_*.load /etc/apache2/mods-enabled/mpm_*.conf && \
    echo "LoadModule mpm_prefork_module /usr/lib/apache2/modules/mod_mpm_prefork.so" > /etc/apache2/mods-enabled/mpm_prefork.load

# 4. Define o diretório padrão e copia os arquivos
WORKDIR /var/www/html
COPY . /var/www/html/

# 5. Ajusta as permissões dos arquivos
RUN chown -R www-data:www-data /var/www/html

# 6. Altera a porta de forma cirúrgica (evita quebrar arquivos internos)
RUN sed -i 's/Listen 80/Listen 8080/g' /etc/apache2/ports.conf && \
    sed -i 's/<VirtualHost \*:80>/<VirtualHost \*:8080>/g' /etc/apache2/sites-available/000-default.conf

# 7. Informa a porta correta
EXPOSE 8080

# 8. Inicia o Apache
CMD ["apache2-foreground"]