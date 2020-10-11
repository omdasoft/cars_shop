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
                    <table class="table table-bordered">
                        <tr>
                            <td>author</td><td>title arabbic</td><td>title english</td><td>content arabic</td><td>content english</td></td>
                        </tr>
                       @foreach($posts as $post)
                            <tr>
                            <td>{{$post->author}}</td><td>{{$post->title}}</td><td>{{$post->title}}</td><td>{{$post->content}}</td><td>{{$post->content}}</td>
<!--                                 <td>{{$post->author}}</td><td>{{$post->translate('ar')->title}}</td><td>{{$post->translate('en')->title}}</td><td>{{$post->translate('ar')->content}}</td><td>{{$post->translate('en')->content}}</td>
 -->                            </tr>
                            {{$post->translate('ar')->title}}
                       @endforeach 
                    </table>
                    </div>
                </div>
            </div> 
        </div>         
    </div><!--main-container-->
             
    </div> <!--col1-layout-->
</div>
@endsection
