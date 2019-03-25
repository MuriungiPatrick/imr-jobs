<!-- Categories -->
<section class="bg-alt">
    <div class="container">
        <header class="section-header">
            <h2>Popular categories</h2>
        </header>

        <div class="category-grid">
     @foreach($categories as $category)
<a href="{{ route('category',  $category->slug )}}">
        <h4>{{ $category->title }}</h4>
      </a>

@endforeach
    </div>

    </div>
</section>
<!-- END Categories -->
