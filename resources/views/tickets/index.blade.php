@extends('layouts.master')
@section('title', 'View all tickets')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
                @endif
                <div class="card-header">{{ __('Tickets') }}</div>    
                @if ($tickets->count() <= 0 ) 
               <p class="alert alert-danger"> There is no tickets. </p>
               @else
                  <table class="table">
                     <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Status</th>
                        </tr>
                     </thead>
                     <tbody>
                         @foreach($tickets as $ticket)
                          <tr>
                            <td>{!! $ticket->id !!}</td>
                            <td> <a href="{{ route('ticket.show', $ticket->slug) }}">{!! $ticket->title !!}</a> </td>
                            <td>{!! $ticket->status ? 'Pending':'Answered' !!}</td>
                          </tr>
                          @endforeach
                     </tbody>
                  </table>
                  @endif
            </div> 
        </div>
    </div>
</div>
@endsection