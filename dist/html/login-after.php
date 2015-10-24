<div id="member" style="display: block;">
    <ul>
        <li id="avatarCnt" style="width: 30px;"><a href="/member.php?_a=index"><i class="icon-user"></i>我的信息</a></li>
        <li class="myFav" style="width: 30px;"><a href="/member.php?_a=fav_search"><i class="icon-heart"></i>我的收藏</a></li>
        <li class="mySet"><a href="/member.php?_a=setting"><i class="icon-wrench"></i>设&nbsp;&nbsp;置</a></li>
    </ul>
</div>

<script language="JavaScript">
    $("#member li").hover(function(){
        $(this).min.css('background-color' , '#b2a6a6');
        $(this).stop().animate({
            width:'130px'
        }, 'fast');
    },function(){
        $(this).min.css('background-color' , '');
        $(this).stop().animate({
            width:'30px'
        }, 'fast');
    });
</script>