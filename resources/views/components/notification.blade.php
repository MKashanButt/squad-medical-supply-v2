@php
    $class = 'notification';
    switch ($type) {
        case 'danger':
            $class = $class . ' bg-red';
            break;
        case 'warning':
            $class = $class . ' bg-orange';
            break;
        case 'default':
            break;
    }
@endphp
<div class="{{ $class }}" x-data="{ display: true }" @click.outside="display=false" x-show="display" x-cloak>
    <button @click="display=false">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
        </svg>
    </button>
    <p>{{ $content }}</p>
</div>
