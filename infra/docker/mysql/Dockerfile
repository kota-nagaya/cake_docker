FROM --platform=linux/amd64 mysql:5.6

RUN apt-get update && \
  apt-get install -y locales vim && \
  rm -rf /var/lib/apt/lists/* && \
  echo "ja_JP.UTF-8 UTF-8" > /etc/locale.gen && \
  locale-gen ja_JP.UTF-8
ENV LC_ALL ja_JP.UTF-8

<<<<<<< HEAD
RUN { \
  echo '[mysqld]'; \
  echo 'character-set-server=utf8mb4'; \
  echo 'collation-server=utf8mb4_general_ci'; \
  echo '[client]'; \
  echo 'default-character-set=utf8mb4'; \
  } > /etc/mysql/conf.d/charset.cnf
=======
COPY ./infra/docker/mysql/my.cnf /etc/my.cnf

COPY ./infra/docker/mysql/sql_lib /sql_lib
>>>>>>> 9e389947b6097c3c06c105556ee13853a90e687c
