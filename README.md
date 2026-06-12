# STYLE 公式サイト

## 目的
- okayama-style.com の公式サイトとして公開
- Googleビジネスプロフィールと情報を一致させ、MEO対策を補強
- 店舗名、住所、営業時間、電話番号、料金を検索エンジンに正しく伝える

## 店舗情報
- 店名: STYLE（スタイル）
- 住所: 岡山市北区柳町1-9-8 柳町65ビル 2F
- 電話: 086-226-6766
- 営業時間: 19:00〜LAST
- 定休日: 日曜日
- セット料金: 5,000円
- 指名料: 1,000円

## 公開URL
https://okayama-style.com/

## 構成
- `index.html`
- `assets/css/style.css`
- `assets/js/main.js`
- `assets/images/`
- `sitemap.xml`
- `robots.txt`

## 運用情報
- ドメイン: https://okayama-style.com/
- GitHub: https://github.com/newname55/style.git
- 本番公開先: Xserver `/home/kubokuboben/okayama-style.com/public_html/`
- SSH Host:
  - `style-site`: 本番 public_html 直行用
  - `style-deploy`: rsync デプロイ用

## デプロイ方法
ローカルの変更を本番に反映するには、リポジトリルートで以下を実行する。

```bash
bash scripts/deploy.sh
```

- 実行すると `Type STYLE to continue:` と確認を求められるので、`STYLE` と入力すると rsync で本番に反映される
- `rsync -avz --delete` を使用するため、ローカルに存在しないファイルは本番から削除される
- `.git` / `.DS_Store` / `scripts` / `.env` は転送対象外
- 本番 public_html を直接編集しない。変更は必ず git にコミットしてから deploy.sh で反映する
