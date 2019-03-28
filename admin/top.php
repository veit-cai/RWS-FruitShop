 <div class="top">
    <h1 class="left">RWS水果商城 <span>后台管理系统</span></h1>
    <ul class="right">
        <?php
            if(isset($_COOKIE['aid'])){               
         ?>
        <li>您好，<?php echo $_COOKIE['aname'];?>欢迎您来到RWS水果商城! <a href="logout.php">[注销]</a>
        </li>
        <?php
            }else{
        ?>
        <li>
            您好，欢迎您来到RWS水果商城!
           <a href="login.php">登录</a>
        </li>        
        <?php    
            }
        ?>
    </ul>
</div>