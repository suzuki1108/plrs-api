# 管理画面について
以下環境構築実行後に、
```
http://localhost:8000/admin/
```
にアクセス。
ユーザ名、パスワード共にadminで管理画面に入れます。

## アフィリエイトURLテーブル編集画面
```
http://localhost:8000/admin/affiliate
```
## プログラミング言語マスタ編集画面
```
http://localhost:8000/admin/language
```

# 環境構築手順(ローカル用)

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
$ php artisan key:generate
```

## DBのマイグレーションとシーディング
```
$ php artisan migrate

$ php artisan db:seed
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
