@extends('admin.index')

@section('styles')
    <style>
        .uploaded-image{
            min-width: 200px;
            min-height: 170px;
        }
        div[name='imageInputs']{
            position: relative;
            top: -40px;
        }
        td{
            padding: 5px;
            vertical-align: top;
        }
        th{
            text-align: center;
        }
    </style>
@endsection

@section('content')

    @php
    $groupCount = 0;
    @endphp
    <div class="row bg-white">
        <div class="col-6">
            <h2>@lang('admin.banner_edit_title')</h2>

            <form action="{{ route('admin.banner.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                    <table class="row" name="group">
                        <tr>
                            <th><label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.banner_load_image')</label></th>
                            <th></th>
                            <th></th>
                        </tr>

                    @if(count($model) == 0)

                        <tr class="">
                            <td>

                                <div class="input-images0" name='imageInputs'>
                                    <input type="file" name="banner{{$groupCount}}.image[]" multiple class="custom-file-input" id="customFile" accept="image/jpeg, image/png, image/jpg">
                                </div>
                            </td>
                            <td>
                                <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.banner_order') </label>
                                <input type="text" name="banner{{$groupCount}}.Order" class="form-control" value="0" >
                            </td>


                        </tr>
                            @php
                                $groupCount = 1;
                            @endphp



                        @else
                        @foreach($model as $banner)
                            <tr class="">
                                <td>

                                    <div class="input-images{{$groupCount}}" name='imageInputs'>

                                    </div>
                                </td>
                                <td>
                                    <label class="form-control-plaintext"><span class="text-danger">*</span> @lang('admin.banner_order') </label>
                                    <input type="text" name="{{$groupCount}}.Order" class="form-control" value="{{$banner->Order}}" >
                                </td>
                                @if($groupCount!=0) <td><input type='button' class='btn btn-danger' name='delete_group' value="@lang('admin.banner_delete')"/> </td> @endif
                            </tr>


                                @php
                                    $groupCount++;
                                @endphp
                            @endforeach


                    @endif
                    </table>
                <div class="row">
                    <a href="javascript:void(0)" class="btn btn-success col-5" name="add_banner" onclick="add_banner()"><span class="fa fa-plus"></span> add banner</a>
                    <div class="col-1"></div>
                    <input type="submit" class="btn btn-primary col-5" value="Save"/>
                </div>



<br>
                <div class="">

                </div>

            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

@endsection

@section('scripts')
    <script>

        @if(count($model))
            @php
                $indexPreload = 0;
            @endphp
            @foreach($model as $banner)
                function load{{$indexPreload}}(){
                    let preloaded = [
                        {id: {{$indexPreload+1}}, src: '{{asset('/storage/banners/'.$banner->Image)}}'},
                    ];
                    var selector = '.input-images{{$indexPreload}}';
                    $(selector).imageUploader({

                        preloaded:preloaded,
                        maxFiles: 1,
                        label:"add image"
                    });

                }

            load{{$indexPreload}}();
                    @php
                        $indexPreload++;
                    @endphp


            @endforeach
        @else
                    $('.input-images0').imageUploader({
                        maxFiles: 1,
                        label:"add image"
                    });
        @endif




        var groupCount = {{$groupCount}};
        function add_banner(){
            let html = "" +
                "<tr name='imgrow'>" +
                "                            <td>" +

                "                                <div class='input-images"+groupCount+"' name='imageInputs'>" +
                "                                    <input type='file' name='"+groupCount+".image[]' multiple class='custom-file-input' id='customFile' accept='image/jpeg, image/png, image/jpg'>" +
                "                                </div>" +
                "                            </td>" +
                "                            <td>" +
                "<label class='form-control-plaintext'><span class='text-danger'>*</span> @lang('admin.banner_order') </label>"+
                "                                <input type='text' name='"+groupCount+".Order' class='form-control' value='0' >" +
                "</td>"+
                (groupCount!=0 ? "<td><input type='button' class='btn btn-danger' name='delete_group' value='@lang('admin.banner_delete')'/> </td>":"")+

                "                        </tr>";

            $('[name="group"]').append(html);

            var selector = '.input-images'+groupCount;
            $(selector).imageUploader({
                maxFiles: 1,
                label:"add image"
            });
            groupCount++;
        }


        $('body').on('click','[name="delete_group"]', function(){
            $(this).parent().parent().remove();

        });



    </script>
@endsection
