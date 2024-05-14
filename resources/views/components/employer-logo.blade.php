@props(['width' => 90, 'employer'])

{{--<img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}" alt="logo" class="rounded-xl">--}}
<img src="{{ asset($employer->logo) }}" alt="logo" class="rounded-xl" width="{{ $width }}">
