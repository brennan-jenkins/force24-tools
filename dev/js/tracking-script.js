// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("tracking-script")) {
        var trackingScriptCode = document.getElementById('tracking-script-code');
        var setAnonymousCookie = false;
        var setClientId = $('#clientIdValue').val();
        var setFormMapping = false;
        var setMarketingListId = $('#MLIdValue').val();
        var formSelectorType = "#";
        var formSelectorValue = $('#formSelectorValue').val();
        var formMappingLocation = "";
        var formMappingLocationJoined = "";
        var mappedFieldNameValue = "";
        var mappedFieldNameValueJoined = "";
        var mappedFieldNameValue = "";
        var pattern = /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i;
        var editor = CodeMirror.fromTextArea(trackingScriptCode, {
            mode: 'javascript',
            tabMode: 'indent',
            lineNumbers: true,
            lineWrapping: true,
            autoCloseTags: true,
            theme: "xq-dark",
            readOnly: true
        });

        editor.getDoc().setValue('<!-- Start Force24 tracking -->\n<script>\n!function(f,o,r,c,e,_2,_4){f.Force24Object=e,f[e]=f[e]||function(){\n(f[e].q=f[e].q||[]).push(arguments)},f[e].l=1*new Date,\n_2=o.createElement(r),_4=o.getElementsByTagName(r)[0],_2.async=1,\n_2.src=c,_4.parentNode.insertBefore(_2,_4)}(window,document,"script",\n"//tracking1.force24.co.uk/tracking/V2/main.min.js","f24");\nf24("create", "' + setClientId + '");\nf24("send", "pageview");\nf24("cookieAnonymous", ' + setAnonymousCookie + ');\n</script>\n<!-- End Force24 tracking -->');

        function updateHtml(){
            editor.getDoc().setValue('<!-- Start Force24 tracking -->\n<script>\n!function(f,o,r,c,e,_2,_4){f.Force24Object=e,f[e]=f[e]||function(){\n(f[e].q=f[e].q||[]).push(arguments)},f[e].l=1*new Date,\n_2=o.createElement(r),_4=o.getElementsByTagName(r)[0],_2.async=1,\n_2.src=c,_4.parentNode.insertBefore(_2,_4)}(window,document,"script",\n"//tracking1.force24.co.uk/tracking/V2/main.min.js","f24");\nf24("create", "' + setClientId + '");\nf24("send", "pageview");\nf24("cookieAnonymous", ' + setAnonymousCookie + ');\n</script>\n<!-- End Force24 tracking -->');
        }
        function updateHtmlWithMapping(){
            editor.getDoc().setValue('<!-- Start Force24 tracking -->\n<script>\n!function(f,o,r,c,e,_2,_4){f.Force24Object=e,f[e]=f[e]||function(){\n(f[e].q=f[e].q||[]).push(arguments)},f[e].l=1*new Date,\n_2=o.createElement(r),_4=o.getElementsByTagName(r)[0],_2.async=1,\n_2.src=c,_4.parentNode.insertBefore(_2,_4)}(window,document,"script",\n"//tracking1.force24.co.uk/tracking/V2/main.min.js","f24");\nf24("create", "' + setClientId + '");\nf24("send", "pageview");\nf24("cookieAnonymous", ' + setAnonymousCookie + ');\nf24("formSelector", "form' + formSelectorType + formSelectorValue + '");\nf24("formMap", [\n{\nselector:"form' + formSelectorType + formSelectorValue + '",\nmeta:{id: "' + formSelectorValue + '", name: "' + formSelectorValue + '", f24name: "' + formSelectorValue + '"},\nfields:{' + formMappingLocationJoined + '},\nmarketingList: "' + setMarketingListId + '"\n}\n]);\n</script>\n<!-- End Force24 tracking -->');
        }

        $('#clientIdValue').on('keyup', function(){
            setClientId = $(this).val();
            if (pattern.test(setClientId) === true) {
                $(this).css('background-color', '#b2ffb2');
                $(this).siblings('p').remove();
                if(setMarketingListId == setClientId){
                    $(this).siblings('p').remove();
                    $(this).after('<p style="font-size:12px; color:#ff0000;">Your Client ID and Marketing List ID cannot be the same</p>');
                    $(this).css('background-color', '#ffadad');
                    $('#MLIdValue').siblings('p').remove();
                    $('#MLIdValue').css('background-color', '#ffadad').after('<p style="font-size:12px; color:#ff0000;">Your Client ID and Marketing List ID cannot be the same</p>');
                }
            } else {
                $(this).css('background-color', '#ffadad');
                $(this).siblings('p').remove();
                $(this).after('<p style="font-size:12px; color:#ff0000;">Invalid Client ID - If you are having issues, please contact your account manager</p>');
            }
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });

        $('input[name="anonCookieValue"]').on('change', function(){
            setAnonymousCookie = $(this).val();
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });

        $('input[name="addFormMapping"]').on('change', function(){
            setFormMapping = $(this).val();
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
                $('.mappingSettings').slideDown();
            }
            else{
                updateHtml();
                $('.mappingSettings').slideUp();
            }
        });

        $('#MLIdValue').on('keyup', function(){
            setMarketingListId = $(this).val();    
            if (pattern.test(setMarketingListId) === true) {
                $(this).css('background-color', '#b2ffb2');
                $(this).siblings('p').remove();
                if(setMarketingListId == setClientId){
                    $(this).siblings('p').remove();
                    $(this).after('<p style="font-size:12px; color:#ff0000;">Your Client ID and Marketing List ID cannot be the same</p>');
                    $(this).css('background-color', '#ffadad');
                    $('#clientIdValue').siblings('p').remove();
                    $('#clientIdValue').css('background-color', '#ffadad').after('<p style="font-size:12px; color:#ff0000;">Your Client ID and Marketing List ID cannot be the same</p>');
                }
            } else {
                $(this).css('background-color', '#ffadad');
                $(this).siblings('p').remove();
                $(this).after('<p style="font-size:12px; color:#ff0000;">Invalid Marketing List ID - If you are having issues, please contact your account manager</p>');
            }
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });
        $('input[name="formMappingSelectorType"]').on('change', function(){
            formSelectorType = $(this).val();
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });
        $('#formSelectorValue').on('keyup', function(){
            formSelectorValue = $(this).val();
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });

        $('.styled-checkbox input[type=checkbox]').on('change', function(){
            $(this).siblings('.nameToMap').toggle();
            if($(this).prop('checked')){
                $(this).parent().css('margin-bottom', '60px');
            }
            else{
                $(this).parent().css('margin-bottom', '0px');
            }
        });

        $('input[name="nameToMap"]').on('keyup', function(){
            formMappingLocationJoined = $('input[name="nameToMap"]').map(function (index, el) {
                var $checkbox = $(el).parent().find('[name="formMappingLocation"]');

                if (!$checkbox.is(':checked'))
                    return '';

                return $checkbox.val() + '"' + el.value + '"';
            }).get().filter(function (el){
                return el; 
            }).join(',\n');
            if(setFormMapping == "true"){
                updateHtmlWithMapping()
            }
            else{
                updateHtml();
            }
        });

        var sticky = new Waypoint.Sticky({
            element: $('.tracking-script-code')[0]
        });
    }
});