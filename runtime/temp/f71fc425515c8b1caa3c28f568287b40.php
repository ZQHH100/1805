<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpstudy_pro\WWW\aliyun_1805\public/../application/index\view\product\product.html";i:1542243168;}*/ ?>
<ul class="cate_list">
    <?php if(is_array($product_list) || $product_list instanceof \think\Collection || $product_list instanceof \think\Paginator): $i = 0; $__LIST__ = $product_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <li>
            <a href="<?php echo url('product/productDetail',['id'=>$v['sku_id']]); ?>">
                <div class="img">
                    <img src="__PUBLIC__<?php echo $v['goods_goods_img']; ?>" width="210" height="185" />
                </div>
                <div class="price">
                    <font>￥<span><?php echo number_format($v['sku_price'] , 2,'.',',' ); ?></span></font> &nbsp;
                </div>
                <div class="name" style="height: 45px"><?php echo $v['sku_name']; ?><br/>
                <span style="margin-left: 10px">销量:<span style="color: #ff6620"><?php echo formatSale($v['sku_sale_number']); ?></span></span>
                </div>
            </a>
            <div class="carbg">
                <a href="javascript:;" class="ss">收藏</a>
                <a href="javascript:;" class="j_car">加入购物车</a>
            </div>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="pages" >
    <?php echo $page_str; ?>
    <!--<a href="javascript:;" class="p_pre">上一页</a><a href="javascript:;" class="cur">1</a><a href="javascript:;">2</a><a href="javascript:;">3</a>...<a href="javascript:;">20</a><a href="javascript:;" class="p_pre">下一页</a>-->
</div>