@if (isset($caroussels) && $caroussels != null)
    <div class="w-ful relative mx-auto overflow-hidden">
        <div id="carousel-slides" class="flex transition-transform duration-500 ease-liner">
			@foreach ($caroussels as $caroussel)
				<div class="w-1/3 flex-shrink-0 p-2">
					@if ($caroussel->image)
						<img src="{{ asset('storage/' . $caroussel->image) }}" alt="Image de {{ $caroussel->title }}" class="w-full h-96 object-cover rounded-lg shadow-lg">
					@endif
					@if ($caroussel->hiddenTitle == false)
						<h2>{{$caroussel->title}}</h2>
					@endif
				</div>
			@endforeach
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const carousel = document.getElementById('carousel-slides');
          const slides = carousel.children;
          const totalSlides = slides.length / 2;
          let currentIndex = 0;
    
          function updateCarousel() {
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            if (currentIndex === totalSlides) {
              setTimeout(() => {
                carousel.style.transition = 'none';
                currentIndex = 0;
                carousel.style.transform = `translateX(0)`;
              }, 500);
            }
          }
    
          function startCarousel() {
            setInterval(() => {
              currentIndex++;
              carousel.style.transition = 'transform 0.5s ease-in-out';
              updateCarousel();
            }, 3000);
          }
    
          startCarousel();
        });
    </script>
@endif