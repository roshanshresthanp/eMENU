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
                  <li><i class="fa fa-laptop"></i>Edit Menu</li>						  	
              </ol>
          </div>
      </div>
        
     
  <div class="panel-body">
      {{-- {!! Form::open(['url'=>['restaurant/{{$rest->id}}'],'method'=>'POST','class'=>"form-horizontal"]) !!} --}}
      
      {!! Form::open(['action'=>['App\Http\Controllers\MenuController@update',$menu->id],'method'=>'POST','class'=>"form-horizontal"]) !!}
      
      {{-- <form action=”App\Http\Controllers\BookController@store” method=”POST” enctype=”multipart/form-data”> --}}

      
                        {{-- <form class="form-horizontal" method="post" action="App\Http\Controllers\RestaurantController@store" method="POST">  --}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" readonly value="{{$menu->id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Menu name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name"  placeholder="Menu name" value="{{$menu->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select restaurant / caffe</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="restaurant_name" required>
                                       
                                        @foreach($rests as $rest)
                                            @if(($menu->restaurant_id) === (($rest->id)))
                                            <option value="{{$rest->id}}" selected>{{$rest->name}}</option>
                                            {{-- {{$rest->name}} --}}
                                            @endif
                                            <option value="{{$rest->id}}" >{{$rest->name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                
                   
                   
                   
                   {{Form::hidden('_method','PUT')}}
      
    

         <div class="panel-body">
                        
                        {{-- <input type="submit" value="Update" class="btn btn-primary"> --}}
                        {{Form::submit('Update',['class'=>'btn btn-primary'])}}
                        <input type="reset" value="Cancel" class="btn btn-danger">
                        {{-- <input type="submit" value="Update" class="btn btn-success"> --}}

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