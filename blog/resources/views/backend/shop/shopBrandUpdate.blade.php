<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 品牌管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('backends/styles/general.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backends/styles/main.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="{{url('backend/shopBrand')}}">商品品牌</a></span>
<span class="action-span1"><a href="{{url('backend/main')}}">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 修改品牌信息 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
<form method="post" action=""  enctype="multipart/form-data" onsubmit="return validate()">
@csrf
<table cellspacing="1" cellpadding="3" width="100%">
  <input type="hidden" name="shopBrand_id" value="{{$data[0]->shopBrand_id}}">
  <tbody><tr>
    <td class="label">品牌名称</td>
    <td><input type="text" name="shopBrandName" maxlength="60" value="{{$data[0]->shopBrandName}}"><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">品牌网址</td>
    <td><input type="text" name="BrandUrl" maxlength="60" size="40" value="{{$data[0]->BrandUrl}}"></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('warn_brandlogo');" title="点击此处查看提示信息">
        <img src="{{asset($data[0]->logo)}}" width="50" height="50" border="0" alt="点击此处查看提示信息"></a>品牌LOGO</td>
    <td><input type="file" name="brand_logo" id="logo" size="45">    <br><span class="notice-span" style="display:block" id="warn_brandlogo">
        如果修改请点击        </span>
    </td>
  </tr>
  <tr>
    <td class="label">排序</td>
    <td><input type="text" name="sort" maxlength="40" size="15" value="{{$data[0]->sort}}"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br>
      <input type="submit" class="button" value=" 修改 ">
      <input type="reset" class="button" value=" 重置 ">
    </td>
  </tr>
</tbody></table>
</form>
</div>

</body>
</html>