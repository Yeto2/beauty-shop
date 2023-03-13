<nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="<?=ASSETS?>profile/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="<?=ASSETS?>profile/images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
			                  <?php foreach ($data['user'] as $key):?>
                           <h6><?=$key->username?></h6>
                           <?php endforeach; ?>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                  <li><a href="<?=ROOT?>profile"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Pages</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="<?=ROOT?>index">> <span>Home</span></a>
                           </li>
                           <li>
                              <a href="<?=ROOT?>features">> <span>Features</span></a>
                           </li>
                           <li>
                              <a href="<?=ROOT?>blog">> <span>Blog</span></a>
                           </li>
                           <li>
                              <a href="<?=ROOT?>contact">> <span>Contact</span></a>
                           </li>
                           <li>
                              <a href="<?=ROOT?>upload">> <span>Upload once</span></a>
                           </li>
                           <li>
                              <a href="<?=ROOT?>uploadMultiple">> <span>Upload Multiple</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="<?=ROOT?>table"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                     
                     <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                     <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                     </li>
                     <li><a href="<?=ROOT?>logout"><i class="fa fa-cog yellow_color"></i> <span>Logout</span></a></li>
                  </ul>
               </div>
            </nav>