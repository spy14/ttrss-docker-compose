FROM alpine:3.12
EXPOSE 9000/tcp

ENV SCRIPT_ROOT=/opt/tt-rss

RUN apk add --no-cache dcron php7 php7-fpm \
	php7-pdo php7-gd php7-pgsql php7-pdo_pgsql \
	php7-mbstring php7-intl php7-xml php7-curl \
	php7-session php7-tokenizer php7-dom php7-fileinfo \
	php7-json php7-iconv php7-pcntl php7-posix php7-zip php7-exif \
	php7-openssl git postgresql-client sudo php7-pecl-xdebug rsync && \
	sed -i 's/\(memory_limit =\) 128M/\1 256M/' /etc/php7/php.ini && \
	sed -i -e 's/^listen = 127.0.0.1:9000/listen = 9000/' \
		-e 's/;\(clear_env\) = .*/\1 = no/i' \
		-e 's/^\(user\|group\) = .*/\1 = app/i' \
		-e 's/;\(php_admin_value\[error_log\]\) = .*/\1 = \/tmp\/error.log/' \
		-e 's/;\(php_admin_flag\[log_errors\]\) = .*/\1 = on/' \
			/etc/php7/php-fpm.d/www.conf && \
	mkdir -p /var/www ${SCRIPT_ROOT}/config.d

ADD startup.sh ${SCRIPT_ROOT}
ADD updater.sh ${SCRIPT_ROOT}
ADD index.php ${SCRIPT_ROOT}
ADD dcron.sh ${SCRIPT_ROOT}
ADD backup.sh /etc/periodic/weekly/backup
ADD config.docker.php ${SCRIPT_ROOT}

ENV OWNER_UID=1000
ENV OWNER_GID=1000

# TTRSS_XDEBUG_HOST defaults to host IP if unset
ENV TTRSS_XDEBUG_ENABLED=""
ENV TTRSS_XDEBUG_HOST=""
ENV TTRSS_XDEBUG_PORT="9000"

ENV TTRSS_DB_TYPE="pgsql"
ENV TTRSS_DB_HOST="db"
ENV TTRSS_DB_PORT="5432"

ENV TTRSS_MYSQL_CHARSET="UTF8"
ENV TTRSS_PHP_EXECUTABLE="/usr/bin/php7"
ENV TTRSS_PLUGINS="auth_internal, note, nginx_xaccel"

CMD ${SCRIPT_ROOT}/startup.sh
