
<div class="d-block mb-2 mt-3">
    <span class="text-success">Content Tags:</span>
    <br/>

    @php
     $colors = ['dark','info','warning'];
    @endphp

    @foreach($tags as $tag)
        <a href="{{ url('records')}}?tag={{$tag->tag_text}}" class="px-3 py-1 mt-1 medium bg-{{ $colors[mt_rand(0,2)] }} text-white rounded">{{ $tag->tag_text }}</a>
    @endforeach

</div>
