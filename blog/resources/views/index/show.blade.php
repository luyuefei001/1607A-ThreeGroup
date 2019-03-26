<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <input type="text" name="search" id="search">     <input type="button" value="搜索" class="search">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>性别</th>
                <th>操作</th>
            </tr>

            <tbody id="box"></tbody>
            <tbody id="template" style="display:none">
                <tr id = "__id__">
                    <td>__id__</td>
                    <td>__name__</td>
                    <td>__sex__</td>
                    <td><button id="__id__" class="del">删除</button></td>
                </tr>
            </tbody>
        </table>

        <p>总页数:<b id="pageSum"></b></p>
        <button class="page">上一页</button>
            <b id="now_page"></b>
        <button class="page">下一页</button>
    </center>
</body>
</html> 
<style>
    th {
        width:200px;
        height:50px;
    }
    td {
        color:red;
    }
</style>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    $.ajax({
        type: "get",
        url: "index/create",
        dataType: "json",
        success: function (e) {
            console.log(e)
            //数据替换
            $.each(e.data, function () { 
                 var temp = $('#template').html().toString();
                 $.each(this, function (k, v) { 
                      temp = temp.replace(eval('/__' + k + '__/g'),v);
                 });
                 $('#box').append(temp);
            });
            //将总页数与当前页数替换上去
            $('#pageSum').html(e.pageSum);
            $('#now_page').html(e.now_page);
        }
    });

    $(document).on('click','.page',function(){
        //获取当前页数
        var now_page = $('#now_page').html();
        //获取总页数
        var pageSum = $('#pageSum').html();
        var p = '';
        // alert($(this).html())
        if($(this).html() == '上一页'){
            //点击的是上一页
            if(now_page == 1){
                alert('已经是第一页')
                return false;
            }
            p = parseInt(now_page)-1;
        }
        else{
            //点击的是上一页
            if(now_page == pageSum){
                alert('已经是最后一页')
                return false;
            }
            p = parseInt(now_page)+1;
        }
        //获取相关数据
        $.ajax({
            type: "get",
            url: "index/create",
            data: {p:p},
            dataType: "json",
            success: function (e) {
                console.log(e)
                //将当前页数上拥有的数据清空
                $('#box').empty();
                //将数据替换上去
                $.each(e.data, function () { 
                 var temp = $('#template').html().toString();
                 $.each(this, function (k, v) { 
                      temp = temp.replace(eval('/__' + k + '__/g'),v);
                 });
                 $('#box').append(temp);
                });
                //将总页数与当前页数替换上去
                $('#pageSum').html(e.pageSum);
                $('#now_page').html(e.now_page);
            }
        });
    })

    //ajax 删除
    $(document).on('click','.del',function(){
        //获取当前选择的id
        var id = $(this).attr('id');
        var obj = $(this);
        // alert(id)
        //因为要模拟delete请求方式 所以需要以下两个条件
        var _method = 'DELETE';
        var _token = 'UXqesyOeIYPU5X84AYFp7LcFSDQfervKSrkXI2TM';
        $.ajax({
            type: "post",
            url: "index/"+id,
            data: {_method:_method,_token:_token},
            dataType: "json",
            success: function (e) {
                console.log(e)
                if(e.code == 1){
                    //将该行给删除
                    $(obj).parent().parent().empty();
                }
            }
        });
    })

    //ajax搜索
    $(document).on('click','.search',function(){
        //获取要搜索的值
        var search = $('#search').val();
        $.ajax({
            type: "get",
            url: "index/create",
            data: {serach:search},
            dataType: "json",
            success: function (e) {
                console.log(e)
                //将当前页数上拥有的数据清空
                $('#box').empty();
                //将数据替换上去
                $.each(e.data, function () { 
                 var temp = $('#template').html().toString();
                 $.each(this, function (k, v) { 
                      temp = temp.replace(eval('/__' + k + '__/g'),v);
                 });
                 $('#box').append(temp);
                });
                //将总页数与当前页数替换上去
                $('#pageSum').html(e.pageSum);
                $('#now_page').html(e.now_page);
            }
        });
    })

</script>