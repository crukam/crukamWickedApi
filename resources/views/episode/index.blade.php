@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>episodes</h4>
       

        
        <table class="stack">
          <thead>
            <tr>
              <th width="200">episode</th>
              <th width="200">Name</th>
              <th width="200">Air_date</th>
            </tr>
          </thead>
          <tbody>

              @foreach($episodes as $episode  )
                  <tr>
                    <td>{{ $episode->episode }}</td>
                    <td>{{ $episode->name }}</td>
                    <td>{{ $episode->air_date }}</td>
                    <td>
                      <a class="hollow button" href="{{ route('episode_show', [$episode->id ]) }}">SHOW</a>
                    </td>
                    <td>
                    <form action ="{{ route('episodes.destroy', $episode->id) }}" method ="POST">
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
                  <li class="page-item"><a class="page-link" href= "{{route('currentEpisode_page', ['page' => $link->label])}}">{{html_entity_decode($link->label)}}</a></li>
                @endforeach
                
              </ul>
            </nav>
      </div>
    </div>
@endsection