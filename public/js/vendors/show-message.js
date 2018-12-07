function showMessage(message,type,id, stayFlag){
    var className = 'alert-success';
    var iconClass = 'check';
    var wrapper  = '#js-show-message-wrapper';
    if(type == 'warning')
        className = 'alert-danger', //alert-warning
        iconClass = 'exclamation';
    else if(type == 'error')
        className = 'alert-danger',
        iconClass = 'exclamation';

    var html = '<div id="js-show-message-wrapper_msgbox">'
        +'<div class="alert '+className+'">'
        + '<a class="close" data-dismiss="alert">×</a>'
        + '<i class="icon-'+iconClass+'"></i>'
        + '<p>'+message+'</p>'
        + '</div>'
        + '</div>';

    if(id) {
        wrapper = id;
        if(['#','.'].indexOf(wrapper[0]) === -1)
            wrapper = '#'+wrapper;
    }

    $(wrapper).html(html);
    window.scrollTo(0, 0);
    if(!stayFlag)
        $(wrapper+'_msgbox').fadeOut(4000);
}

function hideMessage(){

    var wrapper  = '#js-show-message-wrapper';
    $(wrapper).empty();
}