# 開始運行

## 安裝Docker
```
yum remove podman buildah

sudo yum install -y yum-utils

yum-config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo`

yum update

yum install docker-ce docker-ce-cli containerd.io

systemctl enable docker
```
## 安裝Docker composer
```
curl -L "https://github.com/docker/compose/releases/download/1.27.1/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

chmod +x /usr/local/bin/docker-compose

ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose

```

## vue NodeModule目前無法透過dockerfile npm install 會出現timeout 救命

### 出此下策需在外面先安裝node npm

```
curl -sL https://rpm.nodesource.com/setup_18.x | bash -

dnf install nodejs

npm install -g npm@9.1.2

![](https://i.imgur.com/4ei8ULP.png)

npm install --fetch-timeout=600000

```

## 部屬
```
docker-compose up -d

docker-compose exec laravel composer install

docker-compose exec laravel cp .env.example .env

docker-compose exec laravel chmod -R 777 /var/www/html/storage
```

# Routes

Laravel api localhost/api as the base url.

VueJS app uses localhost:8080 for live development.
