<ul class="sidebar-menu" data-widget="tree">
    <li class="header">@lang('HEADER')</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="{{ setActiveRoute('admin') }}">
      <a href="{{ route('admin') }}">
        <i class="fa fa-dashboard"></i> <span>@lang('Go Home')</span>
      </a>
    </li>
    <li class="treeview {{ setActiveRoute('admin.posts.index') }}">
      <a href="#"><i class="fa fa-bars"></i> <span>@lang('Blog')</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{ setActiveRoute('admin.posts.index') }}">
          <a href="{{ route('admin.posts.index') }}"><i class="fa fa-eye"></i> @lang('View all posts')</a>
        </li>
        <li>
          @if (request()->is('admin/posts/*'))
            <a href="{{ route('admin.posts.index', '#create') }}">
              <i class="fa fa-pencil"></i> @lang('Create new post')
            </a>
          @else
            <a href="#" data-toggle="modal" data-target="#myModal">
              <i class="fa fa-pencil"></i> @lang('Create new post')
            </a>
          @endif
        </li>
      </ul>
    </li>
    <li class="treeview {{ setActiveRoute(['admin.users.index', 'admin.users.create']) }}">
      <a href="#"><i class="fa fa-users"></i> <span>@lang('Users')</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{ setActiveRoute('admin.users.index') }}">
          <a href="{{ route('admin.users.index') }}"><i class="fa fa-eye"></i> @lang('View all users')</a>
        </li>
        <li class="{{ setActiveRoute('admin.users.create') }}">
          <a href="{{ route('admin.users.create') }}">
            <i class="fa fa-pencil"></i> @lang('Create new user')
          </a>
        </li>
      </ul>
    </li>
</ul>