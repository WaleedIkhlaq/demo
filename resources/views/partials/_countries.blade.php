<ul class="lists" id="countries">
    @if(count ($countries) > 0)
        @foreach($countries as $country)
            <li class="list">
                <div class="float-start">
                    <sub>{{ $country -> sortname }}</sub>
                    <span class="title">{{ $country -> name }}</span>
                    <span class="badge rounded-pill bg-light text-dark">{{ $country -> sortname }}</span>
                </div>
                <div class="float-end">
                    <a href="javascript:void(0)" title="Click to load states"
                       data-id="{{ $country -> id }}" class="countryBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" class="bi bi-arrow-right-circle-fill"
                             viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                    </a>
                </div>
            </li>
        @endforeach
    @endif
</ul>