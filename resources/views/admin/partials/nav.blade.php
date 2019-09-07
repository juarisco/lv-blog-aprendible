<ul class="sidebar-menu" data-widget="tree">
    <li class="header">@lang('HEADER')</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>@lang('Go Home')</span></a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-bars"></i> <span>@lang('Blog')</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#">@lang('View all posts')</a></li>
        <li><a href="#">@lang('Create new post')</a></li>
      </ul>
    </li>
</ul>