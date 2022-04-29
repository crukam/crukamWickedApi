@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-6 columns">
        <h4>Wicked API App {{ $version }}</h4>
        <img class="thumbnail" src="images/wickedApiWelcome.png">
      </div>
      <div class="medium-6 large-5 columns">
        <h4>Encyclopedy Ricky and Morty Api</h4>
        <p><strong>Base url:</strong><a href="https://afternoon-brushlands-59949.herokuapp.com/" target="_blank" ref="nofolow noopener noreferrer"> https://afternoon-brushlands-59949.herokuapp.com/</a></p>
        <h5>API end points </h5>
        <table>
            <th>Method</th>
            <th>URI </th>
            <th>Name</th>
            <th>Action</th>
            
            <tr>
                <td>GET|HEAD</td>
                <td>api/characters</td>
                <td>characters.index </td>
                <td>App\Http\Controllers\CharacterController@index </td>
           </tr>
            <tr>
                <td>DELETE</td>
                <td>api/characters/{character}</td>
                <td>characters.destroy </td>
                <td>App\Http\Controllers\CharacterController@destroy </td>
            </tr>
            <tr>
                <td> GET|HEAD</td>
                <td> api/episodes/{episode} </td>
                <td>episodes.show </td>
                <td>App\Http\Controllers\EpisodeController@show </td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td>api/episodes/{episode}</td>
                <td>episodes.destroy </td>
                <td>App\Http\Controllers\EpisodeController@destroy </td>
            </tr>
            <tr>
                <td>GET|HEAD</td>
                <td>api/locations</td>
                <td>locations.index </td>
                <td>App\Http\Controllers\LocationController@index </td>
            </tr>
            <tr>
                <td>GET|HEAD</td>
                <td>api/locations/{location}</td>
                <td>locations.show </td>
                <td>App\Http\Controllers\LocationController@show </td>
            </tr>
            <tr>
                <td>GET|HEAD</td>
                <td>api/episodes</td>
                <td>episodes.index </td>
                <td>App\Http\Controllers\EpisodeController@index </td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td>api/locations/{location}</td>
                <td>locations.destroy </td>
                <td>App\Http\Controllers\locationController@destroy </td>
            </tr>
        </table>
        @if (session('success'))
        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Sucess Message</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>{{ session('success') }}</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"></button>
                  <button type="button" class="btn btn-primary"></button>
                </div>
              </div>
            </div>
        </div>
        @endif
        
      </div>
    </div>
   
@endsection