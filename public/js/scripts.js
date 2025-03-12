
$(document).ready(function() {
    $('#nav').on('click', 'a', function(e) {
        e.preventDefault();

        $('#nav-show-menu').prop('checked', false);

        let top = $($(this).attr('href')).offset().top;
        let diff = Math.abs($('#nav').offset().top - top);

        top = Math.max(0, top - $('#nav').height());

        $('html, body').animate({
            scrollTop: top
        }, diff / 1000 * 400);
    });
});


$(document).ready(function() {
    var form = '#contact-form';
    
    let timer = null;

    $(form).on('submit', function(e){
        e.preventDefault();

        var url = $(this).attr('data-action');
        
        $(form).addClass('working');
        
        clearTimeout(timer);
        
        let errors = $('.form-errors', form);
        errors.empty();
        
        let messages = $('.form-messages', form);
        messages.empty();
        
        $(`[name]`, form).removeClass('error');
        
        function addErrorMessage(str)
        {
            errors.append( `<p>${str}</p>` );
        }
        
        function addMessage(str)
        {
            messages.append( `<p>${str}</p>` );
        }

        $.ajax({
            url: url,
            method: 'post',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function(response)
            {
                $(form).trigger('reset');
                addMessage(response.success);
            },
            error: function(response) {
                let data = response.responseJSON;
                if (response.status == 422 && data != undefined)
                {
                    for(name in data)
                    {
                        $(`[name=${name}]`, form).addClass('error');

                        for(key in data[name])
                        {
                            addErrorMessage(data[name][key]);
                        }
                    }
                } else {
                    addErrorMessage('There was a problem submitting the form!');
                }
            },
            complete: function(response) {
                timer = setTimeout(() => $(form).removeClass('working'), 800);
            }
        });
    });

});


$(document).ready(function() {
    let msg = $('#weather-msg');
    
    let original = msg.text();
    
    let timer = null;
    let request = null;
    
    $('#weather-input').on('keyup', function(e) {
        e.preventDefault();
        
        clearTimeout(timer);
        
        if (request) request.abort();

        let $this = $(this);
        
        let val = $this.val();
        
        if (val.length < 3) {
            msg.text(original);
            return;
        }
        
        timer = setTimeout(doRequest, 400);
        
        function doRequest() {
            request = $.ajax({
                url: '/weather',
                method: 'post',
                data: { city: val },
                dataType: 'json',
                cache: false,
                success: function(response)
                {
                    msg.text(response.temperature);
                },
                error: function(response) {
                    msg.text(original);
                }
            });
        }
    });
});

