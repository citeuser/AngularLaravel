@if(Session::has('success'))
<div>
	{{ Session::get('success') }}
</div>


<div>
<Strong>TITLE :</Strong>{{ $post->title }}<br>
<Strong>BODY:</Strong>{{ $post->body }}

</div>
@endif

