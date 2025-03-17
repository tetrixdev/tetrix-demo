@extends('tx::layout-base')

@section('tx-header')
    <header class="w-full h-12 flex flex-row items-center text-lg bg-tx-bg dark:bg-tx-bg-dark border-b-1 border-b-tx-bg-dark dark:border-b-tx-bg">
        <div class="flex-none h-12 p-1">
            Logo
        </div>
        <div class="flex-1"></div>
        <nav class="flex-none flex flex-row">
            <div class="flex-none h-12 py-[10px] px-6 border-l">test1</div>
            <div class="flex-none h-12 py-[10px] px-6 border-l">test2</div>
        </nav>
    </header>
@endsection
