@extends('layouts.default')
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
        input {
      padding: 5px;
    }
    button {
      padding: 10px 20px;
      background-color: #289ADC;
      border: none;
      color: white;
    }
</style>
@section('title', 'index.blade.php')

@section('content')



<table>
  <tr>
    <th>Books</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->title()}}
    </td>
  </tr>
  @endforeach
</table>


@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/book/add" method="post">
  <table>
    @csrf
    <tr>
      <th>tui4_id:</th>
      <td><input type="number" name="tui4_id"></td>
    </tr>
    <tr>
      <th>title:</th>
      <td><input type="text" name="title"></td>
    </tr>
  </table>
  <button>送信</button>
</form>

<table>
  <tr>
    <th>Author</th>
    <th>Book</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->getDetail()}}
    </td>
    <td>
      @if ($item->like != null)
      {{ $item->like->getTitle() }}
      @endif
    </td>
  </tr>
  @endforeach
</table>

<form action="find" method="POST">
  @csrf
  <input type="text" name="input" >
  <input type="submit" value="見つける">
</form>
@if (@isset($item))
<table>
  <tr>
    <th>Data</th>
  </tr>
  <tr>
    <td>
      {{$item->getDetail()}}
    </td>
  </tr>
</table>
@endif


<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->name}}
    </td>
    <td>
      {{$item->age}}
    </td>
    <td>
      {{$item->nationality}}
    </td>
  </tr>
  @endforeach
</table>

@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/add" method="post">
  <table>
    @csrf
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="age">
      </td>
    </tr>
    <tr>
      <th>
        nationality
      </th>
      <td>
        <input type="text" name="nationality">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
  </table>
</form>

@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/edit" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        id
      </th>
      <td>
        <input type="text" name="id" >
      </td>
    </tr>
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="name" >
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="age">
      </td>
    </tr>
    <tr>
      <th>
        nationality
      </th>
      <td>
        <input type="text" name="nationality" >
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>

<form action="/delete" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        id
      </th>
      <td>
        <input type="text" name="id" >
      </td>
    </tr>
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="name" >
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="age" >
      </td>
    </tr>
    <tr>
      <th>
        nationality
      </th>
      <td>
        <input type="text" name="nationality" >
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>
@endsection