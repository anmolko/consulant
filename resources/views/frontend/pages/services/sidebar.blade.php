<div class="widget-area">
    <div class="recent-posts">
        <div class="widget-title">
            <h3 class="title">Recent Services</h3>
        </div>
        @foreach($latestServices as $index => $latest)
            <div class="recent-post-widget {{ $loop->first ? 'no-border':'' }}">
                <div class="post-img">
                    <a href="{{route('service.single',$latest->slug)}}">
                        <img class="lazy" data-src="{{($latest->banner_image !== null) ? asset('/images/service/thumb/thumb_'.@$latest->banner_image):""}}"
                             alt=""></a>
                </div>
                <div class="post-desc">
                    <a href="{{route('service.single',$latest->slug)}}">
                        {{ucwords(@$latest->title)}} </a>
                    <span class="date-post"> <i class="fa fa-calendar"></i>{{date('j M, Y',strtotime(@$latest->created_at))}} </span>
                </div>
            </div>
        @endforeach
    </div>
</div>
