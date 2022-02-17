<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<!-- Title  -->
	<title>
		Hacnel
	</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<!-- Favicon  -->
	<link rel="icon" href="assets/img/favicon.png">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
</script>

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
		<div class="showBuyButton">
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
		<div class="buying-form" style="padding-bottom:0;" id="buy_form">
			<div class="inner">
				<img src="./assets/img/buying_form.png" alt="Buying Form">
				<h3 class="h3-title">
					ご購入フォーム
				</h3>
			</div>
		</div>
		<div class="amazon_pay_box_ec">
			<div class="amazon_pay_title_ec">Amazonアカウントで簡単お申込み！</div>
			<div class="amazon_pay_button_area_ec">
				<a href="https://payments.amazon.co.jp/checkout/authCreate?client_id=amzn1.application-oa2-client.e5f402d6862d4db0acf3d18579c50397&redirect_uri=https%3A%2F%2Fpayments.amazon.co.jp%2Fsdk%2F2018-02-08-63k6q26l%2Ftopic.html%3Furi%3Dhttps%253A%252F%252Fybl-store.net%252Flp%26proxy%3Damazon-proxy-iframe-name%26topic%3DEbAOWIVDqZRzonWZ%26version%3D1&response_type=token&language=&ui_locales=&login_popup_fallback=false&scope=profile%20postal_code%20payments%3Awidget%20payments%3Ashipping_address&coe=JP&ledger_currency=JPY&env=LIVE&is_itp_request=true&origin_url=https%3A%2F%2Fybl-store.net%2Flp%3Fu%3Dpcrkrlis%26gclid%3DEAIaIQobChMIr4jEodTb9QIVh66WCh0DwApnEAAYASAAEgKqavD_BwE%23lp-form&interactive=auto&merchant_id=A1DFC23Q9OORQY&apst=rnxlq2WtoQGw7RBKwVSUa6MI8oN40VqCfvuavCUhBfqWHFUhPoI2UM02e7JOWWw%253D"
					target="_blank">
					<img class=" amazonpay-button-inner-image" style="cursor:pointer; max-height:60px;" alt="AmazonPay"
						id="OffAmazonPaymentsWidgets0" src="./assets/img/PwA_2x.png" tabindex="0">
				</a>
			</div>
			<div class="amazon_pay_message_ec">Amazonに登録しているお支払い情報、お届け先情報を使用して簡単にお申込みが可能です。</div>
		</div>

		<h4 class="landing_form_label_ec" id="view-billing-information-header">お客様情報のご入力</h4>

		<form action="/form/mail.php" class="form_main_container_ec" id="new-view" method="post"
			style="display: block;">

			<div class="purchase_message_ec">
				<p>下記お客さま情報を全てご記入いただき、お申し込みボタンをクリックしてください。</p>
			</div>
			<input name="_method" type="hidden" value="put">
			<input name="order[state]" type="hidden" value="new">
			<!-- 【必須】請求先住所 -->
			<div id="view-billing-information">
				<table class="landing_form_ec">
					<tbody>
						<tr class="input_variant_ec">
							<th>
								<p class="form_box_label_ec">
									<strong>商品名</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td id="product_container">
								<div class="form_group_ec">
									<div><select id="product_id"
											class="input_box_product_ec validate[required] product_select">
											<option value="8" selected="selected" data-product-id="8"
												data-distribution-club="false">GLAMOROUSPATS★5+2着セット</option>
											<option value="6" data-product-id="6" data-distribution-club="false">
												GLAMOROUSPATS★3+1着セット</option>
											<option value="5" data-product-id="5" data-distribution-club="false">
												GLAMOROUSPATS★単品</option>
											<option value="24" data-product-id="24" data-distribution-club="false">
												DAILYSLIM■5+2着セット</option>
											<option value="23" data-product-id="23" data-distribution-club="false">
												DAILYSLIM■3+1着セット</option>
											<option value="22" data-product-id="22" data-distribution-club="false">
												DAILYSLIM■単品</option>
										</select></div>
									<div>
										<div id="option_types" class="option_types">
											<div class="input_option_type_container">
												<div id="option_type_0" class="option_type option_type_0" style="">
													<label
														style="display: inline-block; width: 80px;">グラマラスパッツ</label><select
														id="input_option_type_0"
														class="input_option_type validate[required] input_option_type_0"
														data-index="0">
														<option value="">選択してください</option>
														<option value="23">M-L×5着</option>
														<option value="24">M-L×4着 / L-LL×1着</option>
														<option value="25">M-L×3着 / L-LL×2着</option>
														<option value="26">M-L×2着 / L-LL×3着</option>
														<option value="27">M-L×1着 / L-LL×4着</option>
														<option value="28">L-LL×5着</option>
													</select>
												</div>
												<div id="option_type_1" class="option_type option_type_1"
													style="display: none"><label
														style="display: inline-block; width: 80px;">ナイトスリム</label><select
														id="input_option_type_1"
														class="input_option_type validate[required] input_option_type_1"
														data-index="1">
														<option value="">選択してください</option>
														<option value="31">M-L×2着</option>
														<option value="32">M-L×1着 / L-LL×1着</option>
														<option value="33">L-LL×2着</option>
													</select></div>
											</div><input type="hidden" class="variant_select" value="34">
										</div>
									</div>
									<div><select id="quantity"
											class="input_box_quantity_ec validate[required] quantity_select">
											<option value="1" selected="selected">1 個</option>
											<option value="2">2 個</option>
											<option value="3">3 個</option>
											<option value="4">4 個</option>
											<option value="5">5 個</option>
											<option value="6">6 個</option>
											<option value="7">7 個</option>
											<option value="8">8 個</option>
											<option value="9">9 個</option>
											<option value="10">10 個</option>
										</select></div><input id="variant_id" type="hidden">
								</div>
							</td>
						</tr>
						<tr class="input_name_ec hide-on-amazon-pay">
							<th>
								<p class="form_box_label_ec">
									<strong>お名前</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<input class="input_box_name_ec validate[required]" data-prompt-position="topLeft"
										id="order_billing_address_attributes_name1"
										name="order[billing_address_attributes][name01]" placeholder="例）山田 花子">
								</div>
							</td>
						</tr>
						<tr class="input_kana_ec hide-on-amazon-pay">
							<th>
								<p class="form_box_label_ec">
									<strong class="form_label_ec">フリガナ</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<input class="input_box_kana_ec validate[required,custom[katakana]]"
										data-prompt-position="topLeft" id="order_billing_address_attributes_kana1"
										name="order[billing_address_attributes][kana01]" placeholder="例）ヤマダ ハナコ">
								</div>
							</td>
						</tr>
						<tr class="input_zip_ec hide-on-amazon-pay">
							<th>
								<p class="form_box_label_ec">
									<strong>郵便番号</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<label>〒</label>
									<input class="input_box_zip_ec validate[required,custom[integer]]"
										data-prompt-position="topLeft" id="order_billing_address_attributes_zip01"
										maxlength="7" name="order[billing_address_attributes][zip01]"
										placeholder="例）1500031">
								</div>
							</td>
						</tr>
						<tr class="input_prefecture_ec hide-on-amazon-pay">
							<th>
								<p class="form_box_label_ec">
									<strong>都道府県</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<select class="input_box_pref_ec validate[required]" data-prompt-position="topLeft"
										id="order_billing_address_attributes_prefecture_name"
										name="order[billing_address_attributes][prefecture_id]">
										<option value="">選択してください</option>
										<option value="1">北海道</option>
										<option value="2">青森県</option>
										<option value="3">岩手県</option>
										<option value="4">宮城県</option>
										<option value="5">秋田県</option>
										<option value="6">山形県</option>
										<option value="7">福島県</option>
										<option value="8">茨城県</option>
										<option value="9">栃木県</option>
										<option value="10">群馬県</option>
										<option value="11">埼玉県</option>
										<option value="12">千葉県</option>
										<option value="13">東京都</option>
										<option value="14">神奈川県</option>
										<option value="15">新潟県</option>
										<option value="16">富山県</option>
										<option value="17">石川県</option>
										<option value="18">福井県</option>
										<option value="19">山梨県</option>
										<option value="20">長野県</option>
										<option value="21">岐阜県</option>
										<option value="22">静岡県</option>
										<option value="23">愛知県</option>
										<option value="24">三重県</option>
										<option value="25">滋賀県</option>
										<option value="26">京都府</option>
										<option value="27">大阪府</option>
										<option value="28">兵庫県</option>
										<option value="29">奈良県</option>
										<option value="30">和歌山県</option>
										<option value="31">鳥取県</option>
										<option value="32">島根県</option>
										<option value="33">岡山県</option>
										<option value="34">広島県</option>
										<option value="35">山口県</option>
										<option value="36">徳島県</option>
										<option value="37">香川県</option>
										<option value="38">愛媛県</option>
										<option value="39">高知県</option>
										<option value="40">福岡県</option>
										<option value="41">佐賀県</option>
										<option value="42">長崎県</option>
										<option value="43">熊本県</option>
										<option value="44">大分県</option>
										<option value="45">宮崎県</option>
										<option value="46">鹿児島県</option>
										<option value="47">沖縄県</option>
									</select>
								</div>
							</td>
						</tr>
						<tr class="input_addr01_ec hide-on-amazon-pay">
							<th>
								<p class="form_box_label_ec">
									<strong>住所1（市郡区／町・村）</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<input class="input_box_addr1_ec validate[required]" data-prompt-position="topLeft"
										id="order_billing_address_attributes_addr01"
										name="order[billing_address_attributes][addr01]" placeholder="例）○○市△△区□町">
								</div>
							</td>
						</tr>
						<tr class="input_addr02_ec hide-on-amazon-pay">
							<th>
								<p class="form_box_label_ec">
									<strong>住所2（丁目・番地・マンション名・号室）</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<input class="input_box_addr2_ec validate[required]" data-prompt-position="topLeft"
										id="order_billing_address_attributes_addr02"
										name="order[billing_address_attributes][addr02]"
										placeholder="例）△△ 1-4 ○○マンション101号">
								</div>
							</td>
						</tr>
						<tr class="input_tel_ec hide-on-amazon-pay">
							<th>
								<p class="form_box_label_ec">
									<strong>電話番号</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<input class="input_box_tel_ec validate[required,custom[integer]]"
										data-prompt-position="topLeft" maxlength="12"
										name="order[billing_address_attributes][tel01]" placeholder="例）00000000000">
								</div>
							</td>
						</tr>
						<tr class="input_email_ec">
							<th>
								<p class="form_box_label_ec">
									<strong>メールアドレス</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<input
										class="js-email-autocomplete input_box_email_ec validate[required,custom[email],ajax[emailCheck]]"
										data-prompt-position="topLeft" id="email" name="order[email]"
										placeholder="例）○○○@example.com" type="email">
									<input id="customer_email" name="order[customer_attributes][email]" type="hidden">
								</div>
							</td>
						</tr>
						<tr class="input_password_ec">
							<th>
								<p class="form_box_label_ec">
									<strong>パスワード</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<input class="input_box_password_ec validate[required,minSize[8]]"
										data-prompt-position="topLeft" id="password"
										name="order[customer_attributes][password]" placeholder="半角英数字8文字以上"
										type="password">
								</div>
							</td>
						</tr>
						<tr class="input_sex_ec">
							<th>
								<p class="form_box_label_ec">
									<strong>性別</strong>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<select class="input_box_sex_ec" data-prompt-position="topLeft"
										id="order_customer_attributes_sex_id" name="order[customer_attributes][sex_id]">
										<option value="">選択してください</option>
										<option value="1">男性</option>
										<option value="2">女性</option>
									</select>
								</div>
							</td>
						</tr>
						<tr class="input_birth_ec">
							<th>
								<p class="form_box_label_ec">
									<strong>生年月日</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<select class="input_box_birth_year_ec validate[required]"
										data-prompt-position="topLeft" id="order_customer_attributes_birth_1i"
										name="order[customer_attributes][birth(1i)]">
										<option value="">----</option>
										<option value="1922">1922 年</option>
										<option value="1923">1923 年</option>
										<option value="1924">1924 年</option>
										<option value="1925">1925 年</option>
										<option value="1926">1926 年</option>
										<option value="1927">1927 年</option>
										<option value="1928">1928 年</option>
										<option value="1929">1929 年</option>
										<option value="1930">1930 年</option>
										<option value="1931">1931 年</option>
										<option value="1932">1932 年</option>
										<option value="1933">1933 年</option>
										<option value="1934">1934 年</option>
										<option value="1935">1935 年</option>
										<option value="1936">1936 年</option>
										<option value="1937">1937 年</option>
										<option value="1938">1938 年</option>
										<option value="1939">1939 年</option>
										<option value="1940">1940 年</option>
										<option value="1941">1941 年</option>
										<option value="1942">1942 年</option>
										<option value="1943">1943 年</option>
										<option value="1944">1944 年</option>
										<option value="1945">1945 年</option>
										<option value="1946">1946 年</option>
										<option value="1947">1947 年</option>
										<option value="1948">1948 年</option>
										<option value="1949">1949 年</option>
										<option value="1950">1950 年</option>
										<option value="1951">1951 年</option>
										<option value="1952">1952 年</option>
										<option value="1953">1953 年</option>
										<option value="1954">1954 年</option>
										<option value="1955">1955 年</option>
										<option value="1956">1956 年</option>
										<option value="1957">1957 年</option>
										<option value="1958">1958 年</option>
										<option value="1959">1959 年</option>
										<option value="1960">1960 年</option>
										<option value="1961">1961 年</option>
										<option value="1962">1962 年</option>
										<option value="1963">1963 年</option>
										<option value="1964">1964 年</option>
										<option value="1965">1965 年</option>
										<option value="1966">1966 年</option>
										<option value="1967">1967 年</option>
										<option value="1968">1968 年</option>
										<option value="1969">1969 年</option>
										<option value="1970">1970 年</option>
										<option value="1971">1971 年</option>
										<option value="1972">1972 年</option>
										<option value="1973">1973 年</option>
										<option value="1974">1974 年</option>
										<option value="1975">1975 年</option>
										<option value="1976">1976 年</option>
										<option value="1977">1977 年</option>
										<option value="1978">1978 年</option>
										<option value="1979">1979 年</option>
										<option value="1980">1980 年</option>
										<option value="1981">1981 年</option>
										<option value="1982">1982 年</option>
										<option value="1983">1983 年</option>
										<option value="1984">1984 年</option>
										<option value="1985">1985 年</option>
										<option value="1986">1986 年</option>
										<option value="1987">1987 年</option>
										<option value="1988">1988 年</option>
										<option value="1989">1989 年</option>
										<option value="1990">1990 年</option>
										<option value="1991">1991 年</option>
										<option value="1992">1992 年</option>
										<option value="1993">1993 年</option>
										<option value="1994">1994 年</option>
										<option value="1995">1995 年</option>
										<option value="1996">1996 年</option>
										<option value="1997">1997 年</option>
										<option value="1998">1998 年</option>
										<option value="1999">1999 年</option>
										<option value="2000">2000 年</option>
										<option value="2001">2001 年</option>
										<option value="2002">2002 年</option>
										<option value="2003">2003 年</option>
										<option value="2004">2004 年</option>
										<option value="2005">2005 年</option>
										<option value="2006">2006 年</option>
										<option value="2007">2007 年</option>
										<option value="2008">2008 年</option>
										<option value="2009">2009 年</option>
										<option value="2010">2010 年</option>
										<option value="2011">2011 年</option>
										<option value="2012">2012 年</option>
										<option value="2013">2013 年</option>
										<option value="2014">2014 年</option>
										<option value="2015">2015 年</option>
										<option value="2016">2016 年</option>
										<option value="2017">2017 年</option>
										<option value="2018">2018 年</option>
										<option value="2019">2019 年</option>
										<option value="2020">2020 年</option>
										<option value="2021">2021 年</option>
										<option value="2022">2022 年</option>
									</select>
									<select class="input_box_birth_month_ec validate[required]"
										data-prompt-position="topLeft" id="order_customer_attributes_birth_2i"
										name="order[customer_attributes][birth(2i)]">
										<option value="">--</option>
										<option value="1">1 月</option>
										<option value="2">2 月</option>
										<option value="3">3 月</option>
										<option value="4">4 月</option>
										<option value="5">5 月</option>
										<option value="6">6 月</option>
										<option value="7">7 月</option>
										<option value="8">8 月</option>
										<option value="9">9 月</option>
										<option value="10">10 月</option>
										<option value="11">11 月</option>
										<option value="12">12 月</option>
									</select>
									<select class="input_box_birth_day_ec validate[required]"
										data-prompt-position="topLeft" id="order_customer_attributes_birth_3i"
										name="order[customer_attributes][birth(3i)]">
										<option value="">--</option>
										<option value="1">1 日</option>
										<option value="2">2 日</option>
										<option value="3">3 日</option>
										<option value="4">4 日</option>
										<option value="5">5 日</option>
										<option value="6">6 日</option>
										<option value="7">7 日</option>
										<option value="8">8 日</option>
										<option value="9">9 日</option>
										<option value="10">10 日</option>
										<option value="11">11 日</option>
										<option value="12">12 日</option>
										<option value="13">13 日</option>
										<option value="14">14 日</option>
										<option value="15">15 日</option>
										<option value="16">16 日</option>
										<option value="17">17 日</option>
										<option value="18">18 日</option>
										<option value="19">19 日</option>
										<option value="20">20 日</option>
										<option value="21">21 日</option>
										<option value="22">22 日</option>
										<option value="23">23 日</option>
										<option value="24">24 日</option>
										<option value="25">25 日</option>
										<option value="26">26 日</option>
										<option value="27">27 日</option>
										<option value="28">28 日</option>
										<option value="29">29 日</option>
										<option value="30">30 日</option>
										<option value="31">31 日</option>
									</select>
									<span id="order_customer_attributes_birth_age_check"
										style="display: none;">false</span>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div id="cart_items" style="display:none;"><input type="hidden"
						name="order[order_items_attributes][][variant_id]" value="34"><input type="hidden"
						name="order[order_items_attributes][][quantity]" value="1"></div>
			</div>

			<!-- 【必須】お届け先住所 -->
			<h4 class="landing_form_label_ec">お届け先情報</h4>
			<div id="view-shipping-information">
				<table class="landing_form_ec">
					<tbody>
						<tr class="hide-on-amazon-pay">
							<th>
								<p class="form_box_label_ec">
									<strong class="form_label_ec">お届け先住所</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<select class="validate[required]" id="shipping_address_id"
										name="order[shipping_address_id]">
										<option selected="" value="same">上記住所と同じ</option>
										<option value="new">新しく入力する</option>
									</select>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div id="view-amazon-pay-address-book-widget" style="display:none;">
					<table class="landing_form_ec">
						<tbody>
							<tr>
								<td colspan="2">
									<div class="address_book_widget_wrapper_ec" id="addressBookWidgetDiv"></div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="shipping_address_input" style="display:none;">
					<table class="landing_form_ec hide-on-amazon-pay">
						<tbody>
							<tr class="input_name_ec">
								<th>
									<p class="form_box_label_ec">
										<strong>お名前</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<input class="input_box_name_ec validate[required]"
											data-prompt-position="topLeft" id="order_shipping_address_attributes_name1"
											name="order[shipping_address_attributes][name01]" placeholder="例）山田 花子">
									</div>
								</td>
							</tr>
							<tr class="input_kana_ec">
								<th>
									<p class="form_box_label_ec">
										<strong class="form_label_ec">フリガナ</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<input class="input_box_kana_ec validate[required,custom[katakana]]"
											data-prompt-position="topLeft" id="order_shipping_address_attributes_kana1"
											name="order[shipping_address_attributes][kana01]" placeholder="例）ヤマダ ハナコ">
									</div>
								</td>
							</tr>
							<tr class="input_zip_ec">
								<th>
									<p class="form_box_label_ec">
										<strong>郵便番号</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<p>
											<label>〒</label>
											<input class="input_box_zip_ec validate[required,custom[integer]]"
												data-prompt-position="topLeft"
												id="order_shipping_address_attributes_zip01" maxlength="7"
												name="order[shipping_address_attributes][zip01]"
												placeholder="例）1500031">
										</p>
									</div>
								</td>
							</tr>
							<tr class="input_prefecture_ec">
								<th>
									<p class="form_box_label_ec">
										<strong>都道府県</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<select class="input_box_pref_ec validate[required]"
											data-prompt-position="topLeft"
											id="order_shipping_address_attributes_prefecture_name"
											name="order[shipping_address_attributes][prefecture_id]">
											<option value="">選択してください</option>
											<option value="1">北海道</option>
											<option value="2">青森県</option>
											<option value="3">岩手県</option>
											<option value="4">宮城県</option>
											<option value="5">秋田県</option>
											<option value="6">山形県</option>
											<option value="7">福島県</option>
											<option value="8">茨城県</option>
											<option value="9">栃木県</option>
											<option value="10">群馬県</option>
											<option value="11">埼玉県</option>
											<option value="12">千葉県</option>
											<option value="13">東京都</option>
											<option value="14">神奈川県</option>
											<option value="15">新潟県</option>
											<option value="16">富山県</option>
											<option value="17">石川県</option>
											<option value="18">福井県</option>
											<option value="19">山梨県</option>
											<option value="20">長野県</option>
											<option value="21">岐阜県</option>
											<option value="22">静岡県</option>
											<option value="23">愛知県</option>
											<option value="24">三重県</option>
											<option value="25">滋賀県</option>
											<option value="26">京都府</option>
											<option value="27">大阪府</option>
											<option value="28">兵庫県</option>
											<option value="29">奈良県</option>
											<option value="30">和歌山県</option>
											<option value="31">鳥取県</option>
											<option value="32">島根県</option>
											<option value="33">岡山県</option>
											<option value="34">広島県</option>
											<option value="35">山口県</option>
											<option value="36">徳島県</option>
											<option value="37">香川県</option>
											<option value="38">愛媛県</option>
											<option value="39">高知県</option>
											<option value="40">福岡県</option>
											<option value="41">佐賀県</option>
											<option value="42">長崎県</option>
											<option value="43">熊本県</option>
											<option value="44">大分県</option>
											<option value="45">宮崎県</option>
											<option value="46">鹿児島県</option>
											<option value="47">沖縄県</option>
										</select>
									</div>
								</td>
							</tr>
							<tr class="input_addr01_ec">
								<th>
									<p class="form_box_label_ec">
										<strong>住所1（市郡区／町・村）</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<input class="input_box_addr1_ec validate[required]"
											data-prompt-position="topLeft" id="order_shipping_address_attributes_addr01"
											name="order[shipping_address_attributes][addr01]" placeholder="例）○○市△△区□町">
									</div>
								</td>
							</tr>
							<tr class="input_addr02_ec">
								<th>
									<p class="form_box_label_ec">
										<strong>住所2（丁目・番地・マンション名・号室）</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<input class="input_box_addr2_ec validate[required]"
											data-prompt-position="topLeft" id="order_shipping_address_attributes_addr02"
											name="order[shipping_address_attributes][addr02]"
											placeholder="例）△△ 1-4 ○○マンション101号">
									</div>
								</td>
							</tr>
							<tr class="input_tel_ec">
								<th>
									<p class="form_box_label_ec">
										<strong>電話番号</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<input class="input_box_tel_ec validate[required,custom[integer]]"
											data-prompt-position="topLeft" maxlength="12"
											name="order[shipping_address_attributes][tel01]"
											placeholder="例）00000000000">
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!-- ラッピング等 -->
			<div id="view-wrapping-information">
			</div>

			<!-- ポイント利用 -->
			<div id="view-point-redeem">
			</div>

			<div id="view-invite_code">
			</div>

			<!-- クーポン利用 -->
			<div id="view-coupon">
			</div>

			<!-- 【必須】お支払い情報 -->
			<h4 class="landing_form_label_ec">お支払い情報</h4>
			<div id="view-payment-information">
				<table class="landing_form_ec">
					<tbody>
						<tr>
							<th>
								<p class="form_box_label_ec">
									<strong>お支払い方法</strong>
									<span class="form_required_ec">必須</span>
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<select class="input_box_card_method_ec validate[required,custom[integer]]"
										id="payment_method_id" name="order[payment_attributes][payment_method_id]">
										<option value="31">クレジットカード一括</option>
										<option value="32">クレジットカード分割</option>
										<option value="33">クレジットカードリボ</option>
										<option value="14">Amazon Pay</option>
										<option value="4">後払い</option>
										<option value="74">SBPS キャリア ソフトバンクまとめて支払い</option>
										<option value="75">SBPS キャリア ドコモ払い</option>
										<option value="76">SBPS キャリア auかんたん決済</option>
										<option value="99">テスト用決済（外部決済）</option>
									</select>
									<div class="amazon_pay_button_wallet_ec" id="AmazonPayButtonWallet"
										style="display:none;">
										<input name="order[payment_attributes][source_attributes][access_token]"
											type="hidden" disabled="disabled">
										<input class="billing_agreement_ec validate[required]"
											data-errormessage="ログインしてください"
											name="order[payment_attributes][source_attributes][billing_agreement]"
											disabled="disabled">
										<img class=" amazonpay-button-inner-image"
											style="cursor:pointer; max-height:45px;" alt="AmazonPay"
											id="OffAmazonPaymentsWidgets1"
											src="https://d1oct1bdmx33tz.cloudfront.net/default/jp/live/lwa/gold/medium/PwA.png"
											tabindex="0">
									</div>
									<div id="payment_method_description"></div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div id="view-amazon-pay-wallet-widget" style="display:none;">
					<table class="landing_form_ec">
						<tbody>
							<tr>
								<td colspan="2">
									<div class="wallet_widget_wrapper_ec" id="walletWidgetDiv"></div>
									<div class="consent_wrapper_ec">
										<span class="consent_message_ec">⬇ 下記にチェックを入れてください</span>
										<span class="consent_mandatory_ec">必須</span>
										<input class="consent_checkbox_ec validate[required]"
											data-prompt-position="bottomLeft:0,100"
											name="order[payment_attributes][source_attributes][consent]" type="checkbox"
											disabled="disabled">
									</div>
									<div class="consent_widget_wrapper_ec" id="consentWidgetDiv"></div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="view-payment-times" style="display:none;">
					<table class="landing_form_ec">
						<tbody>
							<tr>
								<th>
									<p class="form_box_label_ec">
										<strong>お支払い回数</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<select class="input_box_card_times_ec validate[required,custom[integer]]"
											data-prompt-position="topLeft" id="order_payment_times"
											name="order[payment_attributes][payment_times]">
											<option>--</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
										</select>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="view-credit-card-information" style="">
					<input id="input-cc-access-token" name="order[payment_attributes][source_attributes][access_token]"
						type="hidden" value="">
					<input class="validate[ajax[creditcardCheck]]" data-prompt-position="inline"
						data-prompt-target="view-input-card-number" id="input-cc-check-access-token" type="hidden"
						value="">
					<table class="landing_form_ec">
						<tbody>
							<tr class="input_card_number_ec">
								<th>
									<p class="form_box_label_ec">
										<strong>クレジットカード番号</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<div id="view-input-card-number">
											<p>
												<input id="input-cc-default"
													name="order[payment_attributes][source_attributes][default]"
													type="hidden" value="1">
											</p>
											<p>
												<input id="input-cc-type"
													name="order[payment_attributes][source_attributes][cc_type]"
													type="hidden" value="">
											</p>
											<p>
												<input autocomplete="off"
													class="input_box_card_number_ec validate[required]"
													data-prompt-position="topLeft" id="input-cc-number"
													name="order[payment_attributes][source_attributes][number]"
													placeholder="例）4111xxxxxxxxxxxx">
											</p>
											<p>
												<input id="input-cc-gateway-card-seq"
													name="order[payment_attributes][source_attributes][gateway_card_seq]"
													type="hidden" value="">
											</p>
											<p class="caution_ec">※ 数字のみで続けて入力してください。</p>
										</div>
									</div>
								</td>
							</tr>
							<tr class="input_card_expiration_ec" id="view-input-card-expire">
								<th>
									<p class="form_box_label_ec">
										<strong>カードの有効期限</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<p>
											<select class="input_box_card_month_ec validate[required,custom[integer]]"
												data-prompt-position="topLeft" id="input-cc-month"
												name="order[payment_attributes][source_attributes][month]">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
											<span>月</span>
											<select class="input_box_card_year_ec validate[required,custom[integer]]"
												data-prompt-position="topLeft" id="input-cc-year"
												name="order[payment_attributes][source_attributes][year]">
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
												<option value="32">32</option>
												<option value="33">33</option>
												<option value="34">34</option>
												<option value="35">35</option>
												<option value="36">36</option>
												<option value="37">37</option>
											</select>
											<span>年</span>
										</p>
										<p class="caution_ec">例）カードの表記03/18→03月/18年</p>
									</div>
								</td>
							</tr>
							<tr class="input_card_name_ec" id="view-input-card-name">
								<th>
									<p class="form_box_label_ec">
										<strong>カードの名義人</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<input class="input_box_card_name_ec validate[required]"
											data-prompt-position="topLeft" id="input-cc-name"
											name="order[payment_attributes][source_attributes][name]"
											placeholder="例）HANAKO YAMADA">
									</div>
								</td>
							</tr>
							<tr class="input_card_cvv_ec" id="view-input-card-cvv" style="display: none;">
								<th>
									<p class="form_box_label_ec">
										<strong>セキュリティコード</strong>
										<span class="form_required_ec">必須</span>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<input autocomplete="off" class="input_box_card_cvv_ec validate[required]"
											data-prompt-position="topLeft" id="input-cc-cvv" name="cvv"
											placeholder="例）123">
									</div>
									<p class="caution_ec">
									</p>
									<ul style="list-style:square">
										<li>
											(VISA MasterCard JCB 等）
											<br>
											カード裏面に印字されている下3桁の数字
											<br>
										</li>
										<li>
											(American Express）
											<br>
											クレジットカードの表面(メインのカード番号の右上）に記載されている 4 桁の数字
											<br>
										</li>
									</ul>
									<img
										src="/assets/cvv_example-5ecc5e14948459207b03d9b92b608716b92e18926ca2e1eb91f6b4356c85f490.jpg">
									<p></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!-- 配送業者の指定 -->
			<div id="view-shipping-carrier">
			</div>

			<!-- 【必須】お届け日の指定 -->
			<div id="view-payment-schedule" style="display: none;">
				<input id="payment_schedule" name="order[subs_order_attributes][payment_schedule]" type="hidden"
					value="">
				<input id="payment_schedule_locked" name="order[subs_order_attributes][payment_schedule_locked]"
					type="hidden">
				<input id="scheduled_to_be_delivered_every_x_month"
					name="order[subs_order_attributes][scheduled_to_be_delivered_every_x_month]" type="hidden" value="">
				<input id="scheduled_to_be_delivered_on_xth_day"
					name="order[subs_order_attributes][scheduled_to_be_delivered_on_xth_day]" type="hidden" value="">
				<input id="scheduled_to_be_delivered_every_x_day"
					name="order[subs_order_attributes][scheduled_to_be_delivered_every_x_day]" type="hidden" value="">
				<input id="scheduled_to_be_delivered_on_xth_day_of_week"
					name="order[subs_order_attributes][scheduled_to_be_delivered_on_xth_day_of_week]" type="hidden"
					value="">
				<input id="scheduled_to_be_delivered_every_x_day_of_week"
					name="order[subs_order_attributes][scheduled_to_be_delivered_every_x_day_of_week]" type="hidden"
					value="">
				<input id="scheduled_2nd_delivery_date"
					name="order[subs_order_attributes][scheduled_to_be_delivered_at]" type="hidden" value="">
				<input id="scheduled_2nd_delivery_time" name="order[subs_order_attributes][scheduled_delivery_time]"
					type="hidden" value="">
				<input id="scheduled_to_be_delivered_at" type="hidden" value="">
				<input id="scheduled_1st_delivery_date" name="order[scheduled_to_be_delivered_at]" type="hidden"
					value="">
				<input id="scheduled_1st_delivery_time" name="order[scheduled_delivery_time]" type="hidden" value="">
				<h4 class="landing_form_label_ec">お届け日の指定</h4>
				<div id="container_payment_schedule">
					<div id="container_delivery_cycle" style="display:none;">
						<table class="landing_form_ec">
							<tbody>
								<tr>
									<th>
										<p class="form_box_label_ec">
											<strong>お届けサイクルの指定</strong>
											<span class="form_required_ec">必須</span>
										</p>
									</th>
									<td>
										<div class="form_group_ec">
											<select class="input_box_payment_schedule_ec validate[required]"
												data-prompt-position="topLeft" id="select_payment_schedule">
												<option value="date">日付で指定</option>
												<option value="term">間隔で指定</option>
												<option value="day_of_week">曜日で指定</option>
											</select>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div id="container_delivery_schedule_by_date" style="display:none;">
						<table class="landing_form_ec">
							<tbody>
								<tr>
									<th>
										<p class="form_box_label_ec">
											<strong></strong>
											<span class="form_required_ec">必須</span>
										</p>
									</th>
									<td>
										<div class="form_group_ec">
											<p>
												<select class="validate[required]" data-prompt-position="topLeft"
													id="select_scheduled_to_be_delivered_every_x_month"></select>
												ごとの
												<select class="validate[required]" data-prompt-position="topLeft"
													id="select_scheduled_to_be_delivered_on_xth_day">
													<option value="1">1日</option>
													<option value="2">2日</option>
													<option value="3">3日</option>
													<option value="4">4日</option>
													<option value="5">5日</option>
													<option value="6">6日</option>
													<option value="7">7日</option>
													<option value="8">8日</option>
													<option value="9">9日</option>
													<option value="10">10日</option>
													<option value="11">11日</option>
													<option value="12">12日</option>
													<option value="13">13日</option>
													<option value="14">14日</option>
													<option value="15">15日</option>
													<option value="16">16日</option>
													<option value="17">17日</option>
													<option value="18">18日</option>
													<option value="19">19日</option>
													<option value="20">20日</option>
													<option value="21">21日</option>
													<option value="22">22日</option>
													<option value="23">23日</option>
													<option value="24">24日</option>
													<option value="25">25日</option>
													<option value="26">26日</option>
													<option value="27">27日</option>
													<option value="28">28日</option>
													<option value="99">末日</option>
												</select>
												に配送
											</p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div id="container_delivery_schedule_by_term" style="display:none;">
						<table class="landing_form_ec">
							<tbody>
								<tr>
									<th>
										<p class="form_box_label_ec">
											<strong></strong>
											<span class="form_required_ec">必須</span>
										</p>
									</th>
									<td>
										<div class="form_group_ec">
											<p>
												<select class="validate[required]" data-prompt-position="topLeft"
													id="select_scheduled_to_be_delivered_every_x_day"></select>
												ごとに配送
											</p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div id="container_delivery_schedule_by_day_of_week" style="display:none;">
						<table class="landing_form_ec">
							<tbody>
								<tr>
									<th>
										<p class="form_box_label_ec">
											<strong></strong>
											<span class="form_required_ec">必須</span>
										</p>
									</th>
									<td>
										<div class="form_group_ec">
											<p>
												<select class="validate[required]" data-prompt-position="topLeft"
													id="select_scheduled_to_be_delivered_every_x_month_by_day_of_week"></select>
												ごとの
												<select class="validate[required]" data-prompt-position="topLeft"
													id="select_scheduled_to_be_delivered_on_xth_day_of_week">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
												回目の
												<select class="validate[required]" data-prompt-position="topLeft"
													id="select_scheduled_to_be_delivered_every_x_day_of_week">
													<option value="0">日</option>
													<option value="1">月</option>
													<option value="2">火</option>
													<option value="3">水</option>
													<option value="4">木</option>
													<option value="5">金</option>
													<option value="6">土</option>
												</select>
												曜日に配送
											</p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div id="container_delivery_schedule_date" style="display:none;">
					<table class="landing_form_ec">
						<tbody>
							<tr>
								<th>
									<p class="form_box_label_ec">
										<strong id="delivery_schedule_date_text">お届け日の指定</strong>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<p>
											<select id="select_scheduled_to_be_delivered_at">
												<option value="2022-2-20">2022-2-20</option>
												<option value="2022-2-21">2022-2-21</option>
												<option value="2022-2-22">2022-2-22</option>
												<option value="2022-2-23">2022-2-23</option>
												<option value="2022-2-24">2022-2-24</option>
												<option value="2022-2-25">2022-2-25</option>
												<option value="2022-2-26">2022-2-26</option>
												<option value="2022-2-27">2022-2-27</option>
												<option value="2022-2-28">2022-2-28</option>
												<option value="2022-3-1">2022-3-1</option>
												<option value="2022-3-2">2022-3-2</option>
												<option value="2022-3-3">2022-3-3</option>
												<option value="2022-3-4">2022-3-4</option>
												<option value="2022-3-5">2022-3-5</option>
												<option value="2022-3-6">2022-3-6</option>
												<option value="2022-3-7">2022-3-7</option>
												<option value="2022-3-8">2022-3-8</option>
												<option value="2022-3-9">2022-3-9</option>
												<option value="2022-3-10">2022-3-10</option>
												<option value="2022-3-11">2022-3-11</option>
												<option value="2022-3-12">2022-3-12</option>
												<option value="2022-3-13">2022-3-13</option>
												<option value="2022-3-14">2022-3-14</option>
												<option value="2022-3-15">2022-3-15</option>
												<option value="2022-3-16">2022-3-16</option>
												<option value="2022-3-17">2022-3-17</option>
												<option value="2022-3-18">2022-3-18</option>
												<option value="2022-3-19">2022-3-19</option>
												<option value="2022-3-20">2022-3-20</option>
												<option value="2022-3-21">2022-3-21</option>
												<option value="2022-3-22">2022-3-22</option>
											</select>
										</p>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="container_delivery_schedule_time" style="display:none;">
					<table class="landing_form_ec">
						<tbody>
							<tr>
								<th>
									<p class="form_box_label_ec">
										<strong>お届け時間の指定</strong>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<select class="input_box_payment_schedule_ec"
											id="select_scheduled_delivery_time">
											<option value="">指定なし</option>
											<option value="午前中">午前中</option>
											<option value="12:00~14:00">12:00~14:00</option>
											<option value="14:00~16:00">14:00~16:00</option>
											<option value="16:00~18:00">16:00~18:00</option>
											<option value="18:00~20:00">18:00~20:00</option>
											<option value="19:00~21:00">19:00~21:00</option>
											<option value="20:00~21:00">20:00~21:00</option>
										</select>
										に配達
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="container_scheduled_delivery_dates" style="display:none;">
					<table class="landing_form_ec">
						<tbody>
							<tr>
								<th>
									<p class="form_box_label_ec">
										<strong class="form_label_ec">お届け予定日</strong>
									</p>
								</th>
								<td>
									<div class="form_group_ec">
										<div class="scheduled_delivery_date_text_ec"
											id="scheduled_1st_delivery_date_text" style="">お届け日:指定なし</div>
										<div class="scheduled_delivery_date_text_ec"
											id="scheduled_2nd_delivery_date_text" style="display:none;"></div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!-- 通信欄 -->
			<div id="view-remark">
				<h4 class="landing_form_label_ec">通信欄</h4>
				<table class="landing_form_ec">
					<tbody>
						<tr>
							<th>
								<p class="form_box_label_ec">
									<strong class="form_label_ec">
										通信欄
									</strong>
									（残り
									<span class="charsLeft">500</span>
									文字）
								</p>
							</th>
							<td>
								<div class="form_group_ec">
									<textarea class="limited" maxlength="500" name="order[remark]"
										placeholder="※配達日時のご指定はお受けできません" rows="5" style="width:100%;"></textarea>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div id="preview-view"></div>

			<!-- オプトイン -->
			<input name="order[customer_attributes][optin]" type="hidden" value="1">

			<div class="submit_ec">
				<center>
					<input class="submit_bottom_ec" data-disable-with="" id="submit" type="submit" value="">
				</center>
			</div>
		</form>

		<div id="topToBtn">
			<a href="#buy_form" id="smooth-scroll">
				<img src="./assets/img/arrow.png">
			</a>
		</div>
		<footer class="footer">
			<a href="#" class="logo">
				<h3>Hacnel</h3>
			</a>
			<small>Copyright©2018-2022. All Rights Reserved.</small>
		</footer>
	</div>
</body>
<script>
	window.onscroll = function () { myFunction() };
	function myFunction() {
		if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
			document.getElementById("topToBtn").className = "top-to-btn-panel";
		}
	}

	document.addEventListener('click', (e) => {
		const parentNode = e.target.closest('.quz-item');
		const currentOpenItem = document.querySelector('open-item');
		if (parentNode) {
			parentNode.classList.toggle('open-item');
		}
	})


</script>

</html>