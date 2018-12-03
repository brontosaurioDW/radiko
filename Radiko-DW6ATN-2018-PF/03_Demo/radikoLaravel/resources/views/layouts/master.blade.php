@include ('layouts.head')

<body>

<header class="@yield ('header-class')">

    @include ('layouts.nav')

</header>

<main>
    @yield ('content')
</main>

@include ('layouts.footer')

@include ('layouts.scripts')
