@if (isset($faqs) && $faqs != null)
<div class="container">
    <h1 class="text-center">Une question? Un doute?</h1>
    <p class="text-center">Nous avons réuni ci-dessous</p>
    <div class="bg-bleu-gris rounded-4 p-5">
        @foreach ($faqs as $faq)
            <div class="border-bottom py-2">
                <div class="d-flex flex-row justify-content-between faq-opener" data-faq="{{faq.id}}">
                    <h4 class="col">{{faq.title}}</h4>
                    <span class="col">+</span>
                </div>
                <div id="{{$faq->id}}" class="faq">
                    <p>{{$faq->content}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif