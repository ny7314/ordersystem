## ダウンロード方法
git clone
git clone https://github.com/ny7314/ordersystem.git

git clone ブランチを指定してダウンロードする場合
git clone -b ブランチ名 https://github.com/ny7314/ordersystem.git

もしくはzipファイルでダウンロードしてください。

## インストール方法
- cd ordersystem
- composer install
- npm install
- npm run dev

.env.exampleをコピーして、.envファイルを作成

.envファイルの中の下記をご利用の環境に合わせて変更してください

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=ordersystem
DB_USERNAME=p&efoods
DB_PASSWORD=password123

XAMPP/MAMPまたは他の開発環境でDBを起動した後に

php artisan migrate:fresh --seed

を実行してください。（データベーステーブルとダミーデータが追加されればOKです）

最後に
php artisan key:generate
と入力してキーを生成後、

php artisan serve
で簡易サーバーを立ち上げ、確認してください。

## インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpg~sample6.jpgとして
保存しています。

php artisan storage:linkで
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に
保存すると表示されます。
(productsフォルダがない場合は、作成してください)

ショップの画像も表示する場合は、
storage/app/public/shopsフォルダを作成し、
画像を保存してください。

## 補足①
決済のテストとして、stripeを利用しています。
必要な場合は、.envにstripeの情報を追記してください。

## 補足②
メールのテストとして、mailtrapを利用しています。
必要な場合は、.envにmailtrapの情報を追記してください。

メール処理には時間がかかるので、
キューを使用しています。

必要な場合は、php artisan queue:workで、
ワーカーを立ち上げて動作確認をお願いします。