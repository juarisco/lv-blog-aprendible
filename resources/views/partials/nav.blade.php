<nav>
    <ul class="container-flex space-center list-unstyled">
        <li>
            <a href="{{ route('pages.home') }}" class="text-uppercase {{ setActiveRoute('pages.home') }}">
                @lang('home')
            </a>
        </li>
        <li>
            <a href="{{ route('pages.about') }}" class="text-uppercase {{ setActiveRoute('pages.about') }}">
                @lang('about')
            </a>
        </li>
        <li>
            <a href="{{ route('pages.archive') }}" class="text-uppercase {{ setActiveRoute('pages.archive') }}">
                @lang('archive')
            </a>
        </li>
        <li>
            <a href="{{ route('pages.contact') }}" class="text-uppercase {{ setActiveRoute('pages.contact') }}">
                @lang('contact')
            </a>
        </li>
    </ul>
</nav>