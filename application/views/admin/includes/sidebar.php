   <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="<?php echo($this->selected_tab == 'dashboard' ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
          </li>

          <li class="<?php echo isset($this->selected_parent_tab) && $this->selected_parent_tab=='category'?'active open':''; ?>  nav-item"><a href="javascript:;"><i class="fa fa-pie-chart"></i><span class="menu-title" data-i18n="nav.templates.main">Category</span></a>
            <ul class="menu-content">
              <li class="<?php echo($this->selected_tab == 'add_category' ? 'active' : ''); ?>"><a class=" menu-item" href="<?php echo base_url('admin/category/manage_view'); ?>"><i></i><span data-i18n="nav.templates.vert.main">Add Category</span></a>
              </li>
              <li class="<?php echo($this->selected_tab == 'view_category' ? 'active' : ''); ?>"><a class=" menu-item" href="<?php echo base_url('admin/category/'); ?>"><i></i><span data-i18n="nav.templates.horz.main">View Category</span></a>
              </li>
            </ul>
          </li>


           <li class="<?php echo isset($this->selected_parent_tab) && $this->selected_parent_tab=='Ingredients'?'active open':''; ?>  nav-item"><a href="javascript:;"><i class="fa fa-heart"></i><span class="menu-title" data-i18n="nav.templates.main">Ingredients</span></a>
            <ul class="menu-content">
              <li class="<?php echo($this->selected_tab == 'add_ingredients' ? 'active' : ''); ?>"><a class="menu-item" href="<?php echo base_url('admin/ingredients/manage_view'); ?>"><i></i><span data-i18n="nav.templates.vert.main">Add Ingredients</span></a>
              </li>
              <li class="<?php echo($this->selected_tab == 'view_ingredients' ? 'active' : ''); ?>"><a class="menu-item" href="<?php echo base_url('admin/ingredients/'); ?>"><i></i><span data-i18n="nav.templates.horz.main">View Ingredients</span></a>
              </li>
            </ul>
          </li>


           <li class="<?php echo isset($this->selected_parent_tab) && $this->selected_parent_tab=='products'?'active open':''; ?>  nav-item"><a href="javascript:;"><i class="fa fa-archive"></i><span class="menu-title" data-i18n="nav.templates.main">Products</span></a>
            <ul class="menu-content">
              <li class="<?php echo($this->selected_tab == 'add_products' ? 'active' : ''); ?>"><a class="menu-item" href="<?php echo base_url('admin/products/manage_view'); ?>"><i></i><span data-i18n="nav.templates.vert.main">Add Products</span></a>
              </li>
              <li class="<?php echo($this->selected_tab == 'view_products' ? 'active' : ''); ?>"><a class="menu-item" href="<?php echo base_url('admin/products/'); ?>"><i></i><span data-i18n="nav.templates.horz.main">View Products</span></a>
              </li>
            </ul>
          </li>

           <li class="<?php echo($this->selected_tab == 'drinks' ? 'active' : ''); ?> nav-item"><a href="<?php echo base_url('admin/drinks/index'); ?>"><i class="fa fa-glass"></i><span class="menu-title" data-i18n="nav.templates.main">Drinks</span></a></li>

            <li class="<?php echo($this->selected_tab == 'orders' ? 'active' : ''); ?>  nav-item"><a href="<?php echo base_url('admin/orders/index'); ?>"><i class="fa fa-shopping-cart"></i><span class="menu-title" data-i18n="nav.dash.main">Orders</span><span class="badge badge badge-info badge-pill float-right mr-2"><?php $where['order_status '] = 0; echo countTable('orders',$where); ?></span></a>
          </li>

           <li class="<?php echo($this->selected_tab == 'users' ? 'active' : ''); ?>  nav-item"><a href="<?php echo base_url('admin/users/index'); ?>"><i class="fa fa-users"></i><span class="menu-title" data-i18n="nav.templates.main">Users</span></a></li>

          
        </ul>
      </div>
    </div>
