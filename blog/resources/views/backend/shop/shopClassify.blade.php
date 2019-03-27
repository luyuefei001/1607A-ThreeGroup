<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 商品分类 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('backends/styles/general.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backends/styles/main.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="{{url('backend/shopClassifyAdd')}}">添加分类</a></span>
<span class="action-span1"><a href="{{url('backend/main')}}">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品分类 </span>
<div style="clear:both"></div>
</h1>

<form method="post" action="" name="listForm">
<!-- start ad position list -->
	<div class="list-div" id="listDiv">
		<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
			<tbody>
				<tr>
					<th>分类名称</th>
					<th>商品数量</th>
					<th>是否显示</th>
					<th>排序</th>
					<th>操作</th>
				</tr>
        @foreach($list as $key => $val)
				<tr align="center" class="0" id="0_1">
					<td align="left" class="first-cell">
						<img src="images/menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)">
						<span><a href="goods.php?act=list&amp;cat_id=1">{{$val->name}}</a></span>
					 </td>
					<td width="10%">{{$val->number}}</td>
					<td width="10%">
					@if($val->status == 1)
					<img src="{{asset('backends/images/yes.gif')}}" onclick="listTable.toggle(this, 'toggle_is_show', 1)">
					@else
					<img src="{{asset('backends/images/no.gif')}}" onclick="listTable.toggle(this, 'toggle_is_show', 1)">
					@endif
					</td>
					<td width="10%" align="right"><span title="点击修改内容" style="">{{$val->sort}}</span></td>
					<td width="24%" align="center">
						<a href="shopClassifyUpdate?id={{$val->id}}">编辑</a> |
						<a href="shopClassifyDel?id={{$val->id}}"" title="移除">移除</a>
					</td>
				</tr>
        @endforeach
	</tbody>
  </table>
</div>
</form>

  </table>
</div>
</form>


<div id="footer">
	版权所有 &copy; 2006-2013 软工教育 - 高级PHP - </div>
</div>

</body>
</html>