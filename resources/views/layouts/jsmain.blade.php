<script>

    // change theme
    $("input[name=layout-mode]:radio").click(function () {
        if ($('input[name=layout-mode]:checked').val() == "light") {
           var layoutmode = 0; //'light'
        } else if ($('input[name=layout-mode]:checked').val() == "dark") {
           var layoutmode = 1; //'dark'
        }
        console.log(layoutmode)
        sendRequest(apiurl + "/user/"+valuserid, "PUT", {"theme":layoutmode})
        window.location.reload()
    });
    
    var pathname = window.location.pathname;

    if(pathname == '/module') {
        $.getScript('assets/js/grid/module.js');
    } else if(pathname == '/useraccess') {
        $.getScript('assets/js/grid/useraccess.js');
    } else if(pathname == '/sidemenu') {
        $.getScript('assets/js/grid/sidemenu.js');
    } else if(pathname == '/icons') {
        $.getScript('assets/js/grid/icons.js');
    } else if(pathname == '/sequence') {
        $.getScript('assets/js/grid/sequence.js');
    }

    // console.log(pathname);
    
</script>