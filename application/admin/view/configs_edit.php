<link rel="stylesheet" href="/src/admin/wangEditor/css/wangEditor.min.css">
<script type="text/javascript" src="/src/admin/wangEditor/js/wangEditor.min.js"></script>
<div class="aright">
    <fieldset class="layui-elem-field layui-field-title" style="margin: 20px 30px 20px 20px;">
        <legend><?php echo isset($info['id']) ? '修改' : '添加'; ?>配置</legend>
    </fieldset>
    <form class="layui-form bform" method="post" enctype="multipart/form-data" >
        <div class="layui-form-item">
            <label class="layui-form-label">key</label>
            <div class="layui-input-block">
                <div class="file-box">

                    <input type="text" name="ckey" required lay-verify="required" value="{$vo.ckey}" placeholder="必填内容" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>


        <div class="layui-form-item">
            <label class="layui-form-label">是否图片</label>
            <div class="layui-input-block">

                <div class="file-box">
                        <input type="hidden" id="ctype" name="type" value="{$vo.type|default='txt'}">
                        <input type="checkbox" lay-skin="switch"  lay-filter="pic" value="txt"
                        <if($vo.type=='img')>
                                checked
                        </if> ></div>
            </div>
        </div>

        <div class="layui-form-item" id="pics">
            <label class="layui-form-label">value（图片）</label>
            <div class="layui-input-block">
                <div class="file-box">
                    <i class="layui-icon">&#xe61f;</i>
                    <input class="file-btn" type="button" value="选择图片">
                    <input class="file-txt" type="text" autocomplete="off"  id="textfield">
                    <if ($vo['cvalue']!='')>
                    <img src="{$vo.cvalue|default=''}" width="150">
                    </if>
                    <input class="file-file" type="file" name="img" id="pic"  size="28" onchange="document.getElementById('textfield').value = this.value" />
                </div>
            </div>
        </div>

        <div class="layui-form-item" id="txts">
            <label class="layui-form-label">value(文字 )</label>
            <div class="layui-input-block">
                <div class="file-box">
                    <input type="text" name="cvalue" value="{$vo.cvalue}" placeholder="必填内容" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>


        <div class="layui-form-item" id="txts">
            <label class="layui-form-label">说明</label>
            <div class="layui-input-block">
                <div class="file-box">
                    <input type="text" name="cnote" required value="{$vo.cnote}" placeholder="必填内容" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <input type="hidden" name="id" value="{$vo.id}">
                <button class="layui-btn">立即提交</button>
            </div>
        </div>
    </form>
</div>
<script>

    layui.use('form', function () {
    <if ($vo['type']=='img')>
        $('#pics').css('display','block');
        $('#txts').css('display','none');
    <else/>
        $('#pics').css('display','none');
        $('#txts').css('display','block');
        </if>

      var form = layui.form();
      form.on('switch(pic)', function(data){
          if(data.elem.checked){
              $('#pics').css('display','block');
              $('#txts').css('display','none');
              $('#ctype').val('img');
          }else{
              $('#pics').css('display','none');
              $('#txts').css('display','block');
              $('#ctype').val('txt');
          }
      });
 });




</script>