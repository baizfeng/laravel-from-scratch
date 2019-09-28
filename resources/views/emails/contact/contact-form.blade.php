@component('mail::message')
    # 感谢您的邮件

    <strong>名称：</strong> {{ $data['name'] }}
    <strong>邮箱：</strong> {{ $data['email'] }}

    <strong>邮件内容：</strong>
    {{ $data['message'] }}
@endcomponent
