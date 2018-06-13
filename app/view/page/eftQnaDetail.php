 <div class="container">
<section id="qna" class="col-sm-2">

	<!-- qna board -->

	<?php echo $menu;?>

</section>
<section id="qna" class="col-sm-10">

	<!-- qna board 2-->
	<div class="wow fadeInDown">
	     

          

            
               
                 		<div class="col-xs-12">
				<!-- /.box -->
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">qna</h3>
					</div>
    			
					<!-- /.box-header -->
					<div class="box-body">
					<div><span class="col-xs-3">qna_id</span><span><?= $eftQnaDetail['qna_id']?></span></div>
						<div><span class="col-xs-3">title</span><span><?= $eftQnaDetail['title']?></span></div>
						<div><span class="col-xs-3">div</span><span><?= $eftQnaDetail['div']?></span></div>
						<div><span class="col-xs-3">description</span><span><?= $eftQnaDetail['description']?></span></div>
						<div><span class="col-xs-3">planed_date</span><span><?= $eftQnaDetail['create_date'] ?></span></div>
						<div><span class="col-xs-3">planed_start_date</span><span><?= $eftQnaDetail['create_user']?></span></div>
						
						
					</div>
					<!-- /.box-header -->
				 <div>
             	<input type="button" class="j_button" value ="Go to List" onClick="parent.location='/eftQna/eftQna'">
            </div>
				</div>

				<!-- /.box -->
			</div>
			<!-- /.col -->
					

              
      
	
	</div>
<div><form action ="updateEftQnaComment" method="post">
	 <input type="hidden" name="qna_id" value="<?= $eftQnaDetail['qna_id']?>" >
	 <textarea cols="100" rows="2" id="description" name="description">
	 </textarea>				
                		                     		
						<div>
						 <input type="submit" value="save" >
						
						 </div>
					
						</form></div>
						
						
						<div><?php 
						
						echo count($eftQnaDetailComments);
						if (count ( $eftQnaDetailComments) > 0) {
						?><div class="col-md-12">
						<div class="col-md-1">번호</div>
						<div class="col-md-7">제목</div>
						<div class="col-md-2">등록일</div>
						<div class="col-md-2">등록자</div>
							</div>					
						<?php 
						
						
						foreach ( $eftQnaDetailComments as $eftQnaComments ) {
							?>
							<div class="col-md-12">
							<div class="col-md-1"><?=$eftQnaComments ['qna_id']?></div>
						<div class="col-md-1"><?=$eftQnaComments ['description']?></div>
						
						<div class="col-md-2"><?=$eftQnaComments ['create_date']?></div>
						<div class="col-md-2"><?=$eftQnaComments ['create_user']?></div>
							
							</div>
							
							<?php 
																
						}
						}
						?>
						
						</div>
						
</section>
</div>
<!-- qna board -->
