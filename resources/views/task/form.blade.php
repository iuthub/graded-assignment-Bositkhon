<form action="{{ route('task.store') }}" method="post">
    @csrf
    <div id="myDIV" class="header">
        <input type="text" name="title" placeholder="Title...">
        <button type="submit" class="addBtn">Add</button>
    </div>
</form>