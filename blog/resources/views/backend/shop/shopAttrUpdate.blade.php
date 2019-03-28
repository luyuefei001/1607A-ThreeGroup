<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 属性管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('backends/styles/general.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backends/styles/main.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="{{url('backend/shopAttr')}}">商品属性</a></span>
<span class="action-span1"><a href="{{url('backend/main')}}">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 修改属性 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="" method="post" name="theForm" onsubmit="return validate();">
  <input type="hidden" name="id" value="{{$list[0]->a_id}}">
  @csrf
  <table width="100%" id="general-table">
      <tbody><tr>
        <td class="label">属性名称：</td>
        <td>
          <input type="text" name="a_name" value="{{$list[0]->a_name}}" size="30">
          <span class="require-field">*</span>        </td>
      </tr>

      <tr>
        <td class="label">所属商品类型：</td>
        <td>
          <select name="a_type_id">
              @foreach($data as $key => $val)
              <option value="{{$val->t_id}}">{{$val->t_name}}</option>
              @endforeach
          </select> <span class="require-field">*</span>        </td>
      </tr>
        <td class="label">该属性值的录入方式：</td>  
        <td>从下面的列表中选择（一行代表一个可选值）</td>
      </tr>
      <tr>
        <td class="label">可选值列表：</td>
        <td>
          <textarea name="a_value" cols="30" rows="5" placeholder="{{$list[0]->a_value}}" value="{{$list[0]->a_value}}"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2">
        <div class="button-div">
          <input type="submit" value=" 确定 " class="button">
          <input type="reset" value=" 重置 " class="button">
        </div>
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