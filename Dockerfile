FROM ubuntu:14.04
ENV DEBIAN_FRONTEND noninteractive 

RUN apt-get install -y software-properties-common
RUN add-apt-repository -y ppa:ondrej/php5-5.6
RUN add-apt-repository -y ppa:nginx/stable
RUN sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y wget curl php5-fpm php5-mysql php5-gd php5-curl php-pear php-apc php5-mcrypt php5-imagick php5-memcache supervisor nginx
ADD astgo.ru /etc/nginx/sites-enabled/astgo.ru 
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf 
ADD supervisord.conf /etc/supervisor/conf.d/supervisord.conf 
VOLUME ["archives"] 
EXPOSE 80 
