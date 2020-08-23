/*
var inlog = document.querySelectorAll("#logi");
inlog.onclick = toogle('#login_o');

function toggle(el){
  el.style.display = (el.style.display == 'none') ? '' : 'none'
}
*/

$(document).ready(function(){
$('#logi').click(function(){ //show login form
	$('#login_o').show();
});
$('#sigup').click(function(){ //show registration orm
	$('#reg_o').show();
});
$('#som_help').click(function(){ //ЧЕ ЭТО?
	$.ajax({
		type: 'post', 
		url: "../system/gen.php", 
		data: 'd=som_help', 
		success: function(html){
			$(".in_fol").html(html);
			}
	})
});
$('#lal').click(function(){//ЧЕ ЭТО?
	$.ajax({
		type: 'post', 
		url: "../system/gen.php", 
		data: 'd=lalomusic', 
		success: function(html){
			$(".obve_nx").html(html);
			}
	})
});
$('#kes').click(function(){//ЧЕ ЭТО?
	$.ajax({
		type: 'post', 
		url: "../system/gen.php", 
		data: 'd=kesile', 
		success: function(html){
			$(".obve_nx").html(html);
			}
	})
});
$('.re_in_rei').click(function(){ //Отобразить панель реплу комм
	var dd = $(this).attr('id'); 
	$('.bi_nayra'+dd).show();
});
$('.rp_otm').click(function(){ // скрыть форму реплу
	$('.bo_dop').hide();
});
$('.tra_modu').click(function(){ // Чето связанное с поиском треков. НАДО УТОЧНИТЬ ЧЕ ЭТО?
	var par1 = 'tracks';
	var par2 = param_us;
	$.ajax({
		type: 'post', 
		url: "../system/gen.php", 
		data: ({
			d: par1,
			v: par2,
		}),
		success: function(html){
			$("#porta_s").html(html);
		}
	})
});
$('#fol_vii').click(function(){ //ДОНОСЫ из профиля форма репорта
	var par1 = 'rupor';
	var par2 = param_us;
	$.ajax({
		type: 'post',
		url: "../system/gen.php", 
		data: ({
			d: par1,
			v: par2,
		}),
		success: function(html){
			$(".in_fol").html(html);
		}
	})
});
$('.leqmes').click(function(){  //ОТОБРАЕНИЕ СООБЩЕНИЙ ЛС всплывающее окно, отсюда переходим на страницу pm
	var par1 = 'lsmess'; 
	$.ajax({
		type: 'post', 
		url: "../../system/gen.php", 
		data: ({
			d: par1,
			v: '',
		}), 
		success: function(html){
			$(".in_fol").html(html);
			$('#ass').show();
		}
	})
});
$('#pre_lon').change(function(post){ //для регистрации. сразу блочит кнопку отправки формы ,если введен некорректный ник
	var par1 = 'newuser';
	var par2 = $('#pre_lon').val(); 
	$.ajax({ 
		type: 'post', 
		url: "../system/gen.php",
		data: ({
			d: par1,
			v: par2
		}), 
		success: function(html){
			$(".button_blue4").html(html);
		}
	})
});
$('.-pratit1').click(function(){$('.-pratel2').hide();$('.-pratel1').show();});//переключатели вкладок
$('.-pratit2').click(function(){$('.-pratel1').hide();$('.-pratel2').show();});//переключатели вкладок
/*
$('.preprof').hover( //выборка инфо о профиле по хз ему ,отображает панель под ником и т.д. Надо переписать на нормально функционирующую
	function(){
		var otsk;
		wiwi = $(this).find(':first-child').width();
		wid = $(this).find(':first-child').data('tag');
		aid = $(this).find(':first-child').attr('src');
		dot = "<div id='pod_pl'><div id=''><div id='pn_mn_ygl'></div></div><div id='in_lls'><img id='imain' src='"+aid+"'></div><div id='in_kks'><div>"+wid+"</div><div id='meni_ffgh'><div class='_mji_'><img class='sagd' src='/content/sys/user-group.png'></div><div class='-ii _mji_'></div></div><div><a href='/"+wid+"'><input id='karma_bod' type='button' value='profile'></a></div></div></div>";
		$.ajax({
                type: 'post',
                url: "../system/gen.php", 
				cache: false,
				data: ({
							d: 'do_tag',
							v: wid,
						}),
                success: function(msg){
                    $(".-ii").data(msg);
					//alert(msg);
                }
            });
		switch($('div').is('#pod_pl')){
			case false:
				$(this).append(dot);
				switch(wiwi){
					case 33:
						otsk = 60;
						$('#pod_pl').css('margin-left', '-'+otsk);
						$('#pod_pl').show();
						break;
					case 40:
						otsk = 54;
						$('#pod_pl').css('margin-left', '-'+otsk);
						$('#pod_pl').show();
						break;
					case 50:
						otsk = 48;
						$('#pod_pl').css('margin-left', '-'+otsk);
						$('#pod_pl').show();
						break;
					case 55:
						otsk = 50;
						$('#pod_pl').css('margin-left', '-'+otsk);
						$('#pod_pl').show();
						break;
				}
				break
			case true:
				break;
			case 0:
				console.log('hyeta');
				break;
		}
	}, 	
	function(){	
		$('#pod_pl').remove();
	});
*/
$('.lebesat').click(function(){ //загрузка аватара
var image = $('#primeavat').attr('href');
var base64ImageContent = image;
var blok = dataURItoBlob(base64ImageContent);  
var formData = new FormData();
formData.append('prat', blok);
	$.ajax({
                type: 'post',
                url: "../system/avatar/upload.php", 
				cache: false,
				processData: false,
				contentType: false,
				data: formData,
                success: function(html){
                    $("#pree_ima").html(html);
					//$('#ava_chag').hide();
                }
            });
//return false;
});
$('#hiihf').change(function(){//*заливка картинки для трека*//
	var fd = new FormData();
    fd.append("malis", this.files[0]);
	$('#up_bl_lt').hide();
	$.ajax({
        type: 'post',
        url: "../system/labels/upload.php", 
		data: fd,
		processData: false,
		contentType: false,
        success: function(html){
                    $("#pre_label_t8").html(html);
                }
            });
	});
$('#afon_pl').change(function(){//*заливка фона*//
	var fd = new FormData();
    fd.append("upl_fil", this.files[0]);
	$.ajax({
        type: 'post',
        url: "system/ufon/upload.php", 
		data: fd,
		processData: false,
		contentType: false,
        success: function(html){
			$("#pre_label_t8").html(html);
			$('#afo_chag').show();
			$('#u_ufog').backgroundDraggable({axis: 'y'});
			$('.mess5_as').mouseup(function(e){
					if (e.which === 1){
					var yOts = parseFloat($('#u_ufog').css('background-position-y'));
					yOpt = parseFloat((yOts * 1.48).toFixed(2));
					$('#head_y').val(yOpt);
					};
			});
		}
        });
	});

	$('.do_retrack').click(function(){//edit track
		var par1 = 'do_retrack';
		var par2 = $(this).data('id');
           $.ajax({
                type: 'post',
                url: "../system/gen.php", 
				data: ({
							d: par1,
							v: par2,
						}),
                success: function(html){
                    $(".in_fol").html(html);
					$('.-pratit1').click(function(){$('.-pratel2').hide();$('.-pratel1').show();});
					$('.-pratit2').click(function(){$('.-pratel1').hide();$('.-pratel2').show();});
					$('.mtag').click(function(){
					m_tag1 = $('.title').val();
					m_tag2 = $('.artist').val();
					m_tag3 = $('.album').val();
					m_tag4 = $('.year').val();
					m_tag5 = $('.genre').val();
					m_tag6 = $('.comment').val();
					$.ajax({
						type: 'post',
						url: "../system/gen.php", 
						data: ({
							d: m_tag1,
							v: m_tag2,
							m: m_tag3,
							n: m_tag4,
							i: m_tag5,
							w: m_tag6,
						}),
						success: function(html){
						}
					});
					});
				}
            });
    }); 
	$('.a_ddpl').click(function(){//display playlist panel 
		trec = $(this).data('id');
		par4 = 'totrack';
		$('#ass').show();
		$.ajax({
				type: 'post',
				url: "../system/gen.php", 
				data: ({
					d: par4,
					v: trec,
				}),
				success: function(html){
					$(".pl_podol").html(html);
				}
		});
	}); 

					$('.pl_in_di').click(function(){//select playlist and display track list
						mm = $(this).data('num'); 
						var par4 = 'spis_track';
						var par5 = mm;
						$.ajax({
							type: 'post',
							url: "../system/gen.php", 
							data: ({
									d: par4,
									v: par5,
								}),
							success: function(html){
								$(".pl_in_dat").html(html);
								var sut = mm;
								$(".pl_in_dat").data('prop', sut).attr('data-prop', sut);
								$('.dd_in_play').click(function(){
									sk = $(".add-pl-item").data('obj'); 
									wk = $(".pl_in_dat").data('prop'); 
									var par4 = 'add_in_pl';
									var par5 = sk;
									var par6 = wk;
									$.ajax({
										type: 'post',
										url: "../system/gen.php", 
										data: ({
											d: par4,
											v: par5,
											m: par6,
											}),
										success: function(html){
											$(".pl_in_dat").html(html);
										}
									});
								});
							}
						});
					});
					$('.dd_pli').click(function(){//create new playlist
						var par4 = 'creat_playlist';
						tack = $(".add-pl-item").data('obj');
						$.ajax({
							type: 'post',
							url: "../system/gen.php", 
							data: ({
									d: par4,
								}),
							success: function(html){
								$("#pl-cunt").html(html);
								$('.pl_sav').click(function(){
									var par4 = 'save_playlist';
									var par5 = $('.-nm-pl').val();
									var par6 = $('.-gr-pl').val();
									var par7 = $('#che_pu').prop('checked');
									var par8 = $(".frm_add_pl").data('pls');
									$('.frm_add_pl').remove();
									$.ajax({
										type: 'post',
										url: "../system/gen.php", 
										data: ({
											d: par4,
											v: par5,
											m: par6,
											n: par7,
											i: par8,
											w: tack,
										}),
										success: function(html){
											$(".pl_im_sp").html(html);

										}
									});
								});
							}
						});
					});
                
	$('.a_eepl').click(function(){//playlist edit
		plec = $(this).data('id');
		var par1 = 'edit_playlist';
		var par2 = plec;
           $.ajax({
                type: 'post',
                url: "../system/gen.php", 
				data: ({
							d: par1,
							v: par2,
						}),
                success: function(html){
					$(".in_fol").html(html);
					$('#ass').show();
					$('.plo_plo').click(function(){
						var par4 = 'del_tr_pl';
						var par5 = plec;
						var par6 = $(this).data('param'); 
						$.ajax({
							type: 'post',
							url: "../system/gen.php", 
							data: ({
								d: par4,
								v: par5, //2
								m: par6, //5
								}),
							success: function(html){
								$(".pl_in_das").html(html);
							}
						});
					});
				 }
            });
		}); 

function dataURItoBlob(dataURI, callback){
    var byteString = atob(dataURI.split(',')[1]);
    var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0]
    var ab = new ArrayBuffer(byteString.length);
    var ia = new Uint8Array(ab);
    for (var i = 0; i < byteString.length; i++) {
        ia[i] = byteString.charCodeAt(i);
    }
    var bb = new Blob([ab]);
    return bb;
}
	/* Надо улучшить чтобы он не влиял на остальные скрипты
	telo = document.body.innerHTML;
	marc = telo.match(/@[A-z0-9]+/g);
	document.body.innerHTML = telo.replace(marc, '<a>'+marc+'</a>');
	*/
});
/*   ЭТО ПЕРЕКЛЮЧЕНИЕ КАТЕГОРИЙ В БЛОГАХ, Я ОТКАЗАЛСЯ ОТ ЭТОГО УЖЕ
$('#bug').click(function(){
	var par1 = 'bugbug';
	$.ajax({
		type: 'post',
		url: "system/gen.php",
		data: ({
			d: par1,
			}), 
		success: function(html){
			$(".contiks").html(html);
		}
	})
});
$('#uref').click(function(){
	var par1 = 'ureeef';
	$.ajax({
		type: 'post', 
		url: "system/gen.php", 
		data: ({
			d: par1,
			v: '',
		}), 
		success: function(html){
			$(".contiks").html(html);
		}
	})
});
$('#swen').click(function(){
	var par1 = 'swendr';
	$.ajax({
		type: 'post', 
		url: "system/gen.php", 
		data: ({
			d: par1,
			v: '',
		}), 
		success: function(html){
			$(".contiks").html(html);
		}
	})
});
/* СКРИПТ ГРАДИЕНТА УДАЛЕН
$('.popup-kelly-color').click(function(){
	$('#-pre-poi').css('background', '-webkit-linear-gradient(top left,'+picic+','+picis+')');
});
$('#co-cok').click(function(){ 
	alert(picic+'______'+picis);
	//вместо алерта передаем два цвета аякс на запись в бд пользователя
	});
*/
