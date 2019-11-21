var instance = OverlayScrollbars(document.getElementsByTagName("body"), {
    className: "os-theme-dark",
    resize: "none",
    sizeAutoCapable: true,
    clipAlways: true,
    normalizeRTL: true,
    paddingAbsolute: false,
    autoUpdate: null,
    autoUpdateInterval: 33,
    nativeScrollbarsOverlaid: {
        showNativeScrollbars: false,
        initialize: true
    },
    scrollbars: {
        visibility: "auto",
        autoHide: "move",
        autoHideDelay: 500,
        dragScrolling: true,
        clickScrolling: false,
        touchSupport: true,
        snapHandle: true
    },

    callbacks: {
        onScroll: function (eventArgs) {

            var carbon = instance.scroll();
            var carbon = carbon.handleOffset.y
            // console.log(carbon)

            var logo = document.getElementById('logosvg')
            var fundo = document.getElementById('fundo')
            var nav = document.getElementById('nav')
            if (carbon == 0) {
                nav.setAttribute('class', 'navbar fixed-top navbar-expand-lg navbar-light bg-dark navbarMenuItens')
                fundo.setAttribute('class', 'fundoLogo')
                logo.setAttribute('class', 'svgLogo')
            } else {
                nav.setAttribute('class', 'navbar fixed-top navbar-expand-lg navbar-light bg-dark navbarMenuItens hide')
                fundo.setAttribute('class', 'fundoLogo svgRetrat')
                logo.setAttribute('class', 'svgLogo logoRetrat')
            }
        }
    }
});



$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(function () {
    $('#datetimepicker6').datetimepicker();
});