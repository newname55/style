# CLAUDE.md

## このリポジトリの目的
- STYLE(岡山市のスナック)の公式サイト https://okayama-style.com/ のソース管理
- 静的サイト(HTML / CSS / JS のみ。ビルド工程なし)
- Googleビジネスプロフィールと情報を一致させ、MEO対策を補強する

## 店舗情報
- 店名: STYLE(スタイル)
- 住所: 岡山市北区柳町1-9-8 柳町65ビル 2F
- 電話: 086-226-6766
- 営業時間: 19:00〜LAST
- 定休日: 日曜日
- セット料金: 5,000円
- 指名料: 1,000円

店舗情報を変更する場合は、`index.html` の表示・構造化データ(JSON-LD)・README.md・このファイルをすべて一致させること。

## デプロイ手順
1. 変更を git にコミットする
2. リポジトリルートで `bash scripts/deploy.sh` を実行する
3. `Type STYLE to continue:` に `STYLE` と入力すると、rsync で本番(Xserver `/home/kubokuboben/okayama-style.com/public_html/`)に反映される

- SSH Host `style-deploy` を使用(rsyncデプロイ用)。`style-site` は本番 public_html への直接接続用
- `rsync -avz --delete` のため、ローカルに無いファイルは本番から削除される。デプロイ前に作業ツリーが正しい状態か必ず確認する
- デプロイはユーザーの明示的な指示があるときのみ実行する

## 作業時の注意点
- 既存の `index.html` / `assets/` / `sitemap.xml` / `robots.txt` を壊さないこと
- 店舗名・住所・電話番号・営業時間・料金は Googleビジネスプロフィールと一致させること(勝手に変更しない)
- `.env` は git 管理外・デプロイ対象外。秘密情報をコミットしない
- `scripts/` は本番に転送されない(deploy.sh で除外)

## 本番 public_html を直接編集しない方針
本番サーバー(`/home/kubokuboben/okayama-style.com/public_html/`)のファイルを SSH で直接編集・削除しないこと。変更は必ず以下の流れで行う。

1. ローカル(このリポジトリ)で編集
2. git にコミット
3. `scripts/deploy.sh` で本番に反映

直接編集すると、次回デプロイ時に `rsync --delete` で上書き・消失する。
