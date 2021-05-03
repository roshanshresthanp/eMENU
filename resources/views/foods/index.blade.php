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
                  <li><i class="fa fa-laptop"></i>View Foods</li>						  	
              </ol>
          </div>
      </div>
        
      <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    @include('inc.message')
                </div>
                <section class="panel">
                    {{-- <header class="panel-heading">
                        Advanced Table
                    </header> --}}
                        
                    @if (count($foods)>0)
                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        {{-- <tr><th><i class="icon_profile"></i> Food Id</th> --}}
                           <th><i class="icon_profile"></i>Food name</th>
                           <th><i class="icon_mobile"></i>Price</th>
                           <th><i class="icon_profile"></i>Menu</th>
                           <th><i class="icon_pin_alt"></i>Photo</th>
                           <th><i class="icon_pin_alt"></i>Food description</th>


                           {{-- <th><i class="icon_mail_alt"></i> Email</th> --}}
                         
                           <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                        
                        @foreach($foods as $food)
                        <tr>
                          {{-- <td>{{$rest->id}}</td> --}}
                           <td>{{$food->name}}</td>
                           <td>{{$food->price}}</td>
                           <td>@foreach($menus as $menu)
                               @if(($food->menu_id) === ($menu->id))
                               {{$menu->name}}
                               @endif
                               @endforeach
                            </td>
                            <td>{{$food->food_image}}</td>
                           <td>{{$food->description}}</td>
                           {{-- <td>email</td> --}}
                           <td>
                            <div class="btn-group">
                                {!!Form::open(['action'=>['App\Http\Controllers\FoodController@destroy',$food->id],'method'=>'POST']) !!}

                                <a class="btn btn-success" href="{{url('menu')}}/{{$food->id}}/edit"><i class="icon_plus_alt2"></i></a>
                                {{-- <input type="submit" class="btn btn-primary"> --}}
                                {{-- <input type="submit" class="btn btn-primary" value=""><i class="icon_check_alt2"></i></a> --}}
                            
                                {{Form::hidden('_method','DELETE')}}
                                
                                <input type="submit" class="btn btn-danger" value="">
                                {{-- {{Form::submit('',['class'=>'btn btn-danger']) }} --}}
                                <i class="icon_close_alt2">
                                </i>
                            </a>
                                {!!Form::close()!!}
                                
                                
                            </div>
                            </td>
                        </tr> 
                        @endforeach                   
                     </tbody>
                  </table>
                  @else
                    <div class="alert alert-danger">No foods to show</div>
                @endif
                </section>
            </div>
        </div>
        
    

            </div>
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