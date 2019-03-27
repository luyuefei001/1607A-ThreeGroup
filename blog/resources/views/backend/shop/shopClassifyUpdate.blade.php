<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 添加分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('backends/styles/general.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backends/styles/main.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="{{url('backend/shopClassify')}}">商品分类</a></span>
<span class="action-span1"><a href="{{url('backend/main')}}">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> -修改分类 </span>
<div style="clear:both"></div>
</h1>
<!-- start add new category form -->
<div class="main-div">
  <form action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
	@csrf
	 <table width="100%" id="general-table">
		<tbody>
			<input type="hidden" name="id" value="{{$data[0]->id}}">
			<tr>
				<td class="label">分类名称:</td>
				<td><input type="text" name="name" maxlength="20" size="27" value="{{$data[0]->name}}"> <font color="red">*</font></td>
			</tr>
			<tr>
				<td class="label">商品数量</td>
				<td><input type="number" name="number" id="" value="$data[0]->number"></td>
			</tr>
			<tr>
				<td class="label">上级分类:</td>
				<td>
					<select name="parent_id">
						@foreach($classify as $key => $val)

						<option value="{{$val->id}}">
									{{$val->name}}
										 
								
						</option>
						@endforeach
					</select>
				</td>
			</tr>

			<tr>
				<td class="label">排序:</td>
				<td><input type="text" name="sort" size="15" value="{{$data[0]->sort}}"></td>
			</tr>
      <tr>
        <td class="label">分类描述:</td>
        <td>
          <textarea name="content" rows="6" cols="48" placeholder="{{$data[0]->content}}" value="{{$data[0]->content}}"></textarea>
        </td>
      </tr>
      </tbody></table>
      <div class="button-div">
        <input type="submit" value=" 确定 ">
        <input type="reset" value=" 重置 ">
      </div>
  </form>
</div>


</div>

</body>
</html>