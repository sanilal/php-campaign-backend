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
                <?php if($sid==3) {?>
              	<li><a href="submissions.php"><i class="fa fa-folder-open"></i> View Submissions</a></li>
               <?php } ?>
               <?php if($sid==4 || $sid==3) {?>
				<li><a href="uae-submissions.php"><i class="fa fa-folder-open"></i>UAE Submissions</a></li>
       <?php } ?>
       <?php if($sid==2 || $sid==3) {?>
				<li><a href="qatar-submissions.php"><i class="fa fa-folder-open"></i>Qatar Submissions</a></li>
       <?php } ?>
       <?php if($sid==5 || $sid==3) {?>
				<li><a href="kuwait-submissions.php"><i class="fa fa-folder-open"></i>Kuwait Submissions</a></li>
       <?php } ?>
       <?php if($sid==7 || $sid==3) {?>
				<li><a href="bahrain-submissions.php"><i class="fa fa-folder-open"></i>Bahrain Submissions</a></li>
       <?php } ?>
       <?php if($sid==8 || $sid==3) {?>
				<li><a href="oman-submissions.php"><i class="fa fa-folder-open"></i>Oman Submissions</a></li>
       <?php } ?>
       <?php if($sid==9 || $sid==3) {?>
				<li><a href="lebanon-submissions.php"><i class="fa fa-folder-open"></i>Lebanon Submissions</a></li>
       <?php } ?>
       <?php if($sid==10 || $sid==3) {?>
				<li><a href="jordan-submissions.php"><i class="fa fa-folder-open"></i>Jordan Submissions</a></li>
       <?php } ?>
       <?php if($sid==11 || $sid==3) {?>
				<li><a href="iraq-submissions.php"><i class="fa fa-folder-open"></i>Iraq Submissions</a></li>
       <?php } ?>
              </ul>
            </li>
        <?php /*?>     <li class="treeview <?php if($active=="sections"){ echo "active";} ?>">
              <a href="#">
                <i class="fa fa-newspaper-o"></i>
                <span>Sections</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li>
                        <a href="edit-section.php?section_id=1">
                            <i class="fa fa-braille"></i>
                            <span>Home Section</span>
                        </a>
                  </li>
                  <li>
                      <a href="edit-section.php?section_id=2">
                        <i class="fa fa-braille"></i>
                        <span>About Section</span>
                      </a>
                   </li>
                 </ul>
           
             </li><?php */?>
     
       		
          </ul>
        </section>
        <!-- /.sidebar -->
   </aside>