<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
</head>
<body>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            </div>
            <div class="col-md-12">
            <div class="card">
                <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title">Pawing Article Details</h4>
                </div>
                <div class="card-body">
                <form>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Type of Article</label>
                        <select class="custom-select" name="itemname"  >
                            <option disabled hidden selected>Select Article Type</option>
                            <option value="Ring">Ring</option>
                            <option value="Bangle">Bangle</option>
                            <option value="Bracelet">Bracelet</option>
                            <option value="Earring">Earring</option>
                            <option value="Pendant">Pendant</option>
                            <option value="Necklace">Necklace</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Gold Qulity</label>
                        <input type="text" class="form-control" name="qulity">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Weigth</label>
                        <input type="text" class="form-control" name="weigth">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Damage Description</label>
                        <input type="text" class="form-control" name="damage">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="bmd-label-floating">Upload Damage Image</label>
                        <div class="file-field">
                          <a class="btn-floating peach-gradient mt-0 float-left">
                            <input type="file" name="damageimage">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Maximum Amount</label>
                        <input type="text" class="form-control"maxamount name="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Loan Amount</label>
                        <input type="text" class="form-control" name="loanamount">
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <!--job section-->
                    <div class="row">
                        <div class="col-md-12">
                    <div class="card">
					  <div class="card-body">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title">Job Details</h4>
                        </div>
                        <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="bmd-label-floating">Refund Amount</label>
                            <input type="text" class="form-control" name="Refundamount">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="bmd-label-floating">Interest Amount</label>
                            <input type="text" class="form-control" name="Interestamount">
                            </div>
                        </div>
                        </div>
                    </div>
					</div>
                        </div>
                    </div>
            <!--End job section-->
            <div class="row">
                <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="card-header card-header-primary">
                <h4 class="card-title">Customer Details</h4>
                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label class="bmd-label-floating">NIC No</label>
                    <input type="text" class="form-control" name="nic" id="nic">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" name="name" id="name" disabled>
                    </div>
                </div>
                <input name="cusID" type="hidden" id="cusID">
                </div>
            </div>
            </div>
                </div>
            </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>

                </form>
                </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<script>
         $(function() {
            $( "#nic" ).autocomplete({
               minLength: 0,
               source: "{{ route('NICAutocompleate') }}",
               focus: function( event, ui ) {
                  $( "#nic" ).val( ui.item.nic );
                     return false;
               },
               select: function( event, ui ) {
                  $( "#nic" ).val( ui.item.nic );
                  $( "#name" ).val( ui.item.name );
                  $( "#cusID" ).val( ui.item.cusID );
                  return false;
               }
            })
				
            .data( "ui-autocomplete" )._renderItem = function( ul, item ) {
               return $( "<li>" )
               .append( "<a>" + item.nic +  "</a>" )
               .appendTo( ul );
            };
         });
</script>
</body>
</html>