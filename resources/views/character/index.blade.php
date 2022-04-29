@extends('layouts.app')

@section('content')

<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Characters</h4>
        
          

        
        <table class="stack">
          <thead>
            <tr>
              <th width="200">image</th>
              <th width="200">Name</th>
              <th width="200">Status</th>
              <th width="200">Episodes</th>
              <th width="200">Details</th>
            </tr>
          </thead>
          <tbody>

              @foreach($characters as $character  )
                  <tr>
                    <td><image src = '{{ $character->image }}'></td>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->status }}</td>
                    <td>
                     <a class="hollow button" href="{{ route('characters.show',['character' => $character->id]) }}">SHOW</a>
                    </td>
                    <td>
                     <form action ="{{ route('characters.destroy', $character->id) }}" method ="POST">
                        @csrf
                        @method("DELETE")
                        <div class="form-item center">
                          <button type="submit" class=" hollow button btn-danger">Delete</button>
                        </div>
                      </form>  
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