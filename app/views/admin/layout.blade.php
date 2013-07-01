<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>刺绣馆</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
	<style type="text/css">
		#content {
		}
		.sidebar {
			width: 199px;
			float: left;
			padding: 0 20px;
			border-right: solid 1px #ddd;
			min-height: 500px;
		}
		.sidebar .logo {
			padding: 20px;
			margin: 0 -20px;
			margin-bottom: 10px;
			font-size: 20px;
			color: #000;
			font-weight: bold;
			border-bottom: solid 1px #ddd;
		}
		.mainarea {
			margin-left: 240px;
		}
		.mainarea > .inner {
			padding: 20px 60px;
		}
	</style>
</head>
<body>

	<div id="content clearfix">
		<div class="sidebar">
			<div class="logo">Cixiuguan</div>
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#">评价管理</a></li>
				<li><a href="#">公告管理</a></li>
			</ul>
		</div>
		<div class="mainarea">
			<div class="inner">
				@yield('mainarea')
			</div>
		</div>
	</div>

</body>
</html>