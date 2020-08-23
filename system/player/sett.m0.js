
jQuery(document).ready(function ($) {
var settings_ap = {
 disable_volume: 'off'
,disable_scrub: 'default'
,design_skin: 'skin-wave'
,skinwave_dynamicwaves:'off'
,skinwave_enableSpectrum: "off"
,settings_backup_type:"full"
,settings_useflashplayer:"auto"
,skinwave_spectrummultiplier: "4"
,pcm_data_try_to_generate: "off"
};
dzsag_init('.audiogallery',{
        'transition':'fade'
        ,'cueFirstMedia' : 'on'
        ,'autoplay' : 'off'
        ,'autoplayNext' : 'on'
        ,'settings_ap':settings_ap
	});

});
