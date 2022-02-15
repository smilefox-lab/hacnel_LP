<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title></title>
<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
	<div id="container">
			<div>
				<img src="./assets/img/1.png">
			</div>
			<div>
				<img src="./assets/img/2.png">
			</div>
			<div>
				<img src="./assets/img/3.png">
			</div>
			<div>
				<img src="./assets/img/4.png">
			</div>
			<div>
				<img src="./assets/img/5.png">
			</div>
			<div>
				<img src="./assets/img/6.png">
			</div>
			<div>
				<img src="./assets/img/7.png">
			</div>
			<div>
				<img src="./assets/img/8.png">
			</div>
			<div>
				<img src="./assets/img/9.png">
			</div>
			<div>
				<img src="./assets/img/10.png">
			</div>
			<div>
				<img src="./assets/img/11.png">
			</div>
			<div>
				<img src="./assets/img/12.png">
			</div>
			<div>
				<img src="./assets/img/13.png">
			</div>
			<div>
				<img src="./assets/img/14.png">
			</div>
			<div>
				<img src="./assets/img/15.png">
			</div>
			<div>
				<img src="./assets/img/16.png">
			</div>
			<div>
				<img src="./assets/img/17.png">
			</div>
			<div>
				<img src="./assets/img/18.png">
			</div>
			<div>
				<img src="./assets/img/19.png">
			</div>
			<div class="content">
				<img src="./assets/img/20.png">
				<a href="#" class="first-chd btn-image">					
					<img src="./assets/img/btn1.png">
				</a>
			</div>
			<div class="content">
				<img src="./assets/img/21.png">
				<a href="#" class="second-chd btn-image">
					<img src="./assets/img/btn2.png">
				</a>
			</div>
			<div class="content">
				<img src="./assets/img/22.png">
				<a href="#" class="third-chd btn-image">
					<img src="./assets/img/btn3.png">
				</a>
			</div>
			<!-- <div>
				<img src="./assets/img/23.png">
			</div> -->
			<div class="content" id="bottom">
				<img class="p-50" src="./assets/img/23.png">
				<div class="quz-panel">
					<div class="quz-item-1 quz-item">
						<img class="close" src="./assets/img/24_close.png">
						<img class="open" src="./assets/img/24_open.png">
					</div>
					<div class="quz-item-2 quz-item">
						<img class="close" src="./assets/img/25_close.png">
						<img class="open" src="./assets/img/25_open.png">
					</div>
					<div class="quz-item-3 quz-item">
						<img class="close" src="./assets/img/26_close.png">
						<img class="open" src="./assets/img/26_open.png">
					</div>
					<div class="quz-item-4 quz-item">
						<img class="close" src="./assets/img/27_close.png">
						<img class="open" src="./assets/img/27_open.png">
					</div>
				</div>
			</div>
			<div class="top-to-btn-panel">
				<a href="#" id="smooth-scroll">
					<img src="./assets/img/arrow.png">
				</a>
			</div>
	</div>	
</body>
<script>
	// document.addEventListener('click', (e) => {
	// 	const parentNode = e.target.closest('.quz-item'); 
	// 	const currentOpenItem = document.querySelector('.open-item');
	// 	if(parentNode) {
	// 		if(parentNode.classList.contains('open-item')) {
	// 			parentNode.classList.remove('open-item');
	// 		} else {
	// 			parentNode.classList.add('open-item');
	// 		}
	// 	}
	// 	if(currentOpenItem) {
	// 		currentOpenItem.classList.remove('open-item')
	// 	}
	// })
	document.addEventListener('click', (e) => {
		const parentNode = e.target.closest('.quz-item');
		const currentOpenItem = document.querySelector('open-item');
		if (parentNode) {
			parentNode.classList.toggle('open-item');
		}
	})


</script>
</html>