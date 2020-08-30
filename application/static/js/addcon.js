$.ajax({
    url:"/mvc2/index.php/admin/category/getOption",
    dataType:"json",
    success:function (e) {
        var cid=$("#cid").attr("cid");
        tree(e,1,cid);
        $("#cid").html(str);
        str="";
    }
})
var str="<option value='0'>请选择分类</option>";

function str_repeat(str,num) {
    var result="";
    for(var i=0;i<num;i++){
        result+=str;
    }
    return result;
}
function tree(data,$i,cid,pid){
    for(var i=0;i<data.length;i++){
        if(data[i].child){
            if (cid!==undefined){
               if(cid==data[i].cid){
                   str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
               }else {
                   str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
               }
            }else {
                str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
            }

            tree(data[i].child,$i+1,cid,pid);//递归
        }else {
            if (cid!==undefined){
                if(cid==data[i].cid){
                    str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
            }else {
                str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
            }
        }
    }
}
