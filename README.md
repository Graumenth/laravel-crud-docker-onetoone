<p align="center"><a href="https://altelca.com/referanslar" target="_blank" rel="noopener noreferrer"><img src="https://altelca.com/wp-content/uploads/2021/08/logo_2x_light.png" alt=""></a></p>

## Framework

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Information

This is my first laravel application running on docker. Please follow the guide to install. Laravel installation in this repo is 7.30.1.
I followed this guide while building this repository: <a href="https://www.digitalocean.com/community/tutorials/how-to-install-and-set-up-laravel-with-docker-compose-on-ubuntu-20-04">Digital Ocean</a>

## Guide

First of all, make sure you have <a href="https://www.docker.com/get-started">Docker</a> installed on your computer.

I installed docker images from <a href="https://hub.docker.com/search?type=image&image_filter=official">here</a> before starting. The list of images used is as follows:

<ul>
    <a href="https://hub.docker.com/_/php"><img src="https://d1q6f0aelx0por.cloudfront.net/product-logos/library-php-logo.png?" alt="PHP"></a>
    <a href="https://hub.docker.com/_/mysql"><img src="https://d1q6f0aelx0por.cloudfront.net/product-logos/library-mysql-logo.png?" alt="MySQL"></a>
    <a href="https://hub.docker.com/_/nginx"><img src="https://d1q6f0aelx0por.cloudfront.net/product-logos/library-nginx-logo.png?" alt="nginx"></a>
    <a href="https://hub.docker.com/_/redis"><img src="https://d1q6f0aelx0por.cloudfront.net/product-logos/library-redis-logo.png?" alt="redis"></a>
</ul>

Please note that redis is <b>optional</b> but I wanted to add it as I am willing to learn it.

After installing the images. Go to your terminal and type the following lines one by one:

<code>docker-compose build app</code><br>
<code> docker-compose up -d</code>

