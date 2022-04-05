<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>控制台</title>
		<link rel="stylesheet" type="text/css" href="Css/identify.css" />
		<link rel="stylesheet" type="text/css" href="Css/layout.css" />
		<link rel="stylesheet" type="text/css" href="Css/account.css" />
		<link rel="stylesheet" type="text/css" href="Css/style.css" />
		<link rel="stylesheet" type="text/css" href="Css/control_index.css" />
		<script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="Js/layer/layer.js"></script>
		<script type="text/javascript" src="Js/haidao.offcial.general.js"></script>
		<script type="text/javascript" src="Js/select.js"></script>
		<script type="text/javascript" src="Js/haidao.validate.js"></script>
	</head>

	<body>
		<div class="view-topbar">
			<div class="topbar-console">
				<div class="tobar-head fl">
					<a href="#" class="topbar-logo fl">
					<span><img src="Images/logo.png" width="20" height="20"/></span>
					</a>
					<a href="index.html" class="topbar-home-link topbar-btn text-center fl"><span>管理控制台</span></a>
				</div>
			</div>
			<div class="topbar-info">
				<ul class="fr">
					<li class="fl dropdown topbar-notice topbar-btn">
					<a href="#" class="dropdown-toggle">
					<span class="icon-notice"></span>
					<span class="topbar-num have">0</span>
					<!--have表示有消息，没有消息去掉have-->
					</a>
					</li>
					<!-- 					<li class="fl topbar-info-item strong">
					<div class="dropdown">
						<a href="#" class="dropdown-toggle topbar-btn">
						<span class="fl">工单服务</span>
						<span class="icon-arrow-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">我的工单</a></li>
							<li><a href="#">提交工单</a></li>
						</ul>
					</div>
					</li>
					 -->
					<li class="fl topbar-info-item">
					<div class="dropdown">
						<a href="#" class="topbar-btn">
						<span class="fl text-normal">帮助与文档</span>
						<span class="icon-arrow-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">模板开发手册</a></li>
							<li><a href="#">某某数据字典</a></li>
						</ul>
					</div>
					</li>
					<li class="fl topbar-info-item">
					<div class="dropdown">
						<a href="#" class="topbar-btn">
						<span class="fl text-normal">小朱</span>
						<span class="icon-arrow-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="login.html">退出</a></li>
						</ul>
					</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="view-body">
			<div class="view-sidebar">
				<div class="sidebar-content">
					<div class="sidebar-nav">
						<div class="sidebar-title">
							<a href="#">
								<span class="icon"><b class="fl icon-arrow-down"></b></span>
								<span class="text-normal">产品与服务</span>
							</a>
						</div>
						<ul class="sidebar-trans">
							<li>
								<a href="index.php">
									<b class="sidebar-icon"><img src="Images/icon_author.png" width="16" height="16" /></b>
									<span class="text-normal">站点管理</span>
								</a>
							</li>
							
							<!-- <li>
								<a href="#">
									<b class="sidebar-icon"><img src="Images/icon_market.png" width="16" height="16" /></b>
									<span class="text-normal">云市场</span>
								</a>
							</li> -->
						</ul>
					</div>
					<div class="sidebar-nav">
						
						<ul class="sidebar-trans">
							<li>
								<a href="userInfo.php">
									<b class="sidebar-icon"><img src="Images/icon_cost.png" width="16" height="16" /></b>
									<span class="text-normal">系统管理</span>
								</a>
							</li>
							<li>
								<a href="identify.html">
									<b class="sidebar-icon"><img src="Images/icon_authentication.png" width="16" height="16" /></b>
									<span class="text-normal">实名认证</span>
								</a>
							</li>
							<li>
								<a href="message.html">
									<b class="sidebar-icon"><img src="Images/icon_news.png" width="16" height="16" /></b>
									<span class="text-normal">消息中心</span>
								</a>
							</li>
							
							
						</ul>
					</div>
				</div>
			</div>
			<div class="view-product">
				<div class="manage account-manage">
					<div class="manage-head">
						<h6 class="layout padding-left manage-head-con">系统管理</h6>
					</div>
					<dl class="account-basic clearfix">
						<dt class="fl">
						<p class="account-head">
							<img src="Images/noavatar_middle.gif">
						</p>
						</dt>
						<dd class="fl margin-large-left margin-small-top">
						<p class="text-small">
							<span class="show fl base-name">当前账号</span>:<span class="margin-left">小朱 </span>
						</p>
						<p class="text-small">
							<span class="show fl base-name">认证状态</span>:
							<span class="margin-left">管理员</span>
							<!-- <a class="margin-left text-main text-underline" href="#">立即认证</a> -->
						</p>
						<p class="text-small">
							<span class="show fl base-name">注册时间</span>:<span class="margin-left">2015-01-12 11:50:22</span>
						</p>
						</dd>
					</dl>
					<div class="account-basic clearfix">
						<span class="fl show text-small">您当前的账号安全程度</span>
						<div class="progress-bar fl margin-large-left margin-large-35">
							<div style="background: rgb(255, 153, 0) none repeat scroll 0% 0%; width: 180px;" data-width="100">
							</div>
						</div>
						<span class="fl show text-small">安全级别: <span style="color: rgb(255, 153, 0);" class="leval-safe">高</span></span>
					</div>
					<ul class="accound-bund">
						<li class="clearfix">
						<span class="bund-class">登录密码</span>
						<span class="w45">安全性高的密码可以使账号更安全，建议您定期更换密码，设置一个包含字母，符号或数字中至少两项且长度超过6位的密码。</span>
						
						</li>
					
						<li class="clearfix">
						<span class="bund-class">邮箱绑定</span>
						<span class="w45">绑定邮箱可以用于安全验证、找回密码等重要操作</span>
						
						</li>
						
						<li class="clearfix border-bottom-none">
						<span class="bund-class">邀请链接</span>
						<span class="w45" id="fe_text">http://t.cn/Edcx4Wt</span>
						
						</li>
						<li class="clearfix border-bottom-none">
							<span class="bund-class">连接测试（ping）</span>
							<span class="w45" id="fe_text">
								<form action="IPHandle.php" method="POST">
									<div>
										<input type="text" name="IP" placeholder="127.0.0.1" style="background-color: transparent;border:0px;outline:none;border:solid 1px;margin-bottom:40px;width:200px">
										<input type="submit" value="test" name="IPHandle">
									</div>
								</form>
							</span>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
				
				
	</body>

</html>
