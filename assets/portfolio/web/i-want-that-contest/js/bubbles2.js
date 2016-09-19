/*jslint browser: true*/
/*global $, jQuery, alert*/

(function ($) {
    $.QueryString = (function (a) {
        if (a == "") return {};
        var b = {};
        for (var i = 0; i < a.length; ++i)
        {
            var p=a[i].split('=');
            if (p.length != 2) continue;
            b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
        }
        return b;
    })(window.location.search.substr(1).split('&'))
})(jQuery);

function addClick(n) {
    $($("#selections ul li.empty")[0]).text("").removeClass('active empty').attr('class', function (i, c) {
        // remove bubble-x classes
        return c.replace(/(^|\s)bubble-\S+/g, '');
    }).addClass('selected bubble-' + n);
    $('.desc').hide();
    $("a.bubble").removeClass("hover do-not-pulse");
    // $("a.bubble-" + n).replaceWith($("a.bubble-" + n).contents());
    $("a.bubble-" + n).addClass('do-not-hover');
    if ($("#selections ul li.empty").length <= 0) {
        // alert('GAME OVER');
        $('#mid-copy').hide();
        $('#undo').hide();
        $("#complete").show();
        $("#overlay").addClass("clear").show().unbind();
        // $("a.bubble").removeClass("do-not-pulse")
        return false;
    } else {
        $($("#selections ul li.empty")[0]).addClass('active');
    }
    $('#intro-copy').hide();
    $('#mid-copy').show();
    $('#undo').show();
    return false;
}

function hoverAction(n) {
    $($("#selections ul li.empty")[0]).attr('class', function (i, c) {
        // remove bubble-x classes
        return c.replace(/(^|\s)bubble-\S+/g, '');
    }).addClass('active empty bubble-' + n);
    // $('#intro-img').hide();
    // $('.desc').hide();
    // $("a.bubble").removeClass("hover").addClass('do-not-pulse');
    // $('.desc-' + n).show();
    $("a.bubble-" + n).addClass("hover");
    return false;
}

function hoverStart(n, v) {
    var timeout = $("a.bubble").hasClass("hover") ? 600: 300;
    return setTimeout(function () { hoverAction(n, v); }, timeout);
}

function hoverEnd(timeout) { clearTimeout(timeout); return true; }

function parseQueryString(queryString) {
    var params = [], queries, temp, i, l, obj = {};
    // Split into key/value pairs
    if (queryString.length > 0){
        queries = queryString.split('?')[1].split("&");
        // Convert the array of strings into an object
        for (var i = 0, l = queries.length; i < l; i++ ) {
            temp = queries[i].split('=');
            obj[temp[0]] = temp[1]
            params.push( {'name':temp[0], 'value':temp[1]} );
        }
        return params;
    }
    return [];
}

function undoSelection(){
    var selections = $("#selections ul li");
    var isPie = false;
    for (var i=selections.length-1, j=0; i>=j; i--){
        // Count backwards until you find one that's been activated
        var self = $(selections[i]);
        self.removeClass('active');
        if (self.hasClass('selected')){
            self.removeClass('bubble selected');
            if (self.hasClass('pie_first-child')){ self.removeClass('pie_first-child'); isPie = true}
            $('.' + self.attr('class')).removeClass('do-not-hover'); // Fix the bubbles that have been deactivated
            self.addClass('active empty').text(i + 1);
            if (isPie){ self.addClass('pie_first-child'); }
            if (i === 0){ // When you get to the last item:
                $('#undo').hide(); 
                $('#mid-copy').hide();
                $('#intro-copy').show();
            }
            break;
        }
    }
    return false;
}

// function createBubble(container, n) {
//     var bubble_wrap = $('<a/>', {'href': "#", 'class': 'bubble bubble-' + n }),
//         bubble = $('<div/>', {'class': 'bubble bubble-' + n }).text(n),

//         desc_wrap = $('<div/>', {'class': 'desc desc-' + n }),
//         description = $('<p/>').text("Description " + n),
//         add_link = $('<a/>', {'href': "#", 'class': 'add'}).text('Add'),
//         clear_link = $('<a/>', {'href': "#", 'class': 'choose-again'}).text('Choose again');
//     bubble_wrap.append(bubble);
//     desc_wrap.append(description, add_link, '  |  ', clear_link);
//     container.append(bubble_wrap, desc_wrap);
// }

// function createBubbles() {
//     var container = $('#game'),  i = 1, j = 16;
//     for (i, j; i <= j; i++) {
//         createBubble(container, i);
//     }
// }

$(document).ready(function () {
    // createBubbles();
    var timeout = [];
    // CLICKS
    // $("a.bubble").click(function () { return false; });
    $(".desc a.choose-again").click(function () {
        $('#intro-img').show();
        $('.desc').hide();
        $("a.bubble").removeClass("hover do-not-pulse");
        $($("#selections ul li.empty")[0]).removeClass('bubble selected').attr('class', function (i, c) {
            // remove bubble-x classes
            return c.replace(/(^|\s)bubble-\S+/g, '');
        }).addClass('active empty').text(6 - $("#selections ul li.empty").length);
        return false;
    });
    // $(".desc a.add").click(function () { return false; });
    // BUBBLES
    $('a.bubble').click(function (e) {
        e.preventDefault();
    }).addClass('do-not-hover');
    $('#get-started').click(function () {    
        // if (typeof $.QueryString['mode'] === 'undefined'){
            $("#intro").fadeOut('fast');
            $("#intro-copy").fadeIn('fast');
            $("#selections").fadeIn('fast');
            $("#footer").addClass('open', 300);
            $("#how-to-play-btn").show();
            $("#start-over-btn").show();
            $('a.bubble').unbind('click').each(function (i) {
                // Fade in the bubbles, then make them clickable
                var self = $(this).children('div.bubble'),
                    opacity = self.css('opacity'),
                    number_of_elements = 16,
                    sections = 2,
                    delay_sectioning = i%(number_of_elements/sections),
                    order_speed = 150,
                    order_delay = order_speed*delay_sectioning,
                    fade_duration = Math.random() * order_speed * 3,
                    reverse_delay = order_speed * 4;
                if (Boolean(Math.floor(Math.random() * 2))){
                    self.delay(order_delay).css('opacity', opacity).animate({ opacity: 1 }, fade_duration)
                } else {
                    self.delay(reverse_delay-order_delay).css('opacity', opacity).animate({ opacity: 1 }, fade_duration)
                }

                var count = parseInt($(this)[0].className.split(' ')[1].split('-')[1], '10');
                // CLICKS
                $(".desc-" + count + " a.add").click(function () {
                    addClick(count);
                    $('#intro-img').show();
                    return false;
                });
                // HOVERS
                $("a.bubble-" + count).hover(function () {
                    if (!$(this).hasClass('do-not-hover')) { 
                        timeout[count] = hoverStart(count);
                        $(this).children('div.bubble').css('opacity', '');
                    }
                    return false;
                }, function () {
                    hoverEnd(timeout[count]);
                    delete timeout[count];
                    return false;
                }).click(function () {
                    if (!$(this).hasClass('do-not-hover') && $("#selections ul li.empty").length > 0) { 
                        $('.desc').hide();
                        $('.desc-' + count).show();
                        $('#intro-img').hide();
                        $("a.bubble").removeClass("do-not-pulse")
                        $(this).addClass('do-not-pulse');
                        // $("a.bubble").removeClass("hover").addClass('do-not-pulse');
                    }
                    return false;
                });
            }).removeClass('do-not-hover');
            return false;
    });

    // Completed Game
    $('#yes-continue-btn').click(function () {
        given_data = parseQueryString(document.location.search)
        features_arr = []
        // console.log(features_arr);
        zero_features = features_arr.length
        $('#selections ul li').each(function () {
            var classes = $(this).attr('class').split(/\s+/);
            for (var i in classes){
                match = classes[i].match(/bubble-(\d+)/);
                if (match !== null){
                    id = features_arr.length - zero_features;
                    features_arr[features_arr.length] = {'name': 'feature-'+id, 'value':match[1] }
                }
            }
        });
        // console.log(features_arr)
        // GET
        // window.location = 'form.php?' + jQuery.param(features_arr);
        // SESSION
        var form = document.createElement("form");
        form.setAttribute("method", 'POST');
        for (var j=0, k=features_arr.length; j<k; j++) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", 'features[]');
            hiddenField.setAttribute("value", features_arr[j]['value']);
            form.appendChild(hiddenField);
        }
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", 'features_set');
        hiddenField.setAttribute("value", 'true');
        form.appendChild(hiddenField);
;
        for (i in given_data){
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", given_data[i]['name']);
            hiddenField.setAttribute("value", given_data[i]['value']);
            form.appendChild(hiddenField);
        }

        document.body.appendChild(form);
        form.submit();
    });


    $('#no-playagain-btn,#start-over-btn').click(function () {
        $('.desc').hide();
        $('#intro-img').show();
        $('#intro-copy').show();
        $('#mid-copy').hide();
        $('#undo').hide();
        $("#selections ul li").addClass('empty').removeClass('bubble selected active').attr('class',
           function(i, c){
              return c.replace(/(^|\s)bubble-\S+/g, '');
           });
        var count = 1;
        $("#selections ul li.empty").each(function(){
            var thing = $(this),
                val = count
                count += 1
            thing.html(val)
        });
            
        $($("#selections ul li.empty")[0]).addClass('active');
        $(".do-not-hover").removeClass("do-not-hover");
        $("#complete").hide();
        $("#overlay").hide();
        return false;
    });
    $('#undo').click(function(){ undoSelection(); return false; });

    $('#trouble').click(function(){
        window.location.href = '/form.php?timesPlayed=0&features[]=0&features[]=0&features[]=0&features[]=0&features[]=0&submit=skip_play';
        return false;
    });
});

