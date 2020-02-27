# Laravel 初期化ベクトル格納場所 検証

## git clone直後に1回だけやること

```
git clone <本リポジトリ>
cp .env.template .env
composer install
php artisan key:generate
```

## 動かし方
```
php artisan ecnrypt-iv
```