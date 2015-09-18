var JRegion = {
    /**
     * get json data
     * @param cid
     * @param type
     * @param callback
     */
    getData : function(cid, type, callback){
        jc001.api.call('region', {'id' : cid, 'do' : type}, callback);
    }
}

var JRegionSelect = function(name, cid){
    this.name = name;
    this.cid = cid;
    this.cat = JRegion;
    this.wrap = {};
}

$.extend(JRegionSelect.prototype, JMulSelect.prototype);
