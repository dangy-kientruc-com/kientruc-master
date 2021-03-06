<?php echo \frontend\widgets\headerWidget::widget() ?>
<div class="project">
	<div class="project-top">
		<div class="project-top-in">
			<div class="project-top-left"><i class="fa fa-chevron-left"></i> Quay lại trang cá nhân</div>
			<div class="project-top-right">
				<div class="project-top-right-li remove">Xóa dự án</div>
				<div class="project-top-right-li save-to"><i class="far fa-save"></i>Lưu vào nháp</div>
				<div class="project-top-right-li">
					<button>
						Đăng dự án
						<div><i class="fa fa-chevron-right"></i></div>
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="project-bot">
		<div class="grid-sort">
		    <div class="grid-sort-a">
		        <div class="kt-detail-left">
		            <h1><?php echo $project['data']['detail']['name']; ?></h1>
		            <div class="text-left view">
		                <ul class="list-unstyled">
		                    <li>
		                        <i class="kt-icon grey size-16x11">
		                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
		                                <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z" fill-rule="nonzero" opacity=".4"></path>
		                            </svg>
		                        </i>
		                        <b><?php echo $project['data']['detail']['view']; ?></b>
		                    </li>
		                    <li>
		                        <i class="kt-icon grey size-14x11">
		                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14">
		                                <path d="M13.4 0H2.1C1 0 0 1 0 2v7.3c0 1 1 2 2 2h.6V14l4.6-2.5h6.2c1 0 2-1 2-2V2c0-1-1-2-2-2z" fill-rule="evenodd" opacity=".4"></path>
		                            </svg>
		                        </i>
		                        <b><?php echo $project['data']['detail']['total_comment']; ?></b>
		                    </li>
		                    <li>
		                        <i class="kt-icon grey size-14x11">
		                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
		                                <path d="M12.3.3c-1.4 0-2.7.7-3.4 1.8 0 0-.3.4-.7.4-.4 0-.6-.4-.6-.4A4.1 4.1 0 0 0 .3 6c1.2 3.6 6.3 7.8 8 8 1.5-.2 6.7-4.4 7.8-8A4.1 4.1 0 0 0 12.3.3z" fill-rule="evenodd" opacity=".4"></path>
		                            </svg>
		                        </i>
		                        <b><?php echo $project['data']['detail']['total_like']; ?></b>
		                    </li>
		                </ul>
		            </div>
		            <div class="text-right like">
		                <div class="share">
		                    <a href="" title="">
		                        <button type="button" class="btn">
		                            <i class="kt-icon size-15x14">
		                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15">
		                                    <path d="M0 9.4V2.9A3 3 0 0 1 2.9 0H13A3 3 0 0 1 16 2.9v6.5a3 3 0 0 1-2.9 2.9H7.8l-4 2.2a1 1 0 0 1-1.5-.9v-1.4A3 3 0 0 1 0 9.4zm7 1l.5-.1h5.6c.4 0 .9-.5.9-.9V2.9c0-.4-.5-.9-.9-.9H3c-.4 0-.9.5-.9.9v6.5c0 .4.5.9.9.9h.4c.6 0 1 .4 1 1v.6L7 10.4z" fill="#474747" fill-rule="nonzero"></path>
		                                </svg>
		                            </i>
		                            <span>Bình luận</span>
		                        </button>
		                    </a>
		                    <a href="" title="">
		                        <button type="button" class="btn">
		                            <i class="kt-icon size-17x14">
		                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
		                                    <path d="M12.2 0C14.8 0 17 2 17 4.6c0 .6-.1 1.2-.3 1.7-1 3.1-6 7.5-8.1 7.7h-.2c-2.2-.2-7-4.6-8-7.6C0 5.8 0 5.2 0 4.6 0 2.1 2.2 0 4.8 0c1.4 0 2.8.6 3.7 1.7.9-1 2.3-1.7 3.7-1.7zm2.6 5.6l.2-1C15 3.2 13.8 2 12.2 2c-1 0-1.8.4-2.3 1.1a1.8 1.8 0 0 1-1.4.8c-.4 0-.8-.1-1-.4L7 3.2A2.8 2.8 0 0 0 4.8 2 2.7 2.7 0 0 0 2 4.6c0 .4 0 .7.2 1A14 14 0 0 0 8.5 12a14 14 0 0 0 6.3-6.4z" fill="#474747" fill-rule="nonzero"></path>
		                                </svg>
		                            </i>
		                            <span>Thích</span>
		                        </button>
		                    </a>
		                    <a href="" title="">
		                        <button type="button" class="btn" onclick="javascript:modalAddAlbum()">
		                            <i class="kt-icon size-14x14">
		                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
		                                    <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z" fill="#474747" fill-rule="nonzero"></path>
		                                </svg>
		                            </i>
		                            <span>Lưu vào Album</span>
		                        </button>
		                    </a>
		                    <div class="dropdown" style="float:right;margin-left: 15px">
		                        <button class="btn btn-secondary dropdown-toggle arrowUp" style="border-radius: 100px;padding: 0;height: 35px;width: 35px;background-color: #EEF7F1;border-width: 0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                            <i class="fas fa-ellipsis-h" style="color: #248444"></i>
		                        </button>
		                        <div class="dropdown-menu dropdown-menu-right font-12px" aria-labelledby="dropdownMenuButton">
		                            <a class="dropdown-item" href="#">
		                                <i class="kt-icon black size-10x10">
		                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
		                                        <path d="M8.4 3a1 1 0 0 0-1.3 0l-.4.3-4.6 4.6-.2.2s-.4.4-1.5 3.8a43.6 43.6 0 0 0-.1.5v.1l-.1.3c-.1.3-.3.9-.1 1 .2.3.8.1 1 0h.4l.1-.1h.2l.2-.1C5.3 12.6 6 12 6 12V12l4.7-4.7.4-.3c.3-.3.3-1 0-1.3L8.4 2.9zm-3 8.4a10.7 10.7 0 0 1-2.2 1l-1.6-1.6a33.4 33.4 0 0 1 1-2.2v-.1l2.9 2.8-.1.1zM13.7 3L11.1.3a1 1 0 0 0-1.4 0l-.6.6a1 1 0 0 0 0 1.4l2.6 2.6c.4.4 1 .4 1.3 0l.7-.6c.4-.4.4-1 0-1.4z" fill="#474747" fill-rule="evenodd"></path>
		                                    </svg>
		                                </i>
		                                Sửa dự án
		                            </a>
		                            <a class="dropdown-item" href="#">
		                                <i class="kt-icon black size-9x10">
		                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
		                                        <path d="M1.7 13s.3 1 1.5 1H9c1.2 0 1.5-1 1.5-1l1.1-9.3H.6L1.7 13zm6.6-7.9c0-.2.3-.4.6-.4s.5.2.5.4l-.5 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l.5-7zm-2.7 0c0-.2.2-.4.5-.4s.6.2.6.4v7c0 .3-.3.5-.6.5s-.5-.2-.5-.5v-7zm-2.2-.4c.3 0 .5.2.5.4l.6 7c0 .3-.3.5-.6.5s-.5-.2-.5-.5l-.6-7c0-.2.2-.4.6-.4zm7.9-2.8H8.9v-1c0-.7-.3-.9-1.1-.9H4.5c-.8 0-1.1.3-1.1 1v.9H.9c-.5 0-.9.3-.9.7 0 .3.4.7 1 .7h10.3c.5 0 .9-.4.9-.7 0-.4-.4-.7-1-.7zm-3.5 0H4.5v-1h3.3v1z" fill="#474747" fill-rule="evenodd"></path>
		                                    </svg>
		                                </i>
		                                Xóa dự án
		                            </a>
		                            <a class="dropdown-item" href="#">
		                                <i class="kt-icon black size-9x10">
		                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
		                                        <path d="M11.93 1.76a.433.433 0 0 0-.315-.133c-.06 0-.188.05-.382.148-.194.098-.4.207-.617.33a4.47 4.47 0 0 1-.772.329 2.641 2.641 0 0 1-.824.148 1.36 1.36 0 0 1-.617-.134 12.535 12.535 0 0 0-1.536-.617 4.69 4.69 0 0 0-1.403-.204c-.864 0-1.848.281-2.952.842a7.17 7.17 0 0 0-.497.266l-.104-.769c.236-.205.39-.505.39-.844a1.122 1.122 0 1 0-2.246 0c0 .405.216.756.537.954l1.516 11.118a.66.66 0 0 0 1.309-.178l-.61-4.468c1.106-.549 2.063-.826 2.867-.826.342 0 .675.05 1 .154.325.104.595.215.81.336.214.122.468.235.76.337.293.103.582.155.867.155.72 0 1.582-.272 2.587-.814.127-.066.219-.13.277-.193.06-.063.088-.153.088-.27v-5.35a.433.433 0 0 0-.132-.316z" fill="#474747" fill-rule="evenodd"></path>
		                                    </svg>
		                                </i>
		                                Đề cử lên trang chủ
		                            </a>
		                        </div>
		                    </div>
		                    <div class="btn-group" role="group" aria-label="Basic example" style="float:right;margin-left: 15px">
		                        <button type="button" class="btn btn-light" style="display: inline-flex;height: 35px" onclick="javascript:viewPhoto(1)">
		                            <i class="kt-icon grey size-14x14">
		                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
		                                    <g fill-rule="evenodd">
		                                        <rect width="4" height="4" rx="2"></rect>
		                                        <rect y="5" width="4" height="4" rx="2"></rect>
		                                        <rect y="10" width="4" height="4" rx="2"></rect>
		                                        <rect x="5" y="11" width="9" height="2" rx="1"></rect>
		                                        <rect x="5" y="6" width="9" height="2" rx="1"></rect>
		                                        <rect x="5" y="1" width="9" height="2" rx="1"></rect>
		                                    </g>
		                                </svg>
		                            </i>

		                        </button>
		                        <button type="button" class="btn btn-light" style="display: inline-flex;height: 35px" onclick="javascript:viewPhoto(2)">
		                            <i class="kt-icon grey size-14x14">
		                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
		                                    <g fill-rule="evenodd">
		                                        <rect width="4" height="4" rx="2"></rect>
		                                        <rect x="5" width="4" height="4" rx="2"></rect>
		                                        <rect x="10" width="4" height="4" rx="2"></rect>
		                                        <rect x="10" y="5" width="4" height="4" rx="2"></rect>
		                                        <rect x="10" y="10" width="4" height="4" rx="2"></rect>
		                                        <rect x="5" y="5" width="4" height="4" rx="2"></rect>
		                                        <rect x="5" y="10" width="4" height="4" rx="2"></rect>
		                                        <rect y="5" width="4" height="4" rx="2"></rect>
		                                        <rect y="10" width="4" height="4" rx="2"></rect>
		                                    </g>
		                                </svg>
		                            </i>
		                        </button>
		                    </div>
		                </div>
		            </div>
		            <div class="clearfix"></div>
		            <div style="min-height: 12px"></div>
		            <div class="box-image">
		                <?php
		                    foreach($project['data']['detail']['photos']  as $key =>$value) {
		                ?>
		                <div class="item<?php echo $key+1; ?>" data-fancy-item="<?php echo $key+1; ?>">
		                                    <div class="item-image" style="background-image: url(https://www.kientruc.com/uploads/images/<?php echo $project['data']['customer']['folder_upload']; ?>/images/<?php echo $project['data']['detail']['photos'][$key]['name']; ?>)">
		                                        <div class="kt-flex-container kt-absolute hover kt-transition">
		                                            <a href="https://source.unsplash.com/LuK-MuZ-yf0/1500x1000" data-fancybox="images" data-item-id="1">
		                                                <img src="https://source.unsplash.com/uPc2yuiu8cY/240x160" alt="" class="d-none">
		                                                <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Lưu lại" aria-describedby="tooltip550535">
		                                                    <i class="kt-icon white size-15x12">
		                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 16">
		                                                            <path d="M15.682.005c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-1.013a.38.38 0 0 1-.38-.38v-.96l-2.892 2.892a.379.379 0 0 1-.537 0l-.716-.716a.38.38 0 0 1 0-.537l2.892-2.892h-.96a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606zM3.025 1.778L5.918 4.67a.38.38 0 0 1 0 .537l-.716.716a.379.379 0 0 1-.537 0L1.772 3.031v.96c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38V.385c0-.21.17-.38.38-.38h3.606c.21 0 .38.17.38.38v1.013c0 .21-.17.38-.38.38h-.96zm2.177 8.26l.716.715a.38.38 0 0 1 0 .537l-2.893 2.893h.961c.21 0 .38.17.38.38v1.012c0 .21-.17.38-.38.38H.38a.38.38 0 0 1-.38-.38v-3.606c0-.21.17-.38.38-.38h1.012c.21 0 .38.17.38.38v.96l2.893-2.892a.38.38 0 0 1 .537 0zm10.48 1.551c.21 0 .38.17.38.38v3.606c0 .21-.17.38-.38.38h-3.606a.38.38 0 0 1-.38-.38v-1.013c0-.21.17-.38.38-.38h.96l-2.892-2.892a.38.38 0 0 1 0-.537l.716-.716a.38.38 0 0 1 .537 0l2.892 2.893v-.961c0-.21.17-.38.38-.38h1.013z" fill-rule="nonzero"></path>
		                                                        </svg>
		                                                    </i>
		                                                </button>
		                                            </a>
		                                            <button type="button" class="btn" data-toggle="tooltip" title="" data-original-title="Yêu thích" onclick="javascript:modalAddAlbum()">
		                                                <i class="kt-icon white size-14x12">
		                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
		                                                        <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z" fill-rule="nonzero"></path>
		                                                    </svg>
		                                                </i>
		                                            </button>
		                                        </div>
		                                        <img src="https://www.kientruc.com/uploads/images/<?php echo $project['data']['customer']['folder_upload']; ?>/images/<?php echo $project['data']['detail']['photos'][$key]['name']; ?>" alt="" class="img-fluid">
		                                    </div>
		                                    <div class="text">
		                                        <figcaption>

		                                        </figcaption>
		                                    </div>
		                </div>
		                 <?php } ?>
		            </div>
		            <div class="clearfix"></div>
		            <div class="text-right mobile-d-none">
		                <div class="share">
		                    <a href="" title="">
		                        <button type="button" class="btn">
		                            <i class="kt-icon size-15x14">
		                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15">
		                                    <path d="M0 9.4V2.9A3 3 0 0 1 2.9 0H13A3 3 0 0 1 16 2.9v6.5a3 3 0 0 1-2.9 2.9H7.8l-4 2.2a1 1 0 0 1-1.5-.9v-1.4A3 3 0 0 1 0 9.4zm7 1l.5-.1h5.6c.4 0 .9-.5.9-.9V2.9c0-.4-.5-.9-.9-.9H3c-.4 0-.9.5-.9.9v6.5c0 .4.5.9.9.9h.4c.6 0 1 .4 1 1v.6L7 10.4z" fill="#474747" fill-rule="nonzero"></path>
		                                </svg>
		                            </i>
		                            <span>Bình luận</span>
		                        </button>
		                    </a>
		                    <a href="" title="">
		                        <button type="button" class="btn">
		                            <i class="kt-icon size-17x14">
		                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
		                                    <path d="M12.2 0C14.8 0 17 2 17 4.6c0 .6-.1 1.2-.3 1.7-1 3.1-6 7.5-8.1 7.7h-.2c-2.2-.2-7-4.6-8-7.6C0 5.8 0 5.2 0 4.6 0 2.1 2.2 0 4.8 0c1.4 0 2.8.6 3.7 1.7.9-1 2.3-1.7 3.7-1.7zm2.6 5.6l.2-1C15 3.2 13.8 2 12.2 2c-1 0-1.8.4-2.3 1.1a1.8 1.8 0 0 1-1.4.8c-.4 0-.8-.1-1-.4L7 3.2A2.8 2.8 0 0 0 4.8 2 2.7 2.7 0 0 0 2 4.6c0 .4 0 .7.2 1A14 14 0 0 0 8.5 12a14 14 0 0 0 6.3-6.4z" fill="#474747" fill-rule="nonzero"></path>
		                                </svg>
		                            </i>
		                            <span>Thích</span>
		                        </button>
		                    </a>
		                    <a href="" title="">
		                        <button type="button" class="btn" onclick="javascript:modalAddAlbum()">
		                            <i class="kt-icon size-14x14">
		                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
		                                    <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z" fill="#474747" fill-rule="nonzero"></path>
		                                </svg>
		                            </i>
		                            <span>Lưu vào Album</span>
		                        </button>
		                    </a>
		                </div>
		            </div>
		            <div class="clearfix"></div>
		        </div>
		    </div>
		    <div class="grid-sort-b">
		            <div class="kt-detail-right">
		                <div class="kt-transition">
		                    <div class="kt-user-info">
		                        <div class="avatar">
		                            <a href="" title="">
		                                <img src="<?php echo $project['data']['customer']['avatar_link']; ?>" alt="" class="img-fluid">
		                            </a>
		                        </div>
		                        <div class="fullname">
		                            <span><?php echo $project['data']['customer']['department_name']; ?></span>
		                            <b><?php echo $project['data']['customer']['full_name']; ?></b>
		                            <div class="star">
		                                <?php for($i=1;$i<=5;$i++) { ?>
		                                <i class="fas fa-star" <?php if($i> $project['data']['customer']['star']) echo "style='color:rgba(0,0,0,0.5)'"; ?>   ></i>
		                                <?php } ?>
		                            </div>
		                            <p>
		                                <i class="fas fa-map-marker-alt"></i> Thanh xuân, Hà nội
		                            </p>
		                        </div>
		                        <div class="clearfix"></div>
		                    </div>
		                    <div style="min-height: 20px"></div>
		                    <div class="kt-user-follow">
		                        <div class="row justify-content-between">
		                            <div class="col-4 left">
		                                <a href="" title="">
		                                    <button type="button" class="btn">
		                                        <i class="kt-icon white size-14x14">
		                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
		                                                <path d="M11.3 13.8c-.3 0-.6 0-.8-.2L7 12l-3.5 1.7c-.5.3-1.2.2-1.7 0-.6-.4-.9-1-.9-1.6V1.8C1 .8 1.7 0 2.7 0h8.6c1 0 1.8.8 1.8 1.8V12a1.8 1.8 0 0 1-1.8 1.8zM7 10c.3 0 .5 0 .8.2l3.4 1.7v-10H2.8v10l3.4-1.7.8-.2z" fill-rule="nonzero"></path>
		                                            </svg>
		                                        </i>
		                                        <span>Quan tâm</span>
		                                    </button>
		                                </a>
		                            </div>
		                            <div class="col-6 right">
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
		                                    <b class="fas fa-circle"></b>
		                                </button>
		                            </div>
		                        </div>
		                        <div class="clearfix"></div>
		                    </div>
		                </div>

		                <div style="min-height: 10px;"></div>

		                <h2 class="name-box">
		                    <b>Nhóm thiết kế</b>
		                    <button type="button" class="btn float-right" onclick="javascript:toggleDesign(this)">Mở rộng
		                    </button>
		                </h2>
		                <div class="group-design" style="display: none">
		                    <ul class="list-unstyled">
		                        <li>
		                            <?php foreach ($project['data']['teamwork'] as $key => $value) {
		                                if($key ==0) {
		                            ?>
		                            <div class="box-row-customer first">
		                                <img src="<?php echo $value['customer']['avatar_link']; ?>" alt="" class="img-fluid avatar">
		                                <div class="name">
		                                    <b><?php echo $value['customer']['full_name']; ?></b>
		                                    <span><?php echo $value['category']['name']; ?></span>
		                                </div>
		                            </div>
		                            <?php 
		                                }}
		                            ?>
		                            <div class="clearfix"></div>
		                            <ul class="list-unstyled">
		                                <?php foreach ($project['data']['teamwork'] as $key => $value) {
		                                if($key >0) {
		                            ?>
		                                <li>
		                                    <div class="box-row-customer">
		                                        <img src="/images/avatar.png" alt="" class="img-fluid avatar">
		                                        <div class="name">
		                                            <b>Phạm Ngọc Dũng</b>
		                                            <span>Chủ trì thiết kế</span>
		                                        </div>
		                                    </div>
		                                </li>
		                            <?php } } ?>
		                            </ul>
		                        </li>
		                    </ul>
		                </div>

		                <div class="clearfix"></div>
		                <div class="kt-line kt-grey"></div>
		                <div style="min-height:5px"></div>
		                <h2 class="name-box">
		                    <b>Thông tin dự án</b>
		                </h2>

		                <div class="detail">
		                   <?php echo $project['data']['detail']['info']; ?>
		                </div>

		                <div class="extend">
		                    <ul class="list-unstyled">
		                        <li class="row no-gutters">
		                            <div class="col-6"><i class="kt-icon black size-15x14">
		                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
		                                        <g fill-rule="evenodd">
		                                            <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"></path>
		                                        </g>
		                                    </svg>
		                                </i> <span>Thể loại</span></div>
		                            <div class="col-6"><b>Nhà chung cư</b></div>
		                        </li>
		                        <li class="row no-gutters">
		                            <div class="col-6"><i class="kt-icon black size-14x14">
		                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
		                                        <path d="M11.2 5.5l-1-1 1.1-1H3.5v7.8l1-1 1 .9L2.8 14 0 11.2l1-1L2 11.3V2.1h9.2l-1-1.1.9-1L14 2.8l-2.8 2.7zm1.4 7.1v-1.4H14V14h-2.8v-1.4h1.4zm-4.2 0h1.4V14H8.4v-1.4zm-2.8 0H7V14H5.6v-1.4zm7-7H14V7h-1.4V5.6zm0 2.8H14v1.4h-1.4V8.4z" fill-rule="nonzero"></path>
		                                    </svg>
		                                </i> <span>Diện tích</span></div>
		                            <div class="col-6"><b>120m2</b></div>
		                        </li>
		                        <li class="row no-gutters">
		                            <div class="col-6"><i class="kt-icon black size-11x14">
		                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
		                                        <path d="M5.5 0C2.5 0 0 2.4 0 5.5c0 3.7 4.9 8.1 5.1 8.3.2.3.5.3.7 0 .3-.2 5.1-4.6 5.1-8.3C11 2.5 8.5 0 5.5 0zm0 8.2a2.8 2.8 0 1 1 0-5.5 2.8 2.8 0 0 1 0 5.5z" fill-rule="nonzero"></path>
		                                    </svg>
		                                </i> <span>Khu vực</span></div>
		                            <div class="col-6"><b>Tp.Hồ Chí Minh</b></div>
		                        </li>
		                        <li class="row no-gutters">
		                            <div class="col-6"><i class="kt-icon black size-8x14">
		                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
		                                        <path d="M5.6 6.3l-1.7-.7c-.4-.2-.7-.3-1-.6-.5-.4-.4-1.1.2-1.4l.6-.1c.8 0 1.5 0 2.2.4.3.2.4.1.5-.2l.4-1.2c0-.2 0-.4-.3-.5l-1.3-.4c-.7-.1-.7-.1-.7-.7 0-.9 0-.9-.8-.9h-.4c-.4 0-.5 0-.5.5v.6c0 .5 0 .5-.6.7C1 2.2.2 3 .2 4.5c-.2 1.2.5 2 1.5 2.7l2 .8.7.5c.6.5.5 1.4-.3 1.7-.4.2-.8.2-1.2.1-.7 0-1.3-.2-2-.5-.3-.2-.4-.2-.5.2L0 11c-.1.5-.1.6.3.8.6.3 1.2.4 1.8.5.4 0 .4 0 .5.6v.6c0 .3 0 .5.4.5h1c.2 0 .4-.2.4-.4v-1c0-.3 0-.4.4-.5.6-.2 1.2-.5 1.7-1a3 3 0 0 0-1-4.8z" fill-rule="evenodd"></path>
		                                    </svg>
		                                </i> <span>Chi phí</span></div>
		                            <div class="col-6"><b>650.000.000 vnd</b></div>
		                        </li>
		                        <li class="row no-gutters">
		                            <div class="col-6"><i class="kt-icon black size-17x14">
		                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 16">
		                                        <g fill-rule="evenodd">
		                                            <path d="M17.7 3.2c-.5-.5-1-.7-1.7-.7h-2.2l-.5-1.3c0-.3-.3-.6-.6-.8-.4-.3-.7-.4-1-.4h-5c-.3 0-.6.1-1 .4-.3.2-.5.5-.6.8l-.5 1.3H2.5c-.7 0-1.3.2-1.8.7-.5.5-.7 1-.7 1.7v8.6c0 .7.2 1.3.7 1.8.5.4 1 .7 1.8.7H16c.6 0 1.2-.3 1.7-.7.5-.5.7-1 .7-1.8V5c0-.6-.2-1.2-.7-1.7zm-5.4 9c-.9 1-1.9 1.3-3 1.3-1.3 0-2.3-.4-3.1-1.2a4.1 4.1 0 0 1-1.3-3C5 8 5.3 7 6.2 6.1c.8-.8 1.8-1.3 3-1.3s2.2.5 3 1.3c.9.8 1.3 1.8 1.3 3s-.4 2.2-1.2 3z" fill-rule="nonzero"></path>
		                                            <path d="M9.2 6.5c-.7 0-1.4.2-2 .8-.5.5-.8 1.2-.8 2 0 .7.3 1.3.9 1.9.5.5 1.2.8 2 .8.7 0 1.3-.3 1.9-.8.5-.6.8-1.2.8-2 0-.7-.3-1.4-.8-2-.6-.5-1.2-.7-2-.7z"></path>
		                                        </g>
		                                    </svg>
		                                </i> <span>Trạng thái</span></div>
		                            <div class="col-6"><b>Ảnh chụp thực tế</b></div>
		                        </li>
		                    </ul>
		                </div>

		                <div class="clearfix"></div>
		                <div class="kt-line kt-grey"></div>
		                <div style="min-height: 5px"></div>
		                <h2 class="name-box">
		                    <b>Đánh giá</b>
		                </h2>

		                <div class="review">
		                    <ul class="list-unstyled">
		                        <li>
		                            <div class="percent">
		                                <div class="progress-pie-chart size-42 " data-percent="<?php echo $project['data']['review']['star_review_kh']; ?>">
		                                    <div class="ppc-progress">
		                                        <div class="ppc-progress-fill" style=""></div>
		                                    </div>
		                                    <div class="ppc-percents">
		                                        <div class="pcc-percents-wrapper">
		                                            <span><?php echo $project['data']['review']['star_review_kh']; ?></span>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="info">
		                                <b class="star">
		                                    <?php
		                                		for($i=1;$i<=5;$i++)
		                                		{
		                                	?>
		                                    	<i class="fas fa-star" style="color:<?php if($i>$project['data']['review']['star_review_kh']){ echo 'rgba(0,0,0,0.5)'; } ?>"></i>
		                                	<?php } ?>
		                                </b>
		                                <span><?php echo $project['data']['review']['total_review_kh']; ?> đánh giá từ chủ nhà</span>
		                            </div>
		                        </li>
		                        <li>
		                            <div class="percent">
		                                <div class="progress-pie-chart size-42" data-percent="<?php echo $project['data']['review']['star_review_kts']; ?>">
		                                    <div class="ppc-progress">
		                                        <div class="ppc-progress-fill" style=""></div>
		                                    </div>
		                                    <div class="ppc-percents">
		                                        <div class="pcc-percents-wrapper">
		                                            <span><?php echo $project['data']['review']['star_review_kts']; ?></span>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="info">
		                                <b class="star">
		                                	<?php
		                                		for($i=1;$i<=5;$i++)
		                                		{
		                                	?>
		                                    	<i class="fas fa-star" style="color:<?php if($i>$project['data']['review']['star_review_kts']){ echo 'rgba(0,0,0,0.5)'; } ?>"></i>
		                                	<?php } ?>
		                                </b>
		                                <span><?php echo $project['data']['review']['total_review_kts']; ?> đánh giá từ chuyên gia</span>
		                            </div>
		                        </li>
		                    </ul>
		                </div>

		                <div class="clearfix"></div>
		                <div class="kt-line kt-grey"></div>
		                <div style="min-height: 5px"></div>
		                <h2 class="name-box">
		                    <b>Từ khóa</b>
		                </h2>

		                <div class="keywords">
		                	<?php
		                		foreach ($project['data']['tagkey'] as $key => $value) {
		                	 ?>
		                    <a href="" title="">
		                        <button type="button" class="btn">
		                            <i class="kt-icon black size-10x10">
		                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
		                                    <path d="M13.6 7.4L7 .8 6.1.2l-1-.2H1C1 0 .7.1.5.4c-.3.2-.4.5-.4.8V5c0 .3 0 .7.2 1.1l.6 1 6.6 6.5c.3.3.5.4.9.4.3 0 .6-.1.8-.4l4.5-4.5c.3-.2.4-.5.4-.8 0-.3-.1-.6-.4-.9zM3.8 3.8c-.2.2-.5.3-.8.3-.4 0-.7 0-.9-.3-.2-.2-.3-.5-.3-.8 0-.4 0-.7.3-.9.2-.2.5-.3.9-.3.3 0 .6 0 .8.3.2.2.3.5.3.9 0 .3 0 .6-.3.8z" fill-rule="nonzero"></path>
		                                </svg>
		                            </i>
		                            <span><?php echo $value['name']; ?></span>
		                        </button>
		                    </a>
		                    <?php
		                    }
		                    ?>
		                </div>

		                <div class="clearfix"></div>
		                <div class="kt-line kt-grey"></div>
		                <div style="min-height: 5px"></div>
		                <h2 class="name-box">
		                    <b>Chia sẻ</b>
		                </h2>

		                <div class="social">
		                    <a href="" title="">
		                        <button type="button" class="btn sface">
		                            <i class="fab fa-facebook-f"></i>
		                        </button>
		                    </a>
		                    <a href="" title="">
		                        <button type="button" class="btn sgoogle">
		                            <i class="fab fa-google"></i>
		                        </button>
		                    </a>
		                    <a href="" title="">
		                        <button type="button" class="btn stwitter">
		                            <i class="fab fa-twitter"></i>
		                        </button>
		                    </a>
		                    <a href="" title="">
		                        <button type="button" class="btn srss">
		                            <i class="fas fa-rss"></i>
		                        </button>
		                    </a>
		                </div>

		                <div class="clearfix"></div>
		                <div style="min-height: 30px"></div>

		                <button type="button" class="btn btn-link px-0 py-0 but-report">
		                    <i class="kt-icon black size-10x10">
		                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 14">
		                            <path d="M11.93 1.76a.433.433 0 0 0-.315-.133c-.06 0-.188.05-.382.148-.194.098-.4.207-.617.33a4.47 4.47 0 0 1-.772.329 2.641 2.641 0 0 1-.824.148 1.36 1.36 0 0 1-.617-.134 12.535 12.535 0 0 0-1.536-.617 4.69 4.69 0 0 0-1.403-.204c-.864 0-1.848.281-2.952.842a7.17 7.17 0 0 0-.497.266l-.104-.769c.236-.205.39-.505.39-.844a1.122 1.122 0 1 0-2.246 0c0 .405.216.756.537.954l1.516 11.118a.66.66 0 0 0 1.309-.178l-.61-4.468c1.106-.549 2.063-.826 2.867-.826.342 0 .675.05 1 .154.325.104.595.215.81.336.214.122.468.235.76.337.293.103.582.155.867.155.72 0 1.582-.272 2.587-.814.127-.066.219-.13.277-.193.06-.063.088-.153.088-.27v-5.35a.433.433 0 0 0-.132-.316z" fill-rule="evenodd"></path>
		                        </svg>
		                    </i>
		                    <span>Báo cáo vi phạm bản quyền</span>
		                </button>


		            </div>
		    </div>
		</div>
	</div>
</div>
<style type="text/css">
        .fancybox-thumbs-x .fancybox-thumbs__list {
            margin: 0 auto;
        }

        .fancybox-is-open .fancybox-stage {
            top: 70px;
            bottom: 20px;
        }

        .fancybox-is-open .fancybox-head {
            color: white;
            left: 40px;
            top: 25px;
            position: absolute;
        }

        .fancybox-is-open .fancybox-head h2 {
            font-size: 24px;
            font-weight: 600;
            line-height: 32px;
        }

        .fancybox-is-open .fancybox-head p {
            font-size: 12px;
            line-height: 14px;
            margin-bottom: 0;
        }

        .fancybox-show-toolbar .fancybox-toolbar {
            right: 40px;
            top: 25px;
        }

        button[data-fancybox-zoom],
        button[data-fancybox-bookmark],
        button[data-fancybox-close] {
            height: 42px;
            width: 42px;
            border-radius: 30px;
            background-color: #FFFFFF;
            display: inline-flex;
            margin-left: 10px;
        }

        .fancybox-button,
        .fancybox-button:link,
        .fancybox-button:visited {
            color: #505050;
        }

        .fancybox-button svg path {
            fill: initial;
        }

        div.iframe-album {
            width: 620px;
        }

        @media all and (min-width: 768px) {
            .fancybox-thumbs {
                top: auto;
                width: auto;
                bottom: 0;
                left: 0;
                right: 0;
                height: 95px;
                padding: 10px 10px 5px 10px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, 0.3);
            }

            .fancybox-show-thumbs .fancybox-inner {
                right: 0;
                bottom: 95px;
            }
        }
    
</style>
<?php echo \frontend\widgets\footerWidget::widget() ?>