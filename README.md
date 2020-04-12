# spotify-api-search-artist

## アプリケーション概要・機能
Spotify Web APIを利用して、適当なアーティストを入力するとその関連アーティストが表示されます。
加えて、ワンクリックでSpotifyへと遷移することができ、すぐに該当アーティストの楽曲を聞くことが可能です。

## アプリケーション技術一覧
- 使用言語：HTML, SCSS, Vue.js, PHP
- Spotify Web APIを使用
- Spotify Web APIのPHP用ライブラリを使用
- UIにはElement UIを使用
- ユーザーエージェントによるPC,SPページの振り分け
- githubとherokuを連携してデプロイ
- APIキーについてはherokuの環境変数を参照する形で取得
- トップページの画像はsquooshにより圧縮済み
- 検索欄が空欄の際にはエラーメッセージ表示
