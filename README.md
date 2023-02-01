# 開始運行

## 安裝Docker
`yum remove podman buildah`
`sudo yum install -y yum-utils`
`yum-config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo`
`yum update`
`yum install docker-ce docker-ce-cli containerd.io`
`systemctl enable docker`

## 安裝Docker composer
`curl -L "https://github.com/docker/compose/releases/download/1.27.1/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose`
`chmod +x /usr/local/bin/docker-compose`
`ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose`

## 部屬
`docker-composer up`

`run docker-compose exec laravel composer install`

`run docker-compose exec laravel cp .env.example .env`

`run docker-compose exec laravel chmod -R 777 /var/www/html/storage`

# Routes

Laravel api localhost/api as the base url.
VueJS app uses localhost:8080 for live development.
