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
						<h3 class="box-title">Data Table With Full Features</h3>
					</div>
	
					<!-- /.box-header -->
					<div class="box-body">
					 <div id="myNicPanel" style="width: 825px;"></div>
						<form action ="updateEftBoard" method="post">
		

	 <textarea cols="100" rows="10" id="description" name="description">
	 </textarea>

						
						
						
						
						<div><span class="col-xs-3">*title</span></div>
						<div><span><input type="text" name="title"  value =""></span></div>
						
						<input type="hidden" name="div"  value ="1">
						<!-- <div><span class="col-xs-3"></span></div>
						<div><span></span></div> -->
						<div><span class="col-xs-3">*description</span></div>						
						<div><span class="col-xs-3"> </span></div>	
						
						<div><span class="col-xs-3">*날짜</span></div>						
					   <div><span> <div class="input-group date">             
					    	<div class="input-group-addon">
                    			<i class="fa fa-calendar"></i>
                  			</div>
                  			<input type="text" class="form-control " id="create_date"  name="create_date" style="width:300px"/>
                		</div>   </span>  </div>     
						<div><span class="col-xs-3">시작일</span></div>					
					   <div><span> <div class="input-group date">             
					    	<div class="input-group-addon">
                    			<i class="fa fa-calendar"></i>
                  			</div>
                  			<input type="text" class="form-control " id="create_user"  name="create_user" style="width:300px"/>
                		</div>   </span>  </div>     
						<div><span class="col-xs-3">종료일</span></div>					
					   <div><span> <div class="input-group date">             
					    	<div class="input-group-addon">
                    			<i class="fa fa-calendar"></i>
                  			</div>
                  			
                		</div>   </span>  </div>                     		
						<div>
						 <input type="submit" value="save" >
						
						 </div>
					
						</form>
					</div>
					<!-- /.box-header -->
				
				</div>

				<!-- /.box -->
			</div>
			<!-- /.col -->  

           
	
	</div>
</section>
</div>
<!-- board board -->

 <script type="text/javascript"> 
//<![CDATA[

  bkLib.onDomLoaded(function() {
	  var myNicEditor = new nicEditor({fullPanel : true});
      myNicEditor.setPanel('myNicPanel');
      myNicEditor.addInstance('description');
  });

	    
 //]]>


	</script>
  