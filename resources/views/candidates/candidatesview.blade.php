@extends('layouts.app')


@section('content')

<div class="bootstrap-iso container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">


                <div class="panel-body">

                    <form action="{{ route('pposts.post') }}" method="POST">

                        {{ csrf_field() }}

                    <div class="card">

                        <div class="container-fliud">

                            <div class="wrapper row">

                                <div class="preview col-md-6">

                                    

                                    <div class="preview-pic tab-content">

                                      <div class="tab-pane active" id="pic-1"><img src="{{asset('uploads/images/default.jpg')}}" /></div>

                                    </div>


                                </div>

                                <div class="details col-md-6">

                                    <h3 class="product-title">Representative Vote System</h3>

                                    <div class="rating">

                                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="100" data-step="0.2" value="{{ $post->userAverageRating }}" data-size="xs">

                                        <input type="hidden" name="id" required="" value="{{ $post->id }}">
                                        <input type="hidden" name="user_id" required="" value="{{ $post->id }}">
    
                                        <span class="review-no"></span>

                                        <br/>

                                        <button class="btn btn-success">Submit vote</button>

                                    </div>

                                    <p class="product-description">If you want to have changes done not just told, If you want to have rights that are well secured, If you want to have a president that stand for students and fully uplhold the law, then I advise you to vote for me ! </p>

                                    <h4 class="price"></h4>

                                    <p class="vote"><strong></strong> thanks for voting!<strong></strong></p>

                                    

                                    
                                    <div class="action">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    </form>


                </div>

            </div>

        </div>

    </div>

</div>




@endsection
@section('script')
 <script>
        jQuery(document).ready(function () {
            $("#input-21f").rating({
                starCaptions: function (val) {
                    if (val < 3) {
                        return val;
                    } else {
                        return 'high';
                    }
                },
                starCaptionClasses: function (val) {
                    if (val < 3) {
                        return 'label label-danger';
                    } else {
                        return 'label label-success';
                    }
                },
                hoverOnClear: false
            });
            var $inp = $('#rating-input');

            $inp.rating({
                min: 0,
                max: 5,
                step: 1,
                size: 'lg',
                showClear: false
            });

            $('#btn-rating-input').on('click', function () {
                $inp.rating('refresh', {
                    showClear: true,
                    disabled: !$inp.attr('disabled')
                });
            });


            $('.btn-danger').on('click', function () {
                $("#kartik").rating('destroy');
            });

            $('.btn-success').on('click', function () {
                $("#kartik").rating('create');
            });

            $inp.on('rating.change', function () {
                alert($('#rating-input').val());
            });


            $('.rb-rating').rating({
                'showCaption': true,
                'stars': '3',
                'min': '0',
                'max': '3',
                'step': '1',
                'size': 'xs',
                'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}
            });
            $("#input-21c").rating({
                min: 0, max: 8, step: 0.5, size: "xl", stars: "8"
            });
        });
    </script>
@endsection