<div class="container">
    <strong> Employee Name</strong> <br/>
    @foreach($users as $user)
    {{$user->name}}<br/>
    @endforeach
</div>
{{ $users->links()}}