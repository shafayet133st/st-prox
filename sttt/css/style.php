<?php
Header("content-type:text/css");
?>
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap');
*{margin:0; padding:0;outline:0;}
body{font-family: 'Roboto Condensed', sans-serif; font-size:18px; line-height:22px;color:#000;}
.na{}
.na ul{background-color: #009661;}
.na ul li a{color: white;font-size: 25px;}
.na ul li a:hover{color:lightsteelblue;}
.carousel-inner img {
    width: 100%;
    height: 50%;
}

.pic{    font-size:40px;text-shadow: 15px 25px 20px black;
    top: 20%;    line-height: 40px;}
.r{padding-bottom: 15px;}
.b{    background-color: #473f50;}
.c{}
.ca img{height: 300px;padding: 0 10px;}
.ca{font-size:16px;box-shadow: 0px 18px 16px 5px rgba(0,0,0,0.2);margin: 10px 0;}
/*sfsdfs*/
.clear{overflow:hidden; }

.shado{background:rgba(0,0,0,.5);display:none;width:100%; position:absolute;top:0%; transition: 2s; color: white;}

.shado p{text-align: left;font-style: italic;
    padding: 5px;}
.shado u {padding-left: 90px;}
    .clear:hover .shado{display: block;}
	/*sfsdfs*/
	
.ba{     margin: 5px;margin-left: 25px;
    padding: 5px;
    border-radius: 5px;}	
@media  screen  and (max-width:640px){
	.pic{    font-size:15px;line-height: 5px;}
	.but{height:30px;}

}
.nac{background-color:#009661}
.bb {  height: 100%;
  background-color: #cccccc;
  background-image: linear-gradient( #A7E570,#0A7699);}
.bb1 { height: 100%;
  background-color: #cccccc;
  background-image: linear-gradient(#0A7699,#78CEE9 );}  
.but{    padding: 5px;
    margin-right: 5px;
    font-size: 16px;
    border-radius: 20px;color:white;
    background-image: linear-gradient(red, green);
    border: 1px solid midnightblue;}
	
.but:hover{background-image: linear-gradient( green,red);}
