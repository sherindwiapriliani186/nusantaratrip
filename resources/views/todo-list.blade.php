@extends('template.layout')

@section('content')
</div>  
<div class="main">
    <div>
      <form name="toDoList">
        <input type="text" name="ListItem"/>
      </form>
      <div id="button">Add</div>
      <br/>
      <ol></ol>
      <p id="button" class="hapus">Hapus semua</p>
    </div>
</div>

@endsection