<?php
require_once "shop.php";
?>
<?php
// セッションを開始
session_start();

// セッションからカートを取得
$cart = null;
if (isset($_SESSION["cart"])) {
	$cart = $_SESSION["cart"];
} else {
	$cart = [];
}

// リクエストパラメータを取得
$id = -1;
if (isset($_REQUEST["id"])) {
	$id = $_REQUEST["id"];
}
$mode = "";
if (isset($_REQUEST["mode"])) {
	$mode = $_REQUEST["mode"];
}

// リクエストパラメータに対応する楽器を取得
if ($id > -1) {
	$items = createItems();
	$item = $items[$id];
	// カートに選択された楽器を追加
	$cart[] = $item;
	// セッションに再設定する
	$_SESSION["cart"] = $cart;
}

// カートのクリア処理
if ($mode === "clear") {
	$cart = [];
	unset($_SESSION["cart"]);
	session_destroy();
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>課題・商品検索アプリケーション</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/shoppingcart.css" />	
</head>

<body id="products" class="list">
	<header>
		<h1>商品検索アプリケーション</h1>
	</header>

	<main>
		<article id="result">
			<h2>商品検索 - 検索結果</h2>
			<section>
				<h3>商品一覧</h3>
				<table>
					<caption><a href="entry.html">検索画面に戻る</a>　
					<a href="entry.html">カートの中身を見る</a></caption>
	<?php if (count($cart) === 0) { ?>
		<p>カートに商品は入っていません。</p>
	<?php } else { ?> 
	
		<tr>
			<th>書籍名</th>
			<th>価格</th>
			<th>著者</th>
			<th>ISBN</th>
			<th></th>
		</tr>
		<?php foreach ($cart as $product) { ?>
		<tr>
			<td><?= $product->getName() ?></td>
			<td><?= $product->getPrice() ?>円</td>
			
		</tr>
		<?php } ?>
	</table>
	<?php } ?>
</body>

</html>
