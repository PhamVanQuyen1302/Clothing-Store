<!-- T0320 -->
<!DOCTYPE html>
<html lang="vi-VN" data-nhanh.vn-template="T0320">

<head>
    <meta name="robots" content="noindex" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https&#x3A;&#x2F;&#x2F;web.nvnstatic.net&#x2F;images&#x2F;favicon.ico&#x3F;v&#x3D;3" rel="icon"
        type="image&#x2F;vnd.microsoft.icon">
    <title>@yield('title') Nhanh.vn</title>
    {{-- the Meta --}}
    @include('client.blocks.meta')
    {{-- Link --}}

    @include('client.blocks.link')
    {{-- scrip --}}
    @include('client.blocks.scrip')


    {{-- style --}}
    @include('client.blocks.style')
</head>
<input id="checkStoreId" value="97757" type="hidden">

<body class="tp_background tp_text_color">

    <div id="wrapper_sec">
        {{-- reponsite web --}}
        @include('client.blocks.reponsite')
        {{-- header --}}
        @include('client.blocks.header')

    </div>
    {{-- MAIN --}}
    @yield('content')
    {{-- FOOTER --}}
    @include('client.blocks.footer')

    {{-- helper --}}
    @include('client.blocks.helper')

</body>


</html>
