@extends('admin.index')

@section('styles')
<style>

    .collapse .show{
        background-color: #a2d6f9;

    }
    .error{
        color: firebrick;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h2>@lang('admin.feedback_title') </h2>
    </div>

</div>
<div class="mt-5">
    <table class="table " id="main_table">

        <thead>
        <tr><th></th><th></th></tr>
        </thead>
        <tbody>

        @foreach($model as $item)
            <tr><td data-toggle="collapse" data-target="#collapse{{$item->Id}}" aria-expanded="false" aria-controls="collapseExample" class="bg-light">

            <p>
                <label class="text-uppercase">{{$item->Title}}</label> - <label>{{$item->user()->first()->email}}</label>

            </p>
            <div class="collapse" id="collapse{{$item->Id}}">
                <div class="card card-body">
                    <label><span class="text-warning" style="font-size: 16px;font-weight: bold">Q:</span>  {{$item->Message}}</label>
                </div>
                @php
                $childs = $item->childs()->get();
                @endphp
                @foreach($childs as $child)
                    <div class="card card-body">
                        <label><span class="text-warning" style="font-size: 16px;font-weight: bold">{{$child->Type==1?"A:":"Q:"}}</span> {{$child->Message}}</label>
                    </div>
                @endforeach


            </div>
            </td>
            <td>
                <a href="#" class="btn btn-sm btn-success float-right" name="answerButton" data-title="{{$item->Title}}" data-ispublic="{{$item->IsPublic}}" data-parentid="{{$item->Id}}" data-productid="{{$item->ProductId}}">
                    @lang('admin.feedback_answer')
                </a>
            </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

@php
$user = auth()->user();
@endphp
<div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('admin.feedback_answer')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.feedback.save')}}" method="post" id="sendAnswerForm" class="form">
                {{csrf_field()}}
                <input type="text" id="Title" name="Title" value=""  class="form-control disabled"/>
                <input type="hidden" id="ParentId" name="ParentId" value=""/>
                <input type="hidden" id="ProductId" name="ProductId" value=""/>
                <input type="hidden" id="UserId" name="UserId" value="{{$user->id}}"/>
                <input type="hidden" id="Type" name="Type" value="1"/>
                <input type="hidden" id="IsPublic" name="IsPublic" value=""/>

                <div class="modal-body">
                    <textarea name="Message" class="form-control" aria-describedby="messageArea"></textarea>
                    <div class="myerror" ></div>

                </div>
                <div class="modal-footer">

                    <a href="javascript:void(0)" type="button" class="btn btn-primary" onclick="sendAnswer();" >@lang('admin.send_answer')</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    <script src="{{asset('libs/validation/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('[name="answerButton"]').click(function(){
                var title = $(this).attr('data-title');
                var is_public = $(this).attr('data-ispublic');
                var parent_id = $(this).attr('data-parentid');
                var product_id = $(this).attr('data-productid');

                $('#Title').val(title);
                $('#IsPublic').val(is_public);
                $('#ParentId').val(parent_id);
                $('#ProductId').val(product_id);

                $('#answerModal').modal('show');


            });

            window.sendAnswer = function(){


                {{--Swal.fire({--}}
                {{--    icon: 'warning',--}}
                {{--    text: '@lang('admin.feedback_have_you_send')',--}}
                {{--    showCancelButton: true,--}}
                {{--    confirmButtonText: '@lang('admin.feedback_send')',--}}
                {{--    confirmButtonColor: '#e3342f',--}}
                {{--}).then((result) => {--}}

                    //if (result.isConfirmed) {
                        $("#sendAnswerForm").validate({
                            errorElement: "span",
                            rules: {
                                Message: {
                                    required: true,

                                }
                            },
                            errorElement : 'div',
                            errorLabelContainer: '.myerror'

                        });
                        $('#sendAnswerForm').submit();
                    //}

                //});
            }




        });
    </script>

    @include('components.table')
@endsection