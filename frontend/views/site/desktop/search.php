<?php

/* @var $this yii\web\View */

$this->title = 'Search';
?>
<?php echo \frontend\widgets\headerWidget::widget() ?>
<div class="search">
	<div class="search-top">
		<div class="search-top-info">
			<div class="search-top-title">
				Tìm kiến trúc sư
			</div>
			<div class="search-top-form">
				<form method="get">
					<div class="search-top-form-input">
						<select id="w1" name="dd">
							<option value="0">Địa điểm</option>
							<option value="1">Mới nhất</option>
							<option value="2">Lượt xem</option>
							<option value="3">Yêu thích</option>
							<option value="4">Đánh giá</option>
						</select>
						<i class="fa fa-angle-down"></i>
					</div>
					<div class="search-top-form-input">
						<select id="w2" name="lct" >
							<option value="0" >Loại Công Trình</option>
							<option value="1">Mới nhất</option>
							<option value="2">Lượt xem</option>
							<option value="3">Yêu thích</option>
							<option value="4">Đánh giá</option>
						</select>
						<i class="fa fa-angle-down"></i>
					</div>
					<div class="search-top-form-input">
						<select id="w3" name="hmtk" >
							<option value="0">Hạng Mục thiết kế</option>
							<option value="1">Mới nhất</option>
							<option value="2">Lượt xem</option>
							<option value="3">Yêu thích</option>
							<option value="4">Đánh giá</option>
						</select>
						<i class="fa fa-angle-down"></i>
					</div>
					<div class="search-top-form-input">
						<select id="w4" name="pctk">
							<option value="0">Phong cách thiết kế</option>
							<option value="1">Mới nhất</option>
							<option value="2">Lượt xem</option>
							<option value="3">Yêu thích</option>
							<option value="4">Đánh giá</option>
						</select>
						<i class="fa fa-angle-down"></i>
					</div>
					<div class="submit-top-form-input">
						<button type="submit"><i class="glyphicon glyphicon-search"></i>Tìm kiếm trúc sư</button>
					</div>
				</form>
				<div class="clear"></div>
				<div class="search-nc">Tìm kiếm nâng cao</div>
				<div class="form-search-nc">
					<form>
						<div class="form-search-nc-input">
						 		<div class="form-search-nc-title">Theo báo giá ( ngàn đồng /m2)</div>
								<div id="slider-range" class="price-filter-range slider-range" name="rangeInput"></div>
								<div style="position: relative; width: 100%;">
								  <input type="text" min="100" max="10000" oninput="validity.valid||(value='100');" id="min_price" class="price-range-field"  disabled />
								  <input type="text" min="100" max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" disabled />
								</div>
						</div>
						<div class="form-search-nc-input">
						 		<div class="form-search-nc-title">Theo giá trị công trình ( triệu đồng /m2)</div>
								<div id="slider-range2" class="price-filter-range" name="rangeInput"></div>
								<div style="position: relative; width: 100%;">
								  <input type="text" min="100" max="10000" oninput="validity.valid||(value='100');" id="min_price2" class="price-range-field" disabled />
								  <input type="text" min="100" max="10000" oninput="validity.valid||(value='10000');" id="max_price2" class="price-range-field" disabled />
								</div>
						</div>
						<div class="form-search-nc-input">
						 		<div class="form-search-nc-title">Theo xếp hạng</div>
								<div id="slider-range3" class="price-filter-range" name="rangeInput"></div>
								<div style="position: relative; width: 100%;" class="form-search-nc-start">
								  <input type="text" min="100" max="10000" oninput="validity.valid||(value='100');" id="min_price3" class="price-range-field" disabled />
								   <input type="text" value=" / 5sao" id="max_price3" disabled />
								</div>
						</div>
						<div class="form-search-nc-input">
						 		<div class="form-search-nc-title">Theo kinh nghiệm</div>
								<div id="slider-range4" class="price-filter-range" name="rangeInput"></div>
								<div style="position: relative; width: 100%;" >
								  <input type="text" min="100" max="10000" oninput="validity.valid||(value='100');" id="min_price4" class="price-range-field" disabled />
								  <input type="text" min="100" max="10000" oninput="validity.valid||(value='10000');" id="max_price4" class="price-range-field"  disabled />
								</div>
						</div>
					</form>			
				</div>
			</div>
		</div>
	</div>
	<div class="search-bot">
		<div class="search-bot-top">
			<div class="search-number">
				78 Kiến trúc sư
			</div>
			<div class="search-choise">
				<div class="search-choise-form">
					<div class="search-choise-form-title">Sắp xếp theo</div>
					<div class="search-choise-form-quality">
						Số lượng dự an : 
						<select class="select-project">
							<option value="1">Cao - Thấp</option>
							<option value="2">Thấp -  Cao</option>
						</select>
					</div>
					<div class="search-choise-form-quality">
						Kinh nghiệm:
						<select class="select-exp">
							<option value="0">Tất cả</option>
							<option value="1"> 1 - 2 năm</option>
							<option value="2"> 3 - 5 năm</option>
							<option value="3"> 5 - 7 năm</option>
							<option value="4"> hơn 10 năm</option>
						</select>
					</div>
					<div class="search-choise-form-quality address">
						
						<select class="select-address">
							<option value="0">Lọc theo địa điểm</option>
							<option value="Hồ Chí Minh">Hồ Chí Minh</option>
							<option value="Đà Nẵng">Đà Nẵng</option>
							<option value="Hà Nội">Hà Nội</option>
						</select>
					</div>
				</div>
				<div class="search-choise-tab">
					<div class="search-choise-tab-li " tab="1">
						<i class="fa fa-th-list"></i>
					</div>
					<div class="search-choise-tab-li" tab="2">
						<i class="fa fa-th" ></i>
					</div>
					<div class="search-choise-tab-li" tab="3">
						<i class="fa fa-map-marker-alt"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="search-bot-bot">
			<div class="search-bot-tab-1 search-bot-tab" tab="1">
				<div class="more">
					<div class="search-bot-tab-1-li">
						<div class="search-tab-1-li-left">
							<div class="search-tab-1-li-pro">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
										<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
									</svg>
							</div>
							<div class="search-tab-1-li-exp" style="display: none" val-exp ='1'>
								
							</div>
							<div class="search-tab-1-li-img">
								<img src="images/avatar.png">
							</div>
							<div class="search-tab-1-li-name">
								Nguyễn Huy Hoàng
							</div>
							<div class="search-tab-1-li-address" val-address='3'>
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-tab-1-li-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="search-tab-1-li-contact">
								<div class="search-tab-1-li-contact-li">
									<i class="material-icons">local_phone</i>
								</div>
								<div class="search-tab-1-li-contact-li">
										<i class="material-icons">mail</i>
								</div>
								<div class="search-tab-1-li-contact-li">
									<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment-alt-dots" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-comment-alt-dots fa-w-16"><path fill="currentColor" d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 9.8 11.2 15.5 19.1 9.7L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zM128 240c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z" class=""></path></svg>
								</div>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
						</div>
						<div class="search-tab-1-li-right">
							<div class="search-tab-1-right-top">
								<div class="search-tab-1-right-number">
									<div class="search-tab-1-right-number-li"><i class="fa fa-university"></i><span class="number-project">87</span> dự án</div>
									<div class="search-tab-1-right-number-li"><i class="fa fa-male"></i>213 người theo dõi</div>
									<div class="search-tab-1-right-number-li"><i class="fa fa-thumbs-up"></i>82 lời cảm ơn</div>
								</div>
								<div class="search-tab-1-right-personal">
									<a href="/site/category" title="" class="clr">
		                                <button type="button" class="btn xem-them-more">
		                                    <span>Vào trang cá nhân</span>
		                                    <i class="kt-icon bo-tron green size-6x10">
		                                        <svg xmlns="http://www.w3.org/2000/svg">
		                                             <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
		                                                          fill-rule="evenodd"/>
		                                        </svg>
		                                    </i>
		                                </button>
		                            </a>
								</div>
								<div class="clear"></div>
							</div>
							<div class="search-tab-1-right-bot">
								<div class="serch-tab-1-right-bot-c owl-carousel owl-theme" id="owl-demo">
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="search-bot-tab-1-li">
						<div class="search-tab-1-li-left">
							<div class="search-tab-1-li-pro">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
										<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
									</svg>
							</div>
							<div class="search-tab-1-li-exp" style="display: none" val-exp ='1'>
								
							</div>
							<div class="search-tab-1-li-img">
								<img src="images/avatar.png">
							</div>
							<div class="search-tab-1-li-name">
								Nguyễn Huy Hoàng
							</div>
							<div class="search-tab-1-li-address" val-address='3'>
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-tab-1-li-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-contact">
								<div class="search-tab-1-li-contact-li">
									<i class="material-icons">local_phone</i>
								</div>
								<div class="search-tab-1-li-contact-li">
										<i class="material-icons">mail</i>
								</div>
								<div class="search-tab-1-li-contact-li">
									<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment-alt-dots" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-comment-alt-dots fa-w-16"><path fill="currentColor" d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 9.8 11.2 15.5 19.1 9.7L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zM128 240c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z" class=""></path></svg>
								</div>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
						</div>
						<div class="search-tab-1-li-right">
							<div class="search-tab-1-right-top">
								<div class="search-tab-1-right-number">
									<div class="search-tab-1-right-number-li"><i class="fa fa-university"></i><span class="number-project">86</span> dự án</div>
									<div class="search-tab-1-right-number-li"><i class="fa fa-male"></i>213 người theo dõi</div>
									<div class="search-tab-1-right-number-li"><i class="fa fa-thumbs-up"></i>82 lời cảm ơn</div>
								</div>
								<div class="search-tab-1-right-personal">
									<a href="/site/category" title="" class="clr">
		                                <button type="button" class="btn xem-them-more">
		                                    <span>Vào trang cá nhân</span>
		                                    <i class="kt-icon bo-tron green size-6x10">
		                                        <svg xmlns="http://www.w3.org/2000/svg">
		                                             <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
		                                                          fill-rule="evenodd"/>
		                                        </svg>
		                                    </i>
		                                </button>
		                            </a>
								</div>
								<div class="clear"></div>
							</div>
							<div class="search-tab-1-right-bot">
								<div class="serch-tab-1-right-bot-c owl-carousel owl-theme" id="owl-demo">
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="search-bot-tab-1-li">
						<div class="search-tab-1-li-left">
							<div class="search-tab-1-li-pro">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
										<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
									</svg>
							</div>
							<div class="search-tab-1-li-exp" style="display: none" val-exp ='3'>
								
							</div>
							<div class="search-tab-1-li-img">
								<img src="images/avatar.png">
							</div>
							<div class="search-tab-1-li-name">
								Nguyễn Huy Hoàng
							</div>
							<div class="search-tab-1-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hồ Chí Minh</span>
							</div>
							<div class="search-tab-1-li-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-contact">
								<div class="search-tab-1-li-contact-li">
									<i class="material-icons">local_phone</i>
								</div>
								<div class="search-tab-1-li-contact-li">
										<i class="material-icons">mail</i>
								</div>
								<div class="search-tab-1-li-contact-li">
									<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment-alt-dots" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-comment-alt-dots fa-w-16"><path fill="currentColor" d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 9.8 11.2 15.5 19.1 9.7L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zM128 240c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z" class=""></path></svg>
								</div>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
						</div>
						<div class="search-tab-1-li-right">
							<div class="search-tab-1-right-top">
								<div class="search-tab-1-right-number">
									<div class="search-tab-1-right-number-li"><i class="fa fa-university"></i><span class="number-project">87</span> dự án</div>
									<div class="search-tab-1-right-number-li"><i class="fa fa-male"></i>213 người theo dõi</div>
									<div class="search-tab-1-right-number-li"><i class="fa fa-thumbs-up"></i>82 lời cảm ơn</div>
								</div>
								<div class="search-tab-1-right-personal">
									<a href="/site/category" title="" class="clr">
		                                <button type="button" class="btn xem-them-more">
		                                    <span>Vào trang cá nhân</span>
		                                    <i class="kt-icon bo-tron green size-6x10">
		                                        <svg xmlns="http://www.w3.org/2000/svg">
		                                             <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
		                                                          fill-rule="evenodd"/>
		                                        </svg>
		                                    </i>
		                                </button>
		                            </a>
								</div>
								<div class="clear"></div>
							</div>
							<div class="search-tab-1-right-bot">
								<div class="serch-tab-1-right-bot-c owl-carousel owl-theme" id="owl-demo">
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chsasa Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chungasas Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">ChsasasThạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chasasasung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Csasas Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">sasas</div>
										</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="search-bot-tab-1-li">
						<div class="search-tab-1-li-left">
							<div class="search-tab-1-li-pro">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
										<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
									</svg>
							</div>
							<div class="search-tab-1-li-exp" style="display: none" val-exp ='2'>
								
							</div>
							<div class="search-tab-1-li-img">
								<img src="images/avatar.png">
							</div>
							<div class="search-tab-1-li-name">
								Nguyễn Huy Hoàng
							</div>
							<div class="search-tab-1-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Đà Nẵng</span>
							</div>
							<div class="search-tab-1-li-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-contact">
								<div class="search-tab-1-li-contact-li">
									<i class="material-icons">local_phone</i>
								</div>
								<div class="search-tab-1-li-contact-li">
										<i class="material-icons">mail</i>
								</div>
								<div class="search-tab-1-li-contact-li">
									<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment-alt-dots" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-comment-alt-dots fa-w-16"><path fill="currentColor" d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 9.8 11.2 15.5 19.1 9.7L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zM128 240c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z" class=""></path></svg>
								</div>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
						</div>
						<div class="search-tab-1-li-right">
							<div class="search-tab-1-right-top">
								<div class="search-tab-1-right-number">
									<div class="search-tab-1-right-number-li"><i class="fa fa-university"></i><span class="number-project">90</span> dự án</div>
									<div class="search-tab-1-right-number-li"><i class="fa fa-male"></i>213 người theo dõi</div>
									<div class="search-tab-1-right-number-li"><i class="fa fa-thumbs-up"></i>82 lời cảm ơn</div>
								</div>
								<div class="search-tab-1-right-personal">
									<a href="/site/category" title="" class="clr">
		                                <button type="button" class="btn xem-them-more">
		                                    <span>Vào trang cá nhân</span>
		                                    <i class="kt-icon bo-tron green size-6x10">
		                                        <svg xmlns="http://www.w3.org/2000/svg">
		                                             <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
		                                                          fill-rule="evenodd"/>
		                                        </svg>
		                                    </i>
		                                </button>
		                            </a>
								</div>
								<div class="clear"></div>
							</div>
							<div class="search-tab-1-right-bot">
								<div class="serch-tab-1-right-bot-c owl-carousel owl-theme" id="owl-demo">
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
									<div class="search-tab-1-right-bot-li item">
										<a href="">
											<img src="images/search-tab1.png">
											<div class="search-tab-1-right-bot-li-title">Chung cư Thạch Phạm</div>
										</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="">
					<div class="text-center">
						<button type="button" class="btn btn-default kt-btn-more js-more-project-button">
							<i class="kt-icon bo-tron green size-16x14">
								<svg xmlns="http://www.w3.org/2000/svg">
	                                <path d="M12.662 9.993l3.248-3.48H13.9A6.96 6.96 0 0 0 0 7.01a6.96 6.96 0 0 0 11.359 5.393L9.585 10.63a4.45 4.45 0 0 1-2.625.856 4.475 4.475 0 1 1 4.446-4.972h-1.96l3.216 3.48z"
	                                      fill-rule="evenodd"/>
	                            </svg>
							</i><span>Xem thêm</span>
						</button>
					</div>
				</div>
			</div>
			<div class="search-bot-tab-2 search-bot-tab " tab='2'>
				<div class="search-bot-tab-2-gird more">
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>

						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-exp" val-exp="1"></div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="search-bot-tab-2-li">
						<div class="search-bot-tab-2-li-pro">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30" width="22">
											<image xlink:href="images/kts-badge.svg" width="22" height="30"/>  
										</svg>
						</div>
						<div class="search-bot-tab-2-li-img">
							<img src="images/avatar.png">
						</div>
						<div class="search-bot-tab-2-li-name">
							Nguyễn Huy Hoàng
						</div>
						<div class="search-bot-tab-2-li-info">
							<div class="search-bot-tab-2-li-address">
								<i class="glyphicon glyphicon-map-marker"></i><span>Hà Nội</span>
							</div>
							<div class="search-bot-tab-2-li-rating">
								<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="	fa fa-star"></i>
									<i class="fa fa-star a"></i>
									<i class="fa fa-star a"></i>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Tổng dự án</div>
							<div class=" search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Người theo dõi</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-2-li-totalproject">
							<div class="search-bot-tab-2-li-totalproject-left">Lượt cảm ơn</div>
							<div class="search-bot-tab-2-li-totalproject-right">87</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="">
					<div class="text-center">
						<button type="button" class="btn btn-default kt-btn-more js-more-project-button">
							<i class="kt-icon bo-tron green size-16x14">
								<svg xmlns="http://www.w3.org/2000/svg">
	                                <path d="M12.662 9.993l3.248-3.48H13.9A6.96 6.96 0 0 0 0 7.01a6.96 6.96 0 0 0 11.359 5.393L9.585 10.63a4.45 4.45 0 0 1-2.625.856 4.475 4.475 0 1 1 4.446-4.972h-1.96l3.216 3.48z"
	                                      fill-rule="evenodd"/>
	                            </svg>
							</i><span>Xem thêm</span>
						</button>
					</div>
				</div>
			</div>
			<div class="search-bot-tab-3 search-bot-tab  " tabindex="3"> 
				<div class="search-bot-tab-3-left">
					<img src="images/bando.png">
				</div>
				<div class="search-bot-tab-3-right">
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="search-bot-tab-3-right-li ">
						<div class="search-bot-tab-3-right-li-left search-bot-tab-3-right-li-li">
							<div class="search-bot-tab-3-right-li-img">
								<img src="images/avatar.png">
								<div class="online"></div>
							</div>
							<div class="search-bot-tab-3-right-li-text">
								<div class="search-bot-tab-3-right-li-name ">Nguyễn Huy Hoàng</div>
								<div class="search-bot-tab-3-right-li-address s"><i class="glyphicon glyphicon-map-marker"></i>Hà Nội</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="search-bot-tab-3-right-li-right">
							<div class="search-bot-tab-3-right-li-right-rating">
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="	fa fa-star"></i>
								<i class="fa fa-star a"></i>
								<i class="fa fa-star a"></i>
							</div>
							<div class="search-tab-1-li-care">
								<button><i class="fa fa-bookmark-o"></i>Quan tâm</button>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<?php echo \frontend\widgets\footerWidget::widget() ?>
