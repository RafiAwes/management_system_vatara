@extends('admin.master')
@section('admin-content')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>Tables</h2>
             </div>
          </div>
       </div>
       <!-- row -->
       <div class="row">
          <!-- table section -->
          <div class="col-md-6">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Admitted Student</h2>
                   </div>
                </div>
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                       <table class="table table-hover">
                          <thead>
                             <tr>
                                <th>Months</th>
                                <th>{{$prevYear}}</th>
                                <th>{{$year}}</th>
                             </tr>
                          </thead>
                          <tbody>
                            @foreach ($reportDatas as $reportData )
                            <tr>
                                <td>{{$reportData->month}}</td>
                                <td>{{$reportData->previous_students_admitted}}</td>
                                <td>{{$reportData->current_students_admitted}}</td>
                             </tr>
                            @endforeach
                          </tbody>
                       </table>
                    </div>
                 </div>
             </div>
          </div>
          <!-- table section -->
          <div class="col-md-6">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Graduated Students</h2>
                   </div>
                </div>
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                       <table class="table table-hover">
                        <thead>
                            <tr>
                               <th>Months</th>
                               <th>{{$prevYear}}</th>
                               <th>{{$year}}</th>
                            </tr>
                         </thead>
                         <tbody>
                           @foreach ($reportDatas as $reportData )
                           <tr>
                               <td>{{$reportData->month}}</td>
                               <td>{{$reportData->previous_students_graduated}}</td>
                               <td>{{$reportData->current_students_graduated}}</td>
                            </tr>
                           @endforeach
                         </tbody>
                       </table>
                    </div>
                 </div>
             </div>
          </div>
          <!-- table section -->
          <div class="col-md-6">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Revenue</h2>
                   </div>
                </div>
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                       <table class="table table-hover">
                        <thead>
                            <tr>
                               <th>Months</th>
                               <th>{{$prevYear}}</th>
                               <th>{{$year}}</th>
                            </tr>
                         </thead>
                         <tbody>
                           @foreach ($reportDatas as $reportData )
                           <tr>
                               <td>{{$reportData->month}}</td>
                               <td>{{$reportData->previous_revenue}}</td>
                               <td>{{$reportData->current_revenue}}</td>
                            </tr>
                           @endforeach
                         </tbody>
                      </table>
                    </div>
                </div>
             </div>
          </div>
          <!-- table section -->
          <div class="col-md-6">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Expenses</h2>
                   </div>
                </div>
                <div class="table_section padding_infor_info">
                   <div class="table-responsive-sm">
                      <table class="table table-hover">
                        <thead>
                            <tr>
                               <th>Months</th>
                               <th>{{$prevYear}}</th>
                               <th>{{$year}}</th>
                            </tr>
                         </thead>
                         <tbody>
                           @foreach ($reportDatas as $reportData )
                           <tr>
                               <td>{{$reportData->month}}</td>
                               <td>{{$reportData->previous_expenses}}</td>
                               <td>{{$reportData->current_expenses}}</td>
                            </tr>
                           @endforeach
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- footer -->
    <div class="container-fluid">
       <div class="footer">
          <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
       </div>
    </div>
 </div>
@endsection
