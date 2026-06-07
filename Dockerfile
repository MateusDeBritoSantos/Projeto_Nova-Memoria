FROM php:8.2-apache

# 1. Instala as extensões do MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# 2. Ativa o mod_rewrite
RUN a2enmod rewrite

# 3. Disable all MPM modules except prefork
RUN a2dismod mpm_event mpm_worker mpm_async || true

# 4. Enable only mpm_prefork
RUN a2enmod mpm_prefork

# 5. Remove conflicting MPM load files completely
RUN rm -f /etc/apache2/mods-enabled/mpm_event.* /etc/apache2/mods-enabled/mpm_worker.* /etc/apache2/mods-enabled/mpm_async.*

# 6. Define o diretório padrão
WORKDIR /var/www/html

# 7. Copia os arquivos do projeto
COPY . /var/www/html/

# 8. Ajusta as permissões dos arquivos
RUN chown -R www-data:www-data /var/www/html

# 9. Altera a porta de 80 para 8080 nos arquivos de configuração do Apache
RUN sed -i 's/80/8080/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# 10. Informa a porta correta
EXPOSE 8080

# 11. Start Apache in foreground
CMD ["apache2-foreground"]
