@extends('layouts.app')

@section('main')
{{--  main component  --}}
{{--    <x-tx::main>--}}
{{--    card component    --}}
        <x-tx::card>
            <form action="{{ route('home.submit') }}" method="POST" hx-post="{{ route('home.submit') }}">
                @csrf
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="text" class="border">
                <x-tx::button-primary type="submit">Submit</x-tx::button-primary>
            </form>
            <x-tx::button tx-modal="{{ route('modal') }}">Modal</x-tx::button>
            Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test
        </x-tx::card>

        <x-tx::button tx-targets="button5">{{ \Carbon\Carbon::now() }}</x-tx::button>
        <x-tx::button id="button5">{{ \Carbon\Carbon::now() }}</x-tx::button>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>
        Test<br>    Test<br>    TestTestTest<br>    TestTestTest<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test<br>    Test
{{--    </x-tx::main>--}}
@endsection
