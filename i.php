<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    background-image: url("https://th.bing.com/th/id/OIP._aT7yHi8w-PDqZ6v_6zccgHaEK?pid=ImgDet&rs=1");
    background-size: cover;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

}
     header{
        width: 100%;
        height: 5rem;
        background-color: rgba(192, 0, 255, 0.4);
        backdrop-filter: blur(8px);
        margin:0;
    }
    nav{
    width: 100%;
    height: 100%;
    padding:0;
    }
   ul{
    width: 100%;
    height: 100%;
    margin:0;
    padding:0;
    display: flex;
    justify-content: space-around;
    align-items: center;
     }
     ul>li{
        margin:0;
        padding:0;
        list-style:none;
        font-size:4vw;
     }
     .string_div{
    width: 70%;
    height: 3rem;
    background-color: rgba(192, 0, 255, 0.4);
    backdrop-filter: blur(8px);
    border-radius:35px;
    margin-top: 30px;
    margin-inline: auto;
    display:flex;
    justify-content: space-around;
    align-items: center;
}
section{
    width:80%;
    height:30rem;
    margin-top: 30px;
    margin-inline:auto;
    border-radius:35px;
    background-color: rgba(192, 0, 255, 0.4);
    backdrop-filter: blur(9px);
    display:flex;
    justify-content:space-around;
    align-items:center;
}
article{
    font-size:1rem;
    line-height:40px;
}
@media screen and (max-width: 950px) {
    article{
        font-size:.9rem;
    line-height:25px;
}
section{
    height:35rem;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content: flex-start;
}
#php_img{
    width:20rem;
}
}
@media screen and (max-width: 455px) {
    article{
        font-size:.9rem;
    line-height:20px;
}
}
#gg{
    height:18rem;
}
</style>
<body>
   <?php
   if(empty($_POST['login']) or empty($_POST['password'])){
    $login=0;
    $password=0;
   }else{
    $login=$_POST['login'];
    $password=$_POST['password'];
   }
    
    if($login<50 && $password<50){
        $k="https://cdn-icons-png.flaticon.com/512/415/415733.png";
    }
    else{
        $k="https://cdn-icons-png.flaticon.com/512/415/415767.png";
    }
   if(isset($_GET['lang'])){
    $lang=$_GET['lang'];
   }
   else{
    $lang='am';
   }

   if($lang =="am") 
    include "am.php";
  if($lang =="en") 
    include "en.php";
 if($lang =="ge") 
    include "ge.php";
    ?> 
    <header>
        <nav>
        <ul>
            <li><?=About?></li>
            <li><?=Contact?></li>
            <li><?=Home?></li>
        </ul>
        </nav>
    </header>
    <div class="string_div">
        <a href="?lang=am">
            <img src="https://cdn-icons-png.flaticon.com/512/197/197516.png" alt="am" width="40rem"/>
            </a>
            <a href="?lang=en">
            <img src="https://cdn-icons-png.flaticon.com/512/197/197374.png" alt="en" width="40rem"/>
            </a>
            <a href="i.php?lang=ge">
            <img src="https://cdn-icons-png.flaticon.com/512/197/197571.png" alt="ge" width="40rem"/>
            </a>
    </div>
    <section>
    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968332.png" alt="php_img" id="php_img" width="400rem"/>
    <article>
    <?=info?>
</article>
    </section>
    <div id="gg" class="string_div">
            <img src=<?=$k?> alt="g" width="200rem"/>
    </div>
</body>
</html>