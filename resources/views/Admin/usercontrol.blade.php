<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.adminlayout')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bd-example-modal-xl">Add New User</button>
              <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                 <div class="modal-content">
                    @include('Admin.userform')
                 </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title ">Simple Table</h4>
                    <p class="card-category"> Here is a subtitle for this table</p>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>
                            ID
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Country
                          </th>
                          <th>
                            City
                          </th>
                          <th>
                            Salary
                          </th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>
                              Dakota Rice
                            </td>
                            <td>
                              Niger
                            </td>
                            <td>
                              Oud-Turnhout
                            </td>
                            <td class="text-primary">
                              $36,738
                            </td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>
                              Minerva Hooper
                            </td>
                            <td>
                              Curaçao
                            </td>
                            <td>
                              Sinaai-Waas
                            </td>
                            <td class="text-primary">
                              $23,789
                            </td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>
                              Sage Rodriguez
                            </td>
                            <td>
                              Netherlands
                            </td>
                            <td>
                              Baileux
                            </td>
                            <td class="text-primary">
                              $56,142
                            </td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>
                              Philip Chaney
                            </td>
                            <td>
                              Korea, South
                            </td>
                            <td>
                              Overland Park
                            </td>
                            <td class="text-primary">
                              $38,735
                            </td>
                          </tr>
                          <tr>
                            <td>
                              5
                            </td>
                            <td>
                              Doris Greene
                            </td>
                            <td>
                              Malawi
                            </td>
                            <td>
                              Feldkirchen in Kärnten
                            </td>
                            <td class="text-primary">
                              $63,542
                            </td>
                          </tr>
                          <tr>
                            <td>
                              6
                            </td>
                            <td>
                              Mason Porter
                            </td>
                            <td>
                              Chile
                            </td>
                            <td>
                              Gloucester
                            </td>
                            <td class="text-primary">
                              $78,615
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    </div>
</div>

@endsection

</body>
</html>