@if (isset($faqs) && $faqs != null)
<div class="container">
    <h1 class="text-center text-2xl font-bold">Une question? Un doute?</h1>
    <p class="text-center text-lg">Nous avons réuni ci-dessous</p>
    <div class="bg-gray-100 rounded-lg p-5">
        @foreach ($faqs as $faq)
            <div class="border-b py-2">
                <div class="flex justify-between items-center cursor-pointer faq-opener" data-faq="{{faq.id}}">
                    <h4 class="text-lg font-semibold">{{faq.title}}</h4>
                    <span class="text-xl font-bold">+</span>
                </div>
                <div id="{{$faq->id}}" class="hidden">
                    <p class="mt-2 text-gray-700">{{$faq->content}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif