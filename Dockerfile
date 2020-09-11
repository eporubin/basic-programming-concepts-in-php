FROM gitpod/workspace-mysql

USER root

COPY config/apache.conf /etc/apache2/apache2.conf

COPY config/php2.ini /etc/php/7.4/apache2/conf.d/php2.ini


# Change document root folder
ENV APACHE_DOCROOT_IN_REPO="www"
