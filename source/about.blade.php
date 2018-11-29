@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
<h1>About</h1>

<img src="https://images.unsplash.com/photo-1532560460156-99a8b937ee8c?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=300&h=300&fit=crop&ixid=eyJhcHBfaWQiOjF9&s=8490222c3ca7a048fcdbfed66fe454b5"
    class="flex rounded-full w-50 mx-auto my-10 md:float-right md:ml-10">

<p class="mb-6">This is where you can give a little more information about yourself or site. If you'd like to change the structure of this page, you can find the file at <code>source/about.blade.php</code></p>
<p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas.  fugit natus deserunt atque veniam possimus earum harum itaque est!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas.  fugit natus deserunt atque veniam!</p>

@endsection
