## yihao Blog 博客源码开源共享

+ [作者博客地址](http://diao.info) 
欢迎加入群交流：515786911 
使用源码后请在您的网站地址链接或说明来源【可选】
## layui 中的form使用
```
       <link rel="stylesheet" href="/src/admin/layui/css/layui.css">
       <script src="https://apps.bdimg.com/libs/jquery/1.8.0/jquery.min.js"></script>
       <script src="/src/admin/layui/layui.js"></script>
       <script>
           layui.use('form', function () {
               var form = layui.form();
               form.on('switch(choice)', function(data){
                   var id=data.elem.value;
                   var homead=0;
                   if(data.elem.checked){
                       homead=1;
                   }
                   var postdata={'id':id,'homead':homead};
                   $.post("/admin/article/homead.html",postdata,function(res){
                       if(res.status){
                           layer.msg(res.info, {time: 2000});
                       }else{
                           layer.msg(res.info, {time: 2000});
                       }
                   },'json');
                   return false;
               });
           });
       </script>

```
## 安装验证模块
    composer require topthink/think-captcha





