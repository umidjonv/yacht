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
        <div class="col-12">
            <h2>@lang('admin.banner_edit_title')</h2>

            <form action="{{ route('admin.banner.save') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}


                <div class="input-images">

                </div>

                <button class="btn btn-primary" type="submit">@lang('admin.banner_save')</button>



            </form>

        </div>
    </div>

@endsection

@section('scripts')
    <script>
        let preloaded = [
        @foreach($model  as $image)
            {id:{{$image->Id}}, src: '{{asset('/storage/banners/'.$image->Image)}}'},

        @endforeach
];

        $('.input-images').imageUploader({
            preloaded:preloaded,
            label:"add image"
        });




    </script>
@endsection
