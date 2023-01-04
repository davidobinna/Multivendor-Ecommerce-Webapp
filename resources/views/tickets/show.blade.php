@extends('layouts.master')
@section('title', 'view a ticket')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{!! $ticket->title !!}</div>    
                <p> <strong>Status</strong>: {!! $ticket->status ? 'Pending..' : 'Answered' !!} </p>
                    <p>{!!  $ticket->content !!}</p>

                    <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <form action="{{ route('ticket.delete', $ticket->slug) }}" method="post">
                                    @csrf
                                    <a href="{{ route('ticket.edit', $ticket->slug) }}" class="btn btn-info">{{ __('Edit') }}</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                    </div>
                     
                     @foreach($comments as $comment)
                        <div class="card">
                        <div class="card-body">
                            <div class="content">
                               <p>Comments: </p>
                                <div class="alert alert-info">
                                {{ $comment->content }}
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach

                    <div class="card-body">
                    <form method="POST" action="{{ route('ticket.comment') }}">
                    @csrf
                    <input type="hidden" name="post_id" id="" value="{{ $ticket->id }}">
                        <div class="row mb-3">
                        @foreach($errors->all() as $error)
                                 <p class=" alert alert-danger" > {{ $error }} </p>
                            @endforeach
                            
                            @if(session()->has('status'))
                            <div class="alert alert-success">
                                {{ session()->get('status') }}
                            </div>
                            @endif
                            
                        <div class="row mb-3">
                            <label for="comment" class="col-md-4 col-form-label text-md-end">Post a Comment</label>
                            <div class="col-md-6">
                                <textarea name="comment" id="comment" class="form-control" cols="20" rows="5"></textarea>
                             <span class=" help-block" >ask us any question </span>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <button class="btn btn-primary">
                                    {{ __('Cancel') }}
                                </button>
                                <button type="submit" class="btn btn-success">
                                    {{ __('Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection 