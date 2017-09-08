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
cd HarekazeCTF/src
```

- 設定ファイルを作成します
```bash
cp .env.example .env && \
sed .env -i -e 's/DB_DATABASE=homestead/DB_DATABASE=kitsectf/g' \
-e 's/DB_USERNAME=homestead/DB_USERNAME=root/g' \
-e 's/DB_PASSWORD=secret/DB_PASSWORD=root/g'
```

- フォルダを移動します
```bash
cd ../docker
```

- dockerを起動します
```
docker-compose up
```

#### Mysql Password
- user : root
- password : root

めっちゃ適当につけてるから、本番環境にするときは変えてね。  

#### Licence

??????  

#### Author
???  
