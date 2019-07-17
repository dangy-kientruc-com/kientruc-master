
<div class="main">
	<div class="main-left-comeback">
		<div class="main-left-info-comeback">
			<a href="#">
				<div class="main-left-info-logo">
					<span class="kt-logo-bg">
						<img src="images/logo icon.jpg">
					</span>
					<span class="logo-kt">KIENTRUC</span>
					<span class="logo-kt_dot-com">.com</span>
					<div class="logo-kt_slogan">Cùng bạn xây dựng ước mơ</div>
				</div>
			</a>
		</div>
	</div>
	<div class="main-right-comeback">
		<div class="main-right-comeback-info">
			<h1>
				Chào mừng bạn trở lại với 
				Kientruc.com
			</h1>
			<div class="head-step">
				<div class="head-step-li head-step-li-1 active"> 
					<div class="head-step-number">1</div> 
				 	Bạn là ai
				 	<div class="step-dots">..........</div>
				</div>
				<div class="head-step-li head-step-li-2">
					<div class="head-step-number">2</div> 
				 	Thông tin thêm
				 	<div class="step-dots">.........</div>
				 </div>
				<div class="head-step-li head-step-li-3">
					<div class="head-step-number">3</div> 
					Chọn chuyên gia
				</div>
			</div>
			<div class="comeback-list-step">
				<form method="post" action="index/comebackmam">
					 <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
				<div class="comeback-step-li comeback-step1 active">
					<div class="comeback-step-1-slogan">
						Nhằm giúp trải nghiệm website được tốt hơn, bạn vui lòng cung cấp thêm thông tin cá nhân. 
					</div>
					<div class="comeback-step-1-title">
						Bạn tham gia Kientruc.com với vai trò là ? *
					</div>
					<div class="comeback-step-1-title2">
						Dựa vào đó, chúng tôi sẽ hiển thị những thông tin và thông báo phù hợp cho bạn
					</div>
					<div class="comeback-step1-choise-list">
						<div class="comeback-step1-choise-li">
							<div class="comeback-step1-choise-left">
								<div class="comeback-step1-choise-input active ">
									Chủ nhà
									<input type="radio" name="choise" value="1" checked="checked">
								</div>
							</div>
							<div class="comeback-step1-choise-right">
								Đang có nhu cầu tìm kiếm thông tin nhà cửa để thiết kế xây dựng ngôi nhà của mình
							</div>
						</div>
						<div class="comeback-step1-choise-li">
							<div class="comeback-step1-choise-left">
								<div class="comeback-step1-choise-input ">
									Chuyên gia
									<input type="radio" name="choise" value="2" >
								</div>
							</div>
							<div class="comeback-step1-choise-right">
								Bao gồm: Kiến Trúc sư, Nhà Thiết Kế Nội Thất, Kỹ Sư Xây Dựng, Kết Cấu, Điện Nước
							</div>
						</div>
						
						<div class="comeback-step1-choise-li">
							<div class="comeback-step1-choise-left">
								<div class="comeback-step1-choise-input ">
									Nhân viên kinh doanh
									<input type="radio" name="choise" value="3">
								</div>
							</div>
							<div class="comeback-step1-choise-right">
								Tìm kiếm, kết nối với các chuyên gia trong lĩnh vực thiết kế và thi công công trình dân dụng
							</div>
						</div>
					</div>
					<div class="comeback-step1-button">
						<div></div>
						<div class="comeback-step-next comeback-step-li-button" step='2'>
							<div class="comeback-step-next-text">Tiếp tục</div>
							<div class="comeback-step-button-next">
								<i class="fa fa-chevron-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class=" comeback-step-li comeback-step2">
					<?php 

						$step2 = file_get_contents('http://ktdemov1.kientruc.com/api/v1/pages/step-two');
						$step2=json_decode($step2,JSON_UNESCAPED_UNICODE);
					?>
					<div class="main-right-comeback-info_slogan">
						Nhằm giúp trải nghiệm website được tốt hơn, bạn vui lòng cung cấp thêm thông tin cá nhân. 
					</div>
					<div><label>Tên của bạn ? *</label></div>
					<div class="name_system">
						Tên được sử dụng để hiển thị trên hệ thống
					</div>
					<div class="comeback-step2-input-name">
						<input type="text" name="fullname" class="inputfullname" placeholder="Nhập tên của bạn" >
					</div>
					<div>
						<label>Lĩnh vực kiến trúc bạn yêu thích ? *</label>
					</div>
					<div class="you_like">
						Dựa trên lĩnh vực bạn quan tâm, chúng tôi sẽ hiển thị các dự án phù hợp và dành riêng cho bạn
					</div>
					<div class="list-choise">
						<?php foreach ($step2['data']['typeCT'] as $key => $value) {
							# code...
						 ?>
						<div class="list-choise-li">
							<input type="checkbox"   name="list-choise[]" value="<?php echo $value['id_tag'] ?>" ><?php  echo $value['name'] ;?>
						</div>
						<?php }?>
					</div>
					<div class="clear"></div>
					<div><label>Địa chỉ của bạn ?</label></div>
					<div class="you_address">
						Dựa trên địa chỉ bạn cung cấp, chúng tôi sẽ tìm cho bạn những kiến trúc sư gần bạn nhất để dễ dàng tham khảo
					</div>
					<div class="comeback-step2-input-address">
						<select name="step2-select" class="step2-select">
							<option value="0"> Chọn Địa Điểm</option>
							<?php foreach ($step2['data']['province'] as $key => $value) {
								# code...
							 ?>
							<option value="<?php echo $value['provinceid']; ?>"> <?php echo $value['name']; ?></option>
						<?php  }?>
						</select>
					</div>
					<div class="comeback-step1-button">
						<div class="comeback-step-next comeback-step-li-button" step='1'>
							<div class="comeback-step-button-back">
								<i class="fa fa-chevron-left"></i>
							</div>
							<div class="comeback-step-back-text">Quay lại</div>
						</div>
						<div class="comeback-step-next comeback-step-li-button" step='3'>
							<div class="comeback-step-next-text">Tiếp tục</div>
							<div class="comeback-step-button-next">
								<i class="fa fa-chevron-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="comeback-step-li comeback-step3">
					<div class="main-right-comeback-info_slogan" style="font-weight: bold">
						Bạn vui lòng Quan Tâm ít nhất 3 chuyên gia làm các dự án trong lĩnh vực bạn yêu thích
					</div>
					<div class="more" style="margin-top: 15px;">
						
					</div>

					<div class="comeback-step1-button">
						<div class="comeback-step-next comeback-step-li-button" step='2'>
							<div class="comeback-step-button-back">
								<i class="fa fa-chevron-left"></i>
							</div>
							<div class="comeback-step-back-text">Quay lại</div>
						</div>
						<div class="button">
							<button type="submit" disabled="disabled" value="submit" name="submit">Hoàn tát</button>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>