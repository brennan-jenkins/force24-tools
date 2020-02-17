// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("add-to-calendar")) {

/* http://addtocalendar.com/
 *
 *
 * @license
 The MIT License (MIT)
 Copyright (c) 2015 AddToCalendar
 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:
 The above copyright notice and this permission notice shall be included in all
 copies or substantial portions of the Software.
 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 SOFTWARE.
 */


(function (w, d) {
    function ipLookUp () {
        $.ajax('http://ip-api.com/json')
        .then(
            function success(response) {
                $('.location_input').val(response.city)
            },
      
            function fail(data, status) {
                console.log('Request failed.  Returned status of',
                            status);
            }
        );
      }   
      ipLookUp()     

    var emailPattern = 	/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var
        atc_url = '//addtocalendar.com/atc/',
        atc_version = '1.5';


    if (!Array.indexOf) {
        Array.prototype.indexOf = function (obj) {
            for (var i = 0, l = this.length; i < l; i++) {
                if (this[i] == obj) {
                    return i
                }
            }
            return -1
        }
    }

    if (!Array.prototype.map) {
        Array.prototype.map = function (f) {
            var result = [];
            for (var i = 0, l = this.length; i < l; i++) {
                result.push(f(this[i]))
            }
            return result
        }
    }

    var isArray = function (obj) {
        return Object.prototype.toString.call(obj) === "[object Array]"
    };

    var isFunc = function (obj) {
        return Object.prototype.toString.call(obj) === "[object Function]"
    };

    var ready = function (w, d) {
        var inited = false,
            loaded = false,
            queue = [],
            done, old;

        function go() {
            if (!inited) {
                if (!d.body) return setTimeout(go, 13);
                inited = true;
                if (queue) {
                    var j, k = 0;
                    while (j = queue[k++]) j.call(null);
                    queue = null
                }
            }
        }

        function check() {
            if (loaded) return;
            loaded = true;
            if (d.readyState === "complete") return go();
            if (d.addEventListener) {
                d.addEventListener("DOMContentLoaded", done, false);
                w.addEventListener("load", go, false)
            } else {
                if (d.attachEvent) {
                    d.attachEvent("onreadystatechange", done);
                    w.attachEvent("onload", go);
                    var k = false;
                    try {
                        k = w.frameElement == null
                    } catch (j) {
                    }
                    if (b.doScroll && k) ie()
                } else {
                    old = w.onload;
                    w.onload = function (e) {
                        old(e);
                        go()
                    }
                }
            }
        }

        if (d.addEventListener) {
            done = function () {
                d.removeEventListener("DOMContentLoaded", done, false);
                go()
            }
        } else {
            if (d.attachEvent) {
                done = function () {
                    if (d.readyState === "complete") {
                        d.detachEvent("onreadystatechange", done);
                        go()
                    }
                }
            }
        }

        function ie() {
            if (inited) return;
            try {
                b.doScroll("left")
            } catch (j) {
                setTimeout(ie, 1);
                return
            }
            go()
        }

        return function (callback) {
            check();
            if (inited) {
                callback.call(null)
            } else {
                queue.push(callback)
            }
        }
    }(w, d);

    if (w.addtocalendar && typeof w.addtocalendar.start == "function") return;
    if (!w.addtocalendar) w.addtocalendar = {};

    addtocalendar.languages = {
        'de': 'In den Kalender',
        'en': 'Add to Calendar',
        'es': 'Añadir al Calendario',
        'fi': 'Lisää kalenteriin',
        'fr': 'Ajouter au calendrier',
        'hi': 'कैलेंडर में जोड़ें',
        'in': 'Tambahkan ke Kalender',
        'ja': 'カレンダーに追加',
        'ko': '캘린더에 추가',
        'pt': 'Adicionar ao calendário',
        'ru': 'Добавить в календарь',
        'sv': 'Lägg till i kalender',
        'uk': 'Додати в календар',
        'zh': '添加到日历',
        'no': 'Legg til i kalender'
    };

    addtocalendar.calendar_urls = {}

    addtocalendar.loadSettings = function (element) {
        var settings = {
            'language': 'auto',
            'show-list-on': 'click',
            'calendars': [
                'iCalendar',
                'Google Calendar',
                'Outlook',
                'Outlook Online',
                'Yahoo! Calendar'
            ],
            'secure': 'auto',
            'on-button-click': function () {
            },
            'on-calendar-click': function () {
            }
        };

        for (var option in settings) {
            var pname = 'data-' + option;
            var eattr = element.getAttribute(pname);
            if (eattr != null) {

                if (isArray(settings[option])) {
                    settings[option] = eattr.replace(/\s*,\s*/g, ',').replace(/^\s+|\s+$/g, '').split(',');
                    continue;
                }

                if (isFunc(settings[option])) {
                    var fn = window[eattr];
                    if (isFunc(fn)) {
                        settings[option] = fn;
                    } else {
                        settings[option] = eval('(function(mouseEvent){' + eattr + '})');
                    }
                    continue;
                }

                settings[option] = element.getAttribute(pname);
            }
        }

        return settings;
    };

    addtocalendar.load = function () {
        var calendarsUrl = {
            'iCalendar': 'ical',
            'Google Calendar': 'google',
            'Outlook': 'outlook',
            'Outlook Online': 'outlookonline',
            'Yahoo! Calendar': 'yahoo'
        };
        var utz = (-(new Date()).getTimezoneOffset().toString());

        var languages = addtocalendar.languages;

        var dom = document.getElementsByTagName('*');
        for (var tagnum = 0; tagnum < dom.length; tagnum++) {
            var tag_class = dom[tagnum].className;

            if (tag_class.length && tag_class.split(" ").indexOf('addtocalendar') != -1) {

                var settings = addtocalendar.loadSettings(dom[tagnum]);

                var protocol = 'http:';
                if (settings['secure'] == 'auto') {
                    protocol = location.protocol == 'https:' ? 'https:' : 'http:';
                } else if (settings['secure'] == 'true') {
                    protocol = 'https:';
                }

                var tag_id = dom[tagnum].id;
                var atc_button_title = languages['en'];
                if (settings['language'] == 'auto') {
                    var user_lang = "no_lang";
                    if (typeof navigator.language === "string") {
                        user_lang = navigator.language.substr(0, 2)
                    } else if (typeof navigator.browserLanguage === "string") {
                        user_lang = navigator.browserLanguage.substr(0, 2)
                    }

                    if (languages.hasOwnProperty(user_lang)) {
                        atc_button_title = languages[user_lang];
                    }
                } else if (languages.hasOwnProperty(settings['language'])) {
                    atc_button_title = languages[settings['language']];
                }

                var url_parameters = [
                    'utz=' + utz,
                    'uln=' + navigator.language,
                    'vjs=' + atc_version
                ];

                var addtocalendar_div = dom[tagnum].getElementsByTagName('var');
                var event_number = -1;
                for (var varnum = 0; varnum < addtocalendar_div.length; varnum++) {
                    var param_name = addtocalendar_div[varnum].className.replace("atc_", "").split(" ")[0];
                    var param_value = addtocalendar_div[varnum].innerHTML;

                    if (param_name == 'event') {
                        event_number++;
                        continue;
                    }

                    if (param_name == addtocalendar_div[varnum].className) {
                        if (param_name == 'atc-body') {
                            atc_button_title = param_value;
                        }
                        continue;
                    }

                    if (event_number == -1) {
                        continue;
                    }

                    url_parameters.push('e[' + event_number + '][' + param_name + ']' + '=' + encodeURIComponent(param_value));
                }


                var atcb_link_id_val = (tag_id == '' ? '' : (tag_id + '_link') );
                var atcb_list = document.createElement('span');
                atcb_list.className = 'atcb-list';
                atcb_list.style.fontFamily = "arial, helvetica, sans-serif";
                atcb_list.style.fontSize = "16px";
                atcb_list.style.lineHeight = "145%";
                
                var menu_links = '';                
                for (var cnum in settings['calendars']) {
                    if (!calendarsUrl.hasOwnProperty(settings['calendars'][cnum])) {
                        continue;
                    }
                    var cal_id = calendarsUrl[settings['calendars'][cnum]];
                    var atcb_cal_link_id = (tag_id == '' ? '' : ('id="' + tag_id + '_' + cal_id + '_link"') );
                    menu_links += '<a ' + atcb_cal_link_id + ' class="atcb-item-link" style="color:#000000; text-decoration:underline;" href="'
                        + (cal_id == 'ical' && /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream ? 'webcal:' : protocol)
                        + atc_url
                        + cal_id + '?' + url_parameters.join('&')
                        + '" target="_blank" rel="nofollow">' + settings['calendars'][cnum] + '</a>&nbsp; &nbsp; ';
                }
                atcb_list.innerHTML = menu_links;

                var atcb_link;
                if (dom[tagnum].querySelector('.atcb-link') == undefined) {
                    atcb_link = document.createElement('a');
                    atcb_link.className = 'atcb-link';
                    atcb_link.innerHTML = atc_button_title;
                    atcb_link.id = atcb_link_id_val;
                    atcb_link.tabIndex = 1;

                    dom[tagnum].appendChild(atcb_link);
                    dom[tagnum].appendChild(atcb_list);
                } else {
                    atcb_link = dom[tagnum].querySelector('.atcb-link');
                    atcb_link.parentNode.appendChild(atcb_list);
                    atcb_link.tabIndex = 1;
                    if (atcb_link.id == '') {
                        atcb_link.id = atcb_link_id_val;
                    }
                }

                if (atcb_link.addEventListener) {
                    atcb_link.addEventListener('click', settings['on-button-click'], false);
                } else {
                    atcb_link.attachEvent('onclick', settings['on-button-click']);
                }

                var item_links = dom[tagnum].querySelectorAll('atcb-item-link');

                for (var varnum = 0; varnum < item_links.length; varnum++) {
                    var item_link = item_links[varnum];
                    if (item_link.addEventListener) {
                        item_link.addEventListener('click', settings['on-calendar-click'], false);
                    }else{
                        item_link.attachEvent('onclick', settings['on-calendar-click']);
                    }

                }
            }
        }
        var CopyCalendarCode = $('.atcb-list').html();
        $('.calendarCode').html('<textarea style="width:100%; height:300px; background-color:transparent; border:0;resize:none; outline:0;"><span style="font-family: arial, helvetica, sans-serif; font-size: 16px; line-height: 145%;">' + CopyCalendarCode + '</span></textarea>');
    };
    $('.date_start_input').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:SS',
    }).on('change', function(){
        var date_start = $(this).val();
        $('.atc_date_start').text(date_start);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.date_end_input').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:SS'
    }).on('change', function(){
        var date_end = $(this).val();
        $('.atc_date_end').text(date_end);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.title_input').on('keyup', function(){
        var calendarTitle = $(this).val();
        $('.atc_title').text(calendarTitle);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.desc_input').on('keyup', function(){
        var calendarDesc = $(this).val();
        $('.atc_description').text(calendarDesc);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    
    $('.location_input').on('change', function(){
        var calendarLocation = $(this).val();
        $('.atc_location').text(calendarLocation);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.org_input').on('keyup', function(){
        var calendarOrg = $(this).val();
        $('.atc_organizer').text(calendarOrg);
        $('.atcb-link, .atcb-list').remove();
        addtocalendar.load();
        $('.atcb-link').remove();
    });
    $('.org_email_input').on('keyup', function(){
        var calendarOrgEmail = $(this).val();
        if (emailPattern.test(calendarOrgEmail) === true) {
            $(this).css('background-color', '#b2ffb2');
            $(this).siblings('p').remove(); 
            $('.atc_organizer_email').text(calendarOrgEmail);
            $('.atcb-link, .atcb-list').remove();
            addtocalendar.load();
            $('.atcb-link').remove();           
        } else {
            $(this).css('background-color', '#ffadad');
            $(this).siblings('p').remove();
            $(this).after('<p style="font-size:12px; color:#ff0000;">Invalid email address</p>');
        }
    });
})(window, document);
    }
});



