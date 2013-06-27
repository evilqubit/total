
<div class="span4">
                
                
                	<div id="form_table">
                    
                    
                    	<div class="title">
                            <div class="invite"><a onClick="sendRequestViaMultiFriendSelector()" href="#"><img src="images/invite.png"></a></div>
                            <div class="share"><a class="shareit" onclick="document.getElementById('total_image').value='../app/gallery/t/<?php echo $row['image'];?>'" href="#"><img src="images/share.png"></a></div>
                            <div class="vote">
                            <a href="#" onclick="vote(<?php echo $row['id'];?>)"><img style="border:none" src="images/vote_b.png" /></a>
                            </div>
                        </div>
                        
                          
                        <div class="thumb">
                         <a class="fancybox" rel="group" href="../app/gallery/<?php echo $row['image'];?>"><img src="gallery/t/<?php echo $row['image'];?>" style="margin:9px; width:190px; height:124px"></a>
                          
                        </div>
                        
                        <div style="width:100%;"><span style="color:#034ea2;font-size:12px;font-family:\'Conv_HelveticaNeueLTStd-Md\';"><?php echo $row['name'];?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?php echo $row['votes'];?> Vote(s)</span></div>
                       
                    </div>
                    
</div>
