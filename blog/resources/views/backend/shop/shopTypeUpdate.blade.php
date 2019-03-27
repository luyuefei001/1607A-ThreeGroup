<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 类型管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('backends/styles/general.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backends/styles/main.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="{{url('backend/shopType')}}">商品类型列表</a></span>
<span class="action-span1"><a href="{{url('backend/main')}}">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 修改商品类型 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="" method="post" name="theForm" onsubmit="return validate();">
  @csrf
    <table cellspacing="1" cellpadding="3" width="100%">
      <input type="hidden" name="id" value="{{$data[0]->id}}">
      <tbody><tr>
        <td class="label">商品类型名称:</td>
        <td><input type="text" name="name" value="{{$data[0]->name}}" size="40">
        <span class="require-field">*</span></td>
      </tr>
      <tr>
        <td class="label">状态:</td>
        <td>
        @if($data[0]->status == 1)
        <input type="radio" name="status" value="0">&nbsp;禁用&nbsp;<input type="radio" name="status" value="1" checked="">&nbsp;启用&nbsp;
        @else
        <input type="radio" name="status" value="0" checked="">&nbsp;禁用&nbsp;<input type="radio" name="status" value="1" >&nbsp;启用&nbsp;
        @endif
        </td>

      </tr>
      <tr align="center">
        <td colspan="2">
          <input type="submit" value=" 确定 " class="button">
          <input type="reset" value=" 重置 " class="button">
        </td>
      </tr>
    </tbody></table>
  </form>
</div>

<div id="footer">
	版权所有 &copy; 2006-2013 软工教育 - 高级PHP - </div>
</div>

</body>
</html>