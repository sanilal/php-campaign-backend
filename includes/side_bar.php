   <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          
           <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/profile-dummy.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><a href="profile.php" >Administartor</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-green"></i> Online</a>
              
            </div>
            
          </div>
          
          <?php 
          $sid = $_SESSION['user_id']; 
//           $csql="select `zone_access` from `".TB_pre."admin`WHERE `id`='$sid' ";
// $cr1=mysqli_query($url,$csql) or die("Failed".mysqli_error($url));
//$crow=mysqli_fetch_object($cr1);
//$zone =  $crow->zone_access;
          ?>
          <ul class="sidebar-menu">
          	
            <li class="header"> <a href="logout.php" ><i class="fa fa-power-off"></i> &nbsp;Sign out</a></li>
              <li class="treeview <?php if($active=="submissions"){ echo "active";} ?>">
              <a href="submissions.php">
                <i class="fa fa-shopping-bag"></i>
                <span>Shop & Win</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="bh-submissions.php"><i class="fa fa-folder-open"></i> Bahrain Submissions</a></li>     
                <li><a href="ksa-submissions.php"><i class="fa fa-folder-open"></i> KSA Submissions</a></li> 
                <li><a href="uae-submissions.php"><i class="fa fa-folder-open"></i> UAE Submissions</a></li> 
                    
                
              	<li><a href="submissions.php"><i class="fa fa-folder-open"></i> All Submissions</a></li>     
              </ul>
            </li>
        <?php ?>     <li class="treeview <?php if($active=="campaign"){ echo "active";} ?>">
              <a href="#">
                <i class="fa fa-newspaper-o"></i>
                <span>Campaign Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li>
                        <a href="dates.php">
                            <i class="fa fa-braille"></i>
                            <span>View Active Dates</span>
                        </a>
                  </li>
                  <li>
                        <a href="prizes.php?section_id=1">
                            <i class="fa fa-gift"></i>
                            <span>Prizes</span>
                        </a>
                  </li>
                  <li>
                        <a href="add-prize.php">
                            <i class="fa fa-gift"></i>
                            <span> + Add Prize</span>
                        </a>
                  </li>
                  <li>
                      <a href="winners.php">
                        <i class="fa fa-trophy"></i>
                        <span>Winners</span>
                      </a>
                   </li>
                 </ul>
           
             </li><?php ?>
     
       		
          </ul>
        </section>
        <!-- /.sidebar -->
   </aside>