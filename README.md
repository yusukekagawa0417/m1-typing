# M-1グ打ンプリ
## 環境構築手順
本リポジトリをpullした後、コンテナを立上げます。
```
[mac] $ docker-compose up -d
```
appコンテナに入ります。
```
[mac] $ docker-compose exec app bash
```
ライブラリをインストールします。
```
[app] $ composer install
```
環境変数を設定します。
`.env.example` をコピーして`.env`を作成します。
```
[app] $ cp .env.example .env
```
`.env`に`APP_KEY=`の値がない場合エラーが発生するため、以下のコマンドでアプリケーションキーを生成してください。
```
[app] $ php artisan key:generate
```
