@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>locations</h4>
        

        
        <table class="stack">
          <thead>
            <tr>
              <th width="200">Name</th>
              <th width="200">Type</th>
              <th width="200">Dimension</th>
            </tr>
          </thead>
          <tbody>

              @foreach($locations as $location  )
                  <tr>
                    <td>{{ $location->name }}</td>
                    <td>{{ $location->type }}</td>
                    <td>{{ $location->dimension }}</td>
                    <td>
                      <a class="hollow button" href="{{ route('location_show', [$location->id ]) }}">SHOW</a>
                      
                    </td>
                    <td>
                    <form action ="{{ route('locations.destroy', $location->id) }}" method ="POST">
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