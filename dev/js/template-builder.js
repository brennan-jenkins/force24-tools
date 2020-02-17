// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("template-builder")) {
        $('.email-template-container').append('<iframe src="templates/template_1/template.html" width="100%" height="500"  frameborder="0">');
        $('.template-company-name').on('keyup', function(){
            templateCompanyName = $(this).val();
            $("iframe").contents().find("img").attr('alt', templateCompanyName);
        });
        $('.template-company-url').on('keyup', function(){
            templateCompanyUrl = $(this).val();
            newUrl = "[nonTrackingLink]";
            $("iframe").contents().find("a").attr('href', templateCompanyUrl);
            $("iframe").contents().find(".nontrack").attr("href", newUrl);
        });
        
            //bgcolor on the td and border on anchor tag, color on text
        function updateCtaBgColour(jscolor) {
            $("iframe").contents().find("td[data-f24-editor-cta-button-td]").css({'background-color': '#'+jscolor}).attr('bgcolor', '#'+jscolor);
            $("iframe").contents().find("td[data-f24-editor-cta-button-td]").find('a').css({'background-color': '#'+jscolor});
        }
        //bgcolor on the td and border on anchor tag, color on text
        function updateCtaBorderColour(jscolor) {
            $("iframe").contents().find("td[data-f24-editor-cta-button-td]").find('a').css({'border-color': '#'+jscolor});
        }
        function updateCtaTextColour(jscolor) {
            $("iframe").contents().find("td[data-f24-editor-cta-button-td]").find('a').css({'color': '#'+jscolor});
        }
        function updatePrimaryColour(jscolor) {
            $("iframe").contents().find(".primary-colour").css({'background-color': '#'+jscolor});
        }
        function updateSecondaryColour(jscolor) {
            $("iframe").contents().find(".secondary-colour").css({'background-color': '#'+jscolor});
        }
    }
});
