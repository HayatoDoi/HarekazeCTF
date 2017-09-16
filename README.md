# HarekazeCTF
CTFチームHarekazeが作る、オープンソースCTFサーバ  
![https://github.com/HayatoDoi/HarekazeCTF/blob/master/img/top_page.png](https://github.com/HayatoDoi/HarekazeCTF/blob/master/img/top_page.png)

## コンセプト
他のオープンソースとは、ここが違う！
- 情報がすべて日本語
- 管理者も他人の作った問題を答えることが出来る (みんなで作り合ってワイワイ解こう！)
- MarkDownで問題文が書ける!
- `萌え`要素がおおい！

## ユーザ権限
- Guest   `問題の解答`
- Master  `Guest権限 + 問題作成・編集(自分が作成したもののみ)`
- Owner   `Master権限 + ユーザの権限変更 + 誰の問題でも編集可`

## 搭載機能
- 問題の解答
- 問題作成・編集 (Master,Ownerのみ)
- ランキング表示
- ユーザ権限の編集 (Ownerのみ)

その他欲しい機能がアレば、[issues](https://github.com/HayatoDoi/HarekazeCTF/issues)まで。

## 環境構築
Dockerで環境構築を行う場合は、[こちらへ](https://github.com/HayatoDoi/HarekazeCTF/tree/master/docker)  

#### 必須環境
- PHP >= 7.0.0
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Mbstring PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension
- composer
- MySQL ( MariaDB )
- Nginx ( Apache )

#### 環境構築手順

1. プログラムファイルをダウンロードしてきます。
```shell
git clone https://github.com/HayatoDoi/HarekazeCTF.git
```

2. フォルダに入ります。
```shell
cd HarekazeCTF
```

3. 設定ファイルを作成します。環境は自分の持っている環境に合わせてください。
```shell
cp .env.example .env
vim .env
```

4. ライブラリをインストールします。
```shell
composer install
```

5. アプリケーションキーを変更します。
```shell
php artisan key:generate
```

6. データベースを作成します。
```shell
mysql -u root -p

mysql> create database HarekazeCTF;
mysql> exit
```

7. データベースの設定を行います。
```shell
php artisan migrate
```

8. Nginx, Apacheのドキュメントルートをこのプログラムの`public`に合わせます。

9. ブラウザからアクセスし、register画面からアカウントを作成します。

10. 9.で作成したアカントをOwner権限にします。
```shell
mysql -u root -p

mysql> use HarekazeCTFmys;
mysql> UPDATE `users` SET `type` = '0' WHERE `users`.`name` = 'your name';
mysql> exit
```

## Licence
These codes are licensed under the MIT.  

## Author
[Isoroku@Harekaze](https://github.com/HayatoDoi/)