//添加
$(".add").click(function () {
    var cid=$(this).attr("attr");
    $("input[type=hidden]").val(cid);
    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:0.3,
        background:"#000",
        position:"fixed",
        left: 0,top: 0,
    })
    $(".addpanel").css("display","block");
})

$(".addpanel .close").click(function () {
    $(".addpanel").css("display","none");
    $(".mask").remove();
})

//修改
var cid;
$(".edit").click(function () {
    cid=$(this).attr("attr");
    var pid=$(this).attr("pid");
    // $("input[type=hidden]").val(cid);
    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:0.3,
        background:"#000",
        position:"fixed",
        left: 0,top: 0,
    })
    $(".editpanel").css("display","block");
    //修改信息查询
    $.ajax({
        url:"/mvc2/index.php/admin/category/show",
        data:{cid},
        dataType:"json",
        success:function (e) {
            console.log(e);
            $(".editpanel input[name=cname]").val(e["cname"]);
            if(e["isshow"]==1){
                $("#isshow option:eq(0)").prop("selected",true);
            }else{
                $("#isshow option:eq(1)").prop("selected",true);
            }

            $(".editpanel input[name=tpl_name]").val(e["tpl_name"]);
            $(".editpanel textarea").val(e["info"]);
        }
    })
    $.ajax({
        url:"/mvc2/index.php/admin/category/getOption",
        dataType:"json",
        success:function (e) {
            tree(e,1,cid,pid);
            // console.log(str);
            $("#opts").html(str);
            str=" <option value='0'>一级</option>";
        }
    })
})

//修改内容
$(".editpanel input[type=button]").click(function () {
    //1.名字 2.cid->pid
    var data=($(".editpanel form").serialize()+"&cid="+cid);
    // alert(data);
    $.ajax({
        url:"/mvc2/index.php/admin/category/edition",
        data:data,
        success:function (e) {
            console.log(e);
            if($.trim(e)=="ok"){
                alert("修改成功");
                location.reload();
            }
        }
    })
})

var str=" <option value='0'>一级</option>";

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
            if(data[i].cid!=cid) {
                if(data[i].cid==pid){
                    str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
            }
            tree(data[i].child,$i+1,cid,pid);
        }else {
            if(data[i].cid!=cid) {
                if(data[i].cid==pid){
                    str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
            }
        }
    }
}


$(".editpanel .close").click(function () {
    $(".editpanel").css("display","none");
    $(".mask").remove();
})

