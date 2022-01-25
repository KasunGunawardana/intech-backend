<div class="sidebar px-4 py-md-0">

    <h6 class="sidebar-title">Search</h6>
    <form class="input-group" action="{{ route('blog.index') }}" method="GET">
      <input type="text" class="form-control" name="search" placeholder="Search" value="{{ request()->query('search') }}">
      <div class="input-group-addon">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
    </form>

    <hr>

    <h6 class="sidebar-title">Categories</h6>
    <div class="row link-color-default fs-14 lh-24">
      @if ($categories->count() > 0)
        @foreach ($categories as $category)
          <div class="col-6"><a href="{{ URL::to('blog/category/' . $category->id ) }}">{{ $category->name }}</a></div>
        @endforeach
      @else
      <div class="col-12"><p>There are no Categories available</p></div>
      @endif
    </div>
    
    @if ($popularPosts->count() > 0)
    <hr>
    <h6 class="sidebar-title">Top posts</h6>
      @foreach ($popularPosts as $popularPost)
      <a class="media text-default align-items-center mb-5" href="{{ URL::to('blog/post/' . $popularPost->url ); }}">
        <img class="rounded w-65px mr-4" src="{{  asset('storage') .'/'. $popularPost->image }}" alt="{{ $popularPost->title }}">
        <p class="media-body small-2 lh-4 mb-0"><?php str_limit($popularPost->title, 70); ?></p>
      </a>
      @endforeach
    @endif
    

    {{-- <a class="media text-default align-items-center mb-5" href="blog-single.html">
      <img class="rounded w-65px mr-4" src="">
      <p class="media-body small-2 lh-4 mb-0"></p>
    </a> --}}

    <hr>

    <h6 class="sidebar-title">{{ ($blog_content->description_heading) ? $blog_content->description_heading : 'About Us' }}</h6>
    <p class="small-3">{{ ($blog_content->description) ? $blog_content->description : 'INTECH marks our unique authenticity by training our students with industry related exercises and up-to-date knowledge.' }}</p>


  </div>