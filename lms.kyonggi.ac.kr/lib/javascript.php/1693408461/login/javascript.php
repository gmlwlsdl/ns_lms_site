M.register={};M.register.agree=function(Y,wwwroot){$(".ubregister .agree_button .btn-cancel").click(function(){location.href=wwwroot});$("#register_agree").submit(function(){if(!$("#register_agree input[name='clause']").is(":checked")){alert(M.util.get_string('signup_clause_agree_error','local_ubion'));$("#register_agree input[name='clause']").focus();return!1}
if(!$("#register_agree input[name='privacy']").is(":checked")){alert(M.util.get_string('signup_privacy_agree_error','local_ubion'));$("#register_agree input[name='privacy']").focus();return!1}
return!0})}
M.register.form=function(Y,lang,wwwroot){$(".ubregister .mform").unbind('submit');$(".ubregister #id_cancel").click(function(){location.href=wwwroot;return!1});$(".ubregister .mform").validate({submitHandler:function(form){showSubmitProgress();form.submit()}});datepicker_lang='en';if(lang=='ko'){datepicker_lang='kr'}
$('.birthday').datepicker({format:'yyyy-mm-dd',language:datepicker_lang,autoclose:!0,startView:'years',minViewMode:'day'})}