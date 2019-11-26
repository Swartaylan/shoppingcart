<?php
//require_once(Item.php);
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
					<tr>
						<th>タイトル</th>
						<th>価格</th>
						<th>収録時間 </th>
						
						<th></th>
					</tr>
					<tr>
						<td>The Net</td>
						<td>500 円 </td>
						<td>114 分 </td>
						
						<td><a href="entry.html">カートに入れる</a></td>
					</tr>
					<tr>
						<td>Star Wars: Force Awakens </td>
						<td>2,800 円 </td>
						<td>150 分 </td>
						
						<td><a href="entry.html">カートに入れる</a></td>
					</tr>
					<tr>
						<td>Outbreak</td>
						<td>900 円 </td>
						<td>129 分 </td>
						
						<td><a href="entry.html">カートに入れる</a></td>
					</tr>
					
					
				</table>
			</section>
		</article>
	</main>

	<footer>
		<div id="copyright">(C) 2019 The Advanced Course on Web System Development</div>
	</footer>
</body>

</html>