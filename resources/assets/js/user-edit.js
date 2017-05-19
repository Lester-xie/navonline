/**
 * Created by bulger on 2017/5/17.
 */
(function ($) {
    var id = $('#userInfo').attr('data-uid');
    $('.edit-menu').on('click','.item',function () {
        var self = $(this);
        var id = self.attr('data-target');

        self.addClass('active').siblings().removeClass('active');

        $('.edit-menu-wrap > div').addClass('hide');
        $('.edit-menu-wrap').find('#'+id).removeClass('hide');
    });

    $('.special.cards .image').dimmer({
        on: 'hover'
    });

    // 消息推送设置
    $('.j-messageSet [type="checkbox"]').on('change',function () {
        if($(this).val()==1){
            $(this).val(0);
        }else{
            $(this).val(1);
        }
        var data = {};
        $('.j-messageSet [name]').each(function (i, e) {
            data[$(e).attr('name')] = $(e).val();
        });
        $.ajax('/users/'+id+'/edit/message/setting',{
            method:'post',
            data:data,
            success:function (res) {
                if(res.code=200){
                    window.notify(res.message);
                }
            },
            error:function () {
                window.notify('服务器错误,请稍后再试','error');
            }
        })
    });

    // 隐私设置
    $('.j-privacySet [type="radio"]').on('change',function () {
        var data = {
            '_method':$('.j-privacySet [name="_method"]').val(),
            '_token':$('.j-privacySet [name="_token"]').val()
        };
        $('.j-privacySet [name]:checked').each(function (i, e) {
            data[$(e).attr('name')] = $(e).val();
        });
        console.log(data);

        $.ajax('/users/'+id+'/edit/privacy/setting',{
            method:'post',
            data:data,
            success:function (res) {
                if(res.code=200){
                    window.notify(res.message);
                }
            },
            error:function () {
                window.notify('服务器错误,请稍后再试','error');
            }
        })
    })
})(jQuery);