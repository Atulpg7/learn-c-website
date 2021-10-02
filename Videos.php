<?php
include("head.php");
if(empty($_SESSION['uname'])){header("location:login.php");}
?>

<?php include("navbar.php");?>

<div class="parent-div" style="overflow: auto;height: 500px;">


    <div class="video_div_f">

        <h3><u>Beginner's Level Videos</u></h3>

        <div>

            <iframe  class="frame" height="200" src="https://www.youtube.com/embed/bBQkManv3f0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/mgPdXzdQ8Oc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/OZoSFqvBLUs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/XHvuvyqTUhM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>


    </div>

        <div class="video_div">

        <h3><u>Medium Level Videos</u></h3>
        
        <div>

            <iframe  class="frame" width="300" height="200" src="https://www.youtube.com/embed/wLfT3AF1mM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/CG7rqx6DXj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/CG7rqx6DXj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/CG7rqx6DXj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



        </div>


    </div>

        <div class="video_div">

        <h3><u>Advance Level Videos</u></h3>

        <div>
                <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/Pnl4WHoUVfU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/Pnl4WHoUVfU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/Pnl4WHoUVfU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe class="frame" width="300" height="200" src="https://www.youtube.com/embed/Pnl4WHoUVfU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>

    </div>

</div>
<?php include("footer.php");?>


