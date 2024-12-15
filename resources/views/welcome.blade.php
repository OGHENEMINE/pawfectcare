<x-app-layout>
    <x-slot name="header">
        <div class="max-w-screen-sm space-y-5 text-sm">
            <h1 class="text-4xl md:text-6xl font-space-mono font-bold">Where Happy Paws Meet <span class="text-primary">Care</span> and <span class="text-primary">Quality!</span></h1>
            <p>At Pawfect Care, we are all about keeping tails wagging and whiskers happy. From top-notch services to quality products, we are here to make life better for you and your furry friends.</p>
            <a href="#" class="flex items-center hover:bg-primary bg-primary/80 max-w-xs rounded-full max-sm:w-full py-5 px-10 md:px-8 justify-between md:text-base text-center font-bold">Explore<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </x-slot>

    <section class="mb-20">
        <h2 class="font-bold text-center text-4xl">
            SHOP OUR <span class="text-primary">TOP PICKS</span>
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 pt-8">
            <a href="#" class="flex flex-col transition-transform transform-gpu hover:-translate-y-2 hover:shadow-lg duration-300 ease-in bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <img class="w-full rounded-t-xl" src="{{asset("images/wellness-core-food.webp")}}" alt="dog food">
                <div class="p-4 space-y-1 text-sm">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                        Wellness CORE Natural Grain-Free Dry Large Breed Puppy Food, 24 lb Bag
                    </h3>
                    <p class="text-gray-500 dark:text-neutral-400">
                        $20.00
                    </p>
                </div>
            </a>
            <a href="#" class="flex flex-col hover:-translate-y-2 hover:shadow-lg duration-300 ease-in bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <img class="w-full rounded-t-xl" src="{{asset("images/dog-toy.jpg")}}" alt="dog toy">
                <div class="p-4 space-y-1 text-sm">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                        PETGEEK Interactive Dog Toys, Motion Activated Automatic Dog Bone, USB Rechargeable </h3>
                    <p class="text-gray-500 dark:text-neutral-400">
                        $50.00
                    </p>
                </div>
            </a>
            <a href="#" class="flex flex-col hover:-translate-y-2 hover:shadow-lg duration-300 ease-in bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <img class="w-full h-auto rounded-t-xl" src="{{asset("images/grooming-kit.jpg")}}" alt="dog toy">
                <div class="p-4 space-y-1 text-sm">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                        MIRUN Dog Grooming Scissors, 5 in 1 Dog Grooming Kit, 4CR Stainless Steel Dog Scissors for Grooming </h3>
                    <p class="text-gray-500 dark:text-neutral-400">
                        $50.00
                    </p>
                </div>
            </a>
            <a href="#" class="flex flex-col hover:-translate-y-2 hover:shadow-lg duration-300 ease-in bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <img class="w-full h-auto rounded-t-xl" src="{{asset("images/pet-accessory.jpg")}}" alt="dog toy">
                <div class="p-4 space-y-1 text-sm">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                        POTCHEN 2 Pcs Dog Sunglasses and Pet Helmet Set with Dog Goggles, Dust Wind UV Protection Dog Glasses </h3>
                    <p class="text-gray-500 dark:text-neutral-400">
                        $50.00
                    </p>
                </div>
            </a>
    </section>

    <section class="bg-primary/85 py-20 text-center space-y-6 mb-20">
        <div class="tracking-widest space-y-1">
            <h2 class="font-bold text-center text-4xl">SIGN UP FOR OUR NEWSLETTER</h2>
            <p>Join Our Community! Get 10% Off Your First Order and Weekly Pet Care Tips</p>
        </div>
        <div>
            <form action="" class="flex items-center">
                <div class="flex items-center max-w-xl mx-auto w-full">
                    <label class="sr-only font-bold p-5" for="email">Email</label>
                    <div class="flex w-full text-black">
                        <input class="w-full rounded-l-lg outline-none px-4 py-3 border-none" type="text" name="email" id="email" placeholder="Email address">
                        <button class="rounded-r-lg text-white font-medium px-6 hover:bg-neutral-800 bg-neutral-900">Subscribe</button>
                    </div>
                </div>
            </form>

        </div>
    </section>

    <section class="mb-20">
        <h2 class="font-bold text-center text-4xl mb-10">WHAT OUR <span class="text-primary">CLIENTS SAY</span></h2>
        <!-- Slider -->
        <div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "dotsItemClasses": "hs-carousel-active:bg-primary hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-primary dark:hs-carousel-active:border-primary/80"
  }' class="relative">
            <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
                <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                    <div class="hs-carousel-slide">
                        <div class="flex justify-center h-full bg-gray-100 p-6 dark:bg-neutral-900">
                            <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">First slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide">
                        <div class="flex justify-center h-full bg-gray-200 p-6 dark:bg-neutral-800">
                            <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Second slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide">
                        <div class="flex justify-center h-full bg-gray-300 p-6 dark:bg-neutral-700">
                            <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Third slide</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2"></div>
        </div>
        <!-- End Slider -->
    </section>
</x-app-layout>