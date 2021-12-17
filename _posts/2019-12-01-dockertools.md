---
title: "Docker Tools"
permalink: /DockerTools/
tags: project
---

Docker tools is a collections of tools that's possible to use with the raspberry.  
The programs are installed via docker and Docker Compose is needed.

## How to install
Get docker:

```
curl -sSL https://get.docker.com | sh
```

Install proper dependencies and docker-compose:

```
sudo apt-get install -y \
	libffi-dev \
	libssl-dev \
	python \
	python-pip
sudo apt-get remove python-configparser
sudo pip install docker-compose
```

Clone the repo:

```
git clone https://github.com/MarcoDiFrancesco/DockerTools.git
```

Run docker containers using the `docker-compose` file:

```
docker-compose up -d
```

![docker-compose up screenshot](https://i.imgur.com/6w6EI0e.png)

## Update containers

The update of the containers is automated using watchtower.

## Setup DNS Server

Add this configuration to the router to use the raspberry as DNS server.

![Router settings](https://i.imgur.com/Cxgbm3t.png)

## Done!

# [Code on Github](https://github.com/MarcoDiFrancesco/DockerTools)
