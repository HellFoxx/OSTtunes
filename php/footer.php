<style>

	.footer {
	width: 100%;
	background-color: #530FAD;
	margin-top: 32px;
	padding: 15px 0 15px 0;
	}

	.footer-flex {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		align-items: center;
	}

	.copyright {
		color: #fff;
		font-size: 16px;
	}

	.social img:first-child {
		padding-right: 5px;
	}

	@media (max-width: 575.98px) {
		.footer-logo a img {
			height: 30px;
		}

		.copyright span {
			font-size: 10px;
			line-height: 0px;
		}
		
		.social {
			width: 20px;
		}

		.social a img {
			height:30px;
		}

		.social img:first-child {
			padding-right: 1px;
		}

		.news-block:hover .news-hover {
			display: none;
		}
		
		.read-a {
			margin-bottom: 10px;
			display: block;
		}

		.read-a a {
			width: 100%;
			display: block;
			text-align: center;
			color: #530FAD;
			font-size: 16px;
		}
	}

	@media (min-width: 576px) and (max-width: 767.98px) {
		.footer-logo a img {
			height: 36px;
		} 

		.social a img {
			height: 36px;
		}

		.copyright span {
			font-size: 14px;
		}
	}

</style>

<div class="footer">
		<div class="container">
			<div class="footer-flex">
				<div class="footer-logo">
					<a href="main.html"><img src="../images/ost_tunes_logo.png" alt="ost_tunes_logo" height="50px"><a>
				</div>	
				<div class="copyright">
					<span>© 2018 OST-TUNES ALL RIGHTS RESERVED</span>
				</div>
				<div class="social">
					<a href="https://vk.com/andy_fox_page" target="_blank">
						<img src="../images/vk.png" alt="vk" height="50px">
					</a>
					<a href="https://www.instagram.com/andy_fox_official/" target="_blank">
						<img src="../images/inst.png" alt="instagram" height="50px">
					</a> 
				</div>
			</div>
		</div>
	</div>