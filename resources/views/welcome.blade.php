<form method="POST" action="{{ route('translate') }}">
    @csrf
    <textarea name="text" rows="5" class="form-control" placeholder="Enter text to translate..."></textarea>
    <button type="submit" class="btn btn-primary mt-2">Translate</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger mt-2">
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('translate') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="pdf" accept="application/pdf" required>
    <button type="submit">Extract Text</button>
</form>
