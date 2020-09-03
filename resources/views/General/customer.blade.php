<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .star-rating {
          line-height:32px;
          font-size:1.25em;
        }

        .star-rating .fa-star{color: yellow;}
    </style>
</head>
<body>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bd-example-modal-xl">Add New Customer</button>
                <!--popup form-->
               <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
				         <div class="modal-dialog modal-xl">
					        <div class="modal-content">
                                <div class="col-md-12">
                                <div class="card">
                                  <div class="card-header card-header-primary">
                                     <h4 class="card-title">Customer Details</h4>
                                  </div>
                                  <div class="card-body">
                                    <form method="post" action="/savecustomer">
                                      {{ csrf_field() }}
                                         <div class="row">
                                             <div class="col-md-6">
                                                  <div class="form-group">
                                                     <label class="bmd-label-floating">Name</label>
                                                     <input type="text" class="form-control" name="name" required>
                                                  </div>
                                             </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="bmd-label-floating">NIC</label>
                                                    <input type="text" class="form-control" name="nic" required>
                                                    </div>
                                                </div>
                                             </div>
                                         <div class="row">
                                              <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Email address</label>
                                                <input type="email" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Mobile</label>
                                                <input type="text" class="form-control" name="mobile" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Home</label>
                                                <input type="text" class="form-control" name="home">
                                                </div>
                                            </div>
                                </div>
                                <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Address</label>
                                                <input type="text" class="form-control" name="address" required>
                                                </div>
                                            </div>
                                </div>
                                <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Behavior</label>
                                                <div class="star-rating">
                                                  <span class="fa fa-star-o" data-rating="1"></span>
                                                  <span class="fa fa-star-o" data-rating="2"></span>
                                                  <span class="fa fa-star-o" data-rating="3"></span>
                                                  <span class="fa fa-star-o" data-rating="4"></span>
                                                  <span class="fa fa-star-o" data-rating="5"></span>
                                                  <input type="hidden" name="behavior" class="rating-value" required >
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-group">
                                              <label class="bmd-label-floating">Special Note</label>
                                              <input type="text" class="form-control" name="spnote">
                                              </div>
                                          </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">SAVE</button>
                                <div class="clearfix"></div>
                            </form>
                            </div>
                        </div>
                        </div>
						   </div>
						  </div>
						</div>
                     </div>
                     <!--end popup form-->
                     <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header card-header-primary">
                                <h4 class="card-title ">Customers</h4>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead class=" text-primary">
                                      <th>
                                        NIC
                                      </th>
                                      <th>
                                        Name
                                      </th>
                                      <th>
                                        Mobile No
                                      </th>
                                      <th>
                                        Home No
                                      </th>
                                      <th>
                                        Email
                                      </th>
                                      <th>
                                        Address
                                      </th>
                                      <th>
                                        Behavior
                                      </th>
                                    </thead>
                                    <tbody>
                                      @foreach ($customerdata as $customerdata)
                                      <tr>
                                        <td>
                                          {{$customerdata->nic}}
                                        </td>
                                        <td>
                                          {{$customerdata->name}}
                                        </td>
                                        <td>
                                          {{$customerdata->telephone1}}
                                        </td>
                                        <td>
                                          {{$customerdata->telephone2}}
                                        </td>
                                        <td >
                                          {{$customerdata->email}}
                                        </td>
                                        <td >
                                          {{$customerdata->address}}
                                        </td>
                                        <td> 
                                          <div  style="display: none;">
                                          {{$a=$customerdata->behavior}}
                                          </div>
                                            @for ($i = 1; $i <= $a; $i++)
                                            <span class="fa fa-star-o" data-rating="{{$i}}"></span>
                                            @endfor
                                        </td>
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
                </div>
            </div>
        </div>
    </div>
    <script>
      var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});
  </script>
  <script>
    $(document).ready(function() {
  $("#articles").validate();
});
</script>
</body>
</html>