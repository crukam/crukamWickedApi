@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Characters</h4>
        <div class="medium-2  columns"><a class="button hollow success" href="{{ route('character_edit') }}">ADD NEW CHARACTER</a></div>

        
        <table class="stack">
          <thead>
            <tr>
              <th width="200">image</th>
              <th width="200">Name</th>
              <th width="200">Status</th>
            </tr>
          </thead>
          <tbody>

              @foreach($characters as $character  )
                  <tr>
                    <td><image src = '{{ $character->image }}'></td>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->status }}</td>
                    <td>
                      <a class="hollow button" href="{{ route('character_show', [$character->id ]) }}">SHOW</a>
                      <a class="hollow button" href="">EPISODES</a>
                    </td>
                  </tr>
              @endforeach
          </tbody>
        </table>
        <h5>Pagination:</h5>
   
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                @foreach($links as $link)
                  <li class="page-item"><a class="page-link" href= "{{$link->url}}">{{$link->label}}</a></li>
                @endforeach
                
              </ul>
            </nav>
      </div>
    </div>
@endsection