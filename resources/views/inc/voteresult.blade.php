  <div class="well well-lg">
               <h3> Vote Result</h3>
                    <table class="table table-bordered"">
                        <tr>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Department</th>
                            <th width="400px">Result</th>
                        </tr>
                        @foreach($candidate as $value)
                        <tr>
                                <td>{{ $value->fname }}</td>
                                <td>{{ $value->lname }}</td>
                                <td>{{ $value->department }}</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-sm progress-bar-striped " style="width:<?php 
                                   $id=$value->ratingPercent(100);
                                   echo $id;  ?>%">{{$value->ratingPercent(100)}}</div>
                                    </div>
                                </td>
                              </tr>
                        @endforeach

                      </table>
                      </div>
