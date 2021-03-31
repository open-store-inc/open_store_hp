<?php 
		//urlパラメータを取得
		$parameter = get_the_permalink();
		if (preg_match("/open_store_staffs/",str_replace("/","",$parameter))) {
		  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>株式会社 OPEN STORE</title>
		<?php get_header(); ?> 
		<style>
			.attachment-full{
				width:80%;
				height:80%;
			}
    	</style>
<!-- ロード画面用のスタイル -->
		<style>
			.load_img{
				margin: 50% 45%;
    			width: 10%;
			}
			.breeding-rhombus-spinner {
				  height: 65px;
				  width: 65px;
				  position: relative;
				  transform: rotate(45deg);
				}

				.breeding-rhombus-spinner, .breeding-rhombus-spinner * {
				  box-sizing: border-box;
				}

				.breeding-rhombus-spinner .rhombus {
				  height: calc(65px / 7.5);
				  width: calc(65px / 7.5);
				  animation-duration: 2000ms;
				  top: calc(65px / 2.3077);
				  left: calc(65px / 2.3077);
				  background-color: white;
				  position: absolute;
				  animation-iteration-count: infinite;
				}

				.breeding-rhombus-spinner .rhombus:nth-child(2n+0) {
				   margin-right: 0;
				 }

				.breeding-rhombus-spinner .rhombus.child-1 {
				  animation-name: breeding-rhombus-spinner-animation-child-1;
				  animation-delay: calc(100ms * 1);
				}

				.breeding-rhombus-spinner .rhombus.child-2 {
				  animation-name: breeding-rhombus-spinner-animation-child-2;
				  animation-delay: calc(100ms * 2);
				}

				.breeding-rhombus-spinner .rhombus.child-3 {
				  animation-name: breeding-rhombus-spinner-animation-child-3;
				  animation-delay: calc(100ms * 3);
				}

				.breeding-rhombus-spinner .rhombus.child-4 {
				  animation-name: breeding-rhombus-spinner-animation-child-4;
				  animation-delay: calc(100ms * 4);
				}

				.breeding-rhombus-spinner .rhombus.child-5 {
				  animation-name: breeding-rhombus-spinner-animation-child-5;
				  animation-delay: calc(100ms * 5);
				}

				.breeding-rhombus-spinner .rhombus.child-6 {
				  animation-name: breeding-rhombus-spinner-animation-child-6;
				  animation-delay: calc(100ms * 6);
				}

				.breeding-rhombus-spinner .rhombus.child-7 {
				  animation-name: breeding-rhombus-spinner-animation-child-7;
				  animation-delay: calc(100ms * 7);
				}

				.breeding-rhombus-spinner .rhombus.child-8 {
				  animation-name: breeding-rhombus-spinner-animation-child-8;
				  animation-delay: calc(100ms * 8);
				}

				.breeding-rhombus-spinner .rhombus.big {
				  height: calc(65px / 3);
				  width: calc(65px / 3);
				  animation-duration: 2000ms;
				  top: calc(65px / 3);
				  left: calc(65px / 3);
				  background-color: white;
				  animation: breeding-rhombus-spinner-animation-child-big 2s infinite;
				  animation-delay: 0.5s;
				}


				@keyframes breeding-rhombus-spinner-animation-child-1 {
				  50% {
					transform: translate(-325%, -325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-2 {
				  50% {
					transform: translate(0, -325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-3 {
				  50% {
					transform: translate(325%, -325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-4 {
				  50% {
					transform: translate(325%, 0);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-5 {
				  50% {
					transform: translate(325%, 325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-6 {
				  50% {
					transform: translate(0, 325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-7 {
				  50% {
					transform: translate(-325%, 325%);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-8 {
				  50% {
					transform: translate(-325%, 0);
				  }
				}

				@keyframes breeding-rhombus-spinner-animation-child-big {
				  50% {
					transform: scale(0.5);
				  }
				}
    	</style>
		
		
		<script>
			$(window).on('load', function() {
				$.when(
					$(".load_img").delay(3000).fadeOut(800)
				).done(function() {
					$.when(
						$("body").animate({
      						'background-color' : '#FFFFFF'
    					}, 'slow')
					).done(function(){
						$.when(
							$(".wrapper").fadeIn(1500)
						).done(function(){
							$('.try_box').animate({
      						'background-color' : '#f1c40f'
    						}, 'slow');							
						})
						
					})
				})				
			});
		</script>

	</head>

	<body style="background-color:black;">
		<div class="load_img">
			<div class="breeding-rhombus-spinner">
				<div class="rhombus child-1"></div>
				<div class="rhombus child-2"></div>
				<div class="rhombus child-3"></div>
				<div class="rhombus child-4"></div>
				<div class="rhombus child-5"></div>
				<div class="rhombus child-6"></div>
				<div class="rhombus child-7"></div>
				<div class="rhombus child-8"></div>
				<div class="rhombus big"></div>
			</div>
		</div>
		<div class="wrapper" style="display:none;">
			<header>
				<div class="header-color">
					<p></p>
				</div>
				<div class="header container ">
					<div class="header-left">
						<div class="header-logo">
							<a href="">OPEN STORE</a>
						</div>
					</div>

				</div>
			</header>
			<div class="profile_image" style="text-align:center;">
				<!-- アイキャッチ画像を表示 -->
				<?php if( has_post_thumbnail() ): ?>
              		<?php the_post_thumbnail( 'full' ); ?>
				<?php else: ?>
              		<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="no-img"/ class="nonImage">
            	<?php endif; ?>
			</div>
			<div class="try_box">
				<div class="profile_titile"><?php the_title(); ?></div>
				<div class="profileText">
            		<?php the_content(); ?>
        		</div>
			</div>
			<div class="test">
			</div>
			<footer>
    			<div class="footer" style="margin-top:15vh;">
        			<p>株式会社open store</p>
    			</div>
			</footer>
		</div>
	</body>
</html>
<?php }else{ ?>
<!DOCTYPE html>
<html>
	<head>
		<title>株式会社 OPEN STORE</title>
		<?php get_header(); ?> 
	</head>
	<body>
		<?php get_template_part('menu'); ?>
	<div class="wrapper" style="display:block; margin:0 5%;">
		<div class="blog_text" style="text-align:center;">
			<h2><?php the_title(); ?></h2>
			<span class="blog_article_date"><?php the_time('Y.m.d') ?></span>
			<div>
				<?php if( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('full'); ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="no-img"/ class="nonImage">
				<?php endif; ?>
			</div>
			<div><?php the_content(); ?></div>
		</div>
		</div>
	</body>
</html>
<?php } ?>

	