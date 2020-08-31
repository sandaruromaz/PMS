<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
            <div class="card">
                <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title">Pawing Article Details</h4>
                </div>
                <div class="card-body">
                <form id="articles">
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Type of Article</label>
                        <select class="custom-select" name="itemname" required >
                            <option disabled hidden selected value="" >Select Article Type</option>
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
                        <input type="text" class="form-control" name="qulity" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Weigth</label>
                        <input type="text" class="form-control" name="weigth" required>
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
                        <input type="text" class="form-control"maxamount name="maxamount" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Loan Amount</label>
                        <input type="text" class="form-control" name="loanamount" required>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            <div class="row">
                <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="card-header card-header-primary">
                <h4 class="card-title">Article Owner Details</h4>
                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label class="bmd-label-floating">NIC No</label>
                    <input type="text" class="form-control" name="nic" id="nic" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" name="name" id="name" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label class="bmd-label-floating">Address</label>
                    <textarea class="form-control" name="address" id="address" rows="3" disabled></textarea>
                    </div>
                </div>
                <input name="cusID" type="hidden" id="cusID">
                </div>
            </div>
            </div>
                </div>
            </div>
                    <button type="submit" class="btn btn-primary pull-right">SAVE ARTICLE</button>
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
                  $( "#address" ).val( ui.item.address );
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
<script>
    $(document).ready(function() {
  $("#articles").validate();
});
</script>
</body>
</html>