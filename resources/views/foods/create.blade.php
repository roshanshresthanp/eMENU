@extends('layouts.dashboard')
@section('content')

<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i>Foods</h3>
              <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                  <li><i class="fa fa-laptop"></i>Add Food</li>						  	
              </ol>
          </div>
      </div>
        
     
  <div class="panel-body">
      @include('inc.message')
      {{-- {!! Form::open(['url'=>'restaurant/create','method'=>'POST','class'=>"form-horizontal"]) !!} --}}
      {!! Form::open(['action'=>'App\Http\Controllers\FoodController@store','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

      
                        {{-- <form class="form-horizontal" method="post" action="RestaurantController@store"> --}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Food name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" required placeholder="Food name">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="price" required placeholder="Food Price" min="1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select menu</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="menu_name" required>
                                        @foreach($menus as $menu)
                                        <option value={{$menu->id}}>{{$menu->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Upload photo</label>
                                <div class="col-sm-10">
                                    <input type="file" name="food_image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Food description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" placeholder="Food description"></textarea>
                                </div>
                            </div>
                   
                    {{-- <div class="form-group">
                                <label class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact" required placeholder="Restaurant / caffe contact">
                                </div>
                            </div> --}}
                   
                   
                   
                   
      
    

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