<ul class="lists">
    @if(count ($cities) > 0)
        @foreach($cities as $city)
            <li class="list">
                <div class="float-start">
                    <span class="title">{{ $city -> name }}</span>
                </div>
            </li>
        @endforeach
    @else
        <li class="list">
            <div class="float-start">
                <span class="title">No city found.</span>
            </div>
        </li>
    @endif
</ul>