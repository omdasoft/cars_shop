@extends('layouts.site')
@section('content')
<div class="content">
    <div class="page-heading">
        <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <div class="page-title">
                <h2>About Us</h2>
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
                        <p>
                            {{__('about.content')}}
                        </p>
                    </div>
                </div>
            </div> 
        </div>         
    </div><!--main-container-->
             
    </div> <!--col1-layout-->
</div>
@endsection
