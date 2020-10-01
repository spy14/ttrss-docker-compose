FROM postgres:12
EXPOSE 5432

RUN apt-get update 
RUN apt-get -y install git libpq-dev postgresql-server-dev-12
RUN apt-get -y install gcc make

COPY init-count-bits.sh /docker-entrypoint-initdb.d/

RUN git clone https://github.com/sldab/count-bits.git /opt/count-bits && \
	cd /opt/count-bits && \
	make && \
	sed -i.bak 's/create_functions: install/create_functions:/' Makefile && \
	make install

