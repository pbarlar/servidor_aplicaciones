FROM php:8.2-apache

# Enable Apache mod_rewrite if needed (optional for basic scripts)
# RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the PHP files to the container
COPY . /var/www/html/

# Expose port 80 (Apache default)
EXPOSE 80

# Clean up default files and set permissions if necessary
RUN rm -f index.html
RUN chown -R www-data:www-data /var/www/html