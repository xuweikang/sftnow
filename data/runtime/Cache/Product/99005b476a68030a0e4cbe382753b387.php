<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/sftnow/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/sftnow/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/sftnow/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/sftnow/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/sftnow/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/sftnow/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/sftnow/public/js/jquery.js"></script>
    <script src="/sftnow/public/js/wind.js"></script>
    <script src="/sftnow/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
<style>
table {
    border: 1px solid;
}

table tr {}

.pagination{
	float: center;
	border: 2px;
	padding: 10px;
}
#nav {
    margin-top: 20px;
}

table td {
    border: 1px solid #999;
}
</style>
<script type="text/javascript" src="/sftnow/public/js/jquery.js"></script>
<script src="/sftnow/public/js/common.js"></script>
</head>

<body>
    <ul class="nav nav-tabs" id="nav">
        <li class="active"><a href="javascript:;">电表管理</a></li>
        <li><a href="<?php echo U('AdminIndex/add',array('categoryId'=>'3'));?>" target="_self">添加电表</a></li>
    </ul>
    <form class="well form-search" method="post" action="<?php echo U('AdminIndex/productE');?>">
        分类：
        <select class="select_2" name="term">
            <option value='0'>全部</option>
             
                <?php  foreach ($Titles as $title) { $t=$title["title"]; ?>
				<option value="<?php echo ($t); ?>"><?php echo ($t); ?></option>

                <?php
 } ?>
            
        </select> &nbsp;&nbsp; 时间：
        <input type="text" name="start_time" class="js-date" value="<?php echo ((isset($formget["start_time"]) && ($formget["start_time"] !== ""))?($formget["start_time"]):''); ?>" style="width: 80px;" autocomplete="off">-
        <input type="text" class="js-date" name="end_time" value="<?php echo ($formget["end_time"]); ?>" style="width: 80px;" autocomplete="off"> &nbsp; &nbsp; 关键字：
        <input type="text" name="keyword" style="width: 200px;" value="<?php echo ($formget["keyword"]); ?>" placeholder="请输入关键字...">
        <input type="submit" class="btn btn-primary" value="搜索" />
    </form>
     <div class="pagination"><?php echo ($page); ?></div>

    <form class="js-ajax-form" action="" method="post">
        <div class="table-actions">
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/listorders');?>">排序</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/check',array('check'=>1));?>" data-subcheck="true">审核</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/check',array('uncheck'=>1));?>" data-subcheck="true">取消审核</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/top',array('top'=>1));?>" data-subcheck="true">置顶</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/top',array('untop'=>1));?>" data-subcheck="true">取消置顶</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/recommend',array('recommend'=>1));?>" data-subcheck="true">推荐</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/recommend',array('unrecommend'=>1));?>" data-subcheck="true">取消推荐</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/delete');?>" data-subcheck="true" data-msg="你确定删除吗？"><?php echo L('DELETE');?></button>
            <button class="btn btn-primary btn-small js-articles-move" type="button">批量移动</button>
        </div>
       
        <div>
            <table class="table table-hover table-bordered table-list">
                <thead>
                    <tr>
                        <th width="35">
                            <label>
                                <input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x">
                            </label>
                        </th>
                        <th> ID</th>
                        <th>样品</th>
                        <th>名称</th>
                        
                        <th>简介</th>
                        <th>功能</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <?php $status=array("1"=>"已审核","0"=>"未审核"); $top_status=array("1"=>"已置顶","0"=>"未置顶"); $recommend_status=array("1"=>"已推荐","0"=>"未推荐"); ?>
                <?php if(is_array($productE)): foreach($productE as $key=>$vo): ?><tr>
                        <td>
                            <input type="checkbox" class="js-check" data-yid="js-check-y" data-xid="js-check-x" name="ids[]" value="<?php echo ($vo["id"]); ?>" title="ID:<?php echo ($vo["id"]); ?>">
                        </td>
                        <td> <?php echo ($vo["id"]); ?> </td>
                        
                        <?php  $url="http://localhost/thinkcmfx/public/uploadFiles/images/admin/201304/01.jpg"; $url=$vo["imageurl"]; $url=preg_replace("/\.axd/", "", $url); $url=preg_replace("/\/{2}/", "/", $url); $url1="http://localhost"."/sftnow/public"."".$url; ?>
                        <td width="200px"><img src="<?php echo ($url1); ?>" width="200px" /> </td>
                        <td width="200px"><?php echo ($vo["title"]); ?></td>
                        <td width="200px"> <?php echo ($vo["content"]); ?> </td>
                        <td width="200px"><?php echo ($vo["extendcontent01"]); ?></td>
                        <td  > <a href="<?php echo U('AdminIndex/edit',array('id'=>$vo['id'],'categoryId'=>'3'));?>">编辑</a> |
                            <a href="<?php echo U('AdminIndex/delete',array('id'=>$vo['id'],'categoryId'=>'3'));?>">删除</a></td>
                    </tr><?php endforeach; endif; ?>
                <tfoot>
                    <tr>
                        <th width="15">
                            <label>
                                <input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x">
                            </label>
                        </th>
                        <th> ID</th>
                        <th> 名称</th>
                        <th>简介</th>
                        <th>功能</th>
                        <th>操作</th>
                    </tr>
                </tfoot>
            </table>
        </div>

		  
		

        <div class="table-actions" style="height:100px; margin-top:10px;">
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/listorders');?>">排序</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/check',array('check'=>1));?>" data-subcheck="true">审核</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/check',array('uncheck'=>1));?>" data-subcheck="true">取消审核</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/top',array('top'=>1));?>" data-subcheck="true">置顶</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/top',array('untop'=>1));?>" data-subcheck="true">取消置顶</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/recommend',array('recommend'=>1));?>" data-subcheck="true">推荐</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/recommend',array('unrecommend'=>1));?>" data-subcheck="true">取消推荐</button>
            <button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="<?php echo U('AdminPost/delete');?>" data-subcheck="true" data-msg="你确定删除吗？">删除</button>
            <button class="btn btn-primary btn-small js-articles-move" type="button">批量移动</button>
        </div>
        <div class="pagination"><?php echo ($page); ?></div>
 
</body>

</html>