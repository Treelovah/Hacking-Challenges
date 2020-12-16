#!/bin/bash

# exit codes 
## exit code 2 == bad input


# sample function execution
## sudo docker run -d -p 8094:80 --name my-apache-php-app4 php:7.4-apache

# globals
max_mem="2g"
name="kss-web1"
image=$name
cpus="1"



# main
function docker_run()
{
	printf "max memory:\t$max_mem\nmax memory:\t$max_mem\ncontainer name:\t $name\nbase image:\t$image"
	sudo docker run -d -p $iPORT:$oPORT --memory=$max_mem --cpus=$cpus --name $name $image
	sudo docker ps -a
	echo "Please visit localhost:$iPORT"	
}

read -ep "Enter incoming port on host. ex (8080): " iPORT
read -ep "Enter container port. ex (80): " oPORT
# read -ep "Enter name of container: " NAME
# read -ep "Enter full image name. ex (kss-web2): " IMAGE
# read -ep "Enter full image name. ex (kss-web1): " IMAGE

read -ep "run? (y/n): " USER_REPLY

if [[ $USER_REPLY == [Yy] ]]
then
	docker_run
else
	exit 2
fi
