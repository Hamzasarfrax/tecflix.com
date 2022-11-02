
<?php 

$path=$_SERVER['REQUEST_URI'];
$path=explode('/', $path);
$page=end($path)

?>
<section class="sider_dashbord_login">

      <div class="side_nav" id="sidebar">
   
        <ul class="sidebar p-0">
          
        <div class="mobile_hidden_bar " onclick="sidebarToggle()" id="icon_sidebar">
          <i class="fa-solid fa-bars"></i>
        
        </div>
          <li class="nav-items <?php if($page=='Dashbord.php'){echo 'active';} ?> ">
            <div class="more_menu">
              <a href="Dashbord.php" class="menu_item">
                <div class="menu_icon">
                  <img src="../images/dashboard.svg" alt="" class="img" />
                </div>
                <div class="menu_name">Dashboard</div>
              </a>
            </div>
          </li>
          <li class="nav-items">
            <div class="more_menu">
              <a href="#" class="menu_item">
                <div class="menu_icon">
                  <img src="../images/product.svg" alt="" class="img" />
                </div>
                <div class="menu_name">products</div>
              </a>
            </div>
          </li>

          <li class="nav-items <?php if($page=='Order.php'){echo 'active';} ?>">
            <div class="more_menu">
              <a href="Order.php" class="menu_item">
                <div class="menu_icon">
                  <img src="../images/order.svg" alt="" class="img" />
                </div>
                <div class="menu_name">orders</div>
              </a>
            </div>
          </li>

          <li class="nav-items <?php if($page=='Report.php'){echo 'active';} ?>">
            <div class="more_menu">
              <a href="Report.php" class="menu_item">
                <div class="menu_icon">
                  <img src="../images/reports.svg " class="img" />
                </div>
                <div class="menu_name">reports</div>
              </a>
            </div>
          </li>
          <hr />
          <li class="nav-items <?php if($page=='Profile.php'){echo 'active';} ?>">
            <div class="more_menu">
              <a href="Profile.php" class="menu_item">
                <div class="menu_icon">
                  <img src="../images/users.svg" class="img" />
                </div>
                <div class="menu_name">profile</div>
              </a>
            </div>
          </li>
          <li class="nav-items <?php if($page=='Setting.php'){echo 'active';} ?>">
            <div class="more_menu">
              <a href="Setting.php" class="menu_item">
                <div class="menu_icon">
                  <img src="../images/settings.svg" class="img" />
                </div>
                <div class="menu_name">settings</div>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </section>