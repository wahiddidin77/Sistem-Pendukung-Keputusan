<header>
		<div class='navbar'>
			<div class='navbar-inner'>
				<div class='container-fluid'>
					<a class='brand' href='#'><span class='hidden-phone'>SDN Ngagel Rejo Surabaya</span></a>
					<a class='toggle-nav btn pull-left' href='#'><i class='icon-reorder'></i></a>
					<ul class='nav pull-right'>
						<li class='dropdown dark user-menu'>
							<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
								
								<span class='user-name hidden-phone'><b><?php echo $_SESSION['nama']; ?></b></span>
								<b class='caret'></b>
							</a>
							<ul class='dropdown-menu'>
								<?php 
								$rows=mysqli_fetch_array(mysqli_query($konek,"SELECT * FROM tbl_user"));
								?>
								<li>
									<a href='user_profile.php?id=<?php echo $rows['id'];?>'>
										<i class='icon-user'></i>
										Profile
									</a>
								</li>
								<li class='divider'></li>
								<li>
									<a href='logout.php'>
										<i class='icon-signout'></i>
										Keluar
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>