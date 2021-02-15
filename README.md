This is a build variant with PostgreSQL including [count_bits](https://github.com/sldab/count-bits). 

There are no other differences with `static-dockerhub` setup.

Look here for more information: https://git.tt-rss.org/fox/ttrss-docker-compose/src/static-dockerhub/README.md

Q: How do I create functions on existing database?

A: `docker-compose exec --user postgres db sh -c "cd /opt/count-bits ; make create_functions"`