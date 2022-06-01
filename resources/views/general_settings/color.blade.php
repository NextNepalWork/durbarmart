@extends('layouts.app')

@section('content')

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Color Settings')}}</h3>
            </div>

            @php
                $colors=\App\Color::get();
                // dd($colors);
            @endphp
            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('generalsettings.color.store') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <div class="panel-body">
                    <div class="row">
                        @foreach ($colors as $color)
                            <div class="color-radio col-sm-3">
                                <label>
                                    <input type="radio" name="frontend_color" class="color-control-input" value="{{$color->id}}" @if(\App\GeneralSetting::first()->frontend_color == $color->id) checked @endif>
                                    <span class="color-control-box" style="background:{{$color->code}}"></span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-purple" type="submit">{{__('save')}}</button>
                </div>
            </form>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>

@endsection
