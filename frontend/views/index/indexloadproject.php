<?php 
if(isset($_GET['page']))
    {
       $page=$_GET['page'];
    }
    if(isset($_GET['tag']))
    {
        $tag=$_GET['tag'];
    }
    $load = file_get_contents("http://ktdemov1.kientruc.com/api/v1/projects/home?page=".$page."&tag=".$tag);
    $load= json_decode($load,JSON_UNESCAPED_UNICODE);
?>

 <?php 
   foreach( $load['data']['items'] as $key =>$value) {
?>
<div class="item wow fadeIn" >
    <div class="kt-project-item">
        <a href="site/detail-project?id=<?php echo $value['id_post']; ?>">
            <i class="ipro kt-icon size-20x34">
           <svg xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z" stroke="#70BC4E" fill="#98D37E"></path>
                <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z" stroke-opacity=".5" stroke="#248444" stroke-width=".8" fill="#FFF" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
            </i>
            <div class="kt-flex-container kt-share-box hover transition">
               
            </div>
        </a>
        <div class="item-image" style="background:url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images/<?php echo $value['avatar']['name']; ?>');background-size:<?php if($value['avatar']['compare'] == 1) echo 'cover'; else echo '100%'; ?>;background-repeat:no-repeat;">
            <a href="site/detail-project?id=<?php echo $value['id_post']; ?>">
            </a>
            <a href="site/detail-project?id=<?php echo $value['id_post']; ?>" title="" data-modalajaxproject="true">
                    <img src="https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images_rz/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid" style="opacity: 0;">
                </a>
            </div>
            <div class="item-info">
                <h2>
                    <a href="site/detail-project" title="" data-modalajaxproject="true">
                        <?php echo $value['name']; ?>
                    </a>
                </h2>
                <div class="view">
                        <div class="float-left">
                        <ul class="list-unstyled">
                            <li>
                                <i class="kt-icon middle grey size-17x12">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
                                       <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z" fill-rule="nonzero"></path>
                                     </svg>
                                </i>
                                <span><?php echo $value['total_like']; ?></span>
                            </li>
                            <li><i class="fas fa-camera"></i> <span><?php echo $value['total_photo']; ?></span></li>
                       
                        </ul>
                    </div>
                     <div class="float-right">
                        <p class="kt-text-right">
                            <a href="" title="">
                               <?php echo $value['tag']['name']; ?>
                            </a>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
            <div class="kt-line kt-grey"></div>
            <div class="customer">
                <div class="float-left">
                    <div class="avatar js-viewUser" data-item="<?php echo $value['id_customer']; ?>">
                            <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid">
                     </div>
                    <a href="" title="">
                        <span><?php echo $value['customer']['full_name']; ?></span>
                    </a>
                </div>
                <div class="float-right" style="display: flex;align-items: center;justify-content: center;">
                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích" style="background-color: rgba(0,0,0,0.2); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại" style="background-color: rgba(0,0,0,0.2); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;">
                        <i class="far fa-bookmark"></i>
                    </button>
                    
                </div>
                     <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>               	
   </div>
</div>
<?php } ?> 