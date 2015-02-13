 

$().ready(function() {
    $('#customized').hide();
   $('select#customized_bg').change(function() {
       if($(this).val() == 0){
       $('#customized').hide(); 
        }
       else  $('#customized').show();
   })
 });

 
 //$('#country').selectize();
$('#splash_Brand').selectize();
//$('#vendor').selectize();


 $(document).ready(function() {
        $("#splash").submit(function(){
             var $form = $(this).closest("#splash");
            $('#myModal').modal({show:true})
             if($form){

                // The url where the form is being posted via ajax
                var url = $("#splash").attr("action");

                // Post the data
                $.post(url,{
                    type: "POST",
                    data:$form.serialize(), // serializing the data being sent 
                    cache: false
                },function(data){

                    // If valid
                    if(data.responseCode == 200 ){

                        alert(data.response);
                        $('#myModal').modal('hide');
                    }
                    else if(data.responseCode==400){
                        alert(data.responseCode);
                    }else{
                        alert("bad response all together...");
                    }
                }); 
            }
            return false;
        });
    });
    
    
    
/*selectize country js*/
var xhr;
var select_country, $select_country;
var select_vendors, $select_vendors;

$select_country = $('#splash_country').selectize({
    onChange: function(value) { 
        if (!value.length) return;
        select_vendors.disable();
        select_vendors.clearOptions();
        select_vendors.load(function(callback) {
            xhr && xhr.abort();
            xhr = $.ajax({
                url: 'fp_marketing_app/web/app_dev.php/splash/getVendors/'+value,
                datatype:"json",
                success: function(results) {
                    var obj  = JSON.parse( results );
                    select_vendors.enable();
                    callback(obj);           
                },
                error: function() {
                    callback();
                }
            })
        });
    }
});

$select_vendors = $('#splash_vendor').selectize({
    valueField: 'id',
    labelField: 'name',
    searchField: ['name']
});

select_vendors  = $select_vendors[0].selectize;
select_country = $select_country[0].selectize;

select_vendors.disable();
/*end selectize*/
 
 