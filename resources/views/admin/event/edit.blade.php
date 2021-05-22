@extends('admin.index')

@section('content')

    <div class="row bg-white">
        <div class="col-6">
            <h2>Edit event</h2>

            <form action="{{ route('admin.event.update', $event->Id) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="form-control-plaintext"><span class="text-danger">*</span> Event title</label>
                    <input type="text" class="form-control" name="Title" value="{{$event->Title}}">
                </div>
                <div class="form-group">
                    <label class="form-control-plaintext"><span class="text-danger">*</span> Load images</label>
                    <div class="input-images">
                        <input type="file" name="image[]" multiple class="custom-file-input" id="customFile" accept="image/jpeg, image/png, image/jpg">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-control-plaintext"><span class="text-danger">*</span> Short description</label>
                    <textarea class="form-control" rows="4" id="ShortDescription" name="ShortDescription" maxlength="255">{{$event->ShortDescription}}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-control-plaintext"><span class="text-danger">*</span> Description</label>
                    <textarea class="form-control" rows="6" id="Description" name="Description" maxlength="700">{{$event->Description}}</textarea>
                </div>
                <div class="form-group col-sm-7">
                    <label class="form-control-plaintext">Event date</label>
                    <input type="text" class="form-control" name="EventDate" id="EventDate" value="{{$event->EventDate}}">
                </div>
                <div class="form-group mt-4">
                    <input type="submit" class="btn btn-primary" value="Save"/>
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
        $('.input-images').imageUploader();
        let preloaded = [
            {id: 1, src: 'https://picsum.photos/500/500?random=1'},
            {id: 2, src: 'https://picsum.photos/500/500?random=2'},
            {id: 3, src: 'https://picsum.photos/500/500?random=3'},
            {id: 4, src: 'https://picsum.photos/500/500?random=4'},
            {id: 5, src: 'https://picsum.photos/500/500?random=5'},
            {id: 6, src: 'https://picsum.photos/500/500?random=6'},
        ];

        $('.input-images-2').imageUploader({
            preloaded: preloaded,
            imagesInputName: 'photos',
            preloadedInputName: 'old'
        });

        $('#EventDate').datepicker();
    </script>
@endsection
