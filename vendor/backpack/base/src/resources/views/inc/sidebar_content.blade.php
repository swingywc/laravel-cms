<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}">
  <i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span>
</a></li>

<?php if (Auth::user()->hasPermissionTo('Pages Edit')) { ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-paperclip"></i>
      <span>Pages, Menu & SEO</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('menu-item') }}">
        <i class="fa fa-list"></i> <span>Site Menu</span>
      </a></li>

      <li><a href="{{ backpack_url('page-settings') }}">
        <i class="fa fa-bar-chart"></i> <span>Pages Setting</span>
      </a></li>
    </ul>
  </li>
<?php } ?>

<?php if (Auth::user()->hasPermissionTo('Users Controls') || Auth::user()->hasPermissionTo('Roles and Permissions Controls')) { ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-group"></i>
      <span>Users & Permissions</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <?php if (Auth::user()->hasPermissionTo('Users Controls')) { ?>
        <li><a href="{{ backpack_url('user') }}">
          <i class="fa fa-user"></i> <span>Users</span>
        </a></li>
      <?php } ?>
      <?php if (Auth::user()->hasPermissionTo('Roles and Permissions Controls')) { ?>
        <li><a href="{{ backpack_url('role') }}">
          <i class="fa fa-group"></i> <span>Roles</span>
        </a></li>
        <li><a href="{{ backpack_url('permission') }}">
          <i class="fa fa-key"></i> <span>Permissions</span>
        </a></li>
      <?php } ?>
    </ul>
  </li>
<?php } ?>

<?php if (Auth::user()->hasPermissionTo('Webmaster Controls')) { ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-cog"></i>
      <span>Webmaster Controls</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'>
        <i class='fa fa-cog'></i> <span>Settings</span>
      </a></li>

      <li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}'>
        <i class='fa fa-hdd-o'></i> <span>Backups</span>
      </a></li>

      <li><a href="{{ backpack_url('log') }}">
          <i class="fa fa-terminal"></i> <span>Logs</span>
      </a></li>
    </ul>
  </li>
<?php } ?>
