(function($) {
    $.gAjax = {
        load: function(page, param, target, callback, async, preloader) {
            if (jQuery.type(param) === 'array') {
                param.push({ name: 'AMBIENTE', value: AMBIENTE });
            } else {
                jQuery.extend(param, { AMBIENTE: AMBIENTE });
            }

            if (async === undefined)
                async = true;
            jQuery.ajax({
                type: "POST",
                url: page,
                data: param,
                async: async,
                beforeSend: function() {
                    if (preloader === undefined || preloader == true)
                        jQuery.gDisplay.loadStart(target);
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (preloader === undefined || preloader == true)
                        jQuery.gDisplay.loadStop(target);

                    jQuery(target).prepend('Carregamento interrompido...');

                    var debug = {
                        page: page,
                        status: xhr.status,
                        statusText: xhr.statusText,
                        params: param
                    }

                    console.warn('Erro ao carregar ajax: ', debug);
                },
                success: function(resp) {
                    if (preloader === undefined || preloader == true)
                        jQuery.gDisplay.loadStop(target);

                    jQuery(target).html(resp);

                    if (typeof callback === 'function') {
                        callback.call(this, resp);
                    }
                }
            });
        },
        exec: function(page, param, success, error, alert, async, preloader) {
            // if (jQuery.type(param) === 'array') {
            //     param.push({ name: 'AMBIENTE', value: AMBIENTE });
            // } else {
            //     jQuery.extend(param, { AMBIENTE: AMBIENTE });
            // }

            if (async === undefined)
                async = true;
            jQuery.ajax({
                type: "POST",
                url: page,
                data: param,
                dataType: 'json',
                async: async,
                beforeSend: function() {
                    // if (preloader === undefined || preloader == true)
                    //     jQuery.gDisplay.loadStart('html');
                },
                error: function() {
                    // if (preloader === undefined || preloader == true)
                    //     jQuery.gDisplay.loadError('html', "Erro ao carregar. Por favor recarregue a página e tente novamente.");
                },
                success: function(json) {
                    return json;
                    // if (preloader === undefined || preloader == true)
                    //     jQuery.gDisplay.loadStop('html');

                    // if (alert === undefined || alert == true)
                    //     jQuery.gDisplay.showAlert(json, success, error);
                    // else {
                    //     if (json.status)
                    //         eval(success);
                    //     else
                    //         jQuery.gDisplay.showError(json.msg, error);
                    // }
                }
            });
        },
        execCallback: function(page, param, alert, callback, async, preloader, alertError, errorCallBack) {
            if (jQuery.type(param) === 'array') {
                param.push({ name: 'AMBIENTE', value: AMBIENTE });
            } else {
                jQuery.extend(param, { AMBIENTE: AMBIENTE });
            }

            if (async === undefined)
                async = true;
            jQuery.ajax({
                type: "POST",
                url: page,
                data: param,
                dataType: 'json',
                async: async,
                beforeSend: function() {
                    if (preloader === undefined || preloader === true)
                        jQuery.gDisplay.loadStart('html');
                },
                error: function(error, payload, msg) {
                    if (preloader === undefined || preloader === true)
                        jQuery.gDisplay.loadError('html', "Erro ao carregar. Por favor recarregue a página e tente novamente.");
                    if (errorCallBack !== undefined)
                        errorCallBack.call(this, error, payload, msg);
                },
                success: function(json) {
                    if (preloader === undefined || preloader === true)
                        jQuery.gDisplay.loadStop('html');

                    if (typeof callback === 'function') {
                        callback.call(this, json);
                    }

                    if (alert === undefined || alert === true)
                        jQuery.gDisplay.showAlert(json, '', '');
                    else {
                        if (!json.status && (alertError === undefined || alertError === true)) {
                            jQuery.gDisplay.showError(json.msg, '');
                        }
                    }
                }
            });
        }
    }
})(jQuery);