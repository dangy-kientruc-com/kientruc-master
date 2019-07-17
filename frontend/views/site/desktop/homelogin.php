<div class="main">
	<div class="main-left">
		<div class="main-left-info">
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
			<div class="main-left-info-register_now">
				Đăng ký ngay hôm nay để tận hưởng lợi ích của bạn
			</div>
			<div class="vivamus-vel-varius-d">
				Vivamus vel varius diam. Vivamus eget est ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
			</div>
			<div class="main-left-info-rectangle">
				<div class="main-left-info-rectangle_top">
					Dành cho kiến trúc sư
				</div>
				<div class="main-left-info-rectangle_bot">
					Dễ dàng tiếp cận với khách hàng có nhu cầu thiết kế
				</div>
			</div>
			<div class="main-left-info-rectangle">
				<div class="main-left-info-rectangle_top">
					Dành cho chủ nhà
				</div>
				<div class="main-left-info-rectangle_bot">
					Chủ động tìm kiếm và lựa chọn kiến trúc sư phù hợp
				</div>
			</div>
			<div class="main-left-info-rectangle">
				<div class="main-left-info-rectangle_top">
					Dành cho nhân viên kinh doanh nội thất
				</div>
				<div class="main-left-info-rectangle_bot">
					Mở rộng mạng lưới phân phối sản phẩm giúp tăng doanh thu
				</div>
			</div>
		</div>
	</div>
	<div class="main-right" style="height: 100vh">
		 <div class="main-right-info">
			<div class="main-right-close">
				X
			</div>
			<div class="main-right-content">
				<div class="main-right-content-title">
					Đăng Nhập
				</div>
				<div class="main-right-content-title_2">
					Đăng nhập qua mạng xã hội
				</div>
				<div class="main-right-content-choise">
					<div class="main-right-content-choise-li fb">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="33" width="33">
							<image xlink:href="images/icon-facebook.svg" width="33"/>    
						</svg>
						<div class="main-right-content-choise-li_text">Facebook</div>
					</div>
					<div class="main-right-content-choise-li gplus">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="33" width="33">
							<image xlink:href="images/icon-facebook.svg" width="33"/>    
						</svg>
						<div class="main-right-content-choise-li_text">Gmail</div>
					</div>
					<div class="main-right-content-choise-li phone">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="33" width="33">
							<image xlink:href="images/icon-facebook.svg" width="33"/>    
						</svg>
						<div class="main-right-content-choise-li_text">SDT</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="main-right-content-or">
					Hoặc đăng nhập qua email
				</div>
				<?php use kartik\form\ActiveForm;
					$form = ActiveForm::begin([
			        'id' => 'login-form-vertical', 
			        'type' => ActiveForm::TYPE_VERTICAL,
			        
			    ]); 
					use \common\models\LoginForm;
					$model= new LoginForm();
				 ?>
				<div class="main-right-content-form">

					<?= $form->field($model, 'username',
						[
							
							'template'=>"<div class='field-email'><div class='field'>{input}<label for='loginform-username'>Username</label></div></div><div class='help-block'>{error}</div>"
						])->textInput([
							'placeholder' => "",

                        ])?>
                    <?= $form->field($model, 'password', 
						[
							'template'=>"<div class='field-email'><div class='field'>{input} <label for='pasword'>Mật Khẩu</label></div></div>{error}"
						])->passwordInput([

                        ])?>    

    				<?= $form->field($model, 'rememberMe')->checkbox(['id' => 'remember-me-ver', 'custom' => true]) ?>

							<!-- <div class="field-email">
								<div class="field">
								    <input type="text" name="LoginForm[username]" id="email" placeholder="  " required>
								    <label for="email">Email</label>
							 	</div>
							</div>
							<div class="field-email">
								<div class="field password">
								    <input type="text" name="LoginForm[password]" id="pasword" placeholder="  " required>
								    <label for="pasword">Mật Khẩu</label>
							 	</div>
							 	<div class="clear"></div>
							</div> -->
				</div>
				<div class="main-right-content-checked-save">
				<!-- 	<div class="main-right-content-checked-input">
						<input type="checkbox" name=""> Ghi nhớ mật khẩu
					</div>
					<div class="main-right-content-checked-text-save">
						<a href="">Quên mật khẩu ?</a>
					</div>
					<div class="clear"></div> -->
				</div>
				<div class="main-right-content-submit">
					<button class="submit-success" type="submit">Đăng nhập</button>
				</div>
				<div class="main-right-content-have-account">
					Bạn chưa có tài khoản? <a href="#">Đăng ký tài khoản mới</a>
				</div>
				<?php ActiveForm::end(); ?>
			</div>
		</div> 
		<!-- <iframe src="http://login.kientruc.com/?link=http://localhost/demo&f5=1" style="height: 99%; width: 100%; overflow: hidden; border:none;"></iframe> -->
	</div>
</div>