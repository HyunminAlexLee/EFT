 <div class="container">
<section id="board" class="col-sm-2">

	<!-- board board -->

	<?php echo $menu;?>

</section>
<section id="board" class="col-sm-10">

	<!-- board board 2-->
	<div class="wow fadeInDown">
	     

          

            
               
                 		<div class="col-xs-12">
				<!-- /.box -->
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">board</h3>
					</div>
    			
					<!-- /.box-header -->
					<div class="box-body">
					<div><span class="col-xs-3">board_id</span><span><?= $eftBoardDetail['board_id']?></span></div>
						<div><span class="col-xs-3">title</span><span><?= $eftBoardDetail['title']?></span></div>
						<div><span class="col-xs-3">div</span><span><?= $eftBoardDetail['div']?></span></div>
						<div><span class="col-xs-3">description</span><span><?= $eftBoardDetail['description']?></span></div>
						<div><span class="col-xs-3">planed_date</span><span><?= $eftBoardDetail['create_date'] ?></span></div>
						<div><span class="col-xs-3">planed_start_date</span><span><?= $eftBoardDetail['create_user']?></span></div>
						
						
					</div>
					<!-- /.box-header -->
				 <div>
             	<input type="button" class="j_button" value ="Go to List" onClick="parent.location='/eftBoard/eftBoard'">
            </div>
				</div>

				<!-- /.box -->
			</div>
			<!-- /.col -->
					

              
      
	
	</div>
<div><form action ="updateEftBoardComment" method="post">
	 <input type="hidden" name="board_id" value="<?= $eftBoardDetail['board_id']?>" >
	 <textarea cols="100" rows="2" id="description" name="description">
	 </textarea>				
                		                     		
						<div>
						 <input type="submit" value="save" >
						
						 </div>
					
						</form></div>
						
						
						<div><?php 
						
						echo count($eftBoardDetailComments);
						if (count ( $eftBoardDetailComments) > 0) {
						?><div class="col-md-12">
						<div class="col-md-1">번호</div>
						<div class="col-md-7">제목</div>
						<div class="col-md-2">등록일</div>
						<div class="col-md-2">등록자</div>
							</div>					
						<?php 
						
						
						foreach ( $eftBoardDetailComments as $eftBoardComments ) {
							?>
							<div class="col-md-12">
							<div class="col-md-1"><?=$eftBoardComments ['board_id']?></div>
						<div class="col-md-1"><?=$eftBoardComments ['description']?></div>
						
						<div class="col-md-2"><?=$eftBoardComments ['create_date']?></div>
						<div class="col-md-2"><?=$eftBoardComments ['create_user']?></div>
							
							</div>
							
							<?php 
																
						}
						}
						?>
						
						</div>
						
</section>
</div>
<!-- board board -->
