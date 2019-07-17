
<?php 
    $id=$_REQUEST['id'];

    $user=file_get_contents("http://ktdemov1.kientruc.com/api/v1/customers/".$id."/home");
    $user=json_decode($user,JSON_UNESCAPED_UNICODE);


?>


<div class="tootip-user">
    <div class="avatar">
        <a href="" title="">
            <img src="<?php echo $user['data']['avatar_link']; ?>" alt="" class="img-responsive">
        </a>
    </div>
    <div class="info">
        <p><?php echo $user['data']['department_name'] ?></p>
        <h2><?php echo $user['data']['full_name']; ?></h2>
        <span>
            <?php
                for($i=1;$i<=5;$i++)
                {

            ?>
                <i class="fas fa-star" <?php if($i>$user['data']['star']) echo "style='color: rgba(0,0,0,0.5);'"  ?>></i>
            <?php } ?>
        </span>
        <div class="option">
            <button type="button" class="btn">
                <i class="kt-icon black size-15x14">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                        <path d="M14.552 11.067l-2.163-2.163c-.43-.43-1.144-.416-1.59.03L9.71 10.023l-.215-.12c-.688-.38-1.63-.903-2.62-1.895-.994-.994-1.517-1.937-1.9-2.625-.04-.073-.079-.144-.117-.21l.731-.73.36-.36c.446-.447.458-1.16.029-1.59L3.815.33c-.43-.43-1.143-.417-1.59.03l-.61.613.018.016c-.205.26-.376.562-.503.886-.117.309-.19.603-.223.898-.286 2.368.796 4.531 3.732 7.467 4.058 4.058 7.328 3.752 7.47 3.737.307-.037.601-.11.9-.227.322-.125.623-.296.883-.5l.014.012.617-.605c.446-.446.458-1.16.029-1.59z" fill-rule="evenodd"></path>
                    </svg>
                </i>
            </button>
            <button type="button" class="btn">
                <i class="kt-icon black size-15x12">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 12">
                        <g fill-rule="evenodd">
                            <path d="M2 3.4A361.4 361.4 0 0 0 7.8 7h.4l.5-.3A8.2 8.2 0 0 0 9.7 6a6904 6904 0 0 1 4.6-3.4c.3-.4.4-.8.4-1.2 0-.4-.1-.7-.4-1-.2-.2-.5-.3-.8-.3H2c-.4 0-.7.2-1 .4-.2.3-.3.6-.3 1s.2.7.4 1.1l1 1z"></path>
                            <path d="M14 4.2a162.2 162.2 0 0 0-5.4 3.6c-.3.2-.6.2-.9.2-.3 0-.5 0-.9-.2l-.7-.3-.7-.6A156.3 156.3 0 0 0 .7 3.6v6.2c0 .3.1.6.4.8.2.3.5.4.9.4h11.5c.3 0 .6-.1.8-.4.3-.2.4-.5.4-.8V3.6l-.8.6z"></path>
                        </g>
                    </svg>
                </i>
            </button>
            <button type="button" class="btn">
                <i class="kt-icon black size-15x13">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 13">
                        <path d="M12.568 0H1.933C.933 0 0 .937 0 1.933v6.768c0 .996.932 1.933 1.933 1.933h.484v2.417l4.35-2.417h5.8c1.002 0 1.934-.937 1.934-1.933V1.933C14.501.937 13.569 0 12.568 0zM4 6.477a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" fill-rule="evenodd"></path>
                    </svg>
                </i>
            </button>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="detail">
        <ul class="list-unstyled kt-flex-container flex-between">
            <li>
                <b><?php echo $user['data']['project']; ?></b>
                <span>Dự án</span>
            </li>
            <li>
                <b><?php echo $user['data']['support']; ?></b>
                <span>Tư vấn</span>
            </li>
            <li>
                <b><?php echo $user['data']['follow'] ?></b>
                <span>Người quan tâm</span>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>