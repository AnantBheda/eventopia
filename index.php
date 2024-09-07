<html>
<body>
<?php
include('header.php');
?>

<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#555;">Upcoming Movies</h2>
					<?php 
					$qry3=mysqli_query($con,"SELECT * FROM tbl_movie LIMIT 5");
					
					while($n=mysqli_fetch_array($qry3))
					{
					?>
					<div class="content-left">
						<div class="listimg listimg_1_of_2">
						 <img src="admin/<?php echo $n['image'];?>">
						</div>
						<div class="text list_1_of_2">
						  <div class="extra-wrap">
						  	<span style="text-color:#000" class="data"><strong><?php echo $n['movie_name'];?></strong><br>
						  	<span style="text-color:#000" class="data"><strong>Cast :<?php echo $n['cast'];?></strong><br>
                                <div class="data">Release Date :<?php echo $n['release_date'];?></div>
                                <span class="text-top"><?php echo $n['desc'];?></span>
                          </div>
						  <div class="text list_1of_2">
							 <a target="_blank" href="<?php echo $n['video_url'];?>"><img src="<?php echo $n['image'];?>" alt=""/></a>
							 <a target="_blank" href="<?php echo $n['video_url'];?>" class="link" style="text-decoration:none; font-size:14px;"><?php echo $n['movie_name'];?></a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<?php
				}
				?>
				
			
		</div>				
				
		<?php include('movie_sidebar.php');?>
	</div>
</div>
<?php include('footer.php');?>
</div>
<?php include('searchbar.php');?>