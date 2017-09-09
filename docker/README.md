### dockerでらくらく開発環境
```Nginx, Mysql, PHP-fpm, PhpMyAdmin```を使って環境を整えるぞ。

### 必須環境
- docker
- docker-compose

下記の条件で動作確認済みです。  
```
$ docker --version
Docker version 17.07.0-ce, build 87847530f7

$ docker-compose --version
docker-compose version 1.15.0, build unknown

$ uname -r
4.9.46-1-lts
```

#### 使い方
起動後、以下のURLでアプリケーションが起動します。  
- [http://localhost](http://localhost) HarekazeCTF
- [http://localhost:8080](http://localhost:8080) PhpMyAdmin

#### 環境構築手順
- ファイルをダウンロードしてきます。
```bash
git clone https://github.com/HayatoDoi/HarekazeCTF.git
```

- フォルダを移動します
```bash
cd HarekazeCTF/docker
```

- 設定ファイルをコピーし、パスワードを変更します。(変更しなくても動きますが、セキュアではないですよ。)
```bash
cp .env.example .env
vim .env
```

- composerコンテナを起動して、ライブラリをインストールします
```
docker-compose up composer
```

- 権限を変更します。(まじセキュアじゃない…)
```bash
sudo chmod -R 777 ../src
```

- すぺてのサービスを立ち上げます。
```bash
docker-compose up
```

おわり。

#### デフォルトパスワード
変更したい場合は、`HarekazeCTF/docker/.env`を編集して、再起動してください。

mysql
```
rootユーザ名 : root
パスワード : root

一般ユーザ名 : user
パスワード : user
```

PhpMyAdmin
```
サーバ : mysql
ユーザ名 : user
パスワード : user
```

#### Licence

??????  

#### Author
???  
