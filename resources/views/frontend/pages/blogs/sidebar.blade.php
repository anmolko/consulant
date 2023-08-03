<div class="sidebar">
    <div class="sidebar__single sidebar__search">
        <form class="sidebar__search-form" method="get" id="searchform" action="{{route('searchBlog')}}">
            <input type="search" name="s" placeholder="Search blogs.."
                   oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
            <button type="submit"><i class="lnr-icon-search"></i></button>
        </form>
    </div>
    <div class="sidebar__single sidebar__category">
        <h3 class="sidebar__title">Categories</h3>
        <ul class="sidebar__category-list list-unstyled">
            @foreach(@$bcategories as $bcategory)
                <li><a href="{{route('blog.category',$bcategory->slug)}}">{{ucwords(@$bcategory->name)}} ({{$bcategory->blogs->count()}}) <span
                            class="icon-right-arrow"></span></a> </li>
            @endforeach
        </ul>
    </div>
    <div class="sidebar__single sidebar__post">
        <h3 class="sidebar__title">Latest Posts</h3>
        <ul class="sidebar__post-list list-unstyled">
            @foreach($latestPosts as $index => $latest)
                <li>
                    <div class="sidebar__post-image"> <img class="lazy" data-src="{{(@$latest->image) ? asset('/images/blog/thumb/thumb_'.@$latest->image):''}}" alt=""> </div>
                    <div class="sidebar__post-content">
                        <h3> <span class="sidebar__post-content-meta"><i
                                    class="fas fa-calendar-alt"></i>{{date('d M Y', strtotime($latest->created_at))}}</span> <a href="{{route('blog.single',@$latest->slug)}}">
                                {{ucwords(@$latest->title)}}</a>
                        </h3>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
