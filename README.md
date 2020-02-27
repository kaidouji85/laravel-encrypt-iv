# Laravel 初期化ベクトル格納場所 検証

「Laravel 暗号化 初期化ベクトルが格納される場所」で使うサンプルコードです。
https://qiita.com/pegass85/items/8199df3496342d9af503

## 動かし方

### 前提条件

以下ソフトウェアがインストールされている

* PHP (7系列)
* composer

### git clone直後に1回だけやること

```
cd <本リポジトリをcloneした場所>
cp .env.template .env
composer install
php artisan key:generate
```

### ローカル環境で動かす

```
php artisan ecnrypt-iv

# 以下内容が表示される 
# オリジナル文言
# 暗号化結果
# 暗号化結果をbase64デコードしたもの
```

## コード解説
Laravel標準構成から追加したものは、app/Console/Commands/EncryptIV.phpのみです。
Laravelカスタムコマンドとして実装しました。