jc001.api = {
    url : 'http://api' + jc001.domain_pub + '/json.php?callback=?',
    code_succ : 200,
    code_error : 400,
    call : function(api, args, callback, error_callback){
        if(!args){
            args = {};
        }
        args['ac'] = api;

        $.getJSON(
            jc001.api.url,
            args,
            function(response){
                if(jc001.api.is_succ(response)){
                    if(typeof callback == 'function')
                        callback(response.data);
                }else if(error_callback){
                    if(typeof error_callback == 'function')
                        error_callback(response);
                }else{
                }
            }
        );
    },
    
    is_succ : function(response){
        return response.code == jc001.api.code_succ;
    },
    
    is_error : function(response){
        return response.code == jc001.api.code_error;
    }
}
