$(document).ready(function(){
	$('#btns').click(function(event){
		var firstname=$('#user_firstname').val()
		var lastname=$('#user_lastname').val()
		var email=$('#user_email').val()
		var gender=$('#user_gender').val()
		var location=$('#location_id').val()
		var password=$('#user_password').val()
		var terms=$('#agree').prop('checked')
		//returning back to null
		$('#user_firstname').val('')
		$('#user_lastname').val('')
		$('#user_password').val('')
		$('#user_gender').val('')
		$('#location_id').val('')


		console.log(firstname,lastname,email,gender,location,password,terms)

		if( firstname=='' || lastname=='' || email=='' || gender=='' || location=='' || password=='' || terms==''){
				$('#result').text('Please complete the fields')
				$('#result').addClass('alert alert-warning')
				$('#result').css({"color":"red"})
				event.preventDefault()
		}else{

		}
	})















})