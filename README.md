# Utilisation

Sur hub : https://registry.hub.docker.com/u/revollat/nginx-php-composer/
Github : https://github.com/revollat/docker-nginx-php-composer

RECUP IMAGE :

```
docker pull revollat/nginx-php-composer
```

LANCER CONTAINER :

```
docker run --name appli -d -v $PWD:/var/www -p 8099:80 revollat/nginx-php-composer
```

AVEC CONF NGINX à mettre dans nginx/vhost.conf (https://github.com/revollat/docker-nginx-php-composer/blob/master/vhost.conf)

```
docker run --name appli -d -v $PWD:/var/www -v $PWD/nginx:/etc/nginx/sites-enabled -p 8099:80 revollat/nginx-php-composer
```

ARRETER CONTAINER :

```
docker stop appli && docker rm appli
```

eventuellement faire : 

```
boot2docker ssh -L 8080:localhost:80

docker exec appli bash -c "chown -R www-data:www-data /var/www"
```
Conenxion en tant que www-data :

```
docker exec -it appli bash -c "su - www-data"
```
