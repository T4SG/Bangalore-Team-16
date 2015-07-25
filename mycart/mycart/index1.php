<?php include "header.php"; ?>
<?php echo $_SESSION['msg'];$_SESSION['msg'] = "";?>

         <style type="text/css">
         /* http://www.menucool.com */

#sliderFrame, #sliderFrame div {
    box-sizing: content-box;
}
#sliderFrame 
{
    position:relative;
    width:0px;
   /* margin:0 auto; *//*center-aligned*/
}

#slider, #slider div.sliderInner {
    width:700px;height:306px;/* Must be the same size as the slider images */
}

#slider {
    background:#fff url(loading.gif) no-repeat 50% 50%;
    position:relative;
    margin:0 auto; /*center-aligned*/
    transform: translate3d(0,0,0);
    box-shadow: 0px 1px 5px #999999;
}

/* image wrapper */
#slider a.imgLink, #slider div.video {
    z-index:2;
    position:absolute;
    top:0px;left:0px;border:0;padding:0;margin:0;
    width:100%;height:100%;
}
/*#slider .video {
    background:transparent url(video.png) no-repeat 50% 50%;
}*/

/* Caption styles */
#slider div.mc-caption-bg, #slider div.mc-caption-bg2 {
    position:absolute;
    width:100%;
    height:auto;
    padding:10px 0;/* 10px will increase the height.*/
    left:0px; /*if the caption needs to be aligned from right, specify by right instead of left. i.e. right:20px;*/
    bottom:0px;/*if the caption needs to be aligned from top, specify by top instead of bottom. i.e. top:150px;*/
    z-index:3;
    overflow:hidden;
    font-size: 0;
}
#slider div.mc-caption-bg 
{
    /* NOTE: Its opacity is to be set through the sliderOptions.captionOpacity setting in the js-image-slider.js file.*/
    background:Black;/* or any other colors such as White, or: background:none; */
}
#slider div.mc-caption-bg2 {
    background:none;
}
#slider div.mc-caption {
    font: bold 14px/20px Arial;
    color:#EEE;
    z-index:4;
    text-align:center;
    background:none;
}
#slider div.mc-caption a {
    color:#FB0;
}
#slider div.mc-caption a:hover {
    color:#DA0;
}


/* ------ built-in navigation bullets wrapper ------*/
/* Note: check themes\2\js-image-slider.css to see how to hide nav bullets */
#slider div.navBulletsWrapper  {
    top:320px;/* Its position is relative to the #slider */
    text-align:center;
    background:none;
    position:relative;
    z-index:5;
}

/* each bullet */
#slider div.navBulletsWrapper div 
{
    width:11px; height:11px;
    font-size:0;color:White;/*hide the index number in the bullet element*/
    background:transparent url(bullet.png) no-repeat 0 0;
    display:inline-block; *display:inline; zoom:1;
    overflow:hidden;cursor:pointer;
    margin:0 6px;/* set distance between each bullet*/
}

#slider div.navBulletsWrapper div.active {background-position:0 -11px;}


/* --------- Others ------- */

#slider div.loading 
{
    width:100%; height:100%;
    background:transparent url(loading.gif) no-repeat 50% 50%;
    filter: alpha(opacity=60);
    opacity:0.6;
    position:absolute;
    left:0;
    top:0; 
    z-index:9;
}

#slider img, #slider>b, #slider a>b {
    position:absolute; border:none; display:none;
}

#slider div.sliderInner {
    overflow:hidden; 
    -webkit-transform: rotate(0.000001deg);/* fixed the Chrome not crop border-radius bug*/
    position:absolute; top:0; left:0;
}

/*#slider>a, #slider video, #slider audio {display:none;}
#slider div {-webkit-transform: translate3d(0,0,0);transform: translate3d(0,0,0);}*/
         </style>
         <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    
 <div id="sliderFrame">
        <div id="slider">
         
            <img width="100" height="60" src="images/1.jpg" alt="" />
            <img src="images/2.jpg" alt="" />
            <img src="images/3.jpg" alt="#htmlcaption" />
            <img src="images/4.jpg" />
            <img src="images/5.jpg" />
        </div>
        
    </div>
          <!--  <article>               
            <h1>Welcome to our website</h1>
            <p>
                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSHvMyxDyMS17jsK3xk9kfHfgKbwzaU58xfokwh1c7-37lP9Vkuhg" alt="Sample Image">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptas delectus vitae soluta ullam, aliquam officiis iste alias, quibusdam nulla officia cupiditate porro! Commodi minus accusantium possimus facere ipsum enim placeat incidunt doloremque, voluptatum consectetur, temporibus fugiat dolorem accusamus officiis. Quae maiores deserunt, laudantium laborum fugit nesciunt, assumenda adipisci repellat vero nobis sit aut. Qui hic assumenda reprehenderit, perferendis debitis saepe nam. Modi debitis minus aliquam totam, earum animi excepturi sit eum aut facere, impedit quis ad eligendi rem perspiciatis aliquid a, inventore accusantium placeat reiciendis. Expedita, eveniet. Vero, sequi! Dicta officia vero provident aperiam atque voluptas tempora, earum laborum.
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos provident temporibus aspernatur amet saepe quasi, error eaque quas iste ut beatae similique inventore earum. Similique possimus natus maxime culpa. Reiciendis sapiente esse laboriosam ea placeat rerum eligendi, praesentium provident asperiores nihil aliquid voluptate hic repudiandae eveniet, labore amet optio corporis.</p>

            <a href="#">Read more</a>
            </article> -->         
 <?php include "footer.php"; ?>       