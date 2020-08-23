$(document).ready(function(){
$('#t_genr').change(function(){
	$('.t_menr').hide();
	$('#' + $(this).val()).show();
});
$('#t_album').change(function(){
	$('.t_albm').hide();
	$('#' + $(this).val()).show();
});
$('#se_but').click(function(){
	if( $('#che_pu').is(':checked')){var prop9 = 1;} else{var prop9 = 0;}
	var prop0 = 'savetrack';
	var prop1 = $('#t_name').val();
	var prop2 = $('#au_name').val();
	var prop3 = $('.t_des').val();
	var prop4 = $('.tag_des').val();
	var prop5 = $('#t_genr').val();
	var prop6 = $('#t_album').val();
	var prop7 = $('#Mygenre').val();
	var prop8 = $('#Myalbum').val();
	$.ajax({
                type: 'post',
                url: "../system/mendacord/gen3.php",
				data: ({
							m: prop0,
							d: prop1,
							y: prop2,
							z: prop3,
							o: prop4,
							l: prop5,
							b: prop6,
							p: prop7,
							a: prop8,
							i: prop9,
							}),
                success: function(html){
                    $(".t_mess").html(html);
                }
            })
		$('.m_forma').hide();
	})

$('.clo_clo').click(function(){
		var par1 = 'can4el';
           $.ajax({
                type: 'post',
                url: "../system/mendacord/gen3.php",
				data: ({
							m: par1,
						}),
                success: function(html){
                    $("#portk_s").html(html);
                }
            })
    });
$('#uplitrack').change(function(){
	var ff = new FormData();
	var dd = param_aut;
    //console.log(this.files);
    ff.append("myfile", this.files[0]);
	$.ajax({
        type: 'post',
        url: "system/upload/upload.php", 
		data: 
		({
			ff,
			v: dd,
		}),
		processData: false,
		contentType: false,
        success: function(html){
					$("#pre_rez8").html(html);
					$('.m_forma').show();
					setTimeout(() => $('.prtik-ti').css('background', 'linear-gradient(90deg, rgba(244,151,217,1) 50%, rgba(204,204,204,1) 0%)'), 4000);
					setTimeout(() => $('.prtik-ti').css('background', 'linear-gradient(90deg, rgba(244,151,217,1) 80%, rgba(204,204,204,1) 0%)'), 7000);
					setTimeout(() => $('.prtik-ti').css('background', 'linear-gradient(90deg, rgba(244,151,217,1) 100%, rgba(204,204,204,1) 0%)'), 9000);
					setTimeout(() => $('.prtik-ti').css('height', '0px'), 10000);
                }
            })
	});

$('.spa_vv').click(function(){
		var par1 = 'creat4ek';
          $.ajax({
                type: 'post',
                url: "../system/mendacord/gen3.php",
				data: ({
							m: par1,
						}),
                success: function(html){
                    $("#porta_s").html(html);
                }
            })
    });

})