<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link href="{{asset('backends/styles/general.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('backends/styles/main.css')}}" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="{{asset('backends/js/utils.js')}}"></script>
	<script type="text/javascript" src="{{asset('backends/js/selectzone.js')}}"></script>
	<script type="text/javascript" src="{{asset('backends/js/colorselector.js')}}"></script>
	<script type="text/javascript" src="{{asset('backends/js/calendar.php?lang= ')}}"></script>
</head>
<body>
<h1>
	<span class="action-span"><a href="{{url('backend/shopList')}}">商品列表</a></span>
	<span class="action-span1"><a href="{{url('backend/main')}}">SHOP 管理中心 </a> </span><span id="search_id" class="action-span1"> - 编辑商品信息 </span>
	<div style="clear:both"></div>
</h1>

<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">通用信息</span>
		<span class="tab-back" id="detail-tab">详细描述</span>
		<span class="tab-back" id="mix-tab">其他信息</span>
		<span class="tab-back" id="properties-tab">商品属性</span>
		<span class="tab-back" id="gallery-tab">商品相册</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="" method="post" name="theForm"> 
		 	@csrf
		 <!-- 通用信息 -->
        <table width="90%" id="general-table" align="center" style="display: table;">
			<tbody>
				<tr>
					<td class="label">商品名称：</td>
					<td><input type="text" name="shopName"  size="30"><span class="require-field">*</span></td>
				</tr>
			<tr>
				<td class="label">商品分类：</td>
				<td>
					<select name="shopClassify_id">
						@foreach($shopClassify as $key => $val)
						<option value="{{$val->id}}">{{$val->name}}</option>
						@endforeach
					</select>
                 </td>
			</tr>
			<tr>
				<td class="label">商品品牌：</td>
				<td>
					<select name="shopBrand_id">
						@foreach($shopBrand as $key => $val)
						<option value="{{$val->shopBrand_id}}">{{$val->shopBrandName}}</option>
						@endforeach
					</select>
				</td>
			</tr>
      <tr>
				<td class="label">本店售价：</td>
				<td><input type="text" name="shopPrice" size="20">
				<span class="require-field">*</span></td>
			</tr>
			<tr>
            <td class="label">会员价格：</td>
            <td><input type="text" name="memberPrice" size="20"></td>
      </tr>
      
			<tr>
				<td class="label">上传商品封面图片：</td>
				<td>
					<input type="file" name="shopImg" size="35">
													<a href="goods.php?act=show_image&amp;img_url=images/200905/goods_img/32_G_1242110760868.jpg" target="_blank"><img src="{{asset('backends/images/yes.gif')}}" border="0"></a>
												<br><input type="text" size="40" style="color:#aaa;"  name="shopImg">
				</td>
			</tr>
        </tbody></table>

        <!-- 详细描述 -->
        <table width="90%" id="detail-table" style="display: none;">
          <tbody><tr>
            <td><input type="hidden" id="goods_desc" name="detailDescribe" value="" style="display:none"><input type="hidden" id="goods_desc___Config" value="" style="display:none"><iframe id="goods_desc___Frame" src="{{asset('backends/includes/fckeditor/editor/fckeditor.html?InstanceName=goods_desc&amp;Toolbar=Normal')}}" width="100%" height="320" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; background-color: transparent; background-image: none; width: 100%; height: 320px;"></iframe></td>
          </tr>
        </tbody></table>

        <!-- 其他信息 -->
        <table width="90%" id="mix-table" style="display: none;" align="center">
                    <tbody><tr>
            <td class="label">商品重量：</td>
            <td><input type="text" name="shopWeight" value="" size="20"> 千克</td>
          </tr>
                              <tr>
            <td class="label"><a href="#" title="点击此处查看提示信息"><img src="{{asset('backends/images/notice.gif')}}" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商品库存数量：</td>
            <td><input type="text" name="shopStockNumber" size="20"><br>
            <span class="notice-span" style="display:block" id="noticeStorage">库存在商品为虚货或商品存在货品时为不可编辑状态，库存数值取决于其虚货数量或货品数量</span></td>
          </tr>
          <tr>
            <td class="label">库存警告数量：</td>
            <td><input type="text" name="stockWarningNumber" value="1" size="20"></td>
          </tr>
                    <tr>
            <td class="label">加入推荐：</td>
            <td><input type="checkbox" name="recommend" value="1" checked="checked">精品 <input type="checkbox" name="recommend" value="1" checked="checked">新品 <input type="checkbox" name="recommend" value="1" checked="checked">热销</td>
          </tr>
          <tr id="alone_sale_1">
            <td class="label" id="alone_sale_2">上架：</td>
            <td id="alone_sale_3"><input type="checkbox" name="upStatus" value="1" checked="checked"> 打勾表示允许销售，否则不允许销售。</td>
					</tr>
					<tr>
            <td class="label">商品简单描述：</td>
            <td><textarea name="briefnessContent" cols="40" rows="3"></textarea></td>
          </tr>
        </tbody></table>

        <!-- 商品属性 -->
         <table width="90%" id="properties-table" style="display: none;" align="center">
			<tbody>
				<tr>
					<td class="label">商品类型：</td>
					<td>
						<select name="shopType_id" id="shopType">
							<option>请选择</option>
							@foreach($shopType as $key => $val)
							<option value="{{$val->t_id}}">{{$val->t_name}}</option>
							@endforeach
							             
						</select><br>
						<span class="notice-span" style="display:block" id="noticeGoodsType">请选择商品的所属类型，进而完善此商品的属性</span>
					</td>
				</tr>
				
				<tbody class="box">
						
				</tbody>
        </tbody>
	</table>
        
        <!-- 商品相册 -->
        <table width="90%" id="gallery-table" style="display: none;" align="center">
          <tbody><tr>
            <td>
				<div id="gallery_41" style="float:left; text-align:center; border: 1px solid #DADADA; margin: 4px; padding:2px;">
                <a href="javascript:;" onclick="if (confirm('您确实要删除该图片吗？')) dropImg('41')">[-]</a><br>
                <a href="goods.php?act=show_image&amp;img_url=images/200905/goods_img/32_P_1242110760641.jpg" target="_blank">
                <img src="../images/200905/thumb_img/32_thumb_P_1242110760997.jpg" width="100" height="100" border="0">
                </a><br>
    
              </div>
                          </td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td>
              <a href="javascript:;" onclick="addImg(this)">[+]</a>
              图片描述 <input type="text" size="20">
              上传文件 <input type="file">
              <input type="text" size="40" value="或者输入外部图片链接地址" style="color:#aaa;">
            </td>
          </tr>
        </tbody></table>

        <div class="button-div">
                    <input type="submit" value=" 确定 " class="button">
          <input type="reset" value=" 重置 " class="button">
        </div>
      </form>
    </div>
</div>


<div id="footer">
	版权所有 &copy; 2006-2013 
</div>
<script type="text/javascript" src="{{asset('backends/js/tab.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	function addImg(obj){
      var src  = obj.parentNode.parentNode;
      var idx  = rowindex(src);
      var tbl  = document.getElementById('gallery-table');
      var row  = tbl.insertRow(idx + 1);
      var cell = row.insertCell(-1);
      cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  	}

    function removeImg(obj){
      var row = rowindex(obj.parentNode.parentNode);
      var tbl = document.getElementById('gallery-table');
      tbl.deleteRow(row);
  	}

   	function dropImg(imgId){
    	Ajax.call('goods.php?is_ajax=1&act=drop_image', "img_id="+imgId, dropImgResponse, "GET", "JSON");
  	}

  	function dropImgResponse(result){
      if (result.error == 0){
          document.getElementById('gallery_' + result.content).style.display = 'none';
      }
  	}
		
		$(document).on('change','#shopType', function () {
				//获取商品类型的id
			   var type_id = $(this).val();
				//  console.log(type_id)
				 $.ajax({
					 type: "get",
					 url: "getAttr",
					 data: {type_id:type_id},
					 dataType: "json",
					 success: function (e) {
						 	// console.log(e)
							$.each(e, function (key,val) { 
								   var value = val.a_value;
									 var length = value.split('\r\n').length;
									 var arr = value.split('\r\n');
									 if(length > 1){
										// <option value="'+val.a_id+'">'+arr[i]+'</option>
										 $('.box').append('<b>'+val.a_name+'</b>');	
										 for(var i = 0; i < length; i++){
												$('.box').append('<input type="checkbox" name="shopAttr'+val.a_id+'[]" value="'+i+'">'+arr[i]+'')
										 }			
										 $('.box').append('<br>')						 
									}
									 
									 console.log(arr)
									 

									 
							});
					 }
				 });
		});


</script>
</body>
</html>
