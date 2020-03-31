
function getDataContent(IDType, element) {

    var url = base_url_js+'api-lpmi/__getContentLPMI';

    var data = {
        LangCode : current_language,
        IDType : IDType
    };
    var token = jwt_encode(data,'UAP)(*');
    $.post(url,{token:token},function (jsonResult) {
        // console.log(jsonResult);
        if(jsonResult.length>0){
            var d = jsonResult[0];
            $(element).html(d.Description);
        }
    });

}

