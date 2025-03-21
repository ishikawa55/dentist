# ディレクトリ構成

```
/dental_reservation/   # プロジェクトルート
│── /config/           # 設定ファイル（DB接続）
│   ├── db.php        # データベース接続設定
│── /public/           # 公開ディレクトリ
│   ├── index.php     # ホームページ（ダッシュボード）
│   ├── login.php     # ログイン画面
│   ├── logout.php    # ログアウト処理
│   ├── reservation.php # 予約ページ
│   ├── history.php   # 予約履歴ページ
│   ├── record.php    # 通院記録ページ
│   ├── reserve_action.php # 予約処理
│── /assets/           # CSS・JS
│   ├── style.css     # スタイルシート
│── /includes/         # 共通コンポーネント
│   ├── header.php    # ナビゲーションバー
│   ├── footer.php    # フッター
│── /controllers/      # PHPロジック（MVC風）
│   ├── AuthController.php # 認証関連
│   ├── ReservationController.php # 予約関連
│   ├── HistoryController.php # 予約履歴関連
│   ├── RecordController.php # 通院記録関連
│── .htaccess          # Apache用リダイレクト設定
│── .env               # 環境変数（DB情報など）
```

