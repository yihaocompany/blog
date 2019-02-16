<div class="aright">
    <div class="arz" style="float: left;margin: 0px 20px 20px 30px;"><a href="{:url('configs/edit')}"><i class="layui-icon">&#xe608;</i>添加配置</a></div>

    <div style="float: left;">
        <button class="layui-btn layui-btn-primary">
            <a href="{:url('configs/cache')}">
                <i class="layui-icon">&#x1002;</i>更新缓存</a>
        </button>
    </div>

    <form method="post" class="aform cl " >
        <table width="100%">
            <tr>
                <th width="2%" align="center">id</th>
                <th width="15%" align="center">key</th>
                <th width="7%" align="center">value</th>
                <th width="5%" align="center">类型</th>
                <th width="5%" align="center">说明</th>
                <th width="5%" align="center">操作</th>
            </tr>
            <volist name="list" id="vo">
                <tr>
                    <td align="center">{$vo.id}</td>
                    <td align="center">{$vo.ckey}</td>
                     <td>
                        <if ($vo['type']=='img')>
                             <img src="{$vo.cvalue|default=''}" width="120">
                        <else/>
                        {$vo.cvalue|default=""}
                        </if>
                    </td>
                    <td align="center">{$stype[$vo['type']]}</td>
                    <td align="center">{$vo['cnote']}</td>
                    <td align="center">
                        <a href="{:url('configs/edit',['id'=>$vo['id'],'type'=>$vo['type']])}" class="layui-btn layui-btn-small">修改</a>
                    </td>
                </tr>
            </volist>
        </table>
    </form>
    <div class="pages">
        {$pages|raw}
    </div>
</div>
<script>
</script>