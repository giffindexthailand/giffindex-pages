<meta charset="UTF-8">
<?php
error_reporting( error_reporting() & ~E_NOTICE );
$WebProtocal=($_SERVER['HTTPS']=="on")?"https://":"http://";  
if(preg_match("/\/th\//",$_SERVER['REQUEST_URI'])){ // ตรวจสอบว่าอยู่ในโฟลเดอร์ภาษาอังกฤษหรือไม่  
    $EnglishPath=$WebProtocal.$_SERVER['SERVER_NAME'].preg_replace("/\/th\//","/",$_SERVER['REQUEST_URI']);   
    $ThaiPath=$WebProtocal.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];   
}else{ //   
    $EnglishPath=$WebProtocal.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; 
    $ThaiPath=$WebProtocal.$_SERVER['SERVER_NAME']."/th".$_SERVER['REQUEST_URI'];  

}
?>
<!-- Header -->
<div class="">
    <div class="container white">
        <div class="col-xs-12 col-sm-6 hidden-xs ">
            <br><br><a href="./" style=""><img src="images/logo.png" alt="Giffindex logo" style="max-width:100%;"></a><br>
        </div>
        <div class="hidden-xs col-sm-6 text-right">
            <form class="form-inline" style="margin:10px 0">
                <div class="form-group">
                    <label class="control-label">Change Location </label>
                    <select class="form-control" onchange="if (this[this.selectedIndex].value !== '0') document.location.href=this.value;">
                        <option>Global / English</option>
                        <option value="<?php echo $ThaiPath?>">Thailand / Thai</option>
                    </select>
                </div>
            </form>
            <div style="margin:10px 0">
				<a href="https://www.giffindex.com/oemmousepad" class="icontop"><img src="images/giffindexmousepadmanufacturer1.jpg" alt="world first playmat with rarity rate for pokemon tcg" width="300"></a>
                <a href="https://www.facebook.com/giffindex" class="icontop"><img src="images/facebook.png" alt="แฟนเพจโรงงานรับทำแผ่นรองเมาส์ facebook" width="30"></a>
                <a href="https://twitter.com/giffindex" class="icontop"><img src="images/twitter.png" alt="ข่าวสารแบรนด์ดังสั่งผลิตแผ่นรองเมาส์ที่ giffindex" width="30"></a>
                <a href="https://www.youtube.com/channel/UCobFTpu_BvwZHarjI8tvF_A" class="icontop"><img src="images/youtube.png" alt="โรงงานแผ่นรองเมาส์ giffindex ช่อง youtube" width="30"></a>
                <a href="https://www.instagram.com/giffindex/" class="icontop"><img src="images/ig.png" alt="อับเดทข่าวแผ่นรองเมาส์ giffindex" width="30"></a>
                <a href="https://www.giffindex.com/contact" class="icontop"><img src="images/line.png" alt="ติดต่อโรงงานผลิตแผ่นรองเมาส์ giffindex ได้ที่ line add" width="30"></a>
            </div>
            Office time 10AM - 4PM
        </div>
    </div>
    <nav class="navbar navbar-default white" role="navigation">
        <div class="container" style="padding:0px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="giffindex logo" ></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="margin:0px;">
              <ul class="nav navbar-nav ">
              <li class="nav-main"><a href="https://www.giffindex.com">HOME</a></li>
                <li class="nav-main"><a href="https://www.giffindex.com/product">PRODUCT</a></li>
                <li class="nav-main"><a href="https://www.giffindex.com/esports">ESPORTS</a></li>
                <li class="nav-main"><a href="https://www.giffindex.com/contact">CONTACT US</a></li>
				  <li class="nav-main"><a href="https://www.giffindex.com/inmoldlabelfoil">Custom In-Mold Label</a></li>
				  <li class="nav-main"><a href="https://www.giffindex.com/tcgplaymat">Custom TCG Playmat</a></li>
                <li class="nav-main"><a href="https://www.giffindex.com/oemmousepad">Custom Mousepad</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>