<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body>
  <articl class="p-document">
    <a class="p-sampleBtn" href="<?php echo get_page_link('sample'); ?>" target="_blank">sample</a>
    <h1>ここまでの作業</h1>
    <ul>
    <li>
      <h2>Node.jsをインストール</h2>
      <a href="https://nodejs.org/ja/">https://nodejs.org/ja/</a>
    </li>
    <li>
      <h2>ターミナル(コマンドライン)を起動</h2>
    </li>
    <li>
      <h2>$ node -v</h2>
      <p>※バージョンが表示されれば正常にインストール済み</p>
    </li>
    <li>
      <h2>作業ディレクトリに移動</h2>
    </li>
    <li>
      <h2>$ npm init</h2>
      <p>Gulpのインストールです</p>
      <p>※とりあえずエンター連打で進める(最後はyes)</p>
      <p>※package.jsonが生成されます</p>
    </li>
    <li>
      <h2>$ npm install gulp --save-dev</h2>
      <p>Gulpのインストール</p>
    </li>
    <li>
      <h2>空のJavaScriptファイル「gulpfile.js」を作成</h2>
    </li>
    <li>
      <h2>$ npm install gulp-sass gulp-autoprefixer css-mqpacker gulp-postcss gulp-changed --save-dev</h2>
      <h2>$ npm i del gulp-imagemin imagemin-mozjpeg imagemin-pngquant imagemin-svgo</h2>
      <p>Gulpのプラグインのインストール</p>
      <p>gulp-sass・・・cssコンパイル</p>
      <p>gulp-autoprefixer・・・ベンダープレフィックス付与</p>
      <p>css-mqpacker・・・メディアクエリの整理</p>
      <p>gulp-postcss・・・Node.js製のCSSを操作するプラグインの作成が出来るフレームワーク</p>
      <p>gulp-imagemin・・・画像を自動圧縮する</p>
      <p>gulp-changed・・・変更されたファイルだけを処理させる</p>
      <p>imagemin-mozjpeg・・・jpegエンコーダー</p>
      <p>imagemin-pngquant・・・pngエンコーダー</p>
      <p>imagemin-svgo・・・svgエンコーダー</p>
    </li>
    <li>
      <h2>「package.json」の確認=>"devDependencies"にインストールしたプラグインが追加されているはずです</h2>
    </li>
    <li>
      <h2>「gulpfile.js」にコードを記載</h2>
    </li>
    <li>
      <h2>「package.json」に"browserslist"を追加</h2>
    </li>
    <li>
      <h2 class="p-dart">Dart-sass追加</h2>
    </li>
    </ul>
  </articl>
  <img src="<?php echo get_template_directory_uri(); ?>/images/neko.jpg">
</body>
<?php get_footer(); ?>
</html>