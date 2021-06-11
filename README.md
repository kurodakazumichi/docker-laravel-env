# docker laravel handson

## 参考サイト
https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4

## 初回

gitからcloneしてきた直後は以下のコマンドで環境を作成する。

```
# Dockerホスト環境
# コンテナ作成
docker compose up -d --build

# Laravelのインストールのために[app]コンテナに入る
docker compose exec app bash

# [app]環境
# Laravelのインストール
composer install

# .envをexampleから用意
cp .env.example .env

# .envにAPP_KEYがないので、以下のコマンドで生成
php artisan key:generate

# public/storage → storage/app/publicへシンボリックリンクを貼る
php artisan storage:link

# storage, bootstrap/cacheに書き込み権限を与える
chmod -R 777 storage bootstrap/cache

# migration
php artisan migrate
```

## 初回以降

```
docker compose up -d
```

## MySQLコンテナ内でMySQLを操作

```
# dbコンテナに入る
docker compose exec db bash

# mysqlコマンド後は自由に操作(ID,PASSはデフォルトのままなら .envを参照)
mysql -p
```

## データベースのデータ保存先を変えるなら

`docker-compose.yml`ないでvolumeの生成とマウントを記述してるのでここを変えればよい。