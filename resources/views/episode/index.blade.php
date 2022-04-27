@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>episodes</h4>
        <div class="medium-2  columns"><a class="button hollow success" href="{{ route('episode_edit') }}">ADD NEW episode</a></div>

        
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
                      <a class="hollow button" href="">CHARACTERS</a>
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