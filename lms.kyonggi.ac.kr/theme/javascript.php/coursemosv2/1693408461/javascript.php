M.theme_coursemosv2={};M.theme_coursemosv2.login=function(Y){$(".loginpage  .btn-person").click(function(){$(".loginpage .col-login-default").hide();$(".loginpage .col-login-person").show();if($(".loginpage .col-login-person #input-username").val().length>0){$(".loginpage .col-login-person #input-password").focus()}else{$(".loginpage .col-login-person #input-username").focus()}});$(".loginpage .login-form-close .nobtn").click(function(){$(".loginpage .col-login-default").show();$(".loginpage .col-login-person").hide()});$(".loginpage .form-login").validate({submitHandler:function(form){$(form.loginbutton).attr('disabled','disabled');form.submit()}})};
var mesg=new Object();mesg.success="100";mesg.failure="300";var current_language='';var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
$(function(){$.ajaxSetup({type:"POST",error:function(xhr,msg){alert(msg+"\n"+xhr.responseText)}});$(document).ajaxStart(function(){showProgress()}).ajaxStop(function(){hideProgress()});theme_coursemosv2.init();$(window).resize(function(){theme_coursemosv2.resize()})});var theme_coursemosv2=new function(){this.lang='',this.init=function(){this.resize();is_headroom=!0;if(Y.UA.ie>0&&Y.UA.ie<10){is_headroom=!1}
if(is_headroom){if($("#page-header .headroom").length>0){$("#page-header .headroom").headroom({"tolerance":10,"offset":100,"classes":{"initial":"animated","pinned":"slideDown","unpinned":"slideUp"}})}}
$(window).scroll(function(){scrolltop=$(this).scrollTop();if(scrolltop>100){$('#back-top').fadeIn()}else{$('#back-top').fadeOut()}
if(scrolltop>50){if(!$("#page-header .headroom").hasClass('notrans')){$("#page-header .headroom").addClass('notrans')}}else{$("#page-header .headroom").removeClass('notrans')}
top_position=parseInt($(window).outerHeight())+parseInt(scrolltop)+44;if(top_position>=$('body').prop('scrollHeight')){$('#back-top').css('bottom','108px')}else{$('#back-top').css('bottom','10px')}
theme_coursemosv2.expandmenu()});$('#back-top a').click(function(){$('body,html').animate({scrollTop:0},500);return!1});$('table').each(function(){if(!$(this).hasClass('message_user_pictures')&&!$(this).is('[border]')){if(!$(this).hasClass('table')){$(this).addClass('table table-bordered')}}});$("input").each(function(){switch($(this).attr('type')){case 'button':case 'submit':case 'checkbox':case 'radio':case 'hidden':case 'image':break;default:if(!$(this).hasClass('form-control')){$(this).addClass('form-control')}
break}});$("form.mform, form.ubform").not('.gradingbatchoperationsform, .noshowsubmit').submit(function(){if($(this).closest('body').hasClass('path-grade-export')){return!0}else{if($.trim($(this).attr('onsubmit'))){submit_result=new Function($(this).attr('onsubmit'))();if(submit_result){showSubmitProgress();return!0}}else{showSubmitProgress();return!0}}
return!0});$("input[type='button'], input[type='submit'], input[type='reset'], button").each(function(){if(!$(this).hasClass('btn')&&!$(this).hasClass('nobtn')){$(this).addClass('btn');if($(this).hasClass('showadvancedbtn')){$(this).addClass('btn-mini')}else if($(this).attr('name')&&$(this).attr('name').indexOf('cancel')>=0&&!$(this).hasClass('btn-cancel')){$(this).removeClass('btn-default').addClass('btn-cancel')}else if($(this).attr('class').indexOf('btn-')<0){$(this).addClass('btn-default')}}});$('.dropdown-toggle').dropdown();$('.usermenu .user-info-popover').popover({html:!0,placement:'bottom',trigger:'click',content:function(){return $(".usermenu .user-info-box").html()}}).on('shown.bs.popover',function(e){$(".user-info-menu .dropdown-toggle").dropdown();$("#page-header .dropdown-lang .a-lang").click(function(){redirecturl=$(this).attr('href')
$.ajax({url:'/local/ubion/user/action.php',data:'type=lang&lang='+$(this).data('lang')+'&sesskey='+M.cfg.sesskey,type:'post',success:function(data){location.href=redirecturl}});return!1});$("#page-header #user_change").change(function(){location.href=M.cfg.wwwroot+'/local/ubion/user/changeuser.php?idnumber='+$(this).val()});$("#page-header .user-info-shortcut .usersync").click(function(){if(confirm($(this).data('confirm'))){$(document).unbind('ajaxStart');$(document).unbind('ajaxStop');showSubmitProgress();$.ajax({url:'/theme/coursemosv2/action.php',data:'type=user_update&sesskey='+M.cfg.sesskey,type:'post',success:function(data){alert(data.msg);$('.usermenu .user-info-popover').popover('hide');$('.usermenu .user-info-popover').data('bs.popover').inState.click=!1;location.replace(M.cfg.wwwroot)},error:function(request,error){hideSubmitProgress()}})}});$("#page-header .user-info-schedule").click(function(){theme_coursemosv2.layout_change(1);if(location.pathname=='/'){$(".course_list_btn_group .btn-layout").removeClass('active');$(".course_list_btn_group .btn-layout-calendar").addClass('active');$('.usermenu .user-info-popover').popover('hide');$('.usermenu .user-info-popover').data('bs.popover').inState.click=!1}else{location.href=M.cfg.wwwroot}
return!1})});$('body').on('click',function(e){$('[data-toggle="popover"]').each(function(){if(!$(this).is(e.target)&&$(this).has(e.target).length===0&&$('.popover').has(e.target).length===0){$(this).data('bs.popover').inState.click=!1;$(this).popover('hide')}})});$('.usermenu .user-courses-popover').popover({html:!0,placement:'bottom',trigger:'click',content:function(){return $(".usermenu .user-courses-box").html()}}).on('shown.bs.popover',function(e){$(e.target).addClass('active');$.ajax({url:'/theme/coursemosv2/action.php',data:'type=mycourses&sesskey='+M.cfg.sesskey,type:'post',success:function(data){if(data.code==mesg.success){$(".user-courses .popover-header").text(data.title);$(".user-courses .my-course-lists").html(data.html)}else{alert(data.msg);return!1}}})}).on('hidden.bs.popover',function(e){$(e.target).removeClass('active')});$(".user-menu-product").popover({html:!0,placement:'bottom',trigger:'click',content:function(){return $(".usermenu .menu-product").html()}}).on('shown.bs.popover',function(e,a){$(e.target).addClass('active')}).on('hidden.bs.popover',function(e){$(e.target).removeClass('active')}).focus(function(e){e.preventDefault();e.stopPropagation();return!1});$(".user-noti-popover").popover({html:!0,placement:'bottom',trigger:'click',content:function(){return $(".usermenu .user-noti-box").html()}}).on('shown.bs.popover',function(e){$(e.target).addClass('active');$.ajax({url:'/theme/coursemosv2/action.php',data:'type=popup_notification&sesskey='+M.cfg.sesskey,type:'post',success:function(data){if(data.code==mesg.success){$(".user-notification .user-noti-lists").html(data.html);$(".user-notification .badge").remove()}else{alert(data.msg);return!1}}})}).on('hidden.bs.popover',function(e){$(e.target).removeClass('active')});$(".user-message-popover").popover({html:!0,placement:'bottom',trigger:'click',content:function(){return $(".usermenu .user-message-box").html()}}).on('shown.bs.popover',function(e){$(e.target).addClass('active');$.ajax({url:'/theme/coursemosv2/action.php',data:'type=popup_message&sesskey='+M.cfg.sesskey,type:'post',success:function(data){if(data.code==mesg.success){$(".user-message .user-message-lists").html(data.html);$(".btn-allread-message").click(function(){thisbutton=$(this);$.ajax({url:'/theme/coursemosv2/action.php',data:'type=message_all_read&sesskey='+M.cfg.sesskey,type:'post',success:function(data){if(data.code==mesg.success){$(".user-message-popover .badge").remove();$(".user-message .user-message-lists").html(data.html)}else{alert(data.msg);return!1}}});return!1})}else{alert(data.msg);return!1}}})}).on('hidden.bs.popover',function(e){$(e.target).removeClass('active')});$("#page-lnb .left-menus > li > .left-menu-link").click(function(e){if($(this).parent().find('ul').length>0){$(this).parent().toggleClass('active');e.preventDefault()}});$("#page-lnb .left-menus > li").popover({html:!0,trigger:'hover',placement:'right',content:function(){return $(this).html()}}).on('inserted.bs.popover',function(e){if($(e.target).attr('aria-describedby')){if(($('body').hasClass('pagelayout-frontpage')||$('body').hasClass('course-1'))&&!$('body').hasClass('r1024')&&!$('body').hasClass('path-transfer')){$("#"+$(e.target).attr('aria-describedby')).remove()}else{$(e.target).append($("#"+$(e.target).attr('aria-describedby')))}}});$(".block-quick-mod .btn-quick-mod").popover({html:!0,trigger:'focus',placement:'right',container:'body',content:function(){return $(".block-quick-mod .popover_container").html()},template:'<div class="popover popover-quick-mod" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}).click(function(e){e.stopPropagation();modname=$(this).attr('data-modname');$(".btn-modedit").click(function(){location.href=$(this).attr('href')+'&add='+modname;return!1})});$(".block-quick-mod .btn-more-show").click(function(){$(".block-quick-mod li.extra_modules").removeClass('hidden');$(this).addClass('hidden');$(".block-quick-mod .btn-more-hide").removeClass('hidden')});$(".block-quick-mod .btn-more-hide").click(function(){$(".block-quick-mod li.extra_modules").addClass('hidden');$(this).addClass('hidden');$(".block-quick-mod .btn-more-show").removeClass('hidden')});$(".block-coursemos .block_action .block-hider-hide, .block-coursemos .block_action .block-hider-show").click(function(){block_coursemos=$(this).closest('.block-coursemos');block_name=block_coursemos.attr('data-name');if(block_name){status='show';if($(this).hasClass('block-hider-hide')){block_coursemos.addClass('hidden');status='hide'}else{block_coursemos.removeClass('hidden')}
$.ajax({url:'/theme/coursemosv2/action.php',data:'type=block_show_hide&name='+block_name+'&status='+status+'&sesskey='+M.cfg.sesskey,type:'post',success:function(data){if(data.code==mesg.success){}else{alert(data.msg);return!1}}})}});$(".block-coursehome .topmenu > li > a").not('.rolelink').click(function(){$(this).parent().toggleClass('expand');return!1});$(".block-ubonline-search .topmenu > li > a").click(function(){$(this).parent().toggleClass('expand');return!1});$(".block-ubonline .topmenu .submenu > a").click(function(){$(this).parent().toggleClass('expand');return!1});$(".coursemos-course-menu-expand .btn-course-menu").click(function(){menu_close_class='menu-close';status='show';if($("#page-container").hasClass(menu_close_class)){$(".coursemos-course-menu-expand .btn-course-menu-open").hide();$(".coursemos-course-menu-expand .btn-course-menu-close").show();$("#page-container").removeClass(menu_close_class)}else{$(".coursemos-course-menu-expand .btn-course-menu-open").show();$(".coursemos-course-menu-expand .btn-course-menu-close").hide();$("#page-container").addClass(menu_close_class);status='hide'}
$.ajax({url:'/theme/coursemosv2/action.php',data:'type=submenu_show_hide&status='+status+'&sesskey='+M.cfg.sesskey,type:'post',success:function(data){if(data.code==mesg.success){}else{alert(data.msg);return!1}}})});$(".reportlink a").addClass('btn btn-primary');$("#page-mod-wiki-comments .midpad a").addClass('btn btn-default');$(".add-grade-item .btn").addClass('btn-primary');$("#newdiscussionform .btn").addClass('btn-primary');$(".path-grade-report-singleview div.reporttable form div.singleview_buttons.submit .btn").addClass('btn-primary');$(".path-mod-feedback .mdl-align > a").addClass('btn btn-info');$(".path-mod-feedback .box.generalbox.boxaligncenter.boxwidthwide > a").addClass('btn btn-primary');$(".loginpage .login-box .col-login select.langmenu").change(function(){location_search('lang',$(this).val())});if($(".block-region .block_fake").length>0){el=null;$(".block-region .block_fake").each(function(){$("<li>").append($(this)).insertBefore($(".block-coursehome").parent())})}
$(".block-upcomming.block-coursemos .upcomming_date").tooltip();if($("#coursemos-course-menu .course-menus .block-course-sections .content").length>0){$("#coursemos-course-menu .course-menus .block-course-sections .content").mCustomScrollbar({scrollInertia:500})}
$(".footer-menus .private").click(function(){window.open($(this).attr('href'),'popup','width=610,height=650,left=100,top=100,scrollbars=yes');return!1});if($("#page-login-forgot_password").length>0){if($("#page-login-forgot_password fieldset legend").length>0){$("#page-login-forgot_password fieldset legend").each(function(){legend_text=$(this).text();fieldset=$(this).closest('fieldset');fieldset.find('.fcontainer').before('<h4>'+legend_text+'</h4>')});form_el=$("<div class='form-element' />").append($("#id_username")).append($("#id_submitbuttonusername"));$("#id_searchbyusername .fcontainer").append(form_el);$("#id_username").attr('placeholder',$("#fitem_id_username .fitemtitle label").text());form_el=$("<div class='form-element' />").append($("#id_email")).append($("#id_submitbuttonemail"));$("#id_searchbyemail .fcontainer").append(form_el);$("#id_email").attr('placeholder',$("#fitem_id_email .fitemtitle label").text());if($("#fitem_id_username .felement").hasClass('error')){$("#id_submitbuttonusername").after($("#fitem_id_username .felement .error"))}
if($("#fitem_id_email .felement").hasClass('error')){$("#id_submitbuttonemail").after($("#fitem_id_email .felement .error"))}}
if($("#page-login-forgot_password #notice + .continuebutton").length>0){$("#page-login-forgot_password #notice").append($("#page-login-forgot_password #notice + .continuebutton"))}}
$(".course-buttons .course-record-local").click(function(){screencapture($(this).data('userid'))});if(document.location.pathname=='/user/files.php'){$(".page-content-navigation .breadcrumb > li:nth-child(2)").remove()}},this.resize=function(){width=$(window).width();if(width<=1024){if(!$('body').hasClass('r1024')){$('body').addClass('r1024')}}else{$('body').removeClass('r1024')}
theme_coursemosv2.expandmenu()},this.expandmenu=function(){scrolltop=$(document).scrollTop();window_height=$(window).outerHeight();body_height=$('body').outerHeight();footer_height=88;max_scroll=body_height-footer_height;current_scroll=scrolltop+window_height;min_scroll=$('body').hasClass('coursemos-layout-coursehome')?270:120;top_position=min_scroll;if(scrolltop>min_scroll){top_position=scrolltop+(window_height/2)-(footer_height+44)}
if(top_position<min_scroll){top_position=min_scroll}
$(".coursemos-course-menu-expand").css('top',top_position)},this.layout_change=function(layout){$.ajax({url:'/theme/coursemosv2/action.php',data:'type=coursemos_layout&layout='+layout+'&sesskey='+M.cfg.sesskey,type:'post',success:function(data){if(data.code==mesg.success){if($(".progress_courses .course_lists").length>0){$(".progress_courses .course_lists").html(data.html);if(layout==0){$(".my-course-layout-default").removeClass('hidden');$(".my-course-layout-schedule").addClass('hidden')}else if(layout==1){$(".my-course-layout-default").addClass('hidden');$(".my-course-layout-schedule").removeClass('hidden');theme_coursemosv2.calendar_view()}}}else{alert(data.msg);return!1}}})},this.calendar_view=function(){calendar_lang='en';switch(theme_coursemosv2.lang){case 'ko':case 'en':calendar_lang=theme_coursemosv2.lang;break}
var fullcalendar_default={header:{left:"",center:"prev, select-year, next",right:"today,agendaWeek,agendaDay"},lang:calendar_lang,defaultView:"agendaWeek",editable:!1,allDaySlot:!1,titleRangeSeparator:' ~ ',minTime:'08:00',maxTime:'23:00',slotDuration:'01:30:00',hiddenDays:[0],slotEventOverlap:!1,contentHeight:'auto',isPeriod:!0,slotStudyTime:'01:15:00'};var fullcalendar_extend={eventSources:[{url:'/template_/_schedule.php',type:'post',success:function(doc){if(doc.length>0){$.each(doc,function(key,evt){if(evt.overtime){theme_coursemosv2.showPeriod();return!1}else{theme_coursemosv2.hidePeriod()}})}else{theme_coursemosv2.hidePeriod()}},error:function(){alert('there was an error while fetching events!')},}],eventRender:function(event,element,view){if(view.name=='agendaWeek'){$(element).find('.fc-title').tooltip({placement:'right',container:'body'})}},viewRender:function(view,element){now_date=new Date();min_date=(now_date.getFullYear()-1)+'-01-01';max_date=(now_date.getFullYear()+1)+'-12-31';view_date_start=view.start.format('YYYY-MM-DD');view_date_end=view.end.format('YYYY-MM-DD');if(min_date>=view_date_start&&min_date<=view_date_end){$(".fc-prev-button").prop('disabled',!0);$(".fc-prev-button").addClass('fc-state-disabled')}
else{$(".fc-prev-button").removeClass('fc-state-disabled');$(".fc-prev-button").prop('disabled',!1)}
if(max_date<=view_date_end){$(".fc-next-button").prop('disabled',!0);$(".fc-next-button").addClass('fc-state-disabled')}else{$(".fc-next-button").removeClass('fc-state-disabled');$(".fc-next-button").prop('disabled',!1)}
select_date=view.calendar.getDate();select_year=select_date.year();select_month=select_date.month()+1;select_day=select_date.date();$("#coursemos-calendar .dropdown-year .btn .dropdown-text").text(select_year);$("#coursemos-calendar .dropdown-month .btn .dropdown-text").text(select_month);$("#coursemos-calendar .dropdown-day .btn .dropdown-text").text(select_day);if(view.name=='agendaDay'){$("#coursemos-calendar .dropdown-day").removeClass('hidden');month_end_date=select_date.daysInMonth();i=1;$("#coursemos-calendar .dropdown-day .dropdown-menu > li").each(function(){if(i<=month_end_date){$(this).removeClass('hidden')}else{$(this).addClass('hidden')}
i++})}else{if(!$("#coursemos-calendar .dropdown-day").hasClass('hidden')){$("#coursemos-calendar .dropdown-day").addClass('hidden')}}}};fullcalendar_setting=$.extend({},fullcalendar_default,fullcalendar_extend);$('#coursemos-calendar').fullCalendar(fullcalendar_setting)},this.hidePeriod=function(){$("#coursemos-calendar .hide-period").hide()},this.showPeriod=function(){$("#coursemos-calendar .hide-period").show()}}
function location_search2(key,value){var queryParameters={},queryString=location.search.substring(1),re=/([^&=]+)=([^&]*)/g,m;while(m=re.exec(queryString)){queryParameters[decodeURIComponent(m[1])]=decodeURIComponent(m[2])}
if(queryParameters.hasOwnProperty('page')){queryParameters.page=1}
queryParameters[key]=value;location.search=$.param(queryParameters)}
function location_search(key,value){var queryParameters={},queryString=location.search.substring(1),re=/([^&=]+)=([^&]*)/g,m;while(m=re.exec(queryString)){queryParameters[decodeURIComponent(m[1])]=decodeURIComponent(m[2])}
queryParameters[key]=value;location.search=$.param(queryParameters)}
function showProgress(){$("body").append('<div id="ajax_loading"><div id="ajax_loading_img"><img src="/theme/coursemosv2/pix/ajax-loader-small.gif" alt="loading..." /> Loading...</div></div>');$("#ajax_loading").css({height:$(document).height()});$("#ajax_loading_img").pagetop()}
function hideProgress(){if($("#ajax_loading").length>0){$("#ajax_loading").remove()}}
function showSubmitProgress(){$("#ajax_loading_submit").show().css({height:$(document).height()});$("#ajax_loading_container").center().show()}
function hideSubmitProgress(){if($("#ajax_loading_container").length>0){$("#ajax_loading_container").hide();$("#ajax_loading_submit").hide()}}
function screencapture(userId){disable_ajax_error();$.ajax({url:"http://127.0.0.1:8099/pid:"+userId,type:"POST",timeout:1000,async:!0,dataType:'jsonp',cache:!1,crossDomain:!0,complete:function(xhr,responseText,thrownError){},success:function(data,textStatus,XMLHttpRequest){}})}
function myServerCheck(data){if(data.status=="LIVE"){$("#screenrecorder").show()}}
function myCallback(data){if(data.status=="OK"){alert("'녹화 시작' 버튼을 클릭하세요.")}}
function screencapturecheck(){disable_ajax_error();$.ajax({url:"http://127.0.0.1:8099/check:",type:"POST",timeout:1000,async:!0,dataType:'jsonp',cache:!1,crossDomain:!0,complete:function(xhr,responseText,thrownError){},success:function(data,textStatus,XMLHttpRequest){}})}
function disable_ajax_error(){$.ajaxSetup({error:function(xhr,msg){}})}
$.fn.center=function(){$(this).css({"position":"absolute","top":($(window).scrollTop()+($(window).height()-$(this).height())/2)+"px","left":($(window).scrollLeft()+($(window).width()-$(this).width())/2)+"px"});return this}
$.fn.pagetop=function(){$(this).css({"position":"fixed","top":"5px","left":($(window).scrollLeft()+($(window).width()-$(this).width())/2)+"px"});return this}
$.fn.selectRange=function(start,end){return this.each(function(){if(this.setSelectionRange){this.focus();this.setSelectionRange(start,end)}else if(this.createTextRange){var range=this.createTextRange();range.collapse(!0);range.moveEnd('character',end);range.moveStart('character',start);range.select()}})};
cmaker={createNewFormElement:function(inputForm,elementName,elementValue){var newElement=document.createElement("input");newElement.type="hidden";newElement.id=elementName;newElement.name=elementName;newElement.value=elementValue;inputForm.appendChild(newElement);return newElement},load:function(userid,username,usertype,email,siteauthkey,cmdomain,tgurl){var submitForm=document.createElement("FORM");this.createNewFormElement(submitForm,"UserID",userid);this.createNewFormElement(submitForm,"UserName",username);this.createNewFormElement(submitForm,"UserType",usertype);this.createNewFormElement(submitForm,"Email",email);this.createNewFormElement(submitForm,"SiteAuthKey",siteauthkey);this.createNewFormElement(submitForm,"TargetUrl",tgurl);this.createNewFormElement(submitForm,"Action","mypage");this.createNewFormElement(submitForm,"OutputType","");this.createNewFormElement(submitForm,"LaunchMode","");this.createNewFormElement(submitForm,"cmdomain",cmdomain);submitForm.action=cmdomain+"/index.php?modules=xn_sso&act=procXn_ssoLogin";submitForm.method="POST";document.body.appendChild(submitForm);window.open('/theme/coursemosv2/cmaker.php','CmakerWindow','width=997,height=614,menubar=no,toolbar=no,scrollbars=yes')}}