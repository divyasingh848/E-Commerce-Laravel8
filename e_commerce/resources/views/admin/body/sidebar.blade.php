
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
<div class="app-sidebar__user">
  
</div>
<ul class="app-menu">
  <li class="treeview">
    <a class="app-menu__item" href="#" data-toggle="treeview"
      ><i class="app-menu__icon fa fa-circle-o"></i
      ><span class="app-menu__label">Dashboard</span
      ><i class="treeview-indicator fa fa-angle-right"></i
        ></a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="{{route('admin.profile')}}"
            ><i class="icon fa fa fa-dash"></i> Admin Profile</a
          >
        </li>
      </li>
  </ul>
  <li class="treeview">
    <a class="app-menu__item" href="#" data-toggle="treeview"
      ><i class="app-menu__icon fa fa-circle-o"></i
      ><span class="app-menu__label">Brand</span
      ><i class="treeview-indicator fa fa-angle-right"></i
    ></a>
    <ul class="treeview-menu">
      <li>
        <a class="treeview-item" href="{{route('all.brand')}}"
          ><i class="icon fa fa-circle-dash"></i> All Brand</a
        >
      </li>
    </li>
</ul>
 
<li class="treeview">
  <a class="app-menu__item" href="#" data-toggle="treeview"
    ><i class="app-menu__icon fa fa-circle-o"></i
    ><span class="app-menu__label">Category</span
    ><i class="treeview-indicator fa fa-angle-right"></i
  ></a>
  <ul class="treeview-menu">
    <li>
      <a class="treeview-item" href="{{route('all.category')}}"
        ><i class="icon fa fa-dash"></i> All Category</a
      >
    </li>
  </li>
</ul>

<li class="treeview">
  <a class="app-menu__item" href="#" data-toggle="treeview"
    ><i class="app-menu__icon fa fa-circle-o"></i
    ><span class="app-menu__label">Product</span
    ><i class="treeview-indicator fa fa-angle-right"></i
  ></a>
  <ul class="treeview-menu">
    <li>
      <a class="treeview-item" href="{{route('add.product')}}"
        ><i class="icon fa fa fa-dash"></i> Add Products</a
      >
    </li>
    <li>
    
      <a class="treeview-item" href="{{route('manage.product')}}"
        ><i class="icon fa fa fa-dash"></i> Manage Products</a
      >
    </li>
  </li>
</ul>

<li class="treeview">
  <a class="app-menu__item" href="#" data-toggle="treeview"
    ><i class="app-menu__icon fa fa-circle-o"></i
    ><span class="app-menu__label">Store Setting</span
    ><i class="treeview-indicator fa fa-angle-right"></i
  ></a>
  <ul class="treeview-menu">
    <li>
      <a class="treeview-item" href="{{route('store.setting')}}"
        ><i class="icon fa fa fa-dash"></i>Setting</a
      >
    </li>
    
  </li>
</ul>

<li class="treeview">
  <a class="app-menu__item" href="#" data-toggle="treeview"
    ><i class="app-menu__icon fa fa-circle-o"></i
    ><span class="app-menu__label">Shipping</span
    ><i class="treeview-indicator fa fa-angle-right"></i
  ></a>
  <ul class="treeview-menu">
    <li>
      <a class="treeview-item" href="{{route('view.shipping')}}"
        ><i class="icon fa fa fa-dash"></i>Shipping-Type_Charges</a
      >
    </li>
  </li>
</ul>

  <li class="treeview">
    <a class="app-menu__item" href="#" data-toggle="treeview"
      ><i class="app-menu__icon fa fa-file-text"></i
      ><span class="app-menu__label">All Report</span
      ><i class="treeview-indicator fa fa-angle-right"></i
    ></a>
    <ul class="treeview-menu">
      <li>
        <a class="treeview-item" href="{{route('All.report')}}"
          ><i class="icon fa fa-dash"></i>Report</a
        >
      </li>
    </ul>
  </li>
</ul>
</aside>