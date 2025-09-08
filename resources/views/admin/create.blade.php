@push('css')
    <link rel="stylesheet" href="{{asset('css/admin/create.css')}}">
@endpush
<x-admin-layout>
    <div class="product">
        <h1>Add Product
            <div class="header-options">
                <button class="primary bg-green">Add Product</button>
                <x-a :href="url()->previous()">
                    <button class="primary bg-red">Go Back</button>
                </x-a>
            </div>
        </h1>
        <section class="form-container">
            <div class="image-showcase" id="image-showcase">
                <button class="primary bg-red" onclick="clearWindow('image-showcase', 'clear-window')"
                    id="clear-window">Clear Window</button>
            </div>
            <form method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{old('name')}}">
                @if($errors->get('name'))
                    <ul>
                        @foreach ((array) $errors->get('name') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <label for="description">Description</label>
                <input type="text" name="description" id="description" value="{{old('description')}}">
                @if($errors->get('description'))
                    <ul>
                        @foreach ((array) $errors->get('description') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <label for=" key_benefits">Key Benefits</label>
                <input type="text" name="key_benefits" id="key_benefits" value="{{old('key_benefits')}}">
                @if($errors->get('key_benefits'))
                    <ul>
                        @foreach ((array) $errors->get('key_benefits') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <label for=" thumbnail">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail"
                    onchange="imageRenderer('image-showcase', 'thumbnail', 'thumbnail')">
                @if($errors->get('thumbnail'))
                    <ul>
                        @foreach ((array) $errors->get('thumbnail') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <label for="images">Images</label>
                <input type="file" name="images[]" id="images" multiple
                    onchange="imageRenderer('image-showcase', 'images', 'sub-image')">
                @if($errors->get('images'))
                    <ul>
                        @foreach ((array) $errors->get('images') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <label for="tags">Tags</label>
                <input type="text" name="tags" id="tags" value="{{old('tags')}}">
                @if($errors->get('tags'))
                    <ul>
                        @foreach ((array) $errors->get('tags') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <button class="primary">Add Product</button>
            </form>
        </section>
    </div>
</x-admin-layout>