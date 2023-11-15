<?php 
error_reporting(E_ALL); ini_set("display_errors", 1); 
include('Class/connexion.php');

include('Class/category.php');
include('Class/sous_category.php');
include('Class/article.php');

$connexion = new connexion();
$mysqli=$connexion->get_connexion();
$Category =new Category();
$all_categorie=$Category->get_tous_categorie($mysqli);
$Sous_category =new Sous_category();
$Article=new Article();
$list_article=$Article->get_tous_articles($mysqli);
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Home 01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo247.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Tunisie,
							</span>

							<img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

							<span>
								24°
							</span>
						</span>

						<a href="#" class="left-topbar-item">
							A propos
						</a>

						<a href="#" class="left-topbar-item">
							Contactez-nous
						</a>

						
					</div>

					<div class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="index.php"><img src="images/icons/logo247.png" alt="IMG-LOGO"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Tunisie
							</span>

							<img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

							<span>
								24°
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="#" class="left-topbar-item">
							A propos
						</a>

						<a href="#" class="left-topbar-item">
							Contactez-nous
						</a>

						
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="index.php">Acceuil</a>
						
					</li>

					<li>
						<a href="category-01.php">Toutes l'actualité</a>
					</li>
<?php for ($i=0;$i<sizeof($all_categorie);$i++) {
	echo "<li>
	<a href='".$all_categorie[$i][1]."'>".$all_categorie[$i][1]."</a>
</li>";
 } ?>
					<!--li>
						<a href="category-02.php">Divertissement </a>
					</li>

					<li>
						<a href="category-01.php">Sport</a>
					</li>

					<li>
						<a href="category-02.php">Technologie</a>
					</li>

					<li>
						<a href="category-01.php">Politique</a>
					</li>

					<li>
						<a href="category-02.php">Economie</a>
					</li-->

					
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="index.php"><img src="images/icons/logo247.png" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				<!--div class="banner-header">
					<a href="#"><img src="images/banner-01.jpg" alt="IMG"></a>
				</div-->
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.php">
							<img src="images/icons/logo247.png" alt="LOGO">
						</a>

						<ul class="main-menu">
							

							<li class="mega-menu-item">
								<a href="category-01.php">Actualité</a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#news-0" role="tab">Toutes l'actualité</a>
										
										<?php for ($i=0;$i<sizeof($all_categorie);$i++) {
											$n=$i+1;
	echo "
	<a class='nav-link' data-toggle='pill' href='#news-".$n."' role='tab'>".$all_categorie[$i][1]."</a>
";
 } ?>
 
 <!--
										<a class="nav-link" data-toggle="pill" href="#news-1" role="tab">Divertissement</a>
										<a class="nav-link" data-toggle="pill" href="#news-2" role="tab">Sport</a>
										<a class="nav-link" data-toggle="pill" href="#news-3" role="tab">Technologie</a>
										<a class="nav-link" data-toggle="pill" href="#news-4" role="tab">Politique</a>
										<a class="nav-link" data-toggle="pill" href="#news-6" role="tab">Economie</a>
										<a class="nav-link" data-toggle="pill" href="#news-5" role="tab">Internationnale</a>
										-->
									</div>

									<div class="tab-content">
										<div class="tab-pane show active" style="height: 90%;
    overflow: auto" id="news-0" role="tabpanel">
											<h1 style="text-align: center;font-size: 20px;font-weight: bold;">Toutes l'actualité:</h1>
											<div class="row">
											<?php for ($i=0;$i<sizeof($list_article);$i++) {
 ?>
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/article/image/<?php echo $list_article[$i][9]; ?>" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php?id_categorie=<?php echo $list_article[$i][0]; ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
																<?php echo $list_article[$i][1]; ?>
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	<?php echo $list_article[$i][11]; ?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																<?php echo $list_article[$i][6]; ?>
																</span>
															</span>
														</div>
													</div>
												</div>
<?php } ?>
												
											</div>
										</div>
										<?php for ($i=0;$i<sizeof($all_categorie);$i++) { 
											$m=$i+1;?>
										<div class="tab-pane" style="height: 90%; overflow: auto" id="news-<?php echo $m; ?>" role="tabpanel">
											


												<?php 
												 $all_categorie[$i][0];
												$id_cat=$all_categorie[$i][0];
												 $list_article_bycategory=$Article->get_article_byIdcategory($mysqli,$id_cat);
												
												 if(sizeof($list_article_bycategory)>0) {
													echo '<h1 style="text-align: center;font-size: 20px;font-weight: bold;">
													 <span style="color:red">'.$all_categorie[$i][1].'</span></h1>';
													?>
<div class="row">
													<?php 

													 
													
												for ($j=0;$j<sizeof($list_article_bycategory);$j++) {
													?>
																								   <div class="col-3">
																									   <!-- Item post -->	
																									   <div>
																										   <a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
																											   <img src="images/article/image/<?php echo $list_article_bycategory[$j][9]; ?>" alt="IMG">
																										   </a>
												   
																										   <div class="p-t-10">
																											   <h5 class="p-b-5">
																												   <a href="blog-detail-01.php?id_categorie=<?php echo $list_article_bycategory[$i][0]; ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
																												   <?php echo $list_article_bycategory[$j][1]; ?>
																												   </a>
																											   </h5>
												   
																											   <span class="cl8">
																												   <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																													   <?php echo $list_article_bycategory[$j][11]; ?>
																												   </a>
												   
																												   <span class="f1-s-3 m-rl-3">
																													   -
																												   </span>
												   
																												   <span class="f1-s-3">
																												   <?php echo $list_article[$j][6]; ?>
																												   </span>
																											   </span>
																										   </div>
																									   </div>
																								   </div>
												   <?php } 
												?>
												</div>
												<?php
												} 
												else {
													?>
													<div class="row">
												<h1 style="text-align: center;font-size: 20px;font-weight: bold;">
												Aucun article trouvé pour <span style="color:red"><?php echo $all_categorie[$i][1]; ?></span>.</h1>
												</div>
												<?php 
												} ?>
											
										</div>
										<?php } ?>
										
									</div>
								</div>
							</li>
					
							<?php for ($i=0;$i<sizeof($all_categorie);$i++) {
											$n=$i+1;
	?>

<li class="mega-menu-item">
								<a href="<?php echo $all_categorie[$i][1].".php";?>"><?php echo $all_categorie[$i][1];?> </a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#enter-all-actualite<?php echo $all_categorie[$i][0];?>" role="tab">Toutes l'actualité</a>
										<?php
										 $all_sous_categorie=$Sous_category->get_tous_s_categorie_byID($mysqli,$all_categorie[$i][0]);
										
										for ($j=0;$j<sizeof($all_sous_categorie);$j++) {
											$m=$j+2;
	?>
										
										<a class="nav-link" data-toggle="pill" href="#enter-<?php echo $all_sous_categorie[$j][0];?>" role="tab">
											<?php echo $all_sous_categorie[$j][1];?></a>
										<?php } ?>
									
									</div>

									<div class="tab-content">
										<div class="tab-pane show active" style="height: 90%;
    overflow: auto" id="enter-all-actualite<?php echo $all_categorie[$i][0]?>" role="tabpanel">
											<div class="row">
												<div class="col-3">
												
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-25.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php echo $all_categorie[$i][1];?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-27.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php echo $all_categorie[$i][1]?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-26.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php echo $all_categorie[$i][1]?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-34.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php echo $all_categorie[$i][1]?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
<?php for ($j=0;$j<sizeof($all_sous_categorie);$j++) {
	?>
										<div class="tab-pane " style="height: 90%;
    overflow: auto" id="enter-<?php echo  $all_sous_categorie[$j][0] ?>" role="tabpanel">
											<div class="row " style=" 
 ">
												<div class="col-3">
													<!-- Item post -->	
													
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-35.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php echo $all_sous_categorie[$j][1]?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>
												<div class="col-3">
													<!-- Item post -->	
													
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-35.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php echo $all_sous_categorie[$j][1]?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-36.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php echo $all_sous_categorie[$j][1]?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-37.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php echo $all_sous_categorie[$j][1]?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.php" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-38.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php echo $all_sous_categorie[$j][1]?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
<?php }?>
									
									</div>
								</div>
							</li>




<?php 
 } ?>


							
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>