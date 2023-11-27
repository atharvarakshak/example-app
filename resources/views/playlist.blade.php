<x-layouts.main pageName="playlists/{{$playlistId}}">

@section('content')
<x-songs-list :songs="$songs">
</x-songs-list>
@endsection

</x-layouts.main>