@extends('layouts.layout')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="font-size-50px"><span>Pizza</span>'s List</h1>
            </div>
            <div class="text-center">

                @foreach($pizzas as $key => $pizza)
                    <div>
                        {{ $loop->index }}
                        <span>=></span>
                        {{ $pizza['type'] }} - {{ $pizza['base'] }}
                        @if($loop->first)
                            <span>- first in the loop</span>
                        @endif
                        @if($loop->last)
                            <span>- last in the loop</span>
                        @endif
                    </div>
                @endforeach

                @php
                    echo "<p><b>$isName</b></p>";
                @endphp

                <p>{{ $age }}</p>

            </div>
        </div>
    </div>
@endsection
