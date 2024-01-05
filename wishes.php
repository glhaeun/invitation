<?php 

    $query ="SELECT * FROM message ORDER BY date DESC"; // Order by date in descending order
    $select_message =  $connect->prepare($query);
    $select_message -> execute();

    if($select_message->rowCount()>0){
        while ($fetch_message = $select_message ->fetch(PDO::FETCH_ASSOC)){
            ?>
                    <div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;"><?=$fetch_message['name']?></span><p><?=$fetch_message['date']?></p><blockquote style="background-color: #bed0c2"><p style="color: white;"><?=$fetch_message['message']?></p></blockquote></div>
					</div> 
                    <?php
        }
    } 
                                    
?>