# 環境構築手順

## ローカルにクローン
```
$ git clone git@github.com:fact11824/plrs-laravel.git
```

## .envファイル作成
```
$ cp .env.example .env
```

## composer install
```
$ composer install
```

## APP_KEY ファイルに .env 値を設定する
```
php artisan key:generate
```

## ローカルホスト起動
```
$ php artisan serve
```

## 起動確認
```
http://127.0.0.1:8000
```
にアクセス
