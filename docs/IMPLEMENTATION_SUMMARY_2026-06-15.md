# STYLE website 実装まとめ

対象: `/Users/newname/webproject/style_website`

## 実装内容

- 画像をWebP化して、HTML/CSSの参照先を差し替え
- HeroのPC/SP表示を調整
- スマホ表示で顔が切れにくいようにHeroのトリミングを調整
- `Concept` と `Store Interior` の間隔、店内画像の見せ方を調整
- `index.html` の CSS キャッシュバスターを更新
- OGP、LocalBusiness JSON-LD、sitemap.xml、robots.txt は既存構成を維持

## 変更した主なファイル

- `[index.html](/Users/newname/webproject/style_website/index.html)`
- `[assets/css/style.css](/Users/newname/webproject/style_website/assets/css/style.css)`
- `[assets/images/logo.webp](/Users/newname/webproject/style_website/assets/images/logo.webp)`
- `[assets/images/style_shop_hero_pc_1920x1080.webp](/Users/newname/webproject/style_website/assets/images/style_shop_hero_pc_1920x1080.webp)`
- `[assets/images/style_shop_hero_sp_1080x1440.webp](/Users/newname/webproject/style_website/assets/images/style_shop_hero_sp_1080x1440.webp)`
- `[assets/images/store.webp](/Users/newname/webproject/style_website/assets/images/store.webp)`

## 画像圧縮の前後比較

| 画像 | 変更前 | 変更後 | 削減量 | 削減率 |
| --- | ---: | ---: | ---: | ---: |
| `logo.png` -> `logo.webp` | 1,087,853 bytes | 548,426 bytes | 539,427 bytes | 49.6% |
| `style_shop_hero_pc_1920x1080.jpg` -> `.webp` | 1,867,729 bytes | 101,874 bytes | 1,765,855 bytes | 94.5% |
| `style_shop_hero_sp_1080x1440.jpg` -> `.webp` | 1,079,432 bytes | 69,092 bytes | 1,010,340 bytes | 93.6% |
| `store.jpg` -> `store.webp` | 89,349 bytes | 68,688 bytes | 20,661 bytes | 23.1% |

## 合計

- 変更前合計: 4,124,363 bytes
- 変更後合計: 788,080 bytes
- 削減量: 3,336,283 bytes
- 削減率: 80.9%

## 補足

- 公開サイト側でもWebP参照へ切り替え済み
- `style-logo.png` は未追跡のままなので、このまとめには含めていません
