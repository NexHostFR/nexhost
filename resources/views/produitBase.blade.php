@extends('base')

@section('body')
<main>
    <!-- Hero Section -->
    @yield('hero')

    @yield('boost')

    <div class="relative isolate px-6 py-24 sm:py-32 lg:px-8">
      
        <!-- Title Section -->
        @yield('title_head_page')
      
        <!-- Pricing Cards -->
        @yield('product')
    </div>      

    @include('components.information_general')

	@include('components.faq')

    @include('components.information_backup')

    <div>
        {{-- Avantage --}}
    </div>
    <!-- Background Decoration -->
    <div class="absolute inset-x-0 -top-3 -z-10 transform overflow-hidden px-36 blur-3xl" aria-hidden="true">
        <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-pink-300 to-indigo-300 opacity-30"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
        <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-pink-300 to-indigo-300 opacity-30"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
        <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-pink-300 to-indigo-300 opacity-30"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
</main>
@endsection
