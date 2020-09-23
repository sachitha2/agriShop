<?php
    class Main {
        public function userContainers($userName)
        {
            ?>
            <div style="width: 100%;height: 250px;font-size: 50px;background-color: red;color:black; padding: 25px;">
                <?php echo($userName) ?>

            </div>
            <?php
        }

        public function itemCard($price,$itemName,$description,$itemId)
        {
           ?>
            
  
    
            <a href="itemOpen.php?itemId=<?php echo($itemId) ?>">
            <div class="card item-card card-block" >
        <h4 class="item-card-title text-right"><i class="material-icons">settings</i></h4>
        <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3"><?php echo($itemName."-".$price) ?></h5>
        <p class="card-text"><?php echo($description) ?></p> 
        </div> 

            </a>
    
  
           
           <?php
        }

    }

    



?>