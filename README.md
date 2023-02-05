# Laravel docker
+ ディレクトリ構成（参考サイト：[https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4)）

```
.
├── README.md (この名前にするとGitHubで見た時にHTMLに変換して表示してくれる)
├── docker (*1)
│   ├── mysql (*1)
│   │   ├── Dockerfile
│   │   └── my.cnf (*1)
│   ├── nginx (*1)
│   │   └── default.conf (*1)
│   └── php (*1)
│       ├── Dockerfile (この名前にするとファイル名の指定を省略できる)
│       └── php.ini (*1)
├── docker-compose.yml (この名前にするとファイル名の指定を省略できる)
└── src (*1)
    └── Laravelをインストールするディレクトリ
```