@extends('layouts.site')
@section('content')
<div class="content">
    <div class="page-heading">
        <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <div class="page-title">
                <h2>New Post</h2>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">     
              
    <div class="main container"> 
        <div class="row">                    
            <div class="std">
                <div class="wrapper_bl" style="margin-top: 1px;">
                    <div class="form_background">
                    <form class="form" method="POST" action="{{route('post.create')}}">
                    @csrf
                        @php
                        $locales = config('translatable.locales') ;
                        //$locales=['ar','en','tr'];
                        @endphp
                        <div class="form-group">
                        <input type="text" class="form-control" name="author"
                        placeholder="author" value="{{ old('author') }}">
                        </div>
                        @foreach ( $locales as $locale )
                        <div class="form-group">
                        <input type="text" class="form-control" name="{{ $locale }}[title]"
                        placeholder="title in {{ $locale }}" value="{{ old( $locale.'.title') }}">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="{{ $locale }}[content]"
                        placeholder="content in {{ $locale }}" value="{{ old( $locale.'.content') }}">
                        </div>
                        @endforeach

                        <input type="submit" name ="submit" value="save" class="btn btn-primary">
                    </form>
                    </div>
                </div>
            </div> 
        </div>         
    </div><!--main-container-->
             
    </div> <!--col1-layout-->
</div>
@endsection
