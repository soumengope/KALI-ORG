<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        #main_footer{background-color:black;width:80%;color:white;text-align:center;
        margin:0 auto;padding-top:40px;}
        #footer_top{display:flex;gap:10px;justify-content:center;padding:5px;}
        #light_dark_main{width:60px;height:30px;background:blue;border-radius:20px;}
        #light_dark_toggle{width:26px;height:26px;border-radius:50%;background:white;margin-top:2px;
        margin-left:2px;}
        #light,#dark{padding-top:5px;}

        #footer_second_bottom{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;padding-top:40px;
        }
        .footer_childHeader{padding-bottom:30px;font-size:25px;font-weight:600;}
        .footer_childElem{padding-bottom:15px;}
        .footer_childElemPics{display:flex;gap:10px;padding-bottom:15px;justify-content:center;}
        .footer_childElemPics img{filter:invert(1);}
        #azure img,#aws img{filter:brightness(0) invert(1);}

        #footer_third_bottom{padding-top:100px;}
        #footer_third_bottom img{filter:invert(1);padding-bottom:20px;}
        #footer_rights{padding:40px;}

        #followUs{padding-top:20px;}
        #community{padding-top:120px;}
        #policies{padding-top:150px;}

        @media screen and (min-width:0px) and (max-width:760px) {
            #footer_second_bottom{grid-template-columns:repeat(1,1fr);gap:20px;padding-top:40px;}
            #community{padding-top:20px;}
            #policies{padding-top:20px;}
            #footer_third_bottom img{width:80%;}
        }

    </style>
</head>
<body>
    <div id="main_footer">

        <div id="footer_top">
            <span id="light">Light</span>
            <div id="light_dark_main">
                <div id="light_dark_toggle"></div>
            </div>        
            <apan id="dark">Dark</span>
        </div>
        
        <div id="footer_second_bottom">
            <div id="footer_second_firstChild">
                <div class="footer_childHeader">Links</div>
                <div class="footer_childElem">Home</div>
                <div class="footer_childElem">Download / Get Kali</div>
                <div class="footer_childElem">OS Documentation</div>
                <div class="footer_childElem">Tool Documentation</div>
                <div class="footer_childElem">system status</div>
                <div class="footer_childElem">Archieved Releases</div>
                <div class="footer_childHeader" id="community">Community</div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/discord.png" width="20px" height="20px" alt=""></div>
                    <div>Discord</div>
                </div>
                <div class="footer_childElem">Support Forum</div>
            </div>

            <div id="footer_second_secondChild">
                <div class="footer_childHeader">Platforms</div>
                <div class="footer_childElem">ARM (SBC)</div>
                <div class="footer_childElem">Nethunter Mobile</div>
                <div class="footer_childElemPics">
                    <div id="aws"><img src="../allImages/aws.png" width="20px" height="20px"alt=""></div>
                    <div>Amazon AWS</div>
                </div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/docker.png" width="20px" height="20px" alt=""></div>
                    <div>Docker</div>
                </div>
                <div  class="footer_childElemPics">
                    <div><img src="../allImages/linode.png" width="20px" height="20px" alt=""></div>
                    <div>Linode</div>
                </div>
                <div class="footer_childElemPics">
                    <div id="azure"><img src="../allImages/azure.png" width="20px" height="20px" alt=""></div>
                    <div>Microsoft Azure</div>
                </div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/microsoft.png" width="20px" height="20px" alt=""></div>
                    <div>Microsoft Store (WSL)</div>
                </div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/vagrant.png" width="20px" height="20px" alt=""></div>
                    <div>Vagrant</div>
                </div>
                <div class="footer_childHeader" id="followUs">Follow Us</div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/facebook.png" width="20px" height="20px" alt=""></div>
                    <div>Facebook</div>
                </div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/instagram.png" width="20px" height="20px" alt=""></div>
                    <div>Instagram</div>
                </div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/mastodon.png" width="20px" height="20px" alt=""></div>
                    <div>Mastodon</div>
                </div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/twitter.png" width="20px" height="20px" alt=""></div>
                    <div>Twitter</div>
                </div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/mailbox.png" width="20px" height="15px" alt=""></div>
                    <div>Newsletter</div>
                </div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/rss.png" width="20px" height="20px" alt=""></div>
                    <div>RSS</div>
                </div>
            </div>

            <div id="footer_second_thirdChild">
                <div class="footer_childHeader">Development</div>
                <div class="footer_childElem">Bug Tracker</div>
                <div class="footer_childElem">Continuous Integration</div>
                <div class="footer_childElem">Network Mirror</div>
                <div class="footer_childElem">Package Tracker</div>
                <div class="footer_childElemPics">
                    <div><img src="../allImages/gitlab.png" width="20px" height="20px" alt=""></div>
                    <div>Gitlab</div>
                </div>
                <div class="footer_childHeader" id="policies">Policies</div>
                <div class="footer_childElem">Cookie Policy</div>
                <div class="footer_childElem">Privacy Policy</div>
                <div class="footer_childElem">Trademark Policy</div>
            </div>
        </div>
        <div id="footer_third_bottom">
            <div><img src="../allImages/kali_mainBigLogo.png" width="300px" height="250px"src="" alt=""></div>
            <div id="footer_rights">Offsec Services Limited 2023.All rights reserved.</div>
        </div>
    </div>
</body>
</html>