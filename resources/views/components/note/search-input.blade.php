<form action="{{ $route }}" method="GET">
    <div class="search_area">
        {{-- request()->get('search') ===> for this don't forget that the url string has the param --}}
        <input type="text" name="search" placeholder="Search..." value="{{ request()->get('search') }}">
        <i class="far fa-search"></i>
    </div>
</form>
