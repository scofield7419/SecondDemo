<?php 
    require_once ('../myERP/inc.php');
    $userid=$_SESSION['id'];
    checkLoginaddmin();
    $username=$_SESSION['name'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>MyERP</title>
<link rel="shortcut icon" href="../common/icon.ico">
<link rel="icon" href="../common/icon.ico">
<meta name="MyERP" content="" />
<link href="../common/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="CanvasDiv">
		<div id="HeaderDiv">
			<div id="AppInfoDiv">
				<div id="AppInfoCompanyDiv">
					<img title="公司" alt="公司" src="../common/company.png" />MyERP
				</div>
				<div id="AppInfoUserDiv">
					<img title="用户" alt="用户" src="../common/user.png" /><?php if($userid == 1) echo '上帝';?>管理员:<?php echo $username?>
				</div>
				<div id="AppInfoUserDiv">
					<img title="用户" alt="用户" src="../common/logout.png" /><a class="logout" href="logout.handle.php" onclick= "return confirm('确定退出？');">退出登录</a> 
				</div>
				<div id="AppInfoModuleDiv">工作录入</div>
			</div>
			<div id="QuickMenuDiv">
				<ul>
					<li><a href="admin.php">系统设置</a></li>
					<li><a href="addjob.php">工作录入</a></li>
					<li><a href="managejob.php">工作管理</a></li>
					<li><a href="inspectjob.php">工作查询</a></li>
					<li><a href="other.php">公告栏</a></li>
				</ul>
			</div>
		</div>
		<div id="BodyDiv">
			<div id="MainMenuDiv">
				<ul>
					<li><a href="addjob/jobadd.php" target="subframe">新建任务</a></li>
					<li><a href="addjob/craftadd.php" target="subframe">新建工艺</a></li>
					<li><a href="addjob/meterialadd.php" target="subframe">新建物料</a></li>
					<li><a href="addjob/storeadd.php" target="subframe">新建库房</a></li>
					<li><a href="addjob/contractadd.php" target="subframe">新建合同</a></li>
				</ul>
			</div>
			<div id="SubMenuDiv">
               <iframe src="framewelcome.php" frameborder="0" name="subframe" width="100%" height="100%"  scrolling="auto" ></iframe>
            </div>
		</div>
	</div>

	<div id="FooterDiv">
		<div id="FooterLogoDiv">
			<img src="../common/logo.png" alt="MyERP" width="64" height="64" />
		</div>
		<div id="FooterVersionDiv">
		 MyERP &nbsp;&nbsp;1.0.0 &nbsp;&nbsp;&nbsp;作者:&nbsp;&nbsp;费豪<br/>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d') ?>
		</div>
	</div>
</body>
</html>