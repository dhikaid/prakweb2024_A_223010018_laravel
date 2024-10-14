{{--
<meta name="title" content="{{ $title }} | Bhadrika A." />
<meta name="description" content="{{  $meta['desc'] ?? 'Web Bhadrika A' }}" />
<meta name="keywords" content="{{  $meta['keyword'] ?? 'Web Bhadrika A' }},Bhadrika">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
<meta name="author" content="{{  $meta['author'] ?? 'Bhadrika Aryaputra Hermawan' }}">

<meta property="og:type" content="website" />
<meta property="og:url" content="{{  $meta['url'] ?? url('') }}" />
<meta property="og:title" content="{{ $title }} | Bhadrika A." />
<meta property="og:description" content="{{  $meta['desc'] ?? 'Web Bhadrika A' }}" />
<meta property="og:image" content="{{  $meta['image'] ?? secure_asset('storage/assets/logo.png') }}" />

<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="{{  $meta['url'] ?? 'Web Bhadrika A' }}" />
<meta property="twitter:title" content="{{ $title }} | Bhadrika A." />
<meta property="twitter:description" content="{{  $meta['desc'] ?? 'Web Bhadrika A' }}" />
<meta property="twitter:image" content="{{  $meta['image'] ?? secure_asset('storage/assets/logo.png') }}" /> --}}
{!! seo()->for($blog) ?? seo()!!}