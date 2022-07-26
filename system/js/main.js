document.addEventListener("DOMContentLoaded", function(event){ 

s_dop = document.querySelector("#in_fol");//место куда вставляются доп. панели
s_log = document.querySelector("#logi");//кнопка вызов логин формы
s_new = document.querySelector("#sigup");//кнопка вызов регистрауционной формы

s_log.addEventListener('click', e => {log_form();})
s_new.addEventListener('click', e => {new_form();})


function log_form(){
	var opt = ['login'];
	dataSet(opt);
}
function new_form(){
	var opt = 'newuser';
	dataSet(opt);
}
function dataSet(opt){//взаимодействие с обработчиком php, работа с базой
	var par = opt;
	var formData = new FormData();
	for(var i=0;i<opt.length;i++){
		formData.append("par"+i, par[i]);
	}
	fetch('/system/gen.php', {
		method: 'POST',
		credentials: 'same-origin',
		body: formData
	})
	.then(response => response.text())
	.then(function(data) {
		/*gug = data.split(',');*/
		console.log(gug);
		s_dop.innerHTML = data;
	})
	.catch(error => console.log());
}
});