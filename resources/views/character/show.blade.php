@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Character number {{ $character->id }}</h4>
        <table class="stack">
          <thead>
            <tr>
              <th width="200">field</th>
              <th width="200">Record</th>
            </tr>
          </thead>
          <tbody>

              
                  <tr>
                    <td>Image</td> 
                    <td><image src = '{{ $character->image }}'></td>
                 </tr>
                 <tr>
                    <td>name</td> 
                    <td>{{ $character->name }}</td>
                 </tr>
                 <tr>
                    <td>status</td> 
                    <td>{{ $character->status }}</td>
                 </tr>
                 <tr>
                    <td>species</td> 
                    <td>{{ $character->species}}</td>
                 </tr>
                 <tr>
                    <td>type</td> 
                    <td>{{ $character->type }}</td>
                 </tr>
                 <tr>
                    <td>gender</td> 
                    <td>{{ $character->gender }}</td>
                 </tr>
                 <tr>
                    <td>origin</td> 
                    <td><{{ $origin }}></td>
                 </tr>
                 <tr>
                    <td>location</td> 
                    <td><{{ $location }}></td>
                </tr>
              
          </tbody>
        </table>
        
      </div>
    </div>
@endsection