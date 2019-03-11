<div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
    @foreach($teams as $team)
    <li>
    <a href="{{ route('side-bar',['id' => $team->id]) }}"> {{ $team->name}}</a>       
    </li>
    @endforeach
    </ol>
</div> 

