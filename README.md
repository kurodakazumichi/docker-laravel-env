# docker laravel handson

```
# 環境を起動する
docker compose up -d
```

```
# 初回のみappコンテナに入りLaravelをインストールする
docker compose exec app bash
composer create-project --prefer-dist "laravel/laravel=8.*" .

# Laravelのバージョンを確認
php artisan -V
```