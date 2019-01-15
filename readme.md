<li class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Languages
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        @foreach($languages as $key=>$lang)
        <li class="{{ active_class(session('locale') == $key) }}">
            <a href="{{route('locale',$key)}}"> {{ $lang }}</a>
        </li>
        @endforeach
    </ul>
</li>

\Config::set('translatable.locales', config('marvin.languages')); //override translatable configuration