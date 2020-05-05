@extends('layouts.app')

@section('content')

@include('task.form')

<ul id="myUL">
    @foreach(auth()->user()->tasks as $task)
        <li>
            <div class="task">
                {{ $task->title }}
            </div>
            <div class="action">
                <a href="{{ route('task.edit', ['task' => $task->id]) }}"><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <form action="{{ route('task.destroy', $task->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="fa fa-trash-alt"></i></button>
                </form>
            </div>
        </li>
    @endforeach
</ul>

@endsection