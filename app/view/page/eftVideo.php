 <div class="container">
<section id="notice" class="col-sm-2">

	<!-- notice board -->

	<?php echo $menu;?>

</section>
<section id="notice" class="col-sm-10">

	<!-- notice board 2-->
	<div class="wow fadeInDown">
	 <div class="container">
          

          

            <div class="row">
               
                   wreqrr

                   <div class="col-md-12">
					<div id = "galleryList" >
					<?php count ( $gallery['gallery'] )?>
					<div class ="col-md-12 ">
					<?php
					if (count ( $gallery['gallery'] ) > 0) {
						
						foreach ( $gallery['gallery'] as $gallery_data ) {
							?><?=$gallery_data ['title']?>
							
							<?php 
																
						}
						
						/*
						 * $data_array = array(
						 * '내가 곧 길이요 진리요 생명이니 나로 말미암지 않고는 아버지께로 올자가 없느니라. 요한복음 14:6'
						 * ,'아버지께 참되게 예배하는 자들은 영과 진리로 예배할 때가 오나니 곧 이때라 아버지께서는 자기에게 이렇게 예배하는 자들을 찾으시느니라. 요한복음 4:23'
						 * ,'그리스도께서 약하심으로 십자가에 못 박히셨으나, 하나님의 능력으로 살아계시니 우리도 그 안에서 약하나,너희에게 대하여 하나님의 능력으로 그와 함께 살리라. 고린도후서 13:4'
						 * ,'나는 선한 목자라 선한 목자는 양들을 위하여 목숨을 버리거니와. 요한복음 10:11'
						 * ,'선한 일을 하다가 낙심하지 말라 포기하지 않으면 반드시 거둘때가 오리라. 갈라디아서 6:9'
						 * ,'소망의 하나님이 모든 기쁨과 평강을 믿음안에서 너희에게 충만하게 하사 성령의 능력으로 소망이 넘치게 하시기를 원하노라. 로마서 15:13'
						 * ,'나의 평안을 너희에게 주노라 내가 주는 것은 세상이 주는 것과 같지 아니하니라. 요한복음 14:27'
						 * ,'수고하고 무거운 짐진자들아 다 내게로 오라. 마태복음 11:28'
						 * ,'여호와를 경외하는 것은 생명의 샘이니 사망의 그물에서 벗어나게 하느니라. 잠언 14:27'
						 * ,'우리가 알거니와 하나님을 사랑하는자 곧 그의 뜻대로 부르심을 입은 자들에게는 모든것이 합력하여 선을 이루리라. 로마서 8:28'
						 * );
						 */
					}
					
					?>
					
					</div>
					<div class ="col-xs-12 col-sm-12 col-md-12 m_page text-center">
				<?php
				
				$page_list_size = $gallery ['page_list_size'];
				$total_page = $gallery ['total_page'];
				$current_page = $gallery ['current_page'];
				$page_size = $gallery ['page_size'];
				$first_no = $gallery ['first_no'];
				//echo $page_list_size;
				$start_page = floor ( ($current_page - 1) / $page_list_size ) * $page_list_size + 1;
				//echo "<br/>start_page==>".$start_page;
				//echo "<br/>page_list_size==>".$page_list_size;
				
				$end_page = $page_list_size;//$start_page + $page_list_size + 1;
				//echo "<br/>end_page==>".$end_page;
				//echo "<br/>total_page==>".$total_page;
				//echo "<br/>first_no==>".$first_no;
				if ($total_page < $end_page)
					$end_page = $total_page;
				
				$prev_list = 0;
				
				
				//echo "<br/>start_page>=page_list_size".$start_page.'>='.$page_list_size;
				if ($start_page >= $page_list_size) {
					$prev_list = ($start_page - 2) * $page_size;
					echo "<div id='page_list'><span class='page_prev' id='page_prev' onclick = 'page_change(" . $prev_list . ");'><label>&lt;</label></span>";
				}
				
				for($i = $start_page; $i <= $end_page; $i ++) {
					$page = ($i - 1) * $page_size;
					//echo "<br/>page==>".$page;
					
					if ($first_no != $page) {
						echo "<span class='page_num' id='page_num' onclick = 'page_change(" . $page . ");'>";
					}
					echo "<label>".$i."</label>";
					if ($first_no != $page) {
						echo "</span>";
					}
				}
				
				if ($total_page > $end_page) {
					$next_list = $end_page * $page_size;
					echo "<span  class='page_next' id='page_next' onclick = 'page_change(" . $next_list . ");'><label>&gt;</label></span></div>";
				}
				
				?>	
					</div>
					
					</div>
				</div>

              
            </div>
        </div>
        	<input type = "hidden" id="nowpage" name="nowpage" value="0"/>
	
	</div>

</section>
    <section id="portfolio">
       
    </section><!--/#portfolio-item-->
</div>
<!-- notice board -->
