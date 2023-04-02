    
    <aside class="side-nav" style="background: {{ $user->color }}" >
    <div class="logo">
        {{-- <img class="logo" src="{{ asset('img/logo.svg') }}" alt=""> --}}
    <br>
        <p>------ TODO APP ------</p>
        <br>
        <p style="display: flex; align-items: center;"><img src="{{asset('storage/'.$user->image)}}" style="border-radius: 50%; height: 80px; width: 80px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-right: 20px;"> Welcome {{ $user->name }}</p>


    </div>
    <ul>
        <li>
            <a href="{{route('create.task')}}">Add task</a>
        </li>
        
        <li>
            <a href="{{route('index')}}">All tasks</a>
        </li>
        <li>
            <a href="{{route('active_tasks')}}">Active tasks</a>
        </li>
        
        <li>
            <a href="{{route('completed_tasks')}}">Completed tasks</a>
        </li>

       

        
       

       
    </ul>

    <div class="logout">
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2a9.985 9.985 0 0 1 8 4h-2.71a8 8 0 1 0 .001 12h2.71A9.985 9.985 0 0 1 12 22zm7-6v-3h-8v-2h8V8l5 4l-5 4z"/></svg>
            logout
            </button>
        
        </form>
    </div>
</aside>