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
          
          
          <ul class="sidebar-menu">
          	
            <li class="header"> <a href="logout.php" ><i class="fa fa-power-off"></i> &nbsp;Sign out</a></li>
              <li class="treeview <?php if($active=="submissions"){ echo "active";} ?>">
              <a href="submissions.php">
                <i class="fa fa-shopping-bag"></i>
                <span>Win With Alpro</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="submissions.php"><i class="fa fa-folder-open"></i> View Submissions</a></li>
				
			
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