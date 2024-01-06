<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="header_style.css"/>-->
    <style type="text/css">
        #main_header{background:rgb(19,27,63);display:flex;justify-content:space-around;
        padding:20px;color:white;}
        #header_img{padding-left:40px;}
        #header_components{display:flex;gap:20px;padding-right:100px;padding-top:15px;}
        #header_components a{text-decoration:none;color:white;}

        #mob_header{display:none;}
        @media screen and (min-width:0px) and (max-width:760px) {
            #main_header{display:none;}
            #mob_header{display:block;color:white;text-align:center;background:rgb(19,27,63);}
            #top_div{display:flex;justify-content:space-between;padding-left:20px;padding-right:20px;
                background:black;padding-bottom:10px;}
            #bot_elem{padding-top:50px;padding-bottom:20px;display:none;border-bottom:1px solid white;}
            #bot_elem div{padding-bottom:15px;}
            #bot_elem a{text-decoration:none;color:white;}
            #mobheader_img{padding-top:18px;}
            #dropdown_main_div{display:block;margin:0;padding:0;}
            .dropdown_main_div{display:flex;height:80px;}
            #mob_dropdown_show{display:block;padding-top:5px;margin-left:10px;cursor:pointer;}
            #mob_dropdown_show div{width:60px;height:10px;background:white;margin-top:10px;border-radius:10px;}
            #mob_dropdown_hide{display:none;padding-top:5px;margin-left:10px;cursor:pointer;}
            #mob_dropdown_hide div{width:60px;height:10px;background:white;margin-top:10px;border-radius:10px;}
            #top_hide_div{position:relative;top:20px;rotate:45deg;}
            #bottom_hide_div{position:relative;rotate:-45deg;}

        }
    </style>
</head>
<body>
    <div id="main_header">
        <div id="header_img"><img src="../allImages/kali.png" alt="" width="100px" height="50px" ></div>
        <div id="header_components">
            <div><a href="">GET KALI</a></div>
            <div><a href="">BLOG</a></div>
            <div><a href="">DOCUMENTATION</a></div>
            <div><a href="">COMMUNITY</a></div>
            <div><a href="">COURSES</a></div>
            <div><a href="">DEVELOPERS</a></div>
            <div><a href="">ABOUT</a></div>
        </div>
    </div>

    <div id="mob_header">
        <div id="top_div">
            <div id="mobheader_img"><img src="../allImages/kali.png" alt="" width="100px" height="50px" ></div>
            <div class="dropdown_main_div">
                <div id="mob_dropdown_show" onClick="showAction();">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div id="mob_dropdown_hide" onClick="hideAction();">
                    <div id="top_hide_div"></div>
                    <div id="bottom_hide_div"></div>
                </div>
            </div>
        </div>
        <div id="bot_elem">
            <div><a href="">GET KALI</a></div>
            <div><a href="">BLOG</a></div>
            <div><a href="">DOCUMENTATION</a></div>
            <div><a href="">COMMUNITY</a></div>
            <div><a href="">COURSES</a></div>
            <div><a href="">DEVELOPERS</a></div>
            <div><a href="">ABOUT</a></div>
        </div>
    </div>

    <script type="text/javascript">
        const show_btn = document.getElementById("mob_dropdown_show");
        const hide_btn = document.getElementById("mob_dropdown_hide");
        var dropMenus = document.querySelector("#bot_elem");

        function showAction(){
            hide_btn.style.display="block";
            show_btn.style.display="none";
            dropMenus.style.display="block";
        }
        function hideAction(){
            show_btn.style.display="block";
            hide_btn.style.display="none";
            dropMenus.style.display="none";
        }
</script>
</body>
</html>