FROM postgres:12
EXPOSE 5432

COPY init-count-bits.sh /docker-entrypoint-initdb.d/

RUN apt-get update && \
	apt-get -y install git libpq-dev postgresql-server-dev-12 gcc make && \
	git clone https://github.com/sldab/count-bits.git /opt/count-bits && \
	cd /opt/count-bits && \
	make && \
	sed -i.bak 's/create_functions: install/create_functions:/' Makefile && \
	make install && \
	apt-get -y remove git libpq-dev postgresql-server-dev-12 && \
	apt-get -y autoremove && \
	apt-get -y clean

