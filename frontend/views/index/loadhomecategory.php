<?php foreach ($home['data']['items'] as $key => $value) {
                        # code...
                     ?>
                    <div class="item wow fadeIn">
                                <div class="kt-project-item">
                                    <?php if($value['pro'] == 1) { ?>
                                    <i class="ipro kt-icon size-20x34">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M1 32.5a.5.5 0 0 0 .8.4l8.4-6 8 6a.5.5 0 0 0 .8-.4v-30c0-.8-.7-1.5-1.5-1.5h-15C1.7 1 1 1.7 1 2.5v30z" stroke="#70BC4E" fill="#98D37E"></path>
                                                <path d="M11.6 20.2h2v2.2H7v-2.8c0-.5 0-1 .3-1.3a2.3 2.3 0 0 1 2-1.3 2 2 0 0 1 1.7.7c.4.5.6 1.2.6 2v.5zm-1.9 0v-.6-.3l-.3-.1-.4.1-.1.3v.6h.8zm1.9-5.5v.1h2V17H7v-2.7c0-.8.2-1.4.5-1.9a2 2 0 0 1 1.6-.7c.5 0 1 .1 1.3.3l.6.6 2-1H13.6v2l-2 1zm-2 .1v-.5-.3H9l-.1.3v.5h.8zm.8-8.9c.6 0 1.2.1 1.7.4a2.7 2.7 0 0 1 1.6 2.6c0 .5-.1 1-.4 1.5-.3.4-.7.8-1.1 1-.5.3-1 .4-1.7.4h-.3c-.7 0-1.2 0-1.7-.3s-1-.6-1.2-1A3 3 0 0 1 7 8.8c0-.6.1-1.1.4-1.6.3-.4.7-.8 1.2-1 .5-.3 1-.4 1.6-.4h.3zm-.2 2.2c-.5 0-1 .1-1.1.3-.2 0-.3.2-.3.5 0 .4.3.7 1.2.7h.4c.5 0 .9 0 1.1-.2.2-.2.3-.3.3-.5 0-.3 0-.4-.3-.5a2 2 0 0 0-1-.3h-.3z" stroke-opacity=".5" stroke="#248444" stroke-width=".8" fill="#FFF" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </i>
                                    <?php  }?>
                                    <div class="item-image" style="background: url('https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images/<?php echo $value['avatar']['name']; ?>');background-size: <?php if($value['avatar']['compare']==1) echo 'cover'; else echo '100%'; ?> ; background-repeat: no-repeat;">
                                        <a href="site/detail-project?id=<?php echo $value['id_post']; ?>" title="" data-modalajaxproject="true">
                                            <img src="https://www.kientruc.com/uploads/images/<?php echo $value['customer']['folder_upload']; ?>/images_rz/430x280<?php echo $value['avatar']['name']; ?>" alt="" class="img-fluid" style="opacity: 0;">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <h2>
                                            <a href="/site/detail-project" title="" data-modalajaxproject="true">
                                               <?php echo ucwords(mb_strtolower($value['name'],'UTF-8')); ?>
                                            </a>
                                        </h2>
                                        <div class="view">
                                            <div class="float-left">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-camera"></i> <span><?php echo $value['total_photo']; ?></span></li>
                                                    <li><i class="fa fa-heart"></i> <span><?php echo $value['total_like']; ?></span></li>
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
                                                <div class="avatar js-viewUser tooltipstered" data-item="0">
                                                    <img src="/images/avatar.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="" title="">
                                                    <span><?php echo $value['customer']['full_name']; ?></span>
                                                </a>
                                            </div>
                                            <div class="float-right">
                                                 <div class="float-right" style="display: flex;align-items: center;justify-content: center;">
                                                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích" style="background-color: rgba(0,0,0,0.1); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;" status="1">
                                                        <i class="fas fa-heart" style="color: #FFF;"></i>
                                                    </button>
                                                    <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại" style="background-color: rgba(0,0,0,0.1); border-radius: 100%; width: 24px; height: 24px; display: flex;align-items: center;justify-content: center; margin-left: 5px;font-size: 10px;">
                                                        <i class="fa fa-bookmark" style="color: #FFF;"></i>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                    </div>
                    <?php } ?>