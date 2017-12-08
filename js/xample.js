 $(document).ready(function() {
        $('#phyres').DataTable();

        $("btnModalAddPhyres").on('click',function() {
        	//reset form
        	$("#formAddphyres")[0].reset();

        	$(".form-group").removeClass('has-error').removeClass('has-success');
        	$(".text-danger").remove();

        	//submit
        	$("#formAddphyres").unbind('submit').bind('submit',function(){
        		$(".text-danger").remove();
        		var form = $(this);

        		var phyres_name = $("#phyres_name").val();
        		var phyres_description = $("#phyres_description").val();
        		var phyres_app = $("#phyres_app").val();
        		var phyres_bene = $("#phyres_bene").val();
        		var phyres_location = $("#phyres_location").val();
        		var phyres_rate = $("#phyres_rate").val();

        		if(phyres_name == "") {
        			$("#phyres_name").closest('.form-group').addClass('has-error');
        			$("#phyres_name").after('<p class="text-danger>This field is Required</p>');		
        		} else	{
        			$("#phyres_name").closest('.form-group').removeClass('has-error');
        			$("#phyres_name").closest('.form-group').addClass('has-success');
        			
        		}

        		if(phyres_description == "") {
        			$("#phyres_description").closest('.form-group').addClass('has-error');
        			$("#phyres_description").after('<p class="text-danger>This field is Required</p>');		
        		} else	{
        			$("#phyres_description").closest('.form-group').removeClass('has-error');
        			$("#phyres_description").closest('.form-group').addClass('has-success');
        		}

        		if(phyres_app == "") {
        			$("#phyres_app").closest('.form-group').addClass('has-error');
        			$("#phyres_app").after('<p class="text-danger>This field is Required</p>');		
        		} else	{
        			$("#phyres_app").closest('.form-group').removeClass('has-error');
        			$("#phyres_app").closest('.form-group').addClass('has-success');
        			
        		}

        		if(phyres_bene == "") {
        			$("#phyres_bene").closest('.form-group').addClass('has-error');
        			$("#phyres_bene").after('<p class="text-danger>This field is Required</p>');		
        		} else	{
        			$("#phyres_bene").closest('.form-group').removeClass('has-error');
        			$("#phyres_bene").closest('.form-group').addClass('has-success');
        			
        		}

        		if(phyres_location == "") {
        			$("#phyres_location").closest('.form-group').addClass('has-error');
        			$("#phyres_location").after('<p class="text-danger>This field is Required</p>');		
        		} else	{
        			$("#phyres_location").closest('.form-group').removeClass('has-error');
        			$("#phyres_location").closest('.form-group').addClass('has-success');
        			
        		}

        		if(phyres_rate == "") {
        			$("#phyres_rate").closest('.form-group').addClass('has-error');
        			$("#phyres_rate").after('<p class="text-danger>This field is Required</p>');		
        		} else	{
        			$("#phyres_rate").closest('.form-group').removeClass('has-error');
        			$("#phyres_rate").closest('.form-group').addClass('has-success');
        			
        		}

        		if (phyres_name && phyres_description && phyres_app && phyres_bene && phyres_location && phyres_rate) {

        			$.ajax({
        				url: form.attr('action'),
        				type: form.attr('method'),
        				data: form.serialize(),
        				datatype: 'json',
        				success:function(response) {
        					if(response.success == true) {
        						$(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
								 	'<strong class="glyphicon glyphicon-ok-sign"></strong>'.response.messages+
								'</div>');
        					} else {
        						$(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
								 	'<strong class="glyphicon glyphicon-exclamation-sign"></strong>'.response.messages+
								'</div>');

        					}
        				}

        			})
        		}

        		return false


        	});


        });


 });