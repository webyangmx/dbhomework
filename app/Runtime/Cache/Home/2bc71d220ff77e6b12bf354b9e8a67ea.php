<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="/final/public/css/normalize.css">
<link rel="stylesheet" href="/final/public/css/font-awesome.min.css">
<link rel="stylesheet" href="/final/public/css/index.css">
</head>
<body>
<div class="container">
<header>
<div class="header-container">
	<div class="logo">
		<img src="/final/public/img/logo.png" alt="logo">
	</div>
	<div class="head-bar">
		<div class="user">
			<h1>hello <strong>Dasenerys</strong></h1>
			<figure>
				<img src="/final/public/img/user.jpg" class="user-logo" alt="头像">
			</figure>
		</div>
		<div class="tips">
			<ul>
				<li class="tips-notify">
					Notifications
					<span class="tips-notify-num">3</span>
				</li>
				<li class="tips-msgs">
					Messages
					<span class="tips-msgs-num">12</span></li>
					<li class="tips-tasks">
						Tasks
						<span class="tips-tasks-num">7</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>
<div class="body">
	<nav>
		<ul class="navigator">
			<li class="nav-item" id="ShowProducts">
				<i class="fa fa-product-hunt"></i>
				<a>Show Products</a>
			</li>
			<li class="nav-item" id="AddProducts">
				<i class="fa fa-plus-circle"></i>
				<a>Add Products</a>
			</li>
			<li class="nav-item" id="ReportSales">
				<i class="fa fa-bar-chart"></i>
				<a>Report Sales</a>
			</li>
			<li class="nav-item" id="Logs">
				<i class="fa fa-list"></i>
				<a>Logs</a>
			</li>
			<li class="nav-item" id="Employees">
				<i class="fa fa-user-times"></i>
				<a>Employees</a>
			</li>
			<li class="nav-item" id="Customers">
				<i class="fa fa-group"></i>
				<a>Customers</a>
			</li>
			<li class="nav-item" id="Suppliers">
				<i class="fa fa-user-plus"></i>
				<a>Suppliers</a>
			</li>
		</ul>
	</nav>
	<div class="body-main" id="body-report">
		<section>
			<div class="section-main">
				<ul class="statistics">
					<li class="statistics-item statistics-visitor">
						<h5 class="statistic-type">visitors</h5>
						<span class="statistic-value">3352</span>
					</li>
					<li class="statistics-item statistics-revenue">
						<h5 class="statistic-type">Month revenue</h5>
						<span class="statistic-value">$2,500</span>
					</li>
					<li class="statistics-item statistics-mail">
						<h5 class="statistic-type">Mail</h5>
						<span class="statistic-value">13</span>
					</li>
					<li class="statistics-item statistics-booking">
						<h5 class="statistic-type">Booking</h5>
						<span class="statistic-value">78</span>
					</li>
				</ul>
			</div>
		</section>
		<section>
			<div class="section-main">
				<div class="pannel-header">
					<h3 class="pannel-header-name">Sales</h3>
					<div class="pannel-header-ctrol">
						<i class="fa fa-bookmark-o pannel-header-slide"></i>
						<i class="fa fa-close pannel-header-closeBtn"></i>
					</div>
				</div>
				<div class="pannel-body">
					<div class="report-sales"></div>
				</div>
			</div>
		</section>
		<section>
			<div class="section-main">
				<div class="pannel-header">
					<h3 class="pannel-header-name">Total Money Amount</h3>
					<div class="pannel-header-ctrol">
						<i class="fa fa-bookmark-o pannel-header-slide"></i>
						<i class="fa fa-close pannel-header-closeBtn"></i>
					</div>
				</div>
				<div class="pannel-body">
					<div class="report-total-amount"></div>
					<ul class="report-null">
						<li class="circleProgress_wrapper circleProgress-orange">
							<div class="wrapper left">
								<div class="circleProgress leftcircle"></div>
							</div>
							<div class="wrapper right">
								<div class="circleProgress rightcircle"></div>
							</div>
							<span class="null-text">Bounce Rate</span>
							<span class="null-percent">58%</span>
						</li>
						<li class="circleProgress_wrapper circleProgress-green">
							<div class="wrapper left">
								<div class="circleProgress leftcircle"></div>
							</div>
							<div class="wrapper right">
								<div class="circleProgress rightcircle"></div>
							</div>
							<span class="null-text">New Visits</span>
							<span class="null-percent">75%</span>
						</li>
						<li class="circleProgress_wrapper circleProgress-purple">
							<div class="wrapper left">
								<div class="circleProgress leftcircle"></div>
							</div>
							<div class="wrapper right">
								<div class="circleProgress rightcircle"></div>
							</div>
							<span class="null-text">Search Traffic</span>
							<span class="null-percent">28%</span>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section>
			<div class="section-main">
				<div class="pannel-header">
					<h3 class="pannel-header-name">Average Price</h3>
					<div class="pannel-header-ctrol">
						<i class="fa fa-bookmark-o pannel-header-slide"></i>
						<i class="fa fa-close pannel-header-closeBtn"></i>
					</div>
				</div>
				<div class="pannel-body">
					<div class="report-avgPrice"></div>
				</div>
			</div>
		</section>
	</div>
	<div class="body-main" id="body-logs">
		<section>
			<div class="section-main">
				<div class="pannel-header">
					<h3 class="pannel-header-name">Logs</h3>
					<div class="pannel-header-ctrol">
						<i class="fa fa-bookmark-o pannel-header-slide"></i>
						<i class="fa fa-close pannel-header-closeBtn"></i>
					</div>
				</div>
				<div class="pannel-body">
					<table summary="日志表" class="table logs-table">
						<caption></caption>
						<thead>
							<tr>
								<th>user</th>
								<th>tableName</th>
								<th>time</th>
								<th>operation</th>
								<th>keyValue</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
	<div class="body-main" id="body-product-show">
		<!-- 商品列表 -->
		<div class="product-list">
			<div class="product-item product-shadow">
				<figure>
					<img src="" class="product-img" alt="">
					<figcaption title=""></figcaption>
				</figure>
			</div>
		</div>
	</div>
	<div class="body-main" id="body-product-add">
		<section>
			<div class="addProduct-args">
				<form action="#">
					<h1>addProduct</h1>
					<ul>
						<li class="addProduct-form-text">
							<label for="addProduct-name">name:</label>
						</li>
						<li class="addProduct-form-input">
							<input type="text" id="addProduct-name">
						</li>
					</ul>
					<ul>
						<li class="addProduct-form-text">
							<label for="addProduct-qoh">qoh:</label>
						</li>
						<li class="addProduct-form-input">
							<input type="number" id="addProduct-qoh">
						</li>
					</ul>
					<ul>
						<li class="addProduct-form-text">
							<label for="addProduct-qohThreshold">qohThreshold:</label>
						</li>
						<li class="addProduct-form-input">
							<input type="number" id="addProduct-qohThreshold">
						</li>
					</ul>
					<ul>
						<li class="addProduct-form-text">
							<label for="addProduct-originalPrice">originalPrice:</label>
						</li>
						<li class="addProduct-form-input">
							<input type="number" id="addProduct-originalPrice">
						</li>
					</ul>
					<ul>
						<li class="addProduct-form-text">
							<label for="addProduct-discntRate">discntRate:</label>
						</li>
						<li class="addProduct-form-input">
							<input type="number" step=0.01 max="1" id="addProduct-discntRate">
						</li>
					</ul>
					<ul>
						<li class="addProduct-form-text">
							<label for="addProduct-supplierID">supplierID:</label>
						</li>
						<li class="addProduct-form-input">
							<select id="addProduct-supplierID"></select>
						</li>
					</ul>	
					<button class="addProduct-form-submit">submit</button>
				</form>
			</div>
		</section>
	</div>
	<div class="body-main" id="body-employees">
		<section>
			<div class="section-main">
				<div class="pannel-header">
					<h3 class="pannel-header-name">Logs</h3>
					<div class="pannel-header-ctrol">
						<i class="fa fa-bookmark-o pannel-header-slide"></i>
						<i class="fa fa-close pannel-header-closeBtn"></i>
					</div>
				</div>
				<div class="pannel-body">
					<table summary="employeesTable" class="table employees-table">
						<caption></caption>
						<thead>
							<tr>
								<th>eid</th>
								<th>ename</th>
								<th>city</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
	<div class="body-main" id="body-customers">
		<section>
			<div class="section-main">
				<div class="pannel-header">
					<h3 class="pannel-header-name">Logs</h3>
					<div class="pannel-header-ctrol">
						<i class="fa fa-bookmark-o pannel-header-slide"></i>
						<i class="fa fa-close pannel-header-closeBtn"></i>
					</div>
				</div>
				<div class="pannel-body">
					<table summary="customersTable" class="table customers-table">
						<caption></caption>
						<thead>
							<tr>
								<th>cid</th>
								<th>cname</th>
								<th>city</th>
								<th>visits_made</th>
								<th>last_visit_time</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
	<div class="body-main" id="body-suppliers">
		<section>
			<div class="section-main">
				<div class="pannel-header">
					<h3 class="pannel-header-name">Logs</h3>
					<div class="pannel-header-ctrol">
						<i class="fa fa-bookmark-o pannel-header-slide"></i>
						<i class="fa fa-close pannel-header-closeBtn"></i>
					</div>
				</div>
				<div class="pannel-body">
					<table summary="suppliersTable" class="table suppliers-table">
						<caption></caption>
						<thead>
							<tr>
								<th>sid</th>
								<th>sname</th>
								<th>city</th>
								<th>telephone_no</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
</div>
<div class="mask"></div>
<div class="product-detail">
<i class="fa fa-close product-detail-closeBtn"></i>
<figure>
	<img src="/final/public/img/products_imgs/6108PPVOdoL.jpg" class="product-detail-img" alt="">
	<figcaption class="product-detail-name product-detail-text" title="">书名：
		<span></span></figcaption>
		<p class="product-detail-desc product-detail-text">描述：
			<span></span>
		</p>
		<p class="product-detail-salary product-detail-text">库存：<span>0</span>件</p>
		<p class="product-detail-discnt product-detail-text">折扣：<span>0</span>折</p>
		<p class="product-detail-price product-detail-text">价格：<span>0</span>元
			<a class="product-detail-report">查看销售情况</a>
		</p>
		<p class="product-detail-text">
			<label for="purchase-num">数量 :</label>
			<input type="number" id="purchase-num" value="1">
		</p>
		<p class="product-detail-text">
			<label for="purchase-customerID">cID :</label>
			<select id="purchase-customerID"></select>
		</p>
		<p class="product-detail-text">
			<label for="purchase-employeeID">eID :</label>
			<select id="purchase-employeeID"></select>
		</p>
		<a class="product-detail-purchases" id="product-detail-purchases">立即购买</a>
	</figure>
</div>
<div class="purchase-stat">
	<i class="fa fa-close"></i>
</div>
<script src="/final/public/js/jquery-1.11.1.min.js"></script>
<!-- <script src="http://code.highcharts.com/highcharts.js"></script> -->
<script src="/final/public/js/highcharts.js"></script>
<script src="/final/public/js/highChartsFunc.js"></script>
<script src="/final/public/js/products.js"></script>
<script src="/final/public/js/logs.js"></script>
<script src="/final/public/js/purchases.js"></script>
<script src="/final/public/js/report.js"></script>
<script src="/final/public/js/supplier.js"></script>
<script src="/final/public/js/employee.js"></script>
<script src="/final/public/js/customer.js"></script>
<script src="/final/public/js/index.js"></script>
</body>
</html>