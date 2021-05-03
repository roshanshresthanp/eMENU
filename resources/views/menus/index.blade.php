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
                  <li><i class="fa fa-laptop"></i>View menu</li>						  	
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
                        
                    
                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        {{-- <tr><th><i class="icon_profile"></i> Restaurant Id</th> --}}
                           <th><i class="icon_profile"></i> Menu Name</th>
                           <th><i class="icon_pin_alt"></i> Menu Parent</th>
                            <th><i class="icon_mobile"></i> Caffe Name</th>
                          
                           {{-- <th><i class="icon_mail_alt"></i> Email</th> --}}
                         
                           {{-- <th><i class="icon_mobile"></i> Status</th> --}}
                           <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                        @if (count($menus)>0)
                        @foreach($menus as $menu)
                        <tr>
                          {{-- <td>{{$rest->id}}</td> --}}
                           <td>{{$menu->name}}</td>
                           <td>@foreach($rests as $rest)
                               @if(($menu->restaurant_id) === ($rest->id))
                               {{$rest->name}}
                               @endif
                               @endforeach
                            </td>
                           {{-- <td>{{$menu->contact}}</td> --}}
                           <td>email</td>
                           <td>
                            <div class="btn-group">
                                {!!Form::open(['action'=>['App\Http\Controllers\MenuController@destroy',$menu->id],'method'=>'POST']) !!}

                                <a class="btn btn-success" href="{{url('menu')}}/{{$menu->id}}/edit"><i class="icon_plus_alt2"></i></a>
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
                        @endif                          
                     </tbody>
                  </table>
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