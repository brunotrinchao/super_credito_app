(function($) {
    $.gDisplay = {
        loadStart: function(target, preloader) {
            $target = $(target);
            $($target).block({
                message: 'Aguarde',
                centerY: true,
                css: {
                    top: '10%',
                    border: 'none',
                    padding: '2px',
                    backgroundColor: 'none'
                },
                overlayCSS: {
                    backgroundColor: '#000',
                    opacity: 0.05,
                    cursor: 'wait'
                }
            });
        },
        loadStop: function(target) {
            $target = $(target);
            $($target).unblock({
                onUnblock: function() {
                    $(target).removeAttr("style").show();
                }
            });
        },
        loadError: function(target, msg) {
            this.loadStop(target);
            $.gDisplay.showError(msg, '');
        },
        showAlert: function(json, success, error) {
            if (json.status) {
                this.showSuccess(json.msg, success);
            } else {
                this.showError(json.msg, error);
            }
        },
        showSuccess: function(msg, success, plugin) {
            if (plugin == 'bootbox' || plugin === undefined) {
                bootbox.dialog(msg, [{
                    "label": "Ok",
                    "class": "green",
                    "callback": function() {
                        if (typeof success === 'function') {
                            success.call(this);
                        }
                    }
                }], {
                    "header": 'Sucesso!'
                });
            } else if (plugin == 'toastr') {
                toastr.success(msg, 'Sucesso', {
                    "closeButton": true,
                    "preventDuplicates": false,
                    "progressBar": true,
                    "showDuration": 300,
                    "hideDuration": 500,
                    "timeOut": 2500
                });
                if (typeof success === 'function') {
                    success.call(this);
                }
            }
        },
        showError: function(msg, error, plugin) {
            bootbox.dialog(msg, [{
                "label": "Ok",
                "class": "green",
                "callback": function() {
                    if (typeof error === 'function') {
                        error.call(this);
                    }
                }
            }], {
                "header": 'Erro!'
            });
        },
        showConfirm: function(msg, ok, cancel) {
            bootbox.dialog(msg, [{
                "label": "Cancelar",
                "class": "",
                "callback": function() {
                    if (typeof cancel === 'function') {
                        cancel.call(this);
                    }
                }
            }, {
                "label": "Ok",
                "class": "green",
                "callback": function() {
                    if (typeof ok === 'function') {
                        ok.call(this);
                    }
                }
            }], {
                "header": 'Confirma?'
            });
        },
        showYN: function(msg, yes, no) {
            bootbox.dialog(msg, [{
                "label": "Não",
                "class": "",
                "callback": function() {
                    if (typeof no === 'function') {
                        no.call(this);
                    }
                }
            }, {
                "label": "Sim",
                "class": "green",
                "callback": function() {
                    if (typeof yes === 'function') {
                        yes.call(this);
                    }
                }
            }], {
                "header": 'Confirma?'
            });
        },
        showYNC: function(msg, yes, no, cancel) {
            bootbox.dialog(msg, [{
                    "label": "Não",
                    "class": "",
                    "callback": function() {
                        if (typeof no === 'function') {
                            no.call(this);
                        }
                    }
                }, {
                    "label": "Sim",
                    "class": "green",
                    "callback": function() {
                        if (typeof yes === 'function') {
                            yes.call(this);
                        }
                    }
                },
                {
                    "label": "Cancelar",
                    "class": "red",
                    "callback": function() {
                        if (typeof cancel === 'function') {
                            cancel.call(this);
                        }
                    }
                }
            ], {
                "header": 'Confirma?'
            });
        },
        showInfo: function(title, msg, success, botao) {
            if (botao == undefined || botao == false) {
                var botao = 'Ok';
            }
            bootbox.dialog(msg, [{
                "label": botao,
                "class": "green",
                "callback": function() {
                    if (typeof success === 'function') {
                        success.call(this);
                    }
                }
            }], {
                "header": title
            });
        }
    }
})(jQuery);