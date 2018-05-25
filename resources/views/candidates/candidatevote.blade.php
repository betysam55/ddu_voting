@extends('layouts.app')


@section('content')
<div class="bootstrap-iso container">
<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-heading">Presidential Vote</div>


                <div class="panel-body">


                    <table class="table table-bordered">

                        <tr>

                            <th>Id</th>

                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Department</th>
                            <th width="400px">Result</th>

                            <th width="100px">Vote</th>

                        </tr>

                        @if($posts->count())
                        
                            @foreach($posts as $post)

                            <tr>

                                <td>{{ $post->id }}</td>

                                <td>{{ $post->fname }}</td>
                                <td>{{ $post->lname }}</td>
                                <td>{{ $post->department }}</td>
                                <td>
                                
                                   {{ $post->ratingPercent(100) }}
                                  
                                </td>
                                
                                <td>
                                    
                                    <a href="{{ route('pposts.show',$post->id) }}" class="btn btn-primary btn-sm">View</a>
                                </td>

                            </tr>

                            @endforeach

                        @endif

                    </table>


                </div>

            </div>

        </div>

    </div>

</div>
</div>
@endsection