
function setVisible(){
    state=$.cookie(persisthide);
    if (state==='1'){
        $.cookie(persisthide, 0,{ useLocalStorage: false, path: "/" ,raw:true});
        $("#"+persisthide).hide();
    } else {
        $.cookie(persisthide, 1,{ useLocalStorage: false, path: "/" ,raw:true});
        $("#"+persisthide).show();        
    }
}

