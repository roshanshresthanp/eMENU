@extends('layouts.dashboard')
@section('content')

<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Menu</h3>
              <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                  <li><i class="fa fa-laptop"></i>Add Menu</li>						  	
              </ol>
          </div>
      </div>
        
     
  <div class="panel-body">
      @include('inc.message')
      {{-- {!! Form::open(['url'=>'restaurant/create','method'=>'POST','class'=>"form-horizontal"]) !!} --}}
      {!! Form::open(['action'=>'App\Http\Controllers\MenuController@store','method'=>'POST','class'=>'form-horizontal']) !!}

      
                        {{-- <form class="form-horizontal" method="post" action="RestaurantController@store"> --}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Menu name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" required placeholder="Menu name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select restaurant / caffe</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="restaurant_name" required>
                                        @foreach($rests as $rest)
                                        <option value={{$rest->id}}>{{$rest->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            

         <div class="panel-body">
                        
                        <input type="submit" value="Add" class="btn btn-primary">
                        {{-- {{Form::submit('Submit',['class'=>'btn btn-primary'])}} --}}
                        <input type="reset" value="Cancel" class="btn btn-danger">

                        {{-- <a href="#myModal-1" data-toggle="modal" class="btn  btn-danger">
                            Cancel
                        </a> --}}
                       
                      </div>
                      
                        {{-- </form> --}}
                        {!!Form::close()!!}
                  


            <div class="widget-foot">
              <!-- Footer goes here -->
            </div>
          </div>
        </div>
        
      </div>
                  
    </div> 
        <!-- project team & activity end -->

    </section>
</section>

@endsection