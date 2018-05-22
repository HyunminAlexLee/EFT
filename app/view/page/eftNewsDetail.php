 <div class="container">
<section id="notice" class="col-sm-2">

	<!-- notice board -->

	<?php echo $menu;?>

</section>
<section id="notice" class="col-sm-10">

	<!-- notice board 2-->
	<div class="wow fadeInDown">
	     

          

            
               
                 		<div class="col-xs-12">
				<!-- /.box -->
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">news</h3>
					</div>
    			
					<!-- /.box-header -->
					<div class="box-body">
					<div><span class="col-xs-3">news_id</span><span><?= $eftNewsDetail['news_id']?></span></div>
						<div><span class="col-xs-3">title</span><span><?= $eftNewsDetail['title']?></span></div>
						<div><span class="col-xs-3">div</span><span><?= $eftNewsDetail['div']?></span></div>
						<div><span class="col-xs-3">description</span><span><?= $eftNewsDetail['description']?></span></div>
						<div><span class="col-xs-3">planed_date</span><span><?= $eftNewsDetail['create_date'] ?></span></div>
						<div><span class="col-xs-3">planed_start_date</span><span><?= $eftNewsDetail['create_user']?></span></div>
						
						
					</div>
					<!-- /.box-header -->
				 <div>
             	<input type="button" class="j_button" value ="Go to List" onClick="parent.location='/eftNews/eftNews'">
            </div>
				</div>

				<!-- /.box -->
			</div>
			<!-- /.col -->
					

              
      
	
	</div>
<div><form action ="updateEftNewsComment" method="post">
	 <input type="hidden" name="news_id" value="<?= $eftNewsDetail['news_id']?>" >
	 <textarea cols="100" rows="2" id="description" name="description">
	 </textarea>				
                		                     		
						<div>
						 <input type="submit" value="save" >
						
						 </div>
					
						</form></div>
						
						
						<div><?php 
						
						echo count($eftNewsDetailComments);
						if (count ( $eftNewsDetailComments) > 0) {
						?><div class="col-md-12">
						<div class="col-md-1">번호</div>
						<div class="col-md-7">제목</div>
						<div class="col-md-2">등록일</div>
						<div class="col-md-2">등록자</div>
							</div>					
						<?php 
						
						
						foreach ( $eftNewsDetailComments as $eftNewsComments ) {
							?>
							<div class="col-md-12">
							<div class="col-md-1"><?=$eftNewsComments ['news_id']?></div>
						<div class="col-md-1"><?=$eftNewsComments ['description']?></div>
						
						<div class="col-md-2"><?=$eftNewsComments ['create_date']?></div>
						<div class="col-md-2"><?=$eftNewsComments ['create_user']?></div>
							
							</div>
							
							<?php 
																
						}
						}
						?>
						
						</div>
						
</section>
</div>
<!-- notice board -->
