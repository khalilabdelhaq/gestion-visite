@extends('layouts.app')
@section('content')
<h3><span class="title">لائحة المرتفقين</span></h3>
              {{ Form::open(['route' => 'visitors.search']) }}
                  <table class="filtre">
                  <tr>  
                   <td>              
                   {{Form::label('cin', 'بطاقة التعريف الوطنية')}}
                   </td>
                   <td>
                    {{Form::text('cin')}}
                  </td>
                  <td>{{Form::submit('بحث',array('class' => 'button'))}}</td>
                  </tr>
                  </table>
                  {{ Form::close() }}
                <div class="tablebox">
                    @if (Session::has('response'))
                      @php
                       $visitors = Session::get('response');
                      @endphp
                      @include('layouts.visitorTable',$visitors)
                    @else
                  @include('layouts.visitorTable',$visitors)
                  @endif
                  
                  
                </div>
                <!-- end block example table -->
                <br />
                

                <div class="clear"></div>
                @endsection