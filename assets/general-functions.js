function check_fields(form_name){
    var status = true;
    $("#"+form_name+" .required").each(function(){
        var id = $(this).attr("id")+"_label";
        if ($(this).val() == ""){
            status = false;
            $(this).parent().parent().addClass("error");
            $("#"+id).html("required field");
        }
        else{
            $(this).parent().parent().removeClass("error");
            $("#"+id).html("");
            if ($(this).hasClass("email")){
                if(!check_email($(this).val())){
                    $(this).parent().parent().addClass("error");
                    $("#"+id).html("invalid email");
                    status = false;
                }
            }
            if ($(this).hasClass("number")){
                var val = $(this).val();
                if ($(this).hasClass('currency') || $(this).hasClass('percent')){
                    val = get_number(val);
                }
                if ($(this).attr("disallowedvalue") != null && parseInt($(this).attr("disallowedvalue")) == val){
                    $(this).parent().parent().addClass("error");
                    $("#"+id).html("invalid number");
                    status = false;
                }
                if ($(this).attr("min-allowed-value") != null && parseInt($(this).attr("min-allowed-value")) > val){
                    $(this).parent().parent().addClass("error");
                    $("#"+id).html("invalid number");
                    status = false;
                }
                if(!check_number(val)){
                    $(this).parent().parent().addClass("error");
                    $("#"+id).html("invalid number");
                    status = false;
                }
            }
            if ($(this).hasClass("password")){
                if($(this).attr('minlength') > $(this).val().length){
                    $(this).parent().parent().addClass("error");
                    $("#"+id).html("min " + $(this).attr('minlength') + " character");
                    status = false;
                }
            }
        }
    });
    return status;
}

function check_number(value){
    //if (value.match(/[^\d]/)){
    //    return false;
    //}
    //else{
    //    return true;
    //}
    if (isNaN(value)){
        return false;
    }
    return true;
}

function check_email(value){
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(value);
}

function curreny_converter(num){
    var p = parseFloat(num).toFixed(2).split(".");
    return "P " + p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "") + "." + p[1];
}

function clear_value(form_name){
    $("#"+form_name+ " input[type=text],"+"#"+form_name+ " textarea").each(function(){
        $(this).val("");
    });
    return false;
}


function get_number(num){
    num = num.replace(/\$|\,/g, '');
    num = num.replace('%','');
    return num;
}

//get data via Ajax
function getData(url,type,data){
    var jsonData = null;
    $.ajax({
        url: url,
        dataType: "json",
        data:data,
        type: type,
        async: false,
        success: (
            function(data) {
                jsonData = data;
            })
    });
    return jsonData;
}

// check if a valid number
function isValidNum(field_id){
    var val = $('#'+field_id).val();
    if (isNaN(val)){
        return false;
    }
    return true;
}

//
function isValidField(name,parentIndex){
    var tag = $('#'+name);
    var val = tag.val();
    var parent = tag;
    for(var i=0;i<parentIndex;i++){
        parent = parent.parent();
    }
    parent.removeClass('error');
    if (val == ""){
        parent.addClass('error');
        return false;
    }
    return true;
}

// change current Date to a Given Format
function dateFormat(input_string,format){
    var current = new Date(input_string);
    return current.format(format);
}

// check if a input is in a data of array
function inArray(input,data){
    var status = false;
    for(var i=0;i<data.length;i++){
        if (input == data[i]){
            status = true;
            break;
        }
    }
    return status;
}