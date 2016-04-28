<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><!--<![endif]--> 
    <head>
        <meta charset="utf-8">
        <title>Dashboard - Akira</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/searchku/Public/css/bootstrap.min.css" rel="stylesheet">
        <link href="/searchku/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="/searchku/Public/css/site.css" rel="stylesheet">
        <script src="/searchku/Public/js/jquery.min.js"></script>
        <script src="/searchku/Public/js/bootstrap.min.js"></script>
        <script src="/searchku/Public/js/site.js"></script>
    </head>

<script type="text/javascript">
	$(function (){
		var sche = "<?php echo ($sche); ?>";
		var str = "width: " + sche + "%";
		$('.bar').attr('style', str);
	})

</script>
	<body>
		<div class="container">
			<div class="navbar">
				<div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">XFREE</a>
                        <div class="nav-collapse">
                            <ul class="nav">
                                <li class="active">
                                    <a href="index.html">管理主界面</a>
                                </li>
                                <li>
                                    <a href="settings.htm">Account Settings</a>
                                </li>
                                <li>
                                    <a href="help.htm">Help</a>
                                </li>
                                <li class="dropdown">
                                    <a href="help.htm" class="dropdown-toggle" data-toggle="dropdown">Tours <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="help.htm">Introduction Tour</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Project Organisation</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Task Assignment</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Access Permissions</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li class="nav-header">
                                            Files
                                        </li>
                                        <li>
                                            <a href="help.htm">How to upload multiple files</a>
                                        </li>
                                        <li>
                                            <a href="help.htm">Using file version</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-search pull-left" action="">
                                <input type="text" class="search-query span2" placeholder="Search" />
                            </form>
                            <ul class="nav pull-right">
                                <li>
                                    <a href="profile.htm"><?php echo ($username); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Login/logout', '', '');?>">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
				</div>
			</div>
				
<div class="row">
                <div class="span3">
                    <div class="well" style="padding: 8px 0;">
                        <ul class="nav nav-list">
                            <li class="nav-header">
                                管理面板
                            </li>
                            <li class="active">
                                <a href="<?php echo U('Index/index', '', '');?>"><i class="icon-white icon-home"></i> 系统状态</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Manage/info', '', '');?>"><i class="icon-folder-open"></i> 任务相关</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Manage/tasks', '', '');?>"><i class="icon-check"></i> Tasks</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-envelope"></i> Messages</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-file"></i> Files</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-list-alt"></i> Activity</a>
                            </li>
                            <li class="nav-header">
                                Your Account
                            </li>
                            <li>
                                <a href="#"><i class="icon-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-cog"></i> Settings</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#"><i class="icon-info-sign"></i> Help</a>
                            </li>
                            <li class="nav-header">
                                Bonus Templates
                            </li>
                            <li>
                                <a href="#"><i class="icon-picture"></i> Gallery</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-stop"></i> Blank Slate</a>
                            </li>
                        </ul>
                    </div>
                </div>

                
                
				<div class="span9">
					<h1>
						数据库列表
					</h1>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									数据库名称
								</th>
								
								<th>
									是否入库
								</th>
								<th>
									来 源
								</th>
								<th>
									下载进度
								</th>
								<th>
									操作
								</th>
							</tr>
						</thead>
						<tbody>
						<?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
								<td>
									<?php echo ($v['name']); ?>
								</td>
								<td>
									<span class="badge"><?php echo ($v['done']); ?></span>
								</td>
								<td>
									<span class="badge"><?php echo ($v['referer']); ?></span>
								</td>
								<td>
									<input type="hidden" name="process" value="<?php echo ($v['downsche']); ?>" />
									<div class="progress">
										<div class="bar" style="width: 0%;"></div>
									</div>
								</td>
								<td>
									<div align="center">
									<a href="<?php echo U('Manage/preview', array('id'=>$v['id']), '');?>">预览</a> | <a href="<?php echo U('Manage/dump', array('id'=>$v['id']), '');?>" onclick="return confirm('确定入库吗?');">入库</a>
									</div>
								</td>
							</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
					<a class="toggle-link" href="#new-project"><i class="icon-plus"></i> New DataBase</a>
					<form id="new-project" class="form-horizontal hidden" method="post">
						<fieldset>
							<legend>New DataBase</legend>
							<div class="control-group">
								<label class="control-label" for="input01">数据库名称</label>
								<div class="controls">
								<input type="text" class="input-xlarge" name="dbname" id="input01" />
								</div>
							</div>
							<div class="control-group">
							<label class="control-label" for="input01">来 源</label>
								<div class="controls">
								<input type="text" class="input-xlarge" name="referer" id="input01" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="select01">节 点</label>
								<div class="controls">
									<select id="select01" name="client"> <option>-- Select client --</option> <option>Bad Robot</option> <option>Evil Genius</option> <option>Monsters Inc</option> </select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="textarea">下载链接</label>
								<div class="controls">
									<textarea name="link" class="input-xlarge" id="textarea" rows="3"></textarea>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Create</button> <button class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
=
	</body>
</html>