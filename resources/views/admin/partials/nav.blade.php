<ul class="sidebar-menu" data-widget="tree">
    <li class="header">@lang('HEADER')</li>
    <!-- Optionally, you can add icons to the links -->
    <li {{ request()->is('admin') ? 'class=active' : '' }}>
      <a href="{{ route('dashboard') }}">
        <i class="fa fa-dashboard"></i> <span>@lang('Go Home')</span>
      </a>
    </li>
    <li class="treeview {{ request()->is('admin/posts') ? 'active' : '' }}">
      <a href="#"><i class="fa fa-bars"></i> <span>@lang('Blog')</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li {{ request()->is('admin/posts') ? 'class=active' : '' }}>
          <a href="{{ route('admin.posts.index') }}">@lang('View all posts')</a>
        </li>
        <li>
          <a href="#">@lang('Create new post')</a>
        </li>
      </ul>
    </li>
</ul>