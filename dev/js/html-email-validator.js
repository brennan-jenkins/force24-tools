// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("email-validator")) {
        var editor = CodeMirror(document.getElementById("codeEditor"), {
    value:         "<table>\n\t<tr>\n\t\t<td>\n\t\t\tReplace this code with your HTML\n\t\t</td>\n\t</tr>\n</table>",
    mode :         "xml",
    htmlMode:      true,
    theme: "xq-dark",
    tabMode:       "indent",
    tabSize:       3,
    lineNumbers: true,
    lineWrapping: true,
    dragDrop:      true
});
function validate(){
    var resultEditor = CodeMirror(document.getElementById("codeOutput"), {
        value:         "<table>\n\t<tr>\n\t\t<td>\n\t\t\tIf you see this, please contact your account manager\n\t\t</td>\n\t</tr>\n</table>",
        mode :         "xml",
        htmlMode:      true,
        theme: "xq-dark",
        tabMode:       "indent",
        tabSize:       3,
        lineNumbers: true,
        lineWrapping: true,
        readOnly: true
    });
    $(iframeDocument).find('body').each(function(){
        if((this).getElementsByTagName('style').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> Your &#60;body&#62; contains a &#60;style&#62; tag we would advise you to move this to the head as email clients react differently to this</div>');
        }
        if((this).getElementsByTagName('h1').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h1').length + ' &#60;h1&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h2').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h2').length + ' &#60;h2&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h3').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h3').length + ' &#60;h3&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h4').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h4').length + ' &#60;h4&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h5').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h5').length + ' &#60;h5&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('h6').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('h6').length + ' &#60;h6&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('p').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('p').length + ' &#60;p&#62; tag(s) in your email code, it is better practice to avoid these and style the text using a &#60;td&#62; and/or &#60;span&#62;</div>');
        }
        if((this).getElementsByTagName('div').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('div').length + ' &#60;div&#62; tag(s) in your email code, it is better practice to avoid these and instead try to better construct your &#60;table&#62; structure</div>');
        }
        if((this).getElementsByTagName('strong').length > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have ' + this.getElementsByTagName('strong').length + ' &#60;strong&#62; tag(s) in your email code, it is better practice to avoid these and instead use &#60;b&#62;</div>');
        }
        if((this).getElementsByTagName('unsubscribe').length < 1){
            $('.information-wrapper').append('<div class="information"><div class="fas fa-info-circle"></div> We could not find the Force24&#39;s unsubscribe tag within your email code, please replace your current unsubscribe with the following: &#60;unsubscribe style=""&#62;Unsubscribe&#60;/unsubscribe&#62;</div>');
        }
    });
    $(iframeDocument).find('head').each(function(){
        if((this).getElementsByTagName('title').length < 1){
            $('.error-wrapper').append('<div class="error"><div class="fas fa-bug"></div> Your &#60;head&#62; is missing a required element &#60;title&#62; we have automatically added this in, please update the value of this be best suit what you need</div>');
            $(this).append('<title>Force24 HTML Email</title>');
        }
        if((this).getElementsByTagName('style') < 1){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have no &#60;style&#62; tag in your head, without this and a media query your email will not be mobile responsive</div>');
        }
    });
    $(iframeDocument).find('table').each(function(){
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }
        tableguid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();  
        $(this).attr({
            'data-f24-editable': '',
            'data-f24-display-name': 'Editable Table ' + tableguid
        }).removeAttr('data-f24-id');
        var tableHeight = $(this).attr('height');
        if(tableHeight < 20){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;table&#62; with a height set to ' + tableHeight + ', outlook will automatically resize this to 20px we have applied the following style in order to avoid this (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': tableHeight + 'px',
                'line-height': tableHeight + 'px',
                'font-size': tableHeight + 'px',
                'mso-line-height': tableHeight + 'px'
            });
        }
    });
    $(iframeDocument).find('td').first().parents('body').last().prepend('<spambotdetection class="invisible-preheader" style="font-size:0px; width:0px; height:0px; display:none; color:#e8e8e8; line-height:0px; text-decoration:none;">.</spambotdetection>');
    $(iframeDocument).find('td').each(function(){        
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }
        tdguid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();         
        if($(this).children('unsubscribe').length > 0){
            $(this).after('<spambotdetection class="invisible-preheader" style="font-size:0px; width:0px; height:0px; display:none; color:#e8e8e8; line-height:0px; text-decoration:none;">.</spambotdetection>');
        }
        else{
            $(this).attr({
                'data-f24-editable': '',
                'data-f24-display-name': 'Editable TD ' + tdguid
            }).removeAttr('data-f24-id');
        }
        var tdHeight = $(this).attr('height');
        if(tdHeight < 20){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;td&#62; with a height set to ' + tdHeight + ', outlook will automatically resize this to 20px we have applied the following style in order to avoid this (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': tdHeight + 'px',
                'line-height': tdHeight + 'px',
                'font-size': tdHeight + 'px',
                'mso-line-height': tdHeight + 'px'
            });
        }
    });
    $(iframeDocument).find('tr').each(function(){
        var trHeight = $(this).attr('height');
        if(trHeight){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;tr&#62; with a height set to ' + trHeight + ', You should avoid adding attributes to a &#60;tr&#62;, we have however added the following style in order to avoid Outlook resizing to 20px (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': trHeight + 'px',
                'line-height': trHeight + 'px',
                'font-size': trHeight + 'px',
                'mso-line-height': trHeight + 'px'
            });
        }
    });
    $(iframeDocument).find('span').each(function(){
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }
        spanGuid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
        if($(this).hasClass('invisible-preheader')){
            $(this).attr({
                'data-f24-editable': '',
                'data-f24-display-name': 'Preheader'
            }).removeAttr('data-f24-id');
            $(this).after('<spambotdetection class="invisible-preheader" style="font-size:0px; width:0px; height:0px; display:none; color:#e8e8e8; line-height:0px; text-decoration:none;">.</spambotdetection>');
        }
        else{
            $(this).attr({
                'data-f24-editable': '',
                'data-f24-display-name': 'Editable Span ' + spanGuid
            }).removeAttr('data-f24-id');
        }
        var spanHeight = $(this).attr('height');
        if(spanHeight > 0){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You should try to avoid using height on a &#60;span&#62; as this is an inline element and reacts differently in different email clients"</div>');
        }
    });
    $(iframeDocument).find('img').each(function(){
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }
        imgGuid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
        $(this).attr({
            'data-f24-editable': '',
            'data-f24-display-name': 'Editable Image ' + imgGuid
        }).removeAttr('data-f24-id');
        var imgHeight = $(this).attr('height');
        if(imgHeight < 20){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;img&#62; with a height set to ' + imgHeight + ', outlook will automatically resize this to 20px we have applied the following style in order to avoid this (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': imgHeight + 'px',
                'line-height': imgHeight + 'px',
                'font-size': imgHeight + 'px',
                'mso-line-height': imgHeight + 'px'
            });
        }
    });
    $(iframeDocument).find('a').each(function(){   
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
        }         
        if((this).getElementsByTagName('img').length > 0){
            aGuid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
            $(this).attr({
                'data-f24-no-edit': 'text',
                'data-f24-editable': '',
                'data-f24-display-name': 'Editable Link ' + aGuid
            }).removeAttr('data-f24-id');
        }
        else if($(this).attr('href') == "[nonTrackingLink]"){}
        else{
            aGuid = (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
            $(this).attr({
                'data-f24-editable': '',
                'data-f24-display-name': 'Editable Link ' + aGuid
            }).removeAttr('data-f24-id');
        }
        var aHeight = $(this).attr('height');
        if(aHeight < 20){
            $('.notice-wrapper').append('<div class="notice"><div class="fas fa-exclamation-triangle"></div> You have a &#60;a&#62; with a height set to ' + aHeight + ', outlook will automatically resize this to 20px we have applied the following style in order to avoid this (style="height:#px; line-height#px; font-size#px; mso-line-height:#px;)</div>');
            $(this).css({
                'height': trHeight + 'px',
                'line-height': trHeight + 'px',
                'font-size': trHeight + 'px',
                'mso-line-height': trHeight + 'px'
            });
        }
    });
    var doc = '<!doctype html>';
    resultEditor.setValue(doc.concat(iframeDocument.documentElement.outerHTML));
    $('.downloadTemplate').click(function(){
        var a = document.body.appendChild(
            document.createElement("a")
        );
        a.download = "template.html";
        a.href = "data:text/html," + encodeURIComponent(doc.concat(iframeDocument.documentElement.outerHTML));
        a.click();
    });
    $('.information-wrapper').append('<div class="information"><div class="fas fa-info-circle"></div> We have automatically added editable tags so that your email will work well in the Force24 portal</div>');
    $('.information-wrapper').append('<div class="information"><div class="fas fa-info-circle"></div> We have automatically added Spam Bot Detection, this helps us to eliminate spam bots and avoid unreliable click through rates in our tracking in the Force24 portal</div>');
}
$('.validate-code').on('click', function(){
    var delay = editor.lineCount() * 5;
    if(delay > 5000){
        delay = 5000;
    }
    console.log(delay);
    $('.loader-overlay').fadeIn();
    setTimeout(function(){ 
        $('.validate-code').html('Validate again?');
        $('.notice-wrapper').text('');
        $('.error-wrapper').text('');
        $('.information-wrapper').text('');
        $('#codeOutput').empty();
        var iframeElement = document.querySelector('iframe');
        iframeDocument = iframeElement.contentDocument;
        iframeDocument.open();
        var editorVal = editor.getValue();
        editorVal = editorVal.replace(/“/gi, '')
            .replace(/”/gi, '')
            .replace(/„/gi, '')
            .replace(/“/gi, '')
            .replace(/”/gi, '')
        iframeDocument.write(editorVal);
        iframeDocument.close();        
        validate();          
        $('.loader-overlay').fadeOut();  
    }, delay);        
});
function loadfile(input){
    var delay = input.files[0].size / 10;    
    if(delay > 5000){
        delay = 5000;
    }
    console.log(delay);
    $('.loader-overlay').fadeIn();
    setTimeout(function(){
        var reader = new FileReader();
        reader.onload = function(e){
            var iframeElement = document.querySelector('iframe');
            iframeDocument = iframeElement.contentDocument;
            iframeDocument.open();
            iframeDocument.write(e.target.result);
            iframeDocument.close();
            validate();
        };
        reader.readAsText(input.files[0]);
        $('.downloadTemplate').fadeIn();
        $('#codeUpload').fadeOut();
        $('.loader-overlay').fadeOut();     
    }, delay);
}
$('#byUpload').click(function(){
    editor.setValue("<table>\n\t<tr>\n\t\t<td>\n\t\t\tReplace this code with your HTML\n\t\t</td>\n\t</tr>\n</table>");
    $('#codeOutput').empty();
    $('#codeUpload').show();
    $('#codeEditor').hide();
    $('.validate-code').hide();
    $('#copyCodeHead').hide();
    $('.downloadTemplate').show();
    $('.notice-wrapper').text('');
    $('.error-wrapper').text('');
    $('.information-wrapper').text('');
});
$('#byDirectInput').click(function(){
    editor.setValue("<table>\n\t<tr>\n\t\t<td>\n\t\t\tReplace this code with your HTML\n\t\t</td>\n\t</tr>\n</table>");
    $('#codeOutput').empty();
    $('#codeUpload').hide();
    $('#codeEditor').show();
    $('.validate-code').show();
    $('#copyCodeHead').show();
    $('.downloadTemplate').show();
    $('.validate-code').html('Validate this');
    $('.notice-wrapper').text('');
    $('.error-wrapper').text('');
    $('.information-wrapper').text('');
});
function openDocs() {
    $(window).scrollTop(0);
    $('.main-wrap').css({
        'transform': 'perspective(1000px) translate3d(0,20vh,0) rotate3d(1,0,0,30deg)',
        'position': 'relative',
        'transition': 'all 0.6s',
        'transition-timing-function': 'cubic-bezier(0.2,1,0.3,1)'
    });
    $('body').css({
        'overflow': 'hidden'  ,
        'transition': 'all 0.6s'
    });
    $('.button-presets').css({
        'visibility': 'visible',
        'transition': 'all 0.6s',
        'transition-delay': '0.6s',
        'display':'block',
    });
}

/* Set the width of the side navigation to 0 */
function closeDocs() {
    $('.main-wrap').css({
        'transform': 'perspective(0) rotateX(0)',
        'position': 'inherit',
        'top': '0',
        'transition': 'all 0.6s'
    });
    $('body').css({
        'overflow': 'auto',
        'transition': 'all 0.6s'
    });
    $('.button-presets').css({
        'visibility': 'hidden',
        'transition': 'all 0.6s',
        'display':'none',
        'transition-delay': '0'
    });
}
    }});