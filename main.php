<?php
    session_start();
    if(!isset($_SESSION["is_login"])) {
        $message = "请登录";
        $url = "denglu.php";
        include "tiaozhuan.php";
        exit;
    }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>main</title>
	<script src="jquery.min.js"></script>
</head>
<style>
        *{
            box-sizing: border-box;
        }
        html,body{
            width:100%;height:100%;
            padding:0;margin: 0;
        }
        .header{
            width:100%;height:20%;
            border-bottom: 2px solid #000;
            text-align: center;
        }
        .main{
            width:100%;height:80%;
        }
        .left{
            float:left;width:20%;height:100%;
            border-right:2px solid #000;
        }
        .right{
            float:left;width:80%;height:100%;
        }
        iframe{
            width:100%;height:100%;
        }
        .opt{
            cursor: pointer;
        }
    </style>
    <script>
        $(function(){
            $(".opt").click(function(){
                $(this).find(".son").toggle(100);
            })
        })
    </script>
<body>
	<div class="header">
     <h1>xxx 欢迎来到内容管理系统</h1>
   </div>
   <div class="main">
       	<div class="left">
           	<ul class="menu">
               	<li class="opt">
                   	用户管理
                   	<ul class="son">
                       	<li><a href="" target="right">添加用户</a></li>
                       	<li><a href="" target="right">管理用户</a></li>
                   	</ul>
               	</li>
               	<li class="opt">
                   	分类管理
                   <ul class="son">
                       <li><a href="" target="right">添加分类</a></li>
                       <li><a href="" target="right">管理分类</a></li>
                   </ul>
               </li>
               <li class="opt">
                   	内容管理
                   <ul class="son">
                       <li><a href="" target="right">添加内容</a></li>
                       <li><a href="" target="right">管理内容</a></li>
                   </ul>
               </li>
           </ul>
       </div>
       <div class="right">
           <iframe src="" frameborder="0" name="right">
           </iframe>
       </div>
   </div>
</body>
</html>