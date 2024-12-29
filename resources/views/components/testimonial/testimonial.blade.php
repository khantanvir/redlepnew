@php
    $testimonials = App\Models\Testimonial\Testimonial::where('status',0)->get();
@endphp
<section class="testimonials-area pt-100 pb-70">
    <div class="container">
        <div class="section-title" data-cues="slideInUp">
            <span>Testimonials</span>
            <h2>What our customers say</h2>
        </div>
        <div class="testimonials-slider-bg">
            <div class="testimonials-slider owl-carousel owl-theme">
                @forelse ($testimonials as $row)
                <div class="single-testimonials">
                    <i class="ri-double-quotes-r"></i>
                    <p>“{{ $row->description ?? '' }}”</p>
                    <div class="testimonials-img">
                        @if (!empty($row->image))
                            <img src="{{ asset($row->image) }}" alt="Image">
                        @else
                            <img src="{{ asset('frontend/images/testimonials-1.jpg') }}" alt="Image">
                        @endif
                        <h3>{{ $row->name ?? '' }}</h3>
                        <span>{{ $row->designation ?? '' }}</span>
                    </div>
                </div>
                @empty  
                @endforelse
            </div>
            <div class="shape shape-1">
                <img src="{{ asset('frontend/images/shape-1.png') }}" alt="Image">
            </div>
            <div class="shape shape-2">
                <img src="{{ asset('frontend/images/shape-2.png') }}" alt="Image">
            </div>
        </div>
    </div>
</section>