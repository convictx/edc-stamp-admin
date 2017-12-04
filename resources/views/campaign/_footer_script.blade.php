<script type="text/javascript">
//var bannerId = '{{ isset($bannerId) ? $bannerId : "" }}';
var campaignId = '';
var createConfig = {
    form: $('#form-submit'),
    url: '/admin/campaigns',
    httpMethod: 'POST',
    successCallback: function() {
        window.location = '/campaigns'
    }
}
// var updateConfig = {
//     form: $('#form-submit'),
//     url: '/banner/'+bannerId,
//     httpMethod: 'POST',
//     successCallback: function() {
//          location.reload();
//     }
// }

var config = (campaignId === '') ? createConfig : updateConfig;
validateAndSubmit(config.form, config.url, config.httpMethod, config.successCallback);

function validateAndSubmit(form, url, httpMethod, successCallback)
{
    var checkClick = false;

    $(form).on('click', '.btn-submit', function (event) {
        event.preventDefault();
        if (checkClick) {
            return false;
        }

        checkClick = true;
        var formData = new FormData(document.getElementById('form-submit'));

        formData.append('', 'PUT');
         @if(isset($bannerData))
            formData.append('_method', 'PUT');
        @endif
        callAjax(httpMethod, url, formData, null, successCallback, function(){
            checkClick = false;
        });
        
    });
}
</script>

<script type="text/javascript">
function callAjax(type, url, data, successCallback = null, postSuccessCallback = null, completeCallback = null, postFailCallback = null) {
    $.ajax({
        type: type,
        url: url,
        data: data,
        dataType: 'json',
        cache: false,
        processData: false,
        contentType: false,
        success: function(data) {
            console.log(data);
            if (data.status || data.success) {
                if(successCallback) {
                    successCallback();
                }
                onAjaxSuccess(data, postSuccessCallback);
            } else {
                onAjaxFail(data, postFailCallback);
            }
        },
        error: function(data) {
            swal('Error!', 'Error connection', 'error');
        },
        complete: function() {
            if(completeCallback) {
            completeCallback();
            }
        }
    });
}

function onAjaxSuccess(data, callback = null) {
    swal({
        title: "Save success",
        text: data.messages,
        type: "success",
        confirmButtonText: "OK"
        },
        callback
    );
}

function onAjaxFail(data, callback = null) {
    swal({
        title: "Save fail.",
        text: data.error ? data.error : data.messages,
        type: "warning",
        confirmButtonText: "OK"
        },
        callback
    );
}

$(document).ready(function() {
    if (!!window.performance && window.performance.navigation.type === 2) {
        window.location.reload();
    }
});
</script>
