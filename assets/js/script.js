$(document).ready(function(){

	$('.loading').hide();

	$('select[name=menu]').on('change', function(){
		const terpilih = $('option:selected', this).attr('videoId');
		$.ajax({
			type: 'post',
			url: 'config/api.php',
			data: {idVideo: terpilih},
			beforeSend: function(){
				$('.loading').show();
			},
			success: function(response){
				if (response.length > 0) {					
					$('iframe').attr('src', 'https://www.youtube.com/embed/'+ terpilih +'?rel=0');
				} else {
					alert('Sepertinya Anda Salah Pilih Menu!');
				}
			},
			complete: function(){
				$('.loading').hide();
			}
		});
	});

});