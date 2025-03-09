FROM php:8.3-fpm@sha256:5a1e6f9c84096fc7140716da6989515c25a550c186da48ed3a75509d3a763da4

# Install FTP PHP extension, newer Laravel version needs this to be able to use the default FTP filesystem driver.
RUN docker-php-ext-install ftp

# Update and upgrade the system
RUN apt-get update && \
    apt-get upgrade -y

# Installing Tools which we like to use in the container
RUN apt-get update && \
    apt-get install -y nano ncdu

# Install PHP Redis extension, this is needed for Redis (logically)
RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis

# Install PHP PDO_MySQL extension, this is needed for mariadb driver to work
RUN docker-php-ext-install pdo_mysql

# Install PHP gd extension. It requires a package called zlib (zlib1g-dev) and also libpng (libpng-dev). Installing libpng-dev seems to resolve both.
# The gd extension is required by: mpdf/mpdf | phpoffice/phpspreadsheet | maatwebsite/excel
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev
RUN docker-php-ext-configure gd --enable-gd --with-jpeg
RUN docker-php-ext-install gd

# Install PHP zip extension. It requires a package called libzip (libzip-dev).
# The zip extension is required by: phpoffice/phpspreadsheet | maatwebsite/excel | composer (for unzipping files)
RUN apt-get update && apt-get install -y \
    libzip-dev
RUN docker-php-ext-install zip

# Install PHP exif extension.
# The exif extension is required by: spatie/image
RUN docker-php-ext-install exif

# Install PHP soap extension. It requires a package called libxml (libxml2-dev).
# The soap extension is needed to be able to use the SoapClient class.
RUN apt-get update && apt-get install -y \
    libxml2-dev
RUN docker-php-ext-install soap

# Install PHP PDO_sqlsrv extension to be able to use this to connect to a MSSQL database
RUN apt-get update && apt-get -y install unixodbc-dev \
&& pecl install sqlsrv pdo_sqlsrv

# We need gnupg2 to add the microsoft key in the next section
RUN apt-get update && apt-get install -y gnupg2

#PHPVersion | Need to install ODBC Driver to connect to SQL Server, PHP 8.1 container runs on debian 11. https://learn.microsoft.com/en-us/sql/connect/odbc/linux-mac/installing-the-microsoft-odbc-driver-for-sql-server?view=sql-server-ver16
# I've not changed the below when moving to PHP 8.2, I could not find anything about PHP 8.2 and the ODBC Driver.
# 31-10-2023 I've noticed that the PHP 8.2 container was now using debian 12 instead of debian 11, so i updated the logic below accordingly. It seems Debian12 requires the key to be stored differently: https://github.com/MicrosoftDocs/microsoft-365-docs/issues/12660
RUN curl https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > /usr/share/keyrings/microsoft-prod.gpg \
&& curl https://packages.microsoft.com/config/debian/12/prod.list > /etc/apt/sources.list.d/mssql-release.list \
&& apt-get update \
&& ACCEPT_EULA=Y apt-get install -y msodbcsql18






# Set work directory to /var/www
WORKDIR /var/www

# Install Composer, followed instructions here: https://getcomposer.org/download/
# TODO: Automate the verification of the installer, currently it's skipped. See: https://getcomposer.org/doc/faqs/how-to-install-composer-programmatically.md
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
#RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --version=2.7.7 #ComposerVersion | The value here should be updated if a different ComposerVersion should be used, no extra comment is needed in this case.
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

# Add user to have the same user as locally and switch to this user
ARG UID
ARG USER
RUN useradd -u $UID -d /home/$USER  $USER

# Add .composer folder inside the home directory, needed to store configuration for composer in the next part.
RUN mkdir -p /home/$USER/.composer && \
    chown -R $USER:$USER /home/$USER

# Switch to local user
USER $USER:$USER
