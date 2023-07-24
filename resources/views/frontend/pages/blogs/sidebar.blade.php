<div class="widget-area">
    <div class="search-widget mb-50">
        <div class="search-wrap">
            <form method="get" id="searchform" action="{{route('searchBlog')}}">
                <input type="search" id="s"
                       name="s" placeholder="Search Blogs.."  class="search-input"
                       oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
                <button type="submit" value="Search"><i class="flaticon-search"></i></button>
            </form>
        </div>
    </div>
    <div class="categories mb-50">
        <div class="widget-title">
            <h3 class="title">Categories</h3>
        </div>
        <ul>
            @foreach(@$bcategories as $bcategory)
                <li><a href="{{route('blog.category',$bcategory->slug)}}">  {{ucwords(@$bcategory->name)}} ({{$bcategory->blogs->count()}})</a></li>
            @endforeach
        </ul>
    </div>
    <div class="recent-posts">
        <div class="widget-title">
            <h3 class="title">Recent Posts</h3>
        </div>
        @foreach($latestPosts as $index => $latest)
            <div class="recent-post-widget {{ $loop->first ? 'no-border':'' }}">
                <div class="post-img">
                    <a href="{{route('blog.single',@$latest->slug)}}">
                        <img class="lazy" data-src="{{(@$latest->image) ? asset('/images/blog/thumb/thumb_'.@$latest->image):''}}"
                                                     alt=""></a>
                </div>
                <div class="post-desc">
                    <a href="{{route('blog.single',@$latest->slug)}}">
                        {{ucwords(@$latest->title)}} </a>
                    <span class="date-post"> <i class="fa fa-calendar"></i>{{date('j M, Y',strtotime(@$latest->created_at))}} </span>
                </div>
            </div>
        @endforeach
    </div>
</div>
