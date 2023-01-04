@extends('layouts.master')
@section('title', 'Edit a Ticket')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit your Ticket') }}</div>    

                <div class="card-body">
                    <form method="POST" action="">
                        <div class="row mb-3">
                        @foreach($errors->all() as $error)
                                 <p class=" alert alert-danger" > {{ $error }} </p>
                            @endforeach
                            
                            @if(session()->has('status'))
                            <div class="alert alert-success">
                                {{ session()->get('status') }}
                            </div>
                            @endif
                             
                            @csrf

                            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>     
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{!! $ticket->title !!}" placeholder="Title" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="content" class="col-md-4 col-form-label text-md-end">Content</label>
                            <div class="col-md-6">
                                
                                <textarea name="content" id="content" class="form-control" cols="20" rows="5">{!! $ticket->content !!}</textarea>
                             <span class=" help-block" >Contect us for help</span>
                            </div>
                        </div>
                           
                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end"></label>
                             Do you wish to close this ticket ?
                            <input type="checkbox" name="status" {!! $ticket->status ? "": "checked" !!}>                      
                              <div class="col-md-6">
                            </div>
                        </div>   

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <button class="btn btn-primary">
                                    {{ __('Cancel') }}
                                </button>
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection