<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>腾讯云万象优图 - 示例程序</title>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery.form/4.0.0/jquery.form.min.js"></script>
</head>
<body>
<div>
    <h2>腾讯云万象优图 - 示例程序</h2>
    <form id="uploadForm">
        <input type="file" name="filecontent"/>
        <input type="hidden" name="op" value="upload"/>
        <input id="subbtn" type="submit">
    </form>

    <div id="downloadRet" style="display:none">
        <h3>下载链接</h3>
        <span id="downloadUrl"></span><input id="downloadBtn" type="button" value="下载"><br/>
        <img id="downloadImg" src=""/>
        <h3>文件ID</h3>
        <div id="fileid"></div>
        <h3>管理URL</h3>
        <span id="url"></span>
        <input id="queryBtn" type="button" value="查询">
        <input id="deleteBtn" type="button" value="删除">
        <input id="copyBtn" type="button" value="复制"><br/>
        <span id="imgInfo"></span>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function () {
        initUploadForm();
    });

    $('input[name=filecontent]').change(function () {
        initUploadForm();
    });

    $('body').on('click', '#downloadBtn', function () {
        $('#downloadImg').attr('src', $('#downloadUrl').text());
    });

    $('body').on('click', '#deleteBtn', function () {
        var manageUrl = $('#url').text();
        if (!manageUrl) {
            alert('尚未获取管理url');
            return false;
        }
        manageUrl = manageUrl + '/del';
        // 请将以下获取签名的链接换成您部署好的服务端http url
        // 建议通过业务登陆态检查来增强安全性，避免签名被非法获取
        $.getJSON('http://navonline.app/getsign?type=delete&url=' + encodeURIComponent(manageUrl),
            function (data) {
                var sign = data.sign,
                    url = manageUrl + '?sign=' + encodeURIComponent(sign);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function () {
                        alert('删除成功');
                    },
                    contentType: "multipart/form-data",
                    dataType: 'json'
                });
            });
    });

    $('body').on('click', '#copyBtn', function () {
        var manageUrl = $('#url').text();
        if (!manageUrl) {
            alert('尚未获取管理url');
            return false;
        }
        manageUrl = manageUrl + '/copy';
        // 请将以下获取签名的链接换成您部署好的服务端http url
        // 建议通过业务登陆态检查来增强安全性，避免签名被非法获取
        $.getJSON('http://203.195.194.28/php/getsign.php?type=copy&url=' + encodeURIComponent(manageUrl),
            function (data) {
                var sign = data.sign,
                    url = manageUrl + '?sign=' + encodeURIComponent(sign);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (ret) {
                        alert('复制成功');
                    },
                    contentType: "multipart/form-data",
                    dataType: 'json'
                });
            });
    });

    $('body').on('click', '#queryBtn', function () {
        var manageUrl = $('#url').text();
        if (!manageUrl) {
            alert('尚未获取管理url');
            return false;
        }
        $.ajax({
            type: "GET",
            url: manageUrl,
            data: {},
            success: function (data) {
                $('#imgInfo').text(JSON.stringify(data));
            },
            error: function (ret) {
                $('#imgInfo').text(ret.responseText);
            },
            dataType: 'json'
        });
    });

    function initUploadForm() {
        // 请将以下获取签名的链接换成您部署好的服务端http url
        // 建议通过业务登陆态检查来增强安全性，避免签名被非法获取
        $.getJSON('http://navonline.app/getsign', function (data) {
            var file = $('[name="filecontent"]').val();
            var fileName = file.substring(file.lastIndexOf('\\') + 1);
            var sign = data.sign,
                url = data.url + '/files/v2/1252873427/nav/user_head/' + fileName;
//            console.log(url);
            var options = {
                type: 'post',
                url: url,
                dataType: 'json',
                contentType: "multipart/form-data",
                success: function (ret) {
                    $('#downloadUrl').html(ret.data.download_url);
                    $('#fileid').text(ret.data.fileid);
                    $('#url').text(ret.data.url);
                    $('#downloadRet').show();
                },
                error: function (ret) {
                    alert(ret.responseText);
                }
            };

            // pass options to ajaxForm
            $('#uploadForm').ajaxForm(options);
        });
    }

</script>
</body>
</html>