<li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{$category['label']}} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @foreach ($category['links'] as $link)
                <a class="dropdown-item" href="{{ route($link['route']) }}">
                    {{$link['label']}}
                </a>
            @endforeach
        </div>
    </li>
