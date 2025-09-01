<img src="{{ asset($src) }}" alt="{{ $alt }}" loading="lazy" {{ isset($width) ? 'width=' . $width : '' }}
    class="{{ $class ?? '' }}" />