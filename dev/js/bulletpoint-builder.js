// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("bulletpoint-page")) {
        $('#generateList').on('change keypress', function(event) {
            var userInputList = $('#generateList').val(); //user input variable
            var keycode = event.keyCode || event.which;
            // var listStyleType = $('#bulletStyle').val(); //get select value
            // $('#previewList').css('list-style-type', listStyleType); // select style type
            var listStyleType = $( "#bulletStyle option:selected" ).text();
            var bulletAlign = $( "#bulletAlign option:selected" ).text();
            
            $('#previewTable').find('tr').children('td:first-child').css('text-align', 'left'); // add text align left to bulletpoint td
            $(document).on("change keyup", function() {
                td1Val = $('#td1Val').val();
                td3Val = 100 - td1Val; // 100 minus the bulletpoint width
                $(td1).css({
                    'width': td1Val + '%', 
                    'line-height': '135%',
                    'font-size': '14px',
                    'font-family': 'arial, helvetica, sans-serif',
                    'color': '#000000'
                });
                $(td3).css({
                    'width': td3Val + '%', 
                    'padding': '0 0 0 5px',
                    'line-height': '135%',
                    'font-size': '14px',
                    'font-family': 'arial, helvetica, sans-serif',
                    'color': '#000000'
                });
            });
    
            if(keycode == '13' && this.value) { // press enter, disable if empty
                var td1 = document.createElement("td");
                var td3 = document.createElement("td");		
                $('#generateList').val(''); //clear value after each keypress
                $("#previewTable") // append table
                .append(
                    $("<tr>")
                    .append(
                        $(td1).attr('valign', 'top'),
                        $(td1).text(function(){
                            if(listStyleType == "image"){
                                $(this).append("<img src='https://www.force24.co.uk/src/img/logos/default-thumbnail.png' style='width: 20px; display:block; border:0;' width='20' data-f24-editable />");
                            }
                            else{
                                $(this).text(listStyleType);
                            }
                        }),
                        $(td3).attr('valign', 'top'),
                        $(td3).text(userInputList)
                    )
                );
    
                $('#bulletAlign').change(function(){ // vertical alignment function
                    var bulletAlign = $('#bulletAlign option:selected').text();
                    $('#previewTable').find('tr').children('td:first-child').attr('valign',bulletAlign)
                }); 
                
            }
            
        });
        
        $('#bulletStyle').on('change', function(){ // bulletpoint style
            var listStyleType = $( "#bulletStyle option:selected" ).text();
            if ($(this).val()=="image") // if image option selected
            {
                $('#previewTable').find('tr').children('td:first-child').text('').append("<img src='https://www.force24.co.uk/src/img/logos/default-thumbnail.png' style='width: 20px; display:block; border:0;' width='20' data-f24-editable />");
            }
            else{
                $('#previewTable').find('tr').children('td:first-child').text(listStyleType);
            }
        });
        
    
        $('table').on('dblclick','tr',function(e){ // remove tr on double click
            e.preventDefault();
            $(this).closest('tr').remove();
        });
    
    
        $('#generateCode').click(function(e){ //
            e.preventDefault();
            var preview = $('#tableWrapper').html();
            $('#bulletpointOutput').val(preview);
        });
    
        $(".copy-text").click(function(){
            $('#bulletpointOutput').select();
            document.execCommand('copy');
            $('#copiedToClip').modal('show').find('.modal-title').text('copied to clipboard');
            setInterval(function () {
                $('#copiedToClip').modal('hide');
            }, 1500);
        });
    }
});